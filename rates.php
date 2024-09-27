<?php
session_start();
header('Content-Type: application/json');
$con = new mysqli("localhost", "analytics_ratecard", "Ha[PT]VtXyXb", "analytics_ratecard");

// Check connection
if ($con->connect_error) {
    http_response_code(500);
    echo json_encode(['result' => 'error', 'message' => 'Database connection failed']);
    exit;
}

$courier_code=['EK'=>'Ekart','ECOM'=>'Ecom Express','XB'=>'Xpressbees','DLV'=>'Delhivery','DTDC'=>'DTDC','AMZ'=>'Amazon','SFX'=>'Shadowfax','BD'=>'Bluedart'];


if(!isset($_POST['csrf']) || $_POST['csrf']!=$_SESSION['csrf'])
{
    header("HTTP/1.0 404 Not Found");
}

$pickup_pincode = $_POST['pickup-pincode'];
$delivery_pincode = $_POST['delivery-pincode'];
$dead_weight = $_POST['weight'];
$length = $_POST['dimension-l'];
$breadth = $_POST['dimension-w'];
$height = $_POST['dimension-h'];
$order_value = $_POST['shipValue'];
$mode = $_POST['payment-type'];


if (!$pickup_pincode || !$delivery_pincode || !$dead_weight || !$length || !$breadth || !$height || !$order_value || !$mode) {
    http_response_code(400);
    echo json_encode(['result' => 'error', 'message' => 'Missing required parameters']);
    exit;
}

$chargeable_wt=max($dead_weight,($length*$breadth*$height)/5000);



$min_weight=0.5;
$add_weight=CEIL(($chargeable_wt-0.5)/0.5);

if($chargeable_wt>=2 && $chargeable_wt<5)
{
    $min_weight=2;
	$add_weight=CEIL($chargeable_wt-2);
}
else if($chargeable_wt>=5 && $chargeable_wt<10)
{
    $min_weight=5;
	$add_weight=CEIL($chargeable_wt-5);
}
else if($chargeable_wt>=10)
{
    $min_weight=10;
	$add_weight=CEIL($chargeable_wt-10);
}

$query=mysqli_query($con,"select * from rs_postcode where pincode IN ('{$pickup_pincode}')");
if (mysqli_num_rows($query) != 1) {
    $data['result'] = "error";
    $data['message'] = "Pincode(s) not serviceable";
    $data['invalid_pincode'] = "pickup";  // Mark the invalid pincode
    echo json_encode($data);
    die();
} 

$query=mysqli_query($con,"select * from rs_postcode where pincode IN ('{$delivery_pincode}')");
if (mysqli_num_rows($query) != 1) {
    $data['result'] = "error";
    $data['message'] = "Pincode(s) not serviceable";
    $data['invalid_pincode'] = "delivery";  // Mark the invalid pincode
    echo json_encode($data);
    die();
}

//get Zone
// $query=mysqli_query($con,"select * from rs_postcode where pincode IN ('{$pickup_pincode}','{$delivery_pincode}')");
// if (mysqli_num_rows($query) != 2) {
//     http_response_code(400);
//     echo json_encode(['result' => 'error', 'message' => 'Pincode(s) not serviceable']);
//     exit;
// }

$postcode = [];
while($data=mysqli_fetch_array($query))
{
    $postcode[$data['pincode']]['city']=$data['city_name'];
    $postcode[$data['pincode']]['state']=$data['state'];
    $postcode[$data['pincode']]['region']=$data['region'];
    $postcode[$data['pincode']]['local']=$data['local'];
    $postcode[$data['metro']]['region']=$data['metro'];
    
}
$zone="";

if($postcode[$pickup_pincode]['city']==$postcode[$delivery_pincode]['city']) 
	$zone='A';
else if($postcode[$pickup_pincode]['region'] == 5 || $postcode[$delivery_pincode]['region'] == 5) 
	$zone='E';
else if($postcode[$pickup_pincode]['local'] == $postcode[$delivery_pincode]['local'] && $postcode[$pickup_pincode]['local'] > 0)
	$zone='A';
else if(($postcode[$pickup_pincode]['region'] == $postcode[$delivery_pincode]['region']) && $postcode[$pickup_pincode]['region'] != 5 )
	$zone='B';
else if ($postcode[$pickup_pincode]['metro'] == 1 && $postcode[$delivery_pincode]['metro'] == 1) 
	$zone='C';
else
    $zone='D'; // Default case

switch($zone)
{
	case 'A' : $edd_air=2; $edd_surface=2; break;
	case 'B' : $edd_air=3; $edd_surface=3; break;
	case 'C' : $edd_air=3; $edd_surface=4; break;
	case 'D' : $edd_air=4; $edd_surface=5; break;
	case 'E' : $edd_air=7; $edd_surface=7; break;
	default : $edd_air=3; $edd_surface=4; 
}

$fwd='zone'.$zone;
$add='add'.$zone;

//fetch rates
$query=mysqli_query($con,"select parent_code,mode,$fwd,$add, cod, codper from ratecard where min_weight='{$min_weight}' AND rate_type='Normal' ");
if (mysqli_num_rows($query) == 0) {
    http_response_code(400);
    echo json_encode(['result' => 'error', 'message' => 'Serviceable courier(s) not found']);
    exit;
}

$result = [];


while($data=mysqli_fetch_array($query))
{
   
   $i=$courier_code[$data['parent_code']]." ".$data['mode'];
	$result[$i]['code']=$courier_code[$data['parent_code']]." ".$data['mode'];
	$result[$i]['mode']=$data['mode'];
	$result[$i]['fwd']=$data[$fwd];
	$result[$i]['add']=$data[$add];
	$result[$i]['cod']=$data['cod'];
	$result[$i]['codper']=$data['codper'];
	$result[$i]['fr_prepaid']=$result[$i]['fwd']+$add_weight*$result[$i]['add'];
	$result[$i]['fr_cod']=max($result[$i]['cod'],($order_value*$result[$i]['codper'])/100);
	$freight=($mode=="prepaid"?	$result[$i]['fr_prepaid']:	$result[$i]['fr_prepaid']+$result[$i]['fr_cod']);
	$result[$i]['total_freight']='₹'.number_format((float)($freight*1.2), 2, '.', '');

}



$surface_icon="<i class='fas fa-truck'></i>";
$air_icon="<img src='https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/icon/flightsmode.svg' alt=''>";


foreach ($result as $results) {
    $icon=($results['mode']=="Surface"?$surface_icon:$air_icon);
    $data[] = [
        'courier' => $results['code'],
        'mode' => strtolower($results['mode']),
        'weight' => $chargeable_wt,
        'rate' => $results['total_freight'],
        'edd' => ($results['mode']=="Surface"?$edd_surface:$edd_air)." Days",
        'icon' => $icon
    ];
}

echo json_encode($data);
// echo json_encode(['test' => 'success']);
// print_r($data);
?>
<?php
session_start();
header('Content-Type: application/json');

$api_url = 'https://api.rapidshyp.com/seller/get_order_shipment_tracking_master';
$authorization = 'Bearer 504ozsIs7uJZNvR5XKCxy0acjQBRG51OLSepiwelckbljgbj4i';

if(isset($_POST['csrf']) && $_POST['csrf']==$_SESSION['csrf'])
{
    $order_id = isset($_POST['order_id']) ? $_POST['order_id'] : null;
    $mobile_no = isset($_POST['mobile_no']) ? $_POST['mobile_no'] : null;
    $awb_no = isset($_POST['awb_no']) ? $_POST['awb_no'] : null;

    $data = array();

    if ($order_id && $mobile_no) {
        $data = array(
            "seller_order_id" => $order_id,
            "contact" => $mobile_no
        );
    } elseif ($awb_no) {
        $data = array(
            "awb" => $awb_no
        );
    }

    $options = array(
        CURLOPT_URL => $api_url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_CONNECTTIMEOUT => 10, // time to wait to establish a connection (in seconds)
        CURLOPT_TIMEOUT => 30,  
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            "Authorization: $authorization"
        ),
    );

    $ch = curl_init();
    curl_setopt_array($ch, $options);
    
    $response = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if ($httpcode === 200) {
        echo $response;
    } else {
        echo json_encode(array('success' => false, 'message' => 'Invalid order ID or AWB number.'));
    }
    
    

    curl_close($ch);
}
else
echo json_encode(array('success' => false, 'message' => 'Invalid Request'));
?>

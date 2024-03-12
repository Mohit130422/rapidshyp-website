<?php


$con = mysqli_connect("localhost", "rapidshyp_test", "0;;8[O_N4;J{", "rapidshyp_test");
    date_default_timezone_set('Asia/Kolkata');

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$error=0;
$output=array();
$content="";

function checktime($epochTime)
{
    return 1; //IVR calls received at any time will qualify

    date_default_timezone_set('Asia/Kolkata');
    $dateTime = (new DateTime())->setTimestamp($epochTime);

     // Get day of the week (1 for Monday, 7 for Sunday)
    $dayOfWeek = $dateTime->format('N');
    
    if ($dayOfWeek == 7)
    {
        return 1;
    }
    // Create DateTime objects for 7 PM and 9 AM on the same day
    $time7pm = clone $dateTime;
    $time7pm->setTime(19, 0, 0); // 7 PM
    
    $time9amNextDay = clone $dateTime;
    $time9amNextDay->setTime(9, 0, 0); // 9 AM
    
    // Adjust 9 AM to the next day if the current time is past 7 PM
    if ($dateTime >= $time7pm) {
        $time9amNextDay->modify('+1 day');
    }
    
    // Check if the current time is between 7 PM and 9 AM the next day
    if ($dateTime >= $time7pm || $dateTime < $time9amNextDay) {
        return 1;
    } 
   
}

if(isset($_GET['key']) && $_GET['key']=='cb39d436dc8dad92779a267dd5594144935e56fadb354b8a5b0e50919202ef741d67b0d11d6d83ee143db8d80be4d0f1')
{
    $phone=$_GET['phone'];
    $status=$_GET['status_log'];
    $recording=$_GET['recording'];
    $call_start=$_GET['call_start'];
    
  // error_log(serialize($_GET));
    
    if($status=="missed" && checktime($call_start))
    {
         // Read the input stream
        $content="Phone : ".$phone."\n Status : ".$status."\n Recording URL : ".$recording;
        mysqli_query($con,"insert into tawk (source,chat) VALUES ('Myoperator','{$content}') ") or error_log("Unable to update");
         
            //submit to CRM
           $enterpriseId = '65bb94080e54fd06691430c8';
            $token = '6583a7ed-a7fd-4f20-8fe1-091c9357315e1707219064798:5355a46d-2468-430d-9acd-ae844914d78c';
            
            $url = "https://api.telecrm.in/enterprise/${enterpriseId}/autoupdatelead";
            
            // The data you want to send via POST
            $data = [
                'fields' => [
                    'name' => 'Call',
                    'phone' => $phone,
                    'Leda' => 'IVR-Missed'
                ],
                'actions' => [
                    [
                        'type' => 'SYSTEM_NOTE',
                        'text' => 'Call Missed on IVR. Call Recording : '.$recording,
                    ],
                ],
            ];
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Authorization: Bearer ' . $token,
                'Content-Type: application/json',
            ]);
            $response = curl_exec($ch);
            if (curl_errno($ch)) {
                $error=1;
                $errormsg.='cURL error: ' . curl_error($ch);
            } else {
                
                // Print the response if no errors occurred
            }
            curl_close($ch); 
        
    }    


} 

?>
<?php

header("Access-Control-Allow-Origin: https://staging.rapidshyp.in");
header("Access-Control-Allow-Headers: Content-Type, Authorization");


$con = mysqli_connect("localhost", "rapidshyp_test", "0;;8[O_N4;J{", "rapidshyp_test");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$error=0;
$output=array();
$content="";
//&& parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST)=="www.rapidshyp.com"

if ($_SERVER['CONTENT_TYPE'] === 'application/json') {
    // Read the input stream
    $jsonContent = file_get_contents("php://input");
    $payload=json_decode($jsonContent,true);
    
   //check input key
   if(isset($payload['key']))
   {
       $newhash=hash_hmac('sha256', $payload['key'], 'cb39d436dc8dad92779a267dd5594144935e56fadb354b8a5b0e50919202ef741d67b0d11d6d83ee143db8d80be4d0f1');
       
       if(hash_equals($newhash, $payload['access_key']))
       {
           if((time()-$payload['key'])/3600 > 0.5)
           {
               $error=1;
               $errormsg.="Spam Input. Try Again";
           }
           
       }
       else
       {
           $error=1;
            $errormsg.="Spam Input. Try Again";
       }
 
        foreach($payload as $key=>$value)
        {
            if($key=='access_key' || $key=='key')
                continue;
            else
                $content.=$key." : ".$value." \n";
        }
        $name=htmlspecialchars($payload['name']);
        $email=htmlspecialchars($payload['email']);
        $phone=htmlspecialchars($payload['phone']);
        
        mysqli_query($con,"insert into tawk (source,chat) VALUES ('Website','{$content}') ") or error_log("Unable to update");
         
        //submit to CRM
        $enterpriseId = '65bb94080e54fd06691430c8';
        $token = '6583a7ed-a7fd-4f20-8fe1-091c9357315e1707219064798:5355a46d-2468-430d-9acd-ae844914d78c';
        
        $url = "https://api.telecrm.in/enterprise/${enterpriseId}/autoupdatelead";
        
        // The data you want to send via POST
        $data = [
            'fields' => [
                'name' => $name,
                'phone' => $phone,
                'email' => $email,
                'Lead Source' => 'Website'
            ],
            'actions' => [
                [
                    'type' => 'SYSTEM_NOTE',
                    'text' => 'Lead Source: Website',
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
if($error==0)
{
    $output['success']=1;
    $output['message']='We will reach back to you';
}
else
{
   $output['error']=1;
   $output['message']=$errormsg;
}

echo json_encode($output);
?>
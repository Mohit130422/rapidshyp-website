
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
        
        $additionalInfo="";
        if(isset($payload['company']))
            $additionalInfo.="Company Name: ".htmlspecialchars($payload['company']);
        if(isset($payload['count']))
            $additionalInfo.=" Monthly Shipment Count: ".htmlspecialchars($payload['count']);
        
        mysqli_query($con,"insert into tawk (source,chat) VALUES ('Website','{$content}') ") or error_log("Unable to update");
         
        //submit to CRM
        $enterpriseId = '65bb94080e54fd06691430c8';
        $token = '6583a7ed-a7fd-4f20-8fe1-091c9357315e1707219064798:5355a46d-2468-430d-9acd-ae844914d78c';
        
        $url = "https://api.telecrm.in/enterprise/${enterpriseId}/autoupdatelead";
        
        $utm_source="";
        $utm_medium="";
        $utm_campaign="";
        $utm_content="";
        $utm_term="";
        $first_utm_source="";
        $first_utm_medium="";
        $first_utm_campaign="";
        $first_utm_content="";
        $first_utm_term="";
        $referrer="";
        $initial_referrer="";
        $lastvisitedpage="";
        $landingpage="";
        
        if(isset($_COOKIE['latest_utm']))
        {
            $utm=json_decode($_COOKIE['latest_utm'],true);
            $utm_source=(isset($utm['utm_source'])?$utm['utm_source']:"");
            $utm_medium=(isset($utm['utm_medium'])?$utm['utm_medium']:"");
            $utm_campaign=(isset($utm['utm_campaign'])?$utm['utm_campaign']:"");
            $utm_content=(isset($utm['utm_content'])?$utm['utm_content']:"");
            $utm_term=(isset($utm['utm_term'])?$utm['utm_term']:"");
            
            
        }
        if(isset($_COOKIE['first_utm']))
        {
            $futm=json_decode($_COOKIE['first_utm'],true);
            $first_utm_source=(isset($futm['utm_source'])?$futm['utm_source']:"");
            $first_utm_medium=(isset($futm['utm_medium'])?$futm['utm_medium']:"");
            $first_utm_campaign=(isset($futm['utm_campaign'])?$futm['utm_campaign']:"");
            $first_utm_content=(isset($futm['utm_content'])?$futm['utm_content']:"");
            $first_utm_term=(isset($futm['utm_term'])?$futm['utm_term']:"");
            
            
        }

        if(isset($_COOKIE['referrer']))
            $referrer=(isset($_COOKIE['referrer'])?$_COOKIE['referrer']:"");
        
        if(isset($_COOKIE['initial_referrer']))
            $initial_referrer=(isset($_COOKIE['initial_referrer'])?$_COOKIE['initial_referrer']:"");

        if(isset($_COOKIE['last_visited_page']))
            $lastvisitedpage=(isset($_COOKIE['last_visited_page'])?$_COOKIE['last_visited_page']:"");

        if(isset($_COOKIE['landing_page']))
            $landingpage=(isset($_COOKIE['landing_page'])?$_COOKIE['landing_page']:"");

        // The data you want to send via POST
        $data = [
            'fields' => [
                'name' => $name,
                'phone' => $phone,
                'email' => $email,
                'Lead Source' => 'Website',
                'utmsource' => $utm_source,
                'utmmedium' => $utm_medium,
                'utmcampaign' => $utm_campaign, 
                'utmcontent' => $utm_content, 
                'utmterm' => $utm_term, 
                'firstutmsource' => $first_utm_source,
                 'firstutmmedium' => $first_utm_medium,
                 'firstutmcampaign' => $first_utm_campaign,
                 'firstutmcontent' => $first_utm_content,
                 'firstutmterm' => $first_utm_term,
                 'referrer' => $referrer,
                 'initialreferrer' => $initial_referrer,
                 'lastvisitedpage' => $lastvisitedpage,
                 'landingpage' => $landingpage,
                'Company Name' => (isset($payload['company'])?$payload['company']:""),
                'Shipment Volume Form' => (isset($payload['count'])?$payload['count']:""),
                'Website' => (isset($payload['website'])?$payload['website']:"")
            ],
            'actions' => [
                [
                    'type' => 'SYSTEM_NOTE',
                    'text' => 'Lead Source: Website. '.$additionalInfo,
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
        // print_r($response);
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
    $output['message']='Thanks for your enquiry. One of our shipping advisor will call you within 24 hours.';
}
else
{
   $output['error']=1;
   $output['message']=$errormsg;
}

echo json_encode($output);
?>

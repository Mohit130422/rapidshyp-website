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
        $companyName=htmlspecialchars(($payload['company']));
        $websitelink=htmlspecialchars(($payload['website']));
        $shippmentCount=$payload['count'];
        
        $additionalInfo="";
        if(isset($payload['company']))
            $additionalInfo.="Company Name: ".htmlspecialchars($payload['company']);
        if(isset($payload['count']))
            $additionalInfo.=" Monthly Shipment Count: ".htmlspecialchars($payload['count']);
        
        mysqli_query($con,"insert into tawk (source,chat) VALUES ('Website','{$content}') ") or error_log("Unable to update");
         
        
        $utm_source="";
        $utm_medium="";
        $utm_campaign="";
        $utm_content="";
        $utm_term="";
        $latest_device="";
        $first_utm_source="";
        $first_utm_medium="";
        $first_utm_campaign="";
        $first_utm_content="";
        $first_utm_term="";
        $first_device="";
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
            $latest_device=(isset($utm['device'])?$utm['device']:"");
            
        }
        if(isset($_COOKIE['first_utm']))
        {
            $futm=json_decode($_COOKIE['first_utm'],true);
            $first_utm_source=(isset($futm['utm_source'])?$futm['utm_source']:"");
            $first_utm_medium=(isset($futm['utm_medium'])?$futm['utm_medium']:"");
            $first_utm_campaign=(isset($futm['utm_campaign'])?$futm['utm_campaign']:"");
            $first_utm_content=(isset($futm['utm_content'])?$futm['utm_content']:"");
            $first_utm_term=(isset($futm['utm_term'])?$futm['utm_term']:"");
            $first_device=(isset($futm['device'])?$futm['device']:"");
            
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
                'latestdevice' => $latest_device, 
                'firstutmsource' => $first_utm_source,
                 'firstutmmedium' => $first_utm_medium,
                 'firstutmcampaign' => $first_utm_campaign,
                 'firstutmcontent' => $first_utm_content,
                 'firstutmterm' => $first_utm_term,
                 'firstdevice' => $first_device,
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

// kylas lead create API
$api_key = '0c5970e5-be5c-47dc-b156-ef20f8ebd5aa:17061'; // Enter your API Key here
$countryCode = 'IN';
$dialCode = '+91';
 
$kylasapi_data = array(
    "firstName" => $name,
    "lastName" => '',
    'phoneNumbers' => array(array(
      "type" => "MOBILE",
      "code" => $countryCode, //or Add IN as default for India (IN, SA, US, UK, etc)
      "value" => $phone,
      "dialCode" => $dialCode, //or Add 91 as default for India (91, 27, 1, 44, etc)
      "primary" => true
    )),
    'emails' => array(array(
      "type" => "OFFICE",
      "value" => $email,
      "primary" => true
    )),
);
 $kylasapi_data['companyName']= $companyName;
 $kylasapi_data['customFieldValues']['cfWebsite']= $websitelink;
 $kylasapi_data['customFieldValues']['cfShipmentVolumeForm']= $shippmentCount;

 $sourceId = 2222787;
//Lead Source can be mapped in below path, uncomment below line if needed to pass, don't pass null value, source only accepts integer value (get this from Kylas dashboard through source picklist).
$kylasapi_data['source'] = (int)$sourceId;
 
//Product Id can be mapped in below path, uncomment below line if needed to pass, don't pass null value, product only accepts integer value (get this from Kylas dashboard through product picklist).
// $kylasapi_data['products']=array(array('id'=>(int)$productId));
 
//If you have created any custom fields in CRM, you can pass the values in below path, uncomment below line if needed to pass, don't pass null value., Change the CUSTOM_FIELD_NAME1, CUSTOM_FIELD_NAME2, etc with the actual custom field names.
// $kylasapi_data['customFieldValues']=array("cfHowManyOrdersDoYouReceiveInAMonth"=>(int)$shipmentCountCode);
 
//if you want to map utm fields, you can pass the values in below path, uncomment below line if needed to pass, don't pass null value.
 
if ($utm_source){
    $kylasapi_data['utmSource'] = $utm_source;
}
if ($utm_medium){
    $kylasapi_data['utmMedium'] = $utm_medium;
}
if ($utm_campaign){
    $kylasapi_data['utmCampaign'] = $utm_campaign;
}
if ($utm_term){
    $kylasapi_data['utmTerm'] = $utm_term;
}
if ($utm_content){
    $kylasapi_data['utmContent'] = $utm_content;
}
if ($first_utm_source){
    $kylasapi_data['customFieldValues']['cfFirstUtmSource'] = $first_utm_source;
}
if ($first_utm_medium){
    $kylasapi_data['customFieldValues']['cfFirstUtmMedium'] = $first_utm_medium;
}
if ($first_utm_campaign){
    $kylasapi_data['customFieldValues']['cfFirstUtmCampaign'] = $first_utm_campaign;
}
if ($first_utm_term){
    $kylasapi_data['customFieldValues']['cfFirstUtmTerm'] = $first_utm_term;
}
if ($first_utm_content){
    $kylasapi_data['customFieldValues']['cfFirstUtmContent'] = $first_utm_content;
}
if ($referrer){
    $kylasapi_data['customFieldValues']['cfReferrer'] = htmlspecialchars($referrer);
}
if ($initial_referrer){
    $kylasapi_data['customFieldValues']['cfInitialReferrer'] = htmlspecialchars($initial_referrer);
}
if ($landingpage){
    $kylasapi_data['customFieldValues']['cfLandingPage'] = htmlspecialchars($landingpage);
}
if ($lastvisitedpage){
    $kylasapi_data['customFieldValues']['cfLastVisitedPage'] = htmlspecialchars($lastvisitedpage);
}
// API Execution
// echo '<pre>';print_r($kylasapi_data);die;
$curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => 'https://api.kylas.io/v1/leads/',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => '',
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => 'POST',
CURLOPT_POSTFIELDS => json_encode($kylasapi_data), //Here we passed the payload by converting it into JSON format
CURLOPT_HTTPHEADER => array(
  'api-key: '. $api_key, // API KEY Here
  'Content-Type: application/json',
  'Accept: application/json'
),
));
$response = curl_exec($curl); //This variable will contain the Kylas API response
curl_close($curl);
// echo '<pre>';print_r($response);die;
echo json_encode($output);
?>

<?php
// kylas lead create API
$api_key = 'API_KEY'; // Enter your API Key here
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$countryCode = $_POST['countryCode'];
$dialCode = $_POST['dialCode'];
 
$kylasapi_data = array(
    "firstName" => '',
    "lastName" => $name,
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

if($shippmentCount=='Setting up new Business'){
  $shipmentCountCode =2194805;
}
 
//Lead Source can be mapped in below path, uncomment below line if needed to pass, don't pass null value, source only accepts integer value (get this from Kylas dashboard through source picklist).
// $kylasapi_data['source'] = (int)$sourceId;
 
//Product Id can be mapped in below path, uncomment below line if needed to pass, don't pass null value, product only accepts integer value (get this from Kylas dashboard through product picklist).
// $kylasapi_data['products']=array(array('id'=>(int)$productId));
 
//If you have created any custom fields in CRM, you can pass the values in below path, uncomment below line if needed to pass, don't pass null value., Change the CUSTOM_FIELD_NAME1, CUSTOM_FIELD_NAME2, etc with the actual custom field names.
// $kylasapi_data['customFieldValues']=array("CUSTOM_FIELD_NAME1"=>"Value1","CUSTOM_FIELD_NAME1"=>"Value2");
 
//if you want to map utm fields, you can pass the values in below path, uncomment below line if needed to pass, don't pass null value.
 
// if ($utmSource){
//     $kylasapi_data['utmSource'] = $utmSource;
// }
// if ($utmMedium){
//     $kylasapi_data['utmMedium'] = $utmMedium;
// }
// if ($utmCampaign){
//     $kylasapi_data['utmCampaign'] = $utmCampaign;
// }
// if ($utmTerm){
//     $kylasapi_data['utmTerm'] = $utmTerm;
// }
 
// API Execution
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
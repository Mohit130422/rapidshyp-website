<?php

$con = mysqli_connect("localhost", "rapidshyp_test", "0;;8[O_N4;J{", "rapidshyp_test");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['CONTENT_TYPE'] === 'application/json') {
    // Get the raw POST data
    $jsonContent = file_get_contents("php://input");

    // Decode the JSON data
    $data = json_decode($jsonContent, true);

    if ($data) {
       

            $chat=serialize($data);
            
            mysqli_query($con,"insert into tawk (source,chat) VALUES ('Tawk.to-MissedChat','{$chat}') ") or error_log("Unable to update");
            
            $name=$data['name'];
            $email=$data['email'];
            $phone=$data['phone'];
            $purpose="";
            $comment="";
            foreach ($data['questions'] as $question) {
                $label = $question['label'];
                $answer = $question['answer'];
                if($label=="Purpose of Contact")
                    $purpose=$answer;
                if($label=="How can we Help you?")
                    $comment=$answer;
               
            }

            
            if($purpose=="Sales")
            {
                //submit to CRM
                $enterpriseId = '65bb94080e54fd06691430c8';
                $token = '6583a7ed-a7fd-4f20-8fe1-091c9357315e1707219064798:5355a46d-2468-430d-9acd-ae844914d78c';
                
                $url = "https://api.telecrm.in/enterprise/{$enterpriseId}/autoupdatelead";
                
                // The data you want to send via POST
                $data = [
                    'fields' => [
                        'name' => $name,
                        'phone' => $phone,
                        'email' => $email,
                        'lead_source' => 'OfflineChat'
                    ],
                    'actions' => [
                        [
                            'type' => 'SYSTEM_NOTE',
                            'text' => 'Comments: '.$comment,
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

      
    } else {
        // Handle error: JSON data could not be decoded or is not valid
        http_response_code(400); // Bad Request
        error_log("Error: Invalid JSON data");
    }
} else {
    // Handle error: incorrect content type
    http_response_code(415); // Unsupported Media Type
    error_log("Error: Content-Type is not application/json");
}




?>
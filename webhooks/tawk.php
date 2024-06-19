<?php

const WEBHOOK_SECRET ='cb39d436dc8dad92779a267dd5594144935e56fadb354b8a5b0e50919202ef741d67b0d11d6d83ee143db8d80be4d0f1';

function verifySignature($body, $signature) {
    $digest = hash_hmac('sha1', $body, WEBHOOK_SECRET);
    
    // Use hash_equals to prevent timing attacks
    return hash_equals($digest, $signature);
}

if (isset($_SERVER['HTTP_X_TAWK_SIGNATURE'])) {
    $payload = file_get_contents('php://input');
    $signature = $_SERVER['HTTP_X_TAWK_SIGNATURE'];
    if (!verifySignature($payload, $signature)) {
        // Verification failed
        http_response_code(403); // Send a forbidden status

        exit;
    }
    // Proceed with processing the verified request
} else {
    // Signature header not found
    http_response_code(400); // Bad request
    exit;
}

//Add code to test out flow

$con = mysqli_connect("localhost", "rapidshyp_test", "0;;8[O_N4;J{", "rapidshyp_test");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$chat=json_decode($payload, true);
$chat=serialize($chat);

mysqli_query($con,"insert into tawk (source,chat) VALUES ('Tawk.to',{$chat}') ") or error_log("Unable to update");


?>
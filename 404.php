<?php
http_response_code(404);
http_response_code(500);
include 'header-section.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found</title>
    <style>
        body {background-color: #3E1A51; text-align: center; padding: 50px; height:100vh;}
        h1 { font-size: 48px; color: #fff; margin-bottom: 8px;}
        p { font-size: 18px; color: #fff; margin-bottom: 8px;}
    </style>
</head>
<body>
    <h1>404 - Page Not Found</h1>
    <p>Oops! The page you are looking for doesn’t exist.</p>
    <a href="/" style="color: #fff; text-decoration: underline;">Return to Homepage</a>
</body>
</html>

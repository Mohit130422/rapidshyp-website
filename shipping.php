<?php
// Capture the city names from the URL parameters
$fromCity = isset($_GET['from']) ? ucfirst($_GET['from']) : 'Mumbai';  // Default 'from' city is Mumbai
$toCity = isset($_GET['to']) ? ucfirst($_GET['to']) : 'Delhi';         // Default 'to' city is Delhi

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shipping Rates from <?php echo htmlspecialchars($fromCity); ?> to <?php echo htmlspecialchars($toCity); ?></title>
    <meta name="description" content="Check out the shipping rates from <?php echo htmlspecialchars($fromCity); ?> to <?php echo htmlspecialchars($toCity); ?>.">
</head>
<body>
    <h1>Shipping Rates from <?php echo htmlspecialchars($fromCity); ?> to <?php echo htmlspecialchars($toCity); ?></h1>

    <p>
        You are viewing the shipping rates from <strong><?php echo htmlspecialchars($fromCity); ?></strong> 
        to <strong><?php echo htmlspecialchars($toCity); ?></strong>.
    </p>

    <p>
        Try entering a different URL like: 
        <a href="/shipping-rates-from-mumbai-to-bangalore/">Mumbai to Bangalore</a> or 
        <a href="/shipping-rates-from-kolkata-to-chennai/">Kolkata to Chennai</a>or 
        <a href="/shipping-rates-from-goa-to-bali/">Goa to Bali</a>or 
        <a href="/shipping-rates-from-lakshdeep-to-srilanka/">LakshDeep to Srilanka</a>or 
        <a href="/shipping-rates-from-england-to-america/">England to America</a>or 
        <a href="/shipping-rates-from-shyamu-to-ramu/">Shyamu to Ramu</a>or 
        <a href="/shipping-rates-from-gurgaon-to-noida/">Gurgaon to Noida</a>.
    </p>
</body>
</html>

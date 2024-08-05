<?php
header('Content-Type: application/json');

$data = [
    ['courier' => 'DTDC Surface', 'mode' => 'surface', 'weight' => '0.5', 'rate' => '₹27.90', 'edd' => '2 Days', 'icon' => '<i class="fas fa-truck"></i>'],
    ['courier' => 'Shadowfax Surface', 'mode' => 'surface', 'weight' => '0.5', 'rate' => '₹28.50', 'edd' => '2 Days', 'icon' => '<i class="fas fa-truck"></i>'],
    ['courier' => 'DTDC Air', 'mode' => 'air', 'weight' => '0.5', 'rate' => '₹28.50', 'edd' => '2 Days', 'icon' => '<img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/icon/flightsmode.svg" alt="">'],
    ['courier' => 'Ekart Surface', 'mode' => 'surface', 'weight' => '0.5', 'rate' => '₹28.60', 'edd' => '2 Days', 'icon' => '<i class="fas fa-truck"></i>'],
    ['courier' => 'Amazon Surface', 'mode' => 'surface', 'weight' => '0.5', 'rate' => '₹33.00', 'edd' => '2 Days', 'icon' => '<i class="fas fa-truck"></i>'],
    ['courier' => 'Ecom Express Surface', 'mode' => 'surface', 'weight' => '0.5', 'rate' => '₹34.00', 'edd' => '3 Days', 'icon' => '<i class="fas fa-truck"></i>'],
    ['courier' => 'Xpressbees Air', 'mode' => 'air', 'weight' => '0.5', 'rate' => '₹36.00', 'edd' => '2 Days', 'icon' => '<img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/icon/flightsmode.svg" alt="">'],
    ['courier' => 'Delhivery Surface', 'mode' => 'surface', 'weight' => '0.5', 'rate' => '₹36.50', 'edd' => '3 Days', 'icon' => '<i class="fas fa-truck"></i>'],
    ['courier' => 'Delhivery Air', 'mode' => 'air', 'weight' => '0.5', 'rate' => '₹36.50', 'edd' => '3 Days', 'icon' => '<img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/icon/flightsmode.svg" alt="">'],
    ['courier' => 'Xpressbees Surface', 'mode' => 'surface', 'weight' => '0.5', 'rate' => '₹37.00', 'edd' => '3 Days', 'icon' => '<i class="fas fa-truck"></i>'],
    ['courier' => 'Shadowfax Surface', 'mode' => 'surface', 'weight' => '0.5', 'rate' => '₹37.05', 'edd' => '2 Days', 'icon' => '<i class="fas fa-truck"></i>'],
];

echo json_encode($data);
?>

<?php
echo '<?xml version="1.0" encoding="UTF-8"?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<url>
  <loc>https://www.rapidshyp.com/</loc>
  <lastmod>2024-03-18T13:09:23+00:00</lastmod>
  <priority>1.00</priority>
</url>
<url>
  <loc>https://www.rapidshyp.com/privacy</loc>
  <lastmod>2024-03-18T13:09:23+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.rapidshyp.com/tnc</loc>
  <lastmod>2024-03-18T13:09:23+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.rapidshyp.com/shipping-return-policy</loc>
  <lastmod>2024-03-18T13:09:23+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.rapidshyp.com/features</loc>
  <lastmod>2024-05-13T13:09:23+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.rapidshyp.com/shipment-tracking</loc>
  <lastmod>2024-06-20T06:57:45+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.rapidshyp.com/blog</loc>
  <lastmod>2024-03-18T13:09:23+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.rapidshyp.com/shipping-rate-calculator</loc>
  <lastmod>2024-12-19T13:08:44+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.rapidshyp.com/volumetric-weight-calculator</loc>
  <lastmod>2024-12-19T13:08:44+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.rapidshyp.com/channel-integrations/shopify</loc>
  <lastmod>2024-12-19T13:08:44+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.rapidshyp.com/new-year-2025</loc>
  <lastmod>2024-12-19T13:08:44+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.rapidshyp.com/shipping-rates-from-delhi-to-mumbai</loc>
  <lastmod>2024-12-23T18:08:44+00:00</lastmod>
  <priority>0.80</priority>
</url>';
$con = new mysqli("localhost", "analytics_ratecard", "Ha[PT]VtXyXb", "analytics_ratecard");
// Check connection
if ($con->connect_error) {
    http_response_code(500);
    echo json_encode(['result' => 'error', 'message' => 'Database connection failed']);
    exit;
}
$query=mysqli_query($con,"select city_name from citylist");
$citylist=array();
while($data=mysqli_fetch_array($query))
{
    $citylist[]=$data['city_name'];
}

$citylist2=$citylist;
foreach($citylist as $value)
{
    foreach($citylist2 as $value2)
    {
        echo '<url>' . PHP_EOL;
        echo '<loc>https://www.rapidshyp.com/shipping-rates-from-'.$value.'-to-'.$value2.'</loc>' . PHP_EOL;
        echo '<lastmod>'.date('Y-m-d\TH:i:sP').'</lastmod>' . PHP_EOL;
        echo '<priority>0.80</priority>' . PHP_EOL;
        echo '</url>' . PHP_EOL;
    }
}

echo '</urlset>';
?>
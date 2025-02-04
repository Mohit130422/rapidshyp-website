<?php 
include 'header-section.php';
// $con = new mysqli("localhost", "analytics_ratecard", "Ha[PT]VtXyXb", "analytics_ratecard");

// // Check connection
// if ($con->connect_error) {
//     http_response_code(500);
//     echo json_encode(['result' => 'error', 'message' => 'Database connection failed']);
//     exit;
// }

$fromCity = isset($_GET['from']) ? ucfirst($_GET['from']) : 'delhi';  // Default 'from' city is Mumbai
$toCity = isset($_GET['to']) ? ucfirst($_GET['to']) : 'mumbai';         // Default 'to' city is Delhi

// $fromPincode="";
// $toPincode="";

// $query=mysqli_query($con,"SELECT city_name, pincode FROM rs_postcode WHERE city_name LIKE '%{$fromCity}%' OR city_name LIKE '%{$toCity}%' GROUP BY city_name, pincode ORDER BY city_name, pincode LIMIT 2");
// while($data=mysqli_fetch_array($query))
// {
//     if (stripos($data['city_name'], $fromCity) !== false) 
//         $fromPincode=$data['pincode'];
//     else if (stripos($data['city_name'], $toCity) !== false) 
//         $toPincode=$data['pincode'];
// }

// if(empty($fromPincode) || empty($toPincode))
// header("HTTP/1.0 404 Not Found");

?>
<!-- <meta property="og:image" content="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/feature-og.png"> -->
<meta property="og:title" content="Courier/Shipping rates from <?php echo htmlspecialchars($fromCity); ?> to <?php echo htmlspecialchars($toCity); ?> - RapidShyp" />
<meta name="title" content="Courier/Shipping rates from <?php echo htmlspecialchars($fromCity); ?> to <?php echo htmlspecialchars($toCity); ?> - RapidShyp" />
<meta name="description" content="Looking for the shipping rates from <?php echo htmlspecialchars($fromCity); ?> to <?php echo htmlspecialchars($toCity); ?>? Use our shipping rate calculator to get courier charges instantly.">
<link rel="canonical" href="https://www.rapidshyp.com/Shipping Rates from <?php echo htmlspecialchars($fromCity); ?> to <?php echo htmlspecialchars($toCity); ?>" />
<title>Courier/Shipping rates from <?php echo htmlspecialchars($fromCity); ?> to <?php echo htmlspecialchars($toCity); ?> - RapidShyp</title>

</head>

<body>
    <?php include 'header.php';?>

    <section class="hero-area-bg feature ship-rates">
        <div id="hero-area" class="hero-area d-block">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 text-center">
                        <div class="contents">
                            <h1 class="head-title feature-title">Estimate Shipping Rates From <br><mark><span class="f-capitalize"><?php echo htmlspecialchars($fromCity); ?></span> to <span class="f-capitalize"><?php echo htmlspecialchars($toCity); ?></span></mark></h1>
                            <p class="description">Looking to calculate courier charges from <span class="f-capitalize"><?php echo htmlspecialchars($fromCity); ?></span> to <span class="f-capitalize"><?php echo htmlspecialchars($toCity); ?></span>? Find the lowest <br> shipping rates for your orders and get reliable courier services with just a few clicks.</p>
                        </div>
                        <div class="join-us mb-2">
                            <button type="submit" class="solid-action-btn showrates">Show Rates</button>
                        </div>
                    </div>
                </div>
            </div>
            <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/shiprate-hero-img.png" alt="" width="100%">
        </div>
    </section>

    <section class="rateCalculator shipratesCalculator" id="rateCal">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-10 col-sm-12 text-center">
                    <h3 class="heading text-center"><span class="f-capitalize"><?php echo htmlspecialchars($fromCity); ?></span> to <span class="f-capitalize"><?php echo htmlspecialchars($toCity); ?></span> Shipping Rate Calculator</h3>
                    <p class="sub-heading">Use our FREE tool to get accurate pricing based on package weight, dimensions, payment mode, shipment value, pickup location and delivery location. Whether you're sending out one package or handling bulk shipments, get an instant estimate of shipping rates.</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-md-12 col-lg-8 col-sm-12">
                            <form class="shipment-form" id="shiprateForm">
                                <input type="hidden" name="csrf" id="csrf" value="<?=$rand?>">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="pickup-pincode">Pick-up Area Pincode</label>
                                            <input type="text" id="pickup-pincode" name="pickup-pincode" value="<?=(empty($fromPincode)?"110001":$fromPincode)?>"
                                             maxlength="6" required>
                                            <small>Error Message</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="delivery-pincode">Delivery Area Pincode</label>
                                            <input type="text" id="delivery-pincode" name="delivery-pincode" value="<?=(empty($toPincode)?"400001":$toPincode)?>"
                                                maxlength="6" required>
                                            <small>Error Message</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="weight">Volumetric Weight (KG)</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" aria-describedby="basic-addon2"
                                                    id="weight" name="weight" value="0.5" required>
                                                <span class="input-group-text" id="basic-addon2">KG</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="payment-type">Payment Type</label>
                                            <div class="payment-options">
                                                <label for="prepaid" class="radio pricing">
                                                    <div class="selection d-flex align-items-center">
                                                        <input type="radio" class="radio-input" id="prepaid"
                                                            name="payment-type" value="prepaid" required checked>
                                                        <div class="radio-outline"></div>
                                                        Prepaid
                                                    </div>
                                                </label>
                                                <label for="cod" class="radio pricing">
                                                    <div class="selection d-flex align-items-center">
                                                        <input type="radio" class="radio-input" id="cod"
                                                            name="payment-type" value="cod" required>
                                                        <div class="radio-outline"></div>
                                                        Cash On Delivery
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row d-none">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="shipValue">Shipment Value</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control"
                                                    aria-describedby="basic-addon2" id="shipValue" name="shipValue" value="1000" required>
                                                <span class="input-group-text" id="basic-addon2">₹</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="dimension">Dimension (LWH)</label>
                                            <div class="d-flex">
                                                <div class="input-group margin-r">
                                                    <input type="number" class="form-control"
                                                        aria-describedby="basic-addon2" id="dimension-l" value="10"
                                                        name="dimension-l" required>
                                                    <span class="input-group-text" id="basic-addon2">CM</span>
                                                </div>
                                                <div class="input-group margin-r">
                                                    <input type="number" class="form-control"
                                                        aria-describedby="basic-addon2" id="dimension-w" value="10"
                                                        name="dimension-w" required>
                                                    <span class="input-group-text" id="basic-addon2">CM</span>
                                                </div>
                                                <div class="input-group">
                                                    <input type="number" class="form-control"
                                                        aria-describedby="basic-addon2" id="dimension-h" value="10"
                                                        name="dimension-h" required>
                                                    <span class="input-group-text" id="basic-addon2">CM</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <input type="submit" class="solid-action-btn calculate-btn">Calculate Now</input> -->
                                <input type="submit" class="solid-action-btn calculate-btn disabled" value="Calculate Now" disabled>
                                <button type="reset" class="reset-btn">Reset</button>
                            </form>
                        </div>
                        <div class="col-md-12 col-lg-4 col-sm-12 p-0 d-flex align-items-center">
                            <div class="illustration">
                                <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-rateCal-img.png"
                                    alt="Illustration">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="errorMessage" style="color: red; text-align:center; display:none;"></div>
                <div class="rateLoader">Loading</div>
                <div class="col-lg-12 mb-5">
                    <div class="rateTable" id="rateResult">
                        <div class="head">
                            <div class="btn-group" role="group" aria-label="Radio toggle buttons">
                                <input type="radio" class="btn-check" name="options" id="all" autocomplete="off"
                                    checked>
                                <label class="btn btn-outline-primary" for="all">All</label>

                                <input type="radio" class="btn-check" name="options" id="air" autocomplete="off">
                                <label class="btn btn-outline-primary" for="air">Air</label>

                                <input type="radio" class="btn-check" name="options" id="surface" autocomplete="off">
                                <label class="btn btn-outline-primary" for="surface">Surface</label>
                            </div>
                        </div>
                        <div class="table-responsive mt-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Courier Partner</th>
                                        <th>Mode</th>
                                        <th>Chargeable Weight (KG)</th>
                                        <th>
                                            Shipping Rates
                                            <button type="button"><i class="fas fa-info-circle"></i><span
                                                    class="tooltips">Pricing is subjective to change as per the
                                                    applicable plan.</span></button>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="rateTableBody">
                                    <!-- Data will be populated here -->
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex align-items-center justify-content-center pt-4">
                            <button class="solid-action-btn getRates openWaitlistModal">Get Full Rates</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ready-to-explore shipping-features">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 col-sm-12 text-center">
                    <h3 class="heading text-center">Optimise Your Courier Charges With RapidShyp</h3>
                    <p class="sub-heading">Save big on your eCommerce shipments from <span class="f-capitalize"><?php echo htmlspecialchars($fromCity); ?></span> to <span class="f-capitalize"><?php echo htmlspecialchars($toCity); ?></span> utilising our cost-effective shipping platform.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel owl-theme" id="shiprates-carousel" >
                        <div class="item">
                            <div class="icon">
                                <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/icon/delivery-boy.svg" alt="">
                            </div>
                            <div class="card">
                                <div class="body">
                                    <strong>15+ Delivery <br> Partners</strong>
                                    <p>Choose a courier that meets your needs at your preferred shipping rates</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="icon">
                                <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/icon/chat-bot.svg" alt="">
                            </div>
                            <div class="card">
                                <div class="body">
                                    <strong>AI-Based  <br> Assistance</strong>
                                    <p>Simplify your courier selection with intelligent recommendations</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="icon">
                                <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/icon/shield.svg" alt="">
                            </div>
                            <div class="card">
                                <div class="body">
                                    <strong>Shipment Security <br> Shield</strong>
                                    <p>Stay prepared against an unlikely event of in-transit damage and loss</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="icon">
                                <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/icon/return-box.svg" alt="">
                            </div>
                            <div class="card">
                                <div class="body">
                                    <strong>Return To Origin <br> (RTO) Prevention</strong>
                                    <p>Minimise RTO losses and keep your expenses in control</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <button type="submit" class="solid-action-btn openWaitlistModal">Get Started</button>
                </div>
            </div>
        </div>
    </section>

    <section class="blogs shipping-suggestion">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <p class="heading">Suggested Reads</p>
                    <p class="sub-heading">Read our blog to learn more about shipping costs</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 mb-5">
                    <div class="card blog-post">
                        <div class="head">
                            <img src="https://www.rapidshyp.com/blog/wp-content/uploads/2024/10/RS-Blog_26-02-02-1024x536.jpg"
                                alt="">
                        </div>
                        <div class="body">
                            <p class="content">How to Calculate Freight Rate? Explained in Detail</p>
                        </div>
                        <div class="footer">
                            <a href="https://www.rapidshyp.com/blog/how-to-calculate-freight-rate/"
                                target="_blank">Read Now <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-5">
                    <div class="card blog-post">
                        <div class="head">
                            <img src="https://www.rapidshyp.com/blog/wp-content/uploads/2024/04/reduce-shipping-cost-1024x538.png"
                                alt="">
                        </div>
                        <div class="body">
                            <p class="content">10 Proven Tips To Reduce Shipping Costs For eCommerce Businesses</p>
                        </div>
                        <div class="footer">
                            <a href="https://www.rapidshyp.com/blog/reduce-shipping-rates/"
                                target="_blank">Read Now <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-5">
                    <div class="card blog-post">
                        <div class="head">
                            <img src="https://www.rapidshyp.com/blog/wp-content/uploads/2024/04/ecom-delivery-partner-1024x538.png"
                                alt="">
                        </div>
                        <div class="body">
                            <p class="content">How To Choose The Right eCommerce Delivery Partner For Your Small Business</p>
                        </div>
                        <div class="footer">
                            <a href="https://www.rapidshyp.com/blog/how-to-choose-ecommerce-delivery-partner/"
                                target="_blank">Read Now <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ready-to-explore track-experience get-shipping-rates">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <p class="heading">Get Shipping Rates Across India</p>
                </div>
            </div>
            <div class="row align-items-center col-reverse">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="/shipping-rates-from-delhi-to-mumbai" class="solid-action-btn" >Shipping rates from <b>Delhi</b> to <b>Mumbai</b> <i class="fas fa-arrow-up"></i></a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="/shipping-rates-from-bangalore-to-delhi" class="solid-action-btn" >Shipping rates from <b>Bangalore </b> to <b>Delhi</b> <i class="fas fa-arrow-up"></i></a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="/shipping-rates-from-chennai-to-surat" class="solid-action-btn" >Shipping rates from <b>Chennai</b> to <b>Surat</b> <i class="fas fa-arrow-up"></i></a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="/shipping-rates-from-kolkata-to-hyderabad" class="solid-action-btn" >Shipping rates from <b>Kolkata</b> to <b>Hyderabad</b> <i class="fas fa-arrow-up"></i></a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="/shipping-rates-from-mumbai-to-pune" class="solid-action-btn" >Shipping rates from <b>Mumbai</b> to <b>Pune</b> <i class="fas fa-arrow-up"></i></a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="/shipping-rates-from-surat-to-hyderabad" class="solid-action-btn" >Shipping rates from <b>Surat</b> to <b>Hyderabad</b> <i class="fas fa-arrow-up"></i></a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="/shipping-rates-from-pune-to-bangalore" class="solid-action-btn" >Shipping rates from <b>Pune</b> to <b>Bangalore</b> <i class="fas fa-arrow-up"></i></a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="/shipping-rates-from-kolkata-to-delhi" class="solid-action-btn" >Shipping rates from <b>Kolkata</b> to <b>Delhi</b> <i class="fas fa-arrow-up"></i></a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="/shipping-rates-from-pune-to-delhi" class="solid-action-btn" >Shipping rates from <b>Pune</b> to <b>Delhi</b> <i class="fas fa-arrow-up"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="ready-to-explore track-experience get-best-courier">
        <div class="container">
            <div class="row align-items-center col-reverse">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h3 class="heading mb-0">Get the Best Courier <br> Service from <span class="f-capitalize"><?php echo htmlspecialchars($fromCity); ?></span> <br>to <span class="f-capitalize"><?php echo htmlspecialchars($toCity); ?></span></h3>
                    <p class="sub-heading">Provide a premium customer experience at the most affordable shipping rates, starting at just ₹21/500gm.</p>
                    <p> <b>No platform fee, no hidden charges.</b></p>
                    <button type="submit" class="solid-action-btn" onclick="window.open('https://app.rapidshyp.com/');" style="border-radius: 12px;">Sign-up for Free</button>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="image">
                        <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/track-experience.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php';?>


    <script src="assets/js/main.js"></script>
    <script src="assets/js/ship-rates.js?1500"></script>
    <script src="assets/js/utm.js"></script>
</body>

</html>
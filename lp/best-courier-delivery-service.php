<?php 
session_start();
$rand=mt_rand(11111111,99999999);;
$_SESSION['csrf']=$rand;
include 'header-section-v2.php';?>
<meta name="robots" content="noindex">
<meta name="googlebot" content="noindex">
<meta property="og:title" content="Courier Delivery Service | Shipping Solution in India - RapidShyp" />
<meta name="title" content="Courier Delivery Service | Shipping Solution in India - RapidShyp" />
<link rel="canonical" href="https://www.rapidshyp.com/lp/best-courier-delivery-service" />
<title>Courier Delivery Service | Shipping Solution in India - RapidShyp</title>

</head>

<body>
    <?php include 'top-strip.php'; ?>
    <section class="signup-section" id="signup">
        <div class="container-fluid">
            <div class="head">
                <span class="navbar-brand"><img
                        src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/Logo.svg" alt="Logo"></span>
            </div>
            <div class="row col-reverse">
                <div class="col-lg-7 col-md-5 col-sm-12 content">
                    <div class="body">
                        <h1 class="heading">Streamline Your Business<br> With the Best Courier Delivery Service</h1>
                        <p class="sub-heading">Your Trusted eCommerce Logistics Partner </p>
                        <ul class="usp-points">
                            <li><i class="fas fa-check-circle"></i> Courier Recommendation Engine</li>
                            <li><i class="fas fa-check-circle"></i> Xperience Suite</li>
                            <li><i class="fas fa-check-circle"></i> Automated NDR Workflows</li>
                            <li><i class="fas fa-check-circle"></i> RTO Reduction Upto 40%</li>
                        </ul>
                    </div>
                    <div class="footer">
                        <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/signup/sign-up.png"
                            alt="rs-signup-img">
                    </div>
                </div>
                <div class="col-lg-5 col-md-7 col-sm-12 signup-form">
                    <ul class="nav" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link lp-nav-link d-flex active" data-toggle="tab" href="#tabs-1" role="tab" aria-selected="true">
                                <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/signup/seller-icon.png">
                                <div class="tab_tittle">
                                    <h6>For Sellers </h6>
                                    <small>Sign up with a FREE account</small>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link lp-nav-link d-flex" data-toggle="tab" href="#tabs-2" role="tab" aria-selected="false">
                                <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/signup/buyer-icon.png">
                                <div class="tab_tittle">
                                    <h6>For Buyers</h6>
                                    <small>Track your order instantly</small>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="form-container">
                        <div class="head">
                            <h3>Get started with a free account</h3>
                            <p class="mb-3">Discover the best shipping service for your eCommerce business</p>
                        </div>
                        <div id="auth-container"></div>
                    </div>
                    <div class="track-container">
                        <div class="head">
                            <h3>Track By</h3>
                        </div>
                        <form id="lookupForm">
                            <input type="hidden" id='csrf' name="csrf" value="<?=$rand?>">
                            <div class="form-group">
                                <label for="trackByAWB" class="radio pricing">
                                    <div class="selection d-flex align-items-center">
                                        <input type="radio" class="radio-input" id="trackByAWB" name="lookupType" value="awb_no" checked>
                                        <div class="radio-outline"></div>
                                        AWB
                                    </div>
                                </label>
                                <label for="trackByOrderId" class="radio pricing">
                                    <div class="selection d-flex align-items-center">
                                        <input type="radio" class="radio-input" id="trackByOrderId" name="lookupType" value="order_id">
                                        <div class="radio-outline"></div>
                                        Order ID
                                    </div>
                                </label>

                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div id="orderInput" class="row">
                                        <div class="col-12 text-start">
                                            <label>Order ID <span>*</span></label>
                                            <input type="text" placeholder="Enter Order ID" id="order_id">
                                        </div>
                                        <div class="col-12 text-start">
                                            <label>Mobile Number <span>*</span></label>
                                            <input type="text" placeholder="Enter Phone Number" id="mobile_no">
                                        </div>
                                    </div>
                                    <div id="awbInput" class="hidden">
                                        <label>Airway Bill Number (AWB) <span>*</span></label>
                                        <input type="text" placeholder="Enter AWB Number" id="awb_no">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <button type="submit" class="btn solid-action-btn">Submit</button>
                                </div>
                            </div>
                        </form>
                        <div class="ship-loading">Loading</div>
                        <div id="responseMessage"></div>
                        
                        <div class="tracking-table hidden">
                            <div class="order-info">
                                <p>Order Placed On: <span id="order-date"></span></p>
                                <p class="mx-4">Order ID: <span id="order-id"></span></p>
                            </div>
                            <div class="table-responsive">
                                <table class="table" id="trackingTable">
                                    <thead>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="what-makes-better hero-area pannel-partners" id="features">
        <div class="floating-elements">
            <ul class="background">
                <li><img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/signup/plus.svg" alt="">
                </li>
                <li><img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/signup/plus.svg" alt="">
                </li>
                <li><img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/signup/plus.svg" alt="">
                </li>
            </ul>
        </div>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="heading">Intelligent. Smart. Real.</h2>
                    <p class="sub-heading">Drive your business growth with AI-enabled SmartSelect. Choose from 15+
                        courier partners</p>
                </div>
                <div class="partners">
                    <div class="toggle-container">
                        <input type="radio" id="couriers" name="toggle" checked>
                        <label for="couriers" class="toggle-button">Couriers</label>
                        <input type="radio" id="channels" name="toggle">
                        <label for="channels" class="toggle-button">Channels</label>
                    </div>
                </div>
                <div class="col-12 ">
                    <div class="content" id="courier">
                        <div class="owl-carousel owl-theme" id="courier-slide">
                            <div class="imgDesk"><img
                                    src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/ship-opt5.png"
                                    alt="Ekart"></div>
                            <div class="imgDesk"><img
                                    src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/ship-opt1.png"
                                    alt="Delhivery"></div>
                            <div class="imgDesk"><img
                                    src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/ship-opt2.png"
                                    alt="Ecom Express"></div>
                            <div class="imgDesk"><img
                                    src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/ship-opt3.png"
                                    alt="DTDC"></div>
                            <div class="imgDesk"><img
                                    src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/ship-opt6.png"
                                    alt="Shadowfax"></div>
                            <div class="imgDesk"><img
                                    src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/ship-opt4.png"
                                    alt="xpressbees"></div>
                        </div>
                    </div>
                    <div class="content hidden" id="channel">
                        <div class="owl-carousel owl-theme" id="channel-slide">
                            <div class="imgDesk">
                                <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/ship-opt7.png"
                                    alt="Ekart">
                            </div>
                            <div class="imgDesk">
                                <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/ship-opt8.png"
                                    alt="Delhivery">
                            </div>
                            <div class="imgDesk">
                                <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/ship-opt9.png"
                                    alt="Ecom Express">
                            </div>
                            <div class="imgDesk">
                                <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/ship-opt10.png"
                                    alt="Ecom Express">
                            </div>
                            <div class="imgDesk">
                                <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/ship-opt11.png"
                                    alt="Ecom Express">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ready-to-explore hook-rehook">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <h3 class="heading">Hook. Rehook. Hold. </h3>
                    <p class="sub-heading">Enhance brand recall with a branded tracking page Highlight your brand logo,
                        banners, offers, and more</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="item">
                        <div class="card pink">
                            <div class="icon">
                                <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/hook1.png"
                                    alt="">
                            </div>
                            <div class="body">
                                <strong>Feature Your Top-Picks</strong>
                                <p>Cross-sell and upsell products with targeted display banners</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="item">
                        <div class="card yellow">
                            <div class="icon">
                                <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/hook2.png"
                                    alt="">
                            </div>
                            <div class="body">
                                <strong>Amplify Repeat Business</strong>
                                <p>Navigate Buyers Back with Tailored Menus</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="item">
                        <div class="card pink">
                            <div class="icon">
                                <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/hook3.png"
                                    alt="">
                            </div>
                            <div class="body">
                                <strong>Capture Buyer Insights</strong>
                                <p>Measure Satisfaction with Net Promoter Score</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hook-rehook embrace-the-growth">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-8 col-md-12 col-sm-12 text-center">
                    <h3 class="heading">Embrace The Growth Beyond RTOs With The Best Courier Services</h3>
                    <p class="sub-heading">Who likes return orders? Climb growth trajectory with slashed RTO rates</p>
                </div>
            </div>
            <div class="row mt-5 align-items-center justify-content-center">
                <div class="col-10">
                    <div class="row align-items-center wrapper col-reverse">
                        <div class="col-lg-6 col-md-6 col-sm-12 text-start">
                            <div class="info">
                                <h5 class="heading">Transparent Tracking</h5>
                                <p>Give greater transparency to buyers via WhatsApp, SMS and Email</p>
                                <button type="submit" class="solid-action-btn get-start">Get Started</button>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div>
                                <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/rtos1.png"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 align-items-center justify-content-center">
                <div class="col-10">
                    <div class="row align-items-center wrapper">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div>
                                <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/rtos2.png"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 text-start">
                            <div class="info">
                                <h5 class="heading">COD Orders and Address Confirmation</h5>
                                <p>Improve your profitability and delivery performance with order related
                                    confirmations from buyers</p>
                                <button type="submit" class="solid-action-btn get-start">Get Started</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row mt-5 align-items-center justify-content-center">
                <div class="col-10">
                    <div class="row align-items-center wrapper col-reverse">
                        <div class="col-lg-6 col-md-6 col-sm-12 text-start">
                            <div class="info">
                                <h5 class="heading">Automated NDR Workflows </h5>
                                <p>Manage undelivered orders with ease</p>
                                <button type="submit" class="solid-action-btn get-start">Get Started</button>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div>
                                <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/rtos3.png"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5 align-items-center">
                <div class="col-lg-8 col-md-12 col-sm-12 text-center">
                    <h3 class="heading">Why Choose RapidShyp's eCommerce Courier Services?</h3>
                    <p class="sub-heading">Incredible Features For Effortless Last Mile Courier Services</p>
                </div>
            </div>
            <div class="row mt-5 align-items-center justify-content-center">
                <div class="grids col-10">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 text-center">
                            <div class="grip info">
                                <span class="imgdesk">
                                    <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/ctrl01.svg"
                                        alt="">
                                </span>
                                <p class="title">Unified Dashboard</p>
                                <small>View all your orders, shipments, reports, returns, and more in one place</small>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 text-center">
                            <div class="grip info">
                                <span class="imgdesk yellow">
                                    <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/ctrl02.svg"
                                        alt="">
                                </span>
                                <p class="title">29,000+ Pin Codes</p>
                                <small>From the heart of cities to the soul of villages, deliver PAN India</small>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 text-center">
                            <div class="grip info">
                                <span class="imgdesk">
                                    <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/ctrl03.svg"
                                        alt="">
                                </span>
                                <p class="title">Economical Shipping Rates</p>
                                <small>Start economical shipping at ₹21/500gms</small>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 text-center">
                            <div class="grip info">
                                <span class="imgdesk yellow">
                                    <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/ctrl04.svg"
                                        alt="">
                                </span>
                                <p class="title">Splendid OMS</p>
                                <small>Procure orders, create invoices and schedule pickups in a few minutes.</small>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 text-center">
                            <div class="grip info">
                                <span class="imgdesk">
                                    <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/ctrl05.svg"
                                        alt="">
                                </span>
                                <p class="title">Shipping Rate Calculator</p>
                                <small>Calculate shipping charges before shipping based on the distance and
                                    mode.</small>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 text-center">
                            <div class="grip info">
                                <span class="imgdesk yellow">
                                    <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/ctrl06.svg"
                                        alt="">
                                </span>
                                <p class="title">RapidCOD</p>
                                <small>Maintain cash flow with two-day remittance</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="owl-carousel owl-theme grip" id="feature-slide">
                        <div class="grip info">
                            <span class="imgdesk">
                                <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/ctrl01.svg"
                                    alt="">
                            </span>
                            <p class="title">Unified Dashboard</p>
                            <small>View all your orders, shipments, reports, returns, and more in one place</small>
                        </div>
                        <div class="grip info">
                            <span class="imgdesk yellow">
                                <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/ctrl02.svg"
                                    alt="">
                            </span>
                            <p class="title">29,000+ Pin Codes</p>
                            <small>From the heart of cities to the soul of villages, deliver PAN India</small>
                        </div>
                        <div class="grip info">
                            <span class="imgdesk">
                                <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/ctrl03.svg"
                                    alt="">
                            </span>
                            <p class="title">Economical Shipping Rates</p>
                            <small>Start economical shipping at ₹21/500gms</small>
                        </div>
                        <div class="grip info">
                            <span class="imgdesk yellow">
                                <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/ctrl04.svg"
                                    alt="">
                            </span>
                            <p class="title">Splendid OMS</p>
                            <small>Procure orders, create invoices and schedule pickups in a few minutes.</small>
                        </div>
                        <div class="grip info">
                            <span class="imgdesk">
                                <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/ctrl05.svg"
                                    alt="">
                            </span>
                            <p class="title">Shipping Rate Calculator</p>
                            <small>Calculate shipping charges before shipping based on the distance and
                                mode.</small>
                        </div>
                        <div class="grip info">
                            <span class="imgdesk yellow">
                                <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/ctrl06.svg"
                                    alt="">
                            </span>
                            <p class="title">RapidCOD</p>
                            <small>Maintain cash flow with two-day remittance</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="brand mb-4">
                        <span><img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/Logo.svg"
                                alt=""></span>
                    </div>
                    <p class="mb-4">An eCommerce shipping platform offering logistics automation, multi-carrier
                        shipping, real-time tracking, and NDR management, ensuring efficient order fulfillment and
                        reduced costs.</p>
                    <div class="social-media mb-4 d-none">
                        <p>Follow Us On:</p>
                        <span><i
                                class="fab fa-instagram"></i></span>
                        <span><i
                                class="fab fa-linkedin"></i></span>
                        <span><i class="fab fa-facebook"></i></span>
                        <span><img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/icon/x-twitter.svg"
                                alt=""></span>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-6">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6 m-margin-20">
                            <p>Product</p>
                            <div class="links">
                                <span class="link">Order Management System</span>
                                <span class="link">SmartSelect</span>
                                <span class="link">Xperience Suite</span>
                                <span class="link">NDR Management</span>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 m-margin-20">
                            <p>Features</p>
                            <div class="links">
                                <span class="link">Dedicated Shipping Advisors</span>
                                <span class="link">RapidCOD</span>
                                <span class="link">Multi-Carrier Access</span>
                                <span class="link">RTO Reduction</span>
                                <span class="link">Shipment Security</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-6 d-none">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 col-lg-4 m-margin-20">
                            <p>Resources</p>
                            <div class="links">
                                <!-- <a href="https://app.rapidshyp.com" class="link" rel="nofollow">Sign In</a> -->
                                <!-- <a href="https://www.rapidshyp.com/blog/" class="link" rel="nofollow">Blog</a> -->
                                <a href="https://support.rapidshyp.in" class="link">Help Centre</a>
                                <a href="newsroom" class="link">Newsroom</a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-8 col-lg-8 m-margin-20">
                            <p>Contact Us</p>
                            <div class="links">
                                <a href="mailto:support@rapidshyp.com" class="link" target="_blank"><i
                                        class="fas fa-envelope"></i> Support: support@rapidshyp.com</a>
                                <a href="mailto:connect@rapidshyp.com" class="link" target="_blank"><i
                                        class="fas fa-envelope"></i> Sales: connect@rapidshyp.com</a>
                                <a href="tel:7669007700" class="link" target="_blank"><i class="fas fa-phone-alt"></i>
                                    7669007700</a>
                                <a href="https://maps.app.goo.gl/TMc7FNnFvwGYSVVLA" target="_blank" class="link"><i
                                        class="fas fa-map-marker-alt"></i> RapidShyp Head Office <br> 6th Floor, Unitech
                                    Trade Centre <br>Sushant Lok Phase-1, Sector 43 <br>Gurgaon, Haryana -122002</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/footer-img.png" alt="">
    </footer>

    <div class="adlinks">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    &copy; Copyright 2025 <strong><span>RapidShyp</span></strong>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/main.js?v=0.1"></script>
    <script src="../assets/js/iframe-utm.js?v=0.8"></script>
    <script src="https://app.rapidshyp.com/js/campaign.js"></script>
    <script>
    $(".get-start").click(function() {
        $('html, body').animate({
            scrollTop: $("#signup").offset().top
        }, 100);
    });
    $('#courier-slide').owlCarousel({
        loop: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        // autoplayHoverPause:true,
        autoplayTimeout: 4000,
        autoplaySpeed: 4000,
        slideTransition: 'linear',
        dots: false,
        responsive: {
            0: {
                items: 3
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
    $('#channel-slide').owlCarousel({
        loop: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        // autoplayHoverPause:true,
        autoplayTimeout: 4000,
        autoplaySpeed: 4000,
        slideTransition: 'linear',
        dots: false,
        responsive: {
            0: {
                items: 3
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
    $('#feature-slide').owlCarousel({
        margin: 16,
        loop: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        responsive: {
            0: {
                items: 1.2
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
    document.getElementById('couriers').addEventListener('change', function() {
        document.getElementById('courier').style.display = 'block';
        document.getElementById('channel').style.display = 'none';
    });

    document.getElementById('channels').addEventListener('change', function() {
        document.getElementById('channel').style.display = 'block';
        document.getElementById('courier').style.display = 'none';
    });
    </script>
</body>

</html>
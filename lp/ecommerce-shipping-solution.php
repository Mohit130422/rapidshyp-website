<?php 
session_start();
$rand=mt_rand(11111111,99999999);;
$_SESSION['csrf']=$rand;
include 'header-section-v2.php';?>
<meta name="robots" content="noindex">
<meta name="googlebot" content="noindex">
<meta property="og:title" content="eCommerce-shipping-solution- RapidShyp" />
<meta name="title" content="eCommerce-shipping-solution- RapidShyp" />
<link rel="canonical" href="https://www.rapidshyp.com/eCommerce-shipping-solution" />
<title>eCommerce Shipping Solution | Courier Aggregator in India - RapidShyp</title>

</head>

<body>
    <div class="topHeader">
        <p id="countdown"></p>
        <p><strong>Get 10% Cashback* Up to &#8377; 1000</strong>  On Your First Recharge. Use Code: <strong>WELCOME10. </strong>T&C Apply</p>
    </div>
    <section class="signup-section" id="signup">
        <div class="container-fluid">
            <div class="head">
                <a class="navbar-brand" href="/"><img
                        src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/Logo.svg" alt="Logo"></a>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-5 col-sm-12 content">
                    <div class="body">
                        <h1 class="heading">Streamline Your Business With<br> eCommerce Shipping Solution</h1>
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
                <div class="col-lg-6 col-md-7 col-sm-12 signup-form">
                    <div class="form-container">
                        <div class="head">
                            <h3>Get started with a free account</h3>
                            <p class="mb-3">Discover the best shipping service for your eCommerce business</p>
                        </div>
                        <div class="body">
                            <?php $date=time();?>
                            <form class="php-email-form" method="post">
                                <input type="hidden" name="access_key"
                                    value="<?= hash_hmac('sha256', $date, 'cb39d436dc8dad92779a267dd5594144935e56fadb354b8a5b0e50919202ef741d67b0d11d6d83ee143db8d80be4d0f1') ?>">
                                <input type="hidden" name="key" value="<?php echo $date ?>">
                                <input type="hidden" id="form-utms-content" name="content" value="">
                                <input type="hidden" id="form-utms-source" name="source" value="">
                                <input type="hidden" id="form-utms-medium" name="medium" value="">
                                <input type="hidden" id="form-utms-term" name="term" value="">
                                <input type="hidden" id="form-utms-campaign" name="campaign" value="">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="mb-4">
                                            <label for="name" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Enter First Name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="mb-4">
                                            <label for="lastname" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="lastname" name="lastname"
                                                placeholder="Enter Last Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="mb-4">
                                            <label for="company" class="form-label">Company Name</label>
                                            <input type="text" class="form-control" name="company" id="company"
                                                placeholder="Enter Company Name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="mb-4">
                                            <label for="email" class="form-label">Email Address</label>
                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text" id="addon-wrapping"><i
                                                        class="far fa-envelope"></i></span>
                                                <input type="email" class="form-control" name="email" id="email"
                                                    aria-describedby="emailHelp" placeholder="Enter Email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="mb-4">
                                            <label for="phone" class="form-label">Mobile Number</label>
                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text" id="addon-wrapping"><i
                                                        class="fas fa-phone"></i></span>
                                                <input type="number" class="form-control" name="phone" id="phone"
                                                    placeholder="Enter Mobile Number"
                                                    onKeyPress="if(this.value.length==10) return false;" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="mb-4">
                                            <label for="phone" class="form-label">Website Link</label>
                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text" id="addon-wrapping"><i
                                                        class="fas fa-globe"></i></span>
                                                <input type="text" class="form-control" name="website" id="website"
                                                    placeholder="Enter Website Url (optional)">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="mb-4">
                                            <label for="count" class="form-label">How many orders do you receive in a
                                                month?</label>
                                            <select class="form-select" name="count" id="count"
                                                placeholder="--Select option--" required>
                                                <option>--Select option--</option>
                                                <option value="Setting up new Business">Setting up new Business</option>
                                                <option value="Between 1 to 10 Orders">Between 1 to 10 Orders</option>
                                                <option value="11 to 100 Orders">11 to 100 Orders</option>
                                                <option value="101 to 500 Orders">101 to 500 Orders</option>
                                                <option value="501 to 1000 Orders">501 to 1000 Orders</option>
                                                <option value="1000 to 3000 Orders">1000 to 3000 Orders</option>
                                                <option value="More than 3000 Orders">More than 3000 Orders</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="loading">Loading</div>
                                    <div class="error-message">Sorry! Invalid Data</div>
                                    <div class="sent-message">Thank you for showing interest in RapidShyp. Someone from
                                        our team will reach out to you soon!
                                    </div>
                                </div>
                                <div class="row align-items-center justify-content-center text-center">
                                    <div class="col">
                                        <button type="submit" class="solid-action-btn m-0" id="submitEmailForm">Get
                                            Started</button>
                                    </div>
                                </div>
                            </form>
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
            <div class="row justify-content-center">
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
                    <h2 class="heading mb-0">Hook. Rehook. Hold. </h2>
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
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <h3 class="heading">Embrace The Growth Beyond RTOs</h3>
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
                                <h5 class="heading">Automated NDR Workflows</h5>
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
            <div class="row mt-5 justify-content-center align-items-center">
                <div class="col-lg-7 col-md-12 col-sm-12 text-center">
                    <h2 class="heading">Why Choose RapidShyp As Your eCommerce Shipping Partner?</h2>
                    <p class="sub-heading">Incredible Features for Effortless eCommerce Shipping</p>
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
                                <p class="title">26,000+ Pin Codes</p>
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
                                <small>Start economical shipping at ₹25/500gms</small>
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
                            <p class="title">26,000+ Pin Codes</p>
                            <small>From the heart of cities to the soul of villages, deliver PAN India</small>
                        </div>
                        <div class="grip info">
                            <span class="imgdesk">
                                <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/ctrl03.svg"
                                    alt="">
                            </span>
                            <p class="title">Economical Shipping Rates</p>
                            <small>Start economical shipping at ₹25/500gms</small>
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
                        <a href="/"><img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/Logo.svg"
                                alt=""></a>
                    </div>
                    <p class="mb-4">An eCommerce shipping platform offering logistics automation, multi-carrier
                        shipping, real-time tracking, and NDR management, ensuring efficient order fulfillment and
                        reduced costs.</p>
                    <div class="social-media mb-4">
                        <p>Follow Us On:</p>
                        <a href="https://www.instagram.com/rapidshyp" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://in.linkedin.com/company/rapidshyp" target="_blank"><i
                                class="fab fa-linkedin"></i></a>
                        <a href="https://www.facebook.com/rapidshyp" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="https://twitter.com/rapidshyp" target="_blank"><img
                                src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/icon/x-twitter.svg"
                                alt=""></a>
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
                    &copy; Copyright 2024 <strong><span>RapidShyp</span></strong>
                </div>
            </div>
        </div>
    </div>

    <div class="blur-overlay" id="joinWaitlistModal">
        <div class="dialog-box">
            <div class="head">
                <h5>Get Started</h5>
                <div class="close">
                    <i class="fas fa-times"></i>
                </div>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row mb-4">
                        <div class="col-12">
                            <?php $date=time();?>
                            <form class="php-email-form" method="post">
                                <input type="hidden" name="access_key"
                                    value="<?= hash_hmac('sha256', $date, 'cb39d436dc8dad92779a267dd5594144935e56fadb354b8a5b0e50919202ef741d67b0d11d6d83ee143db8d80be4d0f1') ?>">
                                <input type="hidden" name="key" value="<?php echo $date ?>">
                                <input type="hidden" id="form-utms-content" name="content" value="">
                                <input type="hidden" id="form-utms-source" name="source" value="">
                                <input type="hidden" id="form-utms-medium" name="medium" value="">
                                <input type="hidden" id="form-utms-term" name="term" value="">
                                <input type="hidden" id="form-utms-campaign" name="campaign" value="">

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Enter Name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="mb-3">
                                            <label for="company" class="form-label">Company Name</label>
                                            <input type="text" class="form-control" name="company" id="company"
                                                placeholder="Enter Company Name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email address</label>
                                            <input type="email" class="form-control" name="email" id="email"
                                                aria-describedby="emailHelp" placeholder="Enter Email" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Mobile Number</label>
                                            <input type="number" class="form-control" name="phone" id="phone"
                                                placeholder="Mobile Number"
                                                onKeyPress="if(this.value.length==10) return false;" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="mb-3">
                                            <label for="count" class="form-label">How many orders do you receive in a
                                                month?</label>
                                            <select class="form-select" name="count" id="count"
                                                placeholder="--Select option--" required>
                                                <option>--Select option--</option>
                                                <option value="Setting up new Business">Setting up new Business</option>
                                                <option value="Between 1 to 10 Orders">Between 1 to 10 Orders</option>
                                                <option value="11 to 100 Orders">11 to 100 Orders</option>
                                                <option value="101 to 500 Orders">101 to 500 Orders</option>
                                                <option value="501 to 1000 Orders">501 to 1000 Orders</option>
                                                <option value="1000 to 3000 Orders">1000 to 3000 Orders</option>
                                                <option value="More than 3000 Orders">More than 3000 Orders</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="loading">Loading</div>
                                    <div class="error-message">Sorry! Invalid Data</div>
                                    <div class="sent-message">Thank you for showing interest in RapidShyp. Someone from
                                        our team will reach out to you soon!
                                    </div>
                                </div>
                                <div class="row align-items-center justify-content-center text-center">
                                    <div class="col">
                                        <button type="submit" class="solid-action-btn m-0"
                                            id="submitEmailForm">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/main.js"></script>
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
        margin: 14,
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
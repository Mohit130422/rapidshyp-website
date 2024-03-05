<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RapidShyp</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="/assets/images/icon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap.min.css">
    <script src="node_modules/bootstrap.bundle.min.js"></script>
    <script src="node_modules/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <header class="header">       
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="assets/images/Logo.svg" alt="Logo"></a>
                <button class="navbar-toggler" id="ChangeToggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <div id="navbar-close" class="hidden">
                        <i class="fas fa-times"></i>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Product</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="#">Link1</a></li>
                              <li><a class="dropdown-item" href="#">Link2</a></li>
                              <li><a class="dropdown-item" href="#">Link3</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Solution</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="#">Link1</a></li>
                          <li><a class="dropdown-item" href="#">Link2</a></li>
                          <li><a class="dropdown-item" href="#">Link3</a></li>
                        </ul>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Resources</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="#">Link1</a></li>
                          <li><a class="dropdown-item" href="#">Link2</a></li>
                          <li><a class="dropdown-item" href="#">Link3</a></li>
                        </ul>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Company</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="#">Link1</a></li>
                          <li><a class="dropdown-item" href="#">Link2</a></li>
                          <li><a class="dropdown-item" href="#">Link3</a></li>
                        </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
                    </ul>
                    <div class="navbar-nav d-flex">
                        <li class="nav-item btn"><button class="solid-action-btn">Let's Talk <i class="fas fa-chevron-right"></i></button></li></li>
                        <li class="nav-item"><a class="nav-link border-bottom-0" href="#">Sign In</a></li>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <section class="hero-area-bg">
        <div id="hero-area" class="hero-area">
            <div class="floating-elements">
                <ul class="background">
                    <li>Expedited Shipping<img src="assets/images/icon/truck.svg" alt=""></li>
                    <li><img src="assets/images/icon/pink-circle.png" alt=""></li>
                    <li><img src="assets/images/icon/package.svg" alt=""></li>
                    <li><img src="assets/images/icon/yellow-circle.png" alt=""></li>
                    <li>Quick Support <img src="assets/images/icon/support.svg" alt=""></li>
                </ul>
            </div>
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 text-center">
                        <!-- <span class="announce"><img src="assets/images/icon/flash.svg" alt="">Streamline Your Online Shipping Process Like A Pro</span> -->
                        <div class="contents">
                            <h2 class="head-title">Streamline Your Online Shipping <br>Process  Like A Pro</h2>
                            <p class="description">Transform eCommerce shipping with a tech-enabled solution <br>to streamline order fulfillment, integrate everything, save time and cost</p>
                        </div>
                        <div class="join-us">
                            <form action="#" id="submit-button">
                                <input type="text" placeholder="Type Your Email Here" id="useremail" required>
                                <button type="submit" class="solid-action-btn" id="openWaitlistForm"><span>Join The Waitlist</span><img src="assets/images/icon/send.svg" alt=""></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="explore-features">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
                            <div class="row">
                                <div class="col-lg-4 col-xl-4">
                                    <span class="label">Product</span>
                                    <h2 class="title">Delve into our product features </h2>
                                    <div class="carousel-indicators features">
                                        <div type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                            class="active" aria-current="true" aria-label="Slide 1">
                                            <div class="item">
                                                <h5 class="head">Order Management System</h5>
                                                <p class="body">Manage your orders across channels, ensure automated hassle-free processing record-keeping and seamless operations at every step </p>
                                                <!-- <a href="#" class="footer">Explore The Feature <i class="fas fa-arrow-right"></i></a> -->
                                                <div class="scroll-path">
                                                    <span class="progress-bar"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                            aria-label="Slide 2">
                                            <div class="item">
                                                <h5 class="head">Carrier Allocation & Recommendation Engine</h5>
                                                <p class="body">Elevate your shipping game with our cutting-edge AI-backed feature. Our intelligent system analyzes and recommends the best courier partner, optimizing your shipping perfomance for unparalleled efficiency</p>
                                                <div class="scroll-path">
                                                    <span class="progress-bar"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                            aria-label="Slide 3">
                                            <div class="item">
                                                <h5 class="head">CX Suite</h5>
                                                <p class="body">Customize your tracking page with your logo and brand colors, providing customers with a personalized touchpoint that reinforces your brand identity and fosters loyalty at every interaction </p>
                                                <div class="scroll-path">
                                                    <span class="progress-bar"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                            aria-label="Slide 4">
                                            <div class="item">
                                                <h5 class="head">NDR Management</h5>
                                                <p class="body">Tackle non-delivery concerns head-on with our comprehensive feature. Ensure swift resolution of undelivered orders, minimizing costs and disruptions while safeguarding customer satisfaction. Stay ahead with seamless NDR handling </p>
                                                <div class="scroll-path">
                                                    <span class="progress-bar"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xl-8">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="4000" data-bs-pause="false">
                                            <img src="assets/images/dashboard.png" class="dashboard-image d-block m-auto" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="4000" data-bs-pause="false">
                                            <img src="assets/images/dashboard.png" class="dashboard-image d-block m-auto" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="4000" data-bs-pause="false">
                                            <img src="assets/images/dashboard.png" class="dashboard-image d-block m-auto" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="4000" data-bs-pause="false">
                                            <img src="assets/images/dashboard.png" class="dashboard-image d-block m-auto" alt="...">
                                        </div>
                                    </div>
                                </div>                                
                                <div class="join-btn">
                                    <button class="solid-action-btn">Join The Waitlist</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="what-makes-better">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <span class="label">Features</span>
                    <h3 class="heading">Explore the excellence</h3>
                    <p class="sub-heading">Experience enhanced efficiency, heightened productivity, and a greater edge <br> over your competitors with these advanced capabilities.</p>
                    <div class="row mt-5">
                        <div class="col-lg-4 col-md-6 col-6 mb-5">
                            <div class="info">
                                <span class="imgdesk">
                                    <img src="assets/images/icon/icon01.svg" alt="">
                                </span>
                                <p class="title">Dedicated Shipping Advisors</p>
                                <small>Streamline your shipping strategies and swiftly resolve any shipping-related issues</small>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-6 mb-5">
                            <div class="info">
                                <span class="imgdesk yellow">
                                    <img src="assets/images/icon/icon02.svg" alt="">
                                </span>
                                <p class="title">COD Remittance</p>
                                <small>Maintain a regular cash flow with a 2-day COD remittance and scale your operations</small>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-6 mb-5">
                            <div class="info">
                                <span class="imgdesk">
                                    <img src="assets/images/icon/icon03.svg" alt="">
                                </span>
                                <p class="title">Multi-Carrier Integration</p>
                                <small>Access diverse carriers, ensure maximum efficiency with an AI-backed recommendation.</small>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-6 mb-5">
                            <div class="info">
                                <span class="imgdesk yellow">
                                    <img src="assets/images/icon/icon04.svg" alt="">
                                </span>
                                <p class="title">Reduced RTO</p>
                                <small>Say goodbye to costly RTOs. Save significantly with reduced RTO losses by up to 40%</small>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-6 mb-5">
                            <div class="info">
                                <span class="imgdesk">
                                    <img src="assets/images/icon/icon05.svg" alt="">
                                </span>
                                <p class="title">User Management</p>
                                <small>Grant access of different modules to different teams and promote efficient teamwork dynamics</small>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-6 mb-5">
                            <div class="info">
                                <span class="imgdesk yellow">
                                    <img src="assets/images/icon/icon06.svg" alt="">
                                </span>
                                <p class="title">Economical Prices</p>
                                <small>Delight your customers with top-notch services and easy costs on your pockets.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="what-makes-better2">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <span class="label">Solutiton</span>
                    <h3 class="heading">What sets us apart</h3>
                    <p class="sub-heading">Experience enhanced efficiency, heightened productivity, and a greater edge <br> over your competitors with these advanced capabilities.</p>
                </div>
            </div>
            <div class="row mt-5 align-items-center col-reverse">
                <div class="col-lg-6 col-md-6 col-sm-12 mb-5 text-start">
                    <div class="info">
                        <p>Print labels at scale</p>
                        <h5>Delightful Shipping Automation</h5>
                        <p class="mb-3">Save time through automation of process from order placement to delivery confirmation</p>
                        <ul class="p-0">
                            <li><i class="far fa-check-circle"></i>Print customized bulk labels </li>
                            <li><i class="far fa-check-circle"></i>Generate instant invoice </li>
                            <li><i class="far fa-check-circle"></i>Create effortless manifest</li>
                        </ul>
                        <a href="#">Join The Waitlist <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-5 p-3">
                    <div>
                        <img src="assets/images/solution.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row mt-5 align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12 mb-5 p-3">
                    <div>
                        <img src="assets/images/delight.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 pl-5 text-start">
                    <div class="info">
                        <p style="color:#FBBC05">Delight your customers</p>
                        <h5>Easy eCommerce Stores & Marketplaces Integration</h5>
                        <p class="mb-3">Seamlessly integrate without even writing a single line of code</p>
                        <ul class="p-0">
                            <li><i class="far fa-check-circle"></i>Expand reach & simplify growth </li>
                            <li><i class="far fa-check-circle"></i>Auto-sync order in one place</li>
                            <li><i class="far fa-check-circle"></i>Tap into a broader customer base</li>
                        </ul>
                        <a href="#">Join The Waitlist <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row mt-5 align-items-center col-reverse">
                <div class="col-lg-6 col-md-6 col-sm-12 mb-5 text-start">
                    <div class="info">
                        <p>Manage logistics spends</p>
                        <h5>Controlled Logistics Spends</h5>
                        <p class="mb-3">Choose a shipping partner by analyzing the costs beforehand</p>
                        <ul class="p-0">
                            <li><i class="far fa-check-circle"></i>Estimate courier charges instantly</li>
                            <li><i class="far fa-check-circle"></i>Use the free rate calculator</li>
                            <li><i class="far fa-check-circle"></i>Get lowest shipping rates</li>
                        </ul>
                        <a href="#">Join The Waitlist <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-5 p-3">
                    <div>
                        <img src="assets/images/solution.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blogs">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <span class="label">Blog</span>
                    <h3 class="heading">See Our Blog</h3>
                    <p class="sub-heading">Stay current with all the latest information, trends and industry <br> expectation and more. </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-6 mb-5">
                    <div class="card blog-post">
                        <div class="head">
                            <img src="assets/images/post1.png" alt="">
                        </div>
                        <div class="body">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="label">Marketing</span>
                                <span class="time">1 day ago</span>
                            </div>
                            <p class="content">Stay current with all the latest information, trends and industry expectation and more.</p>
                        </div>
                        <div class="footer">
                            <a href="#">Explore the blog <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-5">
                    <div class="card blog-post">
                        <div class="head">
                            <img src="assets/images/post2.png" alt="">
                        </div>
                        <div class="body">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="label">Marketing</span>
                                <span class="time">1 day ago</span>
                            </div>
                            <p class="content">Stay current with all the latest information, trends and industry expectation and more.</p>
                        </div>
                        <div class="footer">
                            <a href="#">Explore the blog <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-5">
                    <div class="card blog-post">
                        <div class="head">
                            <img src="assets/images/post3.png" alt="">
                        </div>
                        <div class="body">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="label">Marketing</span>
                                <span class="time">1 day ago</span>
                            </div>
                            <p class="content">Stay current with all the latest information, trends and industry expectation and more.</p>
                        </div>
                        <div class="footer">
                            <a href="#">Explore the blog <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-5">
                    <div class="card blog-post">
                        <div class="head">
                            <img src="assets/images/post4.png" alt="">
                        </div>
                        <div class="body">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="label">Marketing</span>
                                <span class="time">1 day ago</span>
                            </div>
                            <p class="content">Stay current with all the latest information, trends and industry expectation and more.</p>
                        </div>
                        <div class="footer">
                            <a href="#">Explore the blog <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-5">
                    <div class="card blog-post">
                        <div class="head">
                            <img src="assets/images/post1.png" alt="">
                        </div>
                        <div class="body">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="label">Marketing</span>
                                <span class="time">1 day ago</span>
                            </div>
                            <p class="content">Stay current with all the latest information, trends and industry expectation and more.</p>
                        </div>
                        <div class="footer">
                            <a href="#">Explore the blog <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-5">
                    <div class="card blog-post">
                        <div class="head">
                            <img src="assets/images/post2.png" alt="">
                        </div>
                        <div class="body">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="label">Marketing</span>
                                <span class="time">1 day ago</span>
                            </div>
                            <p class="content">Stay current with all the latest information, trends and industry expectation and more.</p>
                        </div>
                        <div class="footer">
                            <a href="#">Explore the blog <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-5">
                    <div class="card blog-post">
                        <div class="head">
                            <img src="assets/images/post3.png" alt="">
                        </div>
                        <div class="body">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="label">Marketing</span>
                                <span class="time">1 day ago</span>
                            </div>
                            <p class="content">Stay current with all the latest information, trends and industry expectation and more.</p>
                        </div>
                        <div class="footer">
                            <a href="#">Explore the blog <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-5">
                    <div class="card blog-post">
                        <div class="head">
                            <img src="assets/images/post4.png" alt="">
                        </div>
                        <div class="body">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="label">Marketing</span>
                                <span class="time">1 day ago</span>
                            </div>
                            <p class="content">Stay current with all the latest information, trends and industry expectation and more.</p>
                        </div>
                        <div class="footer">
                            <a href="#">Explore the blog <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <span class="label">FAQ</span>
                    <h3 class="heading">Frequently Asked Questions</h3>
                    <p class="sub-heading">Stay current with all the latest information, trends and industry expectation and more. </p>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                What is RapidShyp?
                            </button>
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">RapidShyp is a shipping aggregator platform that empowers businesses to efficiently navigate their shipping needs across diverse carriers and delivery channels. Businesses can seamlessly integrate their shipping operations, access multiple courier services, and streamline the process of sending packages to customers.</div>
                            <div class="accordion-body">RapidShyp aims to simplify logistics management for businesses of all sizes, offering features such as order tracking, label generation, and shipment management to optimize the shipping experience.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                How does RapidShyp work?
                            </button>
                          </h2>
                          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">RapidShyp works by providing a platform where businesses can manage their shipping operations efficiently. It integrates with various courier services, allowing businesses to compare rates, generate shipping labels, track shipments, and streamline the shipping process.</div>
                            <div class="accordion-body">Our AI-enabled carrier selection functionality uses advanced algorithms to analyze various factors such as shipping costs, delivery times, and courier reliability. Based on this analysis, it automatically suggests the most optimal carrier for your shipment, ensuring timely delivery at the best price.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                How can I integrate my eCommerce store with RapidShyp?
                            </button>
                          </h2>
                          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Rapidshyp provides easy-to-use integration tools and plugins for most major eCommerce platforms. Simply follow the step-by-step guide provided on our website, or reach out to our support team for assistance.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                Which courier partners are integrated with RapidShyp?
                              </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">Rapidshyp has partnered with a wide range of leading courier companies in India, including Xpressbees, DTDC, Bluedart, Delhivery, and many more. This ensures that our users have access to the broadest pincode coverage and the best delivery options available.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                How will RapidShyp help in reducing shipping costs?
                              </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">Rapidshyp's Shipping Automation platform offers features such as AI-enabled carrier selection, bulk shipping discounts, and route optimization. These functionalities collectively help businesses reduce operational overheads and avail the best shipping rates.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSix">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                How does RapidShyp calculate shipping charges?
                              </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">Shipping charges are calculated based on factors such as package dimensions, weight, destination, and selected shipping service. RapidShyp provides real-time shipping rates for different carriers. You can check the prices by logging in to your seller's account. Charges are based on volumetric or dead weight, whichever is higher.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSeven">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                Does RapidShyp offer insurance for shipments?
                              </button>
                            </h2>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">RapidShyp offers insurance options for shipments to provide coverage against loss, damage, or theft during transit. We provide coverage up to 3500 INR. We will reimburse the product value or 3500 INR whichever is lower. Sellers can opt for insurance coverage on their own based on their specific requirements. We are working on providing insurance coverage for products whose value is higher than 3500 INR.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingEight">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                What is an Automated Non-Delivery Report (NDR)?
                              </button>
                            </h2>
                            <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">Automated Non-Delivery Report (NDR) Management is a feature that automates the handling of undelivered shipments. Instead of manually sorting through non-deliveries, the system automatically categorizes and takes predefined actions, ensuring faster resolution and improved customer satisfaction.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingNine">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                                How does RapidShyp handle shipping to remote or rural areas?
                              </button>
                            </h2>
                            <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">RapidShyp works with its network of courier partners to reach remote or rural areas. At the same time, delivery times can vary, RapidShyp endeavors to ensure timely and reliable delivery to all locations within its service network.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTen">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                                What would be the pricing of the platform?
                              </button>
                            </h2>
                            <div id="flush-collapseTen" class="accordion-collapse collapse" aria-labelledby="flush-headingTen" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">RapidShyp is free to use for all operating e-commerce sellers irrespective of their current growth phase. You just need to pay freight charges when you ship the order. Other value-added services could be availed by contacting the respective KAM.</div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="ready-to-explore">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h3 class="heading mb-0">Transform your eCommerce <br>Shipping with RapidShyp!</h3>
                    <p class="sub-heading">Simplify logistics, reduce costs, and delight customers with the innovative eCommerce shipping solution.</p>
                    <div class="row mt-4 align-items-center">
                        <div class="col-md-12 col-sm-12 d-flex mb-4">
                            <input type="text" name="" id="" placeholder="Type Your Email Here">
                            <button class="solid-action-btn"><span>Join The Waitlist</span> <img src="assets/images/icon/forward_to_inbox.svg" alt=""></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="image">
                        <img src="assets/images/explore.png" alt="">
                        <span class="note-img"><img src="assets/images/icon/notepad.png" alt=""></span>
                    </div>                    
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="brand mb-4">
                        <a href="#"><img src="assets/images/Logo.svg" alt=""></a>
                    </div>
                    <p class="mb-4">An eCommerce shipping platform offering logistics automation, multi-carrier shipping, real-time tracking, and NDR management, ensuring efficient order fulfillment and reduced costs.</p>
                    <div class="social-media mb-4">
                        <p>Follow Us On:</p>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <p>Product</p>
                            <div class="links">
                                <a href="" class="link">Growth</a>
                                <a href="" class="link">Sales</a>
                                <a href="" class="link">Chat</a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <p>Solution</p>
                            <div class="links">
                                <a href="" class="link">Free Trial</a>
                                <a href="" class="link">Standard</a>
                                <a href="" class="link">Business</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <p>Resources</p>
                            <div class="links">
                                <a href="#" class="link">Personalize</a>
                                <a href="#" class="link">Automation</a>
                                <a href="#" class="link">Invoicing</a>
                                <a href="#" class="link">24/7 Support</a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <p>Company</p>
                            <div class="links">
                                <a href="#" class="link">Open Positions</a>
                                <a href="#" class="link">Part-Time</a>
                                <a href="#" class="link">Contractual</a>
                                <a href="#" class="link">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-4">
                    <p>Pricing</p>
                    <div class="links">
                        <a href="" class="link">Open Positions</a>
                        <a href="" class="link">Part-Time</a>
                        <a href="" class="link">Contractual</a>
                        <a href="" class="link">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <img src="assets/images/footer-img.png" alt="">
    </footer>
    
    <div class="blur-overlay" id="joinWaitlistModal">
        <div class="dialog-box">
            <div class="head">
                <h5>Join The Waitlist</h5>
                <div class="close">
                    <i class="fas fa-times"></i>
                </div>
            </div>
            <div class="content" >
                <div class="container">
                    <div class="row mb-4">
                        <div class="col-12">
                        <?php $date=time();?>
                            <form class="php-email-form" method="post">
                                <input type="hidden" name="access_key" value="<?= hash_hmac('sha256', $date, 'cb39d436dc8dad92779a267dd5594144935e56fadb354b8a5b0e50919202ef741d67b0d11d6d83ee143db8d80be4d0f1') ?>">
                                <input type="hidden" name="key" value="<?php echo $date ?>">

                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="company" class="form-label">Company Name</label>
                                            <input type="text" class="form-control" name="company" id="company" placeholder="Enter Company Name" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email address</label>
                                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter Email" required >
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Mobile Number</label>
                                            <input type="number" class="form-control" name="phone" id="phone" placeholder="Mobile Number" onKeyPress="if(this.value.length==10) return false;" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="count" class="form-label">How Many Shipment/Order do you have received in a Month?</label>
                                            <select class="form-select" name="count" id="count" placeholder="How many orders do you ship every month?" required>
                                                <option>How many orders do you ship every month?</option>
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
                                    <div class="sent-message">Thank you for showing Interest. We will reach out to you</div>
                                </div>                               
                                <div class="row align-items-center justify-content-center text-center">
                                    <div class="col">
                                        <button type="submit" class="solid-action-btn m-0" id="submitEmailForm">Get a Quotation</button>
                                    </div>
                                </div>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/main.js"></script>
</body>

</html>
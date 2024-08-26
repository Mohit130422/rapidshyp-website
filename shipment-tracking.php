<?php 
session_start();
$rand=mt_rand(11111111,99999999);;
$_SESSION['csrf']=$rand;
include 'header-section.php';?>
<meta property="og:image" content="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/tracking-og-img.png">
<meta property="og:title" content="RapidShyp Tracking - eCommerce Shipping Solution and Courier Aggregator" />
<meta name="title" content="Track your Order - RapidShyp" />
<link rel="canonical" href="https://www.rapidshyp.com/shipment-tracking" />
<title>RapidShyp Tracking - eCommerce Shipping Solution and Courier Aggregator</title>

</head>

<body>
    <?php include 'header.php';?>

    <section class="hero-area-bg feature tracking">
        <div id="hero-area" class="hero-area">
            <div class="floating-elements">
                <ul class="background">
                    <li></li>
                    <li><img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/icon/pink-circle.png" alt=""></li>
                    <li></li>
                    <li><img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/icon/yellow-circle.png" alt=""></li>
                    <li></li>
                </ul>
            </div>
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 text-center">
                        <div class="contents tracking">
                            <h2 class="head-title feature-title"><mark>Track</mark> Your Order <br> Anytime & Anywhere
                            </h2>
                            <p class="description">Just enter your AWB Number or Order ID and track on the go!</p>
                        </div>
                    </div>
                    <div class="col-lg-10 col-sm-12 mb-5">
                        <div class="track-box">
                            <form id="lookupForm">
                                <input type="hidden" id='csrf' name="csrf" value="<?=$rand?>">
                                <div class="form-group">
                                    <p class="title">Track By:</p>
                                    <label for="trackByOrderId" class="radio pricing">
                                        <div class="selection d-flex align-items-center">
                                            <input type="radio" class="radio-input" id="trackByOrderId" name="lookupType" value="order_id" checked>
                                            <div class="radio-outline"></div>
                                            Order ID
                                        </div>
                                    </label>
                                    <label for="trackByAWB" class="radio pricing">
                                        <div class="selection d-flex align-items-center">
                                            <input type="radio" class="radio-input" id="trackByAWB" name="lookupType" value="awb_no">
                                            <div class="radio-outline"></div>
                                            AWB
                                        </div>
                                    </label>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-8 col-md-12 col-sm-12">
                                        <div id="orderInput" class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <input type="text" placeholder="Enter Order ID" id="order_id">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <input type="text" placeholder="Enter Phone Number" id="mobile_no">
                                            </div>
                                        </div>
                                        <div id="awbInput" class="hidden">
                                            <input type="text" placeholder="Enter AWB Number" id="awb_no">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-sm-12 form-group">
                                        <button type="submit" class="btn solid-action-btn">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <div class="ship-loading">Loading</div>
                            <div id="responseMessage"></div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-10 col-sm-12">
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

    <section class="what-makes-better track-status">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="heading text-center">Understand Order Tracking Statuses</h3>
                    <div class="content">
                        <div class="dot-line"></div>
                        <div class="status">
                            <div class="status-img">
                                <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/icon/o-received.svg" alt="">
                            </div>
                            <div class="circle"></div>
                            <div class="info">
                                <h6>Order Received</h6>
                                <p>The order has been received by the chosen courier partner.</p>
                            </div>
                        </div>
                        <div class="status">
                            <div class="status-img">
                                <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/icon/o-picked.svg" alt="">
                            </div>
                            <div class="circle"></div>
                            <div class="info">
                                <h6>Shipment Picked</h6>
                                <p>The courier partner picked up the order from the seller's pickup location.</p>
                            </div>
                        </div>
                        <div class="status">
                            <div class="status-img">
                                <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/icon/o-transit.svg" alt="">
                            </div>
                            <div class="circle"></div>
                            <div class="info">
                                <h6>Shipment In-Transit</h6>
                                <p>The shipment is en route to the buyer's city</p>
                            </div>
                        </div>
                        <div class="status">
                            <div class="status-img">
                                <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/icon/out-for-delivery.svg" alt="">
                            </div>
                            <div class="circle"></div>
                            <div class="info">
                                <h6>Out For Delivery</h6>
                                <p>The courier executive is on its way to deliver the order at your customer’s doorstep
                                </p>
                            </div>
                        </div>
                        <div class="status">
                            <div class="status-img">
                                <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/icon/delivered.svg" alt="">
                            </div>
                            <div class="circle"></div>
                            <div class="info">
                                <h6>Shipment Delivered</h6>
                                <p>The order has been delivered to the buyer by the courier executive</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ready-to-explore delivery-partner">
        <div class="container">
            <div class="row align-items-center col-reverse">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h3 class="heading mb-0">Experience convenient shipment <br>tracking at your fingertips </h3>
                    <p class="sub-heading">Stay updated on your shipments anytime, anywhere. Use your AWB tracking
                        number for tracing your parcel whereabouts.</p>
                    <button type="submit" class="solid-action-btn openWaitlistModal">Start Shipping</button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="image">
                        <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/delivery-partners.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blogs learn-order-tracking d-none">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <h3 class="heading">Learn everything about order tracking</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-5">
                    <div class="card blog-post">
                        <div class="head">
                            <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/post1.png" alt="">
                        </div>
                        <div class="body">
                            <h5>Lorem ipsum dolor sit amet, consectetuer adipiscing.</h5>
                            <p class="content">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse
                                molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero.</p>
                            <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="card blog-post">
                        <div class="head">
                            <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/post1.png" alt="">
                        </div>
                        <div class="body">
                            <h5>Lorem ipsum dolor sit amet, consectetuer adipiscing.</h5>
                            <p class="content">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse
                                molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero.</p>
                            <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="card blog-post">
                        <div class="head">
                            <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/post1.png" alt="">
                        </div>
                        <div class="body">
                            <h5>Lorem ipsum dolor sit amet, consectetuer adipiscing.</h5>
                            <p class="content">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse
                                molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero.</p>
                            <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq track-faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <span class="label">FAQs</span>
                    <h3 class="heading">Frequently Asked Questions</h3>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    How can I track my orders?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">You can track your order by following the tracking link sent
                                    by your seller on email, sms or WhatsApp using RapidShyp or tap the "Track Order"
                                    button in our website menu and enter relevant details.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Whom should I connect if I have concerns regarding the product delivered?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">In case of concerns with the product contained in the
                                    shipment, please reach out to your seller for support. RapidShyp does provide
                                    support for the products inside the shipment.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Where can I find the AWB number or Order ID?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">You can find the AWB number or Order ID of your shipment in
                                    the tracking updates sent to you by RapidShyp via SMS, Email or WhatsApp.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    Can I track multiple orders using RapidShyp's tracking?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Yes, you may track multiple orders using RapidShyp tracking
                                    by entering respective AWB or Order ID, one at a time.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ready-to-explore track-experience ">
        <div class="container">
            <div class="row align-items-center col-reverse">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h3 class="heading mb-0">Get control over all your<br>shipments</h3>
                    <p class="sub-heading">Stay informed about your shipments seamlessly </p>
                    <ul class="p-0">
                        <li><i class="far fa-check-circle"></i>Track orders from 10+ courier partners effortlessly at
                            your comfort</li>
                        <li><i class="far fa-check-circle"></i>Receive real-time updates as your order statuses change
                        </li>
                    </ul>
                    <button type="submit" class="solid-action-btn openWaitlistModal">Start Shipping</button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="image">
                        <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/track-experience.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php include 'footer.php';?>


    <script src="assets/js/main.js"></script>
</body>

</html>
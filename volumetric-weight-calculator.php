<?php 
session_start();
$rand=mt_rand(11111111,99999999);;
$_SESSION['csrf']=$rand;
include 'header-section.php';?>
<meta property="og:image" content="https://storage.googleapis.com/rapidshyp-website-cdn/temp/vol-weight-og.jpg">
<meta property="og:title" content="Volumetric Weight Calculator - Calculate Volumetric Charges - RapidShyp" />
<meta property="og:description" content="Easily Calculate volumetric weight by volumetric weight calculator. Perfect for ecommerce brands to avoid extra courier costs and ship nationwide efficiently." />
<meta name="title" content="Volumetric Weight Calculator - Calculate Volumetric Charges - RapidShyp" />
<meta name="description" content="Easily Calculate volumetric weight by volumetric weight calculator. Perfect for ecommerce brands to avoid extra courier costs and ship nationwide efficiently." />
<link rel="canonical" href="https://www.rapidshyp.com/volumetric-weight-calculator" />
<title>Volumetric Weight Calculator - Calculate Volumetric Charges - RapidShyp</title>

</head>

<body>
    <?php include 'header.php';?>

    <section class="hero-area-bg bg-none">
        <div id="hero-area" class="hero-area rateCal">
            <div class="floating-elements">
                <ul class="background">
                    <li><img src="https://storage.googleapis.com/rapidshyp-website-cdn/temp/icon/local_shipping.svg"
                            alt=""></li>
                    <li><img src="https://storage.googleapis.com/rapidshyp-website-cdn/temp/icon/yellow-circle.png"
                            alt=""></li>
                    <li><img src="https://storage.googleapis.com/rapidshyp-website-cdn/temp/icon/box.svg" alt="">
                    </li>
                </ul>
            </div>
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 text-center">
                        <div class="contents tracking">
                            <h1 class="head-title feature-title">Calculate<mark>Volumetric</mark> <br>Weight In A Jiffy
                            </h1>
                            <p class="description">Get dimensional weight quickly by entering package measurements</p>
                        </div>
                        <a href="javascript:void(0);" class="btn solid-action-btn scrollDown">Calculate Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="volCalculator" id="rateCal">
        <div class="container">
            <h3 class="heading">Volumetric weight calculator</h3>
            <p>If your parcel is bulky, most couriers will charge based on volumetric weight, <br>calculated from the
                size of your parcel, rather than weight.</p>
            <div class="row mt-5">
                <div class="col-12">
                    <p>Enter Package Dimensions</p>
                    <div class="volumetric-form" id="volForm">
                        <div class="row parcel">
                            <div class="col-md-9 col-sm-12 mb-5">
                                <div class="form-group">
                                    <div class="d-flex">
                                        <div class="feilds">
                                            <div class="input-group">
                                                <input type="text" class="form-control input-weight" aria-describedby="basic-addon2"
                                                    id="quantity" name="quantity" value="0.5">
                                                <span class="input-group-text" id="basic-addon2">KG</span>
                                            </div>
                                        </div>
                                        <div class="feilds">
                                            <div class="input-group margin-r">
                                                <input type="number" class="form-control length" aria-describedby="basic-addon2"
                                                    id="dimension-l" name="dimension-l" placeholder="Length">
                                                <span class="input-group-text" id="basic-addon2">CM</span>
                                            </div>
                                            <small class="error-message">Enter Length</small>
                                        </div>
                                        <div class="feilds">
                                            <div class="input-group margin-r">
                                                <input type="number" class="form-control width" aria-describedby="basic-addon2"
                                                    id="dimension-w" name="dimension-w" placeholder="Width">
                                                <span class="input-group-text" id="basic-addon2">CM</span>
                                            </div>
                                            <small class="error-message">Enter Width</small>
                                        </div>
                                        <div class="feilds">
                                            <div class="input-group">
                                                <input type="number" class="form-control height" aria-describedby="basic-addon2"
                                                    id="dimension-h" name="dimension-h" placeholder="Height">
                                                <span class="input-group-text" id="basic-addon2">CM</span>
                                            </div>
                                            <small class="error-message">Enter height</small>
                                        </div>                                                                             
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="solid-action-btn calculate-btn" id="calculateBtn" value="Calculate Now">
                </div>
            </div>
            <div class="row mt-5">
                <div class="volumeResult">
                    <div class="content">
                        <div class="result border-r">
                            <small>Volumetric Weight</small>
                            <h3 class="heading actual-weight">0.0 <span>KG</span></h3>
                        </div>
                        <div class="result">
                            <small>Chargeable Weight <button class="btn"><i class="fas fa-info-circle"></i> <span class="tooltip">Chargeable weight is the freight weight generally used by courier companies to charge for shipping orders.  It is deduced as the higher of volumetric or actual weight.</span></button></small>
                            <h3 class="heading chargeable-weight">0.0 <span>KG</span></h3>
                        </div>
                    </div>
                    <button class="solid-action-btn" onclick="location.href = 'https://app.rapidshyp.com/';"> Start Shipping</button>
                </div>
            </div>
        </div>
    </section>

    <section class="what-makes-better2 wht-is-volumetric">
        <div class="container">
            <div class="row mt-5 align-items-center col-reverse">
                <div class="col-lg-8 col-md-6 col-sm-12 mb-5 text-start">
                    <div class="info">
                        <h5>What is Volumetric <br> Weight?</h5>
                        <p class="mb-2">Volumetric weight is calculated based on the dimensions of the package, such as the length, breadth, and height of the shipment box.</p>
                        <p class="mb-2">The courier partner charges you either on the dead weight of your package or the dimensional weight, whichever is higher.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5 p-3">
                    <div>
                        <img src="https://storage.googleapis.com/rapidshyp-website-cdn/temp/what-is-vol.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="what-makes-better2 wht-is-volumetric how-to-calculate">
        <div class="container">
            <div class="row mt-5 align-items-center col-reverse">
                <div class="col-lg-6 col-md-6 col-sm-12 mb-5 text-start">
                    <div class="info">
                        <h5>How to Calculate<br>Volumetric Weight?</h5>
                        <p class="mb-2">To calculate volumetric weight, multiply your package length, breadth, and height by dividing it by the volumetric weight constant, as defined by your courier company. Most companies use 5000 as a volumetric constant. </p>
                        <p class="mb-2">The courier partner charges you either on the dead weight of your package or the dimensional weight, whichever is higher.</p>
                        <div class="white-border"></div>
                        <h6 class="mb-2">Volumetric Weight Formula</h6>
                        <p class="mb-2">Here's the formula to calculate the volumetric weight for your package</p>
                        <div class="strip">
                            <p>Length x Width x Height / 5000</p>
                        </div>
                    </div>                    
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-5 p-3">
                    <div>
                        <img src="https://storage.googleapis.com/rapidshyp-website-cdn/temp/product-box.png" alt="">
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <section class="what-makes-better2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-sm-12 text-center">
                    <h3 class="heading">Choose the Best Courier Partner</h3>
                    <p class="sub-heading">15+ courier partners to solve all your shipping woes!</p>
                </div>
                <div class="col-lg-8 col-sm-12 best-partners">
                    <img class="img-desk" src="https://storage.googleapis.com/rapidshyp-website-cdn/temp/rapidshyp-truck.png" alt="">
                </div>                
            </div>
        </div>
    </section>

    <section class="ready-to-explore track-experience ">
        <div class="container">
            <div class="row align-items-center col-reverse">
                <div class="col-lg-9 col-md-6 col-sm-12">
                    <h3 class="heading mb-3">Let us do the heavy lifting <br> and reduce your weight issues!</h3>
                    <!-- <p class="sub-heading">Stay informed about your shipments seamlessly</p> -->
                    <button type="submit" class="solid-action-btn" onclick="location.href = 'https://app.rapidshyp.com/';">Start Shipping</button>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="image">
                        <img src="https://storage.googleapis.com/rapidshyp-website-cdn/temp/rs-boy.png"
                            alt="">
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
                                    What is dead weight?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Dead weight is the normal weight of the package when placed on a scale. This includes the weight of the packaging box and pallets.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    What is volumetric weight?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Volumetric weight is calculated based on the dimensions of the package.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    How do you calculate the volumetric weight of the shipment?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">The weight is often calculated as (Length x Weight x Height) / Volumetric Factor</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php';?>


    <script src="assets/js/main.js"></script>
</body>

</html>
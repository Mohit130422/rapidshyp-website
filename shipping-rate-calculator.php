<?php 
session_start();
$rand=mt_rand(11111111,99999999);;
$_SESSION['csrf']=$rand;
include 'header-section.php';?>
<meta property="og:image" content="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-rate-og.jpg">
<meta property="og:title" content="Shipping Rates Calculator - Calculate Courier Charges - RapidShyp" />
<meta name="title" content="Shipping Rates Calculator - Calculate Courier Charges - RapidShyp" />
<link rel="canonical" href="https://www.rapidshyp.com/shipping-rate-calculator" />
<title>Shipping Rates Calculator - Calculate Courier Charges - RapidShyp</title>

</head>

<body>
    <?php include 'header.php';?>

    <section class="hero-area-bg bg-none">
        <div id="hero-area" class="hero-area rateCal">
            <div class="floating-elements">
                <ul class="background">
                    <li><img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/icon/local_shipping.svg"
                            alt=""></li>
                    <li><img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/icon/yellow-circle.png"
                            alt=""></li>
                    <li><img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/icon/box.svg" alt="">
                    </li>
                </ul>
            </div>
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 text-center">
                        <div class="contents tracking">
                            <h2 class="head-title feature-title"><mark>Calculate</mark> Shipping <br>Rates Instantly
                            </h2>
                            <p class="description">Get real insights into shipping costs within a few seconds</p>
                        </div>
                        <a href="javascript:void(0);" class="btn solid-action-btn scrollDown">Calculate Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="rateCalculator" id="rateCal">
        <div class="container">
            <h3 class="heading">Shipping Rate Calculator</h3>
            <div class="row">
                <div class="col-12 mb-5">
                    <form class="shipment-form" id="calForm">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="pickup-pincode">Pick-up Area Pincode</label>
                                    <input type="text" id="pickup-pincode" name="pickup-pincode"
                                        placeholder="Enter 6 Digit Pincode" maxlength="6" required>
                                    <small>Error Message</small>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-12">
                                <div class="form-group">
                                    <label for="delivery-pincode">Delivery Area Pincode</label>
                                    <input type="text" id="delivery-pincode" name="delivery-pincode"
                                        placeholder="Enter 6 Digit Pincode" maxlength="6" required>
                                    <small>Error Message</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="weight">Actual Weight</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" aria-describedby="basic-addon2"
                                            id="weight" name="weight" placeholder="0.5" required>
                                        <span class="input-group-text" id="basic-addon2">KG</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-12">
                                <div class="form-group">
                                    <label for="dimension">Dimension (LWH)</label>
                                    <div class="d-flex">
                                        <div class="input-group margin-r">
                                            <input type="number" class="form-control" aria-describedby="basic-addon2"
                                                id="dimension-l" name="dimension-l" placeholder="50" required>
                                            <span class="input-group-text" id="basic-addon2">CM</span>
                                        </div>
                                        <div class="input-group margin-r">
                                            <input type="number" class="form-control" aria-describedby="basic-addon2"
                                                id="dimension-w" name="dimension-w" placeholder="50" required>
                                            <span class="input-group-text" id="basic-addon2">CM</span>
                                        </div>
                                        <div class="input-group">
                                            <input type="number" class="form-control" aria-describedby="basic-addon2"
                                                id="dimension-h" name="dimension-h" placeholder="50" required>
                                            <span class="input-group-text" id="basic-addon2">CM</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="shipValue">Shipment Value</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" aria-describedby="basic-addon2"
                                            id="shipValue" name="shipValue" placeholder="1500">
                                        <span class="input-group-text" id="basic-addon2">₹</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-12">
                                <div class="form-group">
                                    <label for="payment-type">Payment Type</label>
                                    <div class="payment-options">
                                        <label for="prepaid" class="radio pricing">
                                            <div class="selection d-flex align-items-center">
                                                <input type="radio" class="radio-input" id="prepaid" name="payment-type"
                                                    value="prepaid" required checked>
                                                <div class="radio-outline"></div>
                                                Prepaid
                                            </div>
                                        </label>
                                        <label for="cod" class="radio pricing">
                                            <div class="selection d-flex align-items-center">
                                                <input type="radio" class="radio-input" id="cod" name="payment-type"
                                                    value="cod" required>
                                                <div class="radio-outline"></div>
                                                Cash On Delivery
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <input type="submit" class="solid-action-btn calculate-btn">Calculate Now</input> -->
                        <input type="submit" class="solid-action-btn calculate-btn" value="Calculate Now">
                        <button type="reset" class="reset-btn">Reset</button>
                        <div class="illustration">
                            <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/calculator.png"
                                alt="Illustration">
                        </div>
                    </form>
                </div>
                <div class="rateLoader">Loading</div>
                <div class="col-12 mb-5">
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
                                        <th>Chargeable Weight</th>
                                        <th>
                                            Shipping Rates
                                            <button type="button"><i class="fas fa-info-circle"></i><span class="tooltips">Pricing is subjective to change as per the applicable plan.</span></button>
                                        </th>
                                        <th>EDD <button type="button"><i class="fas fa-info-circle"></i><span class="tooltips">Estimated Delivery Date</span></button></th>
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

    <section class="what-makes-better2 hero-area calVariable">
        <div class="floating-elements">
            <ul class="background">
                <li></li>
                <li></li>
            </ul>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-sm-12 text-center">
                    <h3 class="heading">Every Variable Counts</h3>
                    <p class="sub-heading">Customers expect free shipping, but don't let that eat your profits. Use our
                        shipping rate calculator to determine accurate costs and keep your margins intact!</p>
                </div>
                <div class="col-12">
                    <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/calvariable.png"
                        alt="rate Variable">
                </div>
            </div>
        </div>
    </section>

    <section class="what-makes-better2 shipOption">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-sm-12 text-center">
                    <h3 class="heading">Team Up with Top Couriers at <br>Tip-Top Rates</h3>
                    <p class="sub-heading">Plan rapidly and pay economical rates for the best-in-class services of the
                        best couriers</p>
                </div>
                <div class="partners">
                    <img class="img-desk"
                        src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/ship-opt.png"
                        alt="">
                    <ul class="floating-partner">
                        <li class="shipping-option">
                            <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/ship-opt1.png"
                                alt="Delhivery">
                        </li>
                        <li class="shipping-option">
                            <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/ship-opt2.png"
                                alt="Ecom Express">
                        </li>
                        <li class="shipping-option">
                            <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/ship-opt3.png"
                                alt="XpressBees">
                        </li>
                        <li class="shipping-option">
                            <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/ship-opt4.png"
                                alt="STC">
                        </li>
                        <li class="shipping-option">
                            <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/ship-opt5.png"
                                alt="XpressBees">
                        </li>
                        <li class="shipping-option">
                            <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/ship-opt6.png"
                                alt="STC">
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row py-5 justify-content-center">
                <div class="col-lg-8 col-sm-12 text-center">
                    <h3 class="heading">Zap to a Quick Quote</h3>
                    <p class="sub-heading">Follow three easy steps and get an estimate of shipping rates instantly</p>
                </div>
                <div class="col-12 calSteps">
                    <div class="row">
                        <div class="process-line">
                            <span><i class="fas fa-arrow-right"></i></span>
                            <span class="s-arrow"><i class="fas fa-arrow-right"></i></span>
                        </div>
                        <div class="col-md-4 mb-5 col-sm-12 d-flex justify-content-center">
                            <div class="steps">
                                <span class="label">Step 01</span>
                                <div class="img">
                                    <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/local_shipping.svg"
                                        alt="">
                                </div>
                                <p>Pick-up Area Pincode</p>
                                <small>Ex: 110030</small>
                            </div>
                        </div>
                        <div class="col-md-4 mb-5 col-sm-12 d-flex justify-content-center">
                            <div class="steps">
                                <span class="label">Step 02</span>
                                <div class="img yellow">
                                    <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/scale.svg"
                                        alt="">
                                </div>
                                <p>Weight (Kg)</p>
                                <small>Ex: 50.00 KG</small>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 d-flex justify-content-center">
                            <div class="steps">
                                <span class="label">Step 03</span>
                                <div class="img">
                                    <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/box.svg"
                                        alt="">
                                </div>
                                <p>Dimensions (Cm)</p>
                                <small>Ex: 20 X 30 X 20 CM</small>
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
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h3 class="heading mb-0">Get Control Over Your <br> Shipping Costs</h3>
                    <p class="sub-heading">Stay informed about your shipments seamlessly </p>
                    <ul class="p-0">
                        <li><i class="far fa-check-circle"></i>10+ courier partners</li>
                        <li><i class="far fa-check-circle"></i>Economical rates</li>
                        <li><i class="far fa-check-circle"></i>26,000+ pin codes</li>
                    </ul>
                    <button type="submit" class="solid-action-btn openWaitlistModal">Calculate Now</button>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="image">
                        <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/ship-option/rateCal_model.png"
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
                                    What is a shipping rate calculator?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">A shipping rate calculator is a free tool that helps you
                                    estimate the cost of shipping a package based on some variables.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    What information do I need to use the shipping rate calculator?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">You will need the package's weight, dimensions, payment
                                    mode, origin pincode, and destination pincode.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    What payment modes are accepted for shipping?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">We accept both the modes, i.e. prepaid and COD</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    How accurate are the shipping rate estimates?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Estimates are based on current carrier rates and are
                                    generally accurate, but actual costs may vary slightly as per your chosen shipping
                                    plan.</div>
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
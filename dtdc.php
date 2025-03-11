<?php include 'header-section.php';?>

<meta property="og:title" content="DTDC Courier Services for eCommerce- RapidShyp"/>
<meta property="og:description" content="Ship with DTDC at the best courier charges. Use our DTDC courier charges calculator to estimate rates. Get end-to-end order tracking." />
<meta name="title" content="DTDC Courier Services for eCommerce- RapidShyp"/>
<meta name="description" content="Ship with DTDC at the best courier charges. Use our DTDC courier charges calculator to estimate rates. Get end-to-end order tracking."/>
<link rel="canonical" href="https://www.rapidshyp.com/courier-integrations/delhivery"/>
<title>DTDC Courier Services for eCommerce- RapidShyp</title>

</head>

<body>
    <?php include 'header.php';?>

    <section class="lp-hero-ov dtdc-bg">
        <div id="hero-area" class="hero-area">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="contents">
                            <h1 class="head-title mt-4">DTDC Courier Services at the Best Rates</h1>
                            <p class="sub-title">Ship with DTDC effortlessly using our customer-centric platform — smarter workflows, branded tracking experience and much more</p>
                            <div class="d-block">
                                <button type="submit" class="solid-action-btn openWaitlistModal">Get Started</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="img-desk">
                            <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/courier-integration/dtdc/dtdc-hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="reduce-rto dtdc-mark">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-lg-8 col-sm-12 text-center">
                    <h3 class="heading"><mark> Reliable </mark>Courier Services for eCommerce Shipping</h3>
                    <p class="sub-heading">Leverage DTDC’s logistics expertise combined with our modern shipping technology to scale your online business faster than ever before.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 text-center mb-4">
                    <div class="content border-right b-right">
                        <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/courier-integration/dtdc/best-experience.svg" alt="">
                        <h3 class="heading">35+</h3>
                        <p class="sub-heading">Years of Experience</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center mb-4">
                    <div class="content">
                        <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/courier-integration/dtdc/home-pin.svg" alt="">
                        <h3 class="heading">14300+</h3>
                        <p class="sub-heading">Pin Codes Covered</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center mb-4">
                    <div class="content">
                        <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/courier-integration/dtdc/population.svg" alt="">
                        <h3 class="heading">96%</h3>
                        <p class="sub-heading">Population Reached</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="rateCalculator deliveryCal dtdccal" id="rateCal">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-0 mb-lg-3 dtd-light-bg">
                    <span class="tag dtdc-bg">Shipping Rate Calculator</span>
                    <div class="row align-items-center">
                        <div class="col-md-12 col-lg-5 col-sm-12 p-4">
                            <h3 class="heading">DTDC Courier Charges Calculator</h3>
                            <p>Estimate shipping rates effortlessly using our DTDC price calculator</p>
                        </div>
                        <div class="col-md-12 col-lg-7 col-sm-12">
                            <form class="shipment-form" id="calForm">
                                <input type="hidden" name="csrf" id="csrf" value="<?=$rand?>">
                                <input type="hidden" id="courier" name="courier" value="DTDC"> 
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="pickup-pincode">Pick-up Area Pincode</label>
                                            <input type="text" id="pickup-pincode" name="pickup-pincode"
                                                placeholder="Enter 6 Digit Pincode" maxlength="6" required>
                                            <small>Error Message</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="delivery-pincode">Delivery Area Pincode</label>
                                            <input type="text" id="delivery-pincode" name="delivery-pincode"
                                                placeholder="Enter 6 Digit Pincode" maxlength="6" required>
                                            <small>Error Message</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="weight">Actual Weight (KG)</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" aria-describedby="basic-addon2"
                                                    id="weight" placeholder="Enter Weight" name="weight" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="dimension">Dimension (LWH)</label>
                                            <div class="d-flex">
                                                <div class="input-group margin-r">
                                                    <input type="number" class="form-control"
                                                        aria-describedby="basic-addon2" id="dimension-l"
                                                        name="dimension-l" placeholder="50 CM" required>
                                                </div>
                                                <div class="input-group margin-r">
                                                    <input type="number" class="form-control"
                                                        aria-describedby="basic-addon2" id="dimension-w"
                                                        name="dimension-w" placeholder="50 CM" required>
                                                </div>
                                                <div class="input-group">
                                                    <input type="number" class="form-control"
                                                        aria-describedby="basic-addon2" id="dimension-h"
                                                        name="dimension-h" placeholder="50 CM" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="shipValue">Shipment Value (₹)</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Enter Shipment Value"
                                                    aria-describedby="basic-addon2" id="shipValue" name="shipValue" required>
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
                                                        COD
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-5">
                                        <button type="reset" class="reset-btn mx-0">Reset</button>
                                    </div>
                                    <div class="col-lg-6 col-7">
                                        <input type="submit" class="solid-action-btn calculate-btn dtdc-bg" value="Calculate Now">
                                    </div>
                                </div>
                            </form>
                        </div>                        
                    </div>
                </div>
                <div id="errorMessage" style="color: red; text-align:center; display:none;"></div>
                <div class="rateLoader">Loading</div>
                <div class="col-lg-12 mb-0 mb-lg-5">
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
                            <button class="solid-action-btn getRates openWaitlistModal dtdc-bg">Get Full Rates</button>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </section>

    <section class="what-makes-better2 reduce-rto dtdc-mark" id="solution">
        <div class="container position-relative">
            <div class="row mb-5 justify-content-center">
                <div class="col-lg-7 col-sm-12 text-center">
                    <h3 class="heading">Why Ship With <mark>DTDC</mark> Using RapidShyp</h3>
                    <p class="sub-heading">Experience the best of DTDC courier services on our comprehensive shipping platform, built to enhance your delivery experience.</p>
                </div>
            </div>
            <div class="row mt-4 align-items-center justify-content-center">
                <div class="col-lg-5 col-md-6 col-sm-12 p-3">
                    <div>
                        <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/courier-integration/dtdc/why-dtdc01.png"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 text-start">
                    <div class="info">
                        <h5>Multi-channel Integration</h5>
                        <p>Integrate 5+ order channels in one place, so you don’t have to keep switching them</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4 align-items-center col-reverse justify-content-center">
                <div class="col-lg-5 col-md-6 col-sm-12 text-start">
                    <div class="info">
                        <h5>Smart Shipping Workflows</h5>
                        <p>Minimise manual effort with auto-synchronisation, bulk actions & auto-documentation</p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 p-3">
                    <div>
                        <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/courier-integration/dtdc/why-dtdc02.png"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="row mt-4 align-items-center justify-content-center">
                <div class="col-lg-5 col-md-6 col-sm-12 p-3">
                    <div>
                        <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/courier-integration/dtdc/why-dtdc03.png"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 text-start">
                    <div class="info">
                        <h5>Branded Tracking Page</h5>
                        <p>Utilise your tracking page to improve brand recognition/recall and drive more repeat purchases</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4 align-items-center col-reverse justify-content-center">
                <div class="col-lg-5 col-md-6 col-sm-12 text-start">
                    <div class="info">
                        <h5>Actionable Dashboard</h5>
                        <p>Take more intelligent decisions based on insightful shipping and business analytics</p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 p-3">
                    <div>
                        <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/courier-integration/dtdc/why-dtdc04.png"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="row mt-4 align-items-center justify-content-center">
                <div class="col-lg-12 col-md-6 col-sm-12 p-3 text-center">
                    <button class="solid-action-btn openWaitlistModal dtdc-bg">Start Shipping</button>
                </div>
            </div>
        </div>
    </section>

    <section class="is-rto-eating-profit delhivery-couriers" style="padding-bottom: 0px; height: auto;">
        <div class="container dtd-light-bg">
            <div class="row  align-items-center w-100">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h3 class="heading">15+ Couriers, One <br>Simplified Platform</h3>
                    <p class="sub-heading mb-4">Enjoy multiple courier options including DTDC to cover all service locations nationwide, with end-to-end order tracking.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="image text-center">
                        <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/courier-integration/dtdc/dtdc-partner.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blogs shipping-suggestion dtdc-mark">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <p class="heading"><mark>More Related to DTDC Courier Services</mark></p>
                    <p class="sub-heading">Read our blogs to stay up to date with the latest insights</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 mb-5">
                    <div class="card blog-post">
                        <div class="head">
                            <a href="https://www.rapidshyp.com/blog/top-11-last-mile-delivery-companies-in-india/" target="_blank"><img src="https://www.rapidshyp.com/blog/wp-content/uploads/2024/08/Top-10-Last-Mile-Delivery-Companies.png"
                                alt=""></a>
                        </div>
                        <div class="body">
                            <a href="https://www.rapidshyp.com/blog/top-11-last-mile-delivery-companies-in-india/" target="_blank" class="content">Top 11 Last Mile Delivery Companies in <br> India </a>
                            <p>The eCommerce landscape in India is rapidly evolving, and the industry is expected to reach US$ 325 Billion by 2030. As online shopping becomes increasingly popular, the focus has shifted towards making the last-mile delivery process as seamless and satisfactory as possible.</p>
                        </div>
                        <div class="footer">
                            <a href="https://www.rapidshyp.com/blog/top-11-last-mile-delivery-companies-in-india/"
                                target="_blank">Read Now <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-5">
                    <div class="card blog-post">
                        <div class="head">
                            <a href="https://www.rapidshyp.com/blog/how-to-choose-ecommerce-delivery-partner/" target="_blank"><img src="https://www.rapidshyp.com/blog/wp-content/uploads/2024/04/ecom-delivery-partner.png" alt=""></a>
                        </div>
                        <div class="body">
                            <a href="https://www.rapidshyp.com/blog/how-to-choose-ecommerce-delivery-partner/" target="_blank" class="content">How To Choose The Right eCommerce Delivery Partner For Your Small Business</a>
                            <p>Have you ever wondered what's the link between online stores and satisfied customers? It's eCommerce shipping. Transitioning from brick-and-mortar stores isn’t an easy task. An online seller has to compete with traditional sellers to deliver the product to</p>
                        </div>
                        <div class="footer">
                            <a href="https://www.rapidshyp.com/blog/how-to-choose-ecommerce-delivery-partner/"
                                target="_blank">Read Now <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-5">
                    <div class="card blog-post">
                        <div class="head">
                            <a href="https://www.rapidshyp.com/blog/10-best-3pl-companies-in-india/" target="_blank"><img src="https://www.rapidshyp.com/blog/wp-content/uploads/2024/09/RS-Blog_20_Feature-Image-copy-3.png" alt=""></a>
                        </div>
                        <div class="body">
                            <a href="https://www.rapidshyp.com/blog/10-best-3pl-companies-in-india/" target="_blank" class="content">10 Top 3PL (Third Party Logistics) Companies in India</a>
                            <p>Handling the entire supply chain for an e-commerce business can be tricky and time-consuming. That’s why you might need to turn towards a 3PL partner who can help you through this process.</p>
                        </div>
                        <div class="footer">
                            <a href="https://www.rapidshyp.com/blog/10-best-3pl-companies-in-india/"
                                target="_blank">Read Now <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="is-rto-eating-profit delhivery-couriers" style="padding: 0 0 60px; height: auto;">
        <div class="container deliver-sucess dtdc-bg" style="padding: 3rem 0 0;">
            <div class="row align-items-center col-reverse w-100">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="image">
                        <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/courier-integration/dtdc/dtdc-your-ecommerce.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                    <h3 class="heading">Deliver Your eCommerce Business to Success</h3>
                    <p class="sub-heading mb-4">RapidShyp is built to take complexities out of your logistics, allowing your business to scale freely and speedily.</p>
                    <button class="solid-action-btn" onclick="window.open('https://app.rapidshyp.com/');">Sign up for Free</button>
                </div>                
            </div>
        </div>
    </section>

    <section class="faq track-faq dtdc-mark">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <span class="label">FAQs</span>
                    <h3 class="heading"><mark>Frequently</mark> Asked Questions</h3>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    How much time does DTDC take to deliver?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">The estimated delivery date is influenced by factors such as pickup location, delivery destination, and shipping method, but RapidShyp ensures an SLA adherence rate of over 95%.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    How to check DTDC courier status?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Our platform provides clear and transparent tracking for the status of every shipment. You can also track your courier <a href="shipment-tracking" style="text-decoration:underline;">here</a></div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    How much does DTDC charge per kg?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">DTDC courier charges begin at ₹21 for 0.5kg on forward shipments. Use the DTDC courier charges calculator above to determine shipping rates based on specific locations and shipment weights.</div>
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RapidShyp</title>
    <link rel="shortcut icon" href="/assets/images/icon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="node_modules/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <header class="header">
        <div class="brand">
            <a href="../"><img src="assets/images/Logo.svg" alt="Logo"></a>
        </div>
        <div class="menu">
            <li><a href="#">Product <img src="assets/images/icon/arrow-down.svg" alt=""></a></li>
            <li><a href="#">Solution <img src="assets/images/icon/arrow-down.svg" alt=""></a></li>
            <li><a href="#">Resources <img src="assets/images/icon/arrow-down.svg" alt=""></a></li>
            <li><a href="#">Company <img src="assets/images/icon/arrow-down.svg" alt=""></a></li>
            <li><a href="pricing">Pricing</a></li>            
        </div>
        <div class="cta-menu">
            <li><a href="contact-us" class="solid-action-btn">Let's Talk <i class="fas fa-chevron-right"></i></a></li>
            <li><a href="#">Sign In</a></li>
        </div>
    </header>

    <section class="hero-area-bg">
        <div id="hero-area" class="hero-area">
            <div class="floating-elements">
                <ul class="background">
                    <li>Fastest Courier <img src="assets/images/icon/truck.svg" alt=""></li>
                    <li><img src="assets/images/icon/pink-circle.png" alt=""></li>
                    <li><img src="assets/images/icon/package.svg" alt=""></li>
                    <li><img src="assets/images/icon/yellow-circle.png" alt=""></li>
                    <li>Customer Support <img src="assets/images/icon/support.svg" alt=""></li>
                </ul>
            </div>
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-8 text-center">
                        <span class="announce"><img src="assets/images/icon/flash.svg" alt="">Special Announcement Title Headline</span>
                        <div class="contents">
                            <h2 class="head-title">Start Delivering <br> Your Parcel Like A Pro</h2>
                            <p class="description">Get a bird's eye view with our customizable dashboard. Stay on top of things! <br> Revamp your work process with our game-changing feature.</p>
                        </div>
                        <div class="join-us">
                            <form action="#" id="submit-button">
                                <input type="text" placeholder="Type Your Email Here" id="useremail" required>
                                <button type="submit" class="solid-action-btn" id="openWaitlistForm">Join The Waitlist</button>
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
                            <div class="row align-items-center">
                                <div class="col-lg-4 col-xl-4">
                                    <span class="label">Product</span>
                                    <h2 class="title">Explore Our Product Feature</h2>
                                    <div class="carousel-indicators features">
                                        <div type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                            class="active" aria-current="true" aria-label="Slide 1">
                                            <div class="item">
                                                <h5 class="head">Shipping Automation</h5>
                                                <p class="body">Get a bird's eye view with our customizable dashboard. Get a bird's eye view with our customizable dashboard. Get a bird's eye view with our customizable dashboard. Get a bird's eye view with our customizable dashboard.</p>
                                                <a href="#" class="footer">Explore The Feature <i class="fas fa-arrow-right"></i></a>
                                                <div class="scroll-path">
                                                    <span class="progress-bar"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                            aria-label="Slide 2">
                                            <div class="item">
                                                <h5 class="head">Shipping Automation</h5>
                                                <p class="body">Get a bird's eye view with our customizable dashboard. Get a bird's eye view with our customizable dashboard. Get a bird's eye view with our customizable dashboard. Get a bird's eye view with our customizable dashboard.</p>
                                                <div class="scroll-path">
                                                    <span class="progress-bar"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                            aria-label="Slide 3">
                                            <div class="item">
                                                <h5 class="head">Shipping Automation</h5>
                                                <p class="body">Get a bird's eye view with our customizable dashboard. Get a bird's eye view with our customizable dashboard. Get a bird's eye view with our customizable dashboard. Get a bird's eye view with our customizable dashboard.</p>
                                                <div class="scroll-path">
                                                    <span class="progress-bar"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                            aria-label="Slide 4">
                                            <div class="item">
                                                <h5 class="head">Shipping Automation</h5>
                                                <p class="body">Get a bird's eye view with our customizable dashboard. Get a bird's eye view with our customizable dashboard. Get a bird's eye view with our customizable dashboard. Get a bird's eye view with our customizable dashboard.</p>
                                                <div class="scroll-path">
                                                    <span class="progress-bar"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="join-btn">
                                        <button class="solid-action-btn">Join The Waitlist</button>
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
                    <h3 class="heading">What makes us better</h3>
                    <p class="sub-heading">Experience enhanced efficiency, heightened productivity, and a greater edge <br> over your competitors with these advanced capabilities.</p>
                    <div class="row mt-5">
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                            <div class="info">
                                <span class="imgdesk">
                                    <img src="assets/images/icon/psychology.png" alt="">
                                </span>
                                <p class="title">Powered by AI</p>
                                <small>Bringing automation and intelligent decision-making to your processes.</small>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                            <div class="info">
                                <span class="imgdesk yellow">
                                    <img src="assets/images/icon/groups.png" alt="">
                                </span>
                                <p class="title">Team collaboration</p>
                                <small>Our collaboration feature allows team members to work together seamlessly.</small>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                            <div class="info">
                                <span class="imgdesk">
                                    <img src="assets/images/icon/chart_data.png" alt="">
                                </span>
                                <p class="title">Advanced analytics</p>
                                <small>Provides powerful insights into your data, helping you make informed decisions.</small>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                            <div class="info">
                                <span class="imgdesk yellow">
                                    <img src="assets/images/icon/integration_instructions.png" alt="">
                                </span>
                                <p class="title">Fully integrated</p>
                                <small>Embrace the power of seamless integration and experience the benefits.</small>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                            <div class="info">
                                <span class="imgdesk">
                                    <img src="assets/images/icon/equalizer.png" alt="">
                                </span>
                                <p class="title">Data control</p>
                                <small>Take full control of your data with our comprehensive data control feature.</small>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                            <div class="info">
                                <span class="imgdesk yellow">
                                    <img src="assets/images/icon/call_quality.png" alt="">
                                </span>
                                <p class="title">Premium Support</p>
                                <small>We pride ourselves on delivering exceptional customer support.</small>
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
                    <h3 class="heading">What makes us better</h3>
                    <p class="sub-heading">Experience enhanced efficiency, heightened productivity, and a greater edge <br> over your competitors with these advanced capabilities.</p>
                </div>
            </div>
            <div class="row mt-5 align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12 mb-5 text-start">
                    <div class="info">
                        <p>Print labels at scale</p>
                        <h5>Print labels at scale</h5>
                        <p class="mb-3">Stay on top of things and revamp your work process with our game-changing feature. Get a bird's eye view with our customizable dashboard. </p>
                        <ul class="p-0">
                            <li><i class="far fa-check-circle"></i>Lorem ipsum dolor sit amet</li>
                            <li><i class="far fa-check-circle"></i>Consectetur adipiscing elit</li>
                            <li><i class="far fa-check-circle"></i>Sed do eiusmod tempor incididunt ut labore</li>
                        </ul>
                        <a href="#">Join The Waitlist <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-5 pink">
                    <img src="assets/images/solution.png" alt="">
                </div>
            </div>
            <div class="row mt-5 align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12 mb-5 yellow">
                    <img src="assets/images/delight.png" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 pl-5 text-start">
                    <div class="info">
                        <p style="color:#FBBC05">Delight your customers</p>
                        <h5>Delight your customers</h5>
                        <p class="mb-3">Stay on top of things and revamp your work process with our game-changing feature. Get a bird's eye view with our customizable dashboard. </p>
                        <ul class="p-0">
                            <li><i class="far fa-check-circle"></i>Lorem ipsum dolor sit amet</li>
                            <li><i class="far fa-check-circle"></i>Consectetur adipiscing elit</li>
                            <li><i class="far fa-check-circle"></i>Sed do eiusmod tempor incididunt ut labore</li>
                        </ul>
                        <a href="#">Join The Waitlist <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row mt-5 align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12 mb-5 text-start">
                    <div class="info">
                        <p>Manage logistics spends</p>
                        <h5>Manage logistics spends</h5>
                        <p class="mb-3">Stay on top of things and revamp your work process with our game-changing feature. Get a bird's eye view with our customizable dashboard. </p>
                        <ul class="p-0">
                            <li><i class="far fa-check-circle"></i>Lorem ipsum dolor sit amet</li>
                            <li><i class="far fa-check-circle"></i>Consectetur adipiscing elit</li>
                            <li><i class="far fa-check-circle"></i>Sed do eiusmod tempor incididunt ut labore</li>
                        </ul>
                        <a href="#">Join The Waitlist <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-5 pink">
                    <img src="assets/images/solution.png" alt="">
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
                <div class="col-lg-3 col-md-4 col-sm-12 mb-5">
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
                <div class="col-lg-3 col-md-4 col-sm-12 mb-5">
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
                <div class="col-lg-3 col-md-4 col-sm-12 mb-5">
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
                <div class="col-lg-3 col-md-4 col-sm-12 mb-5">
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
                <div class="col-lg-3 col-md-4 col-sm-12 mb-5">
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
                <div class="col-lg-3 col-md-4 col-sm-12 mb-5">
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
                <div class="col-lg-3 col-md-4 col-sm-12 mb-5">
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
                <div class="col-lg-3 col-md-4 col-sm-12 mb-5">
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
                                How do I know if I’m eligible for Circle?
                            </button>
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                How do I know if I’m eligible for Circle?
                            </button>
                          </h2>
                          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                How do I know if I’m eligible for Circle?
                            </button>
                          </h2>
                          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                  How do I know if I’m eligible for Circle?
                              </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                  How do I know if I’m eligible for Circle?
                              </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSix">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                  How do I know if I’m eligible for Circle?
                              </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSeven">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                  How do I know if I’m eligible for Circle?
                              </button>
                            </h2>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingEight">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                  How do I know if I’m eligible for Circle?
                              </button>
                            </h2>
                            <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
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
                    <h3 class="heading mb-0">Ready to start? <br> Be an early bird to explore</h3>
                    <p class="sub-heading">Unlock the full potential of your startup by delivering a clear message that resonates.</p>
                    <div class="row mt-4 align-items-center">
                        <div class="col-md-6 col-sm-12">
                            <input type="text" name="" id="" placeholder="Type Your Email Here">
                        </div>
                        <div class="col-md-4 col-sm-12 p-0">
                            <button class="solid-action-btn">Join The Waitlist</button>
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
                    <p class="mb-4">Stay current with all the latest information, trends and industry expectation and more.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
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
                <div class="col-lg-3 col-md-6 col-sm-12">
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
                <div class="col-lg-2 col-md-6 col-sm-12">
                    <p>Pricing</p>
                    <div class="links">
                        <a href="" class="link">Open Positions</a>
                        <a href="" class="link">Part-Time</a>
                        <a href="" class="link">Contractual</a>
                        <a href="" class="link">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="social-media">
                        <p>Follow Us On:</p>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
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
                                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" required>
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
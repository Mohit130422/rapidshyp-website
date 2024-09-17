<footer id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="brand mb-4">
                        <a href="/"><img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/Logo.svg" alt=""></a>
                    </div>
                    <p class="mb-4">An eCommerce shipping platform offering logistics automation, multi-carrier
                        shipping, real-time tracking, and NDR management, ensuring efficient order fulfillment and
                        reduced costs.</p>
                    <div class="social-media mb-4">
                        <p>Follow Us On:</p>
                        <a href="https://www.instagram.com/rapidshyp"
                            target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://in.linkedin.com/company/rapidshyp" target="_blank"><i
                                class="fab fa-linkedin"></i></a>
                        <a href="https://www.facebook.com/rapidshyp" target="_blank"><i
                                class="fab fa-facebook"></i></a>
                        <a href="https://twitter.com/rapidshyp" target="_blank"><img
                                src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/icon/x-twitter.svg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-6">
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
                <div class="col-lg-4 col-md-6 col-6">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 col-lg-4 m-margin-20">
                            <p>Resources</p>
                            <div class="links">
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
                                <!-- <a href="tel:7669007700" class="link" target="_blank"><i class="fas fa-phone-alt"></i>
                                    7669007700</a> -->
                                <a href="https://maps.app.goo.gl/TMc7FNnFvwGYSVVLA" target="_blank" class="link"><i
                                        class="fas fa-map-marker-alt"></i> RapidShyp Head Office <br> 3rd Floor, Unitech
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
                    &copy; Copyright 2024 <strong><span>RapidShyp</span></strong> | <a href="privacy">Privacy
                        Policy</a>
                     | <a href="tnc">Terms & Conditions</a> | <a href="shipping-return-policy">Refund and
                        Cancellation
                        Policy</a>
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
                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text" id="addon-wrapping"><i
                                                        class="far fa-envelope"></i></span>
                                                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter Email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Mobile Number</label>
                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text" id="addon-wrapping"><i
                                                        class="fas fa-phone"></i></span>
                                                <input type="number" class="form-control" name="phone" id="phone" placeholder="Mobile Number" onKeyPress="if(this.value.length==10) return false;" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="mb-4">
                                            <label for="phone" class="form-label">Website Link</label>
                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text" id="addon-wrapping"><i
                                                        class="fas fa-globe"></i></span>
                                                <input type="url" class="form-control" name="website" id="website"
                                                    placeholder="Enter Website Url (optional)">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="mb-3">
                                            <label for="count" class="form-label">How many orders do you receive in a month?</label>
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
                                    <div class="sent-message">Thank you for showing interest in RapidShyp. Someone from our team will reach out to you soon!
                                    </div>
                                </div>
                                <div class="row align-items-center justify-content-center text-center">
                                    <div class="col">
                                        <button type="submit" class="solid-action-btn m-0" id="submitEmailForm">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blur-overlay" id="thankyou">
        <div class="dialog-box thankyou-box">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-12 text-center mb-4">
                        <div class="img">
                            <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/icon/thankyou.png" alt="">
                        </div>
                        <div class="content">
                            <h3>Thank you for showing interest in RapidShyp. </h3>
                            <p>Someone from our team will reach out to you soon!</p>
                        </div>
                    </div>
                    <div class="col-12 text-center mb-4">
                        <a href="/" class="solid-action-btn">Continue to RapidShyp</a>
                    </div>
                    <p class="mssg">For any queries and assistance, please reach out to us at <a href="mailto:support@rapidshyp.com">support@rapidshyp.com</a></p>
                </div>
            </div>
            
        </div>
    </div>
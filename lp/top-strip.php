<div class="topHeader">
        <p id="countdown"></p>
        <!--<p><strong>Get 50% Cashback* Up to &#8377; 1000</strong>  On Your First Recharge. Use Code: <strong>WELCOME50. </strong>T&C Apply</p>-->
        <p><strong>Get &#8377;1700</strong> shipping credits on first recharge of <strong>&#8377;1000</strong> | Use Code: <strong>FLAT700</strong> | T&C Apply</p>
        <span class="openWaitlistModal">Get Started <i class="fas fa-chevron-right"></i></span>
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
                                            <label for="website" class="form-label">Website Link</label>
                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text" id="addon-wrapping"><i
                                                        class="fas fa-globe"></i></span>
                                                <input type="text" class="form-control" name="website" id="website"
                                                placeholder="https://example.com" required>
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
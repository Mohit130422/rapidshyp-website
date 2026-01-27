<?php
/**
 * Template for displaying single post (read full post page).
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
while (have_posts()) {
setPostViews(get_the_ID());
the_post();
?>
<div class="single_header" style="background: #F0D3FF; padding: 3rem 0; width: 100%;">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <?php $cat=get_the_category();
					if ( ! empty( $cat ) ) {?>
                <p>
                    <?php
					   echo '<a class="single_cat" href="'.get_category_link($cat[0]->cat_ID).'">'.esc_html( $cat [0]->cat_name ).'</a>';   
					}
					?>
                </p>
                <h1 style="color:#3e1a51; font-weight:700;"><?php the_title();?></h1>

                <?php 
					if($avatar = get_avatar(get_the_author_meta('ID'),24)){ 
						echo $avatar;
					}else{ ?>
                <p style="margin-bottom: 16px;"><img src="/images/no-image-default.jpg" />
                    <?php } ?>
                    <?php the_author_posts_link();?>&nbsp;&nbsp;<?php echo get_the_date('M d, Y');?>&nbsp;&nbsp;<?php echo do_shortcode('[read_meter]');?>
                </p>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <div class="single_banner">
                    <?php //the_post_thumbnail( 'full' );?>
                    <?php $img=get_field('post_image');
						if($img){?>
                    <img src="<?php echo $img['url'];?>" />
                    <?php }else{?>
                    <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' );?>" alt="" />
                    <?php }?>
                </div>
            </div>
        </div>
        <!-- <div class="row clearfix single_author_info">
				<div class="col-md-7 col-md-push">
					
				</div>
			</div> -->
    </div>

</div>

<div class="content">
    <div class="container-fluid">
        <div class="row clearfix" style="margin-top:4rem;">
            <div class="col-md-2 table_contents fixed-sidebar">
                <?php
						$content = get_the_content();
						$htmlDom = new DOMDocument;

						//Load the HTML string into our DOMDocument object.
						@$htmlDom->loadHTML($content);

						//Extract all elements / tags from the HTML.
						$h2Tags = $htmlDom->getElementsByTagName('h2');
						$h3Tags = $htmlDom->getElementsByTagName('h3');
						$allTags = $htmlDom->getElementsByTagName('*');
						$extractedH2Tags = [];
						if($allTags){
							$tabcontent='<h5>Table of Contents:</h5><ul>';
							foreach($allTags as $element){
								if($element->tagName == 'h2') {
									$tagid = $element->attributes->getNamedItem("id")->value;
									$tagValue = trim($element->nodeValue);
									$tabcontent.='<li><a href="#'.$tagid.'">'.$tagValue.'</a></li>';
								}else if($element->tagName == 'h3'){
									$tabcontent.='<ul>';
									$tagid = $element->attributes->getNamedItem("id")->value;
									$tagValue = trim($element->nodeValue);
									$tabcontent.='<li><a href="#'.$tagid.'">'.$tagValue.'</a></li>';
									$tabcontent.='</ul>';
								}
							}
							$tabcontent.='</ul>';
						}
						echo $tabcontent;
					?>
            </div>
            <div class="col-md-8 single-content-area" id="main-column">
                <?php 
						the_content();
					?>
                <div class="promo-banner">
                    <?php $promo=get_field('bottom_promo_banner','category_'.$cat[0]->term_id);?>
                    <a href="<?php echo get_field('bottom_promo_link','category_'.$cat[0]->term_id);?>"><img
                            src="<?php echo $promo['url'];?>" /></a>
                </div>
                <div class="social_share"><span><strong>Share:
                        </strong></span><?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?></div>
            </div>
            <div class="col-md-2 side_promo fixed-sidebar">
                <?php $promo=get_field('side_promo_banner','category_'.$cat[0]->term_id);?>
                <a href="<?php echo get_field('side_promo_link','category_'.$cat[0]->term_id);?>"><img
                        src="<?php echo $promo['url'];?>" /></a>
            </div>
        </div>
        <div class="single_bottom">
            <div class="author_subscribe">
                <div class="row clearfix">
                    <div class="col-md-4 col-md-push-2">
                        <div class="author_main">
                            <div class="author_image">
                                <?php 
										if($avatar = get_avatar(get_the_author_meta('ID'),100)){ 
											echo $avatar;
										}else{ ?>
                                <img src="/images/no-image-default.jpg" />
                                <?php } ?>
                            </div>
                            <div class="author_desc">
                                <p class="name"><?php the_author_posts_link();?></p>
                                <?php $author_id = get_the_author_meta('ID');?>
                                <p><?php echo get_field('designation', 'user_'. $author_id );?></p>
                                <div>
                                    <?php
												$fb=get_field('facebook', 'user_'. $author_id );
												$insta=get_field('instagram', 'user_'. $author_id );
												$linkedin=get_field('linkedin', 'user_'. $author_id );
											?>
                                    <?php if($fb){?><span><a href="<?php echo $fb;?>"><i class="fa fa-facebook"
                                                aria-hidden="true"></i></a></span><?php } ?>
                                    <?php if($insta){?><span><a href="<?php echo $insta;?>"><i class="fa fa-instagram"
                                                aria-hidden="true"></i></a></span><?php } ?>
                                    <?php if($linkedin){?><span><a href="<?php echo $linkedin;?>"><i
                                                class="fa fa-linkedin" aria-hidden="true"></i></a></span><?php } ?>
                                </div>
                            </div>
                        </div>
                        <p class="single_author_desc"><?php the_author_description();?></p>
                    </div>
                    <div class="col-md-4 col-md-push-3 newsletter">
                        <h3>Subscribe to learn more about Link Building</h3>
                        <?php echo do_shortcode('[newsletter_form]');?>
                        <p class="small">By clicking “Subscribe” you agree to RapidShyp Privacy Policy and consent to
                            RapidShyp using your contact data for newsletter purposes</p>
                    </div>
                </div>
            </div>
            <div class="related-posts-after-content">
                <div class="row clearfix">
                    <div class="col-md-8 col-md-push-2">

                        <?php
						$orig_post = $post;
						global $post;
						$tags = wp_get_post_tags($post->ID);
						if ($tags) {
						$tag_ids = array();
						foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
						$args=array(
						'tag__in' => $tag_ids,
						'post__not_in' => array($post->ID),
						'posts_per_page'=>2, // Number of related posts to display.
						'caller_get_posts'=>1
						);

						$my_query = new wp_query( $args );
						if($my_query->have_posts()){
						echo '<h2>Related Articles</h2>';
						echo '<ul class="row clearfix">';
						while( $my_query->have_posts() ) {
						$my_query->the_post();
						?>

                        <li class="col-md-6">
                            <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                            <p><?php echo get_excerpt(150);?></p>
                            <p class="author_date">
                                <strong><?php the_author_posts_link();?></strong>&nbsp;&nbsp;&nbsp;<?php echo get_the_date('M d, Y');?>&nbsp;&nbsp;&nbsp;<?php echo do_shortcode('[read_meter]');?>
                            </p>
                        </li>
                        <?php }
						echo '</ul>';
						}
						}
						$post = $orig_post;
						wp_reset_query();
						?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rateCalculator" id="rateCal">
        <div class="container">
            <h3 class="heading">Shipping Rate Calculator</h3>
            <div class="row">
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-md-12 col-lg-8 col-sm-12">
                            <form class="shipment-form" id="calForm">
                                <input type="hidden" name="csrf" id="csrf" value="<?=$rand?>">
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
                                                    id="weight" name="weight" required>
                                                <span class="input-group-text" id="basic-addon2">KG</span>
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
                                                        name="dimension-l" required>
                                                    <span class="input-group-text" id="basic-addon2">CM</span>
                                                </div>
                                                <div class="input-group margin-r">
                                                    <input type="number" class="form-control"
                                                        aria-describedby="basic-addon2" id="dimension-w"
                                                        name="dimension-w" required>
                                                    <span class="input-group-text" id="basic-addon2">CM</span>
                                                </div>
                                                <div class="input-group">
                                                    <input type="number" class="form-control"
                                                        aria-describedby="basic-addon2" id="dimension-h"
                                                        name="dimension-h" required>
                                                    <span class="input-group-text" id="basic-addon2">CM</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="shipValue">Shipment Value</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control"
                                                    aria-describedby="basic-addon2" id="shipValue" name="shipValue">
                                                <span class="input-group-text" id="basic-addon2">₹</span>
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
                            </form>
                        </div>
                        <div class="col-md-12 col-lg-4 col-sm-12 p-0">
                            <div class="illustration">
                                <img src="https://storage.googleapis.com/rapidshyp-website-cdn/temp/calculator.png"
                                    alt="Illustration">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="errorMessage" style="color: red; text-align:center; display:none;"></div>
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
                                        <th>Chargeable Weight (KG)</th>
                                        <th>
                                            Shipping Rates
                                            <button type="button"><i class="fas fa-info-circle"></i><span
                                                    class="tooltips">Pricing is subjective to change as per the
                                                    applicable plan.</span></button>
                                        </th>
                                        <th>EDD <button type="button"><i class="fas fa-info-circle"></i><span
                                                    class="tooltips">Estimated Delivery Date</span></button></th>
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
    </div>
<script type="text/javascript">
jQuery(document).ready(function($) {
    // Scroll to the section offset minus fixed header height on page load if there's a hash in the URL
    if (window.location.hash) {
        var offset = $(window.location.hash).offset();
        if (offset) {
            var scrollto = offset.top - 100; // minus fixed header height
            $('html, body').animate({
                scrollTop: scrollto
            }, 0);
        }
    }

    $(window).scroll(function() {
        var position = $(this).scrollTop() + 100; // plus fixed header height
        $('.wp-block-heading').each(function() {
            var target = $(this).offset().top;
            var id = $(this).attr('id');
            var navLinks = $('.table_contents li a');

            if (position >= target) {
                navLinks.removeClass('current');
                $('.table_contents li a[href="#' + id + '"]').addClass('current');
            }
        });
    });

    // Smooth scroll for in-page navigation links
    $('.table_contents li a').on('click', function(e) {
        e.preventDefault();
        var target = $(this.hash);
        if (target.length) {
            var scrollto = target.offset().top - 100; // minus fixed header height
            $('html, body').animate({
                scrollTop: scrollto
            }, 100);
        }
    });

    $('.schema-faq-question').click(function() {
        $('.wp-block-yoast-faq-block').addClass('fcp-faq');
        $('.fcp-opened').removeClass('fcp-opened');
        $(this).parent().addClass('fcp-opened');
    });
});
</script>

<script>
    $(document).ready(function () {
    const $pickupPin = $('#pickup-pincode');
    const $deliverPin = $('#delivery-pincode');
    const $rateLoader = $('.rateLoader');
    const $rateResult = $('#rateResult');
    const $rateTableBody = $('#rateTableBody');
    const $errorMessage = $('#errorMessage'); // For displaying error messages

    // Check input length using jQuery
    function checkLength($input, min, max) {
        const valueLength = $input.val().length;
        if (valueLength < min) {
            showError($input, `${getFieldName($input)} must be at least ${min} characters`);
            return false;
        } else if (valueLength > max) {
            showError($input, `${getFieldName($input)} must be less than ${max} characters`);
            return false;
        } else {
            showSuccess($input);
            return true;
        }
    }

    // Show input error messages
    function showError($input, message) {
        const $formControl = $input.parent();
        $formControl.addClass('error').removeClass('success');
        $formControl.find('small').text(message);
    }

    // Show success color
    function showSuccess($input) {
        const $formControl = $input.parent();
        $formControl.addClass('success').removeClass('error');
    }

    // Get field name
    function getFieldName($input) {
        return $input.attr('id').charAt(0).toUpperCase() + $input.attr('id').slice(1);
    }

    // Validate pin codes when typing (key up event)
    $pickupPin.on('keyup', function () {
        checkLength($pickupPin, 6, 6);
    });

    $deliverPin.on('keyup', function () {
        checkLength($deliverPin, 6, 6);
    });

    // Handle form submission with jQuery
    $('#calForm').on('submit', function (event) {
        event.preventDefault();

        const isPickupPinValid = checkLength($pickupPin, 6, 6);
        const isDeliverPinValid = checkLength($deliverPin, 6, 6);

        if (isPickupPinValid && isDeliverPinValid) {
            const formData = new FormData(this);

            // Hide previous error messages
            $errorMessage.hide();

             // Reset rate result table and hide it before starting the new request
             $rateTableBody.empty();
             $rateResult.hide();
 
             // Show the loader
             $rateLoader.show();

            // Fetch rates via AJAX
            $.ajax({
                url: 'rates.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function (data) {
                    // Hide loader
                    $rateLoader.hide();

                    if (data.result === 'error') {
                         // If pincode(s) are not serviceable, check which one is invalid and show error near that input
                         if (data.message.includes('Pincode(s) not serviceable')) {
                            if (data.invalid_pincode === 'pickup') {
                                showError($pickupPin, 'Pickup pincode not serviceable');
                            } else if (data.invalid_pincode === 'delivery') {
                                showError($deliverPin, 'Delivery pincode not serviceable');
                            }
                        } else {
                            // Display any other server error
                            $errorMessage.text(data.message).show();
                        }
                    } else if (Array.isArray(data)) {
                        $rateResult.show();
                        let rows = '';

                        data.forEach(function (row) {
                            rows += `<tr class="rate-row" data-mode="${row.mode}">
                                        <td>${row.courier}</td>
                                        <td>${row.icon}</td>
                                        <td>${row.weight}</td>
                                        <td>${row.rate}</td>
                                        <td>${row.edd}</td>
                                    </tr>`;
                        });

                        // Append the rows to the table
                        $rateTableBody.html(rows);

                        // Reset the form
                        // $('#calForm')[0].reset();
                    } else {
                        $errorMessage.text('An unexpected error occurred. Please try again.').show();
                    }
                },
                error: function (xhr) {
                    // $rateLoader.hide();

                    let message = 'Failed to fetch rates. Please try again later.';
                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        message = xhr.responseJSON.message;
                    }

                    // Display a general error message or server-provided message
                    $errorMessage.text(message).show();
                }
            });
        }
    });
     // Handle reset button click
     $('#calForm').on('reset', function () {
        // Hide rate result table when reset is clicked
        $rateResult.hide();
        // Hide error message if any
        $errorMessage.hide();
        // Remove error or success classes from form inputs
        $('input').parent().removeClass('error success');
    });
});
</script>

<?php
} //endwhile;
get_footer(); ?>
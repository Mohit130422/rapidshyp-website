<?php
/**
 * The theme header
 * 
 * @package bootstrap-basic
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <meta name="google-site-verification" content="ziG_d23YoEToCxxi0a1or4i7ITVf1hjtCCO7qg3vldQ" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/2fbb4ed8a1.js" crossorigin="anonymous"></script>
	
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WDPFB7D3');</script>
<!-- End Google Tag Manager -->
	
    <!-- Google tag for conversion tracking (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11397568129"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-11397568129');
    </script>


    <!-- start Event snippet for Submit lead form conversion page-->
    <script>
    function gtag_report_conversion(url) {
        console.log("convert");
        var callback = function() {
            if (typeof(url) != 'undefined') {
                window.location = url;
            }
        };
        gtag('event', 'conversion', {
            'send_to': 'AW-11397568129/7eDPCLiRyLAZEIGt5Loq',
            'event_callback': callback
        });
        return false;
    }
    </script>
    <!-- End Event snippet for Submit lead form conversion page-->
    <!--wordpress head-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php 
        if ( function_exists( 'wp_body_open' ) ) {
            wp_body_open();
        } else {
            do_action( 'wp_body_open' );
        }
        ?>
   <!--[if lt IE 8]>
            <p class="ancient-browser-alert">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/" target="_blank">upgrade your browser</a>.</p>
        <![endif]-->
	
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WDPFB7D3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div class="topHeader">
        <p id="countdown"></p>
        <p style="margin-bottom: 0;"><strong>Get 10% Cashback* Up to &#8377; 1000</strong>  On Your First Recharge. Use Code: <strong>WELCOME10. </strong>T&C Apply </p>
        <span class="openWaitlistModal">Get Started <i class="fas fa-chevron-right"></i></span>
    </div>  
    <header class="sticky">
        <div class="container clearfix">
            <div class="row clearfix">
                <div class="col-md-2">
                    <a class="navbar-brand" title="<?php echo get_bloginfo('description'); ?>"
                        href="https://www.rapidshyp.com"><?php $logo = get_field('logo',22); ?>
                        <?php if($logo) { ?>
                        <img alt="<?php bloginfo('name'); ?>" src="<?php echo $logo['url']; ?>" id="logo-header" />
                        <?php } else { ?>
                        <img alt="<?php bloginfo('name'); ?>"
                            src="<?php echo get_template_directory_uri()."/images/logo.png"; ?>" id="logo-header" />
                        <?php } ?></a>
                </div>
                <div class="col-md-10">
                    <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary')); ?>
                    <!--<a class="free_account" href="#">Create a free account</a>-->
                </div>
            </div>
        </div>
        <div class="progress-container fixed-top">
            <span class="progress-bar"></span>
        </div>
    </header>
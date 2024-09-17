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
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-WDPFB7D3');
    </script>
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
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WDPFB7D3" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="header">
        <div class="topHeader">
            <p id="countdown"></p>
            <p><strong>Get 10% Cashback* Up to &#8377; 1000</strong> On Your First Recharge. Use Code:
                <strong>WELCOME10. </strong>T&C Apply</p>
            <span class="openWaitlistModal">Get Started <i class="fas fa-chevron-right"></i></span>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/"><img
                        src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/Logo.svg" alt="Logo"></a>
                <button class="navbar-toggler" id="ChangeToggle" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <div id="navbar-close" class="hidden">
                        <i class="fas fa-times"></i>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/#product">Product</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/features">Features</a>
                        </li>
                        <li class="nav-item">
                            <p class="nav-link" id="resources">Resources <img
                                    src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/icon/arrow-down.svg"
                                    alt=""></p>
                            <div class="hover-menu" id="sub-menu">
                                <ul>
                                    <li>
                                        <a class="nav-link" href="https://www.rapidshyp.com/blog/">Blog</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="/shipping-rate-calculator">Shipping Rate Calculator</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="/volumetric-weight-calculator">Volumetric Weight
                                            Calculator</a>
                                    </li>
                                    <li>
                                        <a class="nav-link mt-0" href="/#faqs">FAQs</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!--<li class="nav-item">
                            
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="/#contact">Contact Us</a>
                        </li>
                    </ul>
                    <div class="navbar-nav d-flex">
                        <li class="nav-item"><a class="nav-link mt-0" href="shipment-tracking">Track Order</a> </li>
                        <li class="nav-item btn"><button class="solid-action-btn openWaitlistModal">Get Started <i
                                    class="fas fa-chevron-right"></i></button></li>
                        </li>
                    </div>
                </div>
            </div>
        </nav>
    </header>
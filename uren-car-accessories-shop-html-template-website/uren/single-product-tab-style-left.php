<?php
session_start();
$_SESSION['userID']=1;
$_GET['productId']=11;

require_once "./db/conn.php";
//global $CataId = $GET['CataId'];


$singleproducts = $crudObj->getSingleProduct($_GET['productId']);
//$manufactory = $crudObj->getMannfactory(11);
// print_r($singleproducts);
// $catagoies = $crudObj->getAllCatagory();

?>



<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Uren - Car Accessories Shop HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
    <!-- Fontawesome Star -->
    <link rel="stylesheet" href="assets/css/vendor/fontawesome-stars.css">
    <!-- Ion Icon -->
    <link rel="stylesheet" href="assets/css/vendor/ion-fonts.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <!-- Animation -->
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
    <!-- Lightgallery -->
    <link rel="stylesheet" href="assets/css/plugins/lightgallery.min.css">
    <!-- Nice Select -->
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">

    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from the above) -->
    <!--
    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>
    -->

    <!-- Main Style CSS (Please use minify version for better website load performance) -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--<link rel="stylesheet" href="assets/css/style.min.css">-->

</head>

<body class="template-color-1">

    <div class="main-wrapper">

        <!-- Begin Uren's Header Main Area -->
        <header class="header-main_area bg--sapphire">
            <div class="header-top_area d-lg-block d-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-7 col-lg-8">
                            <div class="main-menu_area position-relative">
                                <nav class="main-nav">
                                    <ul>
                                        <li class="dropdown-holder "><a href="index.html">Home</a>
                                            <ul class="hm-dropdown">
                                                <li><a href="index.html">Home One</a></li>
                                                <li><a href="index-2.html">Home Two</a></li>
                                                <li><a href="index-3.html">Home Three</a></li>
                                            </ul>
                                        </li>
                                        <li class="megamenu-holder active"><a href="shop-left-sidebar.html">Shop <i class="ion-ios-arrow-down"></i></a>
                                            <ul class="hm-megamenu">
                                                <li><span class="megamenu-title">Shop Page Layout</span>
                                                    <ul>
                                                        <li><a href="shop-grid-fullwidth.html">Grid Fullwidth</a></li>
                                                        <li><a href="shop-left-sidebar.html">Left Sidebar</a></li>
                                                        <li><a href="shop-right-sidebar.html">Right Sidebar</a></li>
                                                        <li><a href="shop-list-fullwidth.html">List Fullwidth</a></li>
                                                        <li><a href="shop-list-left-sidebar.html">List Left Sidebar</a></li>
                                                        <li><a href="shop-list-right-sidebar.html">List Right Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><span class="megamenu-title">Single Product Style</span>
                                                    <ul>
                                                        <li><a href="single-product-gallery-left.html">Gallery Left</a></li>
                                                        <li><a href="single-product-gallery-right.html">Gallery Right</a>
                                                        </li>
                                                        <li><a href="single-product-tab-style-left.html">Tab Style Left</a>
                                                        </li>
                                                        <li><a href="single-product-tab-style-right.html">Tab Style
                                                                Right</a>
                                                        </li>
                                                        <li><a href="single-product-sticky-left.html">Sticky Left</a></li>
                                                        <li><a href="single-product-sticky-right.html">Sticky Right</a></li>
                                                    </ul>
                                                </li>
                                                <li><span class="megamenu-title">Single Product Type</span>
                                                    <ul>
                                                        <li><a href="single-product.html">Single Product</a></li>
                                                        <li><a href="single-product-sale.html">Single Product Sale</a></li>
                                                        <li><a href="single-product-group.html">Single Product Group</a>
                                                        </li>
                                                        <li><a href="single-product-variable.html">Single Product Variable</a>
                                                        </li>
                                                        <li><a href="single-product-affiliate.html">Single Product
                                                                Affiliate</a>
                                                        </li>
                                                        <li><a href="single-product-slider.html">Single Product Slider</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0)">Specials</a></li>
                                        <li class=""><a href="javascript:void(0)">Pages <i class="ion-ios-arrow-down"></i></a>
                                            <ul class="hm-dropdown">
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="login-register.html">Login | Register</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="compare.html">Compare</a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                                <li><a href="404.html">404 Error</a></li>
                                            </ul>
                                        </li>
                                        <li class=""><a href="about-us.html">About Us</a></li>
                                        <li class=""><a href="contact.html">Contact</a></li>
                                        <li class=""><a href="blog-left-sidebar.html">Blog <i class="ion-ios-arrow-down"></i></a>
                                            <ul class="hm-dropdown">
                                                <li><a href="blog-left-sidebar.html">Grid View</a>
                                                    <ul class="hm-dropdown hm-sub_dropdown">
                                                        <li><a href="blog-2-column.html">Column Two</a></li>
                                                        <li><a href="blog-3-column.html">Column Three</a></li>
                                                        <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                                                        <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="blog-list-left-sidebar.html">List View</a>
                                                    <ul class="hm-dropdown hm-sub_dropdown">
                                                        <li><a href="blog-list-fullwidth.html">List Fullwidth</a></li>
                                                        <li><a href="blog-list-left-sidebar.html">List Left Sidebar</a></li>
                                                        <li><a href="blog-list-right-sidebar.html">List Right Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="blog-details-left-sidebar.html">Blog Details</a>
                                                    <ul class="hm-dropdown hm-sub_dropdown">
                                                        <li><a href="blog-details-left-sidebar.html">Left Sidebar</a></li>
                                                        <li><a href="blog-details-right-sidebar.html">Right Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="blog-gallery-format.html">Blog Format</a>
                                                    <ul class="hm-dropdown hm-sub_dropdown">
                                                        <li><a href="blog-gallery-format.html">Gallery Format</a></li>
                                                        <li><a href="blog-audio-format.html">Audio Format</a></li>
                                                        <li><a href="blog-video-format.html">Video Format</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4">
                            <div class="ht-right_area">
                                <div class="ht-menu">
                                    <ul>
                                        <li><a href="javascript:void(0)">Currency<i class="fa fa-chevron-down"></i></a>
                                            <ul class="ht-dropdown ht-currency">
                                                <li><a href="javascript:void(0)">€ EUR</a></li>
                                                <li class="active"><a href="javascript:void(0)">£ Pound Sterling</a></li>
                                                <li><a href="javascript:void(0)">$ Us Dollar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0)">Language <i class="fa fa-chevron-down"></i></a>
                                            <ul class="ht-dropdown">
                                                <li class="active"><a href="javascript:void(0)"><img src="assets/images/menu/icon/1.jpg" alt="JB's Language Icon">English</a></li>
                                                <li><a href="javascript:void(0)"><img src="assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Français</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="my-account.html">My Account<i class="fa fa-chevron-down"></i></a>
                                            <ul class="ht-dropdown ht-my_account">
                                                <li><a href="javascript:void(0)">Register</a></li>
                                                <li class="active"><a href="javascript:void(0)">Login</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-top_area header-sticky bg--sapphire">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-8 col-lg-7 d-lg-block d-none">
                            <div class="main-menu_area position-relative">
                                <nav class="main-nav">
                                    <ul>
                                        <li class="dropdown-holder "><a href="index.html">Home</a>
                                            <ul class="hm-dropdown">
                                                <li><a href="index.html">Home One</a></li>
                                                <li><a href="index-2.html">Home Two</a></li>
                                                <li><a href="index-3.html">Home Three</a></li>
                                            </ul>
                                        </li>
                                        <li class="megamenu-holder active"><a href="shop-left-sidebar.html">Shop <i
                                                class="ion-ios-arrow-down"></i></a>
                                            <ul class="hm-megamenu">
                                                <li><span class="megamenu-title">Shop Page Layout</span>
                                                    <ul>
                                                        <li><a href="shop-grid-fullwidth.html">Grid Fullwidth</a></li>
                                                        <li><a href="shop-left-sidebar.html">Left Sidebar</a></li>
                                                        <li><a href="shop-right-sidebar.html">Right Sidebar</a></li>
                                                        <li><a href="shop-list-fullwidth.html">List Fullwidth</a></li>
                                                        <li><a href="shop-list-left-sidebar.html">List Left Sidebar</a>
                                                        </li>
                                                        <li><a href="shop-list-right-sidebar.html">List Right
                                                                Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><span class="megamenu-title">Single Product Style</span>
                                                    <ul>
                                                        <li><a href="single-product-gallery-left.html">Gallery Left</a>
                                                        </li>
                                                        <li><a href="single-product-gallery-right.html">Gallery
                                                                Right</a>
                                                        </li>
                                                        <li><a href="single-product-tab-style-left.html">Tab Style
                                                                Left</a>
                                                        </li>
                                                        <li><a href="single-product-tab-style-right.html">Tab Style
                                                                Right</a>
                                                        </li>
                                                        <li><a href="single-product-sticky-left.html">Sticky Left</a>
                                                        </li>
                                                        <li><a href="single-product-sticky-right.html">Sticky Right</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><span class="megamenu-title">Single Product Type</span>
                                                    <ul>
                                                        <li><a href="single-product.html">Single Product</a></li>
                                                        <li><a href="single-product-sale.html">Single Product Sale</a>
                                                        </li>
                                                        <li><a href="single-product-group.html">Single Product Group</a>
                                                        </li>
                                                        <li><a href="single-product-variable.html">Single Product
                                                                Variable</a>
                                                        </li>
                                                        <li><a href="single-product-affiliate.html">Single Product
                                                                Affiliate</a>
                                                        </li>
                                                        <li><a href="single-product-slider.html">Single Product
                                                                Slider</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0)">Specials</a></li>
                                        <li class=""><a href="javascript:void(0)">Pages <i
                                                class="ion-ios-arrow-down"></i></a>
                                            <ul class="hm-dropdown">
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="login-register.html">Login | Register</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="compare.html">Compare</a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                                <li><a href="404.html">404 Error</a></li>
                                            </ul>
                                        </li>
                                        <li class=""><a href="about-us.html">About Us</a></li>
                                        <li class=""><a href="contact.html">Contact</a></li>
                                        <li class=""><a href="blog-left-sidebar.html">Blog <i
                                                class="ion-ios-arrow-down"></i></a>
                                            <ul class="hm-dropdown">
                                                <li><a href="blog-left-sidebar.html">Grid View</a>
                                                    <ul class="hm-dropdown hm-sub_dropdown">
                                                        <li><a href="blog-2-column.html">Column Two</a></li>
                                                        <li><a href="blog-3-column.html">Column Three</a></li>
                                                        <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                                                        <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="blog-list-left-sidebar.html">List View</a>
                                                    <ul class="hm-dropdown hm-sub_dropdown">
                                                        <li><a href="blog-list-fullwidth.html">List Fullwidth</a></li>
                                                        <li><a href="blog-list-left-sidebar.html">List Left Sidebar</a>
                                                        </li>
                                                        <li><a href="blog-list-right-sidebar.html">List Right
                                                                Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="blog-details-left-sidebar.html">Blog Details</a>
                                                    <ul class="hm-dropdown hm-sub_dropdown">
                                                        <li><a href="blog-details-left-sidebar.html">Left Sidebar</a>
                                                        </li>
                                                        <li><a href="blog-details-right-sidebar.html">Right Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="blog-gallery-format.html">Blog Format</a>
                                                    <ul class="hm-dropdown hm-sub_dropdown">
                                                        <li><a href="blog-gallery-format.html">Gallery Format</a></li>
                                                        <li><a href="blog-audio-format.html">Audio Format</a></li>
                                                        <li><a href="blog-video-format.html">Video Format</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-sm-3 d-block d-lg-none">
                            <div class="header-logo_area header-sticky_logo">
                                <a href="index.html">
                                    <img src="assets/images/menu/logo/1.png" alt="Uren's Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-sm-9">
                            <div class="header-right_area">
                                <ul>
                                    <li class="mobile-menu_wrap d-flex d-lg-none">
                                        <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white">
                                            <i class="ion-navicon"></i>
                                        </a>
                                    </li>
                                    <li class="minicart-wrap">
                                        <a href="#miniCart" class="minicart-btn toolbar-btn">
                                            <div class="minicart-count_area">
                                                <span class="item-count">3</span>
                                                <i class="ion-bag"></i>
                                            </div>
                                            <div class="minicart-front_text">
                                                <span>Cart:</span>
                                                <span class="total-price">462.4</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="contact-us_wrap">
                                        <a href="tel://+123123321345"><i class="ion-android-call"></i>+123 321 345</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="custom-logo_col col-12">
                            <div class="header-logo_area">
                                <a href="index.html">
                                    <img src="assets/images/menu/logo/1.png" alt="Uren's Logo">
                                </a>
                            </div>
                        </div>
                        <div class="custom-category_col col-12">
                            <div class="category-menu category-menu-hidden">
                                <div class="category-heading">
                                    <h2 class="categories-toggle">
                                        <span>Shop By</span>
                                        <span>Department</span>
                                    </h2>
                                </div>
                                <div id="cate-toggle" class="category-menu-list">
                                    <ul>
                                        <li class="right-menu"><a href="shop-left-sidebar.html">Car Parts</a>
                                            <ul class="cat-mega-menu">
                                                <li class="right-menu cat-mega-title">
                                                    <a href="shop-left-sidebar.html">Active body control</a>
                                                    <ul>
                                                        <li><a href="shop-left-sidebar.html">Aluminum Nonstick</a></li>
                                                        <li><a href="shop-left-sidebar.html">Calphalon</a></li>
                                                        <li><a href="shop-left-sidebar.html">Contemporary</a></li>
                                                        <li><a href="shop-left-sidebar.html">Hard-Anodized</a></li>
                                                    </ul>
                                                </li>
                                                <li class="right-menu cat-mega-title">
                                                    <a href="shop-left-sidebar.html">Battery Indicator</a>
                                                    <ul>
                                                        <li><a href="shop-left-sidebar.html">Sanai laptops</a></li>
                                                        <li><a href="shop-left-sidebar.html">Byteflight</a></li>
                                                        <li><a href="shop-left-sidebar.html">EXcaliberPC</a></li>
                                                        <li><a href="shop-left-sidebar.html">Gaming Laptops</a></li>
                                                    </ul>
                                                </li>
                                                <li class="right-menu cat-mega-title">
                                                    <a href="shop-left-sidebar.html">Remote Starter</a>
                                                    <ul>
                                                        <li><a href="shop-left-sidebar.html">Dual Core</a></li>
                                                        <li><a href="shop-left-sidebar.html">Gaming Monitors</a></li>
                                                        <li><a href="shop-left-sidebar.html">GPS Monitors</a></li>
                                                        <li><a href="shop-left-sidebar.html">Heat Shield</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="right-menu"><a href="shop-left-sidebar.html">Tools &amp; Accessories</a>
                                            <ul class="cat-mega-menu cat-mega-menu-2">
                                                <li class="right-menu cat-mega-title">
                                                    <a href="shop-left-sidebar.html">Drills</a>
                                                    <ul>
                                                        <li><a href="shop-left-sidebar.html">Angle Drills</a></li>
                                                        <li><a href="shop-left-sidebar.html">Combi Drills</a></li>
                                                        <li><a href="shop-left-sidebar.html">Drill Drivers</a></li>
                                                        <li><a href="shop-left-sidebar.html">PercussionDrills</a></li>
                                                    </ul>
                                                </li>
                                                <li class="right-menu cat-mega-title">
                                                    <a href="shop-left-sidebar.html">Nail Guns</a>
                                                    <ul>
                                                        <li><a href="shop-left-sidebar.html">Air Nail Guns</a></li>
                                                        <li><a href="shop-left-sidebar.html">Cordless Nail Guns</a></li>
                                                        <li><a href="shop-left-sidebar.html">Electric Nail Guns</a></li>
                                                        <li><a href="shop-left-sidebar.html">Gas Nail Guns</a></li>
                                                    </ul>
                                                </li>
                                                <li class="right-menu cat-mega-title">
                                                    <a href="shop-left-sidebar.html">Sanders</a>
                                                    <ul>
                                                        <li><a href="shop-left-sidebar.html">1/2 Sheet Sanders</a></li>
                                                        <li><a href="shop-left-sidebar.html">1/4 Sheet Sanders</a></li>
                                                        <li><a href="shop-left-sidebar.html">Belt Sanders</a></li>
                                                        <li><a href="shop-left-sidebar.html">Drywall Sanders</a></li>
                                                    </ul>
                                                </li>
                                                <li class="right-menu cat-mega-title">
                                                    <a href="shop-left-sidebar.html">Saws</a>
                                                    <ul>
                                                        <li><a href="shop-left-sidebar.html">Circular Saws</a></li>
                                                        <li><a href="shop-left-sidebar.html">Jigsaws</a></li>
                                                        <li><a href="shop-left-sidebar.html">Mitre Saws</a></li>
                                                        <li><a href="shop-left-sidebar.html">Reciprocating Saws</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="right-menu"><a href="shop-left-sidebar.html">Suspension Systems</a>
                                            <ul class="cat-mega-menu cat-mega-menu-3">
                                                <li class="right-menu cat-mega-title">
                                                    <a href="shop-left-sidebar.html">Clothing</a>
                                                    <ul>
                                                        <li><a href="shop-left-sidebar.html">Cuisinart</a></li>
                                                        <li><a href="shop-left-sidebar.html">Homeinart</a></li>
                                                        <li><a href="shop-left-sidebar.html">Kettle Stainless</a></li>
                                                        <li><a href="shop-left-sidebar.html">Steel Stovetop</a></li>
                                                    </ul>
                                                </li>
                                                <li class="right-menu cat-mega-title">
                                                    <a href="shop-left-sidebar.html">Jewelry</a>
                                                    <ul>
                                                        <li><a href="shop-left-sidebar.html">Hard Anodized</a></li>
                                                        <li><a href="shop-left-sidebar.html">Scratch Resistant</a></li>
                                                        <li><a href="shop-left-sidebar.html">Thermo-Spot</a></li>
                                                        <li><a href="shop-left-sidebar.html">Ultimate</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="right-menu"><a href="shop-left-sidebar.html">Turbo System</a>
                                            <ul class="cat-mega-menu">
                                                <li class="right-menu cat-mega-title">
                                                    <a href="shop-left-sidebar.html">BMW</a>
                                                    <ul>
                                                        <li><a href="shop-left-sidebar.html">Dining Chairs</a></li>
                                                        <li><a href="shop-left-sidebar.html">Dining Tables</a></li>
                                                        <li><a href="shop-left-sidebar.html">Gramophone</a></li>
                                                        <li><a href="shop-left-sidebar.html">Sideboards</a></li>
                                                    </ul>
                                                </li>
                                                <li class="right-menu cat-mega-title">
                                                    <a href="shop-left-sidebar.html">FORD</a>
                                                    <ul>
                                                        <li><a href="shop-left-sidebar.html">Chairs & Sofas</a></li>
                                                        <li><a href="shop-left-sidebar.html">Chest</a></li>
                                                        <li><a href="shop-left-sidebar.html">Loungers</a></li>
                                                        <li><a href="shop-left-sidebar.html">Sets</a></li>
                                                    </ul>
                                                </li>
                                                <li class="right-menu cat-mega-title">
                                                    <a href="shop-left-sidebar.html">POSCHER</a>
                                                    <ul>
                                                        <li><a href="shop-left-sidebar.html">Bed</a></li>
                                                        <li><a href="shop-left-sidebar.html">Daybed</a></li>
                                                        <li><a href="shop-left-sidebar.html">Futon</a></li>
                                                        <li><a href="shop-left-sidebar.html">Hammock</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="right-menu"><a href="shop-left-sidebar.html">Oils & Fluids</a>
                                            <ul class="cat-dropdown">
                                                <li>
                                                    <a href="shop-left-sidebar.html">Daylesford</a>
                                                    <a href="shop-left-sidebar.html">Delaware</a>
                                                    <a href="shop-left-sidebar.html">Fayence</a>
                                                    <a href="shop-left-sidebar.html">Franzea</a>
                                                    <a href="shop-left-sidebar.html">Mable</a>
                                                    <a href="shop-left-sidebar.html">Mobo</a>
                                                    <a href="shop-left-sidebar.html">Pippins</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="right-menu"><a href="shop-left-sidebar.html">Exterior</a>
                                            <ul class="cat-dropdown cat-dropdown-2">
                                                <li>
                                                    <a href="shop-left-sidebar.html">Coffee & side tables</a>
                                                    <a href="shop-left-sidebar.html">Living room lighting</a>
                                                    <a href="shop-left-sidebar.html">Living room storage</a>
                                                    <a href="shop-left-sidebar.html">Living room textiles & rugs</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="shop-left-sidebar.html">Body Parts</a></li>
                                        <li><a href="shop-left-sidebar.html">Interior</a></li>
                                        <li><a href="shop-left-sidebar.html">Audio</a></li>
                                        <li><a href="shop-left-sidebar.html">End Tables</a></li>
                                        <li class="rx-child"><a href="shop-left-sidebar.html">Uncategorized</a></li>
                                        <li class="rx-child"><a href="shop-left-sidebar.html">Appliances</a></li>
                                        <li class="rx-parent">
                                            <a class="rx-default">More Categories</a>
                                            <a class="rx-show">Collapse</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="custom-search_col col-12">
                            <div class="hm-form_area">
                                <form action="#" class="hm-searchbox">
                                    <select class="nice-select select-search-category">
                                        <option value="0">All Categories</option>
                                        <option value="10">Laptops</option>
                                        <option value="17">Prime Video</option>
                                        <option value="20">All Videos</option>
                                        <option value="21">Blouses</option>
                                        <option value="22">Evening Dresses</option>
                                        <option value="23">Summer Dresses</option>
                                        <option value="24">T-shirts</option>
                                        <option value="25">Rent or Buy</option>
                                        <option value="26">Your Watchlist</option>
                                        <option value="27">Watch Anywhere</option>
                                        <option value="28">Getting Started</option>
                                        <option value="18">Computers</option>
                                        <option value="29">More to Explore</option>
                                        <option value="30">TV &amp; Video</option>
                                        <option value="31">Audio &amp; Theater</option>
                                        <option value="32">Camera, Photo </option>
                                        <option value="33">Cell Phones</option>
                                        <option value="34">Headphones</option>
                                        <option value="35">Video Games</option>
                                        <option value="36">Wireless Speakers</option>
                                        <option value="19">Electronics</option>
                                        <option value="37">Amazon Home</option>
                                        <option value="38">Kitchen &amp; Dining</option>
                                        <option value="39">Furniture</option>
                                        <option value="40">Bed &amp; Bath</option>
                                        <option value="41">Appliances</option>
                                        <option value="11">TV &amp; Audio</option>
                                        <option value="42">Chamcham</option>
                                        <option value="45">Office</option>
                                        <option value="47">Gaming</option>
                                        <option value="48">Chromebook</option>
                                        <option value="49">Refurbished</option>
                                        <option value="50">Touchscreen</option>
                                        <option value="51">Ultrabooks</option>
                                        <option value="52">Blouses</option>
                                        <option value="43">Sanai</option>
                                        <option value="53">Hard Drives</option>
                                        <option value="54">Graphic Cards</option>
                                        <option value="55">Processors (CPU)</option>
                                        <option value="56">Memory</option>
                                        <option value="57">Motherboards</option>
                                        <option value="58">Fans &amp; Cooling</option>
                                        <option value="59">CD/DVD Drives</option>
                                        <option value="44">Meito</option>
                                        <option value="60">Sound Cards</option>
                                        <option value="61">Cases &amp; Towers</option>
                                        <option value="62">Casual Dresses</option>
                                        <option value="63">Evening Dresses</option>
                                        <option value="64">T-shirts</option>
                                        <option value="65">Tops</option>
                                        <option value="12">Smartphone</option>
                                        <option value="66">Camera Accessories</option>
                                        <option value="68">Octa Core</option>
                                        <option value="69">Quad Core</option>
                                        <option value="70">Dual Core</option>
                                        <option value="71">7.0 Screen</option>
                                        <option value="72">9.0 Screen</option>
                                        <option value="73">Bags &amp; Cases</option>
                                        <option value="67">XailStation</option>
                                        <option value="74">Batteries</option>
                                        <option value="75">Microphones</option>
                                        <option value="76">Stabilizers</option>
                                        <option value="77">Video Tapes</option>
                                        <option value="78">Memory Card Readers</option>
                                        <option value="79">Tripods</option>
                                        <option value="13">Cameras</option>
                                        <option value="14">headphone</option>
                                        <option value="15">Smartwatch</option>
                                        <option value="16">Accessories</option>
                                    </select>
                                    <input type="text" placeholder="Enter your search key ...">
                                    <button class="header-search_btn" type="submit"><i
                                        class="ion-ios-search-strong"><span>Search</span></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="custom-cart_col col-12">
                            <div class="header-right_area">
                                <ul>
                                    <li class="mobile-menu_wrap d-flex d-lg-none">
                                        <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white">
                                            <i class="ion-navicon"></i>
                                        </a>
                                    </li>
                                    <li class="minicart-wrap">
                                        <a href="#miniCart" class="minicart-btn toolbar-btn">
                                            <div class="minicart-count_area">
                                                <span class="item-count">3</span>
                                                <i class="ion-bag"></i>
                                            </div>
                                            <div class="minicart-front_text">
                                                <span>Cart:</span>
                                                <span class="total-price">462.4</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="contact-us_wrap">
                                        <a href="tel://+123123321345"><i class="ion-android-call"></i>+123 321 345</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-minicart_wrapper" id="miniCart">
                <div class="offcanvas-menu-inner">
                    <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
                    <div class="minicart-content">
                        <div class="minicart-heading">
                            <h4>Shopping Cart</h4>
                        </div>
                        <ul class="minicart-list">
                            <li class="minicart-product">
                                <a class="product-item_remove" href="javascript:void(0)"><i
                                    class="ion-android-close"></i></a>
                                <div class="product-item_img">
                                    <img src="assets/images/product/small-size/1.jpg" alt="Uren's Product Image">
                                </div>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="shop-left-sidebar.html">Autem ipsa ad</a>
                                    <span class="product-item_quantity">1 x $145.80</span>
                                </div>
                            </li>
                            <li class="minicart-product">
                                <a class="product-item_remove" href="javascript:void(0)"><i
                                    class="ion-android-close"></i></a>
                                <div class="product-item_img">
                                    <img src="assets/images/product/small-size/2.jpg" alt="Uren's Product Image">
                                </div>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="shop-left-sidebar.html">Tenetur illum amet</a>
                                    <span class="product-item_quantity">1 x $150.80</span>
                                </div>
                            </li>
                            <li class="minicart-product">
                                <a class="product-item_remove" href="javascript:void(0)"><i
                                    class="ion-android-close"></i></a>
                                <div class="product-item_img">
                                    <img src="assets/images/product/small-size/3.jpg" alt="Uren's Product Image">
                                </div>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="shop-left-sidebar.html">Non doloremque placeat</a>
                                    <span class="product-item_quantity">1 x $165.80</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="minicart-item_total">
                        <span>Subtotal</span>
                        <span class="ammount">$462.4‬0</span>
                    </div>
                    <div class="minicart-btn_area">
                        <a href="cart.html" class="uren-btn uren-btn_dark uren-btn_fullwidth">Minicart</a>
                    </div>
                    <div class="minicart-btn_area">
                        <a href="checkout.html" class="uren-btn uren-btn_dark uren-btn_fullwidth">Checkout</a>
                    </div>
                </div>
            </div>
            <div class="mobile-menu_wrapper" id="mobileMenu">
                <div class="offcanvas-menu-inner">
                    <div class="container">
                        <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
                        <div class="offcanvas-inner_search">
                            <form action="#" class="inner-searchbox">
                                <input type="text" placeholder="Search for item...">
                                <button class="search_btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>
                        <nav class="offcanvas-navigation">
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children active"><a href="index.html"><span
                                        class="mm-text">Home</span></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="index.html">
                                                <span class="mm-text">Home One</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-2.html">
                                                <span class="mm-text">Home Two</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-3.html">
                                                <span class="mm-text">Home Three</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="shop-left-sidebar.html">
                                        <span class="mm-text">Shop</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="shop-left-sidebar.html">
                                                <span class="mm-text">Grid View</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="shop-grid-fullwidth.html">
                                                        <span class="mm-text">Column Three</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-4-column.html">
                                                        <span class="mm-text">Column Four</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-left-sidebar.html">
                                                        <span class="mm-text">Left Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-right-sidebar.html">
                                                        <span class="mm-text">Right Sidebar</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="shop-list-left-sidebar.html">
                                                <span class="mm-text">Shop List</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="shop-list-fullwidth.html">
                                                        <span class="mm-text">Full Width</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-list-left-sidebar.html">
                                                        <span class="mm-text">Left Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-list-right-sidebar.html">
                                                        <span class="mm-text">Right Sidebar</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="single-product-gallery-left.html">
                                                <span class="mm-text">Single Product Style</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="single-product-gallery-left.html">
                                                        <span class="mm-text">Gallery Left</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-gallery-right.html">
                                                        <span class="mm-text">Gallery Right</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-tab-style-left.html">
                                                        <span class="mm-text">Tab Style Left</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-tab-style-right.html">
                                                        <span class="mm-text">Tab Style Right</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-sticky-left.html">
                                                        <span class="mm-text">Sticky Left</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-sticky-right.html">
                                                        <span class="mm-text">Sticky Right</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="single-product.html">
                                                <span class="mm-text">Single Product Type</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="single-product.html">
                                                        <span class="mm-text">Single Product</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-sale.html">
                                                        <span class="mm-text">Single Product Sale</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-group.html">
                                                        <span class="mm-text">Single Product Group</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-variable.html">
                                                        <span class="mm-text">Single Product Variable</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-affiliate.html">
                                                        <span class="mm-text">Single Product Affiliate</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-slider.html">
                                                        <span class="mm-text">Single Product Slider</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="blog-left-sidebar.html">
                                        <span class="mm-text">Blog</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children has-children">
                                            <a href="blog-left-sidebar.html">
                                                <span class="mm-text">Grid View</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="blog-2-column.html">
                                                        <span class="mm-text">Column Two</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-3-column.html">
                                                        <span class="mm-text">Column Three</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-left-sidebar.html">
                                                        <span class="mm-text">Left Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-right-sidebar.html">
                                                        <span class="mm-text">Right Sidebar</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children has-children">
                                            <a href="blog-list-left-sidebar.html">
                                                <span class="mm-text">List View</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="blog-list-fullwidth.html">
                                                        <span class="mm-text">List Fullwidth</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-list-left-sidebar.html">
                                                        <span class="mm-text">List Left Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-list-right-sidebar.html">
                                                        <span class="mm-text">List Right Sidebar</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children has-children">
                                            <a href="blog-details-left-sidebar.html">
                                                <span class="mm-text">Blog Details</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="blog-details-left-sidebar.html">
                                                        <span class="mm-text">Left Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-details-right-sidebar.html">
                                                        <span class="mm-text">Right Sidebar</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children has-children">
                                            <a href="blog-gallery-format.html">
                                                <span class="mm-text">Blog Format</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="blog-gallery-format.html">
                                                        <span class="mm-text">Gallery Format</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-audio-format.html">
                                                        <span class="mm-text">Audio Format</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-video-format.html">
                                                        <span class="mm-text">Video Format</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="index.html">
                                        <span class="mm-text">Pages</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="my-account.html">
                                                <span class="mm-text">My Account</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="login-register.html">
                                                <span class="mm-text">Login | Register</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">
                                                <span class="mm-text">Wishlist</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <span class="mm-text">Cart</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="checkout.html">
                                                <span class="mm-text">Checkout</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="compare.html">
                                                <span class="mm-text">Compare</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="faq.html">
                                                <span class="mm-text">FAQ</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="404.html">
                                                <span class="mm-text">Error 404</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <nav class="offcanvas-navigation user-setting_area">
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children active"><a href="javascript:void(0)"><span
                                        class="mm-text">User
                                        Setting</span></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="my-account.html">
                                                <span class="mm-text">My Account</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="login-register.html">
                                                <span class="mm-text">Login | Register</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="javascript:void(0)"><span
                                        class="mm-text">Currency</span></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="mm-text">EUR €</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="mm-text">USD $</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="javascript:void(0)"><span
                                        class="mm-text">Language</span></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="mm-text">English</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="mm-text">Français</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="mm-text">Romanian</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="mm-text">Japanese</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Uren's Header Main Area End Here -->

        <!-- Begin Uren's Breadcrumb Area -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Single Product Style</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Tab Style Left</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Uren's Breadcrumb Area End Here -->

        <!-- Begin Uren's Tab Style Left Area -->
        <?php while($product = $singleproducts->fetch_assoc()){ ?>
        <div class="sp-area sp-tab-style_left">
            <div class="container-fluid">
                <div class="sp-nav">
                    <div class="row">
                        <div class="col-lg-5">
                        
                            
                            <div class="sp-img_area">
                                <div class="sp-img_slider slick-img-slider uren-slick-slider" data-slick-options='{
                                                                "slidesToShow": 1,
                                                                "arrows": false,
                                                                "fade": true,
                                                                "draggable": false,
                                                                "swipe": false,
                                                                "asNavFor": ".sp-img_slider-nav"
                                                                }'>
                                    <div class="single-slide red zoom">
                                        <img src="../photo/<?php echo $product['product_img1'] ?>" alt="Uren's Product Image">
                                    </div>
                                    <div class="single-slide orange zoom">
                                        <img src="../photo/<?php echo $product['product_img2'] ?>" alt="Uren's Product Image">
                                    </div>
                                    <div class="single-slide brown zoom">
                                        <img src="../photo/<?php echo $product['product_img3'] ?>" alt="Uren's Product Image">
                                    </div>
                                    <div class="single-slide umber zoom">
                                        <img src="../photo/<?php echo $product['product_img4'] ?>" alt="Uren's Product Image">
                                    </div>
                                    
                                </div>
                                <div class="sp-img_slider-nav slick-slider-nav uren-slick-slider slider-navigation_style-4" data-slick-options='{
                                                                "slidesToShow": 3,
                                                                "asNavFor": ".sp-img_slider",
                                                                "focusOnSelect": true,
                                                                "arrows" : true,
                                                                "vertical" : true
                                                                }'>
                                    <div class="single-slide red">
                                        <img src="../photo/<?php echo $product['product_img1'] ?>" alt="Uren's Product Thumnail">
                                    </div>
                                    <div class="single-slide orange">
                                        <img src="../photo/<?php echo $product['product_img2'] ?>" alt="Uren's Product Thumnail">
                                    </div>
                                    <div class="single-slide brown">
                                        <img src="../photo/<?php echo $product['product_img3'] ?>" alt="Uren's Product Thumnail">
                                    </div>
                                    <div class="single-slide umber">
                                        <img src="../photo/<?php echo $product['product_img4'] ?>" alt="Uren's Product Thumnail">
                                    </div>
                                
                                </div>
                            </div>
                        
                        </div>
                        <div class="col-lg-7">
                            <div class="sp-content">
                                <div class="sp-heading">
                                    <h5><a href="#"><?php echo $product['product_name'] ?></a></h5>
                                </div>
                                <!-- <span class="reference">Reference: demo_1</span> -->
                                <!-- <div class="rating-box">
                                    <ul>
                                        <li><i class="ion-android-star"></i></li>
                                        <li><i class="ion-android-star"></i></li>
                                        <li><i class="ion-android-star"></i></li>
                                        <li class="silver-color"><i class="ion-android-star"></i></li>
                                        <li class="silver-color"><i class="ion-android-star"></i></li>
                                    </ul>
                                </div> -->
                                <div class="sp-essential_stuff">
                                    <ul>
                                        <li>Brands <a href="javascript:void(0)"><?php $resul= $crudObj->getMannfactory($product['id_brand']);
                                                                                     if ($resul->num_rows > 0) {
                                                                                        // Fetch the first row
                                                                                        $row = $resul->fetch_assoc();
                                                                                        $manufacName = $row['Brand_name'];
                                                                                        echo $manufacName;} ?></a></li>
                                        <li>Product Code: <a href="javascript:void(0)">Product 16</a></li>
                                        <li>Product Quantity: <a href="javascript:void(0)"><?php echo $product['quantity_product'] ?></a></li>
                                        <li>Availability: <a href="javascript:void(0)"><?php  if($product['quantity_product']>0)
                                                                                                  {echo "Yes";}
                                                                                                  else{echo "No";} ?></a></li>
                                        <li>Price: <a href="javascript:void(0)"><span ><span style="text-decoration: line-through;"><?php echo $product['product_price'] ."   "; ?></span><span style="color:red; font-size:15px; font-weight: bold;"><?php echo $product['product_price']*0.9; ?></span ></a></li>
                                    </ul>
                                </div>
                                <!-- <div class="product-size_box">
                                    <span>Size</span>
                                    <select class="myniceselect nice-select">
                                        <option value="1">S</option>
                                        <option value="2">M</option>
                                        <option value="3">L</option>
                                        <option value="4">XL</option>
                                    </select>
                                </div> -->
                                <form method="POST" >
                                <div class="quantity">
                                    <label>Quantity</label>
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" value="1" type="text" name="quantity_value">
                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                    </div>
                                </div>
                                <div class="qty-btn_area">
                                    <ul>
                                        <li><a class="qty-cart_btn" href="single-product-tab-style-left.php"><button type="submit" name="addToCart">Add To Cart</button></a></li>
                                        <li><a class="qty-wishlist_btn" href="wishlist.html" data-toggle="tooltip" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>

                                        </li>
                                        
                                    </ul>
                                </div>
                                </form>
                                <?php  if (isset($_POST['addToCart'])){

                                    $quantity= $_POST['quantity_value'];
                                    // echo $quantity;
                                    $crudObj->addToCart($_GET['productId'], $_SESSION['userID'], $quantity);

                                }?>
                                <a  href="cart.php"><button style="background-color:gold ;padding:5px; margin-top:60px; font-size:15px;">Go To Cart</button></a></li>

                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Uren's Tab Style Left Area End Here -->
                            
        <!-- Begin Uren's Single Product Tab Area -->
        <div class="sp-product-tab_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sp-product-tab_nav">
                            <div class="product-tab">
                                <ul class="nav product-menu">
                                    <li><a class="active" data-toggle="tab" href="#description"><span>Description</span></a>
                                    </li>
                                    
                                    <li><a data-toggle="tab" href="#reviews"><span>Reviews (1)</span></a></li>
                                </ul>
                            </div>
                            <div class="tab-content uren-tab_content">
                                <div id="description" class="tab-pane active show" role="tabpanel">
                                    <div class="product-description">
                                        <ul>
                                            <li>
                                                <strong>Brief</strong>
                                                <span><?php echo $product['product_brife'];?></span>
                                            </li>
                                            <li>
                                                <strong>Description</strong>
                                                <span><?php echo $product['product_des'];?></span>
                                            </li>
                                            

                                        </ul>
                                    </div>
                                </div>
                               
                                <div id="specification" class="tab-pane" role="tabpanel">
                                    <table class="table table-bordered specification-inner_stuff">
                                        <tbody>
                                            <tr>
                                                <td colspan="2"><strong>Memory</strong></td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <td>test 1</td>
                                                <td>8gb</td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <td colspan="2"><strong>Processor</strong></td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <td>No. of Cores</td>
                                                <td>1</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="reviews" class="tab-pane" role="tabpanel">
                                    <div class="tab-pane active" id="tab-review">
                                        <form class="form-horizontal" id="form-review" method="post">
                                         <!-- *********************** -->
                                        <div style="width: 100%; height: 300px; overflow: auto; margin-bottom:20px;}">
                                        <?php 
                                        $reviews=$crudObj->getComment($_GET['productId']);
                                        while($review = $reviews->fetch_assoc()){ 
                                        ?>
                                        <div id="review">
                                                <table class="table table-striped table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td style="width: 50%;"><strong><?php echo $review['userName'];?></strong></td>
                                                            <td class="text-right"><?php echo $review['review_date'];?></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">
                                                                <p><?php echo $review['review'];?></p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                        </div>
                                        
                                        <?php
                                        }?>
                                        </div>
                                            <!-- ************************** -->
                                            <?php 
                                            $order = $crudObj->productInOrder($_SESSION['userID'],$_GET['productId']);
                                            if ($order->num_rows > 0){ 
                                            ?>

                                            <h2>Write a review</h2>
                                            
                                            <div class="form-group required second-child">
                                                <div class="col-sm-12 p-0">
                                                    <label class="control-label">Share your opinion</label>
                                                    <textarea class="review-textarea" name="con_message" id="con_message"></textarea>
                                                    
                                                    <?php $resul= $crudObj->getCutomerName($_SESSION['userID']);
                                                     if ($resul->num_rows > 0) {
                                                        $row = $resul->fetch_assoc();
                                                        $name = $row['first_name'] . ' ' . $row['last_name'];
                                                    };
                                                    ?>

                                                    <input type="hidden" name="username1" value="<?php echo $name;?>">
                                                    <input type="hidden" name="date" value="<?php echo date('Y-m-d'); ?>">
                                                    <input type="hidden" name="ProductId" value="<?php echo $_GET['productId']; ?>">
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group last-child required">
                                            
                                                <div class="uren-btn-ps_right">
                                                    <button name="addReview" class="uren-btn-2">Comment</button>
                                                </div>
                                            </div>

                                            <?php
                                            }
                                            ?>
                                            <!-- *************************************** -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
        if (isset($_POST['addReview'])){
        $crudObj->addComment($_POST['con_message'],$_POST['ProductId'] , $_SESSION['userID'],$_POST['date'],$_POST['username1']);
        }
        ?>




        <!-- Uren's Single Product Tab Area End Here -->

        
<!-- -->
       
        <!-- newwwwwwwwwwwwwwwwwwww -->
        <div class="uren-product_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title_area">
                            <span></span>
                            <h3>Related Products</h3>
                        </div>
                        <div class="product-slider uren-slick-slider slider-navigation_style-1 img-hover-effect_area" data-slick-options='{
                        "slidesToShow": 6,
                        "arrows" : true
                        }' data-slick-responsive='[
                                                {"breakpoint":1501, "settings": {"slidesToShow": 4}},
                                                {"breakpoint":1200, "settings": {"slidesToShow": 3}},
                                                {"breakpoint":992, "settings": {"slidesToShow": 2}},
                                                {"breakpoint":767, "settings": {"slidesToShow": 1}},
                                                {"breakpoint":480, "settings": {"slidesToShow": 1}}
                                            ]'>
                            <!-- ****************************** -->
                            <?php $relatedProducts = $crudObj->getAllProductsInCatagory($product['category_id']);?> 
                            <?php while($relProduct = $relatedProducts->fetch_assoc()) { ?>
                            <div class="product-slide_item">
                                <div class="inner-slide">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="../photo/<?php echo $relProduct['product_img1']; ?>" alt="Uren's Product Image">
                                                <img class="secondary-img" src="../photo/<?php echo $relProduct['product_img2']; ?>" alt="Uren's Product Image">
                                            </a>
                                            <div class="sticker">
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="uren-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="uren-wishlist" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                    </li>
                                                    <li><a class="uren-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                            class="ion-android-options"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                            class="ion-android-open"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-desc_info">
                                                
                                                <h6><a class="product-name" href="single-product.html"><?php echo $relProduct['product_name']; ?></a></h6>
                                                <div class="price-box">
                                                    <span class="new-price"><?php echo $relProduct['product_price']; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php            
                            }
                            }
                            ?>
                            <!-- ****************************** -->             
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- new -->


















        
       

        <!-- Begin Uren's Footer Area -->
        <div class="uren-footer_area">
            <div class="footer-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="newsletter-area">
                                <h3 class="title">Join Our Newsletter Now</h3>
                                <p class="short-desc">Get E-mail updates about our latest shop and special offers.</p>
                                <div class="newsletter-form_wrap">
                                    <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletters-form validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll">
                                            <div id="mc-form" class="mc-form subscribe-form">
                                                <input id="mc-email" class="newsletter-input" type="email" autocomplete="off" placeholder="Enter your email" />
                                                <button class="newsletter-btn" id="mc-submit">Subscribe</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-middle_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="footer-widgets_info">
                                <div class="footer-widgets_logo">
                                    <a href="#">
                                        <img src="assets/images/menu/logo/1.png" alt="Uren's Footer Logo">
                                    </a>
                                </div>
                                <div class="widget-short_desc">
                                    <p>We are a team of designers and developers that create high quality HTML Template &
                                        Woocommerce, Shopify Theme.
                                    </p>
                                </div>
                                <div class="widgets-essential_stuff">
                                    <ul>
                                        <li class="uren-address"><span>Address:</span> The Barn,
                                            Ullenhall, Henley
                                            in
                                            Arden B578 5CC, England</li>
                                        <li class="uren-phone"><span>Call
                                        Us:</span> <a href="tel://+123123321345">+123 321 345</a>
                                        </li>
                                        <li class="uren-email"><span>Email:</span> <a href="mailto://info@yourdomain.com">info@yourdomain.com</a></li>
                                    </ul>
                                </div>
                                <div class="uren-social_link">
                                    <ul>
                                        <li class="facebook">
                                            <a href="https://www.facebook.com/" data-toggle="tooltip" target="_blank" title="Facebook">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a href="https://twitter.com/" data-toggle="tooltip" target="_blank" title="Twitter">
                                                <i class="fab fa-twitter-square"></i>
                                            </a>
                                        </li>
                                        <li class="google-plus">
                                            <a href="https://www.plus.google.com/discover" data-toggle="tooltip" target="_blank" title="Google Plus">
                                                <i class="fab fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li class="instagram">
                                            <a href="https://rss.com/" data-toggle="tooltip" target="_blank" title="Instagram">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="footer-widgets_area">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6">
                                        <div class="footer-widgets_title">
                                            <h3>Information</h3>
                                        </div>
                                        <div class="footer-widgets">
                                            <ul>
                                                <li><a href="javascript:void(0)">About Us</a></li>
                                                <li><a href="javascript:void(0)">Delivery Information</a></li>
                                                <li><a href="javascript:void(0)">Privacy Policy</a></li>
                                                <li><a href="javascript:void(0)">Terms & Conditions</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="footer-widgets_title">
                                            <h3>Customer Service</h3>
                                        </div>
                                        <div class="footer-widgets">
                                            <ul>
                                                <li><a href="javascript:void(0)">Contact Us</a></li>
                                                <li><a href="javascript:void(0)">Returns</a></li>
                                                <li><a href="javascript:void(0)">Site Map</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="footer-widgets_title">
                                            <h3>Extras</h3>
                                        </div>
                                        <div class="footer-widgets">
                                            <ul>
                                                <li><a href="javascript:void(0)">About Us</a></li>
                                                <li><a href="javascript:void(0)">Delivery Information</a></li>
                                                <li><a href="javascript:void(0)">Privacy Policy</a></li>
                                                <li><a href="javascript:void(0)">Terms & Conditions</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="footer-widgets_title">
                                            <h3>My Account</h3>
                                        </div>
                                        <div class="footer-widgets">
                                            <ul>
                                                <li><a href="javascript:void(0)">My Account</a></li>
                                                <li><a href="javascript:void(0)">Order History</a></li>
                                                <li><a href="javascript:void(0)">Wish List</a></li>
                                                <li><a href="javascript:void(0)">Newsletter</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom_area">
                <div class="container-fluid">
                    <div class="footer-bottom_nav">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="copyright">
                                    <span><a href="templateshub.net">Templateshub.</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="payment">
                                    <a href="#">
                                        <img src="assets/images/footer/payment/1.png" alt="Uren's Payment Method">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Uren's Footer Area End Here -->
        <!-- Begin Uren's Modal Area -->
        <div class="modal fade modal-wrapper" id="exampleModalCenter">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="modal-inner-area sp-area row">
                            <div class="col-lg-5">
                                <div class="sp-img_area">
                                    <div class="sp-img_slider slick-img-slider uren-slick-slider" data-slick-options='{
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "fade": true,
                                    "draggable": false,
                                    "swipe": false,
                                    "asNavFor": ".sp-img_slider-nav"
                                    }'>
                                        <div class="single-slide red">
                                            <img src="assets/images/product/large-size/1.jpg" alt="Uren's Product Image">
                                        </div>
                                        <div class="single-slide orange">
                                            <img src="assets/images/product/large-size/2.jpg" alt="Uren's Product Image">
                                        </div>
                                        <div class="single-slide brown">
                                            <img src="assets/images/product/large-size/3.jpg" alt="Uren's Product Image">
                                        </div>
                                        <div class="single-slide umber">
                                            <img src="assets/images/product/large-size/4.jpg" alt="Uren's Product Image">
                                        </div>
                                        <div class="single-slide black">
                                            <img src="assets/images/product/large-size/5.jpg" alt="Uren's Product Image">
                                        </div>
                                        <div class="single-slide golden">
                                            <img src="assets/images/product/large-size/6.jpg" alt="Uren's Product Image">
                                        </div>
                                    </div>
                                    <div class="sp-img_slider-nav slick-slider-nav uren-slick-slider slider-navigation_style-3" data-slick-options='{
                                   "slidesToShow": 4,
                                    "asNavFor": ".sp-img_slider",
                                   "focusOnSelect": true,
                                   "arrows" : true,
                                   "spaceBetween": 30
                                  }' data-slick-responsive='[
                                    {"breakpoint":1501, "settings": {"slidesToShow": 3}},
                                    {"breakpoint":992, "settings": {"slidesToShow": 4}},
                                    {"breakpoint":768, "settings": {"slidesToShow": 3}},
                                    {"breakpoint":575, "settings": {"slidesToShow": 2}}
                                ]'>
                                        <div class="single-slide red">
                                            <img src="assets/images/product/small-size/1.jpg" alt="Uren's Product Thumnail">
                                        </div>
                                        <div class="single-slide orange">
                                            <img src="assets/images/product/small-size/2.jpg" alt="Uren's Product Thumnail">
                                        </div>
                                        <div class="single-slide brown">
                                            <img src="assets/images/product/small-size/3.jpg" alt="Uren's Product Thumnail">
                                        </div>
                                        <div class="single-slide umber">
                                            <img src="assets/images/product/small-size/4.jpg" alt="Uren's Product Thumnail">
                                        </div>
                                        <div class="single-slide black">
                                            <img src="assets/images/product/small-size/5.jpg" alt="Uren's Product Thumnail">
                                        </div>
                                        <div class="single-slide golden">
                                            <img src="assets/images/product/small-size/6.jpg" alt="Uren's Product Thumnail">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-6">
                                <div class="sp-content">
                                    <div class="sp-heading">
                                        <h5><a href="#">Dolorem odio provident ut nihil</a></h5>
                                    </div>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="ion-android-star"></i></li>
                                            <li><i class="ion-android-star"></i></li>
                                            <li><i class="ion-android-star"></i></li>
                                            <li class="silver-color"><i class="ion-android-star"></i></li>
                                            <li class="silver-color"><i class="ion-android-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="price-box">
                                        <span class="new-price new-price-2">$194.00</span>
                                        <span class="old-price">$241.00</span>
                                    </div>
                                    <div class="sp-essential_stuff">
                                        <ul>
                                            <li>Brands <a href="javascript:void(0)">Buxton</a></li>
                                            <li>Product Code: <a href="javascript:void(0)">Product 16</a></li>
                                            <li>Reward Points: <a href="javascript:void(0)">100</a></li>
                                            <li>Availability: <a href="javascript:void(0)">In Stock</a></li>
                                            <li>EX Tax: <a href="javascript:void(0)"><span>$453.35</span></a></li>
                                            <li>Price in reward points: <a href="javascript:void(0)">400</a></li>
                                        </ul>
                                    </div>
                                    <div class="color-list_area">
                                        <div class="color-list_heading">
                                            <h4>Available Options</h4>
                                        </div>
                                        <span class="sub-title">Color</span>
                                        <div class="color-list">
                                            <a href="javascript:void(0)" class="single-color active" data-swatch-color="red">
                                                <span class="bg-red_color"></span>
                                                <span class="color-text">Red (+$150)</span>
                                            </a>
                                            <a href="javascript:void(0)" class="single-color" data-swatch-color="orange">
                                                <span class="burnt-orange_color"></span>
                                                <span class="color-text">Orange (+$170)</span>
                                            </a>
                                            <a href="javascript:void(0)" class="single-color" data-swatch-color="brown">
                                                <span class="brown_color"></span>
                                                <span class="color-text">Brown (+$120)</span>
                                            </a>
                                            <a href="javascript:void(0)" class="single-color" data-swatch-color="umber">
                                                <span class="raw-umber_color"></span>
                                                <span class="color-text">Umber (+$125)</span>
                                            </a>
                                            <a href="javascript:void(0)" class="single-color" data-swatch-color="black">
                                                <span class="black_color"></span>
                                                <span class="color-text">Black (+$125)</span>
                                            </a>
                                            <a href="javascript:void(0)" class="single-color" data-swatch-color="golden">
                                                <span class="golden_color"></span>
                                                <span class="color-text">Golden (+$125)</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="quantity">
                                        <label>Quantity</label>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" value="1" type="text">
                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                        </div>
                                    </div>
                                    <div class="uren-group_btn">
                                        <ul>
                                            <li><a href="cart.html" class="add-to_cart">Cart To Cart</a></li>
                                            <li><a href="cart.html"><i class="ion-android-favorite-outline"></i></a></li>
                                            <li><a href="cart.html"><i class="ion-ios-shuffle-strong"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="uren-tag-line">
                                        <h6>Tags:</h6>
                                        <a href="javascript:void(0)">Ring</a>,
                                        <a href="javascript:void(0)">Necklaces</a>,
                                        <a href="javascript:void(0)">Braid</a>
                                    </div>
                                    <div class="uren-social_link">
                                        <ul>
                                            <li class="facebook">
                                                <a href="https://www.facebook.com/" data-toggle="tooltip" target="_blank" title="Facebook">
                                                    <i class="fab fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="twitter">
                                                <a href="https://twitter.com/" data-toggle="tooltip" target="_blank" title="Twitter">
                                                    <i class="fab fa-twitter-square"></i>
                                                </a>
                                            </li>
                                            <li class="youtube">
                                                <a href="https://www.youtube.com/" data-toggle="tooltip" target="_blank" title="Youtube">
                                                    <i class="fab fa-youtube"></i>
                                                </a>
                                            </li>
                                            <li class="google-plus">
                                                <a href="https://www.plus.google.com/discover" data-toggle="tooltip" target="_blank" title="Google Plus">
                                                    <i class="fab fa-google-plus"></i>
                                                </a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://rss.com/" data-toggle="tooltip" target="_blank" title="Instagram">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Uren's Modal Area End Here -->
    </div>

    <!-- JS
============================================ -->

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- Popper JS -->
    <script src="assets/js/vendor/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>

    <!-- Slick Slider JS -->
    <script src="assets/js/plugins/slick.min.js"></script>
    <!-- Barrating JS -->
    <script src="assets/js/plugins/jquery.barrating.min.js"></script>
    <!-- Counterup JS -->
    <script src="assets/js/plugins/jquery.counterup.js"></script>
    <!-- Nice Select JS -->
    <script src="assets/js/plugins/jquery.nice-select.js"></script>
    <!-- Sticky Sidebar JS -->
    <script src="assets/js/plugins/jquery.sticky-sidebar.js"></script>
    <!-- Jquery-ui JS -->
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/jquery.ui.touch-punch.min.js"></script>
    <!-- Lightgallery JS -->
    <script src="assets/js/plugins/lightgallery.min.js"></script>
    <!-- Scroll Top JS -->
    <script src="assets/js/plugins/scroll-top.js"></script>
    <!-- Theia Sticky Sidebar JS -->
    <script src="assets/js/plugins/theia-sticky-sidebar.min.js"></script>
    <!-- Waypoints JS -->
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <!-- jQuery Zoom JS -->
    <script src="assets/js/plugins/jquery.zoom.min.js"></script>

    <!-- Vendor & Plugins JS (Please remove the comment from below vendor.min.js & plugins.min.js for better website load performance and remove js files from avobe) -->
    <!--
<script src="assets/js/vendor/vendor.min.js"></script>
<script src="assets/js/plugins/plugins.min.js"></script>
-->

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>
</html>

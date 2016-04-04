<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="generator" content="" />

    <meta name="keywords" content="<?= $this->meta_keywords ?>" />
    <meta name="title" content="<?= $this->meta_title ?>" />
    <meta name="description" content="<?= $this->meta_description ?>" />
    <meta name="uri-translation" content="on" />
    <title><?= $this->meta_title ?></title>

    <link href='http://fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/public') ?>/css/bgstretcher.css" />
    <link rel="stylesheet" href="<?php echo base_url('/public') ?>/css/owl.carousel.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('/public') ?>/css/template.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('/public') ?>/css/default.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('/public') ?>/css/reveal.css" type="text/css" />

    <link rel="stylesheet" href="<?php echo base_url('/public') ?>/css/photoswipe.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('/public') ?>/css/default-skin/default-skin.css" type="text/css" />

    <link rel="stylesheet" href="<?php echo base_url('/public') ?>/css/amanjaya.css" type="text/css" />
    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->
    <script src="<?php echo base_url('/public/js/jquery-1.8.3.min.js') ?>" type="text/javascript"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js" type="text/javascript" ></script>
    <script src="<?php echo base_url('/public/js/jquery.validate.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('/public/js/owl.carousel.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('/public/js/imagesloaded.pkgd.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('/public/js/jquery.reveal.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('/public/js/zebra_datepicker.js') ?>" type="text/javascript"></script>

    <script src="<?php echo base_url('/public/js/script.js') ?>" type="text/javascript"></script>
    <style>
        #stretcher{
            background:url('<?php echo base_url('/public') ?>/images/suites-hotel-front-3.jpg') no-repeat fixed;
            background-position: center;
            background-size: cover;
        }
    </style>
</head>

<body>
<div id="stretcher" class="bg-web"></div>
<div class="bg-web gradient"></div>
<!-- Body -->
<div class="body">
    <!-- Header -->
    <header class="header" role="banner">
        <div class="on-web">
            <img src="<?php echo base_url('/public') ?>/images/logo.png">
            <hr class="header-line">
        </div>
        <div class="on-ipad">
            <img src="<?php echo base_url('/public') ?>/images/logo_ipad.png">
        </div>
        <div class="on-mobile">
            <!--<div class="title-mobile">Amanjaya Suites Hotel<br>Phmon Penh</div>-->
            <?php if($page_name == "home") { ?>
                <div class="mobile-portrait">
                    <a href="<?php echo base_url(); ?>">
                        <img src="<?php echo base_url('/public') ?>/images/logo-mobiles.png">
                    </a>
                </div>
                <ul class="menu-mobile">
                    <li><a href="<?php echo base_url('/junior-suite-room.html'); ?>">ROOMS & SUITES</a></li>
                    <li><a href="<?php echo base_url('/large-suites-for-frequent-travelers.html'); ?>">BUSINESS TRAVELERS</a></li>
                    <li><a href="<?php echo base_url('/suite-for-honeymoon-with-heart.html'); ?>">HONEYMOONERS</a></li>
                    <li><a href="<?php echo base_url('/key-west-restaurant.html'); ?>">DRINKING & DINING</a></li>
                    <!--<li><a href="#">ABOUT US</a></li>-->
                </ul>
                <div class="menu-contact">
                    <ul>
                        <li>
                            <a href="tel:+85523214747">
                                CALL NOW
                                <div class="img-phone lists"><img src="<?php echo base_url('public/images/icon-phone.png'); ?>" /></div>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:info@amanjaya-pancam-hotel.com">
                                CONTACT US
                                <div class="img-mail lists"><img src="<?php echo base_url('public/images/icon-mail.png'); ?>" /></div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.google.com.kh/maps/place/Amanjaya+Pancam/@11.5689746,104.9301673,15z/data=!4m2!3m1!1s0x0:0x9f0162265b7a4bc6" target="_blank">
                                FIND US
                                <div class="img-find lists"><img src="<?php echo base_url('public/images/icon-find.png'); ?>" /></div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="checking-avialability">
                    <a href="#">Checking Availability</a>
                </div>
            <?php } else { ?>
                <ul id="header-mobile-menu">
                    <li><img class="logo-mini" src="<?php echo base_url('/public') ?>/images/logo-mobiles.png"/></li>
                    <li><a href="tel:+85523214747"><img src="<?php echo base_url('/public') ?>/images/icon-phone-mini.png" /></a></li>
                    <li><a href="mailto:info@amanjaya-pancam-hotel.com"><img src="<?php echo base_url('/public') ?>/images/icon-mail-mini.png" /></a></li>
                    <li><a href="https://www.google.com.kh/maps/place/Amanjaya+Pancam/@11.5689746,104.9301673,15z/data=!4m2!3m1!1s0x0:0x9f0162265b7a4bc6" target="_blank"><img src="<?php echo base_url('/public') ?>/images/icon-find-mini.png" /></a></li>
                    <li class="mobile-dropdown">
                        <!--<a href="#"><img src="<?php /*echo base_url('/public/images/menu-hamburger.png'); */?>" width="22" /></a>-->
                        <div id="jquery-mobile-dropdown-menu">
                            <button class="hamburger">&#9776;</button>
                            <button class="cross">&#735;</button>
                        </div>
                    </li>
                    <div class="clear"></div>
                </ul>
                <?php
                /*$this->load->view('amj/room-suite-mobile-menu');*/
            } ?>
            <!--<li class="chat"><a href="#">Chat Now</a></li>-->
            <!--<img src="<?php /*echo base_url('/public') */?>/images/logo_mobile.png">-->
        </div>
    </header>
    <div class="jquery-sub-dropdown-menu">
        <ul>
            <li><a href="<?php echo base_url() ?>">Home</a></li>
            <?php if($page_name == "junior-suite" || $page_name == "panoramic-suite" || $page_name == "executive-suite") { ?>
                <li><a href="<?php echo base_url('/junior-suite-room.html') ?>">Junior Suite</a></li>
                <li><a href="<?php echo base_url('/panoramic-suite-room.html') ?>">Panoramic Suite</a></li>
                <li><a href="<?php echo base_url('/executive-suite-room.html') ?>">Executive Suite</a></li>
            <?php } elseif($page_name == "leMoonBar" || $page_name == "drinkDinner") { ?>
                <li><a href="<?php echo base_url('/key-west-restaurant.html') ?>">KEY WEST RESTAURANT</a></li>
                <li><a href="<?php echo base_url('/le-moon-bar.html') ?>">LE MOON BAR</a></li>
            <?php } else { ?>
                <li><a href="<?php echo base_url('/junior-suite-room.html'); ?>">ROOMS & SUITES</a></li>
                <li><a href="<?php echo base_url('/large-suites-for-frequent-travelers.html'); ?>">BUSINESS TRAVELERS</a></li>
                <li><a href="<?php echo base_url('/suite-for-honeymoon-with-heart.html'); ?>">HONEYMOONERS</a></li>
                <li><a href="<?php echo base_url('/key-west-restaurant.html'); ?>">DRINKING & DINING</a></li>
            <?php } ?>
        </ul>
    </div>
</div>
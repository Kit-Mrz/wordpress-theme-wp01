<?php
namespace Wp01;

use Wp01\Inc\Page\Header;
use Wp01\Inc\Util\GeneralUtil;

$header = new Header();

?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!--    <title>Education | Template</title>-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon/favicon.png">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="d-flex justify-content-center flex-wrap align-items-center">
                                <div class="header-info-left">
                                    <ul>
                                        <li><span>ENDS TOMORROW:</span> Join Teachable for $4,800 in bonus content</li>
                                    </ul>
                                </div>
                                <div class="header-info-right d-flex align-items-center">
                                    <!-- Timer -->
                                    <div class="cd-timer" id="countdown">
                                        <div class="cd-item">
                                            <span>40</span>
                                            <p>Days</p>
                                        </div>
                                        <div class="cd-item">
                                            <span>18</span>
                                            <p>Hours</p>
                                        </div>
                                        <div class="cd-item">
                                            <span>46</span>
                                            <p>Minutes</p>
                                        </div>
                                        <div class="cd-item">
                                            <span>32</span>
                                            <p>Seconds</p>
                                        </div>
                                    </div>
                                    <!-- /E n d -->
                                    <a href="#" class="browse-btn browse-btn2 ml-40 d-none d-sm-block">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom  header-sticky">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between flex-wrap position-relative">
                    <!-- Logo -->
                    <div class="left-side d-flex align-items-center">
                        <div class="logo">
                            <a href="<?= GeneralUtil::getInstance()->getHomeUrl(); ?>">
                                <img src="<?= GeneralUtil::getInstance()->getThemeFileUri(); ?>/assets/img/logo/logo.png" alt="">
                            </a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <?php Header::getInstance()->menuNav(); ?>
                        </div>
                    </div>
                    <div class="header-right-btn d-flex f-right align-items-center">
                        <a href="#" class="header-btn2 d-none d-xl-inline-block">Call Us : <span> 0 (78) 675 3674</span></a>

                        <ul class="header-social d-none d-sm-block">
                            <li><a href="https://www.fb.com/sai4ull"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube-square"></i></a></li>
                            <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                        </ul>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

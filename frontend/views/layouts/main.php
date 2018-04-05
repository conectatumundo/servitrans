<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAssetThemeservitrans;
use common\widgets\Alert;

AppAssetThemeservitrans::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!--
    <div class="preloader">
        <div id="followingBallsG">
            <div id="followingBallsG_1" class="followingBallsG"></div>
            <div id="followingBallsG_2" class="followingBallsG"></div>
            <div id="followingBallsG_3" class="followingBallsG"></div>
            <div id="followingBallsG_4" class="followingBallsG"></div>
        </div>
    </div>
    //Preloader -->
        <!-- Header -->
        <header class="header" role="banner">
            <div class="wrap">
                <!-- Logo -->
                <div class="logo">
                    <a href="index.html" title="servitrans"><img src="images/servitrans.jpg" alt="servitrans" /></a>
                </div>
                <!-- //Logo -->
                
                <!-- Main Nav -->
                <nav role="navigation" class="main-nav">
                    <ul>
                        <li class="active"><a href="index.html" title="">Home</a></li>
                        <li><a href="destinations.html" title="Destinations">Destinations</a>
                            <ul>
                                <li><a href="destination-single.html" title="Single destination">Single destination</a></li>
                                <li><a href="destination-micro.html" title="Micro destination">Micro destination</a></li>
                            </ul>
                        </li>
                        <li><a href="tailor-made.html" title="Tailor made">Tailor made</a></li>
                        <li><a href="blog.html" title="Blog">Blog</a>
                            <ul>
                                <li><a href="blog.html" title="Post">Blog list</a></li>
                                <li><a href="blog2.html" title="Post">Blog grid</a></li>
                                <li><a href="blog-single.html" title="Post">Post</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html" title="Contact">Contact</a></li>
                        <li><a href="#" title="Pages">Pages</a>
                            <div>
                                <div class="one-fourth">
                                    <h2>Common</h2>
                                    <ul>
                                        <li><a href="left-sidebar-page.html" title="Left sidebar page">Left sidebar page</a></li>
                                        <li><a href="right-sidebar-page.html" title="Right sidebar page">Right sidebar page</a></li>
                                        <li><a href="both-sidebar-page.html" title="Both sidebars page">Both sidebars page</a></li>
                                        <li><a href="full-width-page.html" title="Full width page">Full width page</a></li>
                                    </ul>
                                </div>
                                <div class="one-fourth">
                                    <h2>Booking</h2>
                                    <ul>
                                        <li><a href="search-results.html" title="Search results page">Search results page</a></li>
                                        <li><a href="booking-step1.html" title="Booking step 1">Booking step 1</a></li>
                                        <li><a href="booking-step2.html" title="Booking step 2">Booking step 2</a></li>
                                        <li><a href="booking-step3.html" title="Booking step 3">Booking step 3</a></li>
                                    </ul>
                                </div>
                                <div class="one-fourth">
                                    <h2>Corporate</h2>
                                    <ul>
                                        <li><a href="about.html" title="About u">About us</a></li>
                                        <li><a href="services.html" title="Services">Services</a></li>
                                        <li><a href="faq.html" title="Faq">Faq</a></li>
                                        <li><a href="contact.html" title="Contact">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="one-fourth">
                                    <h2>Special</h2>
                                    <ul>
                                        <li><a href="login.html" title="Login">Login</a></li>
                                        <li><a href="register.html" title="Register">Register</a></li>
                                        <li><a href="account.html" title="My account">My account</a></li>
                                        <li><a href="error.html" title="404 error">404 error</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="http://themeforest.net/item/transfers-transport-and-car-hire-html-template/9366018?ref=themeenergy" title="Purchase">Purchase</a></li>
                    </ul>
                </nav>
                <!-- //Main Nav -->
            </div>
        </header>
        <!-- //Header -->
 
<!--main-->
<div class="main" role="main">
        <?= Alert::widget() ?>
        <?= $content ?>
</div>
<!--//main-->
 
    <!-- Footer -->
    <footer class="footer black" role="contentinfo">
        <div class="wrap">
            <div class="row">
                <!-- Column -->
                <article class="one-half">
                    <h6>About us</h6>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                </article>
                <!-- //Column -->
                
                <!-- Column -->
                <article class="one-fourth">
                    <h6>Need help?</h6>
                    <p>Contact us via phone or email:</p>
                    <p class="contact-data"><span class="icon icon-themeenergy_call"></span> +1 555 555 555</p>
                    <p class="contact-data"><span class="icon icon-themeenergy_mail-2"></span> <a href="mailto:help@servitrans.com">help@servitrans.com</a></p>
                </article>
                <!-- //Column -->
                
                <!-- Column -->
                <article class="one-fourth">
                    <h6>Follow us</h6>
                    <ul class="social">
                        <li><a href="#" title="facebook"><i class="fa fa-fw fa-facebook"></i></a></li>
                        <li><a href="#" title="twitter"><i class="fa fa-fw fa-twitter"></i></a></li>
                        <li><a href="#" title="gplus"><i class="fa fa-fw fa-google-plus"></i></a></li>
                        <li><a href="#" title="linkedin"><i class="fa fa-fw fa-linkedin"></i></a></li>
                        <li><a href="#" title="pinterest"><i class="fa fa-fw fa-pinterest-p"></i></a></li>
                        <li><a href="#" title="vimeo"><i class="fa fa-fw fa-vimeo"></i></a></li>
                    </ul>
                </article>
                <!-- //Column -->
            </div>
            
            <div class="copy">
                <p>Copyright 2016, Themeenergy. All rights reserved. </p>
                
                <nav role="navigation" class="foot-nav">
                    <ul>
                        <li><a href="#" title="Home">Home</a></li>
                        <li><a href="#" title="Blog">Blog</a></li>
                        <li><a href="#" title="About us">About us</a></li>
                        <li><a href="#" title="Contact us">Contact us</a></li>
                        <li><a href="#" title="Terms of use">Terms of use</a></li>
                        <li><a href="#" title="Help">Help</a></li>
                        <li><a href="#" title="For partners">For partners</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>
    <!-- //Footer -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

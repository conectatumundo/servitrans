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
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway:400,500,600,700|Montserrat:400,700">
    
</head>
<body>
<?php $this->beginBody() ?>

    <div class="preloader">
        <div id="followingBallsG">
            <div id="followingBallsG_1" class="followingBallsG"></div>
            <div id="followingBallsG_2" class="followingBallsG"></div>
            <div id="followingBallsG_3" class="followingBallsG"></div>
            <div id="followingBallsG_4" class="followingBallsG"></div>
        </div>
    </div>
    <!-- Preloader -->
        <!-- Header -->
        <header class="header" role="banner">
            <div class="wrap">
                <!-- Logo -->
                <div class="logo">
<<<<<<< HEAD
                    <a href="index.html" title="servitrans"><img src="images/servitrans.jpg" alt="servitrans" /></a>
=======
                    <a href="/" title="<?= Yii::$app->id ?>"><img src="<?= Yii::getAlias('@web') ?>/images/servitrans.png" alt="<?= Yii::$app->id ?>" /></a>
>>>>>>> 4f27c75eac94b93a3fd8b11111a02aba2d06557e
                </div>
                <!-- //Logo -->
                <!-- Main Nav -->
                <nav role="navigation" class="main-nav">
                    <ul>
                        <li class="active">
                            <?= Html::a('Home',['/']); ?>
                        </li>
                        <li class="active">
                            <?= Html::a('Nosotros',['site/nosotros']); ?>
                        </li>
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
                    <h6>Sobre nosotros.</h6>
                    <p>Somos una empresa de transporte terrestre con gran experiencia y calidad de servicio totalmente habilitada por el ministerio y la superintendencia de puertos y transporte, contamos con personal idóneo y tecnología de punta necesarias para ejecutar o emprender la diversidad de negocios en el mercado.</p>
                </article>
                <!-- //Column -->
                
                <!-- Column -->
                <article class="one-fourth">
                    <h6>Necesitas ayuda?</h6>
                    <p>Contactanos:</p>
                    <p class="contact-data"><span class="icon icon-themeenergy_call"></span> +1 555 555 555</p>
<<<<<<< HEAD
                    <p class="contact-data"><span class="icon icon-themeenergy_mail-2"></span> <a href="mailto:help@servitrans.com">help@servitrans.com</a></p>
=======
                    <p class="contact-data"><span class="icon icon-themeenergy_mail-2"></span> <a href="mailto:hola@servitrans.com">hola@servitrans.com</a></p>
>>>>>>> 4f27c75eac94b93a3fd8b11111a02aba2d06557e
                </article>
                <!-- //Column -->
                
                <!--
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
                Column -->
            </div>
            
            <div class="copy">
                <p>Copyright 2018, Todos los derechos son reservados. </p>
                <!--
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
                </nav>-->
            </div>
        </div>
    </footer>
    <!-- //Footer -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

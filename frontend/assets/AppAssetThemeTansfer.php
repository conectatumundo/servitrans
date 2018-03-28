<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAssetThemeTansfer extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/theme-pink.css',
        'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css',
        'css/jquery-ui.theme.css',
        'css/style.css',
        'css/animate.css',
        'css/icons.css',
        'http://fonts.googleapis.com/css?family=Raleway:400,500,600,700|Montserrat:400,700',
        'https://use.fontawesome.com/e808bf9397.js'
    ];
    public $js = [
        'https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js',
        'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js',
        'https://cdn.jsdelivr.net/jquery.ui.timepicker.addon/1.4.5/jquery-ui-timepicker-addon.min.js',
        'js/jquery.uniform.min.js',
        'js/jquery.slicknav.min.js',
        'js/wow.min.js',
        'js/jquery-ui-sliderAccess.js',
        'js/search.js',
        'js/scripts.js',
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}

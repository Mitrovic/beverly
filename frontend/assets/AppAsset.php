<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'fonts/font-awesome.min.css',
        'owlcarousel/css/owl.carousel.css',
        'owlcarousel/css/owl.theme.css',
        'css/venobox.css',
        'css/animate.css',
        'css/style.css',
        'css/hero-style.css',
        'js/modernizr.js',
        'css/switcher/style9.css',
        'css/un.css'
    ];
    public $js = [
        'js/ajax-modal-popup.js',
        'js/modernizr-2.8.3.min.js',
        //'http://maps.google.com/maps/api/js?sensor=true',
        //'js/js.storage.min.js',

        'js/jquery.stellar.min.js',
        'js/jquery.inview.min.js',
        'owlcarousel/js/owl.carousel.min.js',
        'js/jquery.mixitup.js',
        'js/venobox.min.js',
        'js/scrolltopcontrol.js',
        'js/form-contact.js',
        'js/jquery.appear.js',
        'js/wow.min.js',
        'js/jquery.validate.min.js',
        'js/hero-slider.js',
        'js/scripts.js',
        'js/un.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset'
    ];
}

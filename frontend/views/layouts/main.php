<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
function isHomePage() {
    $actualRoute = Yii::$app->controller->getRoute();

    list($controller, $actionId) = Yii::$app->createController('');
    $actionId = !empty($actionId) ? $actionId : $controller->defaultAction;
    $defaultRoute = $controller->getUniqueId() . '/' . $actionId;

    return $actualRoute === $defaultRoute;
}
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
    <link href="https://fonts.googleapis.com/css?family=Hind:400,500,600,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <?php $this->head() ?>
</head>
<?php
if(!isHomePage()) {
    $body_class = 'not_home';
}else{
    $body_class = 'home_page';
}
?>
<body data-spy="scroll" data-offset="80" class = "<?=$body_class?>">
<?php $this->beginBody() ?>

<!-- START NAVBAR -->
<div class="navbar navbar-default navbar-fixed-top menu-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="../" class="navbar-brand"><img src="/img/beverlylogo_small.png" alt="logo"></a>
        </div>
        <div class="navbar-collapse collapse">
            <nav>
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="page-scroll" href="#home">Home</a></li>
                    <li><a class="page-scroll" href="#about">About</a></li>
                    <li><a class="page-scroll" href="#services">Services</a></li>
                    <li><a class="page-scroll" href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div><!--- END CONTAINER -->
</div>
<!-- END NAVBAR -->

<?= $content ?>


<!-- START FOOTER -->
<footer class="footer section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center wow zoomIn">
                <div class="footer_content">
                    <div class="col-sm-2 center-block"><a href="../"><img src="/img/beverlylogo_small.png" alt="" /></a></div>
                    <!--
                    <div class="footer_social">
                        <ul>
                            <li><a class="f_facebook  wow bounceInDown" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="f_twitter wow bounceInDown" data-wow-delay=".1s" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="f_google wow bounceInDown" data-wow-delay=".2s" href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a class="f_linkedin wow bounceInDown" data-wow-delay=".3s" href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a class="f_youtube wow bounceInDown" data-wow-delay=".4s" href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a class="f_skype wow bounceInDown" data-wow-delay=".5s" href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                    -->
                    <p>Beverly Freight &copy; <?php date('YYYY'); ?> All Rights Reserved.</p>
                    <p>Beverly Freight, 1426 W Rosemont Ave Chicago, 60660 USA, (847) 8576129</p>
                </div>

            </div><!--- END COL -->
        </div><!--- END ROW -->
    </div><!--- END CONTAINER -->
</footer>
<!-- END FOOTER -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

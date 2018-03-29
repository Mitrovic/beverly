<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
$this->title = 'Beverly Freight INC';
?>
<section class="cd-hero" id="home">
    <ul class="cd-hero-slider autoplay">
        <li class="selected">
            <div class="slider-image">
                <img src="img/slider/selfdri.jpeg">
            </div>


            <div class="cd-full-width">
                <div class="container">


                    <!-- opener Arman / Nick: added id for ajax login response-->
                    <div class="row opener" id="row_opener">
                        <div class="col-md-10 col-md-offset-1">
                            <h2>Welcome to Beverly Freight</h2>
                            <p>IF YOU ARE SEARCHING FOR A STABLE SUCCESSFUL AND PROFITABLE
                                CAREER IN TRUCKING INDUSTRY, YOU'VE FOUND THE RIGHT PLACE! </p>

                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="boxed-grey">
                                <div class="row" id="login_form_holder">

                                    <div class="col-md-12">
                                        <h3>We are hiring!</h3>
                                        <p><a class="btn btn-skin btn-light-bg" href="/driver/create">Apply now</a></p>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- log in form HOLDER end -->

                </div>

            </div> <!-- .cd-full-width -->

        </li>

        <li>
            <div class="slider-image">
                <img src="img/slider/electric-trucks.jpg">
            </div>

            <div class="cd-half-width text-left">
                <h2>Freight Services</h2>
                <p>We provide solutions for all you need</p>
                <a href="#contact" class="cd-btn btn-home-bg page-scroll">Contact US</a>
            </div> <!-- .cd-half-width -->


        </li>

    </ul> <!-- .cd-hero-slider -->

    <div class="cd-slider-nav">
        <nav>
            <span class="cd-marker item-1"></span>

            <ul>
                <li class="selected"><a href="#0"><i class="fa fa-home"></i>Application</a></li>
                <li><a href="#0"><i class="fa fa-briefcase"></i>Services</a></li>
            </ul>
        </nav>
    </div> <!-- .cd-slider-nav -->
</section> <!-- .cd-hero -->

<!-- START FEATURE-->
<section id="about" class="feature section-padding">
    <div class="container">
        <div class="row">

            <div class="section-title text-center wow zoomIn">
                <h2>Beverly Freight <span>Value</span></h2>
                <div></div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 single_about wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                <i class="fa fa-tablet"></i>
                <h4>Safety</h4>
                <p>We offer safety</p>
            </div><!--- END COL -->
            <div class="col-md-3 col-sm-6 col-xs-12 single_about wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                <i class="fa fa-life-ring"></i>
                <h4>Communication</h4>
                <p>We provide our customers with a dedicated unified account support team</p>
            </div><!--- END COL -->
            <div class="col-md-3 col-sm-6 col-xs-12 single_about wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <i class="fa fa-paper-plane-o"></i>
                <h4>Compromise</h4>
                <p>We provide our customers with a unified online portal</p>
            </div><!--- END COL -->
            <div class="col-md-3 col-sm-6 col-xs-12 single_about wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <i class="fa fa-file-text-o"></i>
                <h4>Teamwork</h4>
                <p>We provide our customers with one unified bill for all their network services</p>
            </div><!--- END COL -->
        </div><!--- END ROW -->
    </div><!--- END CONTAINER -->
</section>
<!-- END FEATURE -->

<!-- START ABOUT US -->
<section class="about_us section-padding">
    <div class="container">
        <div class="row">
            <div class="section-title text-center wow zoomIn">
                <h2>Who we <span>are</span></h2>
                <div></div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single_about_content">
                    <img src="img/aboutus.jpg" class="img-responsive" alt="" />
                    <!-- <iframe src="https://player.vimeo.com/video/183058098" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->
                </div>
            </div><!--- END COL -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single_about_content">

                    <p>
                        Looking for a quality Trucking Company you can depend on? Well, look no further. We're Beverly Freight INC, available where you need us when you need us. Since 2017, we’ve been committed to being the best at what we do, serving clients in the USA area by not just meeting their expectations, but exceeding them.</p>

                </div>


                <div class="skills">
                    <p><b>Warehousing</b></p>
                    <p><b>Regional and Long Hauls</b></p>
                    <p><b>Refrigerated and Flatbed Transport</b></p>

                    <p> Address: 1426 W Rosemont Ave
                        Chicago, 60660
                        USA</p>
                    <p> Phone: (847) 8576129</p>
                </div>


            </div><!--- END COL -->
        </div><!--- END ROW -->
    </div><!--- END CONTAINER -->
</section>
<!-- END ABOUT US -->

<!-- PROMOTION -->
<section class="buy_now">
    <div class="container text-center">
        <h3 class="buy_now_title">We are hiring!</h3>
        <a href="/driver/create" class="btn btn-default btn-promotion-bg page-scroll">Apply now</a>
    </div><!--- END CONTAINER -->
</section>
<!-- END PROMOTION -->


<!-- START WHY CHOOSE US -->
<section class="why_choose_us section-padding">
    <div class="container">
        <div class="row">
            <div class="section-title text-center wow zoomIn">
                <h2>Why <span>choose</span> us</h2>
                <div></div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="feature_img">
                    <img src="img/men.png" class="img-responsive" alt="" />
                </div>
            </div><!--- END COL -->

            <div class="col-md-6 col-sm-6 col-xs-12">
                <div id="why_choose">
                    <!-- Wrapper for slides -->
                    <div class="row ">

                        <div class="col-sm-6">
                            <div class="single_feature">
                                <i class="fa fa-pencil-square-o"></i>
                                <h3>Honesty</h3>
                                <span></span>
                                <p>Our prime objective is to provide honest answers to our customer's questions & their network support challenges</p>
                            </div>
                        </div><!-- END col-sm-6 -->

                        <div class="col-sm-6">
                            <div class="single_feature">
                                <i class="fa fa-magic"></i>
                                <h3>Responsive</h3>
                                <span></span>
                                <p>We are responsive to our customers needs</p>
                            </div>
                        </div><!-- END col-sm-6 -->

                        <div class="col-sm-6">
                            <div class="single_feature">
                                <i class="fa fa-html5"></i>
                                <h3>Simplicity</h3>
                                <span></span>
                                <p>We know simple, effective, managed network services can save our customers time and money</p>
                            </div>
                        </div><!-- END col-sm-6 -->

                        <div class="col-sm-6">
                            <div class="single_feature">
                                <i class="fa fa-heart-o"></i>
                                <h3>Cost Effective</h3>
                                <span></span>
                                <p>We focus on saving our customers time and money</p>
                            </div>
                        </div><!-- END col-sm-6 -->

                    </div><!-- END CAROUSEL INNER -->
                </div><!-- END CAROUSEL SLIDE -->
            </div><!--- END COL -->



        </div><!--- END ROW -->
    </div><!--- END CONTAINER -->
</section>
<!-- END WHY CHOOSE US -->

<!-- START SERVICE  -->
<section id="services" class="our_service section-padding">
    <div class="container">
        <div class="row text-center">
            <div class="section-title wow zoomIn">
                <h2>our <span>services</span></h2>
                <div></div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 no-padding wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                <div class="single_service">
                    <i class="fa fa-circle-o-notch"></i>
                    <h4>Service 1</h4>
                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                </div>
            </div><!--END COL -->
            <div class="col-md-4 col-sm-4 col-xs-12 no-padding wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                <div class="single_service">
                    <i class="fa fa-keyboard-o"></i>
                    <h4>Service 2</h4>
                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                </div>
            </div><!--END COL -->
            <div class="col-md-4 col-sm-4 col-xs-12 no-padding wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                <div class="single_service">
                    <i class="fa fa-bullhorn"></i>
                    <h4>Service 3</h4>
                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                </div>
            </div><!--END COL -->
            <div class="col-md-4 col-sm-4 col-xs-12 no-padding wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                <div class="single_service">
                    <i class="fa fa-life-bouy"></i>
                    <h4>Service 4</h4>
                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                </div>
            </div><!--END COL -->
            <div class="col-md-4 col-sm-4 col-xs-12 no-padding wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                <div class="single_service">
                    <i class="fa fa-briefcase"></i>
                    <h4>Service 5</h4>
                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                </div>
            </div><!--END COL -->
            <div class="col-md-4 col-sm-4 col-xs-12 no-padding wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                <div class="single_service">
                    <i class="fa fa-camera-retro"></i>
                    <h4>Service 6</h4>
                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                </div>
            </div><!--END COL -->
        </div><!--END  ROW -->
    </div><!-- END CONTAINER -->
</section>
<!-- END SERVICE-->



<!-- START CONTACT FORM-->
<section id="contact" class="contact_area section-padding">
    <div class="container">
        <div class="row">
            <div class="section-title text-center wow zoomIn">
                <h2>Get IN <span>Touch</span></h2>
                <h4>You can call us at (847) 8576129 or Submit the form below</h4>

                <div></div>
            </div>
            <div class="col-md-8 col-sm-8 center-block col-xs-12 wow fadeInRight">
                <div class="contact">
                    <?php /* $form = ActiveForm::begin([
                    ]);
                    ?>
                    <?= $form->field($contact, 'name')->textInput() ?>

                    <?= $form->field($contact, 'email') ?>

                    <?= $form->field($contact, 'message')->textarea(['rows' => 6]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Send message', ['class' => 'btn btn-lg btn-contact-bg', 'name' => 'contact-button']) ?>
                    </div>

                    <?php ActiveForm::end(); */ ?>
                </div>
            </div><!-- END COL -->

        </div><!--- END ROW -->
    </div><!--- END CONTAINER -->
</section>
<!-- END CONTACT FORM -->

<!-- START MAP -->
<!-- map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuU_0_uLMnFM-2oWod_fzC0atPZj7dHlU"></script>
<script>
    function initialize() {
        var mapOptions = {
            zoom: 15,

            scrollwheel: false,
            center: new google.maps.LatLng(41.997645,-87.666334),

        };
        var map = new google.maps.Map(document.getElementById('map'),
            mapOptions);
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            //icon: 'img/map_pin.png',
            map: map,

        });

    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<div id="map"></div>
<!-- END MAP -->

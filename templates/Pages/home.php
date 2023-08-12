<?php
$this->assign('title', 'Home');
?>
<!-- Section: home -->
<section id="home">

    <!-- Slider Revolution Start -->
    <div class="rev_slider_wrapper">
        <div class="rev_slider" data-version="5.0">
            <ul>
                <!-- SLIDE 2 -->
                <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="/img/bg/bg7.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 2" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="/img/bg/bg7.jpg" alt="" data-bgposition="center 40%" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme text-uppercase  bg-theme-colored-transparent text-white font-raleway border-left-theme-color-2-6px border-right-theme-color-2-6px pl-30 pr-30" id="rs-2-layer-1" data-x="['center']" data-hoffset="['0']" data-y="['middle']" data-voffset="['-90']" data-fontsize="['28']" data-lineheight="['54']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;" data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;">Welcome To TIMST Darbhanga
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30" id="rs-2-layer-2" data-x="['center']" data-hoffset="['0']" data-y="['middle']" data-voffset="['-20']" data-fontsize="['48']" data-lineheight="['70']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;" data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;">Best Paramedical Institute of Bihar
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme text-white text-center" id="rs-2-layer-3" data-x="['center']" data-hoffset="['0']" data-y="['middle']" data-voffset="['50']" data-fontsize="['16']" data-lineheight="['28']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;" data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">UGS Approved & Government Recognised Cources
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption tp-resizeme" id="rs-2-layer-4" data-x="['center']" data-hoffset="['0']" data-y="['middle']" data-voffset="['115']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-default btn-circled btn-transparent pl-20 pr-20" href="#">Registered Now</a>
                    </div>
                </li>
            </ul>
        </div>
        <!-- end .rev_slider -->
    </div>
    <!-- end .rev_slider_wrapper -->
    <script>
        $(document).ready(function(e) {
            $(".rev_slider").revolution({
                sliderType: "standard",
                sliderLayout: "auto",
                dottedOverlay: "none",
                delay: 5000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style: "zeus",
                        enable: true,
                        hide_onmobile: true,
                        hide_under: 600,
                        hide_onleave: true,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 30,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 30,
                            v_offset: 0
                        }
                    },
                    bullets: {
                        enable: true,
                        hide_onmobile: true,
                        hide_under: 600,
                        style: "metis",
                        hide_onleave: true,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        direction: "horizontal",
                        h_align: "center",
                        v_align: "bottom",
                        h_offset: 0,
                        v_offset: 30,
                        space: 5,
                        tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
                    }
                },
                responsiveLevels: [1240, 1024, 778],
                visibilityLevels: [1240, 1024, 778],
                gridwidth: [1170, 1024, 778, 480],
                gridheight: [650, 768, 960, 720],
                lazyType: "none",
                parallax: {
                    origo: "slidercenter",
                    speed: 1000,
                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                    type: "scroll"
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "on",
                stopAfterLoops: 0,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                fullScreenAutoWidth: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "0",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        });
    </script>
    <!-- Slider Revolution Ends -->

</section>


<!-- Section: Sevices -->
<section>
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-sm-6 col-md-4 maxwidth500 mb-sm-40 wow fadeInUp" data-margin-top="-160px" data-wow-duration="1s" data-wow-delay="0.1s">
                    <?= $this->Html->image('services/bg-1.jpg', ['style' => 'min-height: 220px', 'class' => 'img-fullwidth']) ?>
                    <div class="bg-silver-light border-1px p-20 pt-0 pb-30 mb-sm-180">
                        <h4 class=" letter-space-1 mt-10">Online<span class="text-theme-color-2"> Learning</span></h4>
                        <p>We are providing online learning from our app's wiht name Target Institute E- Learning, where you can educate yourself from our applications.</p>
                        <!-- <a href="#" class="btn btn-sm btn-theme-colored">Read more</a> -->
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 maxwidth500 mb-sm-40 wow fadeInUp" data-margin-top="-160px" data-wow-duration="1s" data-wow-delay="0.1s">
                    <?= $this->Html->image('services/bg-2.jpg', ['style' => 'min-height: 220px', 'class' => 'img-fullwidth']) ?>
                    <div class="bg-silver-light border-1px p-20 pt-0 pb-30 mb-sm-180">
                        <h4 class="letter-space-1 mt-10">Graduation<span class="text-theme-color-2"> Degree</span></h4>
                        <p>Essential 3-4 year college achievement providing expertise, skills, and career pathways, propelling graduates toward success and further education.</p>
                        <!-- <a href="#" class="btn btn-sm btn-theme-colored">Read more</a> -->
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 maxwidth500 mb-sm-0 wow fadeInUp" data-margin-top="-160px" data-wow-duration="1s" data-wow-delay="0.1s">
                    <?= $this->Html->image('services/bg-3.jpg', ['style' => 'min-height: 220px;height: 220px;object-fit: cover;object-position: center;', 'class' => 'img-fullwidth']) ?>
                    <div class="bg-silver-light border-1px p-20 pt-0 pb-30">
                        <h4 class=" letter-space-1 mt-10">Experience<span class="text-theme-color-2"> Yourself</span></h4>
                        <p>Embark on a transformative journey. Embrace challenges, discover passions, and unlock potential with a college graduation degree. Experience the future now.</p>
                        <!-- <a href="#" class="btn btn-sm btn-theme-colored">Read more</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: About -->
<section id="about">
    <div class="container mt-0 pb-70 pt-0">
        <div class="section-content">
            <div class="row mt-10">
                <div class="col-sm-12 col-md-6 mb-sm-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mt-0">Welcome To <span class="text-theme-color-2"> TIMST </span></h3>
                    <p class="lead">Institute of Paramedical Science and Management, popularly known as TIMST, Darbhanga is in the field of paramedical Science and Hospital Management Sector is equipped with all advanced studies courses and is established in Darbhanga with an objective of providing quality education with affordable fees in the field of Paramedical and Hospital Management for those students who have passed 10 th , 12 th , Graduate and Post Graduate levels.</p>
                    <?= $this->Html->link('View Details', '/about-us', ['class' => 'btn btn-colored btn-theme-colored btn-lg text-uppercase font-13 mt-0']) ?>
                </div>
                <div class="col-sm-12 col-md-6 mt-0 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="video-popup">
                        <a href="https://www.youtube.com/watch?v=EUGfA6r02TA" data-lightbox-gallery="youtube-video" title="Video" style="position: relative;">
                            <i class="fa fa-play-circle-o" aria-hidden="true" style="position: absolute; top: 38%; left: 50%; font-size: 80px; color: red;"></i>
                            <img alt="" src="/img/about/5.jpg" class="img-responsive img-fullwidth mt-10 ml-30 ml-xs-0 ml-sm-0">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Divider: why choose us 1 -->
<section class="divider parallax" data-bg-img="/img/bg/bg1.jpg" data-parallax-ratio="0.7">
    <div class="container pt-0 pb-0">
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <div class="bg-white-transparent-9 pb-10 p-40">
                    <h2 class="mb-20 mt-30 line-height-1 text-center text-uppercase">Why <span class="text-theme-color-2"> Choose Us?</span></h2>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="icon-box p-15 mb-0 mb-sm-0 mt-sm-0">
                                <a class="icon pull-left sm-pull-none flip" href="#">
                                    <i class="fa fa-building text-theme-colored font-50"></i>
                                </a>
                                <div class="ml-70 ml-sm-0">
                                    <h4 class="icon-box-title mt-15 mb-5">Best Campus</h4>
                                    <p>TIMST College: Where academia, diversity, and inspiring spaces converge, fostering growth, friendship, and leadership in a vibrant learning community.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="icon-box p-15 mb-0 mb-sm-0 mt-sm-0">
                                <a class="icon pull-left sm-pull-none flip" href="#">
                                    <i class="fa fa-users text-theme-colored font-50"></i>
                                </a>
                                <div class="ml-70 ml-sm-0">
                                    <h4 class="icon-box-title mt-15 mb-5">Best Faculty</h4>
                                    <p>Dedicated and accomplished experts fostering transformative learning, research, and innovation, shaping a community of excellence at every academic juncture.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="icon-box p-15 mb-30 mb-sm-0 mt-sm-0">
                                <a class="icon pull-left sm-pull-none flip" href="#">
                                    <i class="fa fa-book text-theme-colored font-50"></i>
                                </a>
                                <div class="ml-70 ml-sm-0">
                                    <h4 class="icon-box-title mt-15 mb-5">Best Library</h4>
                                    <p>A treasure trove of knowledge, the finest library offers boundless resources, serene study havens, and digital access, enriching scholarly pursuits and igniting curiosity.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="icon-box p-15 mb-30 mb-sm-0 mt-sm-0">
                                <a class="icon pull-left sm-pull-none flip" href="#">
                                    <i class="fa fa-money text-theme-colored font-50"></i>
                                </a>
                                <div class="ml-70 ml-sm-0">
                                    <h4 class="icon-box-title mt-15 mb-5">Low Cost Services</h4>
                                    <p>Affordable, high-quality services tailored to meet needs, ensuring exceptional value without compromising on excellence, making every experience accessible and worthwhile.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: courses  -->
<section id="courses">
    <div class="container pr-5 pl-5 mt-0 pt-70 pb-10 mb-0">
        <div class="section-title text-center">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-0 line-height-1 text-center text-uppercase mb-10 text-black-333">Our <span class="text-theme-color-2"> Courses</span></h2>
                    <p class="pb-20">Empowering journeys through diverse courses, merging theory and practice to cultivate skills, knowledge, and a path to success in a rapidly evolving world.</p>
                    <!-- Works Filter -->
                    <div class="portfolio-filter text-center mb-40" data-link-with="grid-petcare-gallery">
                        <a href="#" class="active mb-sm-10" data-filter="*">All</a>
                        <a href="#diploma" class="" data-filter=".diploma">Diploma</a>
                        <a href="#bachelor" class="" data-filter=".bachelor">Bachelor</a>
                        <a href="#certificate" class="" data-filter=".certificate">Certificate</a>
                        <a href="#nursing" class="" data-filter=".nursing">Nursing</a>
                    </div>
                    <!-- End Works Filter -->

                    <!-- Portfolio Gallery Grid -->
                    <div id="grid-petcare-gallery" class="gallery-isotope grid-4 gutter clearfix">

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item diploma">
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="/img/project/c12.jpg">
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html">Diploma in Radiology</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item diploma">
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="/img/project/c12.jpg">
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html">Diploma in Community Health Care</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item diploma">
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="/img/project/c12.jpg">
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html">Diploma in Ophthalmology</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item diploma">
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="/img/project/c12.jpg">
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html">Diploma in Optometry</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item diploma">
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="/img/project/c12.jpg">
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html">Diploma in Medical Record Technology</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item diploma">
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="/img/project/c12.jpg">
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html">Diploma in Medical Imaging Technology</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item diploma">
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="/img/project/c12.jpg">
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html">Diploma in Medical Lab Technology</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item diploma">
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="/img/project/c12.jpg">
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html">Diploma in Operation Theatre Technology</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item diploma">
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="/img/project/c12.jpg">
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html">Diploma in Community Medical Service and Essential Drugs (CMS & ED)</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item diploma">
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="/img/project/c12.jpg">
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html">Diploma in Physio Therapy</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item bachelor">
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="/img/project/c12.jpg">
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html">Bachelor in Physiotherapy</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item bachelor">
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="/img/project/c12.jpg">
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html">Bachelor of Medical Radio & Imaging Technology</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item bachelor">
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="/img/project/c12.jpg">
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html">Bachelor of Cardiac Technology</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item bachelor">
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="/img/project/c12.jpg">
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html">Bachelor of Dialysis Technology</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item bachelor">
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="/img/project/c12.jpg">
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html">Bachelor of Medical Lab Technology</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item bachelor">
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="/img/project/c12.jpg">
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html">Bachelor of Operation Theatre Technology</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item bachelor">
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="/img/project/c12.jpg">
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html">Bachelor of Optometry Technology</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item bachelor">
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="/img/project/c12.jpg">
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html">Bachelor of Cardiovascular Technology</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item bachelor">
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="/img/project/c12.jpg">
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html">Bachelor of Occupational Therapy</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item certificate">
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="/img/project/c12.jpg">
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html">Certificate in Medical Lab Technology (CMLT)</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item certificate">
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="/img/project/c12.jpg">
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html">Certificate in X-Ray Technology (CXT)</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item certificate">
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="/img/project/c12.jpg">
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html">Certificate in Operation Theatre Technology (COTT)</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item certificate">
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="/img/project/c12.jpg">
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html">Certificate in Dialysis Technology (CDT)</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item certificate">
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="/img/project/c12.jpg">
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html">Certificate in Radiology Imaging Technology (CRIT)</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item certificate">
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="/img/project/c12.jpg">
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html">Certificate in Medical Dresser(CMD)</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item nursing">
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="/img/project/c12.jpg">
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html">ANM</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item nursing">
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="/img/project/c12.jpg">
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html">GNM</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item nursing">
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="/img/project/c12.jpg">
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html">PCM</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->


                    </div>
                    <!-- End Portfolio Gallery Grid -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Diver: Video Background  -->
<section class="divider parallax layer-overlay overlay-theme-colored-9" data-bg-img="/img/bg/bg1.jpg" data-parallax-ratio="0.7">
    <div class="container pt-60 pb-70">
        <!-- Section Content -->
        <div class="section-content">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <h3 class="text-white text-uppercase font-30 font-weight-600 mt-0 mb-20">Watch Our Latest Campus Tour video</h3>
                    <p class="text-white lead">Experience our vibrant campus through our latest immersive tour video. Explore state-of-the-art facilities, lush landscapes, and the heart of academic excellence.</p>
                    <a href="https://www.youtube.com/watch?v=AF5mTJ_DHx4" data-lightbox-gallery="youtube-video"><i class="fa fa-play-circle text-white font-72"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: events -->
<section class="divider parallax layer-overlay overlay-dark-8" data-stellar-background-ratio="0.5" data-bg-img="/img/bg/bg1.jpg">
    <div class="container pt-40 pb-60">
        <div class="section-content">
            <div class="row">
                <div class="col-md-6 wow fadeInLeft mt-10 pr-30" data-wow-duration="1s" data-wow-delay="0.3s">
                    <h3 class="bg-theme-colored p-15 pl-30 mb-0 text-white">Get A Free Registration!</h3>
                    <form id="volunteer_apply_form" class="bg-light p-30 pb-15" name="job_apply_form" action="/enquery" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="form_name">Name <small>*</small></label>
                                    <input id="form_name" name="form_name" type="text" placeholder="Enter Name" required="" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="form_email">Email <small>*</small></label>
                                    <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group mb-10">
                                    <div class="styled-select">
                                        <select id="booking_service" name="booking_service" class="form-control" required="">
                                            <option value="">- Select Your Courses -</option>
                                            <option value="Accounting Technoloiges">Accounting Technoloiges</option>
                                            <option value="Chemical Engineering">Chemical Engineering</option>
                                            <option value="Computer Technologies">Computer Technologies</option>
                                            <option value="Development Studies">Development Studies</option>
                                            <option value="Electrical & Electronic">Electrical & Electronic</option>
                                            <option value="Modern Languages">Modern Languages</option>
                                            <option value="Modern Technologies">Modern Technologies</option>
                                            <option value="Software Engineering">Software Engineering</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="form_message">Message <small>*</small></label>
                            <textarea id="form_message" name="form_message" class="form-control required" rows="2" placeholder="Your cover letter/message sent to the employer"></textarea>
                        </div>
                        <div class="form-group">
                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                            <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Apply Now</button>
                        </div>
                    </form>
                    <!-- Job Form Validation-->
                    <script type="text/javascript">
                        $("#volunteer_apply_form").validate({
                            submitHandler: function(form) {
                                var form_btn = $(form).find('button[type="submit"]');
                                var form_result_div = '#form-result';
                                $(form_result_div).remove();
                                form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                                var form_btn_old_msg = form_btn.html();
                                form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                $(form).ajaxSubmit({
                                    dataType: 'json',
                                    success: function(data) {
                                        if (data.status == 'true') {
                                            $(form).find('.form-control').val('');
                                        }
                                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                                        $(form_result_div).html(data.message).fadeIn('slow');
                                        setTimeout(function() {
                                            $(form_result_div).fadeOut('slow')
                                        }, 6000);
                                    }
                                });
                            }
                        });
                    </script>
                </div>
                <div class="col-md-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                    <h3 class="text-uppercase ml-15 title line-bottom text-white">Next <span class="text-theme-color-2 font-weight-700">Events</span></h3>
                    <div class="bxslider bx-nav-top p-0 m-0">
                        <div class="col-xs-12 pr-0 col-sm-6 col-md-6 mb-20">
                            <div class="pricing table-horizontal maxwidth400">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="thumb">
                                            <img class="img-fullwidth mb-sm-0" src="/img/about/as1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-10 pl-sm-50">
                                        <h4 class="mt-0 mb-5 mt-10"><a href="#" class="text-white">Independent Day</a></h4>
                                        <ul class="list-inline font-16 mb-5 text-white">
                                            <li class="pr-0"><i class="fa fa-calendar mr-5"></i> August 15, 2023 |</li>
                                            <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>Darbhanga</li>
                                        </ul>
                                        <p class="mb-0 font-13 text-white mr-5 pr-10">Embrace freedom and unity on Independent Day as we commemorate shared values, progress, and the spirit of a thriving nation. Happy Independence Day!</p>
                                        <!-- <a class="font-16  text-white mt-20" href="#">Read More →</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end main-content -->
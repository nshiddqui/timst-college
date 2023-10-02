<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- index-mp-layout208:42-->

<head>

    <?= $this->Html->charset() ?>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Target Institute Of Medical Science and Technology | <?= $this->fetch('title') ?>" />
    <meta name="keywords" content="timst, Target Institute Of Medical Science and Technology" />


    <!-- Page Title -->
    <title>Target Institute Of Medical Science and Technology | <?= $this->fetch('title') ?></title>

    <!-- Stylesheet -->
    <?= $this->Html->css('bootstrap.min') ?>
    <?= $this->Html->css('jquery-ui.min') ?>
    <?= $this->Html->css('animate') ?>
    <?= $this->Html->css('css-plugin-collections') ?>
    <!-- CSS | menuzord megamenu skins -->
    <?= $this->Html->css('menuzord-skins/menuzord-rounded-boxed', ['id' => 'menuzord-menu-skins']) ?>
    <!-- CSS | Main style file -->
    <?= $this->Html->css('style-main') ?>
    <!-- CSS | Preloader Styles -->
    <?= $this->Html->css('preloader') ?>
    <!-- CSS | Custom Margin Padding Collection -->
    <?= $this->Html->css('custom-bootstrap-margin-padding') ?>
    <!-- CSS | Responsive media queries -->
    <?= $this->Html->css('responsive') ?>
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <?= $this->Html->css('style') ?>

    <!-- Revolution Slider 5.x CSS settings -->
    <!--<?= $this->Html->css('revolution-slider/css/settings') ?>-->
    <!--<?= $this->Html->css('revolution-slider/css/layers') ?>-->
    <!--<?= $this->Html->css('revolution-slider/css/navigation') ?>-->

    <!-- CSS | Theme Color -->
    <?= $this->Html->css('colors/theme-skin-color-set-1') ?>

    <!-- external javascripts -->
    <?= $this->Html->script('jquery-2.2.4.min') ?>
    <?= $this->Html->script('jquery-ui.min') ?>
    <?= $this->Html->script('bootstrap.min') ?>
    <!-- JS | jquery plugin collection for this theme -->
    <?= $this->Html->script('jquery-plugin-collection') ?>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <?= $this->Html->script('revolution-slider/js/jquery.themepunch.tools.min') ?>
    <?= $this->Html->script('revolution-slider/js/jquery.themepunch.revolution.min') ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="">
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/64d401ab94cf5d49dc697799/1h7e2d2i8';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <a href="https://api.whatsapp.com/send?phone=917903522005&text=Hello, I would like more information"><i class="fa fa-whatsapp" style="font-size: 90px; position: fixed; left: 20px; bottom: 20px; z-index: 999999999999; color: green; background: white; border-radius: 100%; line-height: .8;"></i></a>
    <div id="wrapper" class="clearfix">
        <!-- preloader -->
        <div id="preloader">
            <div id="spinner">
                <?= $this->Html->image('preloaders/5.gif') ?>
            </div>
            <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
        </div>

        <!-- Header -->
        <header id="header" class="header">
            <div class="header-top bg-white-f1 sm-text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="widget no-border m-0">
                                <ul class="list-inline sm-text-center mt-5">
                                    <li> <i class="fa fa-phone text-theme-colored"></i> Call Us at <a href="tel:+917903522005">+(91) 7903 52 2005</a> , <a href="tel:+917903522005">+(91) 8851 63 4010</a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="widget no-border m-0">
                                <ul class="styled-icons icon-circled icon-dark icon-theme-colored icon-sm pull-right flip sm-pull-none sm-text-center">
                                    <li><a href="https://www.facebook.com/profile.php?id=100066598642707"><i class="fa fa-facebook text-white"></i></a></li>
                                    <li><a href="https://www.instagram.com/timstdarbhanga/"><i class="fa fa-instagram text-white"></i></a></li>
                                    <li><a href="https://www.youtube.com/@targetinstituteofmedicalsc957"><i class="fa fa-youtube text-white"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-nav">
                <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
                    <div class="container">
                        <nav id="menuzord-right" class="menuzord default">
                            <a class="menuzord-brand pull-left flip" href="javascript:void(0)">
                                <img src="/img/logo-wide.png" alt="">
                            </a>
                            <ul class="menuzord-menu">
                                <li><a href="/">Home</a></li>
                                <li><a href="/about-us">About Us</a></li>
                                <li><a href="/gallery">Gallery</a></li>
                                <li><a href="/cource">Cources</a></li>
                                <li><a href="https://play.google.com/store/apps/details?id=co.diy.qzmwx" target="_BLANK">Google Play Store</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <!-- Start main-content -->
        <div class="main-content">
            <?= $this->fetch('content') ?>

            <!-- Footer -->
            <footer id="footer" class="footer bg-black-222" data-bg-img="/img/footer-bg.png">
                <div class="container pt-70 pb-40">
                    <div class="row">
                        <div class="col-sm-12 col-md-9">
                            <div class="widget dark">
                                <img class="mt-10 mb-15" alt="" src="/img/logo-wide.png">
                                <p class="font-16 mb-10">Institute of Paramedical Science and Management, popularly known as TIMST, Darbhanga is in the field of paramedical Science and Hospital Management Sector is equipped with all advanced studies courses and is established in Darbhanga with an objective of providing quality education with affordable fees in the field of Paramedical and Hospital Management for those students who have passed 10 th , 12 th , Graduate and Post Graduate levels.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="widget dark">
                                <h5 class="widget-title line-bottom">Quick Contact</h5>
                                <ul class="list-border">
                                    <li><a href="tel:+917903522005">+(91) 7903 52 2005</a></li>
                                    <li><a href="tel:+917903522005">+(91) 8851 63 4010</a></li>
                                    <li><a href="https://goo.gl/maps/vfNEaTSFYS7LV5cz6" class="lineheight-20">Goal ghar of Darbhanga, Mohalla-Sarai Sattar Khan, Laheriasarai, Darbhnga Pin-846001, State, Bihar 846001</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
        </div>
        <!-- end wrapper -->

        <!-- Footer Scripts -->
        <!-- JS | Custom script for all pages -->
        <script src="js/custom.js"></script>

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
        <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
</body>

<!-- index-mp-layout209:18-->

</html>
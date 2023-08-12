<?php
$this->assign('title', 'Gallery');
?>
<!-- Section: inner-header -->
<section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="/img/bg/bg6.jpg">
    <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title text-white text-center">Gallery</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: Gallery -->
<section id="gallery">
    <div class="container pt-50 pb-30">
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">

                    <!-- Portfolio Gallery Grid -->
                    <div id="grid" class="gallery-isotope grid-3 gutter clearfix">
                        <?php
                        $image = [
                        ];

                        ?>
                        <?php foreach ($image as $img) { ?>
                            <!-- Portfolio Item Start -->
                            <div class="gallery-item wheel">
                                <div class="work-gallery">
                                    <div class="gallery-thumb">
                                        <?= $this->Html->image($img, ['class' => 'img-fullwidth']) ?>
                                        <div class="gallery-overlay"></div>
                                        <div class="gallery-contect">
                                            <ul class="styled-icons icon-bordered icon-circled icon-sm">
                                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                <li><a data-rel="prettyPhoto" href="/img/<?= $img ?>"><i class="fa fa-arrows"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="gallery-bottom-part text-center">
                                        <h4 class="title text-uppercase font-raleway font-weight-500 m-0">College View</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item End -->
                        <?php } ?>


                        <!-- End Portfolio Gallery Grid -->
                    </div>
                </div>
            </div>
        </div>
</section>
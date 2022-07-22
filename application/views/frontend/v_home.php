<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $identitas->nama_website?> - <?php echo $identitas->slogan?></title>
    <meta name="title" content="<?php echo $identitas->nama_website?> - <?php echo $identitas->slogan?>">
    <meta property="og:title" content="<?php echo $identitas->nama_website?> - <?php echo $identitas->slogan?>">
    <meta NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
    <meta name="site_url" content="<?php echo base_url()?>">
    <meta name="description" content="<?php echo $identitas->meta_deskripsi?>">
    <meta name="keywords" content="<?php echo $identitas->meta_keyword?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="msvalidate.01" content="DA329AB9B967ABBCBD6B9280D0C3991A" />
    <meta name="web_author" content="arkansys.com">
    <link rel="alternate" href="<?php echo base_url()?>" hreflang="id" />
    <link href='<?php echo base_url()?>' rel='canonical'/>
    <meta property="og:site_name" content="<?php echo $identitas->nama_website?>">
    <meta property="og:description" content="<?php echo $identitas->meta_deskripsi?>">
    <meta property="og:url" content="<?php echo base_url()?>">
    <meta property="og:image" content="<?php echo base_url()?>bahan/backend/foto/<?php echo $identitas->logo?>">
    <meta property="og:image:url" content="<?php echo base_url()?>bahan/backend/foto/<?php echo $identitas->logo?>">
    <meta property="og:type" content="article">
    <link rel="shortcut icon" href="<?php echo base_url()?>bahan/backend/foto/<?php echo $identitas->favicon?>" type="image/x-icon">
    <?php $this->load->view('frontend/analytics')?>
    <?php $this->load->view('frontend/css')?>


</head>

<body>
  <div class="loader-wrap">
      <div class="spinner">
          <div class="double-bounce1"></div>
          <div class="double-bounce2"></div>
      </div>
  </div>
  <div id="main">
    <?php $this->load->view('frontend/menu')?>
    <div id="wrapper">
        <!--content -->
        <div class="content full-height  hidden-item no-mob-hidden">
            <!-- fw-carousel-wrap -->
            <div class="fw-carousel-wrap fsc-holder">
                <!-- fw-carousel  -->
                <div class="fw-carousel  fs-gallery-wrap fl-wrap full-height lightgallery" data-mousecontrol="true">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!-- swiper-slide-->
                            <div class="swiper-slide hov_zoom">
                                <img  src="<?php echo base_url()?>bahan/frontend/images/bg/14.jpg"   alt="">
                                <a href="<?php echo base_url()?>bahan/frontend/images/bg/14.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                <div class="thumb-info">
                                    <h3><a href="portfolio-single.html">Alone on Nature</a></h3>
                                    <p>Here you can place an optional description of your  Project</p>
                                </div>
                            </div>
                            <!-- swiper-slide end-->
                            <!-- swiper-slide-->
                            <div class="swiper-slide hov_zoom">
                                <img  src="<?php echo base_url()?>bahan/frontend/images/bg/2.jpg"   alt="">
                                <a href="<?php echo base_url()?>bahan/frontend/images/bg/2.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                <div class="thumb-info">
                                    <h3><a href="portfolio-single.html">The Other Side of Me</a></h3>
                                    <p>Here you can place an optional description of your  Project</p>
                                </div>
                            </div>
                            <!-- swiper-slide end-->
                            <!-- swiper-slide-->
                            <div class="swiper-slide hov_zoom">
                                <img  src="<?php echo base_url()?>bahan/frontend/images/bg/11.jpg"   alt="">
                                <a href="<?php echo base_url()?>bahan/frontend/images/bg/11.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                <div class="thumb-info">
                                    <h3><a href="portfolio-single.html">Forever Young</a></h3>
                                    <p>Here you can place an optional description of your  Project</p>
                                </div>
                            </div>
                            <!-- swiper-slide end-->
                            <!-- swiper-slide-->
                            <div class="swiper-slide hov_zoom">
                                <img  src="<?php echo base_url()?>bahan/frontend/images/bg/3.jpg"   alt="">
                                <a href="<?php echo base_url()?>bahan/frontend/images/bg/3.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                <div class="thumb-info">
                                    <h3><a href="portfolio-single.html">Travelling is Fun</a></h3>
                                    <p>Here you can place an optional description of your  Project</p>
                                </div>
                            </div>
                            <!-- swiper-slide end-->
                            <!-- swiper-slide-->
                            <div class="swiper-slide hov_zoom">
                                <img  src="<?php echo base_url()?>bahan/frontend/images/bg/5.jpg"   alt="">
                                <a href="<?php echo base_url()?>bahan/frontend/images/bg/5.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                <div class="thumb-info">
                                    <h3><a href="portfolio-single.html">Norway Nature</a></h3>
                                    <p>Here you can place an optional description of your  Project</p>
                                </div>
                            </div>
                            <!-- swiper-slide end-->
                            <!-- swiper-slide-->
                            <div class="swiper-slide hov_zoom">
                                <img  src="<?php echo base_url()?>bahan/frontend/images/bg/9.jpg"   alt="">
                                <a href="<?php echo base_url()?>bahan/frontend/images/bg/9.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                <div class="thumb-info">
                                    <h3><a href="portfolio-single.html">A Wonderful Life</a></h3>
                                    <p>Here you can place an optional description of your  Project</p>
                                </div>
                            </div>
                            <!-- swiper-slide end-->
                            <!-- swiper-slide-->
                            <div class="swiper-slide swiper-link-wrap hov_zoom">
                                <img  src="<?php echo base_url()?>bahan/frontend/images/bg/7.jpg"   alt="">
                                <a href="<?php echo base_url()?>bahan/frontend/images/bg/7.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                <div class="thumb-info">
                                    <h3><a href="portfolio-single.html">Alone on Nature</a></h3>
                                    <p>Here you can place an optional description of your  Project</p>
                                </div>
                                <a href="portfolio.html" class="swiper-link"><span>View Portfolio</span></a>
                            </div>
                            <!-- swiper-slide end-->
                        </div>
                    </div>
                </div>
                <!-- fw-carousel end -->
            </div>
            <!--slider-counter-->
            <div class="slider-counter_wrap">
                <div class="fw-carousel-counter"></div>
            </div>
            <!--slider-counter end-->
            <!--bottom-panel-->
            <div class="bottom-panel">
                <div class="bottom-panel-column bottom-panel-column_left">
                    <div class="scroll-down-wrap">
                        <div class="mousey">
                            <div class="scroller"></div>
                        </div>
                        <span>Scroll down or  Swipe</span>
                    </div>
                    <div class="fs-controls_wrap">
                        <div class="fw_cb fw-carousel-button-prev"><i class="fal fa-angle-left"></i></div>
                        <div class="fw_cb fw-carousel-button-next"><i class="fal fa-angle-right"></i></div>
                    </div>
                </div>
                <div class="bottom-panel-column bottom-panel-column_right">
                    <div class="half-scrollbar">
                        <div class="hs_init"></div>
                    </div>
                </div>
            </div>
            <!--bottom-panel end-->
        </div>
        <!--content end-->
        <!--share-wrapper-->
        <div class="share-wrapper">
            <div class="share-container fl-wrap  isShare"></div>
        </div>
        <!--share-wrapper end-->
    </div>
    <div class="sb-overlay"></div>
    <div class="hiiden-sidebar-wrap outsb">
        <!-- sb-widget-wrap-->
        <div class="sb-widget-wrap fl-wrap">
            <h3>Office & Workshop</h3>
            <div class="sb-widget  fl-wrap">
                <p>Office : Jl. Kelapa puyuh raya blok KE No.19, Kelapa Gading, Jakarta Utara</p>
                <p>Workshop & Office : Jl. Caringin No. 235 Bandung, Jawa Barat</p>
                <p>Workshop & Office : Jl. Dewi Sri No. 19 Renon Denpasar, Bali</p>
                <p>Workshop & Office : Jl. Pahlawan Ende No. 257, Labuan Baju, NTT</p>
            </div>
        </div>
        <!-- sb-widget-wrap end-->
        <!-- sb-widget-wrap-->
        <div class="sb-widget-wrap fl-wrap">
            <h3>We're Are Social</h3>
            <div class="sb-widget    fl-wrap">
                <div class="sidebar-social fl-wrap">
                    <ul>
                        <li><a href="<?php echo $identitas->facebook?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="<?php echo $identitas->instagram?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="<?php echo $identitas->youtube?>" target="_blank"><i class="fab fa-youtube"></i></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="element">
        <div class="element-item"></div>
    </div>
  </div>



  <?php $this->load->view('frontend/js')?>

</body>
</html>

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">
    <title>Potolia - Multipurpose Photography HTML Template</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Specific Meta  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.ico">
    <?php $this->load->view('frontend/css')?>


</head>

<body>
    <div id="preloader"></div>
    <?php $this->load->view('frontend/menu')?>



    <!-- Blog Area -->
    <section class="blog-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="single-main-blogV1 smbv1-details">
                        <div class="smb-img">
                          <img <?php
                            if(empty($posts->blogs_gambar)) {echo "<img src='".base_url()."bahan/foto_blogs/layout_foto_default.png'>";}
                            else { echo " <img src='".base_url()."bahan/foto_blogs/".$posts->blogs_gambar."'> ";}
                            ?>
                        </div>
                        <h4 class="smb-title"><a href="#"><?php echo $posts->blogs_judul?></a></h4>
                        <div class="smb-meta">
                            <ul>

                                  <?php if(empty($posts->blogs_update_oleh)){
                                    echo"<li>By <a href='#'>".$posts->blogs_post_oleh."</a><li>".tgl_indo($posts->blogs_post_tanggal)."</li></li>";
                                  }else{
                                    echo"<li>By <a href='#'>".$posts->blogs_update_oleh."</a><li>".tgl_indo($posts->blogs_update_tanggal)."</li></li>";
                                  } ?>

                            </ul>
                        </div>

                        <div class="smb-text">
                            <?php echo $posts->blogs_desk?>

                        </div>

                        <div class="smb-share-tag">
                            <div class="share-btn">
                                <h4>Share Now:</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>                  

                </div>
                <div class="col-md-4">
                    <div class="f-sidebar">
                        <div class="sidebar-widget s-subscribe">
                            <h4>Follow Us</h4>
                            <div class="sidebar-social">
                                <ul>
                                    <li><a href="<?php echo $identitas->instagram?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="<?php echo $identitas->youtube?>"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a href="<?php echo $identitas->facebook?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget s-featured-post">
                            <h4>Check Our Products</h4>
                            <?php  foreach ($posts_product as $post_new){ ?>
                            <div class="single-f-post">
                              <img <?php
                                        if(empty($post_new->products_gambar)) {
                                          echo "<img src='".base_url()."bahan/layout_foto_promo.png'>";
                                        }else {
                                          echo " <img src='".base_url()."bahan/foto_products/".$post_new->products_gambar."'> ";}
                                        ?>
                                <div class="sfp-text">
                                    <a href="<?php echo base_url("product/$post_new->products_judul_seo ") ?>"><?php echo $post_new->products_judul?></a>
                                </div>
                            </div>

                          <?php } ?>
                        </div>
                        <div class="sidebar-widget s-featured-post s-top-post">
                            <h4>More Article</h4>
                            <?php  foreach ($posts_blogs as $post_new){ ?>
                            <div class="single-f-post">
                              <img <?php
                                        if(empty($post_new->blogs_gambar)) {
                                          echo "<img src='".base_url()."bahan/layout_foto_promo.png'>";
                                        }else {
                                          echo " <img src='".base_url()."bahan/foto_blogs/".$post_new->blogs_gambar."'> ";}
                                        ?>
                                <div class="sfp-text">
                                    <a href="<?php echo base_url("blogs/$post_new->blogs_judul_seo ") ?>"><?php echo $post_new->blogs_judul?></a>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Blog Area -->
    <?php $this->load->view('frontend/bottom')?>
    <?php $this->load->view('frontend/js')?>

</body>
</html>

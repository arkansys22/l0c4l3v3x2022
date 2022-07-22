<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $identitas->nama_website?> - <?php echo $identitas->slogan?></title>
  <meta name="title" content="<?php echo $identitas->nama_website?> <?php echo $identitas->no_telp?> | <?php echo $identitas->meta_keyword?>">
  <meta property="og:title" content="<?php echo $identitas->nama_website?> <?php echo $identitas->no_telp?> | <?php echo $identitas->meta_keyword?>">
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
  <div class="off_canvars_overlay"> </div>
  <?php $this->load->view('frontend/menu')?>
  <!--breadcrumbs area start-->
  <div class="breadcrumbs_area">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="breadcrumb_content">
                      <ul>
                          <li><a href="<?php echo base_url()?>">Beranda</a></li>
                          <li>Kategori Produk</li>
                          <li><?php echo $this->uri->segment(3) ?></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--breadcrumbs area end-->
  <div class="shop_area shop_reverse">
      <div class="container">
          <div class="row">

              <div class="col-lg-12 col-md-12">

                  <!--shop banner area start-->
                  <div class="shop_banner_area mb-30">
                      <div class="row">
                          <div class="col-12">
                              <div class="shop_banner_thumb">
                                  <img src="<?php echo base_url()?>bahan/frontend/img/bg/banner23.jpg" alt="">
                              </div>
                          </div>
                      </div>
                  </div>
                  <!--shop banner area end-->

                  <div class="row shop_wrapper">
                    <?php  foreach ($posts as $post_new){
                                   $isi = character_limiter($post_new->products_desk,200);
                                   ?>
                      <div class="col-lg-3 col-md-4 col-6 ">
                          <article class="single_product">
                              <figure>
                                  <div class="product_thumb">
                                      <a class="primary_img" href="<?php echo base_url("product_detail/$post_new->products_judul_seo ") ?>">
                                        <img <?php
                                            if(empty($post_new->products_gambar)) {
                                              echo "<img src='".base_url()."bahan/layout_foto_promo.png'>";
                                            }else {
                                              echo " <img src='".base_url()."bahan/foto_products/".$post_new->products_gambar."'> ";}
                                            ?>
                                      </a>
                                      <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product7.jpg" alt=""></a>
                                  </div>
                                  <div class="product_content grid_content">
                                      <div class="product_content_inner">
                                          <p class="manufacture_product"><?php echo $post_new->products_cat_judul?></p>
                                          <h4 class="product_name"><a href="<?php echo base_url("product_detail/$post_new->products_judul_seo") ?>"><?php echo $post_new->products_judul?></a></h4>
                                          <div class="price_box">
                                              <span class="std_price">Rp. <?php echo number_format($post_new->products_harga,0,',','.')?></span>
                                          </div>
                                      </div>
                                  </div>

                              </figure>
                          </article>
                      </div>
                      <?php } ?>
                  </div>

                  <div class="shop_toolbar t_bottom">
                      <div class="pagination">
                        <?php echo $pagination; ?>

                      </div>
                  </div>
                  <!--shop toolbar end-->
                  <!--shop wrapper end-->
              </div>
          </div>
      </div>
  </div>


  			</div>
  		</div>
  	</div>

    <?php $this->load->view('frontend/bottom')?>
    <?php $this->load->view('frontend/js')?>
</div>
</body>
</html>

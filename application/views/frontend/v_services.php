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

<body class="has-spotlight ashade-albums-template ashade-albums-template--carousel">
    <?php $this->load->view('frontend/menu')?>
    <div class="ashade-albums-carousel-wrap">
    	<div class="ashade-albums-carousel is-large" id="albums_carousel">
      <?php  foreach ($posts as $post_new){ ?>

        <div class="ashade-album-item">
          <div class="ashade-album-item__inner">
              <a href="<?php echo base_url("services/$post_new->services_judul_seo ") ?>">
            <img <?php
                if(empty($post_new->services_gambar)) {
                  echo "<img src='".base_url()."bahan/foto_products/".$post_new->services_gambar."' width='1000' height='1200'";
                }else {
                  echo " <img src='".base_url()."bahan/foto_products/".$post_new->services_gambar."' data-src='".base_url()."bahan/foto_products/".$post_new->services_gambar."' width='850' height='1200' ";}
                ?>  </a>
                </a>
            <div class="ashade-album-item__overlay"></div>
            <div class="ashade-album-item__title">
              <h2>
                <span><?php echo $post_new->products_cat_judul?></span>
                <span><?php echo $post_new->services_judul_konten?></span>
              </h2>
            </div>
            <a href="<?php echo base_url("services/$post_new->services_judul_seo ") ?>" class="ashade-button">Explore</a>
          </div>
        </div><!-- .ashade-album-item -->
      <?php } ?>

      </div><!-- .ashade-content-scroll -->
    </div>
    <br><br>
<?php $this->load->view('frontend/bottom2')?>
<?php $this->load->view('frontend/aside')?>
<?php $this->load->view('frontend/js')?>
</div>
</body>
</html>

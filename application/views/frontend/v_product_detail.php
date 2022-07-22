<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $posts->products_judul ?> - <?php echo $posts->products_keyword ?> | <?php echo $identitas->nama_website?></title>
  <meta name="title" content="<?php echo $posts->products_judul ?> - <?php echo $posts->products_keyword ?> | <?php echo $identitas->nama_website?>">
  <meta property="og:title" content="<?php echo $posts->products_judul ?> - <?php echo $posts->products_keyword ?> | <?php echo $identitas->nama_website?>">
  <meta NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
  <meta name="site_url" content="<?php echo base_url()?>product_detail/<?php echo $posts->products_judul_seo ?>">
  <meta name="description" content="<?php echo $posts->products_meta_desk ?>">
  <meta name="keywords" content="<?php echo $posts->products_keyword ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta name="msvalidate.01" content="DA329AB9B967ABBCBD6B9280D0C3991A" />
  <meta name="web_author" content="arkansys.com">
  <link rel="alternate" href="<?php echo base_url()?>" hreflang="id" />
  <link href='<?php echo base_url()?>' rel='canonical'/>
  <meta property="og:site_name" content="<?php echo $identitas->nama_website?>">
  <meta property="og:description" content="<?php echo $posts->products_meta_desk ?>">
  <meta property="og:url" content="<?php echo base_url()?>product_detail/<?php echo $posts->products_judul_seo ?>">
  <meta property="og:image" content="<?php echo base_url()?>bahan/foto_products/<?php echo $posts->products_gambar ?>">
  <meta property="og:image:url" content="<?php echo base_url()?>bahan/foto_products/<?php echo $posts->products_gambar ?>">
  <meta property="og:type" content="article">
  <link rel="shortcut icon" href="<?php echo base_url()?>bahan/backend/foto/<?php echo $identitas->favicon?>" type="image/x-icon">
  <?php $this->load->view('frontend/analytics')?>
    <?php $this->load->view('frontend/css')?>


</head>

<body class="has-spotlight ashade-smooth-scroll">
    <?php $cat = $this->Crud_m->view_join_where_array('products_category','products','products_cat_id',array ('products.products_cat_id' => $posts->products_cat_id))->row_array(); ?>
  <div class="off_canvars_overlay"> </div>
  <?php $this->load->view('frontend/menu')?>
  <!-- Content -->
  <div class="ashade-page-title-wrap">
      <h1 class="ashade-page-title">
          <span><?php echo $cat['products_cat_judul']?></span>
          <?php echo $posts->products_judul ?>
      </h1>
  </div>

  <main class="ashade-content-wrap">
  	<div class="ashade-content-scroll">
      <div class="ashade-content">
				<section class="ashade-section">
					<div class="ashade-row">
						<div class="ashade-col col-12">
							<p class="ashade-intro"><?php echo $posts->products_desk ?></p>
						</div>
					</div>
				</section>
        <section class="ashade-section">
					<div class="ashade-grid ashade-grid-2cols is-masonry">
						<div class="ashade-gallery-item ashade-grid-item">

                <img <?php
                    if(empty($posts->products_gambar)) {
                      echo "";
                    }else {
                      echo " <img src='".base_url()."bahan/foto_products/".$posts->products_gambar."' data-src='".base_url()."bahan/foto_products/".$posts->products_gambar."'  class='lazy'> ";}
                    ?>
							</a>
						</div><!-- .ashade-gallery-item -->
            <div class="ashade-gallery-item ashade-grid-item">

                <img <?php
                    if(empty($posts->products_gambar2)) {
                      echo "";
                    }else {
                      echo " <img src='".base_url()."bahan/foto_products/".$posts->products_gambar2."' data-src='".base_url()."bahan/foto_products/".$posts->products_gambar2."'  class='lazy'> ";}
                    ?>  </a>
            </div><!-- .ashade-gallery-item -->
            <div class="ashade-gallery-item ashade-grid-item">

                <img <?php
                    if(empty($posts->products_gambar3)) {
                      echo "";
                    }else {
                      echo " <img src='".base_url()."bahan/foto_products/".$posts->products_gambar3."' data-src='".base_url()."bahan/foto_products/".$posts->products_gambar3."'  class='lazy'> ";}
                    ?>
                  </a>
            </div><!-- .ashade-gallery-item -->
            <div class="ashade-gallery-item ashade-grid-item">

                <img <?php
                    if(empty($posts->products_gambar4)) {
                      echo "";
                    }else {
                      echo " <img src='".base_url()."bahan/foto_products/".$posts->products_gambar4."' data-src='".base_url()."bahan/foto_products/".$posts->products_gambar4."'  class='lazy'> ";}
                    ?>
              </a>
						</div><!-- .ashade-gallery-item -->
            <div class="ashade-gallery-item ashade-grid-item">

                <img <?php
                    if(empty($posts->products_gambar5)) {
                      echo "";
                    }else {
                      echo " <img src='".base_url()."bahan/foto_products/".$posts->products_gambar5."' data-src='".base_url()."bahan/foto_products/".$posts->products_gambar5."'  class='lazy'> ";}
                    ?>
              </a>
            </div><!-- .ashade-gallery-item -->
            <div class="ashade-gallery-item ashade-grid-item">

                <img <?php
                    if(empty($posts->products_gambar6)) {
                      echo "";
                    }else {
                      echo " <img src='".base_url()."bahan/foto_products/".$posts->products_gambar6."' data-src='".base_url()."bahan/foto_products/".$posts->products_gambar6."'  class='lazy'> ";}
                    ?>
              </a>
            </div><!-- .ashade-gallery-item -->
            <div class="ashade-gallery-item ashade-grid-item">

              <?php
                    if(empty($posts->products_url)) {
                      echo "";
                    }else {
                      echo "
                      <iframe width='100%' height='300px' src='https://www.youtube.com/embed/$posts->products_url' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen>
                        </iframe>";}
                    ?>

            </div><!-- .ashade-gallery-item -->
					</div>

				</section>
			</div><!-- .ashade-content -->
      <?php $this->load->view('frontend/bottom2')?>
    </div><!-- .ashade-content-scroll -->
  </main>
  <div class="ashade-to-top-wrap ashade-back-wrap">
      <div class="ashade-back is-to-top">
          <span>Back to</span>
          <span>Top</span>
      </div>
  </div>
  <?php $this->load->view('frontend/aside')?>
  <?php $this->load->view('frontend/js')?>
</div>
</body>
</html>

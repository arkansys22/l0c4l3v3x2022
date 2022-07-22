<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $posts->blogs_judul ?> - <?php echo $posts->blogs_keyword ?> | <?php echo $identitas->nama_website?></title>
  <meta name="title" content="<?php echo $posts->blogs_judul ?> - <?php echo $posts->blogs_keyword ?> | <?php echo $identitas->nama_website?>">
  <meta property="og:title" content="<?php echo $posts->blogs_judul ?> - <?php echo $posts->blogs_keyword ?> | <?php echo $identitas->nama_website?>">
  <meta NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
  <meta name="site_url" content="<?php echo base_url()?>blogs/<?php echo $posts->blogs_judul_seo ?>">
  <meta name="description" content="<?php echo $posts->blogs_meta_desk ?>">
  <meta name="keywords" content="<?php echo $posts->blogs_keyword ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta name="msvalidate.01" content="DA329AB9B967ABBCBD6B9280D0C3991A" />
  <meta name="web_author" content="arkansys.com">
  <link rel="alternate" href="<?php echo base_url()?>" hreflang="id" />
  <link href='<?php echo base_url()?>' rel='canonical'/>
  <meta property="og:site_name" content="<?php echo $identitas->nama_website?>">
  <meta property="og:description" content="<?php echo $posts->blogs_meta_desk ?>">
  <meta property="og:url" content="<?php echo base_url()?>product_detail/<?php echo $posts->blogs_judul_seo ?>">
  <meta property="og:image" content="<?php echo base_url()?>bahan/foto_products/<?php echo $posts->blogs_gambar ?>">
  <meta property="og:image:url" content="<?php echo base_url()?>bahan/foto_products/<?php echo $posts->blogs_gambar ?>">
  <meta property="og:type" content="article">
  <link rel="shortcut icon" href="<?php echo base_url()?>bahan/backend/foto/<?php echo $identitas->favicon?>" type="image/x-icon">
  <?php $this->load->view('frontend/analytics')?>
    <?php $this->load->view('frontend/css')?>


</head>

<body class="has-spotlight ashade-smooth-scroll">

  <div class="off_canvars_overlay"> </div>
  <?php $this->load->view('frontend/menu')?>
  <!-- Content -->
  <div class="ashade-page-title-wrap">
      <h1 class="ashade-page-title">
          <span>All of things you needed</span>
          Let's find it
      </h1>
  </div>

  <main class="ashade-content-wrap">
  	<div class="ashade-content-scroll">
      <div class="ashade-content">
        <section class="ashade-section">
					<div class="ashade-row ashade-row-fullheight exclude-header">
					    <div class="ashade-col col-12">
							<img src="<?php echo base_url()?>bahan/foto_blogs/<?php echo $posts->blogs_gambar ?>" width="100%">
						</div>
					</div><!-- .ashade-row -->
					<br>
					<div class="ashade-col col-12">
							<h5>
							<?php echo $posts->blogs_judul ?>
							</h5>
							<?php echo $posts->blogs_desk ?>

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

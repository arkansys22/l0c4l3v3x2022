<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $posts->services_judul ?> - <?php echo $posts->services_keyword ?> | <?php echo $identitas->nama_website?></title>
  <meta name="title" content="<?php echo $posts->services_judul ?> - <?php echo $posts->services_keyword ?> | <?php echo $identitas->nama_website?>">
  <meta property="og:title" content="<?php echo $posts->services_judul ?> - <?php echo $posts->services_keyword ?> | <?php echo $identitas->nama_website?>">
  <meta NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
  <meta name="site_url" content="<?php echo base_url()?>product_detail/<?php echo $posts->services_judul_seo ?>">
  <meta name="description" content="<?php echo $posts->services_meta_desk ?>">
  <meta name="keywords" content="<?php echo $posts->services_keyword ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta name="msvalidate.01" content="DA329AB9B967ABBCBD6B9280D0C3991A" />
  <meta name="web_author" content="arkansys.com">
  <link rel="alternate" href="<?php echo base_url()?>" hreflang="id" />
  <link href='<?php echo base_url()?>' rel='canonical'/>
  <meta property="og:site_name" content="<?php echo $identitas->nama_website?>">
  <meta property="og:description" content="<?php echo $posts->services_meta_desk ?>">
  <meta property="og:url" content="<?php echo base_url()?>product_detail/<?php echo $posts->services_judul_seo ?>">
  <meta property="og:image" content="<?php echo base_url()?>bahan/foto_products/<?php echo $posts->services_gambar ?>">
  <meta property="og:image:url" content="<?php echo base_url()?>bahan/foto_products/<?php echo $posts->services_gambar ?>">
  <meta property="og:type" content="article">
  <link rel="shortcut icon" href="<?php echo base_url()?>bahan/backend/foto/<?php echo $identitas->favicon?>" type="image/x-icon">
  <?php $this->load->view('frontend/analytics')?>
    <?php $this->load->view('frontend/css')?>


</head>

<body class="has-spotlight ashade-smooth-scroll">
  <?php $cat = $this->Crud_m->view_join_where_array('products_category','services','products_cat_id',array ('services.products_cat_id' => $posts->products_cat_id))->row_array(); ?>
  <div class="off_canvars_overlay"> </div>
  <?php $this->load->view('frontend/menu')?>
  <!-- Content -->
  <div class="ashade-page-title-wrap">
      <h1 class="ashade-page-title">
          <span>our services <?php echo $cat['products_cat_judul']?></span>
          <?php echo $posts->services_judul_konten ?>
      </h1>
  </div>

  <main class="ashade-content-wrap">
  	<div class="ashade-content-scroll">
        <div class="ashade-content">
            <section class="ashade-section">
                    
					<div class="ashade-row ashade-row-fullheight exclude-header">
					    <div class="ashade-col col-6 align-top">
							<img src="<?php echo base_url()?>bahan/foto_products/<?php echo $posts->services_gambar ?>" alt="Andrew Shade" width="1240" height="1500">
						</div>
						<div class="ashade-col col-6">
							<?php echo $posts->services_desk ?>
                <a href="https://api.whatsapp.com/send?phone=<?php echo $identitas->whatsapp?>&text=Hi,%20Logaya.%20I%20want%20a%20package%20<?php echo $posts->services_judul ?>.%20How%20to%20order%20it%20?" class="ashade-button">Order</a>
                <a href="<?php echo base_url()?>works " class="ashade-button">Our Portfolio</a>
						</div>
						
					</div><!-- .ashade-row -->
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

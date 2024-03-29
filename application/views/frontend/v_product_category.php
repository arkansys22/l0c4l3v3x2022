<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta content="crudbiz" name="author">
<meta NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
<title><?php echo $identitas->slogan?></title>
<meta name="title" content="| <?php echo $identitas->nama_website?>">
<meta property="og:title" content=" | <?php echo $identitas->nama_website?>">
<meta name="site_url" content="<?php echo base_url()?>/">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="alternate" href="<?php echo base_url()?>/" hreflang="id" />
<link href='<?php echo base_url()?>templates/' rel='canonical'/>
<meta property="og:site_name" content="<?php echo $identitas->nama_website?>">
<meta property="og:description" content="">
<meta property="og:url" content="<?php echo base_url()?>">
<meta property="og:image" content="<?php echo base_url()?>assets/frontend/produk/">
<meta property="og:image:url" content="<?php echo base_url()?>assets/frontend/produk/">
<meta property="og:type" content="article">
<link rel="shortcut icon" href="<?php echo base_url()?>assets/frontend/campur/<?php echo $identitas->favicon?>" type="image/x-icon">
  <?php $this->load->view('fronts/analytics')?>
    <?php $this->load->view('fronts/css')?>


</head>

<body>
  <?php $this->load->view('fronts/header')?>
  <div class="shop_area shop_fullwidth">
      <div class="shipping_area shipping_three mb-80">
          <div class="container">
              <div class="shipping_inner">
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="<?php echo base_url()?>assets/frontend/theme/img/about/shipping6.png" alt="">
                    </div>
                    <div class="shipping_content">
                        <h4>Gratis Konsultasi</h4>
                        <p>Kebutuhan Acara</p>
                    </div>
                </div>
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="<?php echo base_url()?>assets/frontend/theme/img/about/shipping7.png" alt="">
                    </div>
                    <div class="shipping_content">
                        <h4>Gratis Ongkos Kirim</h4>
                        <p>Minimal Transaksi 1 Juta</p>
                    </div>
                </div>
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="<?php echo base_url()?>assets/frontend/theme/img/about/shipping8.png" alt="">
                    </div>
                    <div class="shipping_content">
                        <h4>Jaminan Kepuasan</h4>
                        <p>Kualitas dan Pelayanan Terbaik</p>
                    </div>
                </div>
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="<?php echo base_url()?>assets/frontend/theme/img/about/shipping10.png" alt="">
                    </div>
                    <div class="shipping_content">
                        <h4>Layanan 24/7 Jam</h4>
                        <p>Technical Support 24 Jam</p>
                    </div>
                </div>
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="<?php echo base_url()?>assets/frontend/theme/img/about/shipping10.png" alt="">
                    </div>
                    <div class="shipping_content">
                        <h4>Layanan 24/7 Jam</h4>
                        <p>Technical Support 24 Jam</p>
                    </div>
                </div>
              </div>
          </div>
      </div>

        <div class="container">
            <h1><center>Produk Sewa Pilihan</center></h1>
            <br><br>
            <div class="row">
                <div class="col-12">
                     <div class="row shop_wrapper grid_3">
                       <?php foreach ($posts as $post_new2){  ?>
                          

                        <div class="col-lg-4 col-md-4 col-12 ">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <img src="<?php echo base_url()?>assets/frontend/produk/<?php echo $post_new2->templates_gambar; ?>" height="1000px" width="1000px" alt="">
                                        <div class="label_product">
                                          <?php
                                          if(empty($post_new2->templates_harga_diskon)) { ?>
                                            <span></span>
                                          <?php
                                        }else{?>
                                          <span class="label_sale">Disc <?php echo number_format($post_new2->templates_harga_diskon,0,',','.')?></span>
                                        <?php }?>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                        <div class="product_content_inner">
                                          <center>
                                            <h3><a href="<?php echo base_url("produk/$post_new2->templates_judul_seo ") ?>"><strong><?php echo $post_new2->templates_judul; ?></a></strong></h3>
                                            <div class="price_box">
                                              <?php
                                              if(empty($post_new2->templates_harga_diskon)) { ?>
                                                <span class="current_price">Rp<?php echo number_format($post_new2->templates_harga,0,',','.')?> /hari</span>
                                              <?php
                                            }else if($a = $post_new2->templates_harga - ($post_new2->templates_harga * ($post_new2->templates_harga_diskon/100))){?>
                                              <span class="old_price">Rp<?php echo number_format($post_new2->templates_harga,0,',','.')?></span><span class="current_price">Rp<?php echo number_format($a,0,',','.')?></span>
                                            <?php }?>

                                            </div>
                                          </center>
                                        </div>
                                        <div class="action_links">
                                          <center>
                                             <ul>
                                                <li class="add_to_cart"><a href="<?php echo base_url("produk/$post_new2->templates_judul_seo ") ?>">Selengkapnya</a></li>
                                                <li class="add_to_sewa"><a href="https://api.whatsapp.com/send?phone=<?php echo $identitas->whatsapp?>&text= Halo ka.. Mau sewa <?php echo $post_new2->templates_judul; ?> | <?php echo base_url(); ?>produk/<?php echo $post_new2->templates_judul_seo ?> untuk acara kami bisa?"  >Pilih Sewa</a></li>

                                            </ul>
                                            </center>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <?php } ?>
                    </div>


                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
        <section class="slider_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="slider_area slider_carousel owl-carousel">
                            <div class="single_slider d-flex align-items-center" >
                              <img src="<?php echo base_url()?>assets/frontend/campur/1-1.png" alt="">
                            </div>
                            <div class="single_slider d-flex align-items-center" >
                              <img src="<?php echo base_url()?>assets/frontend/campur/2-1.png" alt="">
                            </div>
                            <div class="single_slider d-flex align-items-center" >
                              <img src="<?php echo base_url()?>assets/frontend/campur/3-2.png" alt="">
                            </div>
                            <div class="single_slider d-flex align-items-center" >
                              <img src="<?php echo base_url()?>assets/frontend/campur/4-1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br><br>
  </div>

<?php $this->load->view('fronts/footer')?>
<?php $this->load->view('fronts/js')?>

</body>
</html>

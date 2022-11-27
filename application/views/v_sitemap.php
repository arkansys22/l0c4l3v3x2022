<?php header('Content-type: application/xml; charset="ISO-8859-1"',true);  ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
     <loc><?php echo base_url();?></loc>
     <priority>1.0</priority>
  </url>
  <url>
     <loc><?php echo base_url("services/");?></loc>
     <priority>0.5</priority>
  </url>
  <?php foreach($services as $data) { ?>
  <url>
     <loc><?php echo base_url("services/").$data->services_judul_seo;?></loc>
     <priority>0.5</priority>
  </url>
  <?php } ?>
  
  <?php foreach($blogs as $data) { ?>
  <url>
     <loc><?php echo base_url("blogs/").$data->blogs_judul_seo;?></loc>
     <priority>0.5</priority>
  </url>
  <?php } ?>


</urlset>

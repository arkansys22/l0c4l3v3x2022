<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Petacrawl extends CI_Controller {

 public function index(){
     $this->load->helper('url');
     $this->load->model('Sitemap_model');
     $data['products'] = $this->Sitemap_model->generate('products','products_judul_seo','products_id');
     $data['products_cat'] = $this->Sitemap_model->generate('products_cat','products_cat_judul_seo','products_cat_id');
     $this->load->view('v_sitemap',$data);
 }

}

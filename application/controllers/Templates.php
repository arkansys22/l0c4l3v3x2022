<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Templates extends CI_Controller {

  function __construct()
  {
      parent::__construct();
      /* memanggil model untuk ditampilkan pada masing2 modul */
      $this->load->model(array('Crud_m'));
      /* memanggil function dari masing2 model yang akan digunakan */
    }


  public function quick_detail($id)
	{

			$config['per_page'] = 4;
      $config['per_page_templates'] = 10;
			$row = $this->Crud_m->get_by_id_post($id,'templates_id','templates','templates_judul_seo');
			if ($this->uri->segment('4')==''){
				$dari = 0;
				}else{
					$dari = $this->uri->segment('4');
			}
			if ($row)
				{
          $data['posts']            = $this->Crud_m->get_by_id_post($id,'templates_id','templates','templates_judul_seo');
          $data['menu'] = 'quick';
					$data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
          $this->load->view('fronts/produk/v_live_preview', $data);
				}
				else
						{
							$this->session->set_flashdata('message', '<div class="alert alert-dismissible alert-danger">
								<button type="button" class="close" data-dismiss="alert">&times;</button>Halaman tidak ditemukan</b></div>');
							redirect(base_url());
						}
	}

	function add_count_templates($id)
	{
			$check_visitor = $this->input->cookie(urldecode($id), FALSE);
			$ip = $this->input->ip_address();
			if ($check_visitor == false) {
					$cookie = array("name" => urldecode($id), "value" => "$ip", "expire" => 3600, "secure" => false);
					$this->input->set_cookie($cookie);
					$this->Crud_m->update_counter(urldecode($id),'templates','templates_judul_seo','templates_dibaca');
			}
	}
}

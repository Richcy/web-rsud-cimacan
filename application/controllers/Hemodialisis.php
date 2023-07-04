<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hemodialisis extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_Hemodialisis');
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'hemodialisis';
		$data['cur_parent_page'] = 'layanan';
		$data['lang'] = 'id';
		$data['seo_title'] = "RSUD Cimacan | Hemodialisis";
		$data['seo_keyword'] = "Hemodialisis, rumah sakit, rumah sakit umum daerah cimacan, rsud cimacan, rsd cimacan";
		$data['seo_desc'] = 'Hemodialisis...';
		$data['seo_url'] = base_url().'hemodialisis.html';

		$data['datas'] = $this->M_Hemodialisis->show_hemodialisis();
		$datas = $data['datas'];
		$data['galleries'] = $this->M_Hemodialisis->show_gallery('hemodialisis');
		$data['sub_menus'] = $this->M_Hemodialisis->show_sub_menu($datas[0]->id);
		$this->load->view('fe/hemodialisis', $data);
	}


}

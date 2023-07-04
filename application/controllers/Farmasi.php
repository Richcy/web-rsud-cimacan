<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Farmasi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_Farmasi');
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'farmasi';
		$data['cur_parent_page'] = 'layanan';
		$data['lang'] = 'id';
		$data['seo_title'] = "RSUD Cimacan | farmasi";
		$data['seo_keyword'] = "farmasi, Obat-obatan, rumah sakit, rumah sakit umum daerah cimacan, rsud cimacan, rsd cimacan";
		$data['seo_desc'] = 'farmasi...';
		$data['seo_url'] = base_url().'farmasi.html';

		$data['datas'] = $this->M_Farmasi->show_farmasi();
		$datas = $data['datas'];
		$data['galleries'] = $this->M_Farmasi->show_gallery('farmasi');
		$data['sub_menus'] = $this->M_Farmasi->show_sub_menu($datas[0]->id);
		$this->load->view('fe/farmasi', $data);
	}


}


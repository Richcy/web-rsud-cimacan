<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laboratorium extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_Lab');
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'laboratorium';
		$data['cur_parent_page'] = 'layanan';
		$data['lang'] = 'id';
		$data['seo_title'] = "RSUD Cimacan | Laboratorium";
		$data['seo_keyword'] = "Laboratorium, rumah sakit, rumah sakit umum daerah cimacan, rsud cimacan, rsd cimacan";
		$data['seo_desc'] = 'Laboratorium merupakan unit diagnostik dengan pelayanan selama 24 jam yang didukung oleh tenaga profesional berupa dokter dan paramedis yang memil...';
		$data['seo_url'] = base_url().'laboratorium.html';

		$data['datas'] = $this->M_Lab->show_lab();
		$datas = $data['datas'];
		$data['galleries'] = $this->M_Lab->show_gallery('laboratorium');
		$data['sub_menus'] = $this->M_Lab->show_sub_menu($datas[0]->id);
		$this->load->view('fe/laboratorium', $data);
	}


}

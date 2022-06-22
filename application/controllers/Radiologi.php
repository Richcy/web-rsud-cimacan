<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Radiologi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_Radiology');
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'radiology';
		$data['cur_parent_page'] = 'layanan';
		$data['lang'] = 'id';

		$data['seo_title'] = "RSUD Cimacan | Radiologi";
		$data['seo_keyword'] = "Radiolog Rumah Sakit, rumah sakit umum daerah cimacan, rsud cimacan, rsd cimacan";
		$data['seo_desc'] = 'Layanan radiologi merupakan unit penunjang yang ada di RSD Cimacan yang dapat memberikan pelayana pemeriksaan secara profesional dengan hasil beru...';
		$data['seo_url'] = base_url().'radiology.html';

		$data['datas'] = $this->M_Radiology->show_radiology();
		$data['galleries'] = $this->M_Radiology->show_gallery('radiology');
		$this->load->view('fe/radiology', $data);
	}


}

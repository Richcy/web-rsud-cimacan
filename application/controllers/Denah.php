<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Denah extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_Sketch');
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'denah_rs';
		$data['cur_parent_page'] = 'tentang';
		$data['lang'] = 'id';
		$data['seo_title'] = "RSUD Cimacan | Denah";
		$data['seo_keyword'] = "Denah, Bangunan, rumah sakit umum daerah cimacan, rsud cimacan";
		$data['seo_desc'] = "Denah bangunan Rumah Sakit Daerah Cimacan";
		$data['seo_url'] = base_url().'sketch.html';
		$data['datas'] = $this->M_Sketch->getAll();
		$this->load->view('fe/denah', $data);
	}

	public function detail($id)
	{
		$data['cur_page'] = 'denah_rs';
		$data['cur_parent_page'] = 'tentang';
		$data['lang'] = 'id';
		$this->load->view('fe/denah', $data);
	}


}

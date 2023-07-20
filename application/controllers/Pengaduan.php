<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_About_Home');
        $this->load->library('session');
	}

	public function index()
	{
		$lang = 'id';
		$data['cur_page'] = 'pengaduan';
		$data['cur_parent_page'] = 'layanan';
		$data['lang'] = 'id';
		$datas = $this->M_About_Home->getAll($lang);
		$data['seo_title'] = "RSUD Cimacan | Pengaduan";
		$data['seo_keyword'] = "Pengaduan RSUD Cimacan";
		$data['seo_desc'] = "Layanan Pengaduan di RSUD Cimacan.....";
		$data['seo_url'] = base_url().'pengaduan.html';
		$data['datas'] = $datas;
		$this->load->view('fe/pengaduan', $data);
	}

	public function detail($id)
	{
		$data['cur_page'] = 'pengaduan';
		$data['cur_parent_page'] = 'layanan';
		$data['lang'] = 'id';
		$this->load->view('fe/denah', $data);
	}


}

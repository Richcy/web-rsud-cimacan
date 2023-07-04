<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quality_check extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_Quality');
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'quality';
		$data['cur_parent_page'] = 'tentang';
		$data['lang'] = 'id';
		$data['seo_title'] = "RSUD Cimacan | Penilaian Mutu";
		$data['seo_keyword'] = "Penilaian Mutu Rumah Sakit, rumah sakit umum daerah cimacan, rsud cimacan, rsd cimacan";
		$data['seo_desc'] = "Penilaian Mutu Rumah Sakit Daerah Cimacan";
		$data['seo_url'] = base_url().'quality-check.html';
		$data['datas'] = $this->M_Quality->getAll();
		$this->load->view('fe/quality_check', $data);
	}

	public function detail($id)
	{
		$data['cur_page'] = 'quality-check';
		$data['cur_parent_page'] = 'tentang';
		$data['lang'] = 'id';
		$this->load->view('fe/quality_check', $data);
	}


}

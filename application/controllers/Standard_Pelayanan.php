<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Standard_pelayanan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_Standard_Pelayanan');
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'standard_pelayanan_or';
		$data['cur_parent_page'] = 'tentang';
		$data['lang'] = 'id';
		$data['seo_title'] = "RSUD Cimacan | standard Pelayanan";
		$data['seo_keyword'] = "standard Pelayanan Rumah Sakit, rumah sakit umum daerah cimacan, rsud cimacan, rsd cimacan";
		$data['seo_desc'] = "standard Pelayanan Rumah Sakit Daerah Cimacan";
		$data['seo_url'] = base_url().'standard_pelayanan.html';
		$data['datas'] = $this->M_Standard_Pelayanan->getAll();
		$this->load->view('fe/standard_pelayanan', $data);
	}

	public function detail($id)
	{
		$data['cur_page'] = 'standard_pelayanan_or';
		$data['cur_parent_page'] = 'tentang';
		$data['lang'] = 'id';
		$this->load->view('fe/standard_pelayanan', $data);
	}


}

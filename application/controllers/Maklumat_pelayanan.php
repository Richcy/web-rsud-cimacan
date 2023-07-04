<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maklumat_pelayanan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_Maklumat_pelayanan');
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'maklumat_pelayanan_or';
		$data['cur_parent_page'] = 'tentang';
		$data['lang'] = 'id';
		$data['seo_title'] = "RSUD Cimacan | Maklumat Pelayanan";
		$data['seo_keyword'] = "Maklumat Pelayanan Rumah Sakit, rumah sakit umum daerah cimacan, rsud cimacan, rsd cimacan";
		$data['seo_desc'] = "Maklumat Pelayanan Rumah Sakit Daerah Cimacan";
		$data['seo_url'] = base_url().'maklumat_pelayanan.html';
		$data['datas'] = $this->M_Maklumat_pelayanan->getAll();
		$this->load->view('fe/maklumat_pelayanan', $data);
	}

	public function detail($id)
	{
		$data['cur_page'] = 'maklumat_pelayanan_or';
		$data['cur_parent_page'] = 'tentang';
		$data['lang'] = 'id';
		$this->load->view('fe/maklumat_pelayanan', $data);
	}


}

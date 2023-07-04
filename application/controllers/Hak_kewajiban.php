<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hak_kewajiban extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_Hak_Kewajiban');
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'hak_kewajiban';
		$data['cur_parent_page'] = 'tentang';
		$data['lang'] = 'id';
		$data['seo_title'] = "RSUD Cimacan | Hak dan Kewajiban Pasien";
		$data['seo_keyword'] = "Hak dan Kewajiban Pasien Rumah Sakit, rumah sakit umum daerah cimacan, rsud cimacan, rsd cimacan";
		$data['seo_desc'] = 'Hak dan Kewajiban Pasien merupakan...';
		$data['seo_url'] = base_url().'hak_kewajiban.html';
		$data['datas'] = $this->M_Hak_Kewajiban->show_hak_kewajiban();
		$this->load->view('fe/hak_kewajiban', $data);
	}

	public function detail($id)
	{
		$data['cur_page'] = 'hak_kewajiban';
		$data['cur_parent_page'] = 'tentang';
		$data['lang'] = 'id';
		$this->load->view('fe/hak_kewajiban', $data);
	
}


}

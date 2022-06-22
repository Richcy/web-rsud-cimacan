<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_About_Company');
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'profil_rs';
		$data['cur_parent_page'] = 'tentang';
		$lang = 'id';
		$data['lang'] = $lang;
		$datas = $this->M_About_Company->getAll($lang);
		$data['seo_title'] = "RSUD Cimacan | Profil";
		$data['seo_keyword'] = "Profl Rumah Sakit, rumah sakit umum daerah cimacan, rsud cimacan, rsd cimacan";
		$data['seo_desc'] = $datas[0]->description ? substr($datas[0]->description, 0, 150).'...' : '';
		$data['seo_url'] = base_url().'profile.html';
		$data['datas'] = $datas;
		$this->load->view('fe/profil', $data);
	}

	public function detail($id)
	{
		$data['cur_page'] = 'profil_rs';
		$data['cur_parent_page'] = 'tentang';
		$this->load->view('fe/profil', $data);
	}


}

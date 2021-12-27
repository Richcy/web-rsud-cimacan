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
		$data['datas'] = $this->M_About_Company->getAll($lang);
		$this->load->view('fe/profil', $data);
	}

	public function detail($id)
	{
		$data['cur_page'] = 'profil_rs';
		$data['cur_parent_page'] = 'tentang';
		$this->load->view('fe/profil', $data);
	}


}

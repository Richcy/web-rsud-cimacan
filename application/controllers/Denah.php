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
		$data['datas'] = $this->M_Sketch->getAll();
		$this->load->view('fe/denah', $data);
	}

	public function detail($id)
	{
		$data['cur_page'] = 'denah_rs';
		$data['cur_parent_page'] = 'tentang';
		$this->load->view('fe/denah', $data);
	}


}

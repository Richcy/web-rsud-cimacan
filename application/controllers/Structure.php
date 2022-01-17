<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Structure extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_Structure');
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'structure_or';
		$data['cur_parent_page'] = 'tentang';
		$data['lang'] = 'id';
		$data['datas'] = $this->M_Structure->getAll();
		$this->load->view('fe/structure', $data);
	}

	public function detail($id)
	{
		$data['cur_page'] = 'structure_or';
		$data['cur_parent_page'] = 'tentang';
		$data['lang'] = 'id';
		$this->load->view('fe/structure', $data);
	}


}

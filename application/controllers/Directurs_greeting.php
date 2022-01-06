<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Directurs_greeting extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_About_Home');
        $this->load->library('session');
	}

	public function index()
	{
		$lang = 'id';
		$data['cur_page'] = 'directurs_greeting';
		$data['cur_parent_page'] = 'tentang';
		$data['datas'] = $this->M_About_Home->getAll($lang);
		$this->load->view('fe/sambutan_direktur', $data);
	}

	public function detail($id)
	{
		$data['cur_page'] = 'directurs_greeting';
		$data['cur_parent_page'] = 'tentang';
		$this->load->view('fe/denah', $data);
	}


}

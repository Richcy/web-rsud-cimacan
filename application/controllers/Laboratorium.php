<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laboratorium extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_Lab');
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'laboratorium';
		$data['cur_parent_page'] = 'layanan';
		$data['datas'] = $this->M_Lab->show_lab();
		$data['galleries'] = $this->M_Lab->show_gallery('laboratorium');
		$this->load->view('fe/laboratorium', $data);
	}


}

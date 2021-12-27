<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Radiologi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_Radiology');
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'radiology';
		$data['cur_parent_page'] = 'layanan';
		$data['datas'] = $this->M_Radiology->show_radiology();
		$data['galleries'] = $this->M_Radiology->show_gallery('radiology');
		$this->load->view('fe/radiology', $data);
	}


}

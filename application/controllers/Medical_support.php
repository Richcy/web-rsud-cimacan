<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medical_support extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_Medical_Support');
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'medical_support';
		$data['cur_parent_page'] = 'layanan';
		$data['datas'] = $this->M_Medical_Support->show_medical_support();
		$data['galleries'] = $this->M_Medical_Support->show_gallery('medical_support');
		$this->load->view('fe/medical_support', $data);
	}


}

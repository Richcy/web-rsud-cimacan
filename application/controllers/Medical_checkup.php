<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medical_checkup extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_MCU');
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'medical_checkup';
		$data['cur_parent_page'] = 'layanan';
		$data['datas'] = $this->M_MCU->show_mcu();
		$data['datas_gallery'] = $this->M_MCU->show_gallery('mcu');
		$this->load->view('fe/medical_checkup', $data);
	}

	public function detail($id)
	{
		$data['cur_page'] = 'medical_checkup';
		$data['cur_parent_page'] = 'layanan';
		$this->load->view('fe/medical_checkup', $data);
	}


}

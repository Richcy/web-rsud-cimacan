<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan_unggulan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_Unggulan');
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'layanan_unggulan';
		$data['cur_parent_page'] = 'layanan';
		$data['datas'] = $this->M_Unggulan->show_unggulan();
		$data['galleries'] = $this->M_Unggulan->show_gallery('unggulan');
		$this->load->view('fe/layanan_unggulan', $data);
	}

	public function detail($id)
	{
		$data['cur_page'] = 'layanan_unggulan';
		$data['cur_parent_page'] = 'layanan';
		$this->load->view('fe/layanan_unggulan', $data);
	}


}

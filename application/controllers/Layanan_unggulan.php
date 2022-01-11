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
		$datas = $this->M_Unggulan->show_unggulan();
		$data['datas'] = $datas;
		$data['galleries'] = $this->M_Unggulan->show_gallery('unggulan');
		$data['sub_menus'] = $this->M_Unggulan->show_sub_menu($datas[0]->id);
		$this->load->view('fe/layanan_unggulan', $data);
	}

	public function detail($id)
	{
		$data['cur_page'] = 'layanan_unggulan';
		$data['cur_parent_page'] = 'layanan';
		$this->load->view('fe/layanan_unggulan', $data);
	}


}

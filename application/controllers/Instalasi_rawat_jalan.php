<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instalasi_rawat_jalan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_IRJ');
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'instalasi_rawat_jalan';
		$data['cur_parent_page'] = 'layanan';
		$datas = $this->M_IRJ->show_irj();
		$data['datas'] = $datas;
		$data['galleries'] = $this->M_IRJ->show_gallery('unggulan');
		$data['sub_menus'] = $this->M_IRJ->show_sub_menu($datas[0]->id);
		$this->load->view('fe/instalasi_rawat_jalan', $data);
	}


}

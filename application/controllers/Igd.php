<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Igd extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_IGD');
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'igd';
		$data['cur_parent_page'] = 'layanan';
		$datas = $this->M_IGD->show_igd();
		$data['datas'] = $datas;
		$data['galleries'] = $this->M_IGD->show_gallery('igd');
		$data['sub_menus'] = $this->M_IGD->show_sub_menu($datas[0]->id);
		$this->load->view('fe/igd', $data);
	}


}

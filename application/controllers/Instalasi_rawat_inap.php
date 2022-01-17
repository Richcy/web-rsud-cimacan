<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instalasi_rawat_inap extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_IRI');
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'instalasi_rawat_inap';
		$data['cur_parent_page'] = 'layanan';
		$data['lang'] = 'id';
		$datas = $this->M_IRI->show_iri();
		$data['datas'] = $datas;
		$data['galleries'] = $this->M_IRI->show_gallery('iri');
		$data['sub_menus'] = $this->M_IRI->show_sub_menu($datas[0]->id);
		$this->load->view('fe/instalasi_rawat_inap', $data);
	}


}

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
		$data['lang'] = 'id';
		$datas = $this->M_IRJ->show_irj();
		$data['seo_title'] = "RSUD Cimacan | Instalasi Rawat Jalan";
		$data['seo_keyword'] = "Instalasi Rawat Jalan, rumah sakit umum daerah cimacan, rsud cimacan, rsd cimacan";
		$data['seo_desc'] = 'Instalasi Rawat Jalan (IRJ) adalah salah satu instalasi yang berada di RSD Cimacan yang memberikan pelayanan rawat jalan kepada pasien sesuai dengan...';
		$data['seo_url'] = base_url().'outpatient-installation.html';
		$data['datas'] = $datas;
		$data['galleries'] = $this->M_IRJ->show_gallery('unggulan');
		$data['sub_menus'] = $this->M_IRJ->show_sub_menu($datas[0]->id);
		$this->load->view('fe/instalasi_rawat_jalan', $data);
	}


}

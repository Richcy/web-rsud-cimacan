<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tartimah extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_Tartimah');
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'tartimah';
		$data['cur_parent_page'] = 'layanan';
		$data['lang'] = 'id';
		$data['seo_title'] = "RSUD Cimacan | Tartimah";
		$data['seo_keyword'] = "Mobile App untuk pasien RSUD Cimacan. Menyediakan fitur-fitur : Info mengenai RSUD Cimacan ; Reservasi Online; Jadwal Praktek Dokter; Resume Medik; Info Pemakaian Tempat Tidur serta Kritik & Saran";
		$data['seo_desc'] = 'Mobile App untuk pasien RSUD Cimacan. Menyediakan fitur-fitur : Info mengenai RSUD Cimacan ; Reservasi Online; Jadwal Praktek Dokter; Resume Medik; Info Pemakaian Tempat Tidur serta Kritik & Saran';
		$data['seo_url'] = base_url().'tartimah.html';

		$data['datas'] = $this->M_Tartimah->show_tartimah();
		$datas = $data['datas'];
		$data['galleries'] = $this->M_Tartimah->show_gallery('tartimah');
		$data['sub_menus'] = $this->M_Tartimah->show_sub_menu($datas[0]->id);
		$this->load->view('fe/tartimah', $data);
	}


}

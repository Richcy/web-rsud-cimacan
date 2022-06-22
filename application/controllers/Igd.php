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
		$data['lang'] = 'id';
		$datas = $this->M_IGD->show_igd();
		$data['seo_title'] = "RSUD Cimacan | Instalasi Gawat Darurat";
		$data['seo_keyword'] = "Instalasi Gawat Darurat, rumah sakit, rumah sakit umum daerah cimacan, rsud cimacan, rsd cimacan";
		$data['seo_desc'] = 'Instalasi Gawat Darurat (IGD) merupakan layanan yang disediakan oleh Rumah Sakit untuk membantu kebutuhan pasien yang dialami dalam keadaan gawat...';
		$data['seo_url'] = base_url().'igd.html';
		$data['datas'] = $datas;
		$data['galleries'] = $this->M_IGD->show_gallery('igd');
		$data['sub_menus'] = $this->M_IGD->show_sub_menu($datas[0]->id);
		$this->load->view('fe/igd', $data);
	}


}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ambulance extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_Ambulance');
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'ambulance';
		$data['cur_parent_page'] = 'layanan';
		$data['lang'] = 'id';

		$data['seo_title'] = "RSUD Cimacan | Ambulance";
		$data['seo_keyword'] = "Ambulance Rumah Sakit, rumah sakit umum daerah cimacan, rsud cimacan, rsd cimacan";
		$data['seo_desc'] = 'Ambulance merupakan kendaraan yang di rancang khusus untuk memindahkan pasien dari satu tempat ke tempat lain, kendaraan yang di pergunakan untuk...';
		$data['seo_url'] = base_url().'ambulance.html';

		$data['datas'] = $this->M_Ambulance->show_ambulance();
		$datas = $data['datas'];
		$data['sub_menus'] = $this->M_Ambulance->show_sub_menu($datas[0]->id);
		$data['galleries'] = $this->M_Ambulance->show_gallery('ambulance');
		$this->load->view('fe/ambulance', $data);
	}


}

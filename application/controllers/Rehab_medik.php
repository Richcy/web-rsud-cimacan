<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rehab_medik extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_Rehab_Medik');
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'rehab_medik';
		$data['cur_parent_page'] = 'layanan';
		$data['lang'] = 'id';
		$data['seo_title'] = "RSUD Cimacan | rehab_medik";
		$data['seo_keyword'] = "rehab_medik, rumah sakit, rumah sakit umum daerah cimacan, rsud cimacan, rsd cimacan";
		$data['seo_desc'] = 'rehab_medik...';
		$data['seo_url'] = base_url().'rehab-medik.html';

		$data['datas'] = $this->M_Rehab_Medik->show_rehab_medik();
		$datas = $data['datas'];
		$data['galleries'] = $this->M_Rehab_Medik->show_gallery('rehab_medik');
		$data['sub_menus'] = $this->M_Rehab_Medik->show_sub_menu($datas[0]->id);
		$this->load->view('fe/rehab_medik', $data);
	}


}

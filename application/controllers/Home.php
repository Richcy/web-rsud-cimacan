<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('T_Slider');
    	$this->load->model('T_Event');
    	$this->load->model('M_About_Home');
    	$this->load->model('T_Doctor');
    	$this->load->model('T_Featured_Doctor');
    	$this->load->model('T_Gallery');
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'home';
		$data['cur_parent_page'] = '';

		$data['seo_title'] = "RSUD Cimacan | Beranda";
		$data['seo_keyword'] = "Beranda, Halaman Utama, rumah sakit umum daerah cimacan, rsud cimacan, rsd cimacan";
		$data['seo_desc'] = 'Rumah Sakit Umum Daerah Cimacan pada awalnya adalah Puskesmas Pacet (Cimacan) yang sudah berdiri sejak tahun 1953, kemudian pada tahun 1981 statusnya meningkat menjadi Puskesmas DTP dan berubah status menjadi Rumah Sakit dengan ditetapkannya Surat Keputusan Bupati Cianjur atas nama Pemerintah Daerah Kabupaten Cianjur Nomor 19 Tahu…';
		$data['seo_url'] = base_url();

		$lang = 'id';
		$data['lang'] = $lang;
		$data['datas_slide'] = $this->T_Slider->show_all();
		$data['data_events'] = $this->T_Event->getHome();
		$data['datas_about'] = $this->M_About_Home->getAll($lang);
		$data['datas_doctor'] = $this->T_Featured_Doctor->show_all();
		$data['datas_gallery'] = $this->T_Gallery->getHome();
		$this->load->view('fe/home', $data);
	}

	public function home($lang)
	{
		$data['cur_page'] = 'home';
		$data['cur_parent_page'] = '';

		$lang = $lang ? $lang : 'id';
		$data['lang'] = $lang;
		$data['datas_slide'] = $this->T_Slider->show_all();
		$this->load->view('fe/home', $data);
	}


}

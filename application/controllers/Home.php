<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('T_Slider');
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

		$lang = 'id';
		$data['lang'] = $lang;
		$data['datas_slide'] = $this->T_Slider->show_all();
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

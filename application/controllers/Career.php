<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Career extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('T_Career');
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'career';
		$data['cur_parent_page'] = '';

		$s = $this->input->get('s') ? $this->input->get('s') : '';
		$page = 1;
		$totalData = $this->T_Career->getTotal($s);
		$totalPage = ceil($totalData[0]->totalData/6);

		$data['s'] = $s;
		$data['lang'] = 'id';
		$data['page'] = 1;
		$data['totalData'] = $totalData[0]->totalData;
		$data['totalPage'] = $totalPage;
		$data['datas'] = $this->T_Career->getPage($page, $s);
		$this->load->view('fe/career', $data);
	}

	public function page($page)
	{
		$data['cur_page'] = 'career';
		$data['cur_parent_page'] = '';

		$s = $this->input->get('s') ? $this->input->get('s') : '';
		$page = $page ? $page : 1;
		$totalData = $this->T_Career->getTotal($s);
		$totalPage = ceil($totalData[0]->totalData/6);

		$data['s'] = $s;
		$data['lang'] = 'id';
		$data['page'] = $page ? $page : 1;
		$data['totalData'] = $totalData[0]->totalData;
		$data['totalPage'] = $totalPage;
		$data['datas'] = $this->T_Career->getPage($page, $s);
		$this->load->view('fe/career', $data);
	}

	public function detail($id)
	{
		$data['cur_page'] = 'career';
		$data['cur_parent_page'] = '';
		$data['datas'] = $this->T_Career->getDetail($id);
		$data['datas_other'] = $this->T_Career->getOther($id);
		$this->load->view('fe/career_detail', $data);
	}


}

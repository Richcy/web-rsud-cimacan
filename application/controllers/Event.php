<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('T_Event');
    	$this->load->model('T_Event_Category');
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'event';
		$data['cur_parent_page'] = '';

		$data['seo_title'] = "RSD Cimacan | Event";
		$data['seo_keyword'] = "Event Acara Agenda RSD Cimacan";
		$data['seo_desc'] = 'Daftar Acara yang diadakan oleh Rumah Sakit Daerah Cimacan';
		$data['seo_url'] = base_url().'event/';

		$category = $this->input->get('category') ? $this->input->get('category') : '';
		$s = $this->input->get('s') ? $this->input->get('s') : '';
		$page = 1;
		$totalData = $this->T_Event->getTotal($category, $s);
		$totalPage = ceil($totalData[0]->totalData/6);

		$data['category_selected'] = $category;
		$data['s'] = $s;
		$data['lang'] = 'id';
		$data['page'] = 1;
		$data['totalData'] = $totalData[0]->totalData;
		$data['totalPage'] = $totalPage;
		$data['datas'] = $this->T_Event->getPage($page, $category, $s);
		$data['categories'] = $this->T_Event_Category->show_all();
		$this->load->view('fe/event', $data);
	}

	public function page($page)
	{
		$data['cur_page'] = 'event';
		$data['cur_parent_page'] = '';

		$category = $this->input->get('category') ? $this->input->get('category') : '';
		$s = $this->input->get('s') ? $this->input->get('s') : '';
		$page = $page ? $page : 1;
		$totalData = $this->T_Event->getTotal($category, $s);
		$totalPage = ceil($totalData[0]->totalData/6);

		$data['category_selected'] = $category;
		$data['s'] = $s;
		$data['lang'] = 'id';
		$data['page'] = $page ? $page : 1;
		$data['totalData'] = $totalData[0]->totalData;
		$data['totalPage'] = $totalPage;
		$datas = $this->T_Event->getPage($page, $category, $s);
		$data['datas'] = $datas;
		$data['categories'] = $this->T_Event_Category->show_all();
		$this->load->view('fe/event', $data);
	}

	public function detail($id)
	{
		$data['cur_page'] = 'event';
		$data['cur_parent_page'] = '';
		$data['lang'] = 'id';
		$datas = $this->T_Event->getDetail($id);

		$data['seo_title'] = substr(strtoupper($datas[0]->title),0, 30).' | RSD Cimacan';
		$data['seo_keyword'] = strtoupper($datas[0]->title);
		$data['seo_desc'] = substr($datas[0]->description,0, 147).'...';

		$lowerText = strtolower($datas[0]->title); 
		$change_url = str_replace(' ', '-', $lowerText);
		$data['seo_url'] = base_url().'event-'.$datas[0]->id.'-'.$change_url.'.html';

		$data['datas'] = $datas;
		$data['datas_other'] = $this->T_Event->getOther($id);
		$this->load->view('fe/event_detail', $data);
	}


}

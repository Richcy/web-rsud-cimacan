<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cimanews extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_Cimanews');
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'cimanews';
		$data['cur_parent_page'] = 'article';

		$data['seo_title'] = "RSUD Cimacan | Cimanews";
		$data['seo_keyword'] = "Cimanews, Berita, Blog, Berita rumah sakit, Berita rumah sakit umum daerah cimacan,Berita rsud cimacan";
		$data['seo_desc'] = 'Daftar Berita terbaru yang diterbitkan oleh Rumah Sakit Daerah Cimacan';
		$data['seo_url'] = base_url().'cimanews/';

		$s = $this->input->get('s') ? $this->input->get('s') : '';
		$page = 1;
		$totalData = $this->M_Cimanews->getTotal($s);
		$totalPage = ceil($totalData[0]->totalData/6);

		$data['category_selected'] = false;
		$data['field_selected'] = false;
		$data['s'] = $s;
		$data['lang'] = 'id';
		$data['page'] = 1;
		$data['totalData'] = $totalData[0]->totalData;
		$data['totalPage'] = $totalPage;
		$data['datas'] = $this->M_Cimanews->getPage($page, $s);
		$this->load->view('fe/cimanews', $data);
	}

	public function page($page)
	{
		$data['cur_page'] = 'cimanews';
		$data['cur_parent_page'] = 'article';
		
		$data['seo_title'] = "RSUD Cimacan | CimaNEWS";
		$data['seo_keyword'] = "Cimanews, Berita, Blog, Berita rumah sakit, Berita rumah sakit umum daerah cimacan,Berita rsud cimacan";
		$data['seo_desc'] = 'Daftar Berita terbaru yang diterbitkan oleh Rumah Sakit Daerah Cimacan';
		$data['seo_url'] = base_url().'cimanews/'.$page.'/';

		$s = $this->input->get('s') ? $this->input->get('s') : '';
		$page = $page ? $page : 1;
		$totalData = $this->M_Cimanews->getTotal($s);
		$totalPage = ceil($totalData[0]->totalData/6);

		$data['category_selected'] = false;
		$data['field_selected'] = false;
		$data['s'] = $s;
		$data['lang'] = 'id';
		$data['page'] = $page ? $page : 1;
		$data['totalData'] = $totalData[0]->totalData;
		$data['totalPage'] = $totalPage;
		$data['datas'] = $this->M_Cimanews->getPage($page, $s);
		$data['categories'] = null;
		$this->load->view('fe/cimanews', $data);
	}

	public function detail($id)
	{
		$data['cur_page'] = 'cimanews';
		$data['cur_parent_page'] = 'article';
		$data['lang'] = 'id';
		$data['datas'] = $this->M_Cimanews->getDetail($id);
		$datas = $data['datas'];
		
		$data['seo_title'] = substr($datas[0]->title,0, 30).' | RSUD Cimacan';
		$data['seo_keyword'] = strtolower($datas[0]->title).', rumah sakit umum daerah cimacan, rsud cimacan, rsd cimacan';
		$data['seo_desc'] = substr($datas[0]->sub_desc ? $datas[0]->sub_desc : $datas[0]->description,0, 120).'...';
		$lowerText = strtolower($datas[0]->title);
		$deleteUnique = str_replace('?', '', $lowerText);
        $change_url = str_replace(' ', '-', $deleteUnique);
		$data['seo_url'] = base_url().'cimanews-'.$datas[0]->id.'-'.$change_url.'.html';
		
		$this->load->view('fe/cimanews_detail', $data);
	}


}


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('T_Article');
    	$this->load->model('T_Article_Category');
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'article';
		$data['cur_parent_page'] = 'article';

		$data['seo_title'] = "RSUD Cimacan | Article";
		$data['seo_keyword'] = "Artikel, Berita, Blog, rumah sakit, rumah sakit umum daerah cimacan, rsud cimacan, rsd cimacan";
		$data['seo_desc'] = 'Daftar Artikel yang diterbitkan oleh Rumah Sakit Daerah Cimacan';
		$data['seo_url'] = base_url().'article/';

		$category = $this->input->get('category') ? $this->input->get('category') : '';
		$s = $this->input->get('s') ? $this->input->get('s') : '';
		$page = 1;
		$totalData = $this->T_Article->getTotal($category, $s);
		$totalPage = ceil($totalData[0]->totalData/6);

		$data['category_selected'] = $category;
		$data['field_selected'] = null;
		$data['s'] = $s;
		$data['lang'] = 'id';
		$data['page'] = 1;
		$data['totalData'] = $totalData[0]->totalData;
		$data['totalPage'] = $totalPage;
		$data['datas'] = $this->T_Article->getPage($page, $category, $s);
		$data['categories'] = $this->T_Article_Category->show_all();
		$this->load->view('fe/article', $data);
	}

	public function page($page)
	{
		$data['cur_page'] = 'article';
		$data['cur_parent_page'] = 'article';
		
		$data['seo_title'] = "RSUD Cimacan | Article";
		$data['seo_keyword'] = "Artikel, Berita, Blog, rumah sakit, rumah sakit umum daerah cimacan, rsud cimacan, rsd cimacan";
		$data['seo_desc'] = 'Daftar Artikel yang diterbitkan oleh Rumah Sakit Daerah Cimacan';
		$data['seo_url'] = base_url().'article/'.$page.'/';

		$category = $this->input->get('category') ? $this->input->get('category') : '';
		$s = $this->input->get('s') ? $this->input->get('s') : '';
		$page = $page ? $page : 1;
		$totalData = $this->T_Article->getTotal($category, $s);
		$totalPage = ceil($totalData[0]->totalData/6);

		$data['category_selected'] = $category;
		$data['field_selected'] = null;
		$data['s'] = $s;
		$data['lang'] = 'id';
		$data['page'] = $page ? $page : 1;
		$data['totalData'] = $totalData[0]->totalData;
		$data['totalPage'] = $totalPage;
		$data['datas'] = $this->T_Article->getPage($page, $category, $s);
		$data['categories'] = $this->T_Article_Category->show_all();
		$this->load->view('fe/article', $data);
	}

	public function detail($id)
	{
		$data['cur_page'] = 'article';
		$data['cur_parent_page'] = 'article';
		$data['lang'] = 'id';
		$data['datas'] = $this->T_Article->getDetail($id);
		$datas = $data['datas'];
		
		$data['seo_title'] = substr($datas[0]->title,0, 30).' | RSUD Cimacan';
		$data['seo_keyword'] = strtolower($datas[0]->title).', rumah sakit umum daerah cimacan, rsud cimacan, rsd cimacan';
		$data['seo_desc'] = substr($datas[0]->sub_desc ? $datas[0]->sub_desc : $datas[0]->description,0, 120).'...';
		$lowerText = strtolower($datas[0]->title);
		$deleteUnique = str_replace('?', '', $lowerText);
        $change_url = str_replace(' ', '-', $deleteUnique);
		$data['seo_url'] = base_url().'article-'.$datas[0]->id.'-'.$change_url.'.html';
		
		$this->load->view('fe/article_detail', $data);
	}


}


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
		$data['cur_parent_page'] = '';

		$data['seo_title'] = "RSD Cimacan | Article";
		$data['seo_keyword'] = "Artikel Berita Blog RSD Cimacan";
		$data['seo_desc'] = 'Daftar Artikel yang diterbitkan oleh Rumah Sakit Daerah Cimacan';
		$data['seo_url'] = base_url().'article/';

		$category = $this->input->get('category') ? $this->input->get('category') : '';
		$s = $this->input->get('s') ? $this->input->get('s') : '';
		$page = 1;
		$totalData = $this->T_Article->getTotal($category, $s);
		$totalPage = ceil($totalData[0]->totalData/6);

		$data['category_selected'] = $category;
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
		$data['cur_parent_page'] = '';

		$category = $this->input->get('category') ? $this->input->get('category') : '';
		$s = $this->input->get('s') ? $this->input->get('s') : '';
		$page = $page ? $page : 1;
		$totalData = $this->T_Article->getTotal($category, $s);
		$totalPage = ceil($totalData[0]->totalData/6);

		$data['category_selected'] = $category;
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
		$data['cur_parent_page'] = '';
		$data['lang'] = 'id';
		$data['datas'] = $this->T_Article->getDetail($id);
		$this->load->view('fe/article_detail', $data);
	}


}

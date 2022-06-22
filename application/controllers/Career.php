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
		
		$data['seo_title'] = "RSUD Cimacan | Karir";
		$data['seo_keyword'] = "karir, lowongan, kerja, recruitment rumah sakit umum daerah cimacan, rsud cimacan";
		$data['seo_desc'] = 'Karir atau lowongan pekerjaan yang dibutuhkan oleh Rumah Sakit Daerah Cimacan';
		$data['seo_url'] = base_url().'career/';

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

		$data['seo_title'] = "RSUD Cimacan | Karir";
		$data['seo_keyword'] = "karir, lowongan, kerja, recruitment rumah sakit umum daerah cimacan, rsud cimacan";
		$data['seo_desc'] = 'Karir atau lowongan pekerjaan yang dibutuhkan oleh Rumah Sakit Daerah Cimacan pada halaman ke-'.$page;
		$data['seo_url'] = base_url().'career/'.$page.'/';

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
		$data['lang'] = 'id';
		$datas = $this->T_Career->getDetail($id);

		$data['seo_title'] = substr($datas[0]->title,0, 30).' | RSUD Cimacan';
		$data['seo_keyword'] = strtolower($datas[0]->title).', rumah sakit umum daerah cimacan, rsud cimacan';
		$data['seo_desc'] = substr($datas[0]->description,0, 147).'...';
		$lowerText = strtolower($datas[0]->title);
        $change_url = str_replace(' ', '-', $lowerText);
		$data['seo_url'] = base_url().'career-'.$datas[0]->id.'-'.$change_url.'.html';

		$data['datas'] = $datas;
		$data['datas_other'] = $this->T_Career->getOther($id);
		$this->load->view('fe/career_detail', $data);
	}


}

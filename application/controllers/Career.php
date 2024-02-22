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
		$this->_loadCareerList();
	}

	public function page($page = 1)
	{
		$this->_loadCareerList($page);
	}

	public function detail($id)
	{
		// Validate input parameter
		if (!is_numeric($id) || $id < 1) {
			// Handle missing or invalid ID
			show_error('Invalid or missing ID parameter');
			return;
		}

		$this->_loadCareerDetail($id);
	}

	private function _loadCareerList($page = 1) {
		$data['cur_page'] = 'career';
		$data['cur_parent_page'] = '';
		$data['lang'] = 'id';

		// Sanitize input parameters
		$s = $this->input->get('s') ? $this->db->escape_str($this->input->get('s')) : '';
		$page = $page ? intval($page) : 1;

		$totalData = $this->T_Career->getTotal($s);
		$totalPage = ceil($totalData[0]->totalData / 6);

		$data['s'] = $s;
		$data['seo_title'] = "RSUD Cimacan | Karir";
		$data['seo_keyword'] = "karir, lowongan, kerja, recruitment rumah sakit umum daerah cimacan, rsud cimacan";
		$data['seo_desc'] = 'Karir atau lowongan pekerjaan yang dibutuhkan oleh Rumah Sakit Daerah Cimacan';
		$data['seo_url'] = base_url() . 'career/';
		$data['category_selected'] = null;
		$data['field_selected'] = null;
		$data['page_info']['page'] = $page;
		$data['page_info']['totalData'] = $totalData[0]->totalData;
		$data['page_info']['totalPage'] = $totalPage;
		$data['page_info']['datas'] = $this->T_Career->getPage($page, $s);
		$data['page_info']['url'] = base_url() . $data['cur_page'];
		
		$this->load->view('fe/career', $data);
	}

	private function _loadCareerDetail($id) {
		$data['cur_page'] = 'career';
		$data['cur_parent_page'] = '';
		$data['lang'] = 'id';
		$datas = $this->T_Career->getDetail($id);

		if (!$datas) {
			// Handle non-existent career
			show_error('Career not found');
			return;
		}

		$data['seo_title'] = substr($datas[0]->title, 0, 30) . ' | RSUD Cimacan';
		$data['seo_keyword'] = strtolower($datas[0]->title) . ', rumah sakit umum daerah cimacan, rsud cimacan';
		$data['seo_desc'] = substr($datas[0]->sub_desc, 0, 150) . '...';
		$lowerText = strtolower($datas[0]->title);
        $change_url = str_replace(' ', '-', $lowerText);
		$data['seo_url'] = base_url() . 'career-' . $datas[0]->id . '-' . $change_url . '.html';

		$data['datas'] = $datas;
		$data['datas_other'] = $this->T_Career->getOther($id);
		$this->load->view('fe/career_detail', $data);
	}
}

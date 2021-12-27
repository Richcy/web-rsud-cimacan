<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{
		$data['cur_page'] = 'news';
		$data['cur_parent_page'] = '';
		$this->load->view('fe/news', $data);
	}

	public function detail($id)
	{
		$data['cur_page'] = 'news';
		$data['cur_parent_page'] = '';
		$this->load->view('fe/news', $data);
	}


}

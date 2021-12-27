<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Career extends CI_Controller {

	public function index()
	{
		$data['cur_page'] = 'career';
		$data['cur_parent_page'] = '';
		$this->load->view('fe/career', $data);
	}

	public function detail($id)
	{
		$data['cur_page'] = 'career';
		$data['cur_parent_page'] = '';
		$this->load->view('fe/career', $data);
	}


}

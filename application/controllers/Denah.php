<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Denah extends CI_Controller {

	public function index()
	{
		$data['cur_page'] = 'denah_rs';
		$data['cur_parent_page'] = 'tentang';
		$this->load->view('fe/denah', $data);
	}

	public function detail($id)
	{
		$data['cur_page'] = 'denah_rs';
		$data['cur_parent_page'] = 'tentang';
		$this->load->view('fe/denah', $data);
	}


}

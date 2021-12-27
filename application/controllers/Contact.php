<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$data['cur_page'] = 'contact';
		$data['cur_parent_page'] = '';

		$this->load->view('fe/contact', $data);
	}


}

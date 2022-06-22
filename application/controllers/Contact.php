<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'contact';
		$data['cur_parent_page'] = '';
		$data['lang'] = 'id';

		$data['seo_title'] = "Kontak | RSUD Cimacan";
		$data['seo_keyword'] = "Kontak, Contact, Alamat, Handphone, Email, rumah sakit umum daerah cimacan, rsud cimacan";
		$data['seo_desc'] = 'Kontak lengkap dengan alamat, no. Hp dan e-mail Rumah Sakit Daerah Cimacan';
		$data['seo_url'] = base_url().'contact/';

		$this->load->view('fe/contact', $data);
	}


}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$data['cur_page'] = 'contact';
		$data['cur_parent_page'] = '';
		$data['lang'] = 'id';

		$data['seo_title'] = "RSD Cimacan | Kontak";
		$data['seo_keyword'] = "Kontak Alamat Handphone Email RSD Cimacan";
		$data['seo_desc'] = 'Kontak lengkap dengan alamat, no. Hp dan e-mail Rumah Sakit Daerah Cimacan';
		$data['seo_url'] = base_url().'contact/';

		$this->load->view('fe/contact', $data);
	}


}

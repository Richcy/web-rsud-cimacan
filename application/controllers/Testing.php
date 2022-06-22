<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testing extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('T_User');
        $this->load->library('session');
	}

	public function index()
	{	
		$checkUser = $this->T_User->checkData('ilham1@rsdcimacan.com');
		if (empty($checkUser)) {
			echo "Kosong bro";
		}else{
			echo "Isi Bro";
		}
		die();
	}

}

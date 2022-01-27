<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('T_User');
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'login';
		$data['cur_parent_page'] = '';
		$data['lang'] = 'id';

		$data['seo_title'] = "RSD Cimacan | Login";
		$data['seo_keyword'] = "Login, Akun, account";
		$data['seo_desc'] = 'Masuk atau daftarkan diri anda pada kaman web Rumah Sakit Daerah Cimacan';
		$data['seo_url'] = base_url().'login.html';

		$this->load->view('fe/login', $data);
	}

	public function register()
	{
		$data['cur_page'] = 'login';
		$data['cur_parent_page'] = '';
		$data['lang'] = 'id';

		$data['seo_title'] = "RSD Cimacan | Register";
		$data['seo_keyword'] = "Register account, daftar Akun";
		$data['seo_desc'] = 'Masuk atau daftarkan diri anda pada kaman web Rumah Sakit Daerah Cimacan';
		$data['seo_url'] = base_url().'register.html';

		$data['captcha'] = $this->recaptcha->getWidget(); //menampilkan captcha
		$data['script_captcha'] = $this->recaptcha->getScriptTag(); // javascript recaptch pada head

		$this->load->view('fe/register', $data);
	}

	public function actionregister()
	{
		$recaptcha = $this->input->post('g-recaptcha-response');
		$response = $this->recaptcha->verifyResponse($recaptcha);

		// Input data
		$id = random_string('alnum',16);
		$name = $this->input->post('name');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$hashpassword = password_hash($password, PASSWORD_DEFAULT);
		$type_login = 'manual';
		// $verifypass = password_verify($password, $hashpassword);
		// var_dump($id);
		// die();

		if ($response['success'] == false) {
			$this->session->set_flashdata('title','Failed');
        	$this->session->set_flashdata('message','Invalid Captcha. Please Try again!');
        	$this->session->set_flashdata('status','error');
        	redirect('register.html');
		}else{
			$datas = array(
	        	'id' => $id,
	        	'name' => $name,
	        	'phone' => $phone,
	        	'email' => $email,
	        	'password' => $hashpassword,
	        	'create_date' => date('Y-m-d H:i:s')
	        );

	        $insert = $this->T_User->insert($datas,'t_user');
	        if ($insert) {
	        	$this->session->set_flashdata('title','Success');
	        	$this->session->set_flashdata('message','Success Register. Please Login First');
	        	$this->session->set_flashdata('status','success');
	        	redirect('login.html');	
	        }else{
	        	$this->session->set_flashdata('title','Error');
	        	$this->session->set_flashdata('message','Register error. Please Try Again');
	        	$this->session->set_flashdata('status','error');
	        	redirect('register.html');
	        }
		}
		die();
	}

}

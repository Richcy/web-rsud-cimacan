<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('T_Admin');
        $this->load->library('session');
        $this->load->library('Myencrypt');
	}

	public function index()
	{
		$data['cur_page'] = 'login';
		$data['cur_parent_page'] = '';
		$this->load->view('admin/login', $data);
	}

	public function loginAdmin()
	{
		// $password = 'CimacanRsud001!@';
		// $password = 'admin1!';
		$encrypt = new Myencrypt(11);
		// $hash = $encrypt->hash($password);
		// var_dump($hash);
		// die(); 
		$username = $this->input->post('username') ? $this->input->post('username') : '';
		$password = $this->input->post('password') ? $this->input->post('password') : '';
		$checkAdmin = $this->T_Admin->get_detail($username);

		$enc_pass = $checkAdmin[0]->password;
		$verify = $encrypt->verify($password, $enc_pass);
		if (empty($checkAdmin) || !$verify) {
			$this->session->set_flashdata('title','Failed');
        	$this->session->set_flashdata('message','Invalid Username or Password. Please Try again!');
        	$this->session->set_flashdata('status','error');
        	return redirect('/administrator/');
		}else{
			$this->session->set_userdata('id_admin',$checkAdmin[0]->id);
            $this->session->set_userdata('username_admin',$checkAdmin[0]->username);
            $this->session->set_userdata('name_admin',$checkAdmin[0]->name);
		}
		redirect('/administrator/slider');
	}

	public function logoutAdmin(){
          $this->session->sess_destroy();
          redirect('/administrator/');
      }


}

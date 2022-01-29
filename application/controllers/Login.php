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
		$id = random_string('alnum',32);
		$auth_code = random_string('alnum',6);
		$name = $this->input->post('name');
		$phone = $this->input->post('phone');
		$email_mentah = $this->input->post('email');
		$email = str_replace(' ', '', $email_mentah);
		$password = $this->input->post('password');
		$hashpassword = password_hash($password, PASSWORD_DEFAULT);

		// Isi email
		$isipesan='
			<div class="box-mail" style="width: 767px; max-width: 100%; margin: 20px auto; padding: 0 15px;">
		    <div class="logo-mail" style="text-align: center; margin-bottom:  20px;">
		        <img src="'.base_url().'assets/fe/img/logo_rsud_cimacan.png" alt="img" style = "width: 100px; max-width: 100%;">
		    </div>
		    <div class="mail-desc" style = "text-align: center; font-size: 16px; width: 500px; max-width: 100%; margin: 0 auto 20px auto;">
		        Selamat pembuatan akun RSD Cimacan dengan nama '.$name.' berhasil. Silahkan verifikasi akun terlebih dahulu untuk melanjutkan proses.
		    </div>
		    <div class="mail-event" style ="text-align: center; font-size: 16px; width: 500px; max-width: 100%; margin: 0 auto 20px auto;">
		        Please verify your account using this link to activate your account<br/>
		        <a style="color:#98232b; font-weight:bold;" href="'.base_url().'verify-user?id='.$id.'&auth='.$auth_code.'">Verify</a>
		    </div>
		    <div class="mail-reply" style = "text-align: center;">
		        This is an auto-generated email, please do not reply. Any replies to this email will be disregarded.
		    </div>
		</div>
		';
		// $verifypass = password_verify($password, $hashpassword);
		// $checkUser = $this->T_User->checkData($email);
		// var_dump($checkUser);
		// die();

		if ($response['success'] == false) {
			$this->session->set_flashdata('title','Failed');
        	$this->session->set_flashdata('message','Invalid Captcha. Please Try again!');
        	$this->session->set_flashdata('status','error');
        	redirect('register.html');
		}else{
			$checkUser = $this->T_User->checkData($email);
			if (empty($checkUser)) {
				$datas = array(
		        	'id' => $id,
		        	'name' => $name,
		        	'phone' => $phone,
		        	'email' => $email,
		        	'password' => $hashpassword,
		        	'auth_code' => $auth_code,
		        	'create_date' => date('Y-m-d H:i:s')
		        );

		        $insert = $this->T_User->insert($datas,'t_user');
		        if ($insert) {
		        	$config = [
						'mailtype'	=>'html',
						'charset'	=>'utf-8',
						'protocol'	=>'smtp',
						'smtp_host'	=>'mail.rsdcimacan.com',
						'smtp_user'	=>'noreply@rsdcimacan.com',
						'smtp_pass'	=>'EVi4a^ZS',
						'smtp_crypto'=>'ssl',
						'smtp_port'	=>'465',
						'crlf'		=>"\r\n",
						'newline'	=>"\r\n"
					];

					// Load library email dan konfigurasinya
					$this->load->library('email', $config);

					// Email dan nama pengirim
					$this->email->from('noreply@rsdcimacan.com', 'noreply@rsdcimacan.com');

					// Email penerima
					$this->email->to($email,$name); // Ganti dengan email tujuan

					// Subject email
					$this->email->subject('Verify New Account');

					$this->email->message($isipesan);

					// Kirim Email
					if($this->email->send()){
					   	$this->session->set_flashdata('title','Success');
			        	$this->session->set_flashdata('message','Success Register. Please Verify Your Accout');
			        	$this->session->set_flashdata('status','success');
			        	redirect('login.html');	
					}else{	
			        	$this->session->set_flashdata('title','Error');
			        	// $this->session->set_flashdata('message','Register error. Please Try Again');
			        	$this->session->set_flashdata('message', $this->email->print_debugger());
			        	$this->session->set_flashdata('status','error');
			        	redirect('register.html');
					}
		        }else{
		        	$this->session->set_flashdata('title','Error');
		        	$this->session->set_flashdata('message','Register error. Please Try Again');
		        	$this->session->set_flashdata('status','error');
		        	redirect('register.html');
		        }
	    	}else{
	    		$this->session->set_flashdata('title','Error');
	        	$this->session->set_flashdata('message','Register error. Accout has been used by other');
	        	$this->session->set_flashdata('status','error');
	        	redirect('register.html');
	    	}
		}
		die();
	}

	public function verify()
	{
		$verify = false;
		$id = $this->input->get('id') ? $this->input->get('id') : 1;
		$auth_code = $this->input->get('auth') ? $this->input->get('auth') : 1;
		$checkUser = $this->T_User->checkAccount($id, $auth_code);

		if (!empty($checkUser)) {
			$data = array(
				'verify' => 'Y' 
			);
			$updateStatus = $this->T_User->update($data, $id);
			if ($updateStatus) {
				$verify = true;
			}else{
				$verify = false;
			}			
		}else{
			$checkUserID = $this->T_User->checkUserID($id);
			if (!empty($checkUserID)) {
				// Isi email
				$isipesan='
					<div class="box-mail" style="width: 767px; max-width: 100%; margin: 20px auto; padding: 0 15px;">
				    <div class="logo-mail" style="text-align: center; margin-bottom:  20px;">
				        <img src="'.base_url().'assets/fe/img/logo_rsud_cimacan.png" alt="img" style = "width: 100px; max-width: 100%;">
				    </div>
				    <div class="mail-desc" style = "text-align: center; font-size: 16px; width: 500px; max-width: 100%; margin: 0 auto 20px auto;">
				        Selamat pembuatan akun RSD Cimacan dengan nama '.$checkUserID[0]->name.' berhasil. Silahkan verifikasi akun terlebih dahulu untuk melanjutkan proses.
				    </div>
				    <div class="mail-event" style ="text-align: center; font-size: 16px; width: 500px; max-width: 100%; margin: 0 auto 20px auto;">
				        Please verify your account using this link to activate your account<br/>
				        <a style="color:#98232b; font-weight:bold;" href="'.base_url().'verify-user?id='.$checkUserID[0]->id.'&auth='.$checkUserID[0]->auth_code.'">Verify</a>
				    </div>
				    <div class="mail-reply" style = "text-align: center;">
				        This is an auto-generated email, please do not reply. Any replies to this email will be disregarded.
				    </div>
				</div>
				';

				$config = [
					'mailtype'	=>'html',
					'charset'	=>'utf-8',
					'protocol'	=>'smtp',
					'smtp_host'	=>'mail.rsdcimacan.com',
					'smtp_user'	=>'noreply@rsdcimacan.com',
					'smtp_pass'	=>'EVi4a^ZS',
					'smtp_crypto'=>'ssl',
					'smtp_port'	=>'465',
					'crlf'		=>"\r\n",
					'newline'	=>"\r\n"
				];

				// Load library email dan konfigurasinya
				$this->load->library('email', $config);

				// Email dan nama pengirim
				$this->email->from('noreply@rsdcimacan.com', 'noreply@rsdcimacan.com');

				// Email penerima
				$this->email->to($checkUserID[0]->email,$checkUserID[0]->name); // Ganti dengan email tujuan

				// Subject email
				$this->email->subject('Verify New Account');

				$this->email->message($isipesan);

				// Kirim Email
				if($this->email->send()){
				   	$verify = false;
				}else{	
		        	$verify = false;
				}
			}else{
				$verify = false;
			}
		}

		$data['verify'] = $verify;

		// var_dump($verify);
		// die();

		$this->load->view('fe/verify', $data);
	}

}

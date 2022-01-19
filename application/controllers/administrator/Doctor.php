<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('T_Doctor');
    	$this->load->model('T_Field_Doctor');
        $this->load->library('session');
	}

	public function index()
	{
		
		
		$data['cur_page'] = 'doctor';
		$data['cur_parent_page'] = 'doctor';
		$data['datas'] = $this->T_Doctor->show_all();
		$this->load->view('admin/module/doctor/index', $data);
	}

	public function Add()
	{
		
		
		$data['cur_page'] = 'doctor';
		$data['cur_parent_page'] = 'doctor';
		$data['fields'] = $this->T_Field_Doctor->show_all();
		$this->load->view('admin/module/doctor/add', $data);
	}

	public function edit($id)
	{
		
		
		$data['cur_page'] = 'doctor';
		$data['cur_parent_page'] = 'doctor';
		$data['fields'] = $this->T_Field_Doctor->show_all();
		$data['datas'] = $this->T_Doctor->get_detail($id);
		$this->load->view('admin/module/doctor/edit', $data);
	}

	public function checkData()
	{
		$sip = $this->input->post('sip') ? $this->input->post('sip') : '';
		$nip = $this->input->post('nip') ? $this->input->post('nip') : '';
		
		if ($sip == '') {
			$action = false;
		}

		$checkData = $this->T_Doctor->checkData($sip, $nip);

		if (empty($checkData)) {
			$action = true;
		}else{
			$action = 0;
		}
		// var_dump($checkSTR);
		echo $action;
	}

	public function checkDataEM()
	{
		$sip = $this->input->post('sip') ? $this->input->post('sip') : '';
		$nip = $this->input->post('nip') ? $this->input->post('nip') : '';
		$id = $this->input->post('id') ? $this->input->post('id') : '';
		
		if ($sip == '') {
			$action = false;
		}

		$checkDataEM = $this->T_Doctor->checkDataEM($sip, $nip, $id);
		// var_dump($checkDataEM);
		// die();

		if (empty($checkDataEM)) {
			$action = true;
		}else{
			$action = 0;
		}
		// var_dump($checkSTR);
		echo $action;
	}

	public function create()
	{
		// $id = random_string('alnum',24);
		$name = $this->input->post('name') ? $this->input->post('name') : '';
		$field = $this->input->post('field') ? $this->input->post('field') : '';
		$office = $this->input->post('office') ? $this->input->post('office') : '';
		// $experience = $this->input->post('experience') ? $this->input->post('experience'): '';
		$year = $this->input->post('year') ? $this->input->post('year'): '';
		$month = $this->input->post('month') ? $this->input->post('month'): '';
		$alumni = $this->input->post('alumni') ? $this->input->post('alumni'): '';
		$NIP = $this->input->post('nip') ? $this->input->post('nip'): '';
		// $STR = $this->input->post('str') ? $this->input->post('str'): '';
		$sip = $this->input->post('sip') ? $this->input->post('sip'): '';
		$status = $this->input->post('status') ? $this->input->post('status'): 'publish';
		
		$now = date('YmdHis');
		$edit_name = str_replace(' ', '-', $_FILES["doctor_img"]['name']);
		$file_name = $now.'_'.$edit_name;
		
		$config['upload_path']          = FCPATH.'assets/uploads/doctor';
        // $config['allowed_types']        = 'gif|jpg|png';
        $config['allowed_types']        = '*';
        $config['max_size']             = 10000;
        $config['file_name']            = $file_name;
		$config['overwrite']            = true;
		$this->load->library('upload', $config);
		
		if ($_FILES["doctor_img"]['name'] == '' || $_FILES["doctor_img"]['name'] == NULL ) {
			$datas = array(
	        	// 'id' => $id,
	        	'name' => $name,
	        	'field' => $field,
	        	'office' => $office,
	        	'year' => $year,
	        	'month' => $month,
	        	'alumni' => $alumni,
	        	'nip' => $NIP,
	        	// 'str' => $STR,
	        	'sip' => $sip,
	        	'status' => $status,
	        	'create_date' => date('Y-m-d H:i:s')
	        );
	        $insert = $this->T_Doctor->insert($datas,'t_doctor');
	        if ($insert) {
	        	$this->session->set_flashdata('title','Success');
	        	$this->session->set_flashdata('message','Insert data Doctor');
	        	$this->session->set_flashdata('status','success');
	        	redirect('/administrator/doctor');
	        }else{
	        	$this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','Insert data Doctor');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/doctor');
	        }
		}else{
			if ( ! $this->upload->do_upload('doctor_img'))
	        {
	            $error = array('error' => $this->upload->display_errors());
	            $this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','File type not support. Please Try again!');
	        	$this->session->set_flashdata('status','error');
	        	// redirect('/administrator/doctor/add');
	        	redirect($_SERVER['HTTP_REFERER']);
	        }

	        else
	        {
		        $data = array('upload_data' => $this->upload->data());
				$datas = array(
		        	// 'id' => $id,
		        	'img' => 'doctor/'.$file_name,
		        	'name' => $name,
		        	'field' => $field,
		        	'office' => $office,
		        	'experience' => $experience,
		        	'alumni' => $alumni,
		        	'nip' => $NIP,
		        	'str' => $STR,
		        	'status' => $status,
		        	'create_date' => date('Y-m-d H:i:s')
		        );
		        $insert = $this->T_Doctor->insert($datas,'t_doctor');
		        if ($insert) {
		        	$this->session->set_flashdata('title','Success');
		        	$this->session->set_flashdata('message','Insert data Doctor');
		        	$this->session->set_flashdata('status','success');
		        	redirect('/administrator/doctor');
		        }else{
		        	$this->session->set_flashdata('title','Failed');
		        	$this->session->set_flashdata('message','Insert data Doctor');
		        	$this->session->set_flashdata('status','error');
		        	redirect('/administrator/doctor');
		        }
	        }
    	}
	}

	public function update()
	{
		$id = $this->input->post('id') ? $this->input->post('id'): '';
		$name = $this->input->post('name') ? $this->input->post('name') : '';
		$field = $this->input->post('field') ? $this->input->post('field') : '';
		$office = $this->input->post('office') ? $this->input->post('office') : '';
		// $experience = $this->input->post('experience') ? $this->input->post('experience'): '';
		$year = $this->input->post('year') ? $this->input->post('year'): '';
		$month = $this->input->post('month') ? $this->input->post('month'): '';
		$alumni = $this->input->post('alumni') ? $this->input->post('alumni'): '';
		$NIP = $this->input->post('nip') ? $this->input->post('nip'): '';
		// $STR = $this->input->post('str') ? $this->input->post('str'): '';
		$sip = $this->input->post('sip') ? $this->input->post('sip'): '';
		$status = $this->input->post('status') ? $this->input->post('status'): 'publish';
		
		$now = date('YmdHis');
		$edit_name = str_replace(' ', '-', $_FILES["doctor_img"]['name']);
		$file_name = $now.'_'.$edit_name;
		
		$config['upload_path']          = FCPATH.'assets/uploads/doctor';
        // $config['allowed_types']        = 'gif|jpg|png';
        $config['allowed_types']        = '*';
        $config['max_size']             = 10000;
        $config['file_name']            = $file_name;
		$config['overwrite']            = true;
		$this->load->library('upload', $config);

    	 if ($_FILES["doctor_img"]['name'] == '') {
        	$datas = array(
	        	'name' => $name,
	        	'field' => $field,
	        	'office' => $office,
	        	'year' => $year,
	        	'month' => $month,
	        	'alumni' => $alumni,
	        	'nip' => $NIP,
	        	// 'str' => $STR,
	        	'sip' => $sip,
	        	'status' => $status,
	        	'create_date' => date('Y-m-d H:i:s')
	        );
	        $update = $this->T_Doctor->update($datas, $id);
	        if ($update) {
	        	$this->session->set_flashdata('title','Success');
	        	$this->session->set_flashdata('message','Edit data doctor');
	        	$this->session->set_flashdata('status','success');
	        	redirect('/administrator/doctor');
	        }else{
	        	$this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','Edit data doctor');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/doctor');
	        }
        }else{
        	$this->load->library('upload', $config);
        	if ( ! $this->upload->do_upload('doctor_img'))
	        {
	            $error = array('error' => $this->upload->display_errors());
	            $this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','File type not support. Please Try again!');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/doctor/edit/'.$id);
	        }
	        else
	        {
	        	$result = $this->T_Doctor->get_detail($id);
				if ($result) {
					$path = FCPATH.'/assets/uploads/'.$result[0]->img;
					$action_delete = unlink($path);
				}
		        $data = array('upload_data' => $this->upload->data());
		        $datas = array(
		        	'img' => 'doctor/'.$file_name,
		        	'name' => $name,
		        	'field' => $field,
		        	'office' => $office,
		        	'experience' => $experience,
		        	'alumni' => $alumni,
		        	'nip' => $NIP,
		        	// 'str' => $STR,
		        	'sip' => $sip,
		        	'status' => $status,
		        	'create_date' => date('Y-m-d H:i:s')
		        );
		        $update = $this->T_Doctor->update($datas, $id);
		        if ($update) {
		        	$this->session->set_flashdata('title','Success');
		        	$this->session->set_flashdata('message','Edit data doctor');
		        	$this->session->set_flashdata('status','success');
		        	redirect('/administrator/doctor');
		        }else{
		        	$this->session->set_flashdata('title','Failed');
		        	$this->session->set_flashdata('message','Edit data doctor');
		        	$this->session->set_flashdata('status','error');
		        	redirect('/administrator/doctor');
		        }
	        }
        }
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$result = $this->T_Doctor->get_detail($id);
		if ($result) {
			if ($result[0]->img != '' || $result[0]->img != NULL) {
				$path = FCPATH.'/assets/uploads/'.$result[0]->img;
				$action_delete = unlink($path);
			}
			$action = $this->T_Doctor->delete($id);
		}else{
			$action = false;
		}
		echo $action;
	}
	// End gallery section
}

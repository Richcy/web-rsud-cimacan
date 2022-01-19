<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Career extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('T_Career');
        $this->load->library('session');
	}

	public function index()
	{
		$role_admin = $this->session->userdata('role_id') ? $this->session->userdata('role_id') : '';
		if ($role_admin != 1) {
			$this->session->sess_destroy();
			redirect('/administrator/');
		}
		
		$data['cur_page'] = 'career';
		$data['cur_parent_page'] = 'career';
		$data['datas'] = $this->T_Career->show_all();
		$this->load->view('admin/module/career/index', $data);
	}

	public function Add()
	{
		$role_admin = $this->session->userdata('role_id') ? $this->session->userdata('role_id') : '';
		if ($role_admin != 1) {
			$this->session->sess_destroy();
			redirect('/administrator/');
		}
		
		$data['cur_page'] = 'career';
		$data['cur_parent_page'] = 'career';
		$this->load->view('admin/module/career/add', $data);
	}

	public function edit($id)
	{
		$role_admin = $this->session->userdata('role_id') ? $this->session->userdata('role_id') : '';
		if ($role_admin != 1) {
			$this->session->sess_destroy();
			redirect('/administrator/');
		}
		
		$data['cur_page'] = 'career';
		$data['cur_parent_page'] = 'career';
		$data['datas'] = $this->T_Career->get_detail($id);
		$this->load->view('admin/module/career/edit', $data);
	}

	public function create()
	{
		// $id = random_string('alnum',24);
		$title = $this->input->post('title') ? $this->input->post('title') : '';
		$description = $this->input->post('desc') ? str_replace("'", "’", $this->input->post('desc')) : '';
		
		$now = date('YmdHis');
		$edit_name = str_replace(' ', '-', $_FILES["career_img"]['name']);
		$file_name = $now.'_'.$edit_name;
		
		$config['upload_path']          = FCPATH.'assets/uploads/career';
        // $config['allowed_types']        = 'gif|jpg|png';
        $config['allowed_types']        = '*';
        $config['max_size']             = 10000;
        $config['file_name']            = $file_name;
		$config['overwrite']            = true;
		$this->load->library('upload', $config);

		// var_dump($start_date);
		// die();
		
		if ($_FILES["career_img"]['name'] == '' || $_FILES["career_img"]['name'] == NULL ) {
			$datas = array(
	        	'title' => $title,
	        	'description' => $description,
	        	'create_date' => date('Y-m-d H:i:s')
	        );
	        $insert = $this->T_Career->insert($datas,'t_career');
	        if ($insert) {
	        	$this->session->set_flashdata('title','Success');
	        	$this->session->set_flashdata('message','Insert data career');
	        	$this->session->set_flashdata('status','success');
	        	redirect('/administrator/career');
	        }else{
	        	$this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','Insert data career');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/career');
	        }
		}else{
			if ( ! $this->upload->do_upload('career_img'))
	        {
	            $error = array('error' => $this->upload->display_errors());
	            $this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','File type not support. Please Try again!');
	        	$this->session->set_flashdata('status','error');
	        	// redirect('/administrator/career/add');
	        	redirect($_SERVER['HTTP_REFERER']);
	        }

	        else
	        {
		        $data = array('upload_data' => $this->upload->data());
				$datas = array(
		        	// 'id' => $id,
		        	'img' => 'career/'.$file_name,
		        	'title' => $title,
		        	'description' => $description,
		        	'create_date' => date('Y-m-d H:i:s')
		        );
		        $insert = $this->T_Career->insert($datas,'t_career');
		        if ($insert) {
		        	$this->session->set_flashdata('title','Success');
		        	$this->session->set_flashdata('message','Insert data career');
		        	$this->session->set_flashdata('status','success');
		        	redirect('/administrator/career');
		        }else{
		        	$this->session->set_flashdata('title','Failed');
		        	$this->session->set_flashdata('message','Insert data career');
		        	$this->session->set_flashdata('status','error');
		        	redirect('/administrator/career');
		        }
	        }
    	}
	}

	public function update()
	{
		$id = $this->input->post('id') ? $this->input->post('id'): '';
		$title = $this->input->post('title') ? $this->input->post('title') : '';
		$description = $this->input->post('desc') ? str_replace("'", "’", $this->input->post('desc')) : '';
		
		$now = date('YmdHis');
		$edit_name = str_replace(' ', '-', $_FILES["career_img"]['name']);
		$file_name = $now.'_'.$edit_name;
		
		$config['upload_path']          = FCPATH.'assets/uploads/career';
        // $config['allowed_types']        = 'gif|jpg|png';
        $config['allowed_types']        = '*';
        $config['max_size']             = 10000;
        $config['file_name']            = $file_name;
		$config['overwrite']            = true;
		$this->load->library('upload', $config);

    	 if ($_FILES["career_img"]['name'] == '') {
        	$datas = array(
	        	'title' => $title,
	        	'description' => $description
	        );
	        $update = $this->T_Career->update($datas, $id);
	        if ($update) {
	        	$this->session->set_flashdata('title','Success');
	        	$this->session->set_flashdata('message','Edit data career');
	        	$this->session->set_flashdata('status','success');
	        	redirect('/administrator/career');
	        }else{
	        	$this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','Edit data career');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/career');
	        }
        }else{
        	$this->load->library('upload', $config);
        	if ( ! $this->upload->do_upload('career_img'))
	        {
	            $error = array('error' => $this->upload->display_errors());
	            $this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','File type not support. Please Try again!');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/career/edit/'.$id);
	        }
	        else
	        {
	        	$result = $this->T_Career->get_detail($id);
				if ($result) {
					$path = FCPATH.'/assets/uploads/'.$result[0]->img;
					$action_delete = unlink($path);
				}
		        $data = array('upload_data' => $this->upload->data());
		        $datas = array(
		        	'img' => 'career/'.$file_name,
		        	'title' => $title,
		        	'description' => $description
		        );
		        $update = $this->T_Career->update($datas, $id);
		        if ($update) {
		        	$this->session->set_flashdata('title','Success');
		        	$this->session->set_flashdata('message','Edit data career');
		        	$this->session->set_flashdata('status','success');
		        	redirect('/administrator/career');
		        }else{
		        	$this->session->set_flashdata('title','Failed');
		        	$this->session->set_flashdata('message','Edit data career');
		        	$this->session->set_flashdata('status','error');
		        	redirect('/administrator/career');
		        }
	        }
        }
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$result = $this->T_Career->get_detail($id);
		if ($result) {
			if ($result[0]->img != '' || $result[0]->img != NULL) {
				$path = FCPATH.'/assets/uploads/'.$result[0]->img;
				$action_delete = unlink($path);
			}
			$action = $this->T_Career->delete($id);
		}else{
			$action = false;
		}
		echo $action;
	}
	
	public function change_status()
	{
		$id = $this->input->post('id') ? $this->input->post('id'): '';
		$status = $this->input->post('status') ? $this->input->post('status') : '';

    	$datas = array(
        	'status' => $status
        );
        $update = $this->T_Career->update($datas, $id);
        if ($update) {
        	$action = true;
        }else{
        	$action = false;
        }
        echo $action;
	}
}

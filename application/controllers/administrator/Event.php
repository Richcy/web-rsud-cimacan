<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('T_Event');
    	$this->load->model('T_Event_Category');
        $this->load->library('session');
	}

	public function index()
	{
		
		
		$data['cur_page'] = 'event';
		$data['cur_parent_page'] = 'event';
		$data['datas'] = $this->T_Event->show_all();
		$this->load->view('admin/module/event/index', $data);
	}

	public function Add()
	{
		
		
		$data['cur_page'] = 'event';
		$data['cur_parent_page'] = 'event';
		$data['fields'] = $this->T_Event_Category->show_all();
		$this->load->view('admin/module/event/add', $data);
	}

	public function edit($id)
	{
		
		
		$data['cur_page'] = 'event';
		$data['cur_parent_page'] = 'event';
		$data['fields'] = $this->T_Event_Category->show_all();
		$data['datas'] = $this->T_Event->get_detail($id);
		$this->load->view('admin/module/event/edit', $data);
	}

	public function create()
	{
		// $id = random_string('alnum',24);
		$title = $this->input->post('title') ? $this->input->post('title') : '';
		$category = $this->input->post('category') ? $this->input->post('category') : '';
		$sub_desc = $this->input->post('sub_desc') ? $this->input->post('sub_desc') : '';
		$url = $this->input->post('url') ? $this->input->post('url') : '';
		$description = $this->input->post('desc') ? str_replace("'", "’", $this->input->post('desc')) : '';
		$start_date = $this->input->post('start_date') ? $this->input->post('start_date'): '';
		$end_date = $this->input->post('end_date') ? $this->input->post('end_date'): '';
		$start_time = $this->input->post('start_time') ? $this->input->post('start_time'): '';
		$end_time = $this->input->post('end_time') ? $this->input->post('end_time'): '';
		$location = $this->input->post('location') ? $this->input->post('location'): '';
		
		$now = date('YmdHis');
		$edit_name = str_replace(' ', '-', $_FILES["event_img"]['name']);
		$file_name = $now.'_'.$edit_name;
		
		$config['upload_path']          = FCPATH.'assets/uploads/event';
        // $config['allowed_types']        = 'gif|jpg|png';
        $config['allowed_types']        = '*';
        $config['max_size']             = 10000;
        $config['file_name']            = $file_name;
		$config['overwrite']            = true;
		$this->load->library('upload', $config);

		// var_dump($start_date);
		// die();
		
		if ($_FILES["event_img"]['name'] == '' || $_FILES["event_img"]['name'] == NULL ) {
			$datas = array(
	        	'title' => $title,
	        	'category' => $category,
	        	'url' => $url,
	        	'sub_desc' => $sub_desc,
	        	'description' => $description,
	        	'start_date' => $start_date,
	        	'end_date' => $end_date,
	        	'start_time' => $start_time,
	        	'end_time' => $end_time,
	        	'location' => $location,
	        	'create_date' => date('Y-m-d H:i:s')
	        );
	        $insert = $this->T_Event->insert($datas,'t_event');
	        if ($insert) {
	        	$this->session->set_flashdata('title','Success');
	        	$this->session->set_flashdata('message','Insert data event');
	        	$this->session->set_flashdata('status','success');
	        	redirect('/administrator/event');
	        }else{
	        	$this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','Insert data event');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/event');
	        }
		}else{
			if ( ! $this->upload->do_upload('event_img'))
	        {
	            $error = array('error' => $this->upload->display_errors());
	            $this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','File type not support. Please Try again!');
	        	$this->session->set_flashdata('status','error');
	        	// redirect('/administrator/event/add');
	        	redirect($_SERVER['HTTP_REFERER']);
	        }

	        else
	        {
		        $data = array('upload_data' => $this->upload->data());
				$datas = array(
		        	// 'id' => $id,
		        	'img' => 'event/'.$file_name,
		        	'title' => $title,
		        	'category' => $category,
		        	'url' => $url,
		        	'description' => $description,
		        	'start_date' => $start_date,
		        	'end_date' => $end_date,
		        	'start_time' => $start_time,
		        	'end_time' => $end_time,
		        	'location' => $location,
		        	'create_date' => date('Y-m-d H:i:s')
		        );
		        $insert = $this->T_Event->insert($datas,'t_event');
		        if ($insert) {
		        	$this->session->set_flashdata('title','Success');
		        	$this->session->set_flashdata('message','Insert data event');
		        	$this->session->set_flashdata('status','success');
		        	redirect('/administrator/event');
		        }else{
		        	$this->session->set_flashdata('title','Failed');
		        	$this->session->set_flashdata('message','Insert data event');
		        	$this->session->set_flashdata('status','error');
		        	redirect('/administrator/event');
		        }
	        }
    	}
	}

	public function update()
	{
		$id = $this->input->post('id') ? $this->input->post('id'): '';
		$title = $this->input->post('title') ? $this->input->post('title') : '';
		$category = $this->input->post('category') ? $this->input->post('category') : '';
		$url = $this->input->post('url') ? $this->input->post('url') : '';
		$sub_desc = $this->input->post('sub_desc') ? $this->input->post('sub_desc') : '';
		$description = $this->input->post('desc') ? str_replace("'", "’", $this->input->post('desc')) : '';
		$start_date = $this->input->post('start_date') ? $this->input->post('start_date'): '';
		$end_date = $this->input->post('end_date') ? $this->input->post('end_date'): '';
		$start_time = $this->input->post('start_time') ? $this->input->post('start_time'): '';
		$end_time = $this->input->post('end_time') ? $this->input->post('end_time'): '';
		$location = $this->input->post('location') ? $this->input->post('location'): '';
		
		$now = date('YmdHis');
		$edit_name = str_replace(' ', '-', $_FILES["event_img"]['name']);
		$file_name = $now.'_'.$edit_name;
		
		$config['upload_path']          = FCPATH.'assets/uploads/event';
        // $config['allowed_types']        = 'gif|jpg|png';
        $config['allowed_types']        = '*';
        $config['max_size']             = 10000;
        $config['file_name']            = $file_name;
		$config['overwrite']            = true;
		$this->load->library('upload', $config);

    	 if ($_FILES["event_img"]['name'] == '') {
        	$datas = array(
	        	'title' => $title,
	        	'category' => $category,
	        	'url' => $url,
	        	'sub_desc' => $sub_desc,
	        	'description' => $description,
	        	'start_date' => $start_date,
	        	'end_date' => $end_date,
	        	'start_time' => $start_time,
	        	'end_time' => $end_time,
	        	'location' => $location
	        );
	        $update = $this->T_Event->update($datas, $id);
	        if ($update) {
	        	$this->session->set_flashdata('title','Success');
	        	$this->session->set_flashdata('message','Edit data event');
	        	$this->session->set_flashdata('status','success');
	        	redirect('/administrator/event');
	        }else{
	        	$this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','Edit data event');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/event');
	        }
        }else{
        	$this->load->library('upload', $config);
        	if ( ! $this->upload->do_upload('event_img'))
	        {
	            $error = array('error' => $this->upload->display_errors());
	            $this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','File type not support. Please Try again!');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/event/edit/'.$id);
	        }
	        else
	        {
	        	$result = $this->T_Event->get_detail($id);
				if ($result) {
					$path = FCPATH.'/assets/uploads/'.$result[0]->img;
					$action_delete = unlink($path);
				}
		        $data = array('upload_data' => $this->upload->data());
		        $datas = array(
		        	'img' => 'event/'.$file_name,
		        	'title' => $title,
		        	'category' => $category,
		        	'url' => $url,
		        	'sub_desc' => $sub_desc,
		        	'description' => $description,
		        	'start_date' => $start_date,
		        	'end_date' => $end_date,
		        	'start_time' => $start_time,
		        	'end_time' => $end_time,
	        		'location' => $location
		        );
		        $update = $this->T_Event->update($datas, $id);
		        if ($update) {
		        	$this->session->set_flashdata('title','Success');
		        	$this->session->set_flashdata('message','Edit data event');
		        	$this->session->set_flashdata('status','success');
		        	redirect('/administrator/event');
		        }else{
		        	$this->session->set_flashdata('title','Failed');
		        	$this->session->set_flashdata('message','Edit data event');
		        	$this->session->set_flashdata('status','error');
		        	redirect('/administrator/event');
		        }
	        }
        }
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$result = $this->T_Event->get_detail($id);
		if ($result) {
			if ($result[0]->img != '' || $result[0]->img != NULL) {
				$path = FCPATH.'/assets/uploads/'.$result[0]->img;
				$action_delete = unlink($path);
			}
			$action = $this->T_Event->delete($id);
		}else{
			$action = false;
		}
		echo $action;
	}
	// End gallery section
}

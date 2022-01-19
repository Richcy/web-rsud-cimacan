<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_About_Home');
        $this->load->library('session');
	}

	public function index()
	{
		
		
		$data['cur_page'] = 'about_home';
		$data['cur_parent_page'] = 'about_company';
		$data['datas'] = $this->M_About_Home->show_about_home();
		$this->load->view('admin/module/about_home/index', $data);
	}

	public function create()
	{
		$id = $this->input->post('id');
		$desc = $this->input->post('desc') ? str_replace("'", "’", $this->input->post('desc')) : '';

		$now = date('YmdHis');
		$edit_name = str_replace(' ', '-', $_FILES["banner_img"]['name']);
		$file_name = $now.'_'.$edit_name;
		
		$config['upload_path']          = FCPATH.'assets/uploads/about_company';
        // $config['allowed_types']        = 'gif|jpg|png';
        $config['allowed_types']        = '*';
        $config['max_size']             = 10000;
        $config['file_name']            = $file_name;
		$config['overwrite']            = true;
		$this->load->library('upload', $config);
        if ($_FILES["banner_img"]['name'] == '' || $_FILES["banner_img"]['name'] == NULL ) {
        	if ($id == 'empty') {
				$id = random_string('alnum',24);
				$datas = array(
		        	'id' => $id,
		        	'description' => $desc,
		        	'type' => 'about_home'
		        );
		        $insert = $this->M_About_Home->insert($datas,'t_service');
			}else{
				$datas = array(
		        	'id' => $id,
		        	'description' => $desc,
		        	'type' => 'about_home'
		        );
				$insert = $this->M_About_Home->update($datas, $id);
			}
	        if ($insert) {
	        	$this->session->set_flashdata('title','Success');
	        	$this->session->set_flashdata('message','Update data about_home');
	        	$this->session->set_flashdata('status','success');
	        	redirect('/administrator/about_home');
	        }else{
	        	$this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','Update data about_home');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/about_home');
	        }
        }else{
        	if ( ! $this->upload->do_upload('banner_img'))
	        {
	            $error = array('error' => $this->upload->display_errors());
	            $this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','File type not support. Please Try again!');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/about_home/index');
	        }

	        else
	        {
		        $data = array('upload_data' => $this->upload->data());
		        if ($id == 'empty') {
					$id = random_string('alnum',24);
					$datas = array(
			        	'id' => $id,
			        	'banner' => 'about_company/'.$file_name,
			        	'description' => $desc,
			        	'type' => 'about_home'
			        );
			        $insert = $this->M_About_Home->insert($datas,'t_service');
				}else{
					$datas = array(
			        	'banner' => 'about_company/'.$file_name,
			        	'description' => $desc,
			        	'type' => 'about_home'
			        );
					$result = $this->M_About_Home->show_about_home();
					if ($result) {
						$path = FCPATH.'/assets/uploads/'.$result[0]->banner;
						$action_delete = unlink($path);
					}
					$insert = $this->M_About_Home->update($datas, $id);
				}
		        if ($insert) {
		        	$this->session->set_flashdata('title','Success');
		        	$this->session->set_flashdata('message','Update data about_home');
		        	$this->session->set_flashdata('status','success');
		        	redirect('/administrator/about_home');
		        }else{
		        	$this->session->set_flashdata('title','Failed');
		        	$this->session->set_flashdata('message','Update data about_home');
		        	$this->session->set_flashdata('status','error');
		        	redirect('/administrator/about_home');
		        }
	        }
        }
	}

	// End gallery section
}

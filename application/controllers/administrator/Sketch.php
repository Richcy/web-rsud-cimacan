<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sketch extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_Sketch');
        $this->load->library('session');
	}

	public function index()
	{
		$role_admin = $this->session->userdata('role_id') ? $this->session->userdata('role_id') : '';
		if ($role_admin != 1) {
			$this->session->sess_destroy();
			redirect('/administrator/');
		}
		
		$data['cur_page'] = 'sketch';
		$data['cur_parent_page'] = 'about_company';
		$data['datas'] = $this->M_Sketch->show_sketch();
		$this->load->view('admin/module/sketch/index', $data);
	}

	public function create()
	{
		$id = $this->input->post('id');
		$desc = $this->input->post('desc') ? str_replace("'", "’", $this->input->post('desc')) : '';

		$now = date('YmdHis');
		$edit_name = str_replace(' ', '-', $_FILES["banner_img"]['name']);
		$file_name = $now.'_'.$edit_name;
		
		$config['upload_path']          = FCPATH.'assets/uploads/sketch';
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
		        	'type' => 'sketch',
		        	'create_date' => date('Y-m-d H:i:s')
		        );
		        $insert = $this->M_Sketch->insert($datas,'t_image_profile');
			}else{
				$datas = array(
		        	'id' => $id,
		        	'type' => 'sketch',
		        	'create_date' => date('Y-m-d H:i:s')
		        );
				$insert = $this->M_Sketch->update($datas, $id);
			}
	        if ($insert) {
	        	$this->session->set_flashdata('title','Success');
	        	$this->session->set_flashdata('message','Update data sketch');
	        	$this->session->set_flashdata('status','success');
	        	redirect('/administrator/sketch');
	        }else{
	        	$this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','Update data sketch');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/sketch');
	        }
        }else{
        	if ( ! $this->upload->do_upload('banner_img'))
	        {
	            $error = array('error' => $this->upload->display_errors());
	            $this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','File type not support. Please Try again!');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/sketch/index');
	        }

	        else
	        {
		        $data = array('upload_data' => $this->upload->data());
		        if ($id == 'empty') {
					$id = random_string('alnum',24);
					$datas = array(
			        	'id' => $id,
			        	'img' => 'sketch/'.$file_name,
			        	'type' => 'sketch',
		        		'create_date' => date('Y-m-d H:i:s')
			        );
			        $insert = $this->M_Sketch->insert($datas,'t_image_profile');
				}else{
					$datas = array(
			        	'img' => 'sketch/'.$file_name,
			        	'type' => 'sketch',
		        		'create_date' => date('Y-m-d H:i:s')
			        );
					$result = $this->M_Sketch->show_sketch();
					if ($result) {
						$path = FCPATH.'/assets/uploads/'.$result[0]->banner;
						$action_delete = unlink($path);
					}
					$insert = $this->M_Sketch->update($datas, $id);
				}
		        if ($insert) {
		        	$this->session->set_flashdata('title','Success');
		        	$this->session->set_flashdata('message','Update data sketch');
		        	$this->session->set_flashdata('status','success');
		        	redirect('/administrator/sketch');
		        }else{
		        	$this->session->set_flashdata('title','Failed');
		        	$this->session->set_flashdata('message','Update data sketch');
		        	$this->session->set_flashdata('status','error');
		        	redirect('/administrator/sketch');
		        }
	        }
        }
	}

	// End gallery section
}

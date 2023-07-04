<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quality_check extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_Quality');
        $this->load->library('session');
	}

	public function index()
	{
		
		
		$data['cur_page'] = 'quality';
		$data['cur_parent_page'] = 'about_company';
		$data['datas'] = $this->M_Quality->show_quality();
		$this->load->view('admin/module/quality_check/index', $data);
	}

	public function create()
	{
		$id = $this->input->post('id');
		$desc = $this->input->post('desc') ? str_replace("'", "’", $this->input->post('desc')) : '';

		$now = date('YmdHis');
		$edit_name = str_replace(' ', '-', $_FILES["banner_img"]['name']);
		$file_name = $now.'_'.$edit_name;
		
		$config['upload_path']          = FCPATH.'assets/uploads/quality';
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
		        	'type' => 'quality',
		        	'create_date' => date('Y-m-d H:i:s')
		        );
		        $insert = $this->M_Quality->insert($datas,'t_image_profile');
			}else{
				$datas = array(
		        	'id' => $id,
		        	'type' => 'quality',
		        	'create_date' => date('Y-m-d H:i:s')
		        );
				$insert = $this->M_Quality->update($datas, $id);
			}
	        if ($insert) {
	        	$this->session->set_flashdata('title','Success');
	        	$this->session->set_flashdata('message','Update data quality');
	        	$this->session->set_flashdata('status','success');
	        	redirect('/administrator/quality_check');
	        }else{
	        	$this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','Update data quality');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/quality_check');
	        }
        }else{
        	if ( ! $this->upload->do_upload('banner_img'))
	        {
	            $error = array('error' => $this->upload->display_errors());
	            $this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','File type not support. Please Try again!');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/quality_check/index');
	        }

	        else
	        {
		        $data = array('upload_data' => $this->upload->data());
		        if ($id == 'empty') {
					$id = random_string('alnum',24);
					$datas = array(
			        	'id' => $id,
			        	'img' => 'quality/'.$file_name,
			        	'type' => 'quality',
		        		'create_date' => date('Y-m-d H:i:s')
			        );
			        $insert = $this->M_Quality->insert($datas,'t_image_profile');
				}else{
					$datas = array(
			        	'img' => 'quality/'.$file_name,
			        	'type' => 'quality',
		        		'create_date' => date('Y-m-d H:i:s')
			        );
					$result = $this->M_Quality->show_quality();
					if ($result) {
						$path = FCPATH.'/assets/uploads/'.$result[0]->img;
						$action_delete = unlink($path);
					}
					$insert = $this->M_Quality->update($datas, $id);
				}
		        if ($insert) {
		        	$this->session->set_flashdata('title','Success');
		        	$this->session->set_flashdata('message','Update data quality');
		        	$this->session->set_flashdata('status','success');
		        	redirect('/administrator/quality_check');
		        }else{
		        	$this->session->set_flashdata('title','Failed');
		        	$this->session->set_flashdata('message','Update data quality');
		        	$this->session->set_flashdata('status','error');
		        	redirect('/administrator/quality_check');
		        }
	        }
        }
	}

	// End gallery section
}

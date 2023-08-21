<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Standard_pelayanan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_Standard_Pelayanan');
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'standard_pelayanan';
		$data['cur_parent_page'] = 'about_company';
		$data['datas'] = $this->M_Standard_Pelayanan->show_standard_pelayanan();
		$this->load->view('admin/module/standard_pelayanan/index', $data);
	}

	public function create()
	{
		$id = $this->input->post('id');
		$desc = $this->input->post('desc') ? str_replace("'", "’", $this->input->post('desc')) : '';

		$now = date('YmdHis');
		$edit_name = str_replace(' ', '-', $_FILES["banner_img"]['name']);
		$file_name = $now.'_'.$edit_name;
		
		$config['upload_path']          = FCPATH.'assets/uploads/standard_pelayanan';
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
		        	'type' => 'standard_pelayanan',
		        	'create_date' => date('Y-m-d H:i:s')
		        );
		        $insert = $this->M_Standard_Pelayanan->insert($datas,'t_image_profile');
			}else{
				$datas = array(
		        	'id' => $id,
		        	'type' => 'standard_pelayanan',
		        	'create_date' => date('Y-m-d H:i:s')
		        );
				$insert = $this->M_Standard_Pelayanan->update($datas, $id);
			}
	        if ($insert) {
	        	$this->session->set_flashdata('title','Success');
	        	$this->session->set_flashdata('message','Update data standard_pelayanan');
	        	$this->session->set_flashdata('status','success');
	        	redirect('/administrator/standard_pelayanan');
	        }else{
	        	$this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','Update data standard_pelayanan');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/standard_pelayanan');
	        }
        }else{
        	if ( ! $this->upload->do_upload('banner_img'))
	        {
	            $error = array('error' => $this->upload->display_errors());
	            $this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','File type not support. Please Try again!');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/standard_pelayanan/index');
	        }

	        else
	        {
		        $data = array('upload_data' => $this->upload->data());
		        if ($id == 'empty') {
					$id = random_string('alnum',24);
					$datas = array(
			        	'id' => $id,
			        	'img' => 'standard_pelayanan/'.$file_name,
			        	'type' => 'standard_pelayanan',
		        		'create_date' => date('Y-m-d H:i:s')
			        );
			        $insert = $this->M_Standard_Pelayanan->insert($datas,'t_image_profile');
				}else{
					$datas = array(
			        	'img' => 'standard_pelayanan/'.$file_name,
			        	'type' => 'standard_pelayanan',
		        		'create_date' => date('Y-m-d H:i:s')
			        );
					$result = $this->M_Standard_Pelayanan->show_standard_pelayanan();
					if ($result) {
						$path = FCPATH.'/assets/uploads/'.$result[0]->banner;
						$action_delete = unlink($path);
					}
					$insert = $this->M_Standard_Pelayanan->update($datas, $id);
				}
		        if ($insert) {
		        	$this->session->set_flashdata('title','Success');
		        	$this->session->set_flashdata('message','Update data standard_pelayanan');
		        	$this->session->set_flashdata('status','success');
		        	redirect('/administrator/standard_pelayanan');
		        }else{
		        	$this->session->set_flashdata('title','Failed');
		        	$this->session->set_flashdata('message','Update data standard_pelayanan');
		        	$this->session->set_flashdata('status','error');
		        	redirect('/administrator/standard_pelayanan');
		        }
	        }
        }
	}

	// End gallery section
}

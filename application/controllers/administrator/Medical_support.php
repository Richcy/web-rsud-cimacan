<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medical_support extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_Medical_Support');
        $this->load->library('session');
	}

	public function index()
	{
		$role_admin = $this->session->userdata('role_id') ? $this->session->userdata('role_id') : '';
		if ($role_admin != 1) {
			$this->session->sess_destroy();
			redirect('/administrator/');
		}
		
		$data['cur_page'] = 'medical_support';
		$data['cur_parent_page'] = 'service';
		$data['datas'] = $this->M_Medical_Support->show_medical_support();
		$this->load->view('admin/module/service/medical_support/index', $data);
	}

	public function gallery()
	{
		$role_admin = $this->session->userdata('role_id') ? $this->session->userdata('role_id') : '';
		if ($role_admin != 1) {
			$this->session->sess_destroy();
			redirect('/administrator/');
		}
		
		$data['cur_page'] = 'medical_support';
		$data['cur_parent_page'] = 'service';
		// $data['datas'] = $this->M_Medical_Support->show_medical_support();
		$data['datas'] = $this->M_Medical_Support->show_gallery('medical_support');
		$this->load->view('admin/module/service/medical_support/gallery', $data);
	}

	public function create()
	{
		$id = $this->input->post('id');
		$desc = $this->input->post('desc') ? str_replace("'", "’", $this->input->post('desc')) : '';
		// var_dump($desc);
		// die();
		$now = date('YmdHis');
		$edit_name = str_replace(' ', '-', $_FILES["banner_img"]['name']);
		$file_name = $now.'_'.$edit_name;
		
		$config['upload_path']          = FCPATH.'assets/uploads/medical_support';
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
		        	'type' => 'medical_support'
		        );
		        $insert = $this->M_Medical_Support->insert($datas,'t_service');
			}else{
				$datas = array(
		        	'id' => $id,
		        	'description' => $desc,
		        	'type' => 'medical_support'
		        );
				$insert = $this->M_Medical_Support->update($datas, $id);
			}
	        if ($insert) {
	        	$this->session->set_flashdata('title','Success');
	        	$this->session->set_flashdata('message','Update data Medical Support');
	        	$this->session->set_flashdata('status','success');
	        	redirect('/administrator/medical_support');
	        }else{
	        	$this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','Update data Medical Support');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/medical_support');
	        }
        }else{
        	if ( ! $this->upload->do_upload('banner_img'))
	        {
	            $error = array('error' => $this->upload->display_errors());
	            $this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','File type not support. Please Try again!');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/medical_support/index');
	        }

	        else
	        {
		        $data = array('upload_data' => $this->upload->data());
		        if ($id == 'empty') {
					$id = random_string('alnum',24);
					$datas = array(
			        	'id' => $id,
			        	'banner' => 'medical_support/'.$file_name,
			        	'description' => $desc,
			        	'type' => 'medical_support'
			        );
			        $insert = $this->M_Medical_Support->insert($datas,'t_service');
				}else{
					$datas = array(
			        	'banner' => 'medical_support/'.$file_name,
			        	'description' => $desc,
			        	'type' => 'medical_support'
			        );
					$result = $this->M_Medical_Support->show_medical_support();
					if ($result) {
						$path = FCPATH.'/assets/uploads/'.$result[0]->banner;
						$action_delete = unlink($path);
					}
					$insert = $this->M_Medical_Support->update($datas, $id);
				}
		        if ($insert) {
		        	$this->session->set_flashdata('title','Success');
		        	$this->session->set_flashdata('message','Update data Medical Support');
		        	$this->session->set_flashdata('status','success');
		        	redirect('/administrator/medical_support');
		        }else{
		        	$this->session->set_flashdata('title','Failed');
		        	$this->session->set_flashdata('message','Update data Medical Support');
		        	$this->session->set_flashdata('status','error');
		        	redirect('/administrator/medical_support');
		        }
	        }
        }
	}

	public function add_gallery()
	{
		$role_admin = $this->session->userdata('role_id') ? $this->session->userdata('role_id') : '';
		if ($role_admin != 1) {
			$this->session->sess_destroy();
			redirect('/administrator/');
		}
		
		$data['cur_page'] = 'medical_support';
		$data['cur_parent_page'] = 'service';
		$this->load->view('admin/module/service/medical_support/add_gallery', $data);
	}

	// Gallery Section
	public function create_gallery()
	{
		$id = random_string('alnum',24);

		$now = date('YmdHis');
		$edit_name = str_replace(' ', '-', $_FILES["gallery_medical_support"]['name']);
		$file_name = $now.'_'.$edit_name;
		
		$config['upload_path']          = FCPATH.'assets/uploads/medical_support';
        // $config['allowed_types']        = 'gif|jpg|png';
        $config['allowed_types']        = '*';
        $config['max_size']             = 10000;
        $config['file_name']            = $file_name;
		$config['overwrite']            = true;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('gallery_medical_support'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('title','Failed');
        	$this->session->set_flashdata('message','File type not support. Please Try again!');
        	$this->session->set_flashdata('status','error');
        	// var_dump($error);
        	redirect('/administrator/medical_support/add_gallery');
        }
        else
        {
	        $data = array('upload_data' => $this->upload->data());
	        $add_last_number = $this->M_Medical_Support->last_number();
	        $sort = $add_last_number->sort ? $add_last_number->sort : 0 ; 
	        $fix_sort = $sort + 1;
	        $datas = array(
	        	'id' => $id,
	        	'img' => 'medical_support/'.$file_name,
	        	'sort' => $fix_sort,
	        	'type' => 'medical_support',
	        	'create_date' => $now
	        );
	        $insert = $this->M_Medical_Support->insert_gallery($datas,'t_gallery');
	        if ($insert) {
	        	$this->session->set_flashdata('title','Success');
	        	$this->session->set_flashdata('message','Add data gallery Medical Support');
	        	$this->session->set_flashdata('status','success');
	        	redirect('/administrator/medical_support/gallery');
	        }else{
	        	$this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','Add data gallery Medical Support');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/medical_support/gallery');
	        }
        }
	}

	public function save_sort()
	{
		$data_sort = $this->input->post('data_id');
		$num = 0;
		foreach ($data_sort as $data) {
			$update_sort = $this->M_Medical_Support->update_sort($data, $num+1);
			$num++;
		}
		$query = $this->db->order_by('sort', 'ASC');
		$query = $this->db->get('t_gallery')->result();
    	// var_dump($query);
    	$datas['datas'] = $this->M_Medical_Support->show_gallery('medical_support');
		$this->load->view('admin/module/service/medical_support/table', $datas);
	}

	public function delete_gallery()
	{
		$id = $this->input->post('id');
		$result = $this->M_Medical_Support->get_detail_gallery($id);
		if ($result) {
			$path = FCPATH.'/assets/uploads/'.$result[0]->img;
			$action_delete = unlink($path);
			$action = $this->M_Medical_Support->delete($id);
		}else{
			$action = false;
		}
		echo $action;
	}

	// End gallery section
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lab extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_Lab');
        $this->load->library('session');
	}

	public function index()
	{
		$role_admin = $this->session->userdata('role_id') ? $this->session->userdata('role_id') : '';
		if ($role_admin != 1) {
			$this->session->sess_destroy();
			redirect('/administrator/');
		}
		
		$data['cur_page'] = 'lab';
		$data['cur_parent_page'] = 'service';
		$data['datas'] = $this->M_Lab->show_lab();
		$this->load->view('admin/module/service/lab/index', $data);
	}

	public function gallery()
	{
		$role_admin = $this->session->userdata('role_id') ? $this->session->userdata('role_id') : '';
		if ($role_admin != 1) {
			$this->session->sess_destroy();
			redirect('/administrator/');
		}
		
		$data['cur_page'] = 'lab';
		$data['cur_parent_page'] = 'service';
		// $data['datas'] = $this->M_Lab->show_lab();
		$data['datas'] = $this->M_Lab->show_gallery('lab');
		$this->load->view('admin/module/service/lab/gallery', $data);
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
		
		$config['upload_path']          = FCPATH.'assets/uploads/lab';
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
		        	'type' => 'lab'
		        );
		        $insert = $this->M_Lab->insert($datas,'t_service');
			}else{
				$datas = array(
		        	'id' => $id,
		        	'description' => $desc,
		        	'type' => 'lab'
		        );
				$insert = $this->M_Lab->update($datas, $id);
			}
	        if ($insert) {
	        	$this->session->set_flashdata('title','Success');
	        	$this->session->set_flashdata('message','Update data Laboratorium');
	        	$this->session->set_flashdata('status','success');
	        	redirect('/administrator/lab');
	        }else{
	        	$this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','Update data Laboratorium');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/lab');
	        }
        }else{
        	if ( ! $this->upload->do_upload('banner_img'))
	        {
	            $error = array('error' => $this->upload->display_errors());
	            $this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','File type not support. Please Try again!');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/lab/index');
	        }

	        else
	        {
		        $data = array('upload_data' => $this->upload->data());
		        if ($id == 'empty') {
					$id = random_string('alnum',24);
					$datas = array(
			        	'id' => $id,
			        	'banner' => 'lab/'.$file_name,
			        	'description' => $desc,
			        	'type' => 'lab'
			        );
			        $insert = $this->M_Lab->insert($datas,'t_service');
				}else{
					$datas = array(
			        	'banner' => 'lab/'.$file_name,
			        	'description' => $desc,
			        	'type' => 'lab'
			        );
					$result = $this->M_Lab->show_lab();
					if ($result) {
						$path = FCPATH.'/assets/uploads/'.$result[0]->banner;
						$action_delete = unlink($path);
					}
					$insert = $this->M_Lab->update($datas, $id);
				}
		        if ($insert) {
		        	$this->session->set_flashdata('title','Success');
		        	$this->session->set_flashdata('message','Update data Laboratorium');
		        	$this->session->set_flashdata('status','success');
		        	redirect('/administrator/lab');
		        }else{
		        	$this->session->set_flashdata('title','Failed');
		        	$this->session->set_flashdata('message','Update data Laboratorium');
		        	$this->session->set_flashdata('status','error');
		        	redirect('/administrator/lab');
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
		
		$data['cur_page'] = 'lab';
		$data['cur_parent_page'] = 'service';
		$this->load->view('admin/module/service/lab/add_gallery', $data);
	}

	// Gallery Section
	public function create_gallery()
	{
		$id = random_string('alnum',24);

		$now = date('YmdHis');
		$edit_name = str_replace(' ', '-', $_FILES["gallery_lab"]['name']);
		$file_name = $now.'_'.$edit_name;
		
		$config['upload_path']          = FCPATH.'assets/uploads/lab';
        // $config['allowed_types']        = 'gif|jpg|png';
        $config['allowed_types']        = '*';
        $config['max_size']             = 10000;
        $config['file_name']            = $file_name;
		$config['overwrite']            = true;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('gallery_lab'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('title','Failed');
        	$this->session->set_flashdata('message','File type not support. Please Try again!');
        	$this->session->set_flashdata('status','error');
        	// var_dump($error);
        	redirect('/administrator/lab/add_gallery');
        }
        else
        {
	        $data = array('upload_data' => $this->upload->data());
	        $add_last_number = $this->M_Lab->last_number();
	        $sort = $add_last_number->sort ? $add_last_number->sort : 0 ; 
	        $fix_sort = $sort + 1;
	        $datas = array(
	        	'id' => $id,
	        	'img' => 'lab/'.$file_name,
	        	'sort' => $fix_sort,
	        	'type' => 'lab',
	        	'create_date' => $now
	        );
	        $insert = $this->M_Lab->insert_gallery($datas,'t_gallery');
	        if ($insert) {
	        	$this->session->set_flashdata('title','Success');
	        	$this->session->set_flashdata('message','Add data gallery Laboratorium');
	        	$this->session->set_flashdata('status','success');
	        	redirect('/administrator/lab/gallery');
	        }else{
	        	$this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','Add data gallery Laboratorium');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/lab/gallery');
	        }
        }
	}

	public function save_sort()
	{
		$data_sort = $this->input->post('data_id');
		$num = 0;
		foreach ($data_sort as $data) {
			$update_sort = $this->M_Lab->update_sort($data, $num+1);
			$num++;
		}
		$query = $this->db->order_by('sort', 'ASC');
		$query = $this->db->get('t_gallery')->result();
    	// var_dump($query);
    	$datas['datas'] = $this->M_Lab->show_gallery('lab');
		$this->load->view('admin/module/service/lab/table', $datas);
	}

	public function delete_gallery()
	{
		$id = $this->input->post('id');
		$result = $this->M_Lab->get_detail_gallery($id);
		if ($result) {
			$path = FCPATH.'/assets/uploads/'.$result[0]->img;
			$action_delete = unlink($path);
			$action = $this->M_Lab->delete($id);
		}else{
			$action = false;
		}
		echo $action;
	}

	// End gallery section
}

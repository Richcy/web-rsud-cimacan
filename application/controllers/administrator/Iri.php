<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IRI extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_IRI');
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'iri';
		$data['cur_parent_page'] = 'service';
		$data['datas'] = $this->M_IRI->show_iri();
		$this->load->view('admin/module/service/iri/index', $data);
	}

	public function gallery()
	{
		$data['cur_page'] = 'iri';
		$data['cur_parent_page'] = 'service';
		// $data['datas'] = $this->M_IRI->show_iri();
		$data['datas'] = $this->M_IRI->show_gallery('iri');
		$this->load->view('admin/module/service/iri/gallery', $data);
	}

	public function create()
	{
		$id = $this->input->post('id');
		$desc = $this->input->post('desc') ? str_replace("'", "’", $this->input->post('desc')) : '';

		$now = date('YmdHis');
		$edit_name = str_replace(' ', '-', $_FILES["banner_img"]['name']);
		$file_name = $now.'_'.$edit_name;
		
		$config['upload_path']          = FCPATH.'assets/uploads/iri';
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
		        	'type' => 'iri'
		        );
		        $insert = $this->M_IRI->insert($datas,'t_service');
			}else{
				$datas = array(
		        	'id' => $id,
		        	'description' => $desc,
		        	'type' => 'iri'
		        );
				$insert = $this->M_IRI->update($datas, $id);
			}
	        if ($insert) {
	        	$this->session->set_flashdata('title','Success');
	        	$this->session->set_flashdata('message','Update data Instalasi Rawat Inap');
	        	$this->session->set_flashdata('status','success');
	        	redirect('/administrator/iri');
	        }else{
	        	$this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','Update data Instalasi Rawat Inap');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/iri');
	        }
        }else{
        	if ( ! $this->upload->do_upload('banner_img'))
	        {
	            $error = array('error' => $this->upload->display_errors());
	            $this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','File type not support. Please Try again!');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/iri/index');
	        }

	        else
	        {
		        $data = array('upload_data' => $this->upload->data());
		        if ($id == 'empty') {
					$id = random_string('alnum',24);
					$datas = array(
			        	'id' => $id,
			        	'banner' => 'iri/'.$file_name,
			        	'description' => $desc,
			        	'type' => 'iri'
			        );
			        $insert = $this->M_IRI->insert($datas,'t_service');
				}else{
					$datas = array(
			        	'banner' => 'iri/'.$file_name,
			        	'description' => $desc,
			        	'type' => 'iri'
			        );
					$result = $this->M_IRI->show_iri();
					if ($result) {
						$path = FCPATH.'/assets/uploads/'.$result[0]->banner;
						$action_delete = unlink($path);
					}
					$insert = $this->M_IRI->update($datas, $id);
				}
		        if ($insert) {
		        	$this->session->set_flashdata('title','Success');
		        	$this->session->set_flashdata('message','Update data Instalasi Rawat Inap');
		        	$this->session->set_flashdata('status','success');
		        	redirect('/administrator/iri');
		        }else{
		        	$this->session->set_flashdata('title','Failed');
		        	$this->session->set_flashdata('message','Update data Instalasi Rawat Inap');
		        	$this->session->set_flashdata('status','error');
		        	redirect('/administrator/iri');
		        }
	        }
        }
	}

	public function add_gallery()
	{
		$data['cur_page'] = 'iri';
		$data['cur_parent_page'] = 'service';
		$this->load->view('admin/module/service/iri/add_gallery', $data);
	}

	// Gallery Section
	public function create_gallery()
	{
		$id = random_string('alnum',24);

		$now = date('YmdHis');
		$edit_name = str_replace(' ', '-', $_FILES["gallery_iri"]['name']);
		$file_name = $now.'_'.$edit_name;
		
		$config['upload_path']          = FCPATH.'assets/uploads/iri';
        // $config['allowed_types']        = 'gif|jpg|png';
        $config['allowed_types']        = '*';
        $config['max_size']             = 10000;
        $config['file_name']            = $file_name;
		$config['overwrite']            = true;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('gallery_iri'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('title','Failed');
        	$this->session->set_flashdata('message','File type not support. Please Try again!');
        	$this->session->set_flashdata('status','error');
        	redirect('/administrator/iri/add_gallery');
        }
        else
        {
	        $data = array('upload_data' => $this->upload->data());
	        $add_last_number = $this->M_IRI->last_number();
	        $sort = $add_last_number->sort ? $add_last_number->sort : 0 ; 
	        $fix_sort = $sort + 1;
	        $datas = array(
	        	'id' => $id,
	        	'img' => 'iri/'.$file_name,
	        	'sort' => $fix_sort,
	        	'type' => 'iri',
	        	'create_date' => $now
	        );
	        $insert = $this->M_IRI->insert_gallery($datas,'t_gallery');
	        if ($insert) {
	        	$this->session->set_flashdata('title','Success');
	        	$this->session->set_flashdata('message','Add data gallery Instalasi Rawat Inap');
	        	$this->session->set_flashdata('status','success');
	        	redirect('/administrator/iri/gallery');
	        }else{
	        	$this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','Add data gallery Instalasi Rawat Inap');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/iri/gallery');
	        }
        }
	}

	public function save_sort()
	{
		$data_sort = $this->input->post('data_id');
		$num = 0;
		foreach ($data_sort as $data) {
			$update_sort = $this->M_IRI->update_sort($data, $num+1);
			$num++;
		}
		$query = $this->db->order_by('sort', 'ASC');
		$query = $this->db->get('t_gallery')->result();
    	// var_dump($query);
    	$datas['datas'] = $this->M_IRI->show_gallery('iri');
		$this->load->view('admin/module/service/iri/table', $datas);
	}

	public function delete_gallery()
	{
		$id = $this->input->post('id');
		$result = $this->M_IRI->get_detail_gallery($id);
		if ($result) {
			$path = FCPATH.'/assets/uploads/'.$result[0]->img;
			$action_delete = unlink($path);
			$action = $this->M_IRI->delete($id);
		}else{
			$action = false;
		}
		echo $action;
	}

	// End gallery section
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ambulance extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_Ambulance');
        $this->load->library('session');
	}

	public function index()
	{
		
		
		$data['cur_page'] = 'Ambulance';
		$data['cur_parent_page'] = 'service';
		$data['datas'] = $this->M_Ambulance->show_ambulance();
		$this->load->view('admin/module/service/ambulance/index', $data);
	}

	public function gallery()
	{
		
		
		$data['cur_page'] = 'Ambulance';
		$data['cur_parent_page'] = 'service';
		// $data['datas'] = $this->M_Ambulance->show_ambulance();
		$data['datas_lab'] = $this->M_Ambulance->show_ambulance();
		$data['datas'] = $this->M_Ambulance->show_gallery('Ambulance');
		$this->load->view('admin/module/service/ambulance/gallery', $data);
	}

	public function create()
	{
		$id = $this->input->post('id');
		$desc = $this->input->post('desc') ? str_replace("'", "’", $this->input->post('desc')) : '';

		$now = date('YmdHis');
		$edit_name = str_replace(' ', '-', $_FILES["banner_img"]['name']);
		$file_name = $now.'_'.$edit_name;
		
		$config['upload_path']          = FCPATH.'assets/uploads/ambulance';
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
		        	'type' => 'ambulance'
		        );
		        $insert = $this->M_Ambulance->insert($datas,'t_service');
			}else{
				$datas = array(
		        	'id' => $id,
		        	'description' => $desc,
		        	'type' => 'ambulance'
		        );
				$insert = $this->M_Ambulance->update($datas, $id);
			}
	        if ($insert) {
	        	$this->session->set_flashdata('title','Success');
	        	$this->session->set_flashdata('message','Update data ambulance');
	        	$this->session->set_flashdata('status','success');
	        	redirect('/administrator/ambulance');
	        }else{
	        	$this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','Update data ambulance');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/ambulance');
	        }
        }else{
        	if ( ! $this->upload->do_upload('banner_img'))
	        {
	            $error = array('error' => $this->upload->display_errors());
	            $this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','File type not support. Please Try again!');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/ambulance/index');
	        }

	        else
	        {
		        $data = array('upload_data' => $this->upload->data());
		        if ($id == 'empty') {
					$id = random_string('alnum',24);
					$datas = array(
			        	'id' => $id,
			        	'banner' => 'ambulance/'.$file_name,
			        	'description' => $desc,
			        	'type' => 'ambulance'
			        );
			        $insert = $this->M_Ambulance->insert($datas,'t_service');
				}else{
					$datas = array(
			        	'banner' => 'ambulance/'.$file_name,
			        	'description' => $desc,
			        	'type' => 'ambulance'
			        );
					$result = $this->M_Ambulance->show_ambulance();
					if ($result) {
						$path = FCPATH.'/assets/uploads/'.$result[0]->banner;
						$action_delete = unlink($path);
					}
					$insert = $this->M_Ambulance->update($datas, $id);
				}
		        if ($insert) {
		        	$this->session->set_flashdata('title','Success');
		        	$this->session->set_flashdata('message','Update data ambulance');
		        	$this->session->set_flashdata('status','success');
		        	redirect('/administrator/ambulance');
		        }else{
		        	$this->session->set_flashdata('title','Failed');
		        	$this->session->set_flashdata('message','Update data ambulance');
		        	$this->session->set_flashdata('status','error');
		        	redirect('/administrator/Ambulance');
		        }
	        }
        }
	}

	public function add_gallery()
	{
		
		
		$data['cur_page'] = 'ambulance';
		$data['cur_parent_page'] = 'service';
		$this->load->view('admin/module/service/ambulance/add_gallery', $data);
	}

	// Gallery Section
	public function create_gallery()
	{
		$id = random_string('alnum',24);

		$now = date('YmdHis');
		$edit_name = str_replace(' ', '-', $_FILES["gallery_ambulance"]['name']);
		$file_name = $now.'_'.$edit_name;
		
		$config['upload_path']          = FCPATH.'assets/uploads/ambulance';
        // $config['allowed_types']        = 'gif|jpg|png';
        $config['allowed_types']        = '*';
        $config['max_size']             = 10000;
        $config['file_name']            = $file_name;
		$config['overwrite']            = true;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('gallery_ambulance'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('title','Failed');
        	$this->session->set_flashdata('message','File type not support. Please Try again!');
        	$this->session->set_flashdata('status','error');
        	// var_dump($error);
        	redirect('/administrator/Ambulance/add_gallery');
        }
        else
        {
	        $data = array('upload_data' => $this->upload->data());
	        $add_last_number = $this->M_Ambulance->last_number();
	        $sort = $add_last_number->sort ? $add_last_number->sort : 0 ; 
	        $fix_sort = $sort + 1;
	        $datas = array(
	        	'id' => $id,
	        	'img' => 'ambulance/'.$file_name,
	        	'sort' => $fix_sort,
	        	'type' => 'ambulance',
	        	'create_date' => $now
	        );
	        $insert = $this->M_Ambulance->insert_gallery($datas,'t_gallery');
	        if ($insert) {
	        	$this->session->set_flashdata('title','Success');
	        	$this->session->set_flashdata('message','Add data gallery ambulance');
	        	$this->session->set_flashdata('status','success');
	        	redirect('/administrator/ambulance/gallery');
	        }else{
	        	$this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','Add data gallery ambulance');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/Ambulance/gallery');
	        }
        }
	}

	public function save_sort()
	{
		$data_sort = $this->input->post('data_id');
		$num = 0;
		foreach ($data_sort as $data) {
			$update_sort = $this->M_Ambulance->update_sort($data, $num+1);
			$num++;
		}
		$query = $this->db->order_by('sort', 'ASC');
		$query = $this->db->get('t_gallery')->result();
    	// var_dump($query);
    	$datas['datas'] = $this->M_Ambulance->show_gallery('ambulance');
		$this->load->view('admin/module/service/ambulance/table', $datas);
	}

	public function delete_gallery()
	{
		$id = $this->input->post('id');
		$result = $this->M_Ambulance->get_detail_gallery($id);
		if ($result) {
			$path = FCPATH.'/assets/uploads/'.$result[0]->img;
			$action_delete = unlink($path);
			$action = $this->M_Ambulance->delete($id);
		}else{
			$action = false;
		}
		echo $action;
	}

	public function sub_menu($id)
	{
		
		
		$data['cur_page'] = 'ambulance';
		$data['cur_parent_page'] = 'service';
		// $data['datas'] = $this->M_IRI->show_iri();
		$data['datas'] = $this->M_Ambulance->show_sub_menu($id);
		$data['service_id'] = $id;
		$this->load->view('admin/module/service/ambulance/sub_menu/index', $data);
	}

	public function add_sub_menu($id)
	{
		
		
		$data['cur_page'] = 'ambulance';
		$data['cur_parent_page'] = 'service';
		$data['service_id'] = $id;
		$this->load->view('admin/module/service/ambulance/sub_menu/add_sub_menu', $data);
	}

	public function create_sub_menu()
	{
		$now = date('Y-m-d H:i:s');
		$id = random_string('alnum',24);
		$service_id = $this->input->post('service_id') ? $this->input->post('service_id') : '';
		$title = $this->input->post('title') ? $this->input->post('title') : '';
		$description = $this->input->post('desc') ? str_replace("'", "’", $this->input->post('desc')) : '';
		
        $datas = array(
        	'id' => $id,
        	'service_id' => $service_id,
        	'title' => $title,
        	'description' => $description,
        	'type' => 'ambulance',
        	'create_date' => $now
        );
        $insert = $this->M_Ambulance->insert($datas,'t_sub_service');
        if ($insert) {
        	$this->session->set_flashdata('title','Success');
        	$this->session->set_flashdata('message','Add data Sub Menu Ambulance');
        	$this->session->set_flashdata('status','success');
        	redirect('/administrator/ambulance/sub_menu/'.$service_id.'/');
        }else{
        	$this->session->set_flashdata('title','Failed');
        	$this->session->set_flashdata('message','Add data Sub Menu Ambulance');
        	$this->session->set_flashdata('status','error');
        	redirect('/administrator/ambulance/sub_menu/add_sub_menu/'.$service_id.'/');
        }
	}

	public function edit_sub_menu($id)
	{
		$data['cur_page'] = 'ambulance';
		$data['cur_parent_page'] = 'service';
		// $data['service_id'] = $id;
		$datas = $this->M_Ambulance->detail_sub_menu($id);
		$data['datas'] = $datas;
		$data['service_id'] = $datas[0]->service_id;
		$this->load->view('admin/module/service/ambulance/sub_menu/edit_sub_menu', $data);
	}

	public function update_sub_menu()
	{
		$id = $this->input->post('id') ? $this->input->post('id') : '';
		$service_id = $this->input->post('service_id') ? $this->input->post('service_id') : '';
		$title = $this->input->post('title') ? $this->input->post('title') : '';
		$description = $this->input->post('desc') ? str_replace("'", "’", $this->input->post('desc')) : '';
		
        $datas = array(
        	'title' => $title,
        	'description' => $description
        );
        $update = $this->M_Ambulance->update_sub_menu($datas, $id);
        if ($update) {
        	$this->session->set_flashdata('title','Success');
        	$this->session->set_flashdata('message','Update data Sub Menu Ambulance');
        	$this->session->set_flashdata('status','success');
        	redirect('/administrator/ambulance/sub_menu/'.$service_id.'/');
        }else{
        	$this->session->set_flashdata('title','Failed');
        	$this->session->set_flashdata('message','Update data Sub Menu Ambulance');
        	$this->session->set_flashdata('status','error');
        	redirect('/administrator/ambulance/edit_sub_menu/'.$id.'/');
        }
	}

	public function delete_sub_menu()
	{
		$id = $this->input->post('id');
		$result = $this->M_Ambulance->detail_sub_menu($id);
		if ($result) {
			$action = $this->M_Ambulance->delete_sub_menu($id);
		}else{
			$action = false;
		}
		echo $action;
	}

	// End gallery section
}

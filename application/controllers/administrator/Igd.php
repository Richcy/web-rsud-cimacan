<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IGD extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_IGD');
        $this->load->library('session');
	}

	public function index()
	{
		
		
		$data['cur_page'] = 'igd';
		$data['cur_parent_page'] = 'service';
		$data['datas'] = $this->M_IGD->show_igd();
		$this->load->view('admin/module/service/igd/index', $data);
	}

	public function gallery()
	{
		
		
		$data['cur_page'] = 'igd';
		$data['cur_parent_page'] = 'service';
		$data['datas_sub'] = $this->M_IGD->show_igd();
		$data['datas'] = $this->M_IGD->show_gallery('igd');
		$this->load->view('admin/module/service/igd/gallery', $data);
	}

	public function sub_menu($id)
	{
		
		
		$data['cur_page'] = 'igd';
		$data['cur_parent_page'] = 'service';
		// $data['datas'] = $this->M_igd->show_igd();
		$data['datas'] = $this->M_IGD->show_sub_menu($id);
		$data['service_id'] = $id;
		$this->load->view('admin/module/service/igd/sub_menu/index', $data);
	}

	public function create()
	{
		$id = $this->input->post('id');
		$desc = $this->input->post('desc') ? str_replace("'", "’", $this->input->post('desc')) : '';

		$now = date('YmdHis');
		$edit_name = str_replace(' ', '-', $_FILES["banner_img"]['name']);
		$file_name = $now.'_'.$edit_name;
		
		$config['upload_path']          = FCPATH.'assets/uploads/igd';
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
		        	'type' => 'igd'
		        );
		        $insert = $this->M_IGD->insert($datas,'t_service');
			}else{
				$datas = array(
		        	'id' => $id,
		        	'description' => $desc,
		        	'type' => 'igd'
		        );
				$insert = $this->M_IGD->update($datas, $id);
			}
	        if ($insert) {
	        	$this->session->set_flashdata('title','Success');
	        	$this->session->set_flashdata('message','Update data IGD');
	        	$this->session->set_flashdata('status','success');
	        	redirect('/administrator/igd');
	        }else{
	        	$this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','Update data IGD');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/igd');
	        }
        }else{
        	if ( ! $this->upload->do_upload('banner_img'))
	        {
	            $error = array('error' => $this->upload->display_errors());
	            $this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','File type not support. Please Try again!');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/igd/index');
	        }

	        else
	        {
		        $data = array('upload_data' => $this->upload->data());
		        if ($id == 'empty') {
					$id = random_string('alnum',24);
					$datas = array(
			        	'id' => $id,
			        	'banner' => 'igd/'.$file_name,
			        	'description' => $desc,
			        	'type' => 'igd'
			        );
			        $insert = $this->M_IGD->insert($datas,'t_service');
				}else{
					$datas = array(
			        	'banner' => 'igd/'.$file_name,
			        	'description' => $desc,
			        	'type' => 'igd'
			        );
					$result = $this->M_IGD->show_igd();
					if ($result) {
						$path = FCPATH.'/assets/uploads/'.$result[0]->banner;
						$action_delete = unlink($path);
					}
					$insert = $this->M_IGD->update($datas, $id);
				}
		        if ($insert) {
		        	$this->session->set_flashdata('title','Success');
		        	$this->session->set_flashdata('message','Update data IGD');
		        	$this->session->set_flashdata('status','success');
		        	redirect('/administrator/igd');
		        }else{
		        	$this->session->set_flashdata('title','Failed');
		        	$this->session->set_flashdata('message','Update data IGD');
		        	$this->session->set_flashdata('status','error');
		        	redirect('/administrator/igd');
		        }
	        }
        }
	}

	public function add_gallery()
	{
		
		
		$data['cur_page'] = 'igd';
		$data['cur_parent_page'] = 'service';
		$this->load->view('admin/module/service/igd/add_gallery', $data);
	}

	// Gallery Section
	public function create_gallery()
	{
		$id = random_string('alnum',24);

		$now = date('YmdHis');
		$edit_name = str_replace(' ', '-', $_FILES["gallery_igd"]['name']);
		$file_name = $now.'_'.$edit_name;
		
		$config['upload_path']          = FCPATH.'assets/uploads/igd';
        // $config['allowed_types']        = 'gif|jpg|png';
        $config['allowed_types']        = '*';
        $config['max_size']             = 10000;
        $config['file_name']            = $file_name;
		$config['overwrite']            = true;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('gallery_igd'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('title','Failed');
        	$this->session->set_flashdata('message','File type not support. Please Try again!');
        	$this->session->set_flashdata('status','error');
        	// var_dump($error);
        	redirect('/administrator/igd/add_gallery');
        }
        else
        {
	        $data = array('upload_data' => $this->upload->data());
	        $add_last_number = $this->M_IGD->last_number();
	        $sort = $add_last_number->sort ? $add_last_number->sort : 0 ; 
	        $fix_sort = $sort + 1;
	        $datas = array(
	        	'id' => $id,
	        	'img' => 'igd/'.$file_name,
	        	'sort' => $fix_sort,
	        	'type' => 'igd',
	        	'create_date' => $now
	        );
	        $insert = $this->M_IGD->insert_gallery($datas,'t_gallery');
	        if ($insert) {
	        	$this->session->set_flashdata('title','Success');
	        	$this->session->set_flashdata('message','Add data gallery IGD');
	        	$this->session->set_flashdata('status','success');
	        	redirect('/administrator/igd/gallery');
	        }else{
	        	$this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','Add data gallery IGD');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/igd/gallery');
	        }
        }
	}

	public function add_sub_menu($id)
	{
		
		
		$data['cur_page'] = 'igd';
		$data['cur_parent_page'] = 'service';
		$data['service_id'] = $id;
		$this->load->view('admin/module/service/igd/sub_menu/add_sub_menu', $data);
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
        	'type' => 'igd',
        	'create_date' => $now
        );
        $insert = $this->M_IGD->insert($datas,'t_sub_service');
        if ($insert) {
        	$this->session->set_flashdata('title','Success');
        	$this->session->set_flashdata('message','Add data Sub Menu Instalasi Gawat Darurat');
        	$this->session->set_flashdata('status','success');
        	redirect('/administrator/igd/sub_menu/'.$service_id.'/');
        }else{
        	$this->session->set_flashdata('title','Failed');
        	$this->session->set_flashdata('message','Add data Sub Menu Instalasi Gawat Darurat');
        	$this->session->set_flashdata('status','error');
        	redirect('/administrator/igd/sub_menu/add_sub_menu/'.$service_id.'/');
        }
	}

	public function edit_sub_menu($id)
	{
		
		
		$data['cur_page'] = 'igd';
		$data['cur_parent_page'] = 'service';
		// $data['service_id'] = $id;
		$datas = $this->M_IGD->detail_sub_menu($id);
		$data['datas'] = $datas;
		$data['service_id'] = $datas[0]->service_id;
		$this->load->view('admin/module/service/igd/sub_menu/edit_sub_menu', $data);
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
        $update = $this->M_IGD->update_sub_menu($datas, $id);
        if ($update) {
        	$this->session->set_flashdata('title','Success');
        	$this->session->set_flashdata('message','Update data Sub Menu Instalasi Gawat Darurat');
        	$this->session->set_flashdata('status','success');
        	redirect('/administrator/igd/sub_menu/'.$service_id.'/');
        }else{
        	$this->session->set_flashdata('title','Failed');
        	$this->session->set_flashdata('message','Update data Sub Menu Instalasi Gawat Darurat');
        	$this->session->set_flashdata('status','error');
        	redirect('/administrator/igd/edit_sub_menu/'.$id.'/');
        }
	}

	public function save_sort()
	{
		$data_sort = $this->input->post('data_id');
		$num = 0;
		foreach ($data_sort as $data) {
			$update_sort = $this->M_IGD->update_sort($data, $num+1);
			$num++;
		}
		$query = $this->db->order_by('sort', 'ASC');
		$query = $this->db->get('t_gallery')->result();
    	// var_dump($query);
    	$datas['datas'] = $this->M_IGD->show_gallery('igd');
		$this->load->view('admin/module/service/igd/table', $datas);
	}

	public function delete_gallery()
	{
		$id = $this->input->post('id');
		$result = $this->M_IGD->get_detail_gallery($id);
		if ($result) {
			$path = FCPATH.'/assets/uploads/'.$result[0]->img;
			$action_delete = unlink($path);
			$action = $this->M_IGD->delete($id);
		}else{
			$action = false;
		}
		echo $action;
	}

	public function delete_sub_menu()
	{
		$id = $this->input->post('id');
		$result = $this->M_IGD->detail_sub_menu($id);
		if ($result) {
			$action = $this->M_IGD->delete_sub_menu($id);
		}else{
			$action = false;
		}
		echo $action;
	}

	// End gallery section
}

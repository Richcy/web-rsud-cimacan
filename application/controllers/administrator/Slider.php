<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('T_Slider');
        $this->load->library('session');
	}

	public function index()
	{
		$datas = $this->T_Slider->show_all();
		$totalData = count($datas);
		$data['cur_page'] = 'slider';
		$data['cur_parent_page'] = '';
		$data['datas'] = $datas;
		$data['totalData'] = $totalData;
		$this->load->view('admin/module/slider/index', $data);
	}

	public function detail($id)
	{
		$data['cur_page'] = 'slider';
		$data['cur_parent_page'] = '';
		$this->load->view('admin/module/slider/index', $data);
	}

	public function Add()
	{
		$data['cur_page'] = 'slider';
		$data['cur_parent_page'] = '';
		$this->load->view('admin/module/slider/add', $data);
	}

	public function create()
	{
		$id = random_string('alnum',24);
		$slider_img = $this->input->post('slider_img');
		$title = $this->input->post('title') ? $this->input->post('title') : '' ;
		$desc = $this->input->post('desc') ? str_replace("'", "’", $this->input->post('desc')) : '';

		$now = date('YmdHis');
		$edit_name = str_replace(' ', '-', $_FILES["slider_img"]['name']);
		$file_name = $now.'_'.$edit_name;
		
		$config['upload_path']          = FCPATH.'assets/uploads/slider';
        // $config['allowed_types']        = 'gif|jpg|png';
        $config['allowed_types']        = '*';
        $config['max_size']             = 10000;
        $config['file_name']            = $file_name;
		$config['overwrite']            = true;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('slider_img'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('title','Failed');
        	$this->session->set_flashdata('message','File type not support. Please Try again!');
        	$this->session->set_flashdata('status','error');
        	redirect('/administrator/slider/add');
        }
        else
        {
	        $data = array('upload_data' => $this->upload->data());
	        $add_last_number = $this->T_Slider->last_number();
	        $sort = $add_last_number->sort ? $add_last_number->sort : 0 ; 
	        $fix_sort = $sort + 1;
	        $slider = array(
	        	'id' => $id,
	        	'img' => 'slider/'.$file_name,
	        	'sort' => $fix_sort,
	        	'title' => $title,
	        	'description' => $desc
	        );
	        $insert = $this->T_Slider->insert($slider,'t_slider');
	        if ($insert) {
	        	$this->session->set_flashdata('title','Success');
	        	$this->session->set_flashdata('message','Add data slider');
	        	$this->session->set_flashdata('status','success');
	        	redirect('/administrator/slider');
	        }else{
	        	$this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','Add data slider');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/slider');
	        }
        }
	}

	public function edit($id)
	{
		$data['cur_page'] = 'slider';
		$data['cur_parent_page'] = '';
		$data['detail'] = $this->T_Slider->get_detail($id);
		$this->load->view('admin/module/slider/edit', $data);
	}

	public function update()
	{
		$id = $this->input->post('id');
		$title = $this->input->post('title') ? $this->input->post('title') : '' ;
		$desc = $this->input->post('desc') ? str_replace("'", "’", $this->input->post('desc')) : '';

		$now = date('YmdHis');
		$edit_name = str_replace(' ', '-', $_FILES["slider_img"]['name']);
		$file_name = $now.'_'.$edit_name;
		
		$config['upload_path']          = FCPATH.'assets/uploads/slider';
        $config['allowed_types'] 		= '*';
        $config['max_size']             = 100000;
        $config['file_name']            = $file_name;
		$config['overwrite']            = true;

        if ($_FILES["slider_img"]['name'] == '') {
        	$slider = array(
	        	'title' => $title,
	        	'description' => $desc
	        );
	        $update = $this->T_Slider->update($slider, $id);
	        if ($update) {
	        	$this->session->set_flashdata('title','Success');
	        	$this->session->set_flashdata('message','Edit data slider');
	        	$this->session->set_flashdata('status','success');
	        	redirect('/administrator/slider');
	        }else{
	        	$this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','Edit data slider');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/slider');
	        }
        }else{
        	$this->load->library('upload', $config);
        	if ( ! $this->upload->do_upload('slider_img'))
	        {
	            $error = array('error' => $this->upload->display_errors());
	            $this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','File type not support. Please Try again!');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/slider/edit/'.$id);
	        }
	        else
	        {
	        	$result = $this->T_Slider->get_detail($id);
				if ($result) {
					$path = FCPATH.'/assets/uploads/'.$result[0]->img;
					$action_delete = unlink($path);
				}
		        $data = array('upload_data' => $this->upload->data());
		        $slider = array(
		        	'img' => 'slider/'.$file_name,
		        	'title' => $title,
		        	'description' => $desc
		        );
		        $update = $this->T_Slider->update($slider, $id);
		        if ($update) {
		        	$this->session->set_flashdata('title','Success');
		        	$this->session->set_flashdata('message','Edit data slider');
		        	$this->session->set_flashdata('status','success');
		        	redirect('/administrator/slider');
		        }else{
		        	$this->session->set_flashdata('title','Failed');
		        	$this->session->set_flashdata('message','Edit data slider');
		        	$this->session->set_flashdata('status','error');
		        	redirect('/administrator/slider');
		        }
	        }
        }
	}

	public function save_sort()
	{
		$data_slider = $this->input->post('data_id');
		$num = 0;
		foreach ($data_slider as $data) {
			$update_sort = $this->T_Slider->update_sort($data, $num+1);
			$num++;
		}
		$query = $this->db->order_by('sort', 'ASC');
		$query = $this->db->get('t_slider')->result();
    	// var_dump($query);
    	$datas['datas'] = $this->T_Slider->show_all();
		$this->load->view('admin/module/slider/table', $datas);
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$result = $this->T_Slider->get_detail($id);
		if ($result) {
			$path = FCPATH.'/assets/uploads/'.$result[0]->img;
			$action_delete = unlink($path);
			$action = $this->T_Slider->delete($id);
		}else{
			$action = false;
		}
		echo $action;
	}


}

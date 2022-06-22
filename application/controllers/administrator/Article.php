<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('T_Article');
    	$this->load->model('T_Article_Category');
        $this->load->library('session');
	}

	public function index()
	{
		
		
		$data['cur_page'] = 'article';
		$data['cur_parent_page'] = 'article';
		$data['datas'] = $this->T_Article->show_all();
		$this->load->view('admin/module/article/index', $data);
	}

	public function Add()
	{
		
		
		$data['cur_page'] = 'article';
		$data['cur_parent_page'] = 'article';
		$data['fields'] = $this->T_Article_Category->show_all();
		$this->load->view('admin/module/article/add', $data);
	}

	public function edit($id)
	{
		
		
		$data['cur_page'] = 'article';
		$data['cur_parent_page'] = 'article';
		$data['fields'] = $this->T_Article_Category->show_all();
		$data['datas'] = $this->T_Article->get_detail($id);
		$this->load->view('admin/module/article/edit', $data);
	}

	public function create()
	{
		// $id = random_string('alnum',24);
		$author = $this->input->post('author') ? $this->input->post('author') : '';
		$title = $this->input->post('title') ? $this->input->post('title') : '';
		$category = $this->input->post('category') ? $this->input->post('category') : '';
		$description = $this->input->post('desc') ? str_replace("'", "’", $this->input->post('desc')) : '';
		
		$now = date('YmdHis');
		$edit_name = str_replace(' ', '-', $_FILES["article_img"]['name']);
		$file_name = $now.'_'.$edit_name;
		
		$config['upload_path']          = FCPATH.'assets/uploads/article';
        // $config['allowed_types']        = 'gif|jpg|png';
        $config['allowed_types']        = '*';
        $config['max_size']             = 10000;
        $config['file_name']            = $file_name;
		$config['overwrite']            = true;
		$this->load->library('upload', $config);

		// var_dump($start_date);
		// die();
		
		if ($_FILES["article_img"]['name'] == '' || $_FILES["article_img"]['name'] == NULL ) {
			$datas = array(
	        	'author' => $author,
	        	'title' => $title,
	        	'category' => $category,
	        	'description' => $description,
	        	'create_date' => date('Y-m-d H:i:s')
	        );
	        $insert = $this->T_Article->insert($datas,'t_article');
	        if ($insert) {
	        	$this->session->set_flashdata('title','Success');
	        	$this->session->set_flashdata('message','Insert data article');
	        	$this->session->set_flashdata('status','success');
	        	redirect('/administrator/article');
	        }else{
	        	$this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','Insert data article');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/article');
	        }
		}else{
			if ( ! $this->upload->do_upload('article_img'))
	        {
	            $error = array('error' => $this->upload->display_errors());
	            $this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','File type not support. Please Try again!');
	        	$this->session->set_flashdata('status','error');
	        	// redirect('/administrator/article/add');
	        	redirect($_SERVER['HTTP_REFERER']);
	        }

	        else
	        {
		        $data = array('upload_data' => $this->upload->data());
				$datas = array(
		        	// 'id' => $id,
		        	'img' => 'article/'.$file_name,
		        	'author' => $author,
		        	'title' => $title,
		        	'category' => $category,
		        	'description' => $description,
		        	'create_date' => date('Y-m-d H:i:s')
		        );
		        $insert = $this->T_Article->insert($datas,'t_article');
		        if ($insert) {
		        	$this->session->set_flashdata('title','Success');
		        	$this->session->set_flashdata('message','Insert data article');
		        	$this->session->set_flashdata('status','success');
		        	redirect('/administrator/article');
		        }else{
		        	$this->session->set_flashdata('title','Failed');
		        	$this->session->set_flashdata('message','Insert data article');
		        	$this->session->set_flashdata('status','error');
		        	redirect('/administrator/article');
		        }
	        }
    	}
	}

	public function update()
	{
		$id = $this->input->post('id') ? $this->input->post('id'): '';
		$author = $this->input->post('author') ? $this->input->post('author') : '';
		$title = $this->input->post('title') ? $this->input->post('title') : '';
		$category = $this->input->post('category') ? $this->input->post('category') : '';
		$description = $this->input->post('desc') ? str_replace("'", "’", $this->input->post('desc')) : '';
		
		$now = date('YmdHis');
		$edit_name = str_replace(' ', '-', $_FILES["article_img"]['name']);
		$file_name = $now.'_'.$edit_name;
		
		$config['upload_path']          = FCPATH.'assets/uploads/article';
        // $config['allowed_types']        = 'gif|jpg|png';
        $config['allowed_types']        = '*';
        $config['max_size']             = 10000;
        $config['file_name']            = $file_name;
		$config['overwrite']            = true;
		$this->load->library('upload', $config);

    	 if ($_FILES["article_img"]['name'] == '') {
        	$datas = array(
	        	'author' => $author,
	        	'title' => $title,
	        	'category' => $category,
	        	'description' => $description
	        );
	        $update = $this->T_Article->update($datas, $id);
	        if ($update) {
	        	$this->session->set_flashdata('title','Success');
	        	$this->session->set_flashdata('message','Edit data article');
	        	$this->session->set_flashdata('status','success');
	        	redirect('/administrator/article');
	        }else{
	        	$this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','Edit data article');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/article');
	        }
        }else{
        	$this->load->library('upload', $config);
        	if ( ! $this->upload->do_upload('article_img'))
	        {
	            $error = array('error' => $this->upload->display_errors());
	            $this->session->set_flashdata('title','Failed');
	        	$this->session->set_flashdata('message','File type not support. Please Try again!');
	        	$this->session->set_flashdata('status','error');
	        	redirect('/administrator/article/edit/'.$id);
	        }
	        else
	        {
	        	$result = $this->T_Article->get_detail($id);
				if ($result) {
					$path = FCPATH.'/assets/uploads/'.$result[0]->img;
					$action_delete = unlink($path);
				}
		        $data = array('upload_data' => $this->upload->data());
		        $datas = array(
		        	'img' => 'article/'.$file_name,
		        	'author' => $author,
		        	'title' => $title,
		        	'category' => $category,
		        	'description' => $description
		        );
		        $update = $this->T_Article->update($datas, $id);
		        if ($update) {
		        	$this->session->set_flashdata('title','Success');
		        	$this->session->set_flashdata('message','Edit data article');
		        	$this->session->set_flashdata('status','success');
		        	redirect('/administrator/article');
		        }else{
		        	$this->session->set_flashdata('title','Failed');
		        	$this->session->set_flashdata('message','Edit data article');
		        	$this->session->set_flashdata('status','error');
		        	redirect('/administrator/article');
		        }
	        }
        }
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$result = $this->T_Article->get_detail($id);
		if ($result) {
			if ($result[0]->img != '' || $result[0]->img != NULL) {
				$path = FCPATH.'/assets/uploads/'.$result[0]->img;
				$action_delete = unlink($path);
			}
			$action = $this->T_Article->delete($id);
		}else{
			$action = false;
		}
		echo $action;
	}
	// End gallery section
}

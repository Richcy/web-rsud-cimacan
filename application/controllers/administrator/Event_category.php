<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_category extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('T_Event_Category');
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'event_category';
		$data['cur_parent_page'] = 'event';
		$data['datas'] = $this->T_Event_Category->show_all();
		$this->load->view('admin/module/event_category/index', $data);
	}

	public function create()
	{
		$id = random_string('alnum',24);
		$name = $this->input->post('name') ? $this->input->post('name') : '';

		$datas = array(
        	'id' => $id,
        	'name' => $name,
        	'create_date' => date('Y-m-d H:i:s')
        );

        $insert = $this->T_Event_Category->insert($datas,'T_Event_Category');
        if ($insert) {
        	$this->session->set_flashdata('title','Success');
        	$this->session->set_flashdata('message','Insert data Event Category');
        	$this->session->set_flashdata('status','success');
        	redirect('/administrator/event_category');
        }else{
        	$this->session->set_flashdata('title','Failed');
        	$this->session->set_flashdata('message','Insert data Event Category');
        	$this->session->set_flashdata('status','error');
        	redirect('/administrator/event_category');
        }
	}

	public function update()
	{
		$id = $this->input->post('id') ? $this->input->post('id') : '';
		$name = $this->input->post('name') ? $this->input->post('name') : '';

		$datas = array(
        	'id' => $id,
        	'name' => $name,
        	'create_date' => date('Y-m-d H:i:s')
        );

        $update = $this->T_Event_Category->update($datas, $id);
        if ($update) {
        	$this->session->set_flashdata('title','Success');
        	$this->session->set_flashdata('message','Update data Event Category');
        	$this->session->set_flashdata('status','success');
        	redirect('/administrator/event_category');
        }else{
        	$this->session->set_flashdata('title','Failed');
        	$this->session->set_flashdata('message','Update data Event Category');
        	$this->session->set_flashdata('status','error');
        	redirect('/administrator/event_category');
        }
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$checkUsed = $this->T_Event_Category->get_used($id);
		if (!empty($checkUsed)) {
			$action = 2;
		}
		else
		{
			$result = $this->T_Event_Category->get_detail($id);
			if ($result) {
				$action = $this->T_Event_Category->delete($id);
			}else{
				$action = false;
			}
		}
		echo $action;
	}
	// End gallery section
}

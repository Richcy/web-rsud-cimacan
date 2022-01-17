<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Field_doctor extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('T_Field_Doctor');
        $this->load->library('session');
	}

	public function index()
	{
		$role_admin = $this->session->userdata('role_id') ? $this->session->userdata('role_id') : '';
		if ($role_admin != 1) {
			$this->session->sess_destroy();
			redirect('/administrator/');
		}
		
		$data['cur_page'] = 'field_doctor';
		$data['cur_parent_page'] = 'doctor';
		$data['datas'] = $this->T_Field_Doctor->show_all();
		$this->load->view('admin/module/field_doctor/index', $data);
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

        $insert = $this->T_Field_Doctor->insert($datas,'t_field_doctor');
        if ($insert) {
        	$this->session->set_flashdata('title','Success');
        	$this->session->set_flashdata('message','Insert data `Bidang Dokter`');
        	$this->session->set_flashdata('status','success');
        	redirect('/administrator/field_doctor');
        }else{
        	$this->session->set_flashdata('title','Failed');
        	$this->session->set_flashdata('message','Insert data `Bidang Dokter`');
        	$this->session->set_flashdata('status','error');
        	redirect('/administrator/field_doctor');
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

        $update = $this->T_Field_Doctor->update($datas, $id);
        if ($update) {
        	$this->session->set_flashdata('title','Success');
        	$this->session->set_flashdata('message','Update data `Bidang Dokter`');
        	$this->session->set_flashdata('status','success');
        	redirect('/administrator/field_doctor');
        }else{
        	$this->session->set_flashdata('title','Failed');
        	$this->session->set_flashdata('message','Update data `Bidang Dokter`');
        	$this->session->set_flashdata('status','error');
        	redirect('/administrator/field_doctor');
        }
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$checkUsed = $this->T_Field_Doctor->get_used($id);
		if (!empty($checkUsed)) {
			$action = 2;
		}
		else
		{
			$result = $this->T_Field_Doctor->get_detail($id);
			if ($result) {
				$action = $this->T_Field_Doctor->delete($id);
			}else{
				$action = false;
			}
		}
		echo $action;
	}
	// End gallery section
}

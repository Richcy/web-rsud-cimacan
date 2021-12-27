<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Featured_doctor extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('T_Featured_Doctor');
    	$this->load->model('T_Doctor');
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'featured_doctor';
		$data['cur_parent_page'] = 'doctor';
		$featured = $this->T_Featured_Doctor->show_all();
		$totalData = count($featured);
		$array = array();
		foreach ($featured as $data_fea ) {
			$array[] = $data_fea->doctor_featured;
		}
		// var_dump($array);
		// die();
		$data['doctors'] = $this->T_Doctor->show_all_empty_schedule($array);
		$data['totalData'] = $totalData ? $totalData : 0;

		$data['datas'] = $this->T_Featured_Doctor->show_all();
		$this->load->view('admin/module/doctor/featured', $data);
	}

	public function create()
	{
		$id = random_string('alnum',24);
		$doctor = $this->input->post('doctor') ? $this->input->post('doctor') : '';

		$add_last_number = $this->T_Featured_Doctor->last_number();
        $sort = $add_last_number->sort ? $add_last_number->sort : 0 ; 
        $fix_sort = $sort + 1;

		$datas = array(
        	'id' => $id,
        	'doctor' => $doctor,
        	'sort' => $fix_sort,
        	'create_date' => date('Y-m-d H:i:s')
        );

        $insert = $this->T_Featured_Doctor->insert($datas,'t_featured_doctor');
        if ($insert) {
        	$this->session->set_flashdata('title','Success');
        	$this->session->set_flashdata('message','Insert data featured doctor');
        	$this->session->set_flashdata('status','success');
        	redirect('/administrator/featured_doctor');
        }else{
        	$this->session->set_flashdata('title','Failed');
        	$this->session->set_flashdata('message','Insert data featured doctor');
        	$this->session->set_flashdata('status','error');
        	redirect('/administrator/featured_doctor');
        }
	}

	public function update()
	{
		$id = $this->input->post('id') ? $this->input->post('id') : '';
		$doctor = $this->input->post('doctor') ? $this->input->post('doctor') : '';

		$datas = array(
        	'doctor' => $doctor,
        	'create_date' => date('Y-m-d H:i:s')
        );

        $update = $this->T_Featured_Doctor->update($datas, $id);
        if ($update) {
        	$this->session->set_flashdata('title','Success');
        	$this->session->set_flashdata('message','Update data featured doctor');
        	$this->session->set_flashdata('status','success');
        	redirect('/administrator/featured_doctor');
        }else{
        	$this->session->set_flashdata('title','Failed');
        	$this->session->set_flashdata('message','Update data featured doctor');
        	$this->session->set_flashdata('status','error');
        	redirect('/administrator/featured_doctor');
        }
	}

	public function save_sort()
	{
		$data_featured = $this->input->post('data_id');
		$num = 0;
		foreach ($data_featured as $data) {
			$update_sort = $this->T_Featured_Doctor->update_sort($data, $num+1);
			$num++;
		}		
		$query = $this->db->order_by('sort', 'ASC');
		$query = $this->db->get('T_Featured_Doctor')->result();
    	// var_dump($query);
    	$datas['datas'] = $this->T_Featured_Doctor->show_all();
		$this->load->view('admin/module/doctor/table', $datas);
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$result = $this->T_Featured_Doctor->get_detail($id);
		if ($result) {
			$action = $this->T_Featured_Doctor->delete($id);
		}else{
			$action = false;
		}
		echo $action;
	}
	// End gallery section
}

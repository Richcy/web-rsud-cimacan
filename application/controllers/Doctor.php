<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('T_Doctor');
    	$this->load->model('T_Field_Doctor');
    	$this->load->model('T_Schedule_Doctor');
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'doctor';
		$data['cur_parent_page'] = '';

		$field = $this->input->get('field') ? $this->input->get('field') : '';
		$s = $this->input->get('s') ? $this->input->get('s') : '';
		// var_dump($field);
		// die();

		$data['field_selected'] = $field;
		$data['s'] = $s;
		$data['datas'] = $this->T_Doctor->getAll($field, $s);
		$data['fields'] = $this->T_Field_Doctor->show_all();
		$this->load->view('fe/doctor', $data);
	}

	public function detail($id)
	{
		$data['cur_page'] = 'doctor';
		$data['cur_parent_page'] = '';
		$data['datas'] = $this->T_Doctor->getDetail($id);
		$data['schedules'] = $this->T_Schedule_Doctor->getDoctorDetail($id);
		$this->load->view('fe/doctor_detail', $data);
	}


}

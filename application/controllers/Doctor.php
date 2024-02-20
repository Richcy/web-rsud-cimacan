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
		$data['seo_title'] = "RSUD Cimacan | Dokter";
		$data['seo_keyword'] = "Dokter, rumah sakit umum daerah cimacan, rsud cimacan";
		$data['seo_desc'] = 'Daftar dokter spesialis Rumah Sakit Daerah Cimacan';
		$data['seo_url'] = base_url().'doctor/';

		$this->_loadDoctorList($data);
	}

	public function page($page)
	{
		$data['cur_page'] = 'doctor';
		$data['cur_parent_page'] = '';
		$data['seo_title'] = "RSUD Cimacan | Dokter";
		$data['seo_keyword'] = "Dokter, rumah sakit umum daerah cimacan, rsud cimacan";
		$data['seo_desc'] = 'Daftar dokter spesialis Rumah Sakit Daerah Cimacan pada halaman ke-'.$page;
		$data['seo_url'] = base_url().'doctor/'.$page.'/';

		$this->_loadDoctorList($data, $page);
	}

	public function detail($id, $name)
	{
		// Validate input parameters
		if (!is_numeric($id) || $id <= 0 || !is_string($name) || empty($name)) {
			// Handle invalid input
			show_error('Invalid input parameters');
			return;
		}

		// Retrieve doctor details
		$doctor_details = $this->T_Doctor->getDetail($id);

		// Check if doctor exists
		if (!$doctor_details) {
			// Handle non-existent doctor
			show_error('Doctor not found');
			return;
		}

		$data['cur_page'] = 'doctor';
		$data['cur_parent_page'] = '';
		$data['lang'] = 'id';
		$data['seo_title'] = strtoupper($doctor_details[0]->name).' | RSUD Cimacan';
		$data['seo_keyword'] = $doctor_details[0]->name.", rumah sakit umum daerah cimacan, rsud cimacan";
		$data['seo_desc'] = $doctor_details[0]->name.' dengan spesialisasi '.$doctor_details[0]->field.' yang memiliki tanggung jawab di '.$doctor_details[0]->office.' Rumah Sakit Daerah Cimacan';
		$lower_name = strtolower($doctor_details[0]->name);
		$delete_dots = str_replace('.', ' ', $lower_name);
		$delete_coma = str_replace(',', ' ', $delete_dots);
		$fix_name = str_replace(' ', '-', $delete_coma);
		$data['seo_url'] = base_url().'doctor-'.$doctor_details[0]->id.'-'.$fix_name.'.html';
		$data['doctor'] = $doctor_details[0];
		$data['related_doctors'] = $this->T_Doctor->getOther($id);
		$data['doctor_schedules'] = $this->T_Schedule_Doctor->getDoctorDetail($id);

		$this->load->view('fe/doctor_detail', $data);
	}

	private function _loadDoctorList(&$data, $page = 1) {
		$field = $this->input->get('field') ? $this->input->get('field') : '';
		$s = $this->input->get('s') ? $this->input->get('s') : '';
		$totalData = $this->T_Doctor->getTotal($field, $s);
		$totalPage = ceil($totalData[0]->totalData/8);

		$data['category_selected'] = null;
		$data['field_selected'] = $field;
		$data['s'] = $s;
		$data['lang'] = 'id';

		$data['page_info']['page'] = $page;
		$data['page_info']['totalData'] = $totalData[0]->totalData;
		$data['page_info']['totalPage'] = $totalPage;
		$data['page_info']['datas'] = $this->T_Doctor->getPage($page, $field, $s);
		$data['page_info']['fields'] = $this->T_Field_Doctor->show_all();
		$data['page_info']['url'] = base_url() . $data['cur_page'];

		$this->load->view('fe/doctor', $data);
	}

}

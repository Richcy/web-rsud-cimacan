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

		$field = $this->input->get('field') ? $this->input->get('field') : '';
		$s = $this->input->get('s') ? $this->input->get('s') : '';
		$page = 1;
		$totalData = $this->T_Doctor->getTotal($field, $s);
		$totalPage = ceil($totalData[0]->totalData/8);

		$data['field_selected'] = $field;
		$data['s'] = $s;
		$data['lang'] = 'id';

		$data['page'] = 1;
		$data['totalData'] = $totalData[0]->totalData;
		$data['totalPage'] = $totalPage;
		$data['datas'] = $this->T_Doctor->getPage($page, $field, $s);
		$data['fields'] = $this->T_Field_Doctor->show_all();
		$this->load->view('fe/doctor', $data);
	}

	public function page($page)
	{
		$data['cur_page'] = 'doctor';
		$data['cur_parent_page'] = '';

		$field = $this->input->get('field') ? $this->input->get('field') : '';
		$s = $this->input->get('s') ? $this->input->get('s') : '';
		$page = $page ? $page : 1;
		$totalData = $this->T_Doctor->getTotal($field, $s);
		$totalPage = ceil($totalData[0]->totalData/8);

		$data['field_selected'] = $field;
		$data['category_selected'] = false;
		$data['s'] = $s;
		$data['lang'] = 'id';

		$data['seo_title'] = "RSUD Cimacan | Dokter";
		$data['seo_keyword'] = "Dokter, rumah sakit umum daerah cimacan, rsud cimacan";
		$data['seo_desc'] = 'Daftar dokter spesialis Rumah Sakit Daerah Cimacan pada halaman ke-'.$page;
		$data['seo_url'] = base_url().'doctor/'.$page.'/';

		$data['page'] = $page ? $page : 1;
		$data['totalData'] = $totalData[0]->totalData;
		$data['totalPage'] = $totalPage;
		$data['datas'] = $this->T_Doctor->getPage($page, $field, $s);
		$data['fields'] = $this->T_Field_Doctor->show_all();
		$this->load->view('fe/doctor', $data);
	}

	public function detail($id, $name)
	{
		$data['cur_page'] = 'doctor';
		$data['cur_parent_page'] = '';
		$data['lang'] = 'id';
		$datas = $this->T_Doctor->getDetail($id);
		$data['seo_title'] = strtoupper($datas[0]->name).' | RSUD Cimacan';
		$data['seo_keyword'] = $datas[0]->name.", rumah sakit umum daerah cimacan, rsud cimacan";
		$data['seo_desc'] = $datas[0]->name.' dengan spesialisasi '.$datas[0]->field.' yang memiliki tanggung jawab di '.$datas[0]->office.' Rumah Sakit Daerah Cimacan';

		 $lower_name = strtolower($datas[0]->name);
	     $delete_dots = str_replace('.', ' ', $lower_name);
	     $delete_coma = str_replace(',', ' ', $delete_dots);
	     $fix_name = str_replace(' ', '-', $delete_coma);
		$data['seo_url'] = base_url().'doctor-'.$datas[0]->id.'-'.$fix_name.'.html';

		$data['datas'] = $datas;
		$data['datas_other'] = $this->T_Doctor->getOther($id);
		$data['schedules'] = $this->T_Schedule_Doctor->getDoctorDetail($id);
		$this->load->view('fe/doctor_detail', $data);
	}


}

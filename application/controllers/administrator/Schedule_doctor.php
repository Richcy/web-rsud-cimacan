<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule_doctor extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('T_Schedule_Doctor');
    	$this->load->model('T_Doctor');
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'schedule_doctor';
		$data['cur_parent_page'] = 'doctor';
		$data['datas'] = $this->T_Schedule_Doctor->show_all();
		$this->load->view('admin/module/schedule_doctor/index', $data);
	}

	public function add()
	{
		$data['cur_page'] = 'schedule_doctor';
		$data['cur_parent_page'] = 'doctor';
		$schedule = $this->T_Schedule_Doctor->show_all();
		$array = array();
		foreach ($schedule as $datas ) {
			$array[] = $datas->doctor_id;
		}
		$data['doctor_datas'] = $this->T_Doctor->show_all_empty_schedule($array);
		$this->load->view('admin/module/schedule_doctor/add', $data);
	}

	public function edit($id)
	{
		$data['cur_page'] = 'schedule_doctor';
		$data['cur_parent_page'] = 'doctor';
		$datas = $schedule = $this->T_Schedule_Doctor->get_detail($id);

		$data['doctor_datas'] = $this->T_Doctor->show_all();
		$data['id'] = $datas[0]->id;
		$data['doctor_selected'] = $datas[0]->doctor;
		$senin = $datas[0]->senin;
		$selasa = $datas[0]->selasa;
		$rabu = $datas[0]->rabu;
		$kamis = $datas[0]->kamis;
		$jumat = $datas[0]->jumat;
		$sabtu = $datas[0]->sabtu;
		$minggu = $datas[0]->minggu;
		if ($senin != '' || $senin != NULL) {
			$pisah_senin = explode("-", $senin);
			$data['senin1'] = $pisah_senin[0];
			$data['senin2'] = $pisah_senin[1];
		}else{
			$data['senin1'] = '';
			$data['senin2'] = '';
		}

		if ($selasa != '' || $selasa != NULL) {
			$pisah_selasa = explode("-", $selasa);
			$data['selasa1'] = $pisah_selasa[0];
			$data['selasa2'] = $pisah_selasa[1];
		}else{
			$data['selasa1'] = '';
			$data['selasa2'] = '';
		}

		if ($rabu != '' || $rabu != NULL) {
			$pisah_rabu = explode("-", $rabu);
			$data['rabu1'] = $pisah_rabu[0];
			$data['rabu2'] = $pisah_rabu[1];
		}else{
			$data['rabu1'] = '';
			$data['rabu2'] = '';
		}

		if ($kamis != '' || $kamis != NULL) {
			$pisah_kamis = explode("-", $kamis);
			$data['kamis1'] = $pisah_kamis[0];
			$data['kamis2'] = $pisah_kamis[1];
		}else{
			$data['kamis1'] = '';
			$data['kamis2'] = '';
		}

		if ($jumat != '' || $jumat != NULL) {
			$pisah_jumat = explode("-", $jumat);
			$data['jumat1'] = $pisah_jumat[0];
			$data['jumat2'] = $pisah_jumat[1];
		}else{
			$data['jumat1'] = '';
			$data['jumat2'] = '';
		}

		if ($sabtu != '' || $sabtu != NULL) {
			$pisah_sabtu = explode("-", $sabtu);
			$data['sabtu1'] = $pisah_sabtu[0];
			$data['sabtu2'] = $pisah_sabtu[1];
		}else{
			$data['sabtu1'] = '';
			$data['sabtu2'] = '';
		}

		if ($minggu != '' || $minggu != NULL) {
			$pisah_minggu = explode("-", $minggu);
			$data['minggu1'] = $pisah_minggu[0];
			$data['minggu2'] = $pisah_minggu[1];
		}else{
			$data['minggu1'] = '';
			$data['minggu2'] = '';
		}

		$this->load->view('admin/module/schedule_doctor/edit', $data);
	}

	public function create()
	{
		$id = random_string('alnum',24);
		$doctor = $this->input->post('doctor') ? $this->input->post('doctor') : '';
		$senin = $this->input->post('senin') ? $this->input->post('senin') : '';
		$selasa = $this->input->post('selasa') ? $this->input->post('selasa') : '';
		$rabu = $this->input->post('rabu') ? $this->input->post('rabu') : '';
		$kamis = $this->input->post('kamis') ? $this->input->post('kamis') : '';
		$jumat = $this->input->post('jumat') ? $this->input->post('jumat') : '';
		$sabtu = $this->input->post('sabtu') ? $this->input->post('sabtu') : '';
		$minggu = $this->input->post('minggu') ? $this->input->post('minggu') : '';
		$datas = array(
        	'id' => $id,
        	'doctor' => $doctor,
        	'senin' => $senin,
        	'selasa' => $selasa,
        	'rabu' => $rabu,
        	'kamis' => $kamis,
        	'jumat' => $jumat,
        	'sabtu' => $sabtu,
        	'minggu' => $minggu,
        	'create_date' => date('Y-m-d H:i:s')
        );

        $insert = $this->T_Schedule_Doctor->insert($datas,'t_schedule_doctor');
        if ($insert) {
        	$this->session->set_flashdata('title','Success');
        	$this->session->set_flashdata('message','Insert data `Jadwal Dokter`');
        	$this->session->set_flashdata('status','success');
        	redirect('/administrator/schedule_doctor');
        }else{
        	$this->session->set_flashdata('title','Failed');
        	$this->session->set_flashdata('message','Insert data `Jadwal Dokter`');
        	$this->session->set_flashdata('status','error');
        	redirect('/administrator/schedule_doctor');
        }
	}

	public function update()
	{
		$id = $this->input->post('id');
		$doctor = $this->input->post('doctor') ? $this->input->post('doctor') : '';
		$senin = $this->input->post('senin') ? $this->input->post('senin') : '';
		$selasa = $this->input->post('selasa') ? $this->input->post('selasa') : '';
		$rabu = $this->input->post('rabu') ? $this->input->post('rabu') : '';
		$kamis = $this->input->post('kamis') ? $this->input->post('kamis') : '';
		$jumat = $this->input->post('jumat') ? $this->input->post('jumat') : '';
		$sabtu = $this->input->post('sabtu') ? $this->input->post('sabtu') : '';
		$minggu = $this->input->post('minggu') ? $this->input->post('minggu') : '';
		$datas = array(
        	'doctor' => $doctor,
        	'senin' => $senin,
        	'selasa' => $selasa,
        	'rabu' => $rabu,
        	'kamis' => $kamis,
        	'jumat' => $jumat,
        	'sabtu' => $sabtu,
        	'minggu' => $minggu
        );

        $update = $this->T_Schedule_Doctor->update($datas, $id);

        if ($update) {
        	$this->session->set_flashdata('title','Success');
        	$this->session->set_flashdata('message','Update data `Jadwal Dokter`');
        	$this->session->set_flashdata('status','success');
        	redirect('/administrator/schedule_doctor');
        }else{
        	$this->session->set_flashdata('title','Failed');
        	$this->session->set_flashdata('message','Update data `Jadwal Dokter`');
        	$this->session->set_flashdata('status','error');
        	redirect('/administrator/schedule_doctor');
        }
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$result = $this->T_Schedule_Doctor->get_detail($id);
		if ($result) {
			$action = $this->T_Schedule_Doctor->delete($id);
		}else{
			$action = false;
		}
		echo $action;
	}
	// End gallery section
}

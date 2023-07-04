<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Running_text extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_Running_text');
        $this->load->library('session');
	}

	public function index()
	{
		$data['cur_page'] = 'running_text';
		$data['cur_parent_page'] = 'about_company';
		$data['datas'] = $this->M_Running_text->show_running_text();
		$this->load->view('admin/module/running_text/index', $data);
	}

	public function create()
	{
        $content = $this->input->post('content');
        if (empty($content)) {
        	$this->session->set_flashdata('title','Failed');
        	$this->session->set_flashdata('message','Isi data');
        	$this->session->set_flashdata('status','error');
        	redirect('/administrator/running_text');
        }
        $datas = array(
            'id' => 1,
            'content' => $content
        );
        $insert = $this->M_Running_text->update($datas, 1);
        if ($insert) {
            $this->session->set_flashdata('title','Success');
            $this->session->set_flashdata('message','Update data running_text');
            $this->session->set_flashdata('status','success');
            redirect('/administrator/running_text');
        }else{
            $this->session->set_flashdata('title','Failed');
            $this->session->set_flashdata('message','Update data running_text');
            $this->session->set_flashdata('status','error');
            redirect('/administrator/running_text');
        }
	}

	// End gallery section
}

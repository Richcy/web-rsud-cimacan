<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Directurs_greeting extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('M_About_Home');
        $this->load->library('session');
	}

	public function index()
	{
		$lang = 'id';
		$data['cur_page'] = 'directurs_greeting';
		$data['cur_parent_page'] = 'tentang';
		$data['lang'] = 'id';
		$datas = $this->M_About_Home->getAll($lang);
		$data['seo_title'] = "RSD Cimacan | Sambutan Direktur";
		$data['seo_keyword'] = "Sambutan Direktur, rumah sakit, rumah sakit umum daerah cimacan, rsud cimacan, rsd cimacan";
		$data['seo_desc'] = "Puji syukur kami panjatkan kepada Allah SWT. atas segala anugerah yang telah diberikan sehingga pelayanan kesehatan kepada masyarakat masih dapat....";
		$data['seo_url'] = base_url().'directurs-greeting.html';
		$data['datas'] = $datas;
		$this->load->view('fe/sambutan_direktur', $data);
	}

	public function detail($id)
	{
		$data['cur_page'] = 'directurs_greeting';
		$data['cur_parent_page'] = 'tentang';
		$data['lang'] = 'id';
		$this->load->view('fe/denah', $data);
	}


}

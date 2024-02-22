<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('T_Event');
        $this->load->model('T_Event_Category');
        $this->load->library('session');
    }

    public function index()
    {
        $this->_loadEventList();
    }

    public function page($page)
    {
        $this->_loadEventList($page);
    }

    public function detail($id)
    {
        // Validate input parameter
        if (!isset($id) || !is_numeric($id) || $id < 1) {
            // Handle missing or invalid ID
            show_error('Invalid or missing ID parameter');
            return;
        }

        $this->_loadEventDetail($id);
    }

    private function _loadEventList($page = 1) {
        $data['cur_page'] = 'event';
        $data['cur_parent_page'] = '';

        $data['seo_title'] = "RSUD Cimacan | Event";
        $data['seo_keyword'] = "event, acara, agenda, rumah sakit umum daerah cimacan, rsud cimacan";
        $data['seo_desc'] = 'Daftar Acara yang diadakan oleh Rumah Sakit Daerah Cimacan';

        // Validate and sanitize input parameters
        $category = $this->input->get('category') ? $this->input->get('category') : '';
        $s = $this->input->get('s') ? $this->input->get('s') : '';
        $page = $page ? $page : 1;

        // Perform input validation
        if (!is_numeric($page) || $page < 1) {
            show_error('Invalid page parameter');
            return;
        }

        // Escape user input for database query
        $category = $this->db->escape_str($category);
        $s = $this->db->escape_str($s);

        $totalData = $this->T_Event->getTotal($category, $s);
        $totalPage = ceil($totalData[0]->totalData/6);

        $data['category_selected'] = $category;
        $data['field_selected'] = null;
        $data['s'] = $s;
        $data['lang'] = 'id';
        $data['page'] = $page;
        $data['totalData'] = $totalData[0]->totalData;
        $data['totalPage'] = $totalPage;
        $data['datas'] = $this->T_Event->getPage($page, $category, $s);
        $data['categories'] = $this->T_Event_Category->show_all();
        $this->load->view('fe/event', $data);
    }

    private function _loadEventDetail($id) {
        $data['cur_page'] = 'event';
        $data['cur_parent_page'] = '';
        $data['lang'] = 'id';
        $datas = $this->T_Event->getDetail($id);

        if (!$datas) {
            // Handle non-existent Event
            show_error('Event not found');
            return;
        }

        $data['seo_title'] = substr(strtoupper($datas[0]->title),0, 30).' | RSUD Cimacan';
        $data['seo_keyword'] = strtolower($datas[0]->title).', rumah sakit umum daerah cimacan, rsud cimacan';
        $data['seo_desc'] = substr($datas[0]->sub_desc ? $datas[0]->sub_desc : $datas[0]->description,0, 120).'...';

        $lowerText = strtolower($datas[0]->title); 
        $change_url = str_replace(' ', '-', $lowerText);
        $data['seo_url'] = base_url().'event-'.$datas[0]->id.'-'.$change_url.'.html';

        $data['datas'] = $datas;
        $data['datas_other'] = $this->T_Event->getOther($id);
        $this->load->view('fe/event_detail', $data);
    }
}

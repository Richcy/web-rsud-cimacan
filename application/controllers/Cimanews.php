<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cimanews extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Cimanews');
        $this->load->library('session');
    }

    public function index()
    {
        $this->_loadCimanewsList();
    }

    public function page($page)
    {
        $this->_loadCimanewsList($page);
    }

    public function detail($id)
    {
        // Validate input parameter
        if (!isset($id) || !is_numeric($id) || $id < 1) {
            // Handle missing or invalid ID
            show_error('Invalid or missing ID parameter');
            return;
        }

        $this->_loadCimanewsDetail($id);
    }

    private function _loadCimanewsList($page = 1) {
        $data['cur_page'] = 'cimanews';
        $data['cur_parent_page'] = 'article';
        $data['lang'] = 'id';

        $data['seo_title'] = "RSUD Cimacan | Cimanews";
        $data['seo_keyword'] = "Cimanews, Berita, Blog, Berita rumah sakit, Berita rumah sakit umum daerah cimacan,Berita rsud cimacan";
        $data['seo_desc'] = 'Daftar Berita terbaru yang diterbitkan oleh Rumah Sakit Daerah Cimacan';
        $data['seo_url'] = base_url().'cimanews/';

        // Validate and sanitize input parameters
        $s = $this->input->get('s') ? $this->input->get('s') : '';
        $page = $page ? $page : 1;

        // Perform input validation
        if (!is_numeric($page) || $page < 1) {
            show_error('Invalid page parameter');
            return;
        }

        // Escape user input for database query
        $s = $this->db->escape_str($s);

        $totalData = $this->M_Cimanews->getTotal($s);
        $totalPage = ceil($totalData[0]->totalData/6);

        $data['category_selected'] = null;
        $data['field_selected'] = null;
        $data['s'] = $s;
        $data['page_info']['page'] = $page;
        $data['page_info']['totalData'] = $totalData[0]->totalData;
        $data['page_info']['totalPage'] = $totalPage;
        $data['page_info']['datas'] = $this->M_Cimanews->getPage($page, $s);
        $data['page_info']['url'] = base_url() . $data['cur_page'];
        $this->load->view('fe/cimanews', $data);
    }

    private function _loadCimanewsDetail($id) {
        $data['cur_page'] = 'cimanews';
        $data['cur_parent_page'] = 'article';
        $data['lang'] = 'id';

        // Retrieve cimanews details
        $cimanews_details = $this->M_Cimanews->getDetail($id);

        if (!$cimanews_details) {
            // Handle non-existent cimanews
            show_error('Cimanews not found');
            return;
        }
        
        $data['seo_title'] = substr($cimanews_details[0]->title,0, 30).' | RSUD Cimacan';
        $data['seo_keyword'] = strtolower($cimanews_details[0]->title).', rumah sakit umum daerah cimacan, rsud cimacan, rsd cimacan';
        $data['seo_desc'] = substr($cimanews_details[0]->sub_desc ? $cimanews_details[0]->sub_desc : $cimanews_details[0]->description,0, 120).'...';
        $lowerText = strtolower($cimanews_details[0]->title);
        $deleteUnique = str_replace('?', '', $lowerText);
        $change_url = str_replace(' ', '-', $deleteUnique);
        $data['seo_url'] = base_url().'cimanews-'.$cimanews_details[0]->id.'-'.$change_url.'.html';
        $data['cimanews'] = $cimanews_details[0];
        
        $this->load->view('fe/cimanews_detail', $data);
    }
}

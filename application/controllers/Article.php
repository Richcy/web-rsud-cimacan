<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('T_Article');
        $this->load->model('T_Article_Category');
        $this->load->library('session');
    }

    public function index()
    {
        $data['cur_page'] = 'article';
        $data['cur_parent_page'] = '';
        $data['seo_title'] = "RSUD Cimacan | Artikel";
        $data['seo_keyword'] = "Artikel, Berita, Blog, rumah sakit, rumah sakit umum daerah cimacan, rsud cimacan, rsd cimacan";
        $data['seo_desc'] = 'Daftar Artikel yang diterbitkan oleh Rumah Sakit Daerah Cimacan';
        $data['seo_url'] = base_url().'article/';

        $this->_loadArticleList($data);
    }

    public function page($page)
    {
        $data['cur_page'] = 'article';
        $data['cur_parent_page'] = '';
        $data['seo_title'] = "RSUD Cimacan | Artikel";
        $data['seo_keyword'] = "Artikel, Berita, Blog, rumah sakit, rumah sakit umum daerah cimacan, rsud cimacan, rsd cimacan";
        $data['seo_desc'] = 'Daftar Artikel yang diterbitkan oleh Rumah Sakit Daerah Cimacan pada halaman ke-'.$page;
        $data['seo_url'] = base_url().'article/'.$page.'/';

        $this->_loadArticleList($data, $page);
    }

    public function detail($id)
    {
        // Validate input parameter
        if (!is_numeric($id) || $id <= 0) {
            // Handle invalid input
            show_error('Invalid input parameter');
            return;
        }

        // Retrieve article details
        $article_details = $this->T_Article->getDetail($id);

        // Check if article exists
        if (!$article_details) {
            // Handle non-existent article
            show_error('Article not found');
            return;
        }

        $data['cur_page'] = 'article';
        $data['cur_parent_page'] = '';
        $data['lang'] = 'id';
        $data['seo_title'] = substr($article_details[0]->title, 0, 30) . ' | RSUD Cimacan';
        $data['seo_keyword'] = strtolower($article_details[0]->title) . ', rumah sakit umum daerah cimacan, rsud cimacan, rsd cimacan';
        $data['seo_desc'] = substr($article_details[0]->sub_desc ? $article_details[0]->sub_desc : $article_details[0]->description, 0, 120) . '...';
        $lowerText = strtolower($article_details[0]->title);
        $deleteUnique = str_replace('?', '', $lowerText);
        $change_url = str_replace(' ', '-', $deleteUnique);
        $data['seo_url'] = base_url() . 'article-' . $article_details[0]->id . '-' . $change_url . '.html';
        $data['article'] = $article_details[0];

        $this->load->view('fe/article_detail', $data);
    }


    private function _loadArticleList(&$data, $page = 1) {
        // Validate and sanitize input parameters
        $category = $this->input->get('category') ? $this->input->get('category') : '';
        $s = $this->input->get('s') ? $this->input->get('s') : '';

        // Escape user input for database query
        $category = $this->db->escape_str($category);
        $s = $this->db->escape_str($s);

        $totalData = $this->T_Article->getTotal($category, $s);
        $totalPage = ceil($totalData[0]->totalData/6);

        $data['category_selected'] = $category;
        $data['field_selected'] = null;
        $data['s'] = $s;
        $data['lang'] = 'id';

        $data['page_info']['page'] = $page;
        $data['page_info']['totalData'] = $totalData[0]->totalData;
        $data['page_info']['totalPage'] = $totalPage;
        $data['page_info']['datas'] = $this->T_Article->getPage($page, $category, $s);
        $data['page_info']['categories'] = $this->T_Article_Category->show_all();
        $data['page_info']['url'] = base_url() . $data['cur_page'];

        $this->load->view('fe/article', $data);
    }

}

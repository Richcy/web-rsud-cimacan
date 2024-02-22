<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('T_Admin');
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['cur_page'] = 'login';
        $data['cur_parent_page'] = '';
        $this->load->view('admin/login', $data);
    }

    public function loginAdmin()
    {
        // Form validation
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->setLoginError('Invalid Username or Password. Please try again!');
            redirect('/administrator/');
        }

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Retrieve admin details
        $admin = $this->T_Admin->get_detail($username);

        // Verify credentials
        if (!$admin || !password_verify($password, $admin->password)) {
            $this->setLoginError('Invalid Username or Password. Please try again!');
            redirect('/administrator/');
        }

        // Set session data upon successful login
        $this->setSessionData($admin);

        // Redirect to the appropriate page
        redirect('/administrator/slider');
    }

    private function setLoginError($message) {
        $this->session->set_flashdata('title', 'Failed');
        $this->session->set_flashdata('message', $message);
        $this->session->set_flashdata('status', 'error');
    }

    private function setSessionData($admin) {
        $userdata = array(
            'id_admin' => $admin->id,
            'username_admin' => $admin->username,
            'name_admin' => $admin->name,
            'role_name' => $admin->role_name,
            'role_id' => $admin->role_id
        );
        $this->session->set_userdata($userdata);
    }

    public function logoutAdmin() {
        $this->session->sess_destroy();
        redirect('/administrator/');
    }
}

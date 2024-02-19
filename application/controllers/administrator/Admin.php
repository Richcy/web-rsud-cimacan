<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('T_Admin');
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['cur_page'] = 'admin';
        $data['cur_parent_page'] = 'admin';
        $data['datas'] = $this->T_Admin->show_all();
        $this->load->view('admin/module/admin/index', $data);
    }

    public function add()
    {
        $data['cur_page'] = 'admin';
        $data['cur_parent_page'] = 'admin';
        $this->load->view('admin/module/admin/add', $data);
    }

    public function edit($id)
    {
        if ($id === null && $id === '') {
            // If $id is null, set an error message and redirect
            $this->session->set_flashdata('title', 'Error');
            $this->session->set_flashdata('message', 'Admin ID is missing.');
            $this->session->set_flashdata('status', 'error');
            redirect('/administrator/admin'); // Redirect to the admin index page or any other appropriate page
        }

        $data['cur_page'] = 'admin';
        $data['cur_parent_page'] = 'admin';
        $data['datas'] = $this->T_Admin->get_detail($id);

        // Check if admin data is retrieved successfully
        if (!$data['datas']) {
            // If admin data is not found, set an error message and redirect
            $this->session->set_flashdata('title', 'Error');
            $this->session->set_flashdata('message', 'Admin not found.');
            $this->session->set_flashdata('status', 'error');
            redirect('/administrator/admin'); // Redirect to the admin index page or any other appropriate page
        }

        // Load the edit view with the admin data
        $this->load->view('admin/module/admin/edit', $data);
    }

	public function checkData()
	{
		$name = $this->input->post('name');

		if ($name == '') {
			echo 'error'; // Return error if name is empty
			return;
		}

		$checkName = $this->T_Admin->checkData($name);

		if (empty($checkName)) {
			echo 'success'; // Return success if name is available
		} else {
			echo 'exists'; // Return exists if name already exists
		}
	}


    public function create()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');

		if ($this->form_validation->run() == FALSE) {
			// If form validation fails, redirect back to the add page with error message
			$this->session->set_flashdata('title', 'Failed');
			$this->session->set_flashdata('message', 'Insert data admin failed. Please fill in all required fields.');
			$this->session->set_flashdata('status', 'error');
			redirect('/administrator/admin/add');
		} else {
			// If form validation passes, proceed to insert data into the database
			$id = $this->generateUniqueId(); // Generating a unique ID
			
			// Hash the password
			$hashedPassword = password_hash($this->input->post('password', true), PASSWORD_DEFAULT);
			
			$data = array(
				'id' => $id,
				'username' => $this->input->post('username', true),
				'password' => $hashedPassword, // Store the hashed password
				'name' => $this->input->post('name', true),
				'email' => $this->input->post('email', true),
				'role' => 1,
				'create_date' => date('Y-m-d H:i:s')
			);
			// Call the insert method of your model to insert data into the database
			$insert = $this->T_Admin->insert($data, 't_admin');

			if ($insert) {
				// If data is successfully inserted, redirect to the admin index page
				$this->session->set_flashdata('title', 'Success');
				$this->session->set_flashdata('message', 'Insert data admin success.');
				$this->session->set_flashdata('status', 'success');
				redirect('/administrator/admin');
			} else {
				// If data insertion fails, redirect back to the add page with error message
				$this->session->set_flashdata('title', 'Failed');
				$this->session->set_flashdata('message', 'Insert data admin failed. Please try again.');
				$this->session->set_flashdata('status', 'error');
				redirect('/administrator/admin/add');
			}
		}
	}


	// Function to generate a unique ID
	private function generateUniqueId()
	{
		// Generate a unique ID using UUID v4
		// UUID (Universally Unique Identifier) is designed to be unique across time and space
		// More info: https://en.wikipedia.org/wiki/Universally_unique_identifier
		// PHP 7 and above
		if (function_exists('uuid_create')) {
			return uuid_create();
		} else {
			// Fallback to uniqid with more entropy
			return uniqid('id_', true);
		}
	}

    public function update()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('title','Failed');
            $this->session->set_flashdata('message','Update data admin failed. Please fill in all required fields.');
            $this->session->set_flashdata('status','error');
            redirect('/administrator/admin/edit/' . $this->input->post('id'));
        } else {
            $id = $this->input->post('id');
			$hashedPassword = password_hash($this->input->post('password', true), PASSWORD_DEFAULT);
            $data = array(
				'id' => $this->input->post('id'),
                'username' => $this->input->post('username', true),
                'password' => $hashedPassword,
                'name' => $this->input->post('name', true),
                'email' => $this->input->post('email', true),
                'update_date' => date('Y-m-d H:i:s')
            );
            $update = $this->T_Admin->update($id, $data);

            if ($update) {
                $this->session->set_flashdata('title','Success');
                $this->session->set_flashdata('message','Update data admin success.');
                $this->session->set_flashdata('status','success');
                redirect('/administrator/admin');
            } else {
                $this->session->set_flashdata('title','Failed');
                $this->session->set_flashdata('message','Update data admin failed. Please try again.');
                $this->session->set_flashdata('status','error');
                redirect('/administrator/admin/edit/' . $id);
            }
        }
    }

    public function delete()
	{
		$name = $this->input->post('name');
		if (!$name) {
			echo 'empty';
			return;
		}

		$result = $this->T_Admin->get_detail($name);
		if (!$result) {
			echo 'null';
			return;
		}

		$action = $this->T_Admin->delete($name);
		echo $action ? '1' : '0';
	}

}

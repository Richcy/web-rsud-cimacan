<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postacceptor extends CI_Controller {

  public function index()
  {
    $config['upload_path'] = FCPATH.'assets/uploads/image';
    $config['allowed_types'] = '*';
    $config['max_size'] = 0;
    $this->load->library('upload', $config);
    if ( ! $this->upload->do_upload('file')) {
      $this->output->set_header('HTTP/1.0 500 Server Error');
      exit;
    } else {
      $file = $this->upload->data();
      $this->output
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode(['location' => base_url().'assets/uploads/image/'.$file['file_name']]))
        ->_display();
      exit;
    }
  }

}

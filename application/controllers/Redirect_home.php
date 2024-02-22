<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Redirect_home extends CI_Controller {

	public function index()
{   
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: " . base_url());
}


}
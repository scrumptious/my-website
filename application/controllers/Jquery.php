<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jquery extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()	{
		$data['title'] = "jQuery in action";
		$this->load->view('templates/mywebsite_header', $data);
		$this->load->view('jquery/index');
		$this->load->view('templates/mywebsite_footer');
	}

}

/* End of file Jquery.php */
/* Location: ./application/controllers/Jquery.php */
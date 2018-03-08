<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sent extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	public function index()	{
		$data['title'] = '';
		$this->load->view('templates/mywebsite_header', $data);
		$this->load->view('contact/sent');
		$this->load->view('templates/mywebsite_footer');
	}

}

/* End of file Sent.php */
/* Location: ./application/controllers/Sent.php */
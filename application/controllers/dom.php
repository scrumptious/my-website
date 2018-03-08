<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dom extends CI_Controller {
	public function index() {
		$data['title'] = "DOM test";
		$this->load->view('templates/mywebsite_header', $data);
		$this->load->view('dom/index');
		$this->load->view('templates/mywebsite_footer');
	}
}
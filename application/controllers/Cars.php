<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cars extends CI_Controller {

	public function index()	{
		$data['title'] = "Cars Sieve - find your perfect car";
		$this->load->view('cars/index', $data);
	}
	public function view($ups = NULL) {
		echo $ups.' ups! Nothing to show yet! This is generic page if you ever get lost';
	}

}

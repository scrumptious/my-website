<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()	{
		$data['title'] = "How to make things work";
		$data['logo_line_1'] = "Ludwik";
		$data['logo_line_2'] = "Jasiurski";
		$data['logo_middle_line'] = "WEB DEVELOPER";
		$this->load->view('templates/mywebsite_header', $data);
		$this->load->view('main/index');
		$this->load->view('templates/mywebsite_footer');
	}
	public function view($ups = NULL) {
		echo $ups.' ups! Nothing to show yet! This is generic page if you ever get lost';
	}

}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */
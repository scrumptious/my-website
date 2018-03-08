<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shapes extends CI_Controller {

	public function index()	{
		$data['title'] = "Shapes Generator";
		$this->load->view('templates/generator_header', $data);
		$this->load->view('shapes/index');
		$this->load->view('templates/mywebsite_footer');
	}

}

/* End of file Generator.php */
/* Location: ./application/controllers/Generator.php */
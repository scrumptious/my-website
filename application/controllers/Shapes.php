<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shapes extends CI_Controller {

	public function index()	{
		$data['title'] = "Shapes Generator";
		$data['logo_line_1'] = "Shapes";
		$data['logo_line_2'] = "Generator";
		$this->load->view('templates/generator_header', $data);
		$this->load->view('shapes/index');
		// $this->load->view('templates/mywebsite_footer');
	}

}

/* End of file Shapes.php */
/* Location: ./application/controllers/Generator.php */
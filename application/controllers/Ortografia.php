<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ortografia extends CI_Controller {

	public function index()	{
		$data['title'] = "Spelling game";
		$data['logo_line_1'] = "Spelling";
		$data['logo_line_2'] = "game";
		$this->load->view('templates/ortografia_header', $data);
		$this->load->view('ortografia/index');
		// $this->load->view('templates/mywebsite_footer');
	}

}

/* End of file Ortografia.php */
/* Location: ./application/controllers/Ortografia.php */
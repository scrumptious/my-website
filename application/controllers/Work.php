<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Work extends CI_Controller {

	public function index()	{
		$data['title'] = "my projects ";
		$data['logo_line_1'] = "My";
		$data['logo_line_2'] = "Work";
		$this->load->view('templates/mywebsite_header', $data);
		$this->load->view('work/index');
		$this->load->view('templates/mywebsite_footer');
	}

}

/* End of file Work.php */
/* Location: ./application/controllers/Work.php */
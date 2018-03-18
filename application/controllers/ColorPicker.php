<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ColorPicker extends CI_Controller {

	public function index()	{
		$data['title'] = "Color picker";
		$data['logo_line_1'] = "Choose a";
		$data['logo_line_2'] = "color";
		// $this->load->view('templates/mywebsite_footer', $data);
		$this->load->view('colorPicker/index', $data);
		// $this->load->view('templates/mywebsite_footer');
	}

}

/* End of file ColorPicker.php */
/* Location: ./application/controllers/ColorPicker.php */
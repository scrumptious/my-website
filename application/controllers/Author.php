<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Author extends CI_Controller {

	public function index()	{
		$data['title'] = "About me";
		$this->load->view('templates/mywebsite_header', $data);
		$this->load->view('author/index.php');
		$this->load->view('templates/mywebsite_footer');
	}

}

/* End of file Author.php */
/* Location: ./application/controllers/Author.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('email');
	}

	public function index()	{
		$data['title'] = "Get in touch";
		$data['logo_line_1'] = "Get in";
		$data['logo_line_2'] = "touch";	

		$this->form_validation->set_rules('name', 'Name', 'required|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('email', 'E-mail', 'required|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('enquiry', 'Text', 'required|min_length[3]|max_length[3000]');
		//prepare an email
		$this->email->from($this->input->post('email'), $this->input->post('name'));
		$this->email->to('ljasiurski@gmail.com');
		$this->email->subject('message_from_jasiurski_cba_pl');
		$this->email->message($this->input->post('enquiry'));

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/mywebsite_header', $data);
			$this->load->view('contact/index');
			$this->load->view('templates/mywebsite_footer');
		} else {
			if($this->email->send()) {
				$this->load->view('templates/mywebsite_header', $data);	
				$this->load->view('contact/sent');
			}
			else {
				$this->load->view('templates/mywebsite_header', $data);	
				$this->load->view('contact/error_sending');
			}
			$this->load->view('templates/mywebsite_footer');
		}


	}

}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */
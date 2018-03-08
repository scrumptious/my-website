<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Heroes extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('heroes_model');
		$this->load->helper('url');
		$this->load->helper('form_helper');
		$this->load->library('form_validation');
		$this->output->enable_profiler(FALSE);
	}
	public function index($name = NULL) {
		$data['title'] = "Heroes Vault";
		if($name === NULL) {
			$data['all_heroes'] = $this->heroes_model->get_heroes();
			if(empty($data['all_heroes'])) {
				$data['title'] = "No heroes to show!";
				$this->load->view('templates/mywebsite_header', $data);
				$this->load->view('heroes/index', $data);
			}
			else {
				$this->load->view('templates/mywebsite_header', $data);
				$this->load->view('heroes/index', $data);
			}
		}
		else {
			$this->load->view('templates/mywebsite_header', $data);
			$data['hero'] = $this->heroes_model->get_heroes($name);
			$this->load->view('heroes/view', $data);
		}
		$this->load->view('templates/mywebsite_footer');
	}
	public function create() {
		$data['title'] = 'Create your own hero';
		$this->load->helper('form_helper');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'required|min_length[3]|max_length[50]|is_unique[heroes.name]', array('is_unique' => 'Hero called "'.$this->input->post('name').'" already exists!'));
		$this->form_validation->set_rules('level', 'Level', 'required');
		$this->form_validation->set_rules('hp', 'Health', 'required');


		if($this->form_validation->run() === FALSE) {
			$this->load->view('templates/mywebsite_header', $data);
			$this->load->view('heroes/create');
		}
		else {
			$this->load->view('templates/mywebsite_header', $data);
			if($this->heroes_model->set_hero()) {
				$this->load->view('heroes/success');	}
			else {
				$this->load->view('heroes/failure_adding');
			}
		}
		$this->load->view('templates/mywebsite_footer');
	}
	public function hero_exists($name) {
		$this->db->where('name', $name);
		return $this->db->count_all_results('heroes');
	}
	public function delete() {	


		$data['title'] = 'Delete existing hero';
		$heroname = $this->input->post('delname');
		$data['hr'] = $heroname;

		$this->form_validation->set_rules('delname', 'Name to delete', 'required|min_length[3]|max_length[24]');

		if ($this->form_validation->run() != FALSE) {
			// $viewToLoad = 'heroes/delete_conf';
			if($this->hero_exists($heroname)) {
				$this->load->view('templates/mywebsite_header', $data);
				$this->load->view('heroes/delete_conf', $data);
			}
			else {
				$this->load->view('templates/mywebsite_header', $data);
				$this->load->view('heroes/failure', $data);
			}
			$this->load->view('templates/mywebsite_footer');
		}
		else {
			$this->load->view('templates/mywebsite_header', $data);
			$this->load->view('heroes/delete', $data);
			$this->load->view('templates/mywebsite_footer');
		}


	}
	public function delete_conf() {
			$delyes = $this->input->post('delyes');
			$delno = $this->input->post('delno');
			if($delyes) {
				$data['title'] = 'deleting hero..';
				$this->load->view('templates/mywebsite_header', $data);
				$this->heroes_model->delete_hero($this->input->post('heroname'));
				$this->load->view('heroes/deleted');
			}
			else if ($delno) {
				$data['title'] = 'deletion cancelled';
				$this->load->view('templates/mywebsite_header', $data);
				$this->load->view('heroes/deletion_cancelled');

			}
			$this->load->view('templates/mywebsite_footer');
	}
}

/* End of file Heroes.php */
/* Location: ./application/controllers/Heroes.php */
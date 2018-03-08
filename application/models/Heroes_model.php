<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Heroes_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('form');
	}
	public function get_heroes($name = NULL) {
		if($name === NULL) {
			$this->db->order_by('level', 'ASC');
			$query = $this->db->get('heroes');
			return $query->result_array();
		}
		else {
			$query = $this->db->get_where('heroes', array('name' => $name));
			return $query->row_array();
		}
	}	
	public function set_hero() {
		if($this->db->count_all_results('heroes')>=20) {
			return FALSE;
		}
		$data = array(
			'name' => $this->input->post('name'),
			'level' => $this->input->post('level'),
			'hp' => $this->input->post('hp'),
			'strength' => $this->input->post('strength'),
			'dexterity' => $this->input->post('dexterity'),
			'wisdom' => $this->input->post('wisdom'),
			'atack' => $this->input->post('atack'),
			'defense' => $this->input->post('defense'),
			'luck' => $this->input->post('luck')
			);
		$this->db->insert('heroes', $data);
		return TRUE;
	}


	public function delete_hero($name) {
		if($name != NULL && $name != 'unknown') {
			$this->db->delete('heroes', array('name' => $name));
		}
		else {
		}
	}


}

/* End of file Heroes_model.php */
/* Location: ./application/models/Heroes_model.php */
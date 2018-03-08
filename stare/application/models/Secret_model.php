<?php

class Secret_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_secret($id = NULL) {
		if(empty($id)) {
			$query = $this->db->get('secrets');
			return $query->result_array();
		}
		$query = $this->db->get_where('secrets', array('id' => $id));
		return $query->row_array();
	}
	public function set_secret() {
		// $this->insert->post('secret_text');
	}

}

/* End of file Secret_model.php */
/* Location: ./application/models/Secret_model.php */
?>
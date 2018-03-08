<?php
class Secret extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Secret_model');
		$this->load->helper('url');

	}
	public function index()
	{
		$data['todo_list'] = array('hovering', 'washing up', 'cleaning bathroom', 'dusting');
		$data['title'] = 'Chamber of the secrets';
		$data['heading'] = 'Welcome to my secret chamber of treasures';
		$this->load->view('secretview', $data);

	}
	public function hope() {
		echo 'we can\'t have any hope anymore!';
	}
	public function relics($buy, $upgrade) {
		echo '<p>buy cost is '.$buy.'</p><br>';
		echo '<p>upgrade cost is though '.$upgrade.'</p>';
	}
	public function renderSecret() {
		$data['title'] = 'huuh';
		$data['heading'] = 'morning nerds';
		$data['todo_list'] = array('lazying around', 'sleeping', 'snoring');
		$data['query'] = $this->Secret_model->get_secret();

		$this->load->view('secretview', $data);
	}
	public function create() {
		$data['title'] = 'Create your secret';
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('secret_text', 'Secret_Text', 'required|min_length[3]|max_length[18]');
		if($this->form_validation->run() === FALSE) {
			$this->load->view('secret/create', $data);
			
		}
		else {
			$this->Secret_model->set_secret();
			$this->load->view('secret/success');
		}
	}




	// public function view($id = NULL) {
	// 	$data['secret_item'] = $this->Secret_model->get_secret($id);
	// 	if(empty($data['secret_item'])) {
	// 		show_404();
	// 	}


	// 	$data['id'] = $data['secret_item']['id'];
	// 	$data['title'] = $data['secret_item']['title'];
	// 	$data['text'] = $data['secret_item']['text'];

	// 	$this->load->view('secret/view', $data);

	// }
		public function view($id = NULL) {
			$data['title'] = 'list of secrets';

			$data['secrets'] = $this->Secret_model->get_secret($id);
			if(empty($data['secrets'])) {
				show_404();
			}
			if($id === NULL) {

				$this->load->view('secret/view', $data);
			}
			else {

				$this->load->view('secret/view_particular', $data);
			}
	}
}

/* End of file Secret.php */
/* Location: ./application/controllers/Secret.php */
?>
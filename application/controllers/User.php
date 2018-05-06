<?php

class User extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->model("m_user");
	}	

	public function add() {
		$this->load->view('form_customer');
	}
	
	public function insert() {
		$data = array(
			"username" => $this->input->post("username"),
			"password" => $this->input->post("password"),
			"fullname" => $this->input->post("fullname"),
			"level" => $this->input->post("level")
		);

		var_dump($data);
		$this->m_user->insert($data);
	}
}

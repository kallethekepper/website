<?php

class Home extends CI_Controller {

	public function index()
  {
			$data = [
				'loggedInUser' => $this->auth->getLoggedInUser()
			];

				$this->load->view('index', $data);


	}




}

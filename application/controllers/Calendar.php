<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Calendar extends CI_Controller {

	public function index()
  {
			$data = [
				'loggedInUser' => $this->auth->getLoggedInUser()
			];

				$this->load->view('calendar', $data);

	}
}

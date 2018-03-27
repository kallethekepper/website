<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recipe extends CI_Controller {

	public function meatballs()
	{
		$data = [
			'loggedInUser' => $this->auth->getLoggedInUser()
		];
		$this->load->view('meatballs', $data);
	}

  public function pancakes()
  {
		$data = [
			'loggedInUser' => $this->auth->getLoggedInUser()
		];
		$this->load->view('pancakes', $data);
  }

	public function comments ($recipeName) {
		$this->load->model('Recipe_model','recipe');
		$data = [
			'loggedInUser' => $this->auth->getLoggedInUser(),
			'comments' => $this->recipe->getComments($recipeName)
		];
		$this->load->view('commentsection', $data);
	}

  public function addComment() {

		$message = $this->input->post('comment');
		$recipe = $this->input->post('recipe');
		$date = date('Y-m-d H:i:s');
		$author = $this->auth->getLoggedInUser();

		$this->load->model('Recipe_model','recipe');
		$this->recipe->addComment($message,$author,$date, $recipe);
		redirect('Recipe/'.$recipe);
  }

  public function deleteComment() {

		$recipe = $this->input->post('whichRecipe');
		$time = $this->input->post('time');
		$message = $this->input->post('text');
		$author = $this->auth->getLoggedInUser();

		$this->load->model('Recipe_model','recipe');
		$this->recipe->delete($message,$author,$time, $recipe);
		redirect('Recipe/'.$recipe);
	}



}

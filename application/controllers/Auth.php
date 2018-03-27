
<?php
class Auth extends CI_Controller{

    public function index(){
      $this->load->view('login');
    }

    public function login() {

      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $this->load->model('Auth_model','auth');
      $this->auth->login($username,$password);
      $this->auth->getLoggedInUser();

      $data = ['loggedInUser' => $this->auth->getLoggedInUser()];

        $this->load->view('index', $data);

    }
    public function logout() {
      $this->load->model('Auth_model','auth');
      $this->auth->logout();
      $this->load->view('index');
    }
}
?>


<?php
class Auth_model extends CI_model {

    function login($username, $password) {
      $accounts = simplexml_load_file(__DIR__."/accounts.xml") or die("Error: Cannot create object");
      foreach ($accounts as $account) {
        if($username == $account->username && password_verify($password, $account->password)) {
          $this->session->username = (string) $account->username;
          return true;
        }
      }
      return false;
    }

    public function getLoggedInUser() {
      if(isset($this->session->username)) {
        return $this->session->username;
      }
      else {
        return null;
      }
    }

    function logout() {
      $this->session->sess_destroy();
    }

}

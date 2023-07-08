<?php 
ini_set('display_errors', 1);
require_once $_SERVER['DOCUMENT_ROOT'] . '/' . 'config.php';
require_once rootpath . 'models/SignUpModel.php';
class SignUpController {
    
    private $email = null;
    private $model = null;

    public function __construct() {
        if($this->model === null) {
            $this->model = new SignUpModel();
        }
    }

    public function signUp($email) {
        $signUpResponse = $this->model->signUp($email);
        return $signUpResponse;
    }
    
    public function login($username, $password) {
        $signUpResponse = $this->model->login($username, $password);
        return $signUpResponse;
    }
    
    public function logout() {
        $signUpResponse = $this->model->logout();
        return $signUpResponse;
    }
    
    public function uploadResume($resume, $email) {
        $signUpResponse = $this->model->uploadResume($resume, $email);
        return $signUpResponse;
    }
    
}
?>
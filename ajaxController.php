<?php 
ini_set('display_errors', 1);
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/' . 'config.php';
require_once rootpath . 'controllers/SignUpController.php';
require_once rootpath . 'controllers/JobsController.php';
$allowedActions = ['signUp', 'login', 'logout', 'uploadResume', 'hotjobs'];
$input = json_decode(file_get_contents('php://input'), true);
if(empty($input)) {
   $input = $_POST; 
}
if(!in_array(strtolower($input['action']), array_map('strtolower', $allowedActions))) {
    echo 'Invalid request!';exit;
}
switch (strtolower($input['action'])) {
    case 'signup':
        $signUpController = new SignUpController();
        $signUpResponse = $signUpController->signUp($input['email']);
        echo json_encode($signUpResponse);exit;
        break;
    case 'login':
        $signUpController = new SignUpController();
        $signUpResponse = $signUpController->login($input['username'], $input['password']);
        var_dump($signUpResponse);exit;
        echo json_encode($signUpResponse);exit;
        break;
    case 'logout':
        $signUpController = new SignUpController();
        $signUpResponse = $signUpController->logout();
        echo json_encode($signUpResponse);exit;
        break;
    case 'uploadresume':
        $signUpController = new SignUpController();
        $resume = $_FILES['resume'];
        $signUpResponse = $signUpController->uploadResume($resume, $input['email']);
        echo json_encode($signUpResponse);exit;
        break;
    case 'hotjobs':
        $jobsController = new JobsController();
        $hotJobsResponse = $jobsController->getHotJobs();
        echo json_encode($hotJobsResponse);exit;
        break;
    default:
        return;
}


?>
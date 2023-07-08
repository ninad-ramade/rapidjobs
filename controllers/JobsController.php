<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/' . 'config.php';
require_once rootpath . 'models/JobsModel.php';
class JobsController {
    
    private $model = null;
    
    public function __construct() {
        if($this->model === null) {
            $this->model = new JobsModel();
        }
    }
    
    public function getHotJobs() {
        $hotJobsResponse = $this->model->getHotJobs();
        return $hotJobsResponse;
    }
    
}
?>
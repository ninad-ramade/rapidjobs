<?php
ini_set('display_errors', 1);
require_once rootpath . 'libraries/Database.php';

class JobsModel extends Database {
    
    private $response = ['status' => 0, 'data' => [], 'message' => ''];
    
    public function getHotJobs() {
        $query = "SELECT vendor_req.*, vendor_clients.clientname FROM vendor_req LEFT JOIN vendor_clients ON vendor_req.CLIENTID = vendor_clients.clientid WHERE vendor_clients.clientname != '' ORDER BY reqdate DESC, BUDGETTO DESC LIMIT 4";
        $jobs = $this->fetchAll($query);
        foreach($jobs as &$eachJob) {
            $workLocation = array_filter(explode(',', $eachJob['worklocation']));
            $skills = array_filter(explode(',', $eachJob['skills']));
            $query = "SELECT location FROM locations WHERE id IN (" . implode(',',$workLocation) . ")";
            $locations = $this->fetchAll($query);
            $query = "SELECT skill FROM skills WHERE id IN (" . implode(',',$skills) . ")";
            $skills = $this->fetchAll($query);
            $eachJob['worklocation'] = implode(', ', array_column($locations, 'location'));
            $eachJob['JobDescription'] = !empty($eachJob['JobDescription']) ? (strlen($eachJob['JobDescription']) > 70 ? substr(strip_tags($eachJob['JobDescription']), 0, 70) . '...' : strip_tags($eachJob['JobDescription'])) : '';
            $eachJob['skills'] = array_column($skills, 'skill');
            $eachJob['reqdate'] = $this->time_elapsed_string($eachJob['reqdate']);
        }
        $this->response['status'] = 1;
        $this->response['data'] = ['jobs' => $jobs];
        return $this->response;
    }
    
    public function time_elapsed_string($datetime, $full = false) {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);
        
        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;
        
        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }
        
        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }
}
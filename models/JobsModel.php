<?php
ini_set('display_errors', 1);
require_once rootpath . 'libraries/Database.php';

class JobsModel extends Database {
    
    private $response = ['status' => 0, 'data' => [], 'message' => ''];
    
    public function getHotJobs() {
        $query = "SELECT vendor_req.*, vendor_clients.clientname FROM vendor_req LEFT JOIN vendor_clients ON vendor_req.CLIENTID = vendor_clients.clientid WHERE vendor_clients.clientname != '' AND vendor_req.Active = 'Y' ORDER BY reqdate DESC, BUDGETTO DESC LIMIT 4";
        $jobs = $this->fetchAll($query);
        $this->formatJobs($jobs);
        $this->response['status'] = 1;
        $this->response['data'] = ['jobs' => $jobs];
        return $this->response;
    }
    
    public function formatJobs(&$jobs, $location = null) {
        foreach($jobs as $key => &$eachJob) {
            $workLocation = array_filter(explode(',', $eachJob['worklocation']));
            $skills = array_filter(explode(',', $eachJob['skills']));
            $query = "SELECT location FROM locations WHERE id IN (" . implode(',',$workLocation) . ")";
            $locations = $this->fetchAll($query);
            if(!empty($location) && !in_array(strtolower($location), array_map('strtolower', array_column($locations, 'location')))) {
                unset($jobs[$key]);
                continue;
            }
            $query = "SELECT skill FROM skills WHERE id IN (" . implode(',',$skills) . ")";
            $skills = $this->fetchAll($query);
            $eachJob['worklocation'] = implode(', ', array_column($locations, 'location'));
            $eachJob['JobDescription'] = !empty($eachJob['JobDescription']) ? (strlen($eachJob['JobDescription']) > 70 ? substr(strip_tags($eachJob['JobDescription']), 0, 70) . '...' : strip_tags($eachJob['JobDescription'])) : '';
            $eachJob['JobDescription'] = trim(html_entity_decode($eachJob['JobDescription']));
            $eachJob['skills'] = array_column($skills, 'skill');
            $eachJob['reqdateago'] = $this->time_elapsed_string($eachJob['reqdate']);
            $date1 = date_create($eachJob['reqdate']);
            $date2 = date_create(date('Y-m-d'));
            $diff=date_diff($date1,$date2);
            $eachJob['badge'] = !empty($eachJob['TYPEOFASSIGNMENT']) ? ucwords(strtolower($eachJob['TYPEOFASSIGNMENT'])) : ($diff->days <= 30 ? 'New' : '');
            if(strtolower($eachJob['badge']) == 'fulltime') {
                $eachJob['badgeClass'] = 'twm-bg-purple';
            } else if(strtolower($eachJob['badge']) == 'contract') {
                $eachJob['badgeClass'] = 'twm-bg-brown';
            } else if(strtolower($eachJob['badge']) == 'dual') {
                $eachJob['badgeClass'] = 'twm-bg-sky';
            } else {
                $eachJob['badgeClass'] = 'twm-bg-green';
            }
        }
        return $jobs;
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
    
    public function getJobs($input) {
        $query = "SELECT vendor_req.*, vendor_clients.clientname FROM vendor_req LEFT JOIN vendor_clients ON vendor_req.CLIENTID = vendor_clients.clientid WHERE Role like '%" . $input['jobTitle'] . "%' AND vendor_req.Active = 'Y' ORDER BY reqdate DESC";
        $jobs = $this->fetchAll($query);
        $this->formatJobs($jobs, $input['jobLocation']);
        $this->response['status'] = 1;
        $this->response['data'] = ['jobs' => $jobs];
        return $this->response;
    }
}
<?php
ini_set('display_errors', 1);
require_once rootpath . 'libraries/Database.php';
require_once rootpath . 'libraries/Email.php';
require_once rootpath . 'constants/EmailConstants.php';
require_once rootpath . 'constants/SignUpConstants.php';

class SignUpModel extends Database {
    
    private $response = ['status' => 0, 'data' => [], 'message' => ''];

    public function signUp($email) {
        $query = "SELECT * FROM candidates WHERE email = '" . $email . "'";
        $candidate = $this->fetchOne($query);
        if(empty($candidate)) {
            $this->response['status'] = 0;
            $this->response['message'] = SignupErrorMessages::_CANDIDATE_NOT_FOUND_;
            return $this->response;
        }
        //$password = $this->generatePassword();
        $password = 'rapid123';
        $query = 'UPDATE candidates set loginPassword = "' . md5($password) . '" WHERE id = ' . $candidate['id'];
        $this->update($query);
        //Send email with credentials.
        $email = new Email();
        $content = 'Hi, ' . $candidate['name'] . ',<br/><br/>Please find below credentials to login to RapidJobs.<br/><br/>Link: <a href="' . baseurl . '" target="blank"> ' . baseurl . '</a><br/><strong>Username:</strong> ' . $candidate['email'] . '<br/><strong>Password:</strong> ' . $password;
        /* $mailResponse = $email->sendEmail($candidate['email'], 'RapidJobs Login Credentials', $content, '', 'kerlaraju@rapidjobs.co.in', fromMail, fromName);
        if(!$mailResponse) {
            $this->response['message'] = EmailErrorMessages::_CREDENTIALS_EMAIL_SENDING_FAILED_;
            return $this->response;
        } */
        $this->response['status'] = 1;
        $this->response['data'] = ['candidate' => $candidate];
        $this->response['message'] = EmailSuccessMessages::_CREDENTIALS_EMAIL_SENT_SUCCESS_;
        return $this->response;
    }
    
    public function generatePassword() {
        return substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 1) . substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10);
    }
    
    public function login($username, $password) {
        $query = "SELECT * FROM candidates WHERE email = '" . $username . "'";
        $candidate = $this->fetchOne($query);
        if(empty($candidate)) {
            $this->response['status'] = 0;
            $this->response['message'] = SignupErrorMessages::_LOGIN_USER_NOT_FOUND_;
            return $this->response;
        }
        if($candidate['loginPassword'] != md5($password)) {
            $this->response['status'] = 0;
            $this->response['message'] = SignupErrorMessages::_INCORRECT_PASSWORD_;
            return $this->response;
        }
        unset($candidate['loginPassword']);
        $_SESSION['user'] = $candidate;
        $this->response['status'] = 1;
        $this->response['data'] = ['candidate' => $candidate];
        $this->response['message'] = SignupSuccessMessages::_LOG_IN_SUCCESS_;
        return $this->response;
    }
    
    public function logout($username, $password) {
        unset($_SESSION['user']);
        session_destroy();
        $this->response['status'] = 1;
        return $this->response;
    }
    
    public function read_docx($filename){
        
        $striped_content = '';
        $content = '';
        
        if(!$filename || !file_exists($filename)) return false;
        
        $zip = zip_open($filename);
        if (!$zip || is_numeric($zip)) return false;
        
        while ($zip_entry = zip_read($zip)) {
            
            if (zip_entry_open($zip, $zip_entry) == FALSE) continue;
            
            if (zip_entry_name($zip_entry) != "word/document.xml") continue;
            
            $content .= zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));
            
            zip_entry_close($zip_entry);
        }
        zip_close($zip);
        $content = str_replace('</w:r></w:p></w:tc><w:tc>', " ", $content);
        $content = str_replace('</w:r></w:p>', "\r\n", $content);
        $striped_content = strip_tags($content);
        
        return $striped_content;
    }
    
    public function getSkills() {
        $query = "SELECT * FROM skills ORDER BY skill ASC";
        $skills = $this->fetchAll($query);
        return $skills;
    }
    public function getLocations() {
        $query = "SELECT * FROM locations ORDER BY location ASC";
        $locations = $this->fetchAll($query);
        return $locations;
    }
    public function getEmailFromContent($content) {
        preg_match_all("/[a-z0-9_\-\+\.]+@[a-z0-9\-]+\.([a-z]{2,4})(?:\.[a-z]{2})?/i", $content, $emails);
        $emails = filter_var_array($emails, FILTER_VALIDATE_EMAIL);
        $emails = array_filter($emails);
        $email = !empty($emails) ? $emails[0][0] : '';
        $emailParts = explode('.', $email);
        if(strlen($emailParts[count($emailParts)-1]) > 3) {
            $email = substr($email, 0, -1);
        }
        return $email;
    }
    public function getSkillFromContent($content) {
        $allSkills = $this->getSkills();
        $skills = [];
        foreach($allSkills as $eachSkill) {
            if(!empty(strstr(strtolower($content), strtolower($eachSkill['skill'])))) {
                $skills['id'][] = $eachSkill['id'];
                $skills['skills'][] = $eachSkill['skill'];
            }
        }
        return $skills;
    }
    public function getExperienceFromContent($content) {
        $yearIndex = strpos(strtolower($content), 'year');
        return $yearIndex ? (int) substr($content, $yearIndex -4, 4) : 0;
    }
    public function getPhoneFromContent($content) {
        preg_match_all("/[+91\s-]+[6-9][0-9]{9}/", $content, $phones);
        $phones = array_filter($phones);
        return !empty($phones) ? trim($phones[0][0]) : '';
    }
    public function getLocationsFromContent($content) {
        $allLocations = $this->getLocations();
        $locations = [];
        foreach($allLocations as $location) {
            if(!empty(strstr(strtolower($content), strtolower($location['location'])))) {
                $locations['id'][] = $location['id'];
                $locations['locations'][] = $location['location'];
            }
        }
        return $locations;
    }
    public function uploadResume($resume, $signUpEmail) {
        $allowedFiles = ['doc', 'docx'];
        $_POST['resume'] = '';
        if(!empty($resume['name'])) {
            $ext = pathinfo($resume['name'], PATHINFO_EXTENSION);
            if(!in_array($ext, $allowedFiles)) {
                $this->response['message'] = 'Invalid file type. Please upload ' . implode(', ', $allowedFiles) . ' only.';
                return $this->response;
            }
            $content = preg_replace("/[^a-zA-Z0-9\s+@.:]+/", "", file_get_contents($resume['tmp_name']));
            if($ext == 'docx') {
                $content = $this->read_docx($resume['tmp_name']);
            }
            $email = $this->getEmailFromContent($content);
            $phone = $this->getPhoneFromContent($content);
            $skills = $this->getSkillFromContent($content);
            $email = !empty($signUpEmail) ? $signUpEmail : $email;
            $name = explode("@", $email)[0];
            if(!empty($skills)) {
                $skillIds = "," . implode(",", $skills['id']) . ",";
                $skillTexts = implode(", ", $skills['skills']);
            }
            $locations = $this->getLocationsFromContent($content);
            $experience = $this->getExperienceFromContent($content);
            $currentLocation = $preferredLocations = '';
            if(!empty($locations)) {
                $locationIds = $locations['id'];
                $currentLocation = !empty($locationIds) ? $locationIds[0] : '';
                $preferredLocations = !empty($locationIds) ? ',' . implode(",", $locationIds) . ',' : '';
            }
            $target_file = resumeUploadPath . basename($resume["name"]);
            $uploadResponse = move_uploaded_file($resume["tmp_name"], $target_file);
            if(!$uploadResponse) {
                $this->response['message'] = 'Files upload failed. Error #' . $_FILES["resume"]["error"];
                return $this->response;
            }
            $resume = mysqli_real_escape_string($this->connect(), protocol . "://" . profilesPortalUrl . "profiles/processed/". basename($resume["name"]));
            $query = "INSERT INTO candidates (name, mobile, email, skills, subskills, currentLocation, preferredLocation, overallExperience, relevantExperience, resume, status) VALUES ('" . $name . "', '".$phone."', '".$email."', '".$skillIds."', '".$skillIds."', '".$currentLocation."', '".$preferredLocations."', '". $experience ."', '" .$experience. "', '" . $resume . "', 'Created')";
            $this->insert($query);
            $this->response['status'] = 1;
            $this->response['message'] = 'Resume uploaded successfully. Please click Sign Up.';
            return $this->response;
        }
    }
    
}
?>
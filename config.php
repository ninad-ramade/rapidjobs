<?php 
$protocol = isset($_SERVER['HTTPS']) ? 'https' : 'http';
define('servername', 'localhost');
define('protocol', $protocol);
define('username', 'root');
define('password', 'root');
define('dbname', 'jobs');
define('baseurl', $protocol . '://' . $_SERVER['SERVER_NAME'] . '/');
define('rootpath', $_SERVER['DOCUMENT_ROOT'] . '/');
define('fromMail', 'support@rapidjobs.co.in');
define('fromName', 'RapidJobs Support');
define('profilesPortalUrl', 'profiles.rapidjobs.co.in/');
//define('resumeUploadPath', '/home1/rapid6ae/profiles.rapidjobs.co.in/profiles/processed/');
define('resumeUploadPath', 'assets/');
?>
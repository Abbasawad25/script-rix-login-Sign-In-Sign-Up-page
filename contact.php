<?php
session_start();
 
$errors = array();
//error_reporting(0);
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$dbname  = 'rixusers';
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
date_default_timezone_set("Africa/Khartoum");
//   include_once ('UserInformation.php');
   //include_once ('get.php');
   if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
	//echo "تم الأتصال بنجاح";
	}
	include_once ('UserInformation.php');
    include_once ('get.php');
    $ip = UserInfo::get_ip();
    
$os = UserInfo::get_os();
$device = UserInfo::get_device();
$browser = UserInfo::get_browser();
$os = substr($uos,30,13);
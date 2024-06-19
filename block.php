<?php

session_start();

 error_reporting(0);
$row = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users where username='".$_SESSION['username']."';"));
$idp = $row['id'];
$rw = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM infousers where  ip='$ip' AND username='$idp' AND role='1' "));
$rod = $rw['ip'];
$rd = $rw['role'];
$idd = $rw['id'];
$br = $rw['browser'];
if(isset($_SESSION['username']) and $ip == $rod and $rd == 1 and $br == $browser){
    	
	unset($_SESSION['username']);
	$_SESSION=array();
	session_destroy();
	header("Location: ../login.php");
	echo " تم حظرك";
	$q="DELETE FROM infousers where id='$idd' ";
	if(mysqli_query($conn,$q)){
		}
}

else
{
	
}

?>

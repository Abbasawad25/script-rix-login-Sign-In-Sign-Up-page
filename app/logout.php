<?php
session_start();
if(isset($_SESSION['username'])){
    	
	unset($_SESSION['username']);
	$_SESSION=array();
	session_destroy();
	header("Location: ../login.php");
}

else
{
	echo "<script>location.href='../login.php'</script>";
}

?>

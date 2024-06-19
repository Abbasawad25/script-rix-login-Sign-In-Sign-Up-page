<?php include('contact.php'); 

if(isset($_POST['login_user']) and $_SERVER['REQUEST_METHOD'] == "POST") 
{ 
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	
	if (empty($username)) 
	{
		array_push($errors, "Username is required");
	}
	
	if(empty($password)) 
	{
		array_push($errors, "Password is required");
	}
	
	if (count($errors) == 0) 
	{
		$password = md5($password);
	
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	
		$results = mysqli_query($conn, $query);
	
		if (mysqli_num_rows($results) == 1) 
		{
			$_SESSION['username'] = $username;

			/* Create separate session if the user is perticularly admin */
			$role = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users WHERE username='$username' AND password='$password'"))['role'];
			if($role == 1)
				$_SESSION['role'] = "admin";
			if($role == 0)
				$_SESSION['role'] = "user";

			$_SESSION['success'] = "You are now logged in";
			$row = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users where username='".$_SESSION['username']."';")); 
			
			$row = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users where username='".$_SESSION['username']."';")); 
			
			$id = $row['id'];
			$w = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM infousers where ip='$ip' ")); 
			if($w['ip'] !== $ip or $w['browser'] !== $browser){
			
			$in = "INSERT INTO infousers(username,ip,os,device,browser,nameos) VALUES('$id','$ip','$os','$device','$browser','$nameos')";
			mysqli_query($conn, $in);
			}
			else{
				}
			header('location: app/index.php');
		
		
	}
	else{ array_push($errors, "إسم المستخدم أو كلمة السر ليست صحيحة"); }
	}
	
}

if (isset($_POST['reg_user']) and $_SERVER['REQUEST_METHOD'] == "POST") {
 
// receive all input values from the form
 
$username = mysqli_real_escape_string($conn, $_POST['username1']);
 
$email = mysqli_real_escape_string($conn, $_POST['email1']);
 
$password = mysqli_real_escape_string($conn, $_POST['password1']);
if (empty($username)) { array_push($errors, "اسم المستخدم مطلوب"); }
 
if (empty($email)) { array_push($errors, "Email is required"); }
 
if (empty($password)) { array_push($errors, "Password is required"); }
$username = filter_var($username,FILTER_SANITIZE_STRING);
$password = filter_var($password,FILTER_SANITIZE_STRING);
$email = filter_var($email,FILTER_SANITIZE_STRING);
if (filter_var($email,FILTER_VALIDATE_EMAIL) == false) { array_push($errors, " البريد الالكتروني ليس صحيح"); }
 $username = str_replace(" ","",$username);
 $username = strtolower($username);
 if (strlen($username) >= 20) { array_push($errors,  "اسم المستخدم طويل يجب ان يكون اقل من 20"); }
 $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
 
$result = mysqli_query($conn, $user_check_query);
 
$user = mysqli_fetch_assoc($result);
 
if ($user) { // if user exists
 
if ($user['username'] === $username) {
 
array_push($errors, "إسم المستخدم موجد الرجاء كتابة اسم غيره");
 
}
 
if ($user['email'] === $email) {
 
array_push($errors, "هذا البريد موجد بالفعل الرجاء كتابة بريد آخر");
 
}
 
}
 
// Finally, register user if there are no errors in the form

if (count($errors) == 0) {
 
$password = md5($password);//encrypt the password before saving in the database
 

 
$query = "INSERT INTO users(username,email,password)
VALUES('$username','$email', '$password')";

if(mysqli_query($conn, $query)){
	
			
			$rio = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users order by id DESC "));
$rid = $rio['id'];
			$idn = "INSERT INTO infousers(username,ip,os,device,browser,nameos) VALUES('$rid','$ip','$os','$device','$browser','$nameos')";
			mysqli_query($conn, $idn);
			
}
else{
	array_push($errors, "حدث خطأ ما");
}
//end mysqli_query($conn, $in);
 
 
$_SESSION['username'] = $username;
 
$_SESSION['success'] = "You are now logged in";
 
header('location: app/index.php');
 

} //end if else

//end else date
 
}

?>
	
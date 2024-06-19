<?php
 include('../contact.php'); 
 if(!isset($_SESSION['username'])) {
header('Location: ../login.php');
}
else{
    $uname=$_SESSION['username'];
    $desired_dir="files/$uname/";
}
$row = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users where username='".$_SESSION['username']."';")); 
 $roles = $row['role'];
if ($row['role'] == 1) {
$uname=$_SESSION['username'];
    $desired_dir="files/$uname/";

}
else{
    header('Location: ../404.php');
}
$ro = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users where username='".$_SESSION['username']."';"));
include ('../block.php');
$id = $ro['id'];
$info = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM infousers where username='$id' ")); 
$iduser = $id;
	$rol = $_POST['role'];
if(isset($rol)){ 
	$sql = "UPDATE infousers set role='1' where id='$rol' ";
	if(mysqli_query($conn,$sql)){
		?>
			<script>alert("<?php echo $lang['it_was_successfully'] ;?>")</script>
			<?php
		}
		else{
			?>
				<script>alert("<?php echo $lang['This-problem-has-happened-please-retry'] ;?>")</script>
				<?php
			}
}else{
}  

        

          
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rix post - <?php echo $ro['username'] ;?></title>
<meta content="ar" name="language"> 
    <meta name="keywords" content="rix login,script login,script rix ,Sign-In-Sign-Up,php,css,js,html,sql">
    <meta name="description" content="مرحبكم بكم في اسكربت ريكس 249 عبارة عن نظام تسجيل دخول">
    <meta name="author" content="abbasawad25">
    	<meta property="og:url" content="http://rixscript.free.nf/app/index.php"> 
  <meta property="og:type" content="Register-an-Account"> 
  <meta property="og:title" content="rix login 249  - home"> 
  <meta property="og:description" content="مرحبا بكم في اسكربت ريكس 25 عبارة عن اسكربت صفحة تسجيل دخول"> 
  <meta property="og:keywords" content="rix login,script login,script rix ,Sign-In-Sign-Up,php,css,js,html,sql"> 
  <meta property="og:image" content="images/logo.png"> 
    	  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
    	<link rel="icon" type="image/png" sizes="32x32" href="images/logo.png"> 
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
   
<!-- header section starts  -->

<header>

    <div id="menu" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="#">الرئيسية</a>
        <a href="#ab">معلومة عني</a>
        <a href="#in"> إدارة الجلسات</a>
        <a href="index.php">الملف الشخصي</a>
        <a href="logout.php">تسجيل خروج</a>
        <a href="http://moon-library.kesug.com/blog.phpt">contact</a>
    </nav>

    <div id="theme-toggler" class="fas fa-moon"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="images/logo.png" alt="">
    </div>

    <div class="content">
        <span class="hello">hello</span>
        <h3> I'M <span><?php echo $ro['username'] ;?></span> </h3>
        <p> welcome to admin مرحبا أيها المشرف</p>
        <p>اللهمَّ ثَبتني وثَقِل مُوازِيني ، وحقق إِيماني 
وارفع دَرجاتِي ، واغفِر خطِيئَتي ،
وأسألُك الدَرجَات العُلا مِنَّ الجَنَّة وأهلي ومن أُحِب. ❤️🙏🏻</p>
        <a href="#about" class="btn">معلومة عنك</a>
    </div>

</section>

<!-- home section ends -->

<section class="about" id="about">

    <h1 class="heading"> about <span>me</span> </h1>

    <div class="row">

        <div class="box">
            <h3 class="title" id="ab">معلومات عنك</h3>
            <div class="progress">
                <h3> username <span><?php echo $ro['username'] ;?></span> </h3>
                
            </div>
            <div class="progress">
                <h3> email <span><?php echo $ro['email'] ;?></span> </h3>
                
            </div>
            <div class="progress">
                <h3> ip adderss<span> <?php echo $info['ip'] ;?></span> </h3>
                
            </div>
            <div class="progress">
                <h3> type device <span><?php echo $info['device'] ;?></span> </h3>
                
            </div>
            <div class="progress">
                <h3> name device <span><?php echo $info['os'] ;?></span> </h3>
                
            </div>
            <div class="progress">
                <h3> name browser <span><?php echo $info['browser'] ;?></span> </h3>
                
            </div>
            <div class="progress">
                <h3> date <span><?php echo $info['date'] ;?></span> </h3>
                
            </div>                 
        </div>
        
  	<section class="about" id="about">

    <h1 class="heading"> معلومة عن <span>المستخدم</span> </h1>
<?php
        $sql = "SELECT * FROM users ORDER BY id DESC";
$result = $conn->query($sql);
$siteData = mysqli_fetch_assoc($result);
if($result = mysqli_query($conn, $sql)){
            	    if(mysqli_num_rows($result) > 0){
            			$total_msg = mysqli_num_rows($result);
              $num = 0;
              
                  while($row = mysqli_fetch_array($result)){ 
                  	$num++;
/* if ($result->num_rows >= 0) {
 
  while($row = $result->fetch_assoc()) { */
  	?>
    <div class="row">

        <div class="box">
            <h3 class="title" id="ab">معلومات عن المستخدم رقم المعرف  <?php echo $num ;?> </h3>
            <div class="progress">
                <h3> username <span><?php echo $row['username'] ;?></span> </h3>
                
            </div>
            <div class="progress">
                <h3> email <span><?php echo $row['email'] ;?></span> </h3>
                
            </div>
            <div class="progress">
                <h3> role <span><?php  if($row['role'] == 1){echo "admin مشرف ";}else{
echo "users مستخدم";} ?></span> </h3>
                
            </div>
                         
        </div>
          <?php
  }
}
}
 else {
  echo "0 results";
 }              

?>
	<h1 class="heading"> إدارة جلسات <span>المستخدمين</span> </h1>

        <?php
        
       $sql = "SELECT * FROM infousers  ORDER BY id DESC ";
$result = $conn->query($sql);
$siteData = mysqli_fetch_assoc($result);
if($result = mysqli_query($conn, $sql)){
            	    if(mysqli_num_rows($result) > 0){
            			$total_msg = mysqli_num_rows($result);
              $num = 1;
                  while($row = mysqli_fetch_array($result)){ 
/* if ($result->num_rows >= 0) {
 
  while($row = $result->fetch_assoc()) { */
  	?>
  	<div class="box" id="in">
            <h3 class="title">username : <?php $ro = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users where id='".$row['username']."';")); 
echo $ro['username'] ;?></h3>
            
            <div class="progress">
                <h3> ip adderss<span> <?php echo $row['ip'] ;?></span> </h3>
                
            </div>
            <div class="progress">
                <h3> type device <span><?php echo $row['device'] ;?></span> </h3>
                
            </div>
            <div class="progress">
                <h3> name device <span><?php echo $row['os'] ;?></span> </h3>
                
            </div>
            <div class="progress">
                <h3> name browser <span><?php echo $row['browser'] ;?></span> </h3>
                
            </div>
            <div class="progress">
                <h3> date <span><?php echo $row['date'] ;?></span> </h3>
                <form action="" method="POST">
                     <button type="submit" name="role" value="<?php echo $row['id'] ;?>" class="btn btn-sm btn-success"><i class="fa  fa-hand-o-down"></i>تسجيل خروج</button>
                     </form>
            </div>                 
        </div>
          <?php
  }
}
}
 else {
  echo "0 results";
 }              

?>
        

    </div>

    

</section>








<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> contact <span>me</span> </h1>

    <div class="box-container">
        
        <div class="box">
            <i class="fas fa-phone"></i>
            <h3>my number</h3>
            <p>+249124302466</p>
        </div>

        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>my email</h3>
            <p><?php echo $ro['email'] ;?></p>
        </div>

        <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>my address</h3>
            <p>Elobied - sudan</p>
        </div>

    </div>

    <div class="row">

        <form action="">
            <div class="inputBox">
                <input type="text" placeholder="name">
                <input type="email" placeholder="email">
            </div>
            <input type="text" placeholder="subject">
            <textarea name="" id="" cols="30" rows="10" placeholder="message"></textarea>
            <button class="btn"> send message </button>
        </form>

        <iframe class="map" src="https://www.google.com/maps/" allowfullscreen="" loading="lazy"></iframe>

    </div>

</section>

<!-- contact section ends -->

<!-- footer section  -->

    <div class="footer">created by<a href="http://rixscript.free.nf"> <span>abbasawad25 </span></a> | all rights reserved!</div>

<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>
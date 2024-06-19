<?php include('request.php'); ?>
	
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>إنشاء حساب أو تسجيل دخول</title>
    <meta content="ar" name="language"> 
    <meta name="keywords" content="rix login,script login,script rix ,Sign-In-Sign-Up,php,css,js,html,sql">
    <meta name="description" content="مرحبكم بكم في اسكربت ريكس 249 عبارة عن نظام تسجيل دخول">
    <meta name="author" content="abbasawad25">
    	<meta property="og:url" content="http://rixscript.free.nf/login.php"> 
  <meta property="og:type" content="Register-an-Account"> 
  <meta property="og:title" content="rix login 249  - home"> 
  <meta property="og:description" content="مرحبا بكم في اسكربت ريكس 25 عبارة عن اسكربت صفحة تسجيل دخول"> 
  <meta property="og:keywords" content="rix login,script login,script rix ,Sign-In-Sign-Up,php,css,js,html,sql"> 
  <meta property="og:image" content="app/images/logo.png"> 
    	  <link rel="shortcut icon" href="app/images/logo.png" type="image/x-icon" />
    	<link rel="icon" type="image/png" sizes="32x32" href="app/images/logo.png"> 
  </head>
  <body>
    <div class="container">
    	
      <div class="forms-container">
        <div class="signin-signup">
        	
          <form action="" method="POST" class="sign-in-form">
          	
            <h2 class="title">تسجيل دخول</h2>
            <?php include('errors.php'); ?>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username"/>
              
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password"/>
            </div>
            
              <button type="submit" class="btn btn-warning btn-block" name="login_user">تسجيل دخول</button>
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="" method="POST" class="sign-up-form">
            <h2 class="title">إنشاء حساب</h2>
            <?php include('errors.php'); ?>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username1"/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email1" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password1"/>
            </div>
              <button type="submit" class="btn btn-warning btn-block" name="reg_user">إنشاء حساب</button>
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>مستخدم جديد</h3>
            <p>
              إنضم إلينا وتمتع بمميزات الموقع
            </p>
            <button class="btn transparent" id="sign-up-btn">
              إنشاء حساب
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>كيفية الإستخدام</h3>
            <p>
              قم بكتابة بياناتك مثل اسم المستخدم وكلمة السر و البريد الإلكتروني
            </p>
            <button class="btn transparent" id="sign-in-btn">
              تسجيل دخول
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>

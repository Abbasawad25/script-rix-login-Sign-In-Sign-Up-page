<?php
/*
 ------ & --------
 بسم الله الرحمن الرحيم
 اللهم صلي على نبيا محمد 
 اللهم أغفر لي ولجميع المسلمين
 اللهم أحفظ السودان و فلسطين 
 اللهم أنصرنا وأنصر جميع المسلمين
 ------- hello  ////////
//// my name is abbas awad
welcome to script rix login and regester page
I have written this program or text form
It is a reason for the registration and control system
It contains an logon page and create an account and log off and the user's profile page and the administrator page
I have used php & sql & html & css & js
----- ////// -----
How to use
Create a database
Then they raise the database you will find on the main folder
Then open a file contact.php
By typing contact details by database
view admin ceplan
username admin 
password admin
after login open file users.php
كيفية  يعمل الاسكربت 
قم بإنشاء قاعدة بيانات 
وبعد ذلك قم برفع قاعدة البيانات سوف تجده مع الملفات
وبعد ذلك افتح ملف contact.php
وقم بكتابة تفاصيل الاتصال باقاعدة البيانات
مثل اسم المستخدم و كلمة السر و الهوست و اسم قاعدة البيانات
معلومة عن الاسكربت 
عبارة عن اسكربت صفحة تسجيل دخول وأنشاء حساب 
الاسكربت مربوط باقاعدة بيانات حيث يتم الاحتفاظ ببيانات تسجيل الدخول
وايضا جمع معلومات عن المستخدم مثل عنوان ip and واسم الجهاز والمتصفح
وايضا صفحة تسجيل خروج
القد أستخدمت لغة 

html and css and js and php and sql
لفتح صفحة الادارة 
هذا هو حساب المسؤول 
username admin
password admin
توجة للصفحة التالية بعد التسجيل 
لعرض بيانات المستخدمين
app/users.php
يمكنك تحميل المشاريع من موقعنا
http://moon-library.kesug.com/blog.php
*******  ********
///////////
//// **** about me معلومة عني
my phone +249124302466
my email is rixabbasawad25@gmail.com
follow me تابعني على المنصات  
githup
 https://github.com/Abbasawad25
 faecbook 
https://www.facebook.com/abbasawad26
https://www.facebook.com/abbasawad24
youtube
https://youtube.com/@abbasawad?si=dyfkjbAiUOqsvJMn

Twitter
https://twitter.com/abbasawad26
https://twitter.com/abbasawad25
your web site
https://abbasawad25.epizy.com/abbasawad26
and
http://moon-library.kesug.com/blog.php
join from group on faecbook
رابط مجموعة مليون مبرمج سوداني https://facebook.com/groups/milliosudaneseprogrammer/

اللهم صلي على محمد
*/
include('contact.php'); 
 if(!isset($_SESSION['username'])) {
header('Location: login.php');
}
else{
    $uname=$_SESSION['username'];
    $desired_dir="files/$uname/";
    header('Location: app/index.php');
}
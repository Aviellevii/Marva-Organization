<?php
session_start();
$con=mysqli_connect("localhost","root","root");
$con->set_charset("utf8");
//connecting to db
mysqli_select_db($con,"marva");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
if(isset($_POST['valid'])){
  $name=$_POST["user"];
  $pass=$_POST["password"];
  //if it regular user
  $s= " select * from users where name ='$name' && password = '$pass' ";
  $result = mysqli_query($con,$s);
  $num=mysqli_num_rows($result);
    //if it admin user
  $s2= " select * from admin where name ='$name' && password = '$pass' ";
  $result2= mysqli_query($con,$s2);
  $num2=mysqli_num_rows($result2);
  if($num2==1){
    $_SESSION['username']=$name;
    header('location:manager_page.php');
  }
elseif($num==1){
   echo "yes";
    $_SESSION['username']=$name;
    header('location:project.php');
  }

else{
  echo '<script type="text/javascript">alert("שם משתמש לא קיים במערכת");</script>';
  header('location:validation.php');
  }
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>כניסה למשתמש</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css_files/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  </head>
  <body dir="rtl">
    <div class="main-content-header">
      <img src="../marva-logo-israel.png"/>
    <h1>כניסה</h1>
  </div>
  <div class="login-box">
  <div class="row">
  <div class="col-md-6 login-left animated slideInDown">
    <form action="validation.php" method="post">
      <div class="form-group">
      <p>שם משתשמש</p>
      <input type="text" name="user" value="">
      </div>
      <div class="form-group">
      <p>תעודת זהות</p>
      <input type="password" name="password" value=""><br>
      </div>
      <center><input type="submit" name="valid" value="אישור">  </center>
    </form>
  </div>
  </div>
  </div>
  </body>
</html>

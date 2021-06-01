<?php
session_start();
$con=mysqli_connect("localhost","root","root");
$con->set_charset("utf8");

mysqli_select_db($con,"marva");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
if(isset($_POST["insert"])){
  $name=$_POST["name"];
  $pass=$_POST["password"];
  //validation to user before registration
  $s= " select * from users where name ='$name' ";
  $res=mysqli_query($con,$s);
  $num=mysqli_num_rows($res);
  if($num===1){
echo '<script type="text/javascript">alert("שם המשתמש תפוס");</script>';
  }else{
    //insert new user to database
    $insert="INSERT into users (name,password) values ('$name','$pass')";
    mysqli_query($con,$insert);
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>עמוד הרשמה</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css_files/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  </head>
  <body  dir="rtl">
    <div class="main-content-header">
      <img src="../marva-logo-israel.png"/>
    <h1>הרשמה למנהל</h1>
  </div>
  <div class="login-box">
  <div class="row">
  <div class="col-md-6 login-left animated slideInDown">
    <form action="registration.php" method="post">
      <div class="form-group">
      <p>שם משתמש</p>
      <input type="text" name="name" value=""><br>
    </div>
    <div class="form-group">
      <p>תעודת זהות</p>
      <input type="password" name="password" value=""><br>
    </div>
      <center>  <input type="submit" name="insert" value="אישור">  </center>
    </form>
  </div>
  </div>
  </div>
  </body>
</html>

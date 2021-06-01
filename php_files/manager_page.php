<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>דף מנהל</title>
    <link rel="stylesheet" type="text/css" href="../css_files/manager.css">
  </head>
  <body dir="rtl">
    <img src="../marva-logo-israel.png"/>
    <h1>ברוך הבא<?php echo   $_SESSION['username']; ?></h1>
    <div class="block_example">
<center><a href="registration.php"> הכנסת משתמשים חדשים </a></center>
    </div>
    <div class="block_example">
    <center><a href="index.php"> כניסה לטבלת משתמשים </a></center>
    </div>
    <div class="block_example">
    <center><a href="table.php"> כניסה לטבלת נתונים</a></center>
    </div>
    <div class="block_example">
    <center><a href="project.php">  כניסה למילוי פרטים</a></center>
    </div>
  </body>
</html>

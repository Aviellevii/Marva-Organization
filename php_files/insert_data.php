<?php
$con=mysqli_connect("localhost","root","root");
$con->set_charset("utf8");

mysqli_select_db($con,"marva");
if(isset($_POST["sub"])||isset($_POST["radio"])||isset($_POST["radio1"])||isset($_POST["radio2"])){
  $p=$_POST["namee"];
  $a=$_POST["proj"];
  $b=$_POST["proj1"];
  $c=$_POST["proj2"];
  $t=$_POST["mis"];
  $d=$_POST["mahut"];
  $e=$_POST["siua"];
  $f=$_POST["Hour"];
  $g=$_POST["Ole"];
  $h=$_POST["sug_hitalelut"];
  $i=$_POST["Mitalel"];
  $j=$_POST["Yesha"];
  $k=$_POST["radio"];
  $l=$_POST["radio1"];
  $m=$_POST["radio2"];
  $n=$_POST["city"];
  $o=$_POST["date"];
  //query to insert data to db
mysqli_query($con, "INSERT INTO data2 (name,project,project2,project3,mishta,mahut,siua,hour,ole,hitalelut,mitalel,yesha,Pone,shoa,metupal,city,Dates) VALUES
('$p','$a','$b','$c','$t','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o')");
}
 ?>
 <!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css_files/finish.css">
    <img src="../marva-logo-israel.png" alt="" >

  </head>
  <body dir="rtl">
    <h1>תודה רבה על על ההענות לעניית השאלון</h1>
    <img src="../lev.jpg" alt=""height="350px" width="250px">
    <center><button type="button" onclick="location.href='project.php'">למילוי נוסף של פרטים</button></center>

  <center><button type="button" onclick="location.href='https://www.marva.org.il/he/'">חזרה לדף הבית</button></center>
  </body>
</html>

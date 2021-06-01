<?php

$host="localhost";
$dbusername="root";
$dbpassword="root";
$dbname="marva";
$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
mysqli_query($conn,"SET character_set_client=utf8");
mysqli_query($conn,"SET character_set_connection=utf8");
mysqli_query($conn,"SET character_set_database=utf8");
mysqli_query($conn,"SET character_set_results=utf8");
mysqli_query($conn,"SET character_set_server=utf8");
mysqli_set_charset($conn,'utf8');
if(isset($_POST['הפונה'],$_POST['מהות הפניה'],$_POST['סוג יעוץ'],$_POST['שעות'],$_POST['ישוב'],$_POST['תאריך'])){
$Applicant=$_POST['הפונה'];
$nature_of_the_reference=$_POST['מהות הפניה'];
$consultation=$_POST['סוג יעוץ'];
$hours=$_POST['שעות'];
$city=$_POST['ישוב'];
$date=$_POST['תאריך'];
$INSERT = "INSERT Into details (Applicant,nature_of_the_reference,consultation,hours,city,date) values(?,?,?,?,?,?)";
	$stmt=$conn->prepare($INSERT);
	$stmt->bind_param("ssssss",$Applicant,$nature_of_the_reference,$consultation,$hours,$city,$date);
	$stmt->execute();
		echo "ok";

}
//$stmt->close();
//$mysqli->close();
?>
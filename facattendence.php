<?php
include "dbcon.php";
session_start();
if(empty($_POST['lan'])){
$error="<center><h4><font color='#FF0000'>Please select an option</h4></center></font>";
include"attendence.php";
exit();
}
$id = $_POST['id'];
$option=$_POST['lan'];
if($option=='present'){
$sql1 =mysqli_query($con, 'UPDATE students SET present_class = present_class + 1 WHERE id = "'.$_POST['id'].'"');
}
if($option=='absent'){
$sql2 =mysqli_query($con, 'UPDATE students SET absent_class = absent_class + 1 WHERE id = "'.$_POST['id'].'"');
}
$sql3=mysqli_query($con, 'UPDATE students SET present_percentage = ((present_class/(present_class+absent_class))*100) WHERE id = "'.$_POST['id'].'"');
$sql3=mysqli_query($con, 'UPDATE students SET absent_percentage = ((absent_class/(present_class+absent_class))*100) WHERE id = "'.$_POST['id'].'"');
header('location:daily_attendence.php')
?>

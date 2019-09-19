<?php
include('dbcon.php');
session_start();
$abs = $_POST['absper'];
$pre = $_POST['preper'];
$idd = $_POST['idd'];
mysqli_query($con,"update stcourses set absent='$abs', present='$pre' where id='$idd'");
header('location:stcourses.php');
?>
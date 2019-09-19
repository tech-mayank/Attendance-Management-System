<?php
include('dbcon.php');
session_start();
$id = $_GET['id'];
mysqli_query($con,"delete from stcourses where id='$id'");
?>
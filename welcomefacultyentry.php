<?php
include('dbcon.php');
session_start();

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$course = $_POST['course'];
$gender = $_POST['gender'];
$contact = $_POST['contact'];
$username = $_POST['username'];
$password = $_POST['password'];
$ins=mysqli_query($con,"insert into faculty(firstname,lastname,email,course,gender,contact,username,password) values('$fname','$lname','$email','$course','$gender','$contact','$username','$password')");
if($ins){
    echo "<h1>you are successfully done</h1>";
}
header('location:facultylogin.php');
?>
<!DOCTYPE html>
<html>
<head>

</head>
<?php
session_start();
include('dbcon.php');
$fname = $_POST['fname'];

$lname = $_POST['lname'];

$email = $_POST['email'];
$institute = $_POST['institute'];

$gender = $_POST['gender'];
$contact = $_POST['contact'];
$username = $_POST['username'];
$password = $_POST['password'];
$file=$_FILES["image"]["name"];
$file_size =$_FILES['image']['size'];

$path="uploadimg/".$file;
   move_uploaded_file($_FILES["image"]["tmp_name"],$path);

$ins=mysqli_query($con,"insert into users(firstname,lastname,email,institute,gender,contact,username,password,image) values('$fname','$lname','$email','$institute','$gender','$contact','$username','$password','$path')");
if($ins){
    echo "<h1>you are successfully done</h1>";
}
header('location:studentlogin.php');
?>
</html>
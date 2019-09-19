<?php
include('dbcon.php');
session_start();
$course = $_POST['course'];

$classes = $_POST['classes'];
$userid = $_SESSION['user_id'];
$a= mysqli_query($con,"insert into stcourses(course_name,user_id,classes) values('$course',$userid,$classes)");
if($a){
    echo "successful";
}
header('location:stcourses.php');

?>
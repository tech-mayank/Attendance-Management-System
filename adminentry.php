<?php
include('dbcon.php');
$studentname = $_POST['studentname'];

$course = $_POST['course'];
$a= mysqli_query($con,"insert into students(student_name,course) values('$studentname','$course')");
if($a){
    echo "successful";
}
header('location:adminwelcome.php');

?>
<?php
include('dbcon.php');
$id = $_GET['id'];
mysqli_query($con,"delete from students where id='$id'");
?>
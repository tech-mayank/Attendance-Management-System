<?php
include('dbcon.php');
$siusername = $_POST['username'];
$sipassword = $_POST['psw'];
$b3=mysqli_query($con, "Select * from admin where username='$siusername' and password='$sipassword'");
$b4=mysqli_fetch_assoc($b3);
if(isset($b4['username'])==$siusername  && ($b4['password'])==$sipassword)
{
 
}
else
{
    header('location:admin.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>
        Student Entry
    </title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
* {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        <form action="adminentry.php" method="post">
        <div class="container">
    

        <label for="studentname"><b>Student Name</b></label>
        <input type="text" placeholder="Enter Studentname" name="studentname" required>
        <label for="course"><b>Username</b></label>
        <input type="text" placeholder="Enter course" name="course" required>
        <button type="submit" class="registerbtn">Submit</button>
        </div>
        </form>
        </div>
    </div>
    
</div>
</body>
</html>
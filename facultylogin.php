<?php
session_start();
?>
<!DOCTYPE HTML>  
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<title>
Faculty Login
</title>

<style>
body{
    background:url("img/facultylogin1.jpg");
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover; 
}
.error {color: #FF0000;}
.form{
    align:center;
    margin:200px;
}
.form{
    color:white;
    font-size:25px;
    padding:15px;
    background:rgba(0,0,0,0.6);
    

}
.button-panel {
  margin-bottom: 20px;
  padding-top: 10px;
  width: 100%;
}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$fnameErr=$lnameErr = $emailErr = $genderErr = $websiteErr =$courseErr=$contactErr=$usernameErr=$passwordErr=$siusernameErr=$sipasswordErr=$sicourseErr="";
$fname=$lname = $email = $gender = $comment = $website =$department=$contact=$username=$password =$siusername=$sicourse=$sipassword=$course="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $fnameErr = "First Name is required";
  } else {
    $fname = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  if (empty($_POST["lname"])) {
    $lnameErr = "Last Name is required";
  } else {
    $lname = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["course"])) {
    $courseErr = "Department is required";
  } else {
    $course = test_input($_POST["course"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$institute)) {
        $instituteErr = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["contact"])) {
    $instituteErr = "Contact is required";
  } else {
    $institute = test_input($_POST["contact"]);
    // check if name only contains letters and whitespace
  }

  if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } else {
    $username = test_input($_POST["username"]);
    // check if name only contains letters and whitespace
  }

  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
    // check if name only contains letters and whitespace
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["siusername"])) {
    $siusernameErr = "Username is required";
  } else {
    $siusername = test_input($_POST["siusername"]);
    // check if name only contains letters and whitespace
  }

  if (empty($_POST["sipassword"])) {
    $sipasswordErr = "Password is required";
  } else {
    $sipassword = test_input($_POST["sipassword"]);
    // check if name only contains letters and whitespace
  }
  if (empty($_POST["sicourse"])) {
    $sicourseErr = "course is required";
  } else {
    $sicourse = test_input($_POST["sicourse"]);
    // check if name only contains letters and whitespace
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <p style=color:white;font-size:60px;text-align:center;margin-top:10px>For Faculty</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form">
                <h1>Sign In</h1>
                <p><span class="error">* required field</span></p>
                <form method="post" action="welcomefaculty.php">  
                Username <input type="text" name="siusername" value="<?php echo $siusername;?>">
                <span class="error">*<?php echo $siusernameErr;?></span>
                <br><br>
                Password <input type="text" name="sipassword" value="<?php echo $sipassword;?>">
                <span class="error">*<?php echo $sipasswordErr;?></span>
                <br><br>
                course <input type="text" name="sicourse" value="<?php echo $sicourse;?>">
                <span class="error">*<?php echo $sicourseErr;?></span>
                <br><br>
                <input type="submit" name="submit" value="Submit">  
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form">
                <h1>Sign Up</h1>
                <p><span class="error">* required field</span></p>
                <form method="post" action="welcomefacultyentry.php">  
                First Name <input type="text" name="fname" value="<?php echo $fname;?>">
                <span class="error">* <?php echo $fnameErr;?></span>
                <br><br>
                Last Name <input type="text" name="lname" value="<?php echo $lname;?>">
                <span class="error">* <?php echo $lnameErr;?></span>
                <br><br>
                E-mail: <input type="text" name="email" value="<?php echo $email;?>">
                <span class="error">* <?php echo $emailErr;?></span>
                <br><br>
                Course <input type="text" name="course" value="<?php echo $course;?>">
                <span class="error">*<?php echo $courseErr;?></span>
                <br><br>
                Gender:
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
                <span class="error">* <?php echo $genderErr;?></span>
                <br><br>
                Contact <input type="text" name="contact" value="<?php echo $contact;?>">
                <span class="error">*<?php echo $contactErr;?></span>
                <br><br>
                Username <input type="text" name="username" value="<?php echo $username;?>">
                <span class="error">*<?php echo $usernameErr;?></span>
                <br><br>
                Password <input type="text" name="password" value="<?php echo $password;?>">
                <span class="error">*<?php echo $passwordErr;?></span>
                <br><br>
                <input type="submit" name="submit" value="Submit">  
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
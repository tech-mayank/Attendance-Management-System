<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<!-- Latest compiled and minified CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <title>
            Profile Page
        </title>
        <style>
            .glow {
  font-size: 50px;
  color: #fff;
  text-align:left;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}/* The side navigation menu */
.sidenav {
  height: 100%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
  background-color: #111; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

/* The navigation menu links */
.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
  transition: margin-left .5s;
  padding: 20px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
        </style>
    </head>
    <body style="background:lightgrey">
        <div class="container-fluid">
                <div class="row" style="background: grey;">
                        <div class="col-md-8 col-sm-8">
                                <h1 class="capitaize glow" style="margin-top: 20px;margin-bottom: 25px;margin-left: 20px;">PROFILE</h1>
                        </div>
                        <div class="col-md-4 col-sm-4">
                                <div id="mySidenav" class="sidenav">
                                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                        <a href="welcomestudent.php">Home</a>
                                        <a href="stprofile.php">Profile</a>
                                        <a href="chart_sample.html">statistics</a>
                                        <a href="#">charts</a>
                                        <a href="stcourses.php">courses</a>
                                </div>
                                <span style="font-size:30px;cursor:pointer;float:right;margin-top: 20px;margin-right: 50px" onclick="openNav()">&#9776; open</span>
                        </div>
                    </div>
                    <br>
                    
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <img src="img/profileback.jpg" width="100%" height="500px">
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <div style="border:5px solid #080123;border-radius:20px;height:800px;width:700px;margin-top:-30px;margin-left:90px;">
                    <div>
                        <p style="font-size:80px;color:#19085b"><b>Your Credentials</b></p>
                    </div>
                    <div>
                        <p style='font-size:40px;color:#121449'>NAME :</p>
                        <?php echo "<p style='font-size:40px;color:#121449'>".$_SESSION['firstname']." ".$_SESSION['lastname']."</p>";?>
                        <p style='font-size:40px;color:#121449'>STUDYING IN :</p>
                        <?php echo "<p style='font-size:40px;color:#121449'>".$_SESSION['institute']."</p>";?>
                        <p style='font-size:40px;color:#121449'>GENDER :</p>
                        <?php echo "<p style='font-size:40px;color:#121449'>".$_SESSION['gender']."</p>";?>
                        <p style='font-size:40px;color:#121449'>CONTACT NUMBER :</p>
                        <?php echo "<p style='font-size:40px;color:#121449'>".$_SESSION['contact']."</p>";?>
                        
                    </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12">
                    <div style="border:5px solid #080123;border-radius:20px;height:800px;width:700px;margin-top:-30px;margin-left:300px;">
                    <div>
                        <p style="font-size:80px;color:#19085b"><b>Your Profile Pic</b></p>
                    </div>
                    <div>
                      <?php echo "<img src='$_SESSION[image]' width='620px' height='650px' style='border-radius:20px;margin-left:40px'>"?>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div style="border:5px solid #080123;border-radius:20px;height:200px;width:100%;margin-top:50px;margin-left:50px;margin-right:50px">
                    <div>
                        <p style="font-size:100px;color:#19085b;padding-top:20px" class="text-center"><b>Let's Manage Your Attendence Now</b></p>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
            function openNav() {
              document.getElementById("mySidenav").style.width = "250px";
            }
            
            function closeNav() {
              document.getElementById("mySidenav").style.width = "0";
            }
            </script>
</html>

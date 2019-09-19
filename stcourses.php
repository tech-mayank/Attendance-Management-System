<!DOCTYPE html>
<?php
include('dbcon.php');
session_start();


$a=mysqli_query($con,"select * from stcourses where user_id='$_SESSION[user_id]'");



?>
<html>
    <head>
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

                    <!-- jQuery library -->
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

                    <!-- Popper JS -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

                    <!-- Latest compiled JavaScript -->
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

                    <title>
                    Course Selection
                    </title>

            <style>
                        /* Full-width input fields */
                        input[type=text], input[type=password] {
                        width: 100%;
                        padding: 12px 20px;
                        margin: 8px 0;
                        display: inline-block;
                        border: 1px solid #ccc;
                        box-sizing: border-box;
                        }
                        #btnsub{
                            margin-top:40px;
                            margin-left:100px;
                        }

                        /* Set a style for all buttons */
                        button {
                        background-color: #4CAF50;
                        color: white;
                        padding: 14px 20px;
                        margin:8px 0px;

                        border: none;
                        cursor: pointer;
                        width: 100%;
                        }

                        button:hover {
                        opacity: 0.8;
                        }

                        /* Extra styles for the cancel button */
                        .cancelbtn {
                        width: auto;
                        padding: 10px 18px;
                        background-color: #f44336;
                        }

                        /* Center the image and position the close button */
                        .imgcontainer {
                        text-align: center;
                        margin: 24px 0 12px 0;
                        position: relative;
                        }

                        img.avatar {
                        width: 40%;
                        border-radius: 50%;
                        }

                        .container {
                        padding: 16px;
                        }

                        span.psw {
                        float: right;
                        padding-top: 16px;
                        }

                        /* The Modal (background) */
                        .modal {
                        display: none; /* Hidden by default */
                        position: fixed; /* Stay in place */
                        z-index: 1; /* Sit on top */
                        left: 0;
                        top: 0;
                        width: 100%; /* Full width */
                        height: 100%; /* Full height */
                        overflow: auto; /* Enable scroll if needed */
                        background-color: rgb(0,0,0); /* Fallback color */
                        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                        padding-top: 60px;
                        }

                        /* Modal Content/Box */
                        .modal-content {
                        background-color: #fefefe;
                        margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
                        border: 1px solid #888;
                        width: 80%; /* Could be more or less, depending on screen size */
                        }

                        /* The Close Button (x) */
                        .close {
                        position: absolute;
                        right: 25px;
                        top: 0;
                        color: #000;
                        font-size: 35px;
                        font-weight: bold;
                        }

                        .close:hover,
                        .close:focus {
                        color: red;
                        cursor: pointer;
                        }

                        /* Add Zoom Animation */
                        .animate {
                        -webkit-animation: animatezoom 0.6s;
                        animation: animatezoom 0.6s
                        }

                        @-webkit-keyframes animatezoom {
                        from {-webkit-transform: scale(0)} 
                        to {-webkit-transform: scale(1)}
                        }
                        
                        @keyframes animatezoom {
                        from {transform: scale(0)} 
                        to {transform: scale(1)}
                        }

                        /* Change styles for span and cancel button on extra small screens */
                        @media screen and (max-width: 300px) {
                        span.psw {
                            display: block;
                            float: none;
                        }
                        .cancelbtn {
                            width: 100%;
                        }
                        }
                        .glow {
  font-size: 30px;
  color: #fff;
  text-align: center;
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
}
/* The side navigation menu */
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
    <body>
        <div class="container-fluid">
    <div class="row" style="background: grey;">
                <div class="col-md-8">
                        <h1 class="capitaize text-center glow" style="margin-top: 20px;margin-bottom: 25px">Course Selection Page</h1>
                </div>
                <div class="col-md-4">
                        <div id="mySidenav" class="sidenav">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                <a href="welcomestudent.php">Home</a>
                                <a href="stprofile.php">Profile</a>
                                <a href="chart_sample.html">statistics</a>
                                <a href="charts.php">charts</a>
                                <a href="stcourses.php">courses</a>
                                <a href="logout.php">Log Out</a>
                              </div>
                              <span style="font-size:30px;cursor:pointer;float:right;margin-top: 20px;margin-right: 50px" onclick="openNav()">&#9776; open</span>
                </div>
            </div>        
                    </div>  
                       <p class="text-center text-capitalize" style="font-size:50px"><b>first enter your courses here</b></p>

                        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" id="btnsub">Enter Your Course</button>

                        <div id="id01" class="modal">
                        
                        <form method="post" class="modal-content animate" action="stcourseentry.php">
                            <div class="imgcontainer">
                            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                            
                            </div>

                            <div class="container">
                            <label for="course"><b>Name Of The Course</b></label>
                            <input type="text" placeholder="Enter Name Of The Course" name="course" required>

                            <label for="classes"><b>Number Of Classes</b></label>
                            <input type="text" placeholder="Enter Number Of Classes" name="classes" required>
                                
                            <button type="submit">Submit</button>
                            
                            </div>

                            <div class="container" style="background-color:#f1f1f1">
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                            <span class="psw">Forgot <a href="#">password?</a></span>
                            </div>
                        </form>
                        </div>
                        <p class="text-center" style="font-size:50px"><b>Table Of Your Courses</b></p>
                        <div class="coursetable table table-hover">
                            <table class="table table-hover table-striped">
                                <thead class="text-center">
                                    <th> Name Of The Course </th>
                                    <th> Number Of Classes </th>
                                    <th> Delete </th>
                                    <th>Open The Class</th>
                                    <th>Current Attendence</th>
                                    
                                </thead>
                                <tbody class="text-center">
                                <?php
                                    while($b = mysqli_fetch_assoc($a)){

                                        ?>
                                    <tr>
                                        <td><?php echo $b['course_name'];?></td>
                                        <td><?php echo $b['classes'];?></td>
                                        <td><?php echo "<a href='stcoursedelete.php?id=$b[id]'>delete this entry</a>";?></td>
                                        <td><?php echo "<a href='voter.php?id=$b[id]&&class=$b[classes]'>Open</a>";?></td>
                                        <td><?php echo "<a href='charts.php?id=$b[id]'>Open</a>";?></td>
                                        
                                    </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                                
                            </table>
                        </div>
                        
                        
    </body>
    <script>
                // Get the modal
                var modal = document.getElementById('id01');

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
</script>
<script>
  /* Set the width of the side navigation to 250px */
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</html>



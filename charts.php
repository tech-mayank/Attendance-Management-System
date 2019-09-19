<?php
include('dbcon.php');
session_start();
$id = $_GET['id'];
$a2=mysqli_query($con,"select * from stcourses where id='$id'");
$a3=mysqli_fetch_assoc($a2);
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
.glow {
  font-size:40px;
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
                        <h1 class="capitaize text-center glow" style="margin-top: 20px;margin-bottom: 25px">CURRENT ATTENDENCE</h1>
                </div>
                <div class="col-md-4">
                        <div id="mySidenav" class="sidenav">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                <a href="welcomestudent.php">Home</a>
                                <a href="stprofile.php">Profile</a>
                                <a href="chart_sample.html">statistics</a>
                                <a href="charts.php">charts</a>
                                <a href="stcourses.php">courses</a>
                        </div>
                              <span style="font-size:30px;cursor:pointer;float:right;margin-top: 20px;margin-right: 50px" onclick="openNav()">&#9776; open</span>
                </div>
    </div>
</div>
<canvas id="myChart" width="100" height="50"></canvas>
<script>
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['absent','present'],
        datasets: [{
            label: 'no of classes',
            data: [<?php echo $a3['absent_class'];?>,<?php echo $a3['present_class'];?>],
            backgroundColor: [
                'rgba(0,0,0, 1)',
                'rgba(54, 162, 235, 1)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

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
<form method="post">
<input type="text" id="prepercentage" name="prepercentage" style="display:none">
<input type="text" id="abspercentage" name="abspercentage" style="display:none">
<input type="text" id="absclasses" name="absclasses" style="display:none">
<input type="text" id="preclasses" name="preclasses" style="display:none">
<input type="text" id="coursename" name="coursename" style="display:none">
<button type="submit" name="button_pressed">Send Mail</button>
</form>
<script>
document.getElementById("coursename").value = <?php echo $a3['course_name'];?>;
document.getElementById("prepercentage").value = <?php echo $a3['present'];?>;
document.getElementById("abspercentage").value = <?php echo $a3['absent'];?>;
document.getElementById("absclasses").value = <?php echo $a3['absent_class'];?>;
document.getElementById("preclasses").value = <?php echo $a3['present_class'];?>;
</script>
</body>
<?php
if(isset($_POST['button_pressed']))
{
	$to      = $_SESSION['email'];
    $subject = 'Present Percentage';
    $message = 'This Is The Statistics Of Your Attendence Of Different Courses' ."\n";
  $message .= 'Present Percentage ' .$_POST['coursename']. "\n";
	$message .= 'Present Percentage ' .$_POST['prepercentage']. "\n";
	$message .= 'Absent Percentage ' .$_POST['abspercentage']. "\n";
  $message .= 'No Of Classes In Which You Remain Absent- ' .$_POST['absclasses']. "\n";
  $message .= 'No Of Classes In Which You Remain Present- ' .$_POST['preclasses']. "\n";
    $headers = 'From: attendencemanagekarlo@gmail.com' . "\r\n" .
        'Reply-To: attendencemanagekarlo@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    echo '<script language="javascript">';
echo 'alert("Mail Send Successfully To Your Email Address. Check That!!")';
echo '</script>';
}
else {
	echo 'not sent';
	}

?>
</html>
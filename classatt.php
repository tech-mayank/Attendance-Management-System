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
.btn {
  background-color: #f4511e;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 1;
  transition: 0.3s;
  margin-left:400px;
  margin-top:50px;
  margin-bottom:50px;
}

.btn:hover {opacity: 0.6}
input[type=checkbox] {
    padding-left:5px;
    padding-right:5px;
    border-radius:15px;

    margin:15px;
    

    width:15px;
    height:15px;
}
label{
    color: #f4511e;
    font-size:20px;
}
</style>
</head>
<?php
include('dbcon.php');
session_start();
$id = $_GET['id'];
$class=$_GET['class'];
$flag = $_GET['class'];
$a2=mysqli_query($con,"select * from stcourses where classes='$class'");
$a3=mysqli_fetch_assoc($a2);
?>
<body>

<div class="container-fluid">
<div class="row">
<div class="col-md-6">
<h3>Present</h3>
<div id="checkbox-container">
<?php
$i = 1;
while($i<=$flag){
?>
  <div>
    <label for="<?php echo 'option'.$i;?>"><?php echo 'class No.'.$i;?></label>
    <input type="checkbox" id="<?php echo 'option'.$i;?>" name="present">
  </div>
<?php
$i = $i + 1;
}
?>
</div>
</div>
<div class="col-md-6">
<h3>Absent</h3>
<div id="checkboxa-container">
<?php
$i = 1;
while($i<=$flag){
?>
  <div>
    <label for="<?php echo 'optiona'.$i;?>"><?php echo 'class No.'.$i;?></label>
    <input type="checkbox" id="<?php echo 'optiona'.$i;?>" name="absent">
  </div>
<?php
$i = $i + 1;
}
?>
</div>
</div>
</div>
</div>

<script>
var checkboxValues = JSON.parse(localStorage.getItem('checkboxValues')) || {};
var $checkboxes = $("#checkbox-container :checkbox");

$checkboxes.on("change", function(){
  $checkboxes.each(function(){
    checkboxValues[this.id] = this.checked;
  });
  localStorage.setItem("checkboxValues", JSON.stringify(checkboxValues));
});
$.each(checkboxValues, function(key, value) {
  $("#" + key).prop('checked', value);
});
</script>

<button id="submitabsent" onClick="absents()" class="btn">no of absent</button>
<button id="submitpresent" onClick="present()" class="btn">no of present</button>
<button id="submitabsent" onClick="show_graph()" class="btn">show graph</button>
<button id="submitabsent" onClick="data()" class="btn">Set The Data</button>
<p style="font-size:80px;color:black" class="text-center">Graph</p>
<canvas id="myChart" width="100" height="50"></canvas>
<script>
var x = 0;
var y =0;
var absper =0;
var preper =0;

function absents()
  {
   var inputElems = document.getElementsByName("absent"),
    count = 0;

    for (var i=0; i<inputElems.length; i++) {       
       if (inputElems[i].type == "checkbox" && inputElems[i].checked == true){
          count++;
       }
    }
    alert(count);
    
    x=count;
    
 }

 function present()
  {
   var inputElems = document.getElementsByName("present"),
    counts = 0;

    for (var i=0; i<inputElems.length; i++) {       
       if (inputElems[i].type == "checkbox" && inputElems[i].checked == true){
          counts++;
       }
    }
    alert(counts);
    y=counts;
    
 }

function show_graph(){
    absper = (x/(y+x))*100;
    preper = (y/(y+x))*100;
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['absent','present'],
        datasets: [{
            label: 'no of classes',
            data: [x,y],
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
}
function data(){
document.getElementById("preper").value = preper;
document.getElementById("absper").value = absper;

document.getElementById("prepercentage").value = preper;
document.getElementById("abspercentage").value = absper;
document.getElementById("absclasses").value = x;
document.getElementById("preclasses").value = y;
}

</script>
<form method="post">
<input type="text" id="prepercentage" name="prepercentage" style="display:none">
<input type="text" id="abspercentage" name="abspercentage" style="display:none">
<input type="text" id="absclasses" name="absclasses" style="display:none">
<input type="text" id="preclasses" name="preclasses" style="display:none">
<button type="submit" name="button_pressed">Send Mail</button>
</form>
<form method="post" action="preabsupdate.php">
<input type="text" value="present" id="preper" name="preper" style="display:none">
<input type="text" value="absent" id="absper" name="absper" style="display:none">
<input type="text" value="<?php echo $id?>" name="idd" style="display:none">
<input type="submit" style="font-size:30px;border-radius:20px;background-color:#ff3103;color:white" class="form-control">
</form>

</body>
</html>
<?php
if(isset($_POST['button_pressed']))
{
	$to      = $_SESSION['email'];
    $subject = 'Present Percentage';
    $message = 'This Is The Statistics Of Your Attendence Of Different Courses' ."\n";
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
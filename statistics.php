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
WELCOME
</title>
<style>
body{
    background:url('img/index4.jpg')center center fixed;
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;  
}
p{
    font-size:40px;
    margin-top:150px;
}
p:hover{
    transition:all 0.6s ease-in-out;
    color:white;
    border:2px solid white;
    padding:10px;
}

a{
    color:black;

}
.links{
background:rgba(0,0,0,0.27);
width:500px;
height:300px;
margin-left:200px;
margin-top:100px;
font-size:50px;
padding-top:80px;
}
a:hover{
    text-decoration:none;
    color:white;
    transition:all 0.4s ease-in-out;
    
    padding:5px;
}
a{
    color:#f9f44f;
}
</style>
</head>
<body>
<div class="container-fluid">
<div class="row" style="background: grey;">
                <div class="col-md-8">
                        <h1 class="capitaize text-center glow" style="margin-top: 20px;margin-bottom: 25px">Statistics Of Your Courses</h1>
                </div>
                <div class="col-md-4">
                        <div id="mySidenav" class="sidenav">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                <a href="welcomestudent.php">Home</a>
                                <a href="stprofile.php">Profile</a>
                                <a href="chart_sample.html">statistics</a>
                                <a href="#">charts</a>
                                <a href="stcourses.php">courses</a>
                                <a href="logout.php">Log Out</a>
                              </div>
                              <span style="font-size:30px;cursor:pointer;float:right;margin-top: 20px;margin-right: 50px" onclick="openNav()">&#9776; open</span>
                </div>
            </div>
    <div class="row">
        <div class="col-sm-12">
        <p class="text-center"><b>Statistics</b></p>
        </div> 
    </div>
    <div class="row">
        <div class="col-sm-6 text-center">
            <div class="links">
            <a href="stpresentpercentage.html"><b>present percentage stats</b></a>
            </div>
        </div> 
        <div class="col-sm-6 text-center">
            <div class="links">
            <a href="stabsentpercentage.html"><b>absent percentage stats</b></p>
            </div>
        </div> 
    </div>
</div>
</body>
</html>

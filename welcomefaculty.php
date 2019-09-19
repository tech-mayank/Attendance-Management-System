<?php
session_start();
include('dbcon.php');
$siusername = $_POST['siusername'];
$sipassword = $_POST['sipassword'];
$sicourse = $_POST['sicourse'];
$b3=mysqli_query($con, "Select * from faculty where username='$siusername' and password='$sipassword' and course='$sicourse'");

    $b4=mysqli_fetch_assoc($b3);
    if(isset($b4['username'])==$siusername  && ($b4['password'])==$sipassword)
    {
        $_SESSION['firstname']=$b4['firstname'];
        $_SESSION['lastname']=$b4['lastname'];
        $_SESSION['email']=$b4['email'];
    
        $_SESSION['gender']=$b4['gender'];
        $_SESSION['contact']=$b4['contact'];
        $_SESSION['course']=$b4['course'];
        $_SESSION['id']=$b4['id'];
        $_SESSION['username']=$b4['username'];
    }
    else
    {
        header('location:facultylogin.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">

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
<style>
       
        </style>
        <title>
            Welcome To Faculty
        </title>
    </head>
    <body  style="background:rgba(0,0,0,0.2)">
        <div class="container-fluid">
            <div class="row" style="background:grey;">
                <div class="col-md-8">
                        <h1 class="capitaize text-center glow" style="margin-top: 20px;margin-bottom: 25px">SCHEDULE MANAGEMENT SYSTEM</h1>
                </div>
                <div class="col-md-4">
                        <div id="mySidenav" class="sidenav">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                <a href="#">Home</a>
                                <a href="daily_attendence.php">Attendence</a>
                              </div>
                              <span style="font-size:30px;cursor:pointer;float:right;margin-top: 20px;margin-right: 50px" onclick="openNav()">&#9776; open</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="margin-top: 20px">
                    <h1 class="text-center capitalize" style="font-weight: bolder;padding: 15px;padding-bottom: 20px">Some Great Thoughts</h1>
                    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1000px; height: 600px; overflow: hidden; visibility: hidden; background-color: #24262e;">
                            <!-- Loading Screen -->
                            <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                                <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                            </div>
                            <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1000px; height: 500px; overflow: hidden;">
                                <div data-p="144.50" style="display: none;">
                                    <img data-u="image" src="img/slider1.jpg" />
                                    <img data-u="thumb" src="img/thumb-01.jpg" />
                                </div>
                                <div data-p="144.50" style="display: none;">
                                    <img data-u="image" src="img/slider2.jpg" />
                                    <img data-u="thumb" src="img/thumb-02.jpg" />
                                </div>
                                <div data-p="144.50" style="display: none;">
                                    <img data-u="image" src="img/slider3.jpg" />
                                    <img data-u="thumb" src="img/thumb-03.jpg" />
                                </div>
                                <div data-p="144.50" style="display: none;">
                                    <img data-u="image" src="img/slider4.jpg" />
                                    <img data-u="thumb" src="img/thumb-04.jpg" />
                                </div>
                                <div data-p="144.50" style="display: none;">
                                    <img data-u="image" src="img/slider5.jpg" />
                                    <img data-u="thumb" src="img/thumb-05.jpg" />
                                </div>
                                <div data-p="144.50" style="display: none;">
                                    <img data-u="image" src="img/slider6.jpg" />
                                    <img data-u="thumb" src="img/thumb-06.jpg" />
                                </div>
                                <div data-p="144.50" style="display: none;">
                                    <img data-u="image" src="img/slider7.jpg" />
                                    <img data-u="thumb" src="img/thumb-07.jpg" />
                                </div>
                                <div data-p="144.50" style="display: none;">
                                    <img data-u="image" src="img/slider8.jpg" />
                                    <img data-u="thumb" src="img/thumb-08.jpg" />
                                </div>
                                <div data-p="144.50" style="display: none;">
                                    <img data-u="image" src="img/slider9.jpg" />
                                    <img data-u="thumb" src="img/thumb-09.jpg" />
                                </div>
                                <div data-p="144.50" style="display: none;">
                                    <img data-u="image" src="img/slider10.jpg" />
                                    <img data-u="thumb" src="img/thumb-10.jpg" />
                                </div>
                                <div data-p="144.50" style="display: none;">
                                    <img data-u="image" src="img/slider11.jpg" />
                                    <img data-u="thumb" src="img/thumb-11.jpg" />
                                </div>
                                <div data-p="144.50" style="display: none;">
                                    <img data-u="image" src="img/slider12.jpg" />
                                    <img data-u="thumb" src="img/thumb-12.jpg" />
                                </div>
                                <a data-u="add" href="http://www.jssor.com/demos/image-gallery.slider" style="display:none">Image Gallery</a>
                            
                            </div>
                            <!-- Thumbnail Navigator -->
                            <div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:1000px;height:100px;" data-autocenter="1">
                                <!-- Thumbnail Item Skin Begin -->
                                <div data-u="slides" style="cursor: pointers">
                                    <div data-u="prototype" class="p">
                                        <div class="w">
                                            <div data-u="thumbnailtemplate" class="t"></div>
                                        </div>
                                        <div class="c"></div>
                                    </div>
                                </div>
                                <!-- Thumbnail Item Skin End -->
                            </div>
                            <!-- Arrow Navigator -->
                            <span data-u="arrowleft" class="jssora05l" style="top:158px;left:8px;width:40px;height:40px;"></span>
                            <span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;"></span>
                        </div>
                    </div>
            </div>
            
            <!-- Images used to open the lightbox -->

            <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
            
        </div>
        <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/jssor.slider-21.1.5.mini.js"></script>
    <!-- use jssor.slider-21.1.5.debug.js instead for debug -->
    <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 10,
                $SpacingX: 8,
                $SpacingY: 8,
                $Align: 360
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 800);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
        <script>
                function openNav() {
                  document.getElementById("mySidenav").style.width = "450px";
                }
                
                function closeNav() {
                  document.getElementById("mySidenav").style.width = "0";
                }
        </script>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
        </script>
        
    </body>
</html>
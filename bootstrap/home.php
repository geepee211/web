<?php
session_start(); 
include "uchecksession.php";
	$id = $_SESSION["id"];

	include_once("include/config.php");


	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Gitlinks | E-School Management Solution</title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/js-image-slider.css" />
    <link rel="stylesheet" type="text/css" href="css/body.css" />

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +2348176457296</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.jpg" width="140px" height="75px" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Students<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="students_entry.php">Students Entry</a></li>
                                <li><a href="view_students.php">View Students</a></li>
                              
                            </ul>
                        </li>
                       <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Teachers<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="">Teachers Entry</a></li>
                                <li><a href="">View Teachers</a></li>
                            
                            </ul>
                        </li>
                        
						<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Subjects<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="">Subjects Entry</a></li>
                                <li><a href="">View Subjects</a></li>
                            
                            </ul>
                        </li>
                       
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Scores<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="">Score Entry</a></li>
                                <li><a href="">View Scores</a></li>
                            </ul>
                        </li>
						<li><a href="contactus.php">Contact Us</a></li>  
                        <li><a href="">WebMail</a></li>  
                        <li><a href="logout.php">Logout</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
			
    </header><!--/header-->

	<div id="slider">  <!--Div slider goes here -->
            <img src="images/slider_one.jpg" width="850px" height="290px">
            <img src="images/slide_two.jpg" width="850px" height="290px"  alt=""			/>
            <img src="images/slider_three.jpg" width="850px" height="290px"  alt="" />
            <img src="images/slide_four.jpg"width="850px" height="290px"  />
			<img src="images/slide_five.jpg"width="850px" height="290px"  />
			<img src="images/slide_six.jpg"width="850px" height="290px"  />
    </div>    <!--Div slider ends here --> 
	
<div id="news">  
<span><center><font color="white">News</font></center></span>

<marquee behavior="slide" direction="up"><p>HELLO GEEPEE</p></marquee>
    </div> 
<div class="body">
<h2 style="width:100%;background-color:#1E141F;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="white">WELCOME</font></h2>
<p style="color:black;"><font size="3">&nbsp;<b>It is with great pleasure that I welcome you to this E-School management solution. As you opt to use this great solution, we at gitlinks believe that you would find this solution useful, usable and profitable in managing your school.
 Choosing Gitlinks E-School management solution means opting for a reliable school management software that provides schools of any size with the capability to manage their students and teachers quickly and easily. We are aware that most schools still use the manual process for its operation. Hence this gave us the need to develop this software to help eradicate manual school management in our world.</b><font></p>

</div>
 
 <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2014 <a target="_blank" href="" title="">Gitlinks InfoSoft</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->


	
 
   
     <script src="js/js-image-slider.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>
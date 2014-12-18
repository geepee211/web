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
<link rel="stylesheet" type="text/css" href="/bootstrap/css/body.css"/>	
	

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
       <body><b>&nbsp;<font color="#7D86FF" size="3">You are Logged in as</font><b></body>
	  <font color="#FFA6B2" size="3"> <?php echo $_SESSION['username']; ?> </font>
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
                        <li class="active"><a href="">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Students<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="students_entry.php">Students Entry</a></li>
                                <li><a href="">View Students</a></li>
                              
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
                        <li><a href="studentLogout.php">Logout</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
			
    </header><!--/header-->
<div class="dashboard">
<br>
<p><font size="5">&nbsp;&nbsp;Dashboard</font></p>
<div class="list">
<center><img src="/bootstrap/images/student.png" width="110px" height="170px"></center>
<a href="gits.com" ><center>View Profile</center></a>
</div>
<div class="list">
<center><img src="/bootstrap/images/p.jpg" width="110px" height="170px"></center>
<a href=""><center>Manage Teachers</center></a>
</div>
<div class="list">
<center><img src="/bootstrap/images/p.jpg" width="110px" height="170px"></center>
<a href=""><center>View/ Print Result</center></a>
</div>
<div class="list">
<center><img src="/bootstrap/images/article.png" width="110px" height="170px"></center>
<a href=""><center>Manage Subjects</center></a>
</div>
</div>

<?php include("footer.htm"); ?>


	
 
   
     <script src="js/js-image-slider.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>
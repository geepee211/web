<?php
	include_once("include/config.php");
	include("form_validate.php");
  $id="";
	$msg="";
	$opr="";
	if(isset($_GET['opr']))
	$opr=$_GET['opr'];
	
if(isset($_GET['rs_id']))
	$id=$_GET['rs_id'];
	
	if($opr=="del")
{
	$del_sql=mysql_query("DELETE FROM students WHERE studentId=$id");
	if($del_sql)
		$msg="1 Record Deleted...";
		echo $msg;
		}
    else  {
	echo mysql_error();
 		
			
}
	
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
                        <li><a href="home.php">Home</a></li>
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Students<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="">Students Entry</a></li>
                                <li class="active"><a href="">View Students</a></li>
                              
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
<section id="contact-page">
        <div class="container">
            <div class="center"> <br>       
                <h4>VIEW STUDENTS DETAIL</h4>
            </div> 
		<div class="table-responsive">
		    <table class="table">
		       <thead>
			   <tr>
			      <th>S/No</th>
			      <th>Full Name</th>
			      <th>Class</th>
			      <th>Gender</th>
			      <th>Nationality</th>
			      <th>Date of Birth</th>
			      <th>Address</th>
				  <th>Action</th>
				</tr>
				<?php
				$query = "SELECT * FROM students";
		$run = mysql_query($query);
		
	while  ($row=mysql_fetch_array($run)) {
	
	   $id = $row[0];
	   $firstName = $row[1];
	    $lastName = $row[2]; 
	   $class = $row[3];
	   $_POST['gender'] = $row[4];
	    $dob = $row[6];
	    $studentAddress = $row[7];
		$sNationality = $row[5];
		
				?>
			   </thead>
			   <tbody>
			   <tr>
			      <td><?php echo $id; ?> </td>
			      <td><?php echo $row[1]."    ".$row[2]; ?></td> 
				  <td><?php echo  $class;  ?></td>
			      <td><?php echo $_POST['gender'];  ?></td>
			      <td><?php echo  $sNationality;  ?></td>
			      <td><?php echo  $dob;  ?></td>
			      <td><?php echo  $studentAddress;  ?></td>
            <td><a href="?tag=students_update&opr=upd&rs_id=<?php echo $row['studentId'];?>" title="Update"><img src="./images/update.png" /></a></td> <td><a href="?tag=view_students&opr=del&rs_id=<?php echo $row['studentId'];?>" title="Delete"><img src="./images/delete.png" /></a></td>
				  
				 </tr>
				 </tbody>    
    <?php  
	}

	?>
		    </table>
		</div>
			
            </div><!--/.container-->
    </section><!--/#contact-page-->

    
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
	<script src="js/jquery-1.9.1.min.js"></script>
    
</body>
</html>

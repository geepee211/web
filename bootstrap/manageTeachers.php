<?php
	include_once("include/config.php");
	include("teacherValidate.php");
  $id="";
	$msg="";
	$opr="";
	if(isset($_GET['opr']))
	$opr=$_GET['opr'];
	
if(isset($_GET['rs_id']))
	$id=$_GET['rs_id'];
	
	if($opr=="del")
{
	$del_sql=mysql_query("DELETE FROM teachers WHERE id=$id");
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
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" width="140px" height="75px" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="adminMenu.php">Home</a></li>
                         <li class=""><a href="adminMenu.php">About Us</a></li>
						<li><a href="contactus.php">Contact Us</a></li>  
                        <li><a href="">Change Password</a></li>  
                        <li><a href="adminLogout.php">Logout</a></li>                        
                   </ul>
                </div>
            </div><!--/.container-->
			
    </header><!--/header-->
<section id="contact-page">
        <div class="container">
            <div class="center"> <br>       
                <h4>Manage teachers&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="teachersEntry.php" style="background-color:#4D4DFF;">Create Teachers Account</a></h4>
            </div>

		<div class="table-responsive">
		    <table class="table">
		       <thead>
			   <tr>
			      <th>Id</th>
			      <th>Full Name</th>
			      <th>Email</th>
			      <th>Gender</th>
			      <th>Date of Birth</th>
			      <th>Nationality</th>
				  <th>Address</th>
			      <th>Phone Number</th>
			      <th>Action</th>
				</tr>
				<?php
				$query = "SELECT * FROM teachers";
		@$run = mysql_query($query);
		
	while  (@$row=mysql_fetch_array($run)) {
	
	   $id = $row[0];
	   $firstName = $row[1];
	    $lastName = $row[2]; 
	   $email = $row[3];
	   $_POST['gender'] = $row[4];
	    $dob = $row[5];
		$nationality = $row[6];
	    $address = $row[7];
		$phonenum = $row[8];
	
		
				?>
			   </thead>
			   <tbody>
			   <tr>
			      <td><?php echo $id; ?> </td>
			      <td><?php echo $row[1]."    ".$row[2]; ?></td> 
				  <td><?php echo  $email;  ?></td>
			      <td><?php echo $_POST['gender'];  ?></td>
			      <td><?php echo  $dob;  ?></td> 
				  <td><?php echo  $nationality;  ?></td>
			      <td><?php echo  $address;  ?></td> 
				  <td><?php echo  $phonenum;  ?></td>
            <td><a href="?tag=students_update&opr=upd&rs_id=<?php echo $row['id'];?>" title="Update"><img src="./images/update.png" /></a></td> 
			<td><a href="?tag=manageTeacherss&opr=del&rs_id=<?php echo $row['id'];?>" title="Delete"><img src="./images/delete.png" /></a></td>
				  
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

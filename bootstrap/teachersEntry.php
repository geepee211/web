<?php
	include_once("include/config.php");
	include("teacherValidate.php");


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
                <h4>TEACHERS DETAIL</h4>
            </div> 
			<label class="errorred"><?php echo $output; ?></label>
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="" enctype="multipart/form-data">
				<p style="margin-left:110px;">All Fields are required</p>
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
						
                            <label>First Name *</label>
                            <input type="text" name="fname" class="form-control" value="<?php if($finalValue == 1){ $firstNameCorrect = ''; echo $firstNameCorrect;}else if($finalValue == 0){echo $firstNameCorrect;} ?>" />
                        </div>
				<label class="errorred"><?php echo $firstNameError; ?></label>
                        <div class="form-group">
                            <label>Last Name *</label>
                            <input type="text" name="lname" class="form-control" value="<?php if($finalValue == 1){ $lastNameCorrect = ''; echo $lastNameCorrect;}else if($finalValue == 0){echo $lastNameCorrect;} ?>" />
                        </div>
				<label class="errorred"><?php echo $lastNameError; ?></label>
                        <div class="form-group">
                            <label>Gender*</label>
                <input name ="gender" type="radio" value= "male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male'){ if($finalValue == 0){ echo 'checked';}else if($finalValue == 1){ echo''; } } ?> />male
				<input name= "gender" type="radio" value = "female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female'){ if($finalValue == 0){ echo 'checked';}else if($finalValue == 1){ echo''; } } ?> />female
                        </div>
                        <div class="form-group">
						<p>Hint:Size needs to be less than 40kb</p>
                            <label>Passport*</label>
                	<input type="file" name="upload" size="30"   style="margin-bottom:20px;"/>
                        </div>                        
                    </div>
				<label class="errorred"><?php echo $emailError; ?></label>
                    <div class="col-sm-5">
                       <div class="form-group">
                            <label>Email *</label>
                            <input type="text" name="email" class="form-control" value="<?php if($finalValue == 1){ $emailCorrect = ''; echo $emailCorrect;}else if($finalValue == 0){echo $emailCorrect;} ?>" />
                        </div>
				<label class="errorred"><?php echo $nationalityError; ?></label>
                        <div class="form-group">
                            <label>Nationality*</label>
                            <input type="text" name="nationality" class="form-control" value="<?php if($finalValue == 1){ $nationalityCorrect = ''; echo $nationalityCorrect;}else if($finalValue == 0){echo $nationalityCorrect;} ?>" />
                        </div> 
                        <div class="form-group">
                            <label>Date of Birth*</label>
							<select name="yy" >
                    	<option>Year</option>
                        <?php
							
							for($i=1985;$i<=2015;$i++){	
							echo"<option value='$i'>$i</option>";
							}
						?>
               	  </select> 
				  -
				  <select name="mm">
                    	<option>Month</option>
						<?php
                            $mm=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","NOv","Dec");
                            $i=0;
                            foreach($mm as $mon){
                                $i++;
                                echo"<option value='$i'> $mon</option>";		
                            }
                        ?>
                    </select>
                     -
					 <select name="dd">
                    	<option>Date</option>
						<?php
                        for($i=1;$i<=31;$i++){
                        ?>
                        <option value="<?php echo $i; ?>">
                        <?php
                        if($i<10)
                            echo"0".$i;
                        else
                            echo"$i";	  
						?>
						</option>	
						<?php 
						}?>
					</select>
              </div>
				<label class="errorred"><?php echo $phonenumError; ?></label>
                        <div class="form-group">
                            <label>Phone Number*</label>
                            <input type="text" name="phonenum" class="form-control" value="<?php if($finalValue == 1){ $phonenumCorrect = ''; echo $phonenumCorrect;}else if($finalValue == 0){echo $phonenumCorrect;} ?>" />
                        </div> 
				<label class="errorred"><?php echo $addressError; ?></label>
                <div class="form-group">
                            <label>Address*</label>
               <textarea class="form-control" name="address" value="<?php if($finalValue == 1){ $addressCorrect = ''; echo $addressCorrect;}else if($finalValue == 0){echo $addressCorrect;} ?>" /> </textarea>
                        </div>

                        						
                        <div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary btn-lg" value="Submit">
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

    <?php

if($opr=="upd")
{
	$sql_upd=mysql_query("SELECT * FROM teachers WHERE id=$id");
	$rs_upd=mysql_fetch_array($sql_upd);
	list($y,$m,$d)=explode('-',$rs_upd['dob']);
?>
	<script src="js/jquery-1.9.1.min.js"></script>
    <?php
	}
	?>
<?php include("footer.htm"); ?>
</body>
</html>

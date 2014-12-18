 
 <?php
	include_once("include/config.php");




	   //------------------------------ERROR VARIABLE DECLARTIONS START -------------------------
		$firstNameError = $lastNameError  = $classError = $sNationalityError  = $studentAddressError = $output =  '';
		$firstNameVerified = '';
		$firstNameCorrect = '';
		$lastNameVerified = '';
		$lastNameCorrect = '';
		$classCorrect = '';
		$classVerified = '';
		$sNationalityCorrect = '';
		$sNationalityVerified = '';
		$studentAddressCorrect = '';
		$studentAddressVerified = '';
		$release = '';	
		$finalValue = 0;
	   //------------------------------ERROR VARIABLE DECLARTIONS END -------------------------
												
$id="";
$opr="";
if(isset($_GET['opr']))
	$opr=$_GET['opr'];

if(isset($_GET['rs_id']))
	$id=$_GET['rs_id'];   
//--------------insert data-----------------
      
	
      if(isset($_POST['submit'])) {
       $firstName = htmlentities($_POST['fname']);
       $lastName = htmlentities($_POST['lname']);
       $dob=$_POST['yy']."/".$_POST['mm']."/".$_POST['dd'];
	   $class = htmlentities($_POST['class']);
	   $sNationality = htmlentities($_POST['studentNationality']);
	   $studentAddress = htmlentities($_POST['student_address']);
	   $name = $_FILES['upload']['name'];
	   $temp = $_FILES['upload']['tmp_name'];
	   $type = $_FILES['upload']['type'];
	   $size = $_FILES['upload']['size'];
	   
	   //------------------------------IMAGE VALIDATION -------------------------
	   if(($type == "image/jpeg") || ($type == "image/jpg") || ($type == "image/png")) { 
	   
	       if($size <= 40000) {
			   
			   move_uploaded_file($temp,"students_upload/$name");
			   $release = 'Image uploaded successfully';
			   
			   
	   }else{
		   
	       echo "The file: $name is too big...<br>
		   The size is $size and needs to be less than 40kb";
		  }
	  }else{
		  echo "This type $type is not allowed";
	  }
	   
	   
	   //------------------------------FORM VALIDATION -------------------------
	    if(empty($firstName)){
			$firstNameError = 'First Name cannot be blank!';
	   }else{
			$firstNameCorrect = $firstName;
			
			if(!preg_match("/^[a-zA-Z]+$/", $firstNameCorrect)){
				$firstNameError = 'Last name can only contain letters';
			}else{
				$firstNameVerified = "verified";
			}
	   }
	   
	   
	   if(empty($lastName)){
			$lastNameError = 'Last Name cannot be blank!';
	   }else{
			$lastNameCorrect = $lastName;
			
			if(!preg_match("/^[a-zA-Z]+$/", $lastNameCorrect)){
				$lastNameError = 'Last name can only contain letters';
			}else{
				$lastNameVerified = "verified";
			}
	   }
	   
	   
	    if(empty($class)){
			$classError = 'Class cannot be blank';
	   }else{
			$classCorrect = $class;
			
			if(!preg_match("/^[J,S]{2,}[1-3]{1,}[A-E]{1}+$/", $classCorrect)){
				$classError = 'wrong class format; hint:SS2C';
			}else{
				$classVerified = "verified";
			}
	   }
	   
	   
	    if(empty($sNationality)){
			$sNationalityError = 'Student Nationality cannot be blank';
	   }else{
			$sNationalityCorrect = $sNationality;
			
			if(!preg_match("/^[a-zA-Z]+$/", $sNationalityCorrect)){
				$sNationalityError = 'Student nationality can only contain letters';
			}else{
				$sNationalityVerified = "verified";
			}
	   }
	   
	  
	  
	  if(empty($studentAddress)){
			$studentAddressError = 'Student address cannot be empty';
	   }else{
			$studentAddressCorrect = $studentAddress;
			
			if(strlen($studentAddressCorrect) <= 5 || (strlen($studentAddressCorrect) >30)) {
		      $studentAddressError = 'required digit of thirty is needed for address';
			}else{			  
		
			$studentAddressVerified = "verified";
		}
		
			
	   }
	   
	   
	   
	  
	 
	 if (((isset($_POST['gender']) && $_POST['gender'] == 'male') || (isset($_POST['gender']) && $_POST['gender'] == 'female'))) {
	 
	 if($firstNameVerified == "verified"  && $lastNameVerified = 'verified'){
	 
	 $firstNameCorrectUpp = ucfirst($firstNameCorrect);
	 
	 $sql_ins = "INSERT INTO `school`.`students` (`id`, `fname`, `lname`,  `class`, `gender`, `sNationality`, `dob`, `studentAddress`) VALUES (NULL, '$firstNameCorrectUpp', '$lastName', '$class', '".htmlspecialchars($_POST['gender'])."', '$sNationality', '$dob', '$studentAddress')";
	 
	 if(mysql_query($sql_ins)) {
		$finalValue = 1;
	 echo "<script>alert('Congratulations!Your details have been received successfully!.')</script>" ;
		
	 }
	  else  {
	   $finalValue = 0;
	echo  mysql_error();
   }
	 
	 }
	 
	}else{
	$output = 'Make sure you select your gender';
	
	}   
	  
 
						
						
	  }



?>
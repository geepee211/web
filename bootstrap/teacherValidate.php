 
 <?php
	include_once("include/config.php");




	   //------------------------------ERROR VARIABLE DECLARTIONS START -------------------------
   $firstNameError = $lastNameError  = $emailError = $nationalityError  = $addressError =  $phonenumError = $output =  '';
	    $firstNameVerified = '';
		$firstNameCorrect = '';
		$lastNameVerified = '';
		$lastNameCorrect = '';
		$emailVerified = '';
		$emailCorrect = '';
		$nationalityVerified = '';
		$nationalityCorrect = '';
		$addressVerified = '';
		$addressCorrect = '';
		$phonenumVerified = '';
		$phonenumCorrect = '';
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
	   $email = htmlentities($_POST['email']);
	   $nationality = htmlentities($_POST['nationality']);
       $dob=$_POST['yy']."/".$_POST['mm']."/".$_POST['dd'];
	   $phonenum = htmlentities($_POST['phonenum']);
	   $address = htmlentities($_POST['address']);
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
	   
	   
	   if(empty($email)){
			$emailError = 'Email address cannot be blank';
	   }else{
			$emailCorrect = $email;
			
			if(!filter_var($emailCorrect, FILTER_VALIDATE_EMAIL)){
				$eError = 'Please enter a valid e-mail address!Hint:&nbsp;email@example.com';
			}else{
				$emailVerified = "verified";
			}
	   }
	    
	   
	    if(empty($nationality)){
			$nationalityError = 'Nationality cannot be blank';
	   }else{
			$nationalityCorrect = $nationality;
			
			if(!preg_match("/^[a-zA-Z]+$/", $nationalityCorrect)){
				$nationalityError = 'Nationality can only contain letters';
			}else{
				$nationalityVerified = "verified";
			}
	   }
	   
	   
	   if(empty($phonenum)){
			$phonenumError = 'Phone Number cannot be blank';
	   }else{
			$phonenumCorrect = $phonenum;
		if(!preg_match("/^[0-9]+$/", $phonenumCorrect)){
		$phonenumError = 'Please enter only digits for phone number';
		}else{
			$phonenumVerified = "verified";
		if(strlen($phonenumCorrect) <= 10 || (strlen($phonenumCorrect) >11)) {
		      $phonenumError = 'Required digit of eleven is needed for phone number';
			}else{			  
		
			$phonenumVerified = "verified";
		}
		
	}
}
	   
	  
	  
	  if(empty($address)){
			$addressError = 'Address cannot be empty';
	   }else{
			$addressCorrect = $address;
			
			if(strlen($addressCorrect) <= 5 || (strlen($addressCorrect) >30)) {
		      $addressError = 'required digit of thirty is needed for address';
			}else{			  
		
			$addressVerified = "verified";
		}
		
			
	   }
	  

	  if (((isset($_POST['gender']) && $_POST['gender'] == 'male') || (isset($_POST['gender']) && $_POST['gender'] == 'female'))) {
	   
	 
	 if($firstNameVerified == "verified"  && $lastNameVerified = 'verified' && $emailVerified == "verified" && $nationalityVerified == "verified" && $addressVerified == "verified" && $phonenumVerified == "verified"){
	 
	 $firstNameCorrectUpp = ucfirst($firstNameCorrect);
	 
	   
	   
	   
	 $sql_ins = "INSERT INTO `school`.`teachers` (`id`, `fname`, `lname`,  `email`, `gender`, `dob`, `nationality`,`address`,`phonenum`) VALUES (NULL, '$firstNameCorrectUpp', '$lastName', '$email', '".htmlspecialchars($_POST['gender'])."', '$dob', '$nationality', '$address', '$phonenum')";
	 
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
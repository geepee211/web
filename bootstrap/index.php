<?php 
session_start();
include_once("include\config.php");

      
	  if(isset($_POST['login'])){
	
     $login = $_POST["username"];
    $pwd = $_POST["password"];
$recordset = mysql_query("select * from students");
while($record = mysql_fetch_array($recordset)){
	if($login == $record["username"] && $pwd == $record["password"]) {
	
	$_SESSION["username"] = $record["username"];
	$_SESSION["id"] = $record["id"];
	$row=mysql_fetch_array($recordset);
					
				
	echo header('Location:studentMenu.php');
		mysql_close();
		die();
	
 }
	else
	   header("location:index.php?u=false");
	


} 
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Gitlinks | E School Management System</title>
<meta http-equiv="Content-Type" content="text/html;">
<!-- core CSS -->
    
<link rel="stylesheet" type="text/css" href="/bootstrap/css/menu_styles.css"/>	
</head>
<?php 
		  @$u=$_GET['u'];
		  if(@$u=="false"){
		  echo"<font color='red'>Incorrect Login details</font>";
		  }else{
		  }
		  ?>
<form name="form1" method="post" action="" onSubmit="return verify()">
<body bgcolor="#f2f2f2">
<div class="menubar">
                    <ul class="links">
                        <li class="active"><a href="#">Student Login</a></li>
                        <li class="active"><a href="teacherLogin.php">Teacher Login</a></li>
                        <li class="active"><a href="admin_login.php">Admin Login</a></li>
						</ul>
						</div> 
<table width="760" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:130px;"><tr>
   <td><img src="bootstrap/images/spacer.gif" width="153" height="1" border="0" alt=""></td>
   <td><img src="bootstrap/images/spacer.gif" width="257" height="1" border="0" alt=""></td>
   <td><img src="bootstrap/images/spacer.gif" width="350" height="1" border="0" alt=""></td>
   <td><img src="bootstrap/images/spacer.gif" width="1" height="1" border="0" alt=""></td>
  </tr>

<tr>
   <td colspan="3"><img name="login_r2_c1" src="/bootstrap/images/login_r2_c1.jpg" width="760" height="113" border="0" alt=""></td>
   <td><img src="/bootstrap/images/spacer.gif" width="1" height="113" border="0" alt=""></td>
</tr>
<tr>

    <td><img name="login_r3_c1" src="/bootstrap/images/login_r3_c1.jpg" width="153" height="137" border="0" alt=""></td>
   <td background="/bootstrap/images/login_r3_c2.jpg">
     <?php 
	
	
	echo "<script language = 'javascript'>";
	echo "function verify(){
	login = form1.username.value;
	password = form1.password.value;
	if(login == ''){
	alert('Enter Username');
	form1.username.focus();
	return false;
					}
	if(password == ''){
	alert('Enter Password');
	form1.password.focus();
	return false;
					}
	}
		function clearvalues(){
			 form1.username.value='';
	     	 form1.password.value='';
		     form1.username.focus();
		}	
		
</script>";					
?>
 

<table cellpadding="0" cellspacing="2">
<tr><td></td></tr><br>



<tr><td></td></tr>
  <tr>
<td align="left">Username</td>
<td align="center">
<input type = "text" name="username" >
</td>
</tr>
<tr><td align="left">Password</td>
<td align="center">
<input type = "password" name="password" >
</td>
</tr>
<tr><td></td></tr><tr><td></td></tr>
<tr>
<td></td>
<td align="center" >
  <input type="submit" name="login" value="  Login  ">  
  <input type="button" name="button1" value="  Clear " onClick="clearvalues()"></td>
</tr>
<tr></tr>
</table>


 
   </td>
   <td><img name="login_r3_c3" src="/bootstrap/images/login_r3_c3.jpg" width="350" height="137" border="0" alt=""></td>
   <td><img src="/bootstrap/images/spacer.gif" width="1" height="137" border="0" alt=""></td>
  </tr><tr>
   <td colspan="3"><img name="login_r4_c1" src="/bootstrap/images/login_r4_c1.jpg" width="760" height="37" border="0" alt=""></td>
   <td><img src="/bootstrap/images/spacer.gif" width="1" height="37" border="0" alt=""></td>
  </tr>
  

</table>
</form>            
</body>
</html>

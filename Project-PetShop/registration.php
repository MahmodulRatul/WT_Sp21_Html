<?php
	$fname="";
	$err_fname="";
	$lname="";
	$err_lname="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$email="";
	$err_email="";
	$number ="";
	$err_number="";
	$ad="";
	$err_ad="";
	$gender="";
	$err_gender="";
	$hasError=false;
	
	function validateEmail($email)
		{
		$pos_at = strpos($email,"@");
		$pos_dot = strpos($email,".",$pos_at+1);
		if($pos_at < $pos_dot)
			{
			return true;
			}
		return false;
		}
		
	function validPass($password)
	 {
		 $hasUpper=false;
		 $hasLower=false;
		 $hasNum=false;
		 $hasQM=false;
		 $hasHash=false;
		
		for($i=0; $i<strlen($password);$i++)
	     {
			 if(ctype_upper($password[$i]))
			 {
				 $hasUpper=true;
			 }
			 
			 if(ctype_lower($password[$i]))
			 {
				 $hasLower=true;
			 }
			 if($password[$i] >='0' && $password[$i]<='9')
			 {
                 $hasNum=true;
                
             }
			 
		     if($password[$i]=='#')
			 {
                 $hasHash=true;
                
             }
              if($password[$i]=='?')
			  {
                  $hasQM=true;
                
                }
                
                if($hasUpper && $hasLower && $hasHash || $hasQM && $hasNum)
				{
                    return true;
                }
            
            }
            return false;
            
            
            
        }
	
		if ($_SERVER["REQUEST_METHOD"] == "POST"){
		
			if (empty($_POST["fname"])){
				$err_fname="First Name Required";
				$hasError=true;
			}
			else{
				$fname=htmlspecialchars($_POST["fname"]);
			}
			if (empty($_POST["lname"])){
				$err_lname="Last Name Required";
				$hasError=true;
			}
			else{
				$lname=htmlspecialchars($_POST["lname"]);
			}
			if (empty($_POST["uname"])){
				$err_uname="Username Required";
				$hasError=true;
			}
			elseif (strlen($_POST["uname"])<6){
				$err_uname="Username must contain at least 6 characters ";
				$hasError=true;
			}
			elseif (strpos($_POST["uname"]," ")) {
				$err_uname="space is not allowed";
				$hasError=true;
			}
			else{
				$uname=htmlspecialchars($_POST["uname"]);
				
			}
			if(empty($_POST["pass"]))
		    {
			$err_pass="Password Required";
			$hasError=true;
		    }
			elseif(strlen($_POST["pass"])<8)
			{
                $err_pass="Password must be at least 8 characters";
				$hasError=true;
            }
			
		    elseif(!validPass($_POST["pass"]))
		   {

			$err_pass="Password Must Contain 1 Uppercase,1 Lowercase, 1 Number & (# or ?)";
			$hasError=true;
		    }
		     else
		     {
			$pass=$_POST["pass"];
		     }
		
			if (empty($_POST["email"])){
				$err_email="Email Required";
				$hasError=true;
			 }
			elseif(!validateEmail($_POST["email"]))
			{
				$err_email="Not a valid email";
				$hasError=true;
			}
			else
			{
				$email=htmlspecialchars($_POST["email"]);
			}
			
			if(empty($_POST["number"]))
		   {
			 $err_number="Number Required";
			 $hasError=true;
		   }
		   elseif(!is_numeric($_POST["number"]))
		   {
			 $err_number="Numaric Value required";
			 $hasError=true;
		    }
		   else
		   {
			 $number=htmlspecialchars($_POST["number"]);
		   }
			If (empty($_POST["ad"])){
				$err_ad="Address Required";
				$hasError=true;
			 }
			else{
				$ad=htmlspecialchars($_POST["ad"]);
			 }
			if(!isset($_POST["gender"])){
				$err_gender="Gender Required";
				$hasError=true;
			 }
			else{
				$gender=htmlspecialchars($_POST["gender"]);
			 }
			if(!$hasError)
		   {
			  header("Location:login.php");
		   }
		}
		
?>
<html>
       <title>SignUP</title>
	<head> 
	<style>
	.login-div{
		border:1px solid black;
		margin:auto;
		width:40%;
		margin-top:15%
	}
	</style>
	</head>
	<body>
	<div class="login-div">
		<fieldset>
		<legend align="center"><h1>Account Registration</h1></legend>
	<form action="" method="post">
			<table align="center"> 
			<h2 align="center">Personal Information</h2>	
				<tr>
					<td><span><b>First Name:<b></span></td>
					<td>:<input type="text" name="fname"value="<?php echo $fname;?>" placeholder="First Name">
						<span><?php echo $err_fname;?></span></td>
				</tr>
				<tr>
					<td><span><b>Last Name:</b></span></td>
					<td>:<input type="text" name="lname"value="<?php echo $lname;?>" placeholder="Last Name">
						<span><?php echo $err_lname;?></span></td>
				</tr>
				<tr>
					<td><span><b>Username:</b></span></td>
					<td>:<input type="text" name="uname"value="<?php echo $uname;?>" placeholder="Username">
						<span><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td><span><b>Address:</b></span></td>
					<td>:<input type="text" name="ad"value="<?php echo $ad;?>"placeholder="Address">
					<span><?php echo $err_ad;?></span></td>
				</tr>	
				
				<tr>
					<td><span><b>Gender:</b></span></td>
					<td>:<input type="radio" name="gender" value=""><?php echo $gender;?><span>Male</span>
					    <input type="radio" name="gender" value=""><?php echo $gender;?><span>Female</span><br>
						<span><?php echo $err_gender;?></span></td>
				</tr>
				
				</table>
				<table align="center">
				<h2 align="center">Sign Up</h2>
				<tr>
					<td><span><b>Email:</b></span></td>
					<td><input type="text" value="<?php echo $email;?>" name="email" placeholder="Mail Address">
						<span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td><span><b>Password:</b></span></td>
					<td><input type="password" name="pass" value="<?php echo $pass;?>" placeholder="Password"><br>
						<span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Phone:</b></span></td>
					<td><input type="text" name="number"value="<?php echo $number;?>"placeholder="Number">
					<span><?php echo $err_number;?></span></td>
				</tr>
				<tr>
					<td><input type="submit" name="CREATE AN ACCOUNT "value="Sign Up"></td>
				</tr>
			</table>
	</form>	
	</fieldset>
	</div>
	</body>
 </html>
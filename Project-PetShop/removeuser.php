<?php


     $fname="";
	 $err_fname="";
     $lname="";
	 $err_lname="";
	 $uname=""; 
	 $err_uname="";
	 $email="";
	 $err_email="";
	 $role="";
	 $err_role="";
	 $hasError=false;
	
	 
	 
	 
	 function validEmail($email)
	 {
		 $pos_at=strpos($email,"@");
		 $pos_dot=strpos($email,".",$pos_at+1);
		   if($pos_at < $pos_dot)
		   {
			   return true;
		   }
		 
	 }
	 
	  
	 
	 if ($_SERVER["REQUEST_METHOD"] == "POST"){
		
			if (empty($_POST["fname"])){
				$err_fname="First name required";
				$hasError=true;
			}
			else{
				$fname=htmlspecialchars($_POST["fname"]);
			}
			If (empty($_POST["lname"])){
				$err_lname="Last name required";
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
			else
			{
				$uname=htmlspecialchars($_POST["uname"]);
				
			}
			 if(empty($_POST["email"]))
		    {
			 $err_email="Email Required";
			 $hasError=true;
		    }
		     elseif(!validEmail($_POST["email"]))
		    {
			 $err_email="Not a valid Email";
			 $hasError=true;
		    }
            else
		   {
			$email=htmlspecialchars($_POST["email"]);
		   }
			if(!isset($_POST["role"]))
		    {
			$err_role="Role required";
			$hasError=true;
		    }
		    else
		    {
		     $role=htmlspecialchars($_POST["role"]);
		    }
			 
			if(!$hasError)
		   {
			  header("Location:allusers.php");
		   }



	 }




?>

<html>
      <head>
	  <title>Remove User</title>
	      <style>
		  .r-div
				{
					
				border:1px solid black;
				margin:auto;
				width:30%;
				margin-top:13%;
				
				}
		  
	       </style>
	  <head>
	  
	     <body>
		 <div class="r-div">
		 <fieldset>
        <legend align="center"><h1>Remove User</h1></legend>
		 
		    <form action="" method="post">
			   <table align="center">
			           <tr>
					        <td><b><span>First Name:</b></span></td>
							<td><input type="text" name="fname" value="<?php echo $fname;?>" size="" placeholder="First Name"><br>
							<span><?php echo $err_fname;?></span></td>
					    </tr>
						
					     <tr>
					        <td><span><b>Last Name:</b></span></td>
							<td><input type="text" name="lname" value="<?php echo $lname;?>" size="" placeholder="Last Name"><br>
							<span><?php echo $err_lname;?></span></td>
					    </tr>
					   
					   <tr>
				           <td><span><b>Username:</b></span></td>
					       <td><input type="text" name="uname" value="<?php echo $uname;?>" placeholder="Username"><br>
						    <span><?php echo $err_uname;?></span></td>
			          </tr>
					  
				
					   
						<tr>
					        <td><span><b>Email:</b></span></td>
							<td><input type="text" size="" name="email" value="<?php echo $email;?>" placeholder="Email"><br>
							<span><?php echo $err_email;?></span></td>
					   </tr>
					  
				
					   <tr>
					       <td><span><b>Role:</b></span></td>
						   <td>
						 <select name="role">
							           <option disabled selected>Choose One</option>
							            <option>Regular User</option> 
							            <option>Administrator</option>
										<option>Modurator</option>	  
										<option>Editor</option>
						</select>
						       <span><?php echo $err_role;?></span></td>
						</tr>
						
				        
					    <tr>
				             <td><input type="submit" name="submit "value="Remove User"></td>
				        </tr>    
							
					       
				</table>
             </form>
			 <div>
		  </fieldset>
		 </body>
		 
</html>
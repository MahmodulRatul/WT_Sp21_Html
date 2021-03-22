<?php


     $fname="";
	 $err_fname="";
	 $email="";
	 $err_email="";
	 $num="";
	 $err_num="";
	 $message="";
	 $err_message="";
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
			
			 if(empty($_POST["num"]))
		    {
			 $err_num="Number Required";
			 $hasError=true;
		    }
		    elseif(!is_numeric($_POST["num"]))
		   {
			 $err_num="Numaric Value required";
			 $hasError=true;
		    }
		   else
		    {
			 $num=htmlspecialchars($_POST["num"]);
		    }
			
			if(empty($_POST["message"]))
			{
			 $err_message="Write your Message";
			$hasError=true;
		    }
		    else
			{
		    $message=htmlspecialchars($_POST["message"]);
		     }
			 
			if(!$hasError)
		   {
			  header("Location:home.php");
		   }



	 }




?>

<html>
      <head>
	  <title>Contact Us</title>
	      <style>
		  .cca-div
				{
					
				border:1px solid black;
				margin:auto;
				width:25%;
				margin-top:13%;
				
				}
		  
	       </style>
	  <head>
	  
	     <body>
		 <div class="cca-div">
      <fieldset>
		<legend align="center"><h1>Contact Us</h1></legend>
		 
		    <form action="" method="post">
			   <table align="center">
			           <tr>
					        <td><span><b>Full Name:</b></span></td>
							<td><input type="text" name="fname" value="<?php echo $fname;?>" size="" placeholder="First Name"><br>
							<span><?php echo $err_fname;?></span></td>
					    </tr>
		
				
						<tr>
					        <td><span><b>Email:</b></span></td>
							<td><input type="text" size="" name="email" value="<?php echo $email;?>" placeholder="Email"><br>
							<span><?php echo $err_email;?></span></td>
					   </tr>
					 
				     <tr>
					           <td><span><b>Number:</b></span></td>
							   <td><input type="text" size="" name="num" value="<?php echo $num;?>" placeholder="Contect Number"><br>
							    <span><?php echo $err_num;?></span></td>
					</tr>	
				
	
					   <tr>
					          <td><span><b>Message:</b></span></td>
					           <td><textarea name="message" placeholder="Write Message"><?php echo $message;?></textarea><br>
					          <span><?php echo $err_message ?></span></td>
				                 </tr>
					   
				        
					    <tr>
				             <td><input type="submit" name="submit "value="Submit"></td>
				        </tr>    
							
					       
				</table>
             </form>
			 <div>
		 </fieldset>
		 </body>
		 
</html>
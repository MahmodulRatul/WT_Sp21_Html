<?php
     $name="";
	 $err_name="";
	 $email="";
	 $err_email="";
	 $stad="";
	 $err_stad="";
	 $city="";
	 $err_city="";
	 $paymentmethod="";
	 $err_paymentmethod="";
	 $dm="";
	 $err_dm="";
	 $num="";
	 $err_num="";
	 $pass="";
	 $err_pass="";
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
	 
	 
	 
	 
	  if($_SERVER["REQUEST_METHOD"] == "POST")
	 {
	
		if(empty($_POST["name"]))
		{
			$err_name="Name Required";
			$hasError=true;
			
		}
		elseif(strlen($_POST["name"])<4)
		{
			$err_name="Name Must be 4 Characters Long";
			$hasError=true;
		}
        else
		{
			$name=htmlspecialchars($_POST["name"]);
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
		
         if(empty($_POST["stad"]))
		 {
			 $err_stad="Street Name Required";
			 $hasError=true;
		 }
		 else
		 {
			 $stad=htmlspecialchars($_POST["stad"]);
		 }
	     if(empty($_POST["city"]))
		 {
			 $err_city="City Name Required";
			 $hasError=true;
		 }
		 else
		 {
			 $city=htmlspecialchars($_POST["city"]);
		 }
		 
		 if(!isset($_POST["paymentmethod"]))
		 {
			$err_paymentmethod="Payment Method required";
			$hasError=true;
		}
		else
		{
		$paymentmethod=$_POST["paymentmethod"];
		}

		 if(!isset($_POST["dm"]))
		 {
			 $err_dm="Select a Method";
			 $hasError=true;
		 }
		 else
		 {
			 $dm=htmlspecialchars($_POST["dm"]);
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
			$pass=htmlspecialchars($_POST["pass"]);
		     }
		if(!$hasError)
		{
			header("Location:home.php");
		}
	 }
?>



<html>
      <head>
	  <title>Payment</title>
	      <style>
		  .payment-div
				{
					
				border:1px solid black;
				margin:auto;
				width:22%;
				margin-top:15%;
				
				}
		  
	       </style>
	  <head>
	  
	     <body>
		 <div class="payment-div">
		 <fieldset>
        <legend align="center"><h1>Payment</h1></legend>
		 
		    <form action="" method="post">
			   <table align="center">
			           <tr>
					        <td><span><b>Name:</b></span></td>
							<td><input type="text" name="name" value="<?php echo $name;?>" size="" placeholder="Name"><br>
							<span><?php echo $err_name;?></span></td>
							
					   </tr>
						<tr>
					        <td><span><b>Email:</b></span></td>
							<td><input type="text" size="" name="email" value="<?php echo $email;?>" placeholder="Email"><br>
							<span><?php echo $err_email;?></span></td>
					   </tr>
					   <tr>
					        <td><span><b>Address</b></span></td>
					        <td><input type="text" name="stad" value="<?php echo $stad;?>" placeholder="Street Address"><br>
					        <span><?php echo $err_stad;?></span></td>
					
				</tr>
				<tr>
					   <td></td>
					   <td><input type="text" name="city" placeholder = "City" value="<?php echo $city;?>" placeholder = "City" size=""><br>
                           <span><?php echo $err_city;?></span></td>
					
					
				</tr>
				
					   <tr>
					       <td><span><b>Payment Method:</b></span></td>
						   <td>
						 <select name="paymentmethod">
							           <option disabled selected>Choose One</option>
							            <option>Bikash</option>
							            <option>Nogod</option>
							            <option>Debit Card</option>
							            <option>Credit Card</option>
											  
						</select>
						       <span><?php echo $err_paymentmethod;?></span></td>
						</tr>
					   <tr>
					         <td><span><b>Delivery Method:</b></span></td>
					         <td><input type="radio"  name="dm" value="<?php echo $dm;?>"> <span>Pre-Paid</span>
					             <input type="radio"  name="dm" value="<?php echo $dm;?>"> <span>Cash On Delivery</span><br>
								 <span><?php echo $err_dm;?></span></td>
				  	   </tr>
					 
					      <tr>
					        <td><span><b>Number:</b></span></td>
							<td><input type="text" size="" name="num" value="<?php echo $num;?>" placeholder="bikash/nogod/CCN/DCN"><br>
							    <span><?php echo $err_num;?></span></td>
							
					        </tr>	
					         <tr>
				                  <td><b><span>Password:</span></b></td>
					              <td><input type="password" value="<?php echo $pass;?>" name="pass" placeholder="Password"><br>
					              <span><?php echo $err_pass;?></span></td>
				            </tr>
				        
					    <tr>
				             <td><input type="submit" name="submit "value="Order Now"></td>
				        </tr>    
							
					       
				</table>
             </form>
			  </fieldset>
			 <div>
		 
		 </body>
		 
</html>
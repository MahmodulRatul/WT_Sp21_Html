<?php
	$uname="";
	$err_uname="";
	$email="";
	$err_email="";
	$address="";
	$err_address="";
	$rtype="";
	$err_rtype="";
	$rating="";
	$err_rating="";
	$comment="";
	$err_comment="";
	$hasError=false;
	
		if	($_SERVER["REQUEST_METHOD"]=="POST")
		{
			if (empty($_POST["uname"]))
			{
				$err_uname="**Username Required.";
				$hasError=true;
			}
			else if(strlen($_POST["uname"])<6)
			{
				$err_uname="**Username must be greater than 7 charachters.";
				$hasError=true;
			}
			else
			{
				$uname=htmlspecialchars($_POST["uname"]);
			}
			if (empty($_POST["address"]))
			{
				$err_address="**Address Required.";
				$hasError=true;
			}
			else if(strlen($_POST["address"])<6)
			{
				$err_address="**Address should be least 12 character.";
				$hasError=true;
			}
			else
			{
				$address=htmlspecialchars($_POST["address"]);
			}
			
			function validateEmail($email)
			{
				$pos_at = strpos($email,"@");
				$pos_dot = strpos($email,".",$pos_at+1);
				if ($pos_at < $pos_dot)
				{return true;}
				else
				return false;
			}
			if (empty($_POST["email"]))
			{
				$err_email="**Email Required.";
				$hasError=true;
			}
			 elseif(!validateEmail($_POST["email"]))
			{
				$err_email="**Email should contain '@' and a '.' after '@'";
				$hasError=true;
			}
			else
			{
				$email=htmlspecialchars($_POST["email"]);
			}
			
			if (!isset($_POST["rtype"]))
			{
				$err_rtype="**Rating type must be selected";
				$hasError=true;
			}
			else
			{
				$rtype=$_POST["rtype"];
			}
			if(!isset($_POST["rating"]))
			{
				$err_rating="**Please select a rating";
				$hasError=true;
			}
			else
			{
				$rating=$_POST["rating"];
			}
			
			if (empty($_POST["comment"]))
			{
				$err_comment="**Comment can not be blank";
				$hasError=true;
			}
			else
			{
				$comment=htmlspecialchars($_POST["comment"]);
			}
			 if(!$hasError)
		{
			header("Location: home.php");
		}
		}
?>
<html>
      <head>
	  <title>Review</title>
	      <style>
		  .re-div
				{
					
				border:1px solid black;
				margin:auto;
				width:20%;
				margin-top:15%;
				
				}
		  
	       </style>
	  <head>
	  
	     <body>
		 <div class="re-div">
		 <fieldset>
        <legend align="center"><h1>Customer Review</h1></legend>
		<form action="" method="post">
			<table>
				<tr>
					<td><span >Username</span></td>
					<td>:</td>
					<td><input type="text" name="uname" value="<?php echo $uname;?>" placeholder="Username"> </td><td><span><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td><span >Address</span></td>
					<td>:</td>
					<td><input type="text" name="address" value="<?php echo $address;?>" placeholder="Address"> </td><td><span><?php echo $err_address;?></span></td>
				</tr>
				<tr>
					<td><span >Email</span></td>
					<td>:</td>
					<td><input type="text" name="email" value="<?php echo $email;?>" placeholder="Email"> </td><td><span><?php echo $err_email;?></span></td>
				</tr>
					<td><span>Review Type</span></td>
					<td>:</td>
					<td>
					<select name="rtype">
					<option disabled selected>Choose One</option>
					<option>Product</option>
					<option>Service</option>
					<option>Delivery</option>
					<option>Others</option>
					</select></td><td><span><?php echo $err_rtype;?></span>
					</td>
				</tr>
				<tr>
					<td><span>Rating</span></td>
					<td>:</td>
					<td>
					<input type="radio" name="rating" value="Disagree"><span>1</span>
					<input type="radio" name="rating" value="Moderately Agree"><span>2</span>
					<input type="radio" name="rating" value="Agree"><span>3</span>
					<input type="radio" name="rating" value="Highly Agree"><span>4</span>
					<input type="radio" name="rating" value="Highly Agree"><span>5</span>
					</td>
					<td><span> <?php echo $err_rating;?></span></td><br>
				</tr>
				<tr>
					<td><span>Comment</span></td>
					<td>:</td>
					<td><textarea name="comment" ></textarea></td>
					<td><span><?php echo $err_comment;?></span></td>
				</tr>
				<tr>
					<td colspan="3" align="center">
					<br>
					<input type="Submit" name="submit" value="Submit">
					</td>
				</tr>
			</table>
			</fieldset>
			</div>
		</form>
		</center>
	</body>
</html>
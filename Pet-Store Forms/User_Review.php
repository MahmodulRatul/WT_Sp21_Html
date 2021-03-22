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
	
		if	($_SERVER["REQUEST_METHOD"]=="POST")
		{
			if (empty($_POST["uname"]))
			{
				$err_uname="**Username Required.";
			}
			else if(strlen($_POST["uname"])<8)
			{
				$err_uname="**Username must be greater than 7 charachters.";
			}
			else
			{
				$uname=htmlspecialchars($_POST["uname"]);
			}
			if (empty($_POST["address"]))
			{
				$err_address="**Address Required.";
			}
			else if(strlen($_POST["address"])<12)
			{
				$err_address="**Address should be least 12 character.";
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
			}
			elseif(!validateEmail($_POST["email"]))
			{
				$err_email="**Email should contain '@' and a '.' after '@'";
			}
			else
			{
				$email=htmlspecialchars($_POST["email"]);
			}
			
			if (!isset($_POST["rtype"]))
			{
				$err_rtype="**Rating type must be selected";
			}
			else
			{
				$rtype=$_POST["rtype"];
			}
			if(!isset($_POST["rating"]))
			{
				$err_rating="**Please select a rating";
			}
			else
			{
				$rating=$_POST["rating"];
			}
			
			if (empty($_POST["comment"]))
			{
				$err_comment="**Comment can not be blank";
			}
			else
			{
				$comment=htmlspecialchars($_POST["comment"]);
			}
		echo "Form Submitted."."<br>";
		echo "User name   : ".$uname."<br>";
		echo "Address     : ".$address."<br>";
		echo "Email       : ".$email."<br>";
		echo "Rating Type : ".$rtype."<br>";
		echo "Rating value: ".$rating."<br>";
		echo "Comment     : ".$comment."<br>";
		}
?>
<html>
	<head></head>
	<body>
		<center>
		<h2>User Review and Feedback</h2>
		<form action="" method="post">
			<table>
				<tr>
					<td><span >Username</span></td>
					<td>:</td>
					<td><input type="text" name="uname" value="<?php echo $uname;?>" placeholder="FirstName, LastName"> </td><td><span><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td><span >Address</span></td>
					<td>:</td>
					<td><input type="text" name="address" value="<?php echo $address;?>"> </td><td><span><?php echo $err_address;?></span></td>
				</tr>
				<tr>
					<td><span >Email</span></td>
					<td>:</td>
					<td><input type="text" name="email" value="<?php echo $email;?>"> </td><td><span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
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
					<input type="radio" name="rating" value="Disagree"><span>Disagree</span><br>
					<input type="radio" name="rating" value="Moderately Agree"><span>Moderately Agree</span><br>
					<input type="radio" name="rating" value="Agree"><span>Agree</span><br>
					<input type="radio" name="rating" value="Highly Agree"><span>Highly Agree</span><br>
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
		</form>
		</center>
	</body>
</html>
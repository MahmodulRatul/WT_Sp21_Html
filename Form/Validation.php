<?php
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$bio="";
	$err_bio="";
	$profession="";
	$err_profession="";
	$gender="";
	$err_gender="";
	$hobbies="";
	$err_hobbies="";
	
	/*error_reporting(E_ALL & E_STRICT);
	ini_set('display_errors', '1');
	ini_set('log_errors', '0');
	ini_set('error_log', './');*/
		if	($_SERVER["REQUEST_METHOD"]=="POST")
		{
			if (empty($_POST["uname"]))
			{
				$err_uname="**Username Required";
			}
			else if(strlen($_POST["uname"])<8)
			{
				$err_uname="**Username must be 8 charachters long";
			}
			else
			{
				$uname=$_POST["uname"];
			}
			if (empty($_POST["pass"]))
			{
				$err_pass="**Password Required";
			}
			 elseif(strpos($_POST["pass"],":"))
			{
				$err_pass="**Password should not contain ':'";
			}
			else
			{
				$pass=$_POST["pass"];
			}
			if (empty($_POST["bio"]))
			{
				$err_bio="**Bio can not be blank";
			}
			else
			{
				$bio=$_POST["bio"];
			}
			
			if (!isset($_POST["profession"]))
			{
				$err_profession="**Profession must be selected";
			}
			else
			{
				$profession=$_POST["profession"];
			}
			
			if(!isset($_POST["gender"]))
			{
				$err_gender="**Please select a gender";
			}
			else
			{
				$gender=$_POST["gender"];
			}
			
			if(!isset($_POST["hobbies"]))
			{
				$err_hobbies="**Least a hobby have to be selected";
			}
			else
			{
				$hobbies=$_POST["hobbies"];
			}
		/*echo "Username: ".$_POST["uname"]."<br>";
		echo "Password: ".$_POST["pass"]."<br>";
		echo "Gender: ".$_POST["gender"]."<br>";
		$arr=$_POST["hobbies"];$flag=0;
		echo "Hobbies: ";
		for($i=0;$i<count($arr);$i++)
		{
		$flag++;
		echo $flag."-".$arr[$i]."  ";
		}
		echo"<br>";
		echo "Profession: ".$_POST["profession"]."<br>";
		echo "Bio: ".$_POST["bio"]."<br>";*/
		}
?>
<html>
	<head></head>
	<body>
		<center>
		<h1>User Registration</h1>
		<form action="" method="post">
			<table>
				<tr>
					<td><span >Username</span></td>
					<td>: <input type="text" name="uname" value="<?php echo $uname;?>"> </td><td><span><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td><span>Password</span></td>
					<td>: <input type="password" name="pass" value="<?php echo $pass;?>"> </td><td><span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
				<td><span>Gender</span></td>
				<td>: <input type="radio" name="gender" value="Male"><span>Male</span>
				<input type="radio" name="gender" value="Female"><span>Female</span> </td><td><span> <?php echo $err_gender;?></span></td><br>
				</tr>
				<tr>
				<td><span>Hobbies</span></td>
					<td>: <input type="checkbox" value="Movies" name ="hobbies[]">Movies
					<input type="checkbox"value="Music" name ="hobbies[]">Music
					<input type="checkbox"value="Games" name ="hobbies[]">Games
					<input type="checkbox"value="Garden" name ="hobbies[]">Garden</td><td> <span><?php echo $err_hobbies;?></span></td></br>
				</tr>
				<tr>
				<td><span>Profession</span></td>
				<td>: <select name="profession">
					<option disabled selected>Choose One</option>
					<option>Teaching</option>
					<option>Service</option>
					<option>Business</option>
					</select> </td><td><span><?php echo $err_profession;?></span> </td>
				</tr>
				<tr>
				<td><span>Bio</span></td>
				<td>: <textarea name="bio" ></textarea></td>
				<td><span><?php echo $err_bio;?></span></td>
				</tr>
				<tr>
				<td>
				<input type="submit" name="submit" value="Submit">
				</td>
				</tr>
			</table>
		</form>
		</center>
	</body>
</html>
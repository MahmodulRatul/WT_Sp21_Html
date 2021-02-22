<html>
	<head></head>
	<body>
		<center>
		<h1>User Registration</h1>
		<form action="Submitted.php" method="post">
			<table>
				<tr>
					<td><span >Username</span></td>
					<td>:</td>
					<td><input type="text" name="uname"></td>
				</tr>
				<tr>
					<td><span>Password</span></td>
					<td>:</td>
					<td><input type="password" name="pass"></td>
				</tr>
				<tr>
				<td><span>Gender</span></td>
				<td>:</td>
				<td><input type="radio" name="gender" value="Male"><span>Male</span>
				<input type="radio" name="gender" value="Female">Female<br></td>
				</tr>
				<tr>
				<td><span>Hobbies</span></td>
				<td>:</td>
					<td><input type="checkbox" value="Movies" name ="hobbies[]">Movies
					<input type="checkbox"value="Music" name ="hobbies[]">Music
					<input type="checkbox"value="Games" name ="hobbies[]">Games
					<input type="checkbox"value="Garden" name ="hobbies[]">Garden</td></br>
				</tr>
				<tr>
				<td><span>Profession</span></td>
				<td>:</td>
				<td><select name="profession">
					<option disabled selected>Choose One</option>
					<option>Teaching</option>
					<option>Service</option>
					<option>Business</option>
					</select><br></td>
				</tr>
				<tr>
				<td><span>Bio</span></td>
				<td>:</td>
				<td><textarea name="bio"></textarea><br></td>
				</tr>
				<tr>
				<td>
				<input type="submit" value="Submit">
				</td>
				</tr>
			</table>
		</form>
		</center>
	</body>
</html>
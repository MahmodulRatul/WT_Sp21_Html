<html>
	<body>
	<center>
		<h1>Form Submitted</h1>
		<table>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><?php echo $_POST["uname"];?></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><?php echo $_POST["pass"];?></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>:</td>
			<td><?php echo $_POST["gender"];?></td>
		</tr>
		<tr>
			<td>Hobies</td>
			<td>:</td>
			<td><?php $arr=$_POST["hobbies"];$flag=0;
			for($i=0;$i<count($arr);$i++)
			{
			$flag++; echo $flag."-".$arr[$i]."  ";
			};?></td>
		</tr>
		<tr>
		<td>Profession</td>
		<td>:</td>
		<td><?php echo $_POST["profession"];?></td>
		</tr>
		<tr>
		<td>Bio</td>
		<td>:</td>
		<td><?php echo $_POST["bio"];?></td>
		</tr>
		</table>
	</center>
	</body>  
</html>
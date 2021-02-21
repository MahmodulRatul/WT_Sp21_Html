<html>
	<body>
	<center>
		<h1>Form Submitted</h1>
		<?php
			
			echo "Username: ".$_POST["uname"]."<br>";
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
			echo "Bio: ".$_POST["bio"]."<br>";
		?>
	</center>
	</body>  
</html>
<?php
	$onum="";
	$err_onum="";
	$cname="";
	$err_cname="";
	$pname="";
	$err_pname="";
	$reason="";
	$err_reason="";
	$hasError=false;
	
		if	($_SERVER["REQUEST_METHOD"]=="POST")
		{
			if (empty($_POST["onum"]))
			{
				$err_onum="**Order Number Required.";
					$hasError=true;
			}
			else if((strlen($_POST["onum"])<8)||(!is_numeric($_POST["onum"])))
			{
				$err_onum="**Order Number must be greater than 7 number.";
				$hasError=true;
			}
			else
			{
				$onum=htmlspecialchars($_POST["onum"]);
			}
			if (empty($_POST["cname"]))
			{
				$err_cname="**Customer Name Required.";
				$hasError=true;
			}
			else if(strlen($_POST["cname"])<8)
			{
				$err_cname="**Customer Name should be least 8 character.";
				$hasError=true;
			}
			else
			{
				$cname=htmlspecialchars($_POST["cname"]);
			}
			
			if (empty($_POST["pname"]))
			{
				$err_pname="**Product Name Required.";
				$hasError=true;
			}
			else if(strlen($_POST["pname"])<12)
			{
				$err_pname="**Product Name should be least 12 character.";
				$hasError=true;
			}
			else
			{
				$pname=htmlspecialchars($_POST["pname"]);
			}
			
			if (empty($_POST["reason"]))
			{
				$err_reason="**Reason can not be blank";
				$hasError=true;
			}
			else
			{
				$reason=htmlspecialchars($_POST["reason"]);
			}
			if(!$hasError)
		  {
			header("Location: allorders.php");
		  }
		
		echo "Form Submitted."."<br>";
		echo "Order Number : ".$onum."<br>";
		echo "Customer Name : ".$cname."<br>";
		echo "Product Name : ".$pname."<br>";
		echo "Reason : ".$reason."<br>";
		}
?>
<<html>
    <head>
	<title>Remove Order</title>
	
	     <style>
	            .ru-div
				{
					
				border:1px solid black;
				margin:auto;
				width:17%;
				margin-top:7%;
				
				}
 		 </style>
	</head>
	<body>
	<div class="ru-div">
	 <fieldset>
        <legend align="center"><h1>Remove Order </h1></legend>
		
		<form action="" method="post">
			<table border="0">
				<tr>
					<td><span >Order Number</span></td>
					<td> : </td>
					<td><input type="text" name="onum" value="<?php echo $onum;?>" placeholder="Order Number"> </td><td><span><?php echo $err_onum;?></span></td>
				</tr>
				<tr>
					<td><span >Customer Name</span></td>
					<td> : </td>
					<td><input type="text" name="cname" value="<?php echo $cname;?>" placeholder="Customer Name"> </td><td><span><?php echo $err_cname;?></span></td>
				</tr>
				
				<tr>
					<td><span >Product Name</span></td>
					<td> : </td>
					<td><input type="text" name="pname" value="<?php echo $pname;?>" placeholder="Product Name"> </td><td><span><?php echo $err_pname;?></span></td>
				</tr>
				
				<tr>
					<td><span>Reason</span></td>
					<td> : </td>
					<td><textarea name="reason" ?><?php echo $reason;?></textarea></td>
					<td><span><?php echo $err_reason;?></span></td>
				</tr>
				<tr>
					<td colspan="3" align="center">
					<br>
					<input type="Submit" name="submit" value="Remove">
					</td>
				</tr>
			</table>
			</fieldset>
			</div>
		</form>
		</center>
	</body>
</html>
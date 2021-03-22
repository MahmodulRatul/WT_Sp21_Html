<?php
	$onum="";
	$err_onum="";
	$price="";
	$err_price="";
	$pqty="";
	$err_pqty="";
	$cname="";
	$err_cname="";
	$pname="";
	$err_pname="";
	$status="";
	$err_status="";
	$reason="";
	$err_reason="";
	
		if	($_SERVER["REQUEST_METHOD"]=="POST")
		{
			if (empty($_POST["onum"]))
			{
				$err_onum="**Order Number Required.";
			}
			else if((strlen($_POST["onum"])<8)||(!is_numeric($_POST["onum"])))
			{
				$err_onum="**Order Number must be greater than 7 number.";
			}
			else
			{
				$onum=htmlspecialchars($_POST["onum"]);
			}
			
			if (empty($_POST["price"]))
			{
				$err_price="**Price can't be null.";
			}
			elseif((!is_numeric($_POST["price"])))
			{
				$err_price="**Price must be a number.";
			}
			else
			{
				$price=htmlspecialchars($_POST["price"]);
			}
			
			if (empty($_POST["pqty"]))
			{
				$err_pqty="**Quantity can't be null.";
			}
			else if((!is_numeric($_POST["pqty"])))
			{
				$err_pqty="**Quantity must be a number.";
			}
			else
			{
				$pqty=htmlspecialchars($_POST["pqty"]);
			}
			
			if (empty($_POST["cname"]))
			{
				$err_cname="**Customer Name Required.";
			}
			else if(strlen($_POST["cname"])<8)
			{
				$err_cname="**Customer Name should be least 8 character.";
			}
			else
			{
				$cname=htmlspecialchars($_POST["cname"]);
			}
			
			if (empty($_POST["pname"]))
			{
				$err_pname="**Product Name Required.";
			}
			else if(strlen($_POST["pname"])<12)
			{
				$err_pname="**Product Name should be least 12 character.";
			}
			else
			{
				$pname=htmlspecialchars($_POST["pname"]);
			}
			
			if (!isset($_POST["status"]))
			{
				$err_status="**Status must be selected";
			}
			else
			{
				$status=$_POST["status"];
			}
			
			if (empty($_POST["reason"]))
			{
				$err_reason="**Reason can not be blank";
			}
			else
			{
				$reason=htmlspecialchars($_POST["reason"]);
			}
		echo "Form Submitted."."<br>";
		echo "Order Number : ".$onum."<br>";
		echo "Product Name : ".$pqty."<br>";
		echo "Product Name : ".$price."<br>";
		echo "Customer Name : ".$cname."<br>";
		echo "Product Name : ".$pname."<br>";
		echo "Reason : ".$reason."<br>";
		echo "Order Status : ".$status."<br>";
		echo "Reason : ".$reason."<br>";
		}
?>
<html>
	<head></head>
	<body>
		<center>
		<h2>Edit Order Info</h2>
		<form action="" method="post">
			<table border="0">
				<tr>
					<td><span >Order Number</span></td>
					<td> : </td>
					<td><input type="text" name="onum" value="<?php echo $onum;?>"> </td><td><span><?php echo $err_onum;?></span></td>
				</tr>
				
				<tr>
					<td><span >Product Quantity</span></td>
					<td> : </td>
					<td><input type="text" name="pqty" value="<?php echo $pqty;?>"> </td><td><span><?php echo $err_pqty;?></span></td>
				</tr>
				
				<tr>
					<td><span >Price</span></td>
					<td> : </td>
					<td><input type="text" name="price" value="<?php echo $price;?>"> </td><td><span><?php echo $err_price;?></span></td>
				</tr>
				
				<tr>
					<td><span >Customer Name</span></td>
					<td> : </td>
					<td><input type="text" name="cname" value="<?php echo $cname;?>"> </td><td><span><?php echo $err_cname;?></span></td>
				</tr>
				
				
				<tr>
					<td><span >Product Name</span></td>
					<td> : </td>
					<td><input type="text" name="pname" value="<?php echo $pname;?>"> </td><td><span><?php echo $err_pname;?></span></td>
				</tr>
				
				<tr>
					<td><span>Activity/Status</span></td>
					<td>:</td>
					<td>
					<select name="status">
					<option disabled selected>Choose One</option>
					<option>Delivery In Process</option>
					<option>Order In Process</option>
					<option>Order Cancelled</option>
					</select></td><td><span><?php echo $err_status;?></span>
					</td>
				</tr>
				
				<tr>
					<td><span>Reason</span></td>
					<td> : </td>
					<td><textarea name="reason" ?></textarea></td>
					<td><span><?php echo $err_reason;?></span></td>
				</tr>
				<tr>
					<td colspan="3" align="center">
					<br>
					<input type="Submit" name="submit" value="Edit">
					</td>
				</tr>
			</table>
		</form>
		</center>
	</body>
</html>
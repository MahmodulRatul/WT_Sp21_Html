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
	$address="";
	$err_address="";
	$day="";
	$month="";
	$year="";
	$err_date="";
	$status="";
	$err_status="";
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
			
			if (empty($_POST["price"]))
			{
				$err_price="**Price can't be null.";
				$hasError=true;
			}
			elseif((!is_numeric($_POST["price"])))
			{
				$err_price="**Price must be a number.";
				$hasError=true;
			}
			else
			{
				$price=htmlspecialchars($_POST["price"]);
			}
			
			if (empty($_POST["pqty"]))
			{
				$err_pqty="**Quantity can't be null.";
				$hasError=true;
			}
			else if((!is_numeric($_POST["pqty"])))
			{
				$err_pqty="**Quantity must be a number.";
				$hasError=true;
			}
			else
			{
				$pqty=htmlspecialchars($_POST["pqty"]);
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
			
			if (empty($_POST["address"]))
			{
				$err_address="**Address Required.";
				$hasError=true;
			}
			else if(strlen($_POST["address"])<12)
			{
				$err_address="**Address should be least 12 character.";
				$hasError=true;
			}
			else
			{
				$address=htmlspecialchars($_POST["address"]);
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
			
			if (!isset($_POST["day"]))
			{
				$err_date="**Order Date must be selected";
				$hasError=true;
			}
			elseif (!isset($_POST["month"]))
			{
				$err_date="**Order Date must be selected";
				$hasError=true;
			}
			elseif (!isset($_POST["year"]))
			{
				$err_date="**Order Date must be selected";
				$hasError=true;
			}
			else
			{
				$day=$_POST["day"];
				$month=$_POST["month"];
				$year=$_POST["year"];
			}
			
			if (!isset($_POST["status"]))
			{
				$err_status="**Status must be selected";
				$hasError=true;
			}
			else
			{
				$status=$_POST["status"];
			}
			if(!$hasError)
		   {
			header("Location: allshops.php");
		    }
		echo "Form Submitted."."<br>";
		echo "Order Number : ".$onum."<br>";
		echo "Product Name : ".$pqty."<br>";
		echo "Product Name : ".$price."<br>";
		echo "Customer Name : ".$cname."<br>";
		echo "Product Name : ".$pname."<br>";
		echo "Order Date : ".$day."/".$month."/".$year."</br>";
		echo "Order Status : ".$status."<br>";
		}
?>
<html>
    <head>
	<title>Add Order</title>
	
	     <style>
	            .ao-div
				{
					
				border:1px solid black;
				margin:auto;
				width:20%;
				margin-top:7%;
				
				}
 		 </style>
	</head>
	<body>
	<div class="ao-div">
	 <fieldset>
        <legend align="center"><h1>Add Order</h1></legend>
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
					<td><span >Address</span></td>
					<td>:</td>
					<td><input type="text" name="address" value="<?php echo $address;?>"> </td><td><span><?php echo $err_address;?></span></td>
				</tr>
				
				
				<tr>
					<td><span >Product Name</span></td>
					<td> : </td>
					<td><input type="text" name="pname" value="<?php echo $pname;?>"> </td><td><span><?php echo $err_pname;?></span></td>
				</tr>
				
				<tr>
					<td><span>Order Date</span></td>
					<td>:</td>
					<td>
					<select name="day">
					<option disabled selected>Day</option>
					<?php
						for($i=1;$i<=31;$i++)
						{
							echo "<option>$i</option>";
						}
					?>
					</select>
					<select name="month">
					<option disabled selected>Month</option>
					<?php
						$mon= array("January","February","March","April","May","June","July","August","September","October","November","December");
						for($j=0;$j<count($mon);$j++)
						{
							echo "<option>$mon[$j]</option>";
						}
					?>
					</select>
					<select name="year">
					<option disabled selected>Year</option>
					<?php
						for($k=1971;$k<=2040;$k++)
						{
							echo "<option>$k</option>";
						}
					?>
				</select>
				</td>
				<td><?php echo "$err_date"?></td>
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
					<td colspan="3" align="center">
					<br>
					<input type="Submit" name="submit" value="Add Order">
					</td>
				</tr>
			</table>
		</form>
		 </fieldset>
		 </div>
		</center>
	</body>
</html>
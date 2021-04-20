<?php
session_start();
?>
<html>
    <head>
    <title>Homepage</title>
	<style>
	       #img-f
		    {
            width: 100%;
			}
	</style>
		   
	</head>
        <body>
		    <center><h1>Home</h1><center>
			<?php
			echo $_SESSION["loggedin"]
			?>
		    <h2>
			<span style="float:right;"><a style="text-decoration:none" href="login.php" target="_self" >Log Out &nbsp</a> </span> 
			</h2>
			<h2>
			<span style="float:right;"><a style="text-decoration:none" href="Admin.php" target="_self" >Admin &nbsp &nbsp</a> </span> 
			</h2><br><br>
			<span><a  style="text-decoration:none" href="Return_Product.php" target="_self" >Return Product &nbsp</a> </span>
			
	           
			  <center><img src = "add/pets.jpg" id="img-f" width="3080" height="800"/></center>
			   
			  <center><h1>Categories</h1><center>
			   

			    <h2>
                    <span><a target="_self" style="text-decoration:none" href="shops.php">Shops &nbsp</a> </span> 
                    <span><a target="_self" style="text-decoration:none" href="product.php">Product &nbsp</a> </span>
					<span><a target="_self" style="text-decoration:none" href="accessories.php">Accessories &nbsp</a> </span>
					<span><a target="_self" style="text-decoration:none" href="petcare.php">Pet Care &nbsp</a> </span>
                </h2>
			   
			   <h2>
					<span style="position: absolute; bottom:0px;right:0px;" ><a style="text-decoration:none" href="contactus.php" target="_self" >Contact us &nbsp</a> </span> 
					</h2>
        </body>
</html>
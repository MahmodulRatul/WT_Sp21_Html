<?php

     $pname="";
	 $err_pname="";
	 $type="";
	 $err_type="";
	 $quantity="";
	 $err_quantity="";
	 $price="";
	 $err_price="";
	 $status="";
	 $err_status="";
	 $info="";
	 $err_info="";
	 $hasError=false;
	  
	 
	 if ($_SERVER["REQUEST_METHOD"] == "POST"){
		
			if (empty($_POST["pname"])){
				$err_pname="*Product name required";
				$hasError=true;
			}
			else{
				$pname=htmlspecialchars($_POST["pname"]);
			}
			if(!isset($_POST["type"]))
		    {
			$err_type="*Type required";
			$hasError=true;
		    }
		    else
		    {
		     $type=htmlspecialchars($_POST["type"]);
		    }
			 if(empty($_POST["quantity"]))
		    {
			 $err_quantity="*Quantity Required";
			 $hasError=true;
		    }
		    elseif(!is_numeric($_POST["quantity"]))
		   {
			 $err_quantity="*Numaric Value required";
			 $hasError=true;
		    }
		   else
		    {
			 $quantity=htmlspecialchars($_POST["quantity"]);
		    }
			if(empty($_POST["price"]))
		    {
			 $err_price="*Price Required";
			 $hasError=true;
		    }
		    elseif(!is_numeric($_POST["price"]))
		   {
			 $err_price="*Numaric Value required";
			 $hasError=true;
		    }
		   else
		    {
			 $price=htmlspecialchars($_POST["price"]);
		    }
			if(!isset($_POST["status"]))
		    {
			$err_status="*Status required";
			$hasError=true;
		    }
		    else
		    {
		     $status=htmlspecialchars($_POST["status"]);
		    }
			if(empty($_POST["info"]))
			{
			$err_info="Information Required";
			$hasError=true;
		    }
		    else
			{
		    $info=htmlspecialchars($_POST["info"]);
		     }
			 
			if(!$hasError)
		   {
			  header("Location:allproducts.php");
		   }



	 }




?>

<html>
      <head>
	  <title>Edit Product</title>
	      <style>
		  .editproduct-div
				{
					
				border:1px solid black;
				margin:auto;
				width:30%;
				margin-top:13%;
				
				}
		  
	       </style>
	  <head>
	  
	     <body>
		 <div class="editproduct-div">
		 <fieldset>
        <legend align="center"><h1>Edit Product</h1></legend>
		    <form action="" method="post">
			   <table align="center">
			           <tr>
					        <td><b><span>Product Name:</b></span></td>
							<td><input type="text" name="pname" value="<?php echo $pname;?>" size="" placeholder="Product Name"><br>
							<span><?php echo $err_pname;?></span></td>
					    </tr>
					   
					   <tr>
					       <td><span><b>Type of product:</b></span></td>
						   <td>
						 <select name="type">
							           <option disabled selected>Choose One</option>
							            <option>Cat Food</option> 
							            <option>Dog Food</option>
										<option>Bird Food</option>	  
										<option>Fish Food</option>
										<option>Cat Accessories</option> 
							            <option>Dog Accessories</option>
										<option>Bird Accessories</option>	  
										<option>Fish Accessories</option>
						</select>
						       <span><?php echo $err_type;?></span></td>
						</tr>
						
				     <tr>
					           <td><span><b>Quantity:</b></span></td>
							   <td><input type="text" size="" name="quantity" value="<?php echo $quantity;?>" placeholder="Quantity"><br>
							    <span><?php echo $err_quantity;?></span></td>
					</tr>	
					<tr>
					
					           <td><span><b>Price:<b></span></td>
							   <td><input type="text" size="" name="price" value="<?php echo $price;?>" placeholder="Price"><br>
							    <span><?php echo $err_price;?></span></td>
					</tr>	
					<tr>
					       <td><span><b>Status:</b></span></td>
						   <td>
						 <select name="status">
							           <option disabled selected>Choose One</option>
							            <option>Available</option> 
							            <option>Not Available</option>
						</select>
						       <span><?php echo $err_status;?></span></td>
						</tr>
					   <tr>
					          <td><span><b>Edit Info:</b></span></td>
					           <td><textarea name="info" placeholder="Info"><?php echo $info;?></textarea><br>
					          <span><?php echo $err_info ?></span></td>
				                 </tr>
					   
				        
					    <tr>
				             <td><input type="submit" name="submit "value="Done Edit"></td>
				        </tr>    
							
					       
				</table>
             </form>
			 <div>
		 </fieldset>
		 </body>
		 
</html>
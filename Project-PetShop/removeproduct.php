<?php

     $pname="";
	 $err_pname="";
	 $type="";
	 $err_type="";
	 $quantity="";
	 $err_quantity="";
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
			if(!$hasError)
		   {
			  header("Location:allproducts.php");
		   }



	 }




?>

<html>
      <head>
	  <title>Remove Product</title>
	      <style>
		  .removeproduct-div
				{
					
				border:1px solid black;
				margin:auto;
				width:30%;
				margin-top:13%;
				
				}
		  
	       </style>
	  <head>
	  
	     <body>
		 <div class="removeproduct-div">
		  <fieldset>
        <legend align="center"><h1>Remove Product</h1></legend>
		    <form action="" method="post">
			   <table align="center">
			           <tr>
					        <td><span><b>Product Name:</b></span></td>
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
					           <td><span><b>Quantity:</b></span><td>
							   <td><input type="text" size="7" name="quantity" value="<?php echo $quantity;?>" placeholder="Remove Qty"><br>
							    <span><?php echo $err_quantity;?></span></td>
					</tr>	
					
				             <td><input type="submit" name="submit "value="Remove Product"></td>
				        </tr>    
							
					       
				</table>
             </form>
			 <div>
		 </fieldset>
		 </body>
		 
</html>
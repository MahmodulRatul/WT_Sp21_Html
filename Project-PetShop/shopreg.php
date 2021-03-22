<?php
        $sname="";
        $err_sname="";
        $Rday="";
        $Ryear="";
        $Rmonth="";
        $err_Rday="";
        $err_Ryear="";
        $err_Rmonth="";
        $email="";
        $err_email="";
        $num="";
        $err_num="";
        $stad="";
	    $err_stad="";
	    $city="";
	    $err_city="";
		$Typesofpet="";
		$err_Typesofpet="";
		$Typesofshop="";
		$err_Typesofshop="";
		$hasError=false;
		
		
		if($_SERVER['REQUEST_METHOD']=='POST'){
            
            if(empty($_POST["sname"])){
                $err_sname="*Shop name Required";
				$hasError=true;
                
            }
            else if(strlen($_POST["sname"]) <8){
                $err_sname="*Shop name should be at least 8 characters";
				$hasError=true;
                ;
            }
            else{
                $sname=htmlspecialchars($_POST["sname"]);
            }
            

            if(empty($_POST["email"])){
               $err_email="*Please enter email";
			   $hasError=true;
            }

            else{
                $s=strpos($_POST["email"],"@");
                if($s!=false){
                    $t=strpos($_POST["email"],".", $s+1);
                    if($t!=false){
                        $email=$_POST["email"];
                    }
                    else{
                        $err_email="*Invalid email";
                    }
                }
                else{
                    $err_email="*Invalid email";
                }
            }

            if(empty($_POST["num"]))
          {
             $err_num="Number Required";
             $hasError=true;
          }
           elseif(!is_numeric($_POST["num"]))
          {
             $err_num="*Numaric Value required";
             $hasError=true;
          }
         else
          {
             $num=$_POST["num"];
          }

            if(empty($_POST["stad"]))
		    {
			 $err_stad="Street Name Required";
			 $hasError=true;
		   }
		   else
		   {
			 $stad=htmlspecialchars($_POST["stad"]);
		   }
	       if(empty($_POST["city"]))
		   {
			 $err_city="City Name Required";
			 $hasError=true;
		   }
		   else
		   {
			 $city=htmlspecialchars($_POST["city"]);
		   }



            if(($_POST["day"])=="Day"){
				$err_Rday="*Please select Day";
				$hasError=true;
			}
            else{
                $Rday=$_POST["day"];
            }

            if(($_POST["month"])=="Month"){
				$err_Rmonth="*Please select Month";
				$hasError=true;
			}
            else{
                $Rmonth=$_POST["month"];
            }

            if(($_POST["year"])=="Year"){
				$err_Ryear="*Please select Year";
				$hasError=true;
			}
            else{
                $Ryear=$_POST["year"];
            }
			 if(!isset($_POST["Typesofpet"]))
		    {
			 $err_Typesofpet="[This field can not be skipped]";
			 $hasError=true;
		    }
		    else
		    {
			 $Typesofpet=$_POST["Typesofpet"];
		    }
             if(!isset($_POST["Typesofshop"]))
		    {
			 $err_Typesofshop="[This field can not be skipped]";
			 $hasError=true;
		    }
		    else
		    {
			 $Typesofshop=$_POST["Typesofshop"];
		    }
            if(!$hasError)
		    {
			header("Location: shop.php");
		    }
           
        }
    ?>


<html>
<head>
<title>Shop Registration</title>
	
	     <style>
	            .login-div
				{
					
				border:1px solid black;
				margin:auto;
				width:18%;
				margin-top:17%;
				
				}
 		 </style>
</head>
<body>

     <div class="login-div">
    <fieldset>
        <legend align="center"><h1>Shop Registration </h1></legend>
        <form action="" method="post">
            <table>
                <tr>
                    <td><Span><b>Shop Name:</b></Span></td>
                    <td><input type="text" placeholder="Shop Name" value=" <?php echo $sname; ?> " name="sname" > 
                    <span><?php echo $err_sname; ?></span></td>
                </tr>
			
				  <tr>
					        <td><span><b>Shop Address</b>:</span></td>
					        <td><input type="text" name="stad" value="<?php echo $stad;?>" placeholder="Street Address">
					        <span><?php echo $err_stad;?></span></td>
					
				       </tr>
				 <tr>
					   <td></td>
					   <td><input type="text" name="city" placeholder = "City" value="<?php echo $city;?>" placeholder = "City" size="">
                           <span><?php echo $err_city;?></span></td>
				</tr>
                
				<tr>
	                <td><span><b>Types of Shop:</b></span></td>
	                 <td><select name="Typesofshop">
	                     <option disabled selected>Chose One</option>
	                     <option>Pet Food</option>
	                     <option>Pet Accessories</option>
	                     <option>Other</option>
		               
	                     </select>
	                     <span><?php echo $err_Typesofshop;?></span><br>
		                  </td>
	                      </tr>
	  
                
               
                <tr>
				<tr>
	                <td><span><b>Types of pet:</b></span></td>
	                 <td><select name="Typesofpet">
	                     <option disabled selected>Chose One</option>
	                     <option>Cats</option>
	                     <option>Dogs</option>
	                     <option>Birds</option>
		                 <option>Fish</option>
						 <option>All</option>
	                     </select>
	                     <span><?php echo $err_Typesofpet;?></span><br>
		                  </td>
	                      </tr>
	  
                
               
                <tr>
                <td><span><b>Email:</b></span></td>
                    <td><input type="text" placeholder="Email" value="<?php echo $email; ?>" name="email"> 
                    <span><?php echo $err_email; ?></span></td>
                </tr>

                <tr>
                          <td><span><b>Phone Number:</b></span></td>
                           <td><input type="text" size="" name="num" value="<?php echo $num;?>" placeholder="Phone number">
                             <span><?php echo $err_num;?></span></td>

                            </tr>
                
                <td><b>Registration Date:</b></td>
						<td>
							<select name="day" value="<?php echo $day;?>">
								<option>Day</option>
								
								<?php
									for($i=1;$i<=31;$i++){
										echo "<option>$i</option>";	
									}
								?>
							</select>
							<select name="month" value ="<?php echo $bmonth?>">
								<option>Month</option>
								
								<?php
								    $month = array("January","February","March","April","May","June","July","August","September","October","November","December");
									foreach($month as $v){
										echo "<option>$v</option>";
										
									}
								?>
							</select>
                            <select name="year" value ="<?php echo $byear?>">
								<option>Year</option>
								
								<?php
									for($i=1970;$i<=2021;$i++){
										echo "<option>$i</option>";	
									}
								?>
							</select>
                            <span> <?php echo $err_Rday;?> </span>
                            <span> <?php echo $err_Rmonth;?> </span>
                            <span> <?php echo $err_Ryear;?> </span>
						</td>
                </tr>
                
             
                
					<tr>
						<td align="center" colspan="2"><input type="submit" name="submit" value="Register"></td>
				</tr>



            </table>
        </form>
        
    </fieldset>
   </div>

</body>
</html>
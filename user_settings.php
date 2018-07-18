<!DOCTYPE html>
<html>
<head>
    <title>||User Page||</title>
</head>
<body>
    <table align = "center"   width= 100% >
        <tr>
            <td width= 20%>
                <a href="index.php"><img style="height: 60px; width:200px;" src="assets/logo/Fotur.png"></a>
            </td>
            <td colspan="2" width="50%" align="center">
                <form action="v.php" method="get">
                    <input type="text" name="name" style="width: 500px; height: 30px" >
                    <input type="submit"  value="Search" name= "search" style="width: 140px; height: 35px">
                </form>       
            </td>
            <td style="width: 50px; height:30px" align="center">
                <table>
                    <tr><td><a href="cart.php"><img src="cart_s.png"></a></td></tr>
                    <tr><td align="center"><a href="cart.php"><strong>Cart</strong></a></td></tr>
                </table>
                    

            </td>
            <td align="center" width="25%">
                <h2><a href="sign_in_up.php">Logout</a></h2>
                     
            </td>
        </tr>
        <tr>
            <!-- <td >
                <h2><a href="products.php">Products</a></h2>
                <ul>
                    <li><a href="p_mobile.php">Mobile</a></li>
                    <li><a href="p_headPhone.php">HeadPhone</a></li>
                    <li><a href="p_charger.php">Charger</a></li>
                </ul>
            </td> -->
    		
			<!-- part for home page  starts-->
			<td colspan="3" align="center">
				<h3 align="center">USER Setting</h3>
			<table align="center"  width="80%">
				<?php
					if(isset($_POST["submit"]))
					{ echo "<tr><td><h5>Hello " ;
				echo $_POST["user_name"]."</h5></td></tr>";
								}
				?>
				<tr>
					<td align="center" height="50px"; width="100px">ID</td>
					<td  height="50px"; width="100px">007</td>
				</tr>
				<tr>
					<td align="center" height="50px"; width="100px">Name</td>
					<td  height="50px"; width="100px">Mr. X</td>
					<td align="center" height="50px"; width="100px">
						<input type="text" name="name" value="Mr. X" >
					</td>
					<td align="center" height="50px"; width="100px">
						<button height="50px"; width="100px">Update</button>
					</td>
				</tr>
				<tr>
					<td align="center" height="50px"; width="100px">USER NAME</td>
					<td  height="50px"; width="100px">Dragon Shakil</td>
					<td align="center" height="50px"; width="100px">
						<input type="text" name="user_name" value="Dragon Shakil" >
					</td>
					<td align="center" height="50px"; width="100px">
						<button height="50px"; width="100px">Update</button>
					</td>
				</tr>
				<tr>
					<td align="center" height="50px"; width="100px">DOB</td>
					<td  height="50px"; width="100px">12-08-1991</td>
					<td align="center" height="50px"; width="100px">
						<input type="text" name="dob" value="12-08-1991" >
					</td>
					<td align="center" height="50px"; width="100px">
						<button height="50px"; width="100px">Update</button>
					</td>
					
				</tr>
				<tr>
					<td align="center" height="50px"; width="100px">Gender</td>
					<td  height="50px"; width="100px">male</td>
					
				</tr>
				<tr>
					<td align="center" height="50px"; width="100px">Address</td>
					<td height="50px"; width="100px">H#40,R#10,Section#6,Mirpur</td>
					<td align="center" height="50px"; width="100px">
						<input type="text" name="dob" value="12-08-1991" >
					</td>
					<td align="center" height="50px"; width="100px">
						<button height="50px"; width="100px">Update</button>
					</td>

					
				</tr>
				<tr>
					<td align="center" height="50px"; width="100px">City</td>
					<td height="50px"; width="100px">Dhaka</td>
					<td align="center" height="50px"; width="100px">
						<input type="text" name="dob" value="Dhaka" >
					</td>
					<td align="center" height="50px"; width="100px">
						<button height="50px"; width="100px">Update</button>
					</td>
					
				</tr>
				<tr>
					<td align="center" height="50px"; width="100px">Post code</td>
					<td height="50px"; width="100px">3017</td>
					<td align="center" height="50px"; width="100px">
						<input type="text" name="dob" value="3017" >
					</td>
					<td align="center" height="50px"; width="100px">
						<button height="50px"; width="100px">Update</button>
					</td>
					
				</tr>
				<tr>
					<td align="center" height="50px"; width="100px">Country</td>
					<td height="50px"; width="100px">Bangladesh</td>
					<td align="center" height="50px"; width="100px">
						<input type="text" name="dob" value="Bangladesh" >
					</td>
					<td align="center" height="50px"; width="100px">
						<button height="50px"; width="100px">Update</button>
					</td>
				</tr>
        
			</table>
    		

			</td>
			
    		

    		<!-- part for home page ends -->
		</tr>
        
        <tr>
        <td colspan="2" >
            <h2>Let us help you</h2>
            <ul>
                <li><a href="help.php">Help Center</a></li>
                <li><a href="customer_care.php">Customer Care</a></li>
                <li><a href="contact_us.php">Contact Us</a></li>
            </ul>   
        </td>
        <td colspan="2" >
            <h2>Get to know us</h2>
            <ul>
                <li><a href="about.php">About us</a></li>
                <li><a href="terms_condition.php">Terms & Conditions</a></li>
                <li><a href="privacy_agreement.php">Privacy Agreement</a></li>
            </ul>
        </td>
        <td>
            <h2>New to Fotur?</h2>Suscribe to our newsletter for new products and offers
            <form action="index.php" method="post">
                <input type="text" name="sus" placeholder="Enter Your Email Address" style="width: 300px; height: 30px" >
                <input type="submit"  value="Suscribe" name= "submit" style="width: 140px; height: 35px">
            </form> 
       <?php  
            if(isset($_POST["submit"]))
            {
                        if(!filter_var($_POST["sus"], FILTER_VALIDATE_EMAIL))
                        {
                            echo"invalid email addres";
                        }
                        else{echo "Successfully Submitted !!";}
                    
            }
            else
            {
                echo "We will only send mail to you about the products you are interested in. :-)";
            }   
        ?> 
        </td>
        </tr>

        <tr>
            <td align = "center" colspan="5" >
            Fotur Inc. © 2018 All Rights Reserved.
            </td>       
        </tr>
    
    </table>
</body>
</html>
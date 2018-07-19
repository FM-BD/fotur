<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3 >You are login as ADMIN</h3>
	<a href="sign_in_up.php"><button>LOGOUT</button></a>
	
	<table align="center" width="80%" border="1" >
		<tr>
			<td align="Center">
				Product:
			</td>
		</tr>
		<tr>
			<td  align="right" width="30%">
				ADD PRODUCT 
			</td>
			<td align="right" width="10%">:</td>
			<td align="left" width="40%">
				<a href="add_product.php"><button style="height: 30px;width: 200px;"> Add Product</button></a>
			</td>
		</tr>

		<tr>
			<td  align="right" width="30%">
				REMOVE / MODIFY PRODUCT 
			</td>
			<td align="right" width="10%">:</td>
			<td align="left" width="40%">
				<a href="remove_modify_product.php"><button style="height: 30px;width: 200px;">
				Remove/Modify product </button></a>
			</td>
		</tr>
		<tr>
			<td  align="right" width="30%">
				ADD OFFER 
			</td>
			<td align="right" width="10%">:</td>
			<td align="left" width="40%">
				<a href="add_offer.php"><button style="height: 30px;width: 200px;">Add Offer </button></a>
			</td>
		</tr>
		<tr>
			<td align="center">
				User
			</td>
		</tr>
		<tr>
			<td  align="right" width="30%">
				USER INFORMATION LIST 
			</td>
			<td align="right" width="10%">:</td>
			<td align="left" width="40%">
				<a href="user_information_list.php"><button style="height: 30px;width: 200px;">GO</button></a>
			</td>
		</tr>

		<tr>
			<td  align="right" width="30%">
				REMOVE / MODIFY USER 
			</td>
			<td align="right" width="10%">:</td>
			<td align="left" width="40%">
				<a href="remove_modify_user.php"><button style="height: 30px;width: 200px;">
				Remove/Modify user </button></a>
			</td>
		</tr>


	</table>

</body>
</html> -->


<!-- <!DOCTYPE html>
<html>
<head>
	<title>Portal Page</title>
</head>
<body>
	<h3 align="center">USER INFORMATION</h3>
	<table align="center"  width="80%">
		<tr>
			<td align="center" height="50px"; width="100px">ID</td>
			<td  height="50px"; width="100px">xx</td>
		</tr>
		<tr>
			<td align="center" height="50px"; width="100px">Name</td>
			<td  height="50px"; width="100px">ABC</td>
		</tr>
		<tr>
			<td align="center" height="50px"; width="100px">USER NAME</td>
			<td  height="50px"; width="100px">$$$$$</td>
		</tr>
		<tr>
			<td align="center" height="50px"; width="100px">DOB</td>
			<td  height="50px"; width="100px">dd-mm-yyyy</td>
			
		</tr>
		<tr>
			<td align="center" height="50px"; width="100px">Gender</td>
			<td  height="50px"; width="100px">male</td>
			
		</tr>
		<tr>
			<td align="center" height="50px"; width="100px">Address</td>
			<td height="50px"; width="100px">H#40,R#10,Section#6,Mirpur</td>
			
		</tr>
		<tr>
			<td align="center" height="50px"; width="100px">City</td>
			<td height="50px"; width="100px">Dhaka</td>
			
		</tr>
		<tr>
			<td align="center" height="50px"; width="100px">Post code</td>
			<td height="50px"; width="100px">3017</td>
			
		</tr>
		<tr>
			<td align="center" height="50px"; width="100px">Country</td>
			<td height="50px"; width="100px">Bangladesh</td>
		</tr>
		
	</table>				
</body>
</html> -->

<?php 

session_start();
$page = "sign_in_up.php";
function fnx($page) {
    header("location: " . $page);
}


if (isset($_SESSION['user_name'])) {
 	# code...
 	$var = 0;
 }
else
{
	fnx($page);
}


 ?>

<!DOCTYPE html>
<html>
<head>
    <title>||Home Page||</title>
</head>
<body>
    <table align = "center"   width= 100% >
        <tr>
            <td width= 20%>
                <a href="index.php"><img style="height: 60px; width:200px;" src="assets/logo/Fotur.png"></a>
            </td>
            <td colspan="2" width="50%" align="center">
                <form action="user_admin.php" method="get">
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
            	<form method="post" action="user_admin.php">
            		<input type="submit" name="logout" value="Logout">
            	</form>
 			<?php if(isset($_POST['logout']))
                    {
                        session_destroy();
                        echo "<meta http-equiv=\"refresh\" content=\"0;URL=user_admin.php\">";
                    }
                    else
                    {
                        $var =1;
                    }

?>

                 
                     
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
			<td colspan="5" align="left">
				<h3 align="center">USER INFORMATION</h3>
			<table align="center"  width="80%">
				<?php
					 echo "<tr><td><h4>Hello " ;
				echo $_SESSION['user_name']."</h4></td></tr>";
								
				?>
				<tr>
					<td align="center" height="50px"; width="100px">ID</td>
					<td  height="50px"; width="100px"><?php echo $_SESSION['id']; ?></td>
				</tr>
				<tr>
					<td align="center" height="50px"; width="100px">Name</td>
					<td  height="50px"; width="100px"><?php echo "Mr. ".$_SESSION['first_name']." ".$_SESSION['last_name']; ?></td>
				</tr>
				<tr>
					<td align="center" height="50px"; width="100px">USER NAME</td>
					<td  height="50px"; width="100px"><?php echo $_SESSION['user_name']; ?></td>
				</tr>
				<tr>
					<td align="center" height="50px"; width="100px">DOB</td>
					<td  height="50px"; width="100px"><?php echo $_SESSION['dob']; ?></td>
					
				</tr>
				<tr>
					<td align="center" height="50px"; width="100px"><?php echo $_SESSION['gender']; ?></td>
					<td  height="50px"; width="100px">male</td>
					
				</tr>
				<tr>
					<td align="center" height="50px"; width="100px">Address</td>
					<td height="50px"; width="100px"><?php echo $_SESSION['address']; ?></td>
					
				</tr>
				<tr>
					<td align="center" height="50px"; width="100px">City</td>
					<td height="50px"; width="100px"> <?php $_SESSION['city']; ?></td>
					
				</tr>
				<tr>
					<td align="center" height="50px"; width="100px">Postal Code</td>
					<td height="50px"; width="100px"><?php $_SESSION['postal_code']; ?></td>
					
				</tr>
				<tr>
					<td align="center" height="50px"; width="100px">Country</td>
					<td height="50px"; width="100px"><?php $_SESSION['country']; ?></td>
				</tr>
				<tr>
					<td align="center" height="50px"; width="100px"><a href="user_settings.php"><STRONG>Account Settings</STRONG></a></td>
				</tr>
				<?php
					if(isset($_POST["submit"]))
					{
					if($_POST["user_name"] == "admin")
						{
							echo "

							
		
		<tr>
			<td align=\"Center\">
				<h2>Product:</h2>
			</td>
		</tr>
		<tr>
			<td  align=\"right\" width=\"30%\">
				ADD PRODUCT 
			</td>
			<td align=\"right\" width=\"10%\">:</td>
			<td align=\"left\" width=\"40%\">
				<a href=\"add_product.php\"><button style=\"height: 30px;width: 200px;\"> Add Product</button></a>
			</td>
		</tr>

		<tr>
			<td  align=\"right\" width=\"30%\">
				REMOVE / MODIFY PRODUCT 
			</td>
			<td align=\"right\" width=\"10%\">:</td>
			<td align=\"left\" width=\"40%\">
				<a href=\"remove_modify_product.php\"><button style=\"height: 30px;width: 200px;\">
				Remove/Modify product </button></a>
			</td>
		</tr>
		<tr>
			<td  align=\"right\" width=\"30%\">
				ADD OFFER 
			</td>
			<td align=\"right\" width=\"10%\">:</td>
			<td align=\"left\" width=\"40%\">
				<a href=\"add_offer.php\"><button style=\"height: 30px;width: 200px;\">Add Offer </button></a>
			</td>
		</tr>
		<tr>
			<td align=\"center\">
				<h2>User</h2>
			</td>
		</tr>
		<tr>
			<td  align=\"right\" width=\"30%\">
				USER INFORMATION LIST 
			</td>
			<td align=\"right\" width=\"10%\">:</td>
			<td align=\"left\" width=\"40%\">
				<a href=\"user_information_list.php\"><button style=\"height: 30px;width: 200px;\">GO</button></a>
			</td>
		</tr>

		<tr>
			<td  align=\"right\" width=\"30%\">
				REMOVE / MODIFY USER 
			</td>
			<td align=\"right\" width=\"10%\">:</td>
			<td align=\"left\" width=\"40%\">
				<a href=\"remove_modify_user.php\"><button style=\"height: 30px;width: 200px;\">
				Remove/Modify user </button></a>
			</td>
		</tr>";
						}				}
				?>
        
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
<!DOCTYPE html>
<html>
<head>
	<title>||Product Details Page||</title>
</head>
<body>
	<table align = "center"   width= 100% >
		<tr>
			<td width= 20%>
				<h1><strong>Welcome to <a href="index.php">Fotur</a></strong></h1>

			</td>
			<td colspan="3" width="60%" align="center">
				<form action="v.php" method="get">
					<input type="text" name="name" style="width: 600px; height: 30px" >
					<input type="submit"  value="Search" name= "search" style="width: 140px; height: 35px">
				</form>       
    		</td>
    		<td>
    			<h2><a href="sign_in_up.php">Sign In</a></h2>
                <p>Don't have an account.<a href="register.php">Register</a></p>		
        	</td>
        </tr>

        <!--!Menu start-->
            
        
        <!--!Menu end-->

		<tr>
			<td >
				<h2><a href="products.php">Products</a></h2>
        		<ul>
        			<li><a href="p_mobile.php">Mobile</a></li>
                    <li><a href="p_headPhone.php">HeadPhone</a></li>
                    <li><a href="p_charger.php">Charger</a></li>
        		</ul>
    		</td>
    		
			<!-- part for Product Details page  starts-->

    		<td colspan="4" align="center">
    			<!-- <h1> Product Details</h1>
    			<table >
    					 	<tr>  <td>Product Name: </td> </tr>
    					 	<tr>  <td>Brand Name:</td><br></tr>
    					 	<tr>  <td>Product ID:</td> </tr>
    					 	<tr>  <td>Availability:</td> </tr>
    					 	<tr>  <td>Quantity(1-100):</td>
    					 		<td><input type="number" name="quantity" min="1" max="100"></td> 
    					 	</tr>
    			</table>
    			<form action="cart.php">
               		<input type="submit" name="cart_button" value="Add to Cart"/>
            	</form>  -->
            	<table>
            		<tr>
            			<td>
            				<img src="https://bd.daraz.io/63AOF7am4ZZ9RjkStyeyjqKNK18=/fit-in/680x680/filters:fill(white):sharpen(1,0,false):quality(80)/product/95/1557/1.jpg?1213" style="height: 400px; width: 350px">
            			</td>
            			<td>
            				<strong>Samsung Galaxy A6 Smartphone 5.6" - 4GB RAM - 32GB ROM - 16MP - Blue</strong><br>

							Key Features <br>
5.6" HD+ Super AMOLED Display 16M <br>ColorOcta-core 1.6 GHz processor <br>4GB RAM and 32GB ROM <br>MicroSD Support Up to 256GB <br>16MP (F1.7) Rear and 16MP (F1.9)<br> Front Camera with Front LED Flash <br>Wi-Fi, Bluetooth, USB <br>
							<strong>৳ 27,900.00</strong> 
							<form action="cart.php" method="post">
								
                             <select name="quantity" style="width:80px;height:30px">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
								<input type="submit" name="buy" value="Buy Now">
								
							</form>
            			</td>
            		</tr>
            	</table>
            	<br><br><br><br>
    		</td>

    		<!-- part for Product Details page ends -->
		</tr>
		<td colspan="2">
			<h2>Let us help you</h2>
			<ul>
				<li><a href="help.php">Help Center</a></li>
                <li><a href="customer_care.php">Customer Care</a></li>
                <li><a href="contact_us.php">Contact Us</a></li>
			</ul>	
		</td>
		<td colspan="2" align="center">
			<h2>Get to know us</h2>
			<ul>
				<li><a href="about.php">About us</a></li>
                <li><a href="terms_condition.php">Terms & Conditions</a></li>
                <li><a href="privacy_agreement.php">Privacy Agreement</a></li>
			</ul>
		</td>
		<td>
			<h2>New to Fotur?</h2>Suscribe to our newsletter for new products and offers
			<form action="suscribeV.php" method="post">
				<input type="text" name="suscribe_box" style="width: 300px; height: 30px" placeholder="Enter Your Email Address" >
				<input type="submit"  value="Suscribe" name= "suscribe" style="width: 140px; height: 35px">
			</form> 
		</td>

		<tr>
			<td align = "center" colspan="5" >
			Fotur Inc. © 2018 All Rights Reserved.
      		</td>		
		</tr>
    
	</table>
</body>
</html>


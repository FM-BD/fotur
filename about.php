<!DOCTYPE html>
<html>
<head>
	<title>||About Page||</title>
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
		<tr>
			<td >
				<h2><a href="products.php">Products</a></h2>
        		<ul>
        			<li><a href="p_mobile.php">Mobile</a></li>
        			<li><a href="p_headPhone.php">HeadPhone</a></li>
        			<li><a href="p_charger.php">Charger</a></li>
        		</ul>
    		</td>
    		
			<!-- part for About page  starts-->
		<tr>
			<td colspan="5">
				<h3 align="center">About Us</h3>
				<p>Launched in 2018, Futur is BD's online shopping  destination of choice –now only present in Bangladesh. Supported by a wide range of tailored marketing, data, and service solutions. Various types of products available in Futur. It offers a diverse assortment of products in categories ranging from consumer electronics. Focused on providing an excellent customer experience, it offers multiple payment methods including cash-on-delivery, comprehensive customer care and hassle-free returns. Futur is owned by Futur Bangladesh Limited.</p>
			</td>
		</tr>

    		<!-- part for About page ends -->
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
			<form action="v.php" method="get">
				<input type="text" name="suscribe" style="width: 300px; height: 30px" >
				<input type="submit"  value="Suscribe" name= "search" style="width: 140px; height: 35px">
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

<!DOCTYPE html>
<html>
<head>
	<title>||Home Page||</title>
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
    		
			<!-- part for home page  starts-->

    		<td colspan="4" align="center">
    			<iframe src="https://images.indianexpress.com/2018/04/oneplus-6-mockup-video-759.jpg" height="425px" width= "760px"></iframe>
    			<table>
    				<tr>
    					<td>
    						<img src="https://cdn2.gsmarena.com/vv/bigpic/oneplus-6-.jpg">
    						<br>One Plus 6 <br>
    						8/6 GB RAM & 64/128 GB ROM <br>
    						$900


    					</td>
    					<td>
    						<img src="https://cdn2.gsmarena.com/vv/bigpic/apple-iphone-x.jpg">
    						<br>Iphone X <br>
    						8/6 GB RAM & 64/128 GB ROM <br>
    						$1900


    					</td>
    					<td>
    						<img src="https://cdn2.gsmarena.com/vv/bigpic/xiaomi-mi8.jpg">
    						<br>Xiaomi MI 8 <br>
    						8/6 GB RAM & 64/128 GB ROM <br>
    						$1100


    					</td>
    					<td>
    						<img src="https://cdn2.gsmarena.com/vv/bigpic/samsung-galaxy-j6-j600.jpg">
    						<br>Galaxy J6 <br>
    						8/6 GB RAM & 64/128 GB ROM <br>
    						$1200


    					</td>
    				</tr>
    			</table>
    		</td>

    		<!-- part for home page ends -->
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

<!DOCTYPE html>
<html>
<head>
	<title>||Help Page||</title>
</head>
<body>
	<table align = "center"   width= 100% >
		<tr>
			<td width= 20%>
				<h1><strong>Welcome to Fotur</strong></h1>

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
				<h2>Products</h2>
        		<ul>
        			<li>Mobile</li>
        			<li>HeadPhone</li>
        			<li>Charger</li>
        		</ul>
    		</td>
    		
		<!-- part for Register page  starts-->
		<tr>

			<form action="validate.php" method="post">
				<table  align="center" height="100" width="500" >
						<tr>
							<td align="center"><label>Name</label></td>
							<td>
								<input type="text" name="name" placeholder="Please Enter your name" />
							</td>
						</tr>
						
						<tr>
						<td align="center"><label>Password</label></td>
						<td>
							<input type="text" name="pass" placeholder="Enter your Password"/><br/>
								policy *must be 8 in lenght & *must include number & charecter.
						</td>
					</tr>
					<tr>
						<td align="center"><label>Confirm Password</label></td>
						<td><input type="text" name="c_pass" placeholder="ReEnter your Password"/></td>
					</tr>
					<tr>
						<td align="center"><label>E-mail</label></td>
						<td><input type="text" name="email" placeholder="Enter your E-mail"/></td>
					</tr>
					<tr>
						<td align="center"> <label>Phone</label></td>
						<td><input type="text" name="phone" placeholder="Enter your Phone No"/></td>
					</tr>
					<tr>
						<td align="center"><label>Gender</label></td>
						<td>
							<input type="radio" name="gender" value="Male"/>Male
							<input type="radio" name="gender" value="Female"/>Female</td>
						</td>
					</tr>
					<!-- <tr>
						<td><label>Blood Group </label></td>
						<td>
							<select name="blood">
								<option>B +ve</option>
								<option>B -ve</option>
								<option>A +ve</option>
								<option>A -ve</option>
								<option>AB +ve</option>
								<option>AB -ve</option>
								<option>O +ve</option>
								<option>O -ve</option>
							</select>
						</td>
					</tr> -->
					<tr>
						<td align="center"><label>Date of Birth</label></td>
						<td><input type="Date" name="date" /></td>
					</tr>

					<tr>
						<td><label>Address</label></td>
						<td>
							<input  type="text"  name="address"  />
						</td>
					</tr>
					<tr>
						<td><label>City </label></td>
						<td>
							<select name="city">
								<option>Dhaka</option>
								<option>Chittagong</option>
								<option>Khulna</option>
								<option>Shylet</option>
								<option>Rajshahi</option>
								<option>Rangpur</option>
								<option>Barisal</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><label>Area </label></td>
						<td>
							<select name="area">
								<option>Bonani</option>
								<option>Mirpur</option>
								<option>Uttra</option>
								<option>Dhanmondi</option>
								<option>Mohamapur</option>
								<option>Motijhil</option>
								<option>Gulshan</option>
								<option>Others</option>
						</select>
						</td>
					</tr>
					<tr>
						<td><label>Image</label></td>
						<td>
							<input type="file" name="filename" accept="image/gif, image/jpeg, image/png">
						</td>
					</tr>
					<tr >
						<td>
							<input type="checkbox"/>
							I agree all the terms and condition & information is true.	
						</td>
					</tr>

						<tr align="center" >
							<td>
								<input type="Submit" name="submit" value="Submit">
							</td>
						</tr>
				</table>
			</form> 
		</tr>
		
		<!-- part for Register page ends -->
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

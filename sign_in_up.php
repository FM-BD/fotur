<!DOCTYPE html>
<html>
<head>
	<title>||Login Page||</title>
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
         <tr>
             <td colspan="5" align="center">
                <br><br><br>
                <h1>Sign In</h1>
             
				<table>
					<tr>
						<form action="user_admin.php" method="post">
						<td align="left"><label>Name</label></td>
						<td><input type="text" name="user_name"  style="width: 300px; height: 30px" ></td>
					</tr>
					<tr>
						<td align="left"><label>Password</label></td>
						<td><input type="password" name="password"  style="width: 300px; height: 30px"></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit"  value="Login" name= "login" style="width: 140px; height: 35px; "></td>
						</form>
					</tr>
					<tr>
						<td colspan="2" align="right">*Forgot password ?</td>
					</tr>
				</table>
				



                <br>
                <br>
                <br><br><br>

                
            </td>
             
         </tr>   
			 
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

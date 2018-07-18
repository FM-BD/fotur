<!DOCTYPE html>
<html>
<head>
    <title>||REGISTER PAGE||</title>
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
		<!-- part for Register page  starts-->
		
			<td colspan="3" align="center">
				<h2 align="center">REGISTRATION</h2>
				<form action='registration_Validation.php' method='post'>						
				<table>
				<tr>
					<td style="width: 200px;">First Name</td>
					<td>:</td>
					<td>
						<input type="text" name="first_name" style="width:400px;height:30px" 
						placeholder="First Name">		
					</td>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>

				<tr>
					<td style="width: 200px;">Last Name</td>
					<td>:</td>
					<td><input type="text" name="last_name"style="width:400px;height:30px" placeholder="Last Name"></td>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>

				<tr>
					<td style="width: 200px;">Email</td>
					<td>:</td>
					<td><input type="text" name="email"style="width:400px;height:30px" placeholder="Email Address"></td>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>

				<tr>
					<td style="width: 200px;">User Name</td>
					<td>:</td>
					<td><input type="text" name="user_name" style="width:400px;height:30px" placeholder="User Name"></td>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>

				<tr>
					<td style="width: 200px;">Password</td>
					<td>:</td>
					<td><input type="password" name="password" style="width:400px;height:30px" placeholder="Password"></td>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>
				<tr>
					<td style="width: 200px;">Confirm Password</td>
					<td>:</td>
					<td><input type="password" name="confirmPassword" style="width:400px;height:30px" placeholder="Confirm Password"></td>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>

				<tr>
					<td style="width: 200px;">Phone</td>
					<td>:</td>
					<td><input type="text" name="phone" style="width:400px;height:30px" placeholder="Phone Number"></td>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>

				<tr>
					<td style="width: 200px;">Gender</td>
					<td>:</td>
					<td colspan="3">
							<input type="radio" name="gender" value="male">Male
							<input type="radio" name="gender" value="female">Female
							<input type="radio" name="gender" value="other">Other
					</td>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>

				<tr>
					<td style="width: 200px;">Date of Birth</td>
					<td>:</td>
					<td colspan="3">
							<input type="text" name="day"  style="width: 40px" placeholder="DD">/
							<input type="text" name="month"  style="width: 40px" placeholder="MM">/
							<input type="text" name="year"  style="width: 70px" placeholder="YYYY"> &nbsp (Day/Month/Year)
					</td>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>
				<tr>
					<td style="width: 200px;">Address</td>
					<td>:</td>
					<td><input type="text" name="address" style="width:400px;height:30px" placeholder="Address"></td>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>

				<tr>
					<td style="width: 200px;">City</td>
					<td>:</td>
					<td>
						<select name="city" style="width:400px;height:30px">
								<option value="Dhaka">Dhaka</option>
								<option value="Chittagong">Chittagong</option>
								<option value="khulna">Khulna</option>
								<option value="shylet">Shylet</option>
								<option value="rajshahi">Rajshahi</option>
								<option value="rangpur">Rangpur</option>
								<option value="barisal">Barisal</option>
								<option value="Madaripur">Madaripur</option>
								<option value="Faridpur">Faridpur</option>
							</select>
					</td>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>

				<tr>
					<td style="width: 200px;">Postal Code</td>
					<td>:</td>
					<td><input type="text" name="postal_code" style="width:400px;height:30px" placeholder="Postal Code"></td>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>

				<tr>
					<td style="width: 200px;">Country</td>
					<td>:</td>
					<td>
						<select name="country" style="width:400px;height:30px">
								<option value="Bangladsh">Bangladsh</option>
								<option value="India">India</option>
								<option value="China">China</option>
						</select>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>

				<tr >
						<td colspan="3" >
							<input type="checkbox" name="agree" />
							I agree all the terms and condition & information are True.	
						</td>
				</tr>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>

				<tr>
					<td colspan="2"  align="center" >
						<input type="submit" name="submit" value="Submit" style="width:120px;height:30px">
					</td>
					<td>
						<input type="reset" name="reset" value="Reset" style="width:100px;height:30px">
					</td>
				</tr>

						</table>
			
					
				</form>
				<br><br><br>
			</td>
		</tr>
			
		
		<!-- part for Register page ends -->
		<tr><td  colspan="5" align="center"><a href="offer.php"><img src="Product/offer/offer1.jpg" height="360px" width= "780px"></a></td></tr>
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
        <tr>
<!--             <td colspan="5">
                <hr>
            </td> -->
        </tr>
        <tr>
            <td colspan="3" align="left">
                <img src="assets/img/payment.png">
          </td>
            <td colspan ="2">
              <table>
                <tr>
                <td ><a href="https://www.facebook.com/"><img src="assets/logo/facebook.png" height="70" width="70"></a></td>
                <td><a href="https://www.instagram.com/">
                <img src="assets/logo/instagram.png" height="70" width="70"></a></td>
                  <td><a href="https://www.twitter.com/" >
                <img src="assets/logo/twitter.png" height="70" width="70"></a></td>
                <td><a href="https://www.youtube.com/">
                <img src="assets/logo/youtube.png" height="70" width="70"></a>
                </td>
                </tr>
              </table>
               
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

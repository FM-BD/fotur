<!DOCTYPE html>
<html>
<head>
	<title>||CHECKOUT PAGE||</title>
</head>
<body>
	<!-- Checkout header Start-->
	<table style="width:100%;height:50% ;background: #b9b4b475 ">
		
		<tr>
			<td>
				<table align="center"  style="width:60%;">
				<tr>
					<td style="text-align: left;height: 40px; width:20%;">
					<a href="index.php"><img style="height: 60px; width:200px;" src="assets/logo/Fotur.png"></a>
					
					</td>

					<td style="text-align: center; width: 20%;font-family: Comic Sans MS">
						Need Help?
						Call Us!<br>
						16000</td>
					<td style="text-align:right; width: 20%;font-family: Comic Sans MS">
						Easy Return<br>
						Within 7 Days</td>						
					
				</tr>
			</table>
			</td>
		</tr>
	</table>
	<!-- Checkout header end-->
	<br>

	<!-- Checkout data page start-->

	<form action=shipper.php method='post'>						
			<table align="center"  style="width:60%;background: #b9b4b475 ;">
				<tr>
					<td  style="padding-left: 2%;width: 200px;"><h2>1.EMAIL</h2> </td>
					<td>:</td>
					<td>
						<input type="text" name="email" style="width:400px;height:30px"placeholder="Email Address">		
					</td>
				</tr>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>
				<tr>
					<td colspan="3"  style="padding-left: 2%;">
						<h2 >2. Your Delivery Information</h2> 
					</td>
				</tr>

				</tr>
					<tr><td colspan="3"><hr/"></td>
				</tr>

				<tr>
					<td style="padding-left: 5%;width: 200px;">First Name *</td>
					<td>:</td>
					<td>
						<input type="text" name="first_name" style="width:400px;height:30px"placeholder="First Name">		
					</td>
				</tr>

				<tr>
					<td> <br> </td>
				</tr>

				<tr >
					<td style="padding-left: 5%;width: 200px;">Last Name *</td>
					<td>:</td>
					<td><input type="text" name="last_name"style="width:400px;height:30px" placeholder="Last Name"></td>
				</tr>

				<tr>
					<td> <br> </td>
				</tr>

				<tr>
					
					<td style="padding-left: 5%;width: 200px;">Address *</td>
					<td>:</td>
					<td><textarea  name="address" rows="5" cols="54"  form=""  placeholder="Full Address"></textarea>
				</tr>

				<tr>
					<td> <br> </td>
				</tr>

				<tr>
					<td style="padding-left: 5%;width: 200px;">Phone *</td>
					<td>:</td>
					<td><input type="text" name="phone" style="width:400px;height:30px" placeholder="Phone Number:  +8801XXXXXXXXX"></td>
				</tr>

				<tr>
					<td> <br> </td>
				</tr>

				<tr>
					<td style="padding-left: 5%;width: 200px;">City/Region *</td>
					<td>:</td>
					<td>
						<select name="city" style="width:400px;height:30px" >
								<option  value="">Select your option</option>
								<option value="Dhaka">Dhaka</option>
								<option value="Chittagong">Chittagong</option>
								<option value="khulna">Khulna</option>
								<option value="shylet">Shylet</option>
								<option value="rajshahi">Rajshahi</option>
								<option value="rangpur">Rangpur</option>
								<option value="barisal">Barisal</option>
							</select>
					</td>
				</tr>

				<tr>
					<td> <br> </td>
				</tr>

				<tr>
					<td style="padding-left: 5%;width: 200px;">Nearest Area</td>
					<td>:</td>
					<td>
						<select name="Nearest_area" style="width:400px;height:30px">
								<option value="">Select your option</option>
								<option value="Mirpur">Mirpur</option>
								<option value="Uttra">Uttra</option>
								<option value="Khilkhet">Khilkhet</option>
								<option value="Bosundhara">Bosundhara</option>
								<option value="Badda">Badda</option>
								<option value="Rampura">Rampura</option>
								<option value="Dhanmondi">Dhanmondi</option>
								<option value="Mohammadpur">Mohammadpur</option>
								<option value="Motijhil">Motijhil</option>
								<option value="Azimpur">Azimpur</option>
								<option value="Others">Others</option>
							</select>
					</td>
				</tr>

				<tr >
						<td align="center" colspan="4" >
							<input type="checkbox" name="agree"/>
							I have read and accept the Terms & Conditions.
						</td>
				</tr>
				<tr>
					<td colspan="3"  align="center" >
						<input type="submit" name="check_Place_order" value="CHECK & PLACE ORDER" style=" background: orange; width:200px;height:30px;">
					</td>
				</tr>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>
				
			</table>		
		</form>
		<table align="center"  style="width:60%;background: #b9b4b475 ;">
			<tr>
				<td  style="padding-left: 2%;">
					<h2 >3. ORDER SUMMARY</h2> 
				</td>
			</tr>
			<tr><td><hr/"></td></tr>

			<tr>
				<td  style="padding-left: 2%;">
					<h2 >4.  PAYMENT</h2> 
				</td>
			</tr>
			<tr><td><hr/"></td></tr>

			<tr>
				<td align="center"><a href="index.php">Go Back to Homepage </a></td>
			</tr>
		</table>
		<!-- Checkout data page end-->

</body>
</html>

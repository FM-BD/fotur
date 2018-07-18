<!DOCTYPE html>
<html>
<head>
    <title>||Product Details Page||</title>
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
                            <img src="https://bd.daraz.io/l2FAHLShpJwjuuRInNQ6GRGG1fc=/fit-in/220x220/filters:fill(white):sharpen(1,0,false):quality(80)/product/38/9764/1.jpg?6788" style="height: 400px; width: 350px">
                        </td>
                        <td>
                            <strong>Samsung Galaxy In Ear Headphones Headset With Remote EO-IG935B - Black</strong><br>

                            Type:In-Ear Stereo Headphones<br>
                            Sound Impedance: 8 ohms<br>
                            Weight: 15.7 g<br>
                            Cable Length: 1.2 m<br>
                            Color: Black<br>
                            Includes a remote control with three buttons.<br>

                            <strong>৳1590.00</strong> 
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

<!DOCTYPE html>
<html>
<head>
    <title>||Product Page||</title>
</head>
<body>
    <table align = "center"   width= 100% >
        <tr>
            <td width= 20%>
                <a href="index.php"><img style="height: 60px; width:200px;" src="assets/logo/Fotur.png"></a>
            </td>
            <td colspan="2" width="50%" align="center">
                <form action="index.php" method="get">
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
			<!-- part for Product page  starts-->

    		<td colspan="4" align="center">
    			<table  border="1" >
                    <!-- Offer Product -->
                    <tr>
                        <td>
                            <a href="product_details.php">
                            <img src="Product/offer4.jpg" height="300px" width="300px"> </a>
                            <br><b>Name:XXXX  &nbsp   Price:৳9999</b> <b style="color: red;"> &nbsp OFFER !!</b>
                            <form action="cart.php">
                                <input type="submit" name="cart_button" value="Add to Cart"/>
                            </form> 
                        </td>
                        <td>
                            <a href="product_details.php">
                            <img src="Product/offer5.jpg" height="300px" width="300px"> </a>
                            <br><b>Name:XXXX  &nbsp   Price:৳9999</b> <b style="color: red;"> &nbsp OFFER !!</b>
                            <form action="cart.php">
                                <input type="submit" name="cart_button" value="Add to Cart"/>
                            </form> 
                        </td>
                        <td>
                            <a href="product_details.php">
                            <img src="Product/offer7.jpg" height="300px" width="300px"> </a>
                            <br><b>Name:XXXX  &nbsp   Price:৳9999</b> <b style="color: red;"> &nbsp OFFER !!</b>
                            <form action="cart.php">
                                <input type="submit" name="cart_button" value="Add to Cart"/>
                            </form> 
                        </td>
                    </tr>

                    <!-- Product Apple-->
    				<tr>
    					<td>
                            <a href="product_details.php">
    						<img src="Product/iphone1.jpg" height="300px" width="300px"> </a>
    						<br><b>Name:ABCD  &nbsp   Price:৳9999</b>
                            <form action="cart.php">
                                <input type="submit" name="cart_button" value="Add to Cart"/>
                            </form> 
    					</td>
                        <td>
                            <a href="product_details.php">
                            <img src="Product/iphone2.jpg" height="300px" width="300px"> </a>
                            <br><b>Name:ABCD  &nbsp   Price:৳9999</b>
                            <form action="cart.php">
                                <input type="submit" name="cart_button" value="Add to Cart"/>
                            </form> 
                        </td>
    					<td>
                            <a href="product_details.php">
                            <img src="Product/iphone3.jpg" height="300px" width="300px"> </a>
                            <br><b>Name:ABCD  &nbsp   Price:৳9999</b>
                            <form action="cart.php">
                                <input type="submit" name="cart_button" value="Add to Cart"/>
                            </form> 
                        </td>
    				</tr>

                    <!-- Product Charger-->
                    <tr>
                        <td>
                            <a href="product_details3.php">
                            <img src="Product/c1.jpg" height="300px" width="300px"> </a>
                            <br><b>Name:CCCC  &nbsp   Price:৳999</b>
                            <form action="cart.php">
                                <input type="submit" name="cart_button" value="Add to Cart"/>
                            </form> 
                            
                        </td>
                        <td>
                            <a href="product_details3.php">
                            <img src="Product/c2.jpg" height="300px" width="300px"> </a>
                           <br><b>Name:CCCC  &nbsp   Price:৳999</b>
                            <form action="cart.php">
                                <input type="submit" name="cart_button" value="Add to Cart"/>
                            </form> 
                        </td>
                        <td>
                            <a href="product_details3.php">
                            <img src="Product/c3.jpg" height="300px" width="300px"> </a>
                            <br><b>Name:CCCC  &nbsp   Price:৳999</b>
                            <form action="cart.php">
                                <input type="submit" name="cart_button" value="Add to Cart"/>
                            </form> 
                        </td>
                    </tr>
                    <!-- Product Headphone-->
                    <tr>
                        <td>
                            <a href="product_details2.php">
                            <img src="Product/h1.jpg" height="300px" width="300px"> </a>
                            <br><b>Name:HHHH  &nbsp   Price:৳999</b>
                            <form action="cart.php">
                                <input type="submit" name="cart_button" value="Add to Cart"/>
                            </form> 
                            
                        </td>
                        <td>
                            <a href="product_details2.php">
                            <img src="Product/h2.jpg" height="300px" width="300px"> </a>
                           <br><b>Name:HHH  &nbsp   Price:৳999</b>
                            <form action="cart.php">
                                <input type="submit" name="cart_button" value="Add to Cart"/>
                            </form> 
                        </td>
                        <td>
                            <a href="product_details2.php">
                            <img src="Product/h3.jpg" height="300px" width="300px"> </a>
                            <br><b>Name:HHHH  &nbsp   Price:৳999</b>
                            <form action="cart.php">
                                <input type="submit" name="cart_button" value="Add to Cart"/>
                            </form> 
                        </td>
                    </tr>


                    <!-- Product Huawai-->
                    <tr>
                        <td>
                            <a href="product_details.php">
                            <img src="Product/huawei1.jpg" height="300px" width="300px"> </a>
                            <br><b>Name:ABCD  &nbsp   Price:৳9999</b>
                            <form action="cart.php">
                                <input type="submit" name="cart_button" value="Add to Cart"/>
                            </form> 
                            
                        </td>
                        <td>
                            <a href="product_details.php">
                            <img src="Product/huawei2.jpg" height="300px" width="300px"> </a>
                           <br><b>Name:ABCD  &nbsp   Price:৳9999</b>
                            <form action="cart.php">
                                <input type="submit" name="cart_button" value="Add to Cart"/>
                            </form> 
                        </td>
                        <td>
                            <a href="product_details.php">
                            <img src="Product/huawei3.jpg" height="300px" width="300px"> </a>
                            <br><b>Name:ABCD  &nbsp   Price:৳9999</b>
                            <form action="cart.php">
                                <input type="submit" name="cart_button" value="Add to Cart"/>
                            </form> 
                        </td>
                    </tr>
                    <!-- Product Samsung-->
                    <tr>
                        <td>
                            <a href="product_details.php">
                            <img src="Product/samsung1.jpg" height="300px" width="300px"> </a>
                            <br><b>Name:ABCD  &nbsp   Price:৳9999</b>
                            <form action="cart.php">
                                <input type="submit" name="cart_button" value="Add to Cart"/>
                            </form> 
                            
                        </td>
                        <td>
                            <a href="product_details.php">
                            <img src="Product/samsung2.jpg" height="300px" width="300px"> </a>
                           <br><b>Name:ABCD  &nbsp   Price:৳9999</b>
                            <form action="cart.php">
                                <input type="submit" name="cart_button" value="Add to Cart"/>
                            </form> 
                        </td>
                        <td>
                            <a href="product_details.php">
                            <img src="Product/samsung3.jpg" height="300px" width="300px"> </a>
                            <br><b>Name:ABCD  &nbsp   Price:৳9999</b>
                            <form action="cart.php">
                                <input type="submit" name="cart_button" value="Add to Cart"/>
                            </form> 
                        </td>
                    </tr>
                    <!-- Product vivo-->
                    <tr>
                        <td>
                            <a href="product_details.php">
                            <img src="Product/vivo1.jpg" height="300px" width="300px"> </a>
                            <br><b>Name:ABCD  &nbsp   Price:৳9999</b>
                            <form action="cart.php">
                                <input type="submit" name="cart_button" value="Add to Cart"/>
                            </form> 
                            
                        </td>
                        <td>
                            <a href="product_details.php">
                            <img src="Product/vivo2.jpg" height="300px" width="300px"> </a>
                           <br><b>Name:ABCD  &nbsp   Price:৳9999</b>
                            <form action="cart.php">
                                <input type="submit" name="cart_button" value="Add to Cart"/>
                            </form> 
                        </td>
                        <td>
                            <a href="product_details.php">
                            <img src="Product/vivo3.jpg" height="300px" width="300px"> </a>
                            <br><b>Name:ABCD  &nbsp   Price:৳9999</b>
                            <form action="cart.php">
                                <input type="submit" name="cart_button" value="Add to Cart"/>
                            </form> 
                        </td>
                    </tr>

                    


    			</table>
    		</td>

    		<!-- part for Product page ends -->
		</tr>
        <tr><td  colspan="5" align="center"><a href="offer.php"><img src="Product/offer/offer1.jpg" height="360px" width= "780px"></a></td></tr>
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

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
            <!-- part for cart page  starts-->


             <td width="100%" colspan="3">
                 <table height="50px" border = "1">
                     <tr>
                         <td align="center" width="450px">Item</td>
                         <td align="center" width="100px">Quantity</td>
                         <td align="center" width="200px">Unit Price</td>
                         <td align="center" width="250px">Sub Total</td>
                     </tr>
                     <tr>
                         <td> 
                            <img align="center" src="assets/img/mobile.jpg"><br>
                            SMARTPHONES <br>
                            SAMSUNG Galaxy A6 Smartphone 5.6" - 4GB RAM - 32GB ROM - 16MP - Blue <br>
                            <a href="remove.php">RemoveItem</a>
                            
                         </td>
                         <td>
                             <select name="quantity" style="width:80px;height:30px">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                         </td>
                         <td align="center">
                             ৳ 27,900.00
                         </td>
                         <td align="center">
                            ৳ 27,900.00                            
                         </td>
                         <tr>
                         <td>
                            <img align="center" height="60px" width="60px" src="assets/img/charger.jpg"><br>
                            PHONE CHARGERS <br>
                            XIAOMI Mirco USB Adapter with Cable - Black<br>
                            <a href="remove.php">RemoveItem</a>
                            
                         </td>
                         <td>
                             <select name="quantity" style="width:80px;height:30px">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                         </td>
                         <td align="center">
                             ৳ 570.00
                         </td>
                         <td align="center">
                            ৳ 570.00                            
                         </td>
                     </tr>
                     <tr>
                         <td colspan="3"></td>
                         <td>SUBTOTAL:  ৳ 29,380.00 <br><hr>
                         TOTAL:  ৳ 29,380.00 <br><hr>
                        </td>
                     </tr>
                     <tr>
                         <td>
                             Total: <strong>৳ 29,380.00</strong> 
                         </td>
                         
                         <td colspan="3" align="right">
                            <a href="checkout.php"> <button style="width: 200px"> Proceed to Checkout</button></a>
                         </td>
                     </tr>

                 </table>
             </td>




        
        </tr>

        <tr>
            <td colspan="5" width=80%> 
                <table align="center" width=70%>
                    <tr>
                        <td align="center" colspan="4"><h2>People are also looking for</h2></td>
                    </tr>
                    <tr>
                        <td>
                            <a href="products.php">
                            <img src="https://cdn2.gsmarena.com/vv/bigpic/oneplus-6-.jpg">
                            <br>One Plus 6 </a><br>
                            8/6 GB RAM & 64/128 GB ROM <br>
                            $900


                        </td>
                        <td>
                             <a href="products.php">
                            <img src="https://cdn2.gsmarena.com/vv/bigpic/apple-iphone-x.jpg">
                            <br>Iphone X </a><br>
                            8/6 GB RAM & 64/128 GB ROM <br>
                            $1900


                        </td>
                        <td>
                             <a href="products.php">
                            <img src="https://cdn2.gsmarena.com/vv/bigpic/xiaomi-mi8.jpg">
                            <br>Xiaomi MI 8</a> <br>
                            8/6 GB RAM & 64/128 GB ROM <br>
                            $1100


                        </td>
                        <td>
                             <a href="offer.php">
                            <img src="https://bd.daraz.io/cms/2018/W25/MFL/bf1.jpg"></a>
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
        <!-- part for cart page  starts-->

        <tr>    
            
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

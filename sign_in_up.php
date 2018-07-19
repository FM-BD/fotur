


<!DOCTYPE html>
<html>
<head>
    <title>||Login Page||</title>
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
         <tr>
             <td colspan="5" align="center">
                <br><br><br>
                <h1>Sign In</h1>
             
				<table>
					<tr>
						<form action="sign_in_up.php" method="post">
                        <td align="left"><label>Name</label></td>
                        <td><input type="text" name="uname"  style="width: 300px; height: 30px" ></td>
                    </tr>
                    <tr>
                        <td align="left"><label>Password</label></td>
                        <td><input type="password" name="pass"  style="width: 300px; height: 30px"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit"  value="Login" name= "submit" style="width: 140px; height: 35px; "></td>
                        </form>
					</tr>
					<tr>
						<td colspan="2" align="right"><a href="forgot_password.php">*Forgot password ?</a></td>
					</tr>
				</table>
                <?php
if (isset($_POST['submit'])) {
    # code...
    $con= mysqli_connect("localhost","root", "","fotur");
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $con = new mysqli($servername, $username, $password);
    if (!$con) {
        die("connction Error :".mysqli_connect_error());

        # code...
    }
    else
    {
        $str= "select * from user where user_name= '".$_POST['uname']."' and user_password= '".$_POST['pass']."' ";
        $result = mysqli_query($con,$str);

        if (mysqli_num_rows($result)>0) {
            $row = mysqli_fetch_array($result);
            echo "Hello".$row['user_name'];
            session_start();
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['dob'] = $row['dob'];
            $_SESSION['gender'] = $row['gender']; 
            $_SESSION['city'] = $row['city']; 
            $_SESSION['postal_code'] = $row['postal_code']; 
            $_SESSION['country'] = $row['country'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['address'] = $row['address'];

            

            header('Location:user_admin.php');
            # code...
        }
//         if ($result=mysqli_query($con,$str))
//     {
//   // Return the number of rows in result set
//   $rowcount=mysqli_num_rows($result);
//   printf("Result set has %d rows.\n",$rowcount);
//   // Free result set
//   mysqli_free_result($result);
//   }
//   else
//     {echo "string";}
//     }
 }
}

?>
				
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

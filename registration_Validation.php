
<?php

if(isset($_POST["submit"]))
{


  if ( (!empty($_POST["first_name"])) && (!empty($_POST["last_name"]))  
        && (!empty($_POST["email"])) && (!empty($_POST["user_name"])) && (!empty($_POST["password"])) 
        && (!empty($_POST["confirmPassword"])) &&  (!empty($_POST["phone"])) && (!empty($_POST["gender"])) 
        && (!empty($_POST["day"])) && (!empty($_POST["month"])) && (!empty($_POST["year"]))
        && (!empty($_POST["address"])) && (!empty($_POST["city"])) && (!empty($_POST["address"])) 
        && (!empty($_POST["postal_code"])) && (!empty($_POST["country"])) && (!empty($_POST["agree"])) )  
  {
    //First name
    if (isset($_POST["first_name"]))
    {
      $start = ord(substr($_POST["first_name"],0,1));
      
      if(!(($start>64 && $start<91) ||($start>96 && $start<123)))
      {
        echo "<br>";
        echo "First word must contaion a letter";
      }
      elseif (!preg_match("/^[a-zA-Z .,-]*$/",$_POST["first_name"]))
      {
        echo "<br>";
        echo "Only letters and white space allowed";
      }
      else 
      {
        echo "<br>";
        echo "Name  :".$_POST["first_name"];
      }
    }
    //Last name
    if (isset($_POST["last_name"]))
    {
      $start = ord(substr($_POST["last_name"],0,1));
      
      if(!(($start>64 && $start<91) ||($start>96 && $start<123)))
      {
        echo "<br>";
        echo "First word must contaion a letter";
      }
      elseif (!preg_match("/^[a-zA-Z .,-]*$/",$_POST["last_name"]))
      {
        echo "<br>";
        echo "Only letters and white space allowed";
      }
      else 
      {
        echo $_POST["last_name"];
      }
    }
    if(isset($_POST["email"]))
    {
      if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
      {
        echo "<br>";
        echo "Invalid email format"; 
      }
      else 
      {
        echo "<br>";
        echo "Email: ".$_POST["email"];
      }
    }
    if(isset($_POST["submit"]))
    {
      $userName = $_POST["user_name"];
      $pass = $_POST["password"];
      
      if(!preg_match("/^[a-zA-Z0-9.,-]*$/",$userName))
      {
        echo "<br>";
        echo "Only letters and white space allowed in user name";
      }
      elseif(strlen($userName)<1)
      {
        echo "<br>";
        echo "Usename must contaion atleast 2 charecter";
      }
      elseif(strlen($pass)<8)
      {
        echo "<br>";
        echo "Password must contaion atleast 8 charecter";
      }
      elseif(!preg_match("/[@,#,$,%]/",$pass))
      {
        echo "<br>";
        echo "Password must contain at least one of the special characters @, #, $, %";
      }
      else
      {
        echo "<br>";
        echo "User Name:".$userName;
      }
      
    }
    if(isset($_POST["submit"]))
    {
      $newpass = $_POST["password"];
      $repass = $_POST["confirmPassword"];
      
      if($newpass != $repass)
      {
        echo "<br>";
        echo "Missmatch password";
      } 
    }
    //Phone 
    if(isset($_POST["phone"]))
    {
      $phn=$_POST["phone"];
      if(preg_match("/^[0-9]{3}[0-9]{8}$/", $phn)) 
      {
        echo "<br>";
        echo "Phone Number is: ".$_POST["phone"];
        // $phone is valid
      }
      else 
      {
        echo "<br>";
        echo "Invalid phone Number"; 
      }
    }
    //address
    if (isset($_POST["address"])) {
      echo "<br>";
      echo "Address is: ".$_POST["address"];
      
    }
    //city
    if (isset($_POST["city"])) {
      echo "<br>";
      echo "City is: ".$_POST["city"];
      
    }
    //postal code
    if (isset($_POST["postal_code"])) 
    {
      $pc=$_POST["postal_code"];
      if(preg_match("/^[0-9]{4}$/", $pc)) 
      {
        echo "<br>";
        echo "Post code is: ".$_POST["postal_code"];
        // $post code  is valid
      }
      else 
      {
        echo "<br>";
        echo "Invalid Post code"; 
      }
    }
    //country
    if (isset($_POST["country"])) {
      echo "<br>";
      echo "Country is: ".$_POST["country"];
    }
      

    if(isset($_POST["submit"]))
    {
      //DAY
      if($_POST["day"]<1 || $_POST["day"]>31)
      {
        echo "<br>";
        echo "Day must between 1-31";
      }
      else
      {
        echo "<br>";
        echo "Date of Birth: ".$_POST["day"];
      }
      //Month
      if($_POST["month"]<1 || $_POST["month"]>12)
      {
        echo "<br>";
        echo "Month must between 1-12";
      }
      else
      {
        echo "-".$_POST["month"];
      }
      //Year
      if($_POST["year"]<1900 || $_POST["year"]>2010)
      {
        echo "<br>";
        echo "Year must between 1990-2010";
      }
      else
      {
        
        echo "-".$_POST["year"];
      }
    }
    if(isset($_POST["submit"]))
    {
        echo "<br>";
        echo "Your gender : ".$_POST["gender"];
    } 
  }
  else 
  {
    echo "Field can't be empty!!!";
  }
}



?>

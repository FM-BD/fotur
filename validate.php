<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<<?php 
	$name = $_POST["name"];
	$pass = $_POST["pass"];
	$c_pass = $_POST["c_pass"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$gender = $_POST["gender"];
	$date = $_POST["date"];
	$address = $_POST["address"];
	$city = $_POST["city"];
	$area = $_POST["area"];
	// $img = $_POST["img"];


	function name_vaid($xname)
	{
	if (empty($name)) {
	    echo "Name is can not be empty";
	    return $v=1;
	  } 
	  else{
	  	if(str_word_count($name)<2)
			{
				echo "Name needs to contain at least 2 words.";
				return $v=1;
			}
		else{
			if(ctype_digit( $name ))
				{
					echo "Name should not contain digit";
					return $v=1;
				} 
			
			else{
					if(ctype_alpha($name[0])== FALSE)
					{
						echo "Name should start with letter";
						return $v=1;
					}

					else{return $v=0;}
				}
			}
	  }	
	}
	function pass_valid($xpass, $xc_pass)
	{
		if ($pass == $c_pass)
		{
			if (strlen($pass)<8)
			{
				return $v = 1;
			}
			else
			{
				return $v = 0;
			}
		}
		else
		{
			return $v = 1;
		}
	}
	function email_validation ($xemail)
	{
		if (empty($email)) 
		{
	    	echo "Email is can not be empty";
	  		return $v=1;
	  	}
	  	else
	  	{
		  	if(filter_var($email, FILTER_VALIDATE_EMAIL) == FALSE)
		  	{
		  		echo"invalid email addres";
		  		return $v=0;
		  	}
	} 	
	  
	name_vaid($name);
	pass_valid($pass, $c_pass);
	email_validation($email);
	if (v == 0)
	{
		echo "Account has been created !!!";
	}
	else 
	{
		echo "Please fill up the form properly";
	}

	$x =0;
 ?>
</body>
</html>	
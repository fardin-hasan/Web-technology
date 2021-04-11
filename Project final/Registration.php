


<style>
	*{
			padding: 0;
			margin: 0;
		}
		
		body{
			background: url(aaaad.jpg) no-repeat;
	background-size: cover;
	height: 74vh;
		}
		.navbar{
			position: fixed;
			height: 80px;
			width: 100%;
			top: 0;
			left: 0;
			background: rgba(0,0,0,0.4);
		}
		.navbar .logo{
			width: 140px;
			height: auto;
			padding: 20px 100px;
		}
		.navbar ul{
			float: right;
			margin-right: 20px;
		}
		.navbar ul li{
			list-style: none;
			margin: 0 8px;
			display: inline-block;
			line-height: 80px;
		}
		.navbar ul li a{
			font-size: 20px;
			font-family: 'Roboto', sans-serif;
			color: white;
			padding: 6px 13px;
			text-decoration: none;
			transition: .4s;
		}
		.navbar ul li a.active,
		.navbar ul li a:hover{
			background: gray;
			border-radius: 2px;
		}


		.Registration{
			
			position: absolute;
			top: 80%;
			left: 50%;
			transform: translate(-50%, -50%);
			width: 450px;

		}
		.Registration h1{
			font-size: 40px;
			text-align: center;
			text-transform: uppercase;
			margin-top: -90px;
			margin-left: -50px;
			text-shadow: 6px 12px 8px gray;
			  padding-bottom: 10px;
		}

		.Registration p{
			font-size: 16px;
			margin: auto;
			text-shadow: 4px 10px 8px gray;
		}

		.Registration input{
			font-size: 14px;
			padding: auto;
			width: 100%
			border:0;
			border-radius: 5px;
			outline: none;
			margin: auto;
		}

		.button{
			font-size: 18px;
			font-weight: bold;
			margin: 3px 3px;
			padding: 5px 5px;
		}

		.Gander{
			font-size: 18px;
			font-weight: bold;
			margin: 3px 3px;
			padding: 5px 5px;

		}

		.date{
			margin-top: 10px;
		}

	
	

		span{
			color: black;
		}

</style>





<!DOCTYPE HTML>
	<html>
	<head>
	
	</head>
	<body style="background-color: lightblue">

<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<title>Registration Page</title>

<div class="wrapper">
			<nav class="navbar">
				<img class="logo" src="imag.png">
				<ul>
					<li><a class="active" href="Home_Page.php">Home</a></li>
					<li><a href="Login.php">Login</a></li>
					<li><a href="Registration.php">Registration</a></li>
					
					
				</ul>
			</nav>
</div>
</form>


	

	<?php
	

	 $birthErr = $nameErr = $emailErr = $genderErr = $websiteErr =$error= "";
	 $birthDate = $birthMonth = $birthYear = $name = $email = $gender = $comment = $website = "";
	 $username=$password="";
     $usernameErr=$passwordErr="";
	$confirmpassword="";
	$confirmpasswordErr="";
	$flag=1;
	

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["name"])) {
	    $nameErr = "Name is required";
	    $flag=0;
	  } else {
	

	       $name = test_input($_POST["name"]);
	

	      if (!preg_match("/^[a-zA-Z-. ]*$/",$name)) {
	         $nameErr = "Only letters and white space allowed";
	         $flag=0;
	       }
	    else  {
	             if(str_word_count($name)<2)
	          {
	           $nameErr = "Name must contains at least two words ";
	           $flag=0;
	

	          }
	      else {
	        $name = test_input($_POST["name"]);
	      }
	    }
	  }
	

	  if (empty($_POST["email"])) {
	    $emailErr = "Email is required";
	    $flag=0;
	  } else {
	    $email = test_input($_POST["email"]);
	    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	      $emailErr = "Invalid email format";
	      $flag=0;
	    }
	  }
	

	  if (empty($_POST["birthDate"]) || empty($_POST["birthMonth"]) || empty($_POST["birthYear"])) {
	    $birthErr = "Date Month and Year is required";
	    $flag=0;
	  } else {
	

	    $birthDate=test_input($_POST["birthDate"]);
	    $birthMonth=test_input($_POST["birthMonth"]);
	    $birthYear=test_input($_POST["birthYear"]);
	

	    if(!is_numeric($birthDate))
	    {
	      $birthErr="Please input Numeric Date";
	      $flag=0;
	    }
	    else {
	

	      if(!is_numeric($birthMonth))
	      {
	          $birthErr="Please input Numeric month";
	          $flag=0;
	      }
	      else {
	        if(!is_numeric($birthYear))
	        {
	          $birthErr="Please input Numeric Year";
	          $flag=0;
	        }
	        else {
	          if($birthDate>31 || $birthDate<1)
	          {
	              $birthErr=" Input Date between 1 to 31";
	              $flag=0;
	          }
	          else {
	              if($birthMonth>12 || $birthMonth<1)
	              {
	                  $birthErr=" Input Month between 1 to 12";
	                  $flag=0;
	              }
	                  else {
	                    $birthErr=" ";
	                  }
	              }
	          }
	

	        }
	      }
	    
	

	

	    if (empty($_POST["username"])) {
	      $usernameErr = "User Name is required";
	      $flag=0;
	    }
	    else {
	     $username = test_input($_POST["username"]);
	

	      if (!preg_match("/^[a-zA-Z-. ]*$/",$username)) {
	         $usernameErr = "Only letters and white space allowed";
	         $flag=0;
	       }
	       else {
	         if(strlen($username)<2)
	         {
	            $usernameErr = "Name must contains at least two character ";
	            $flag=0;
	         }
	       }
	    }
	

	    if(empty($_POST["password"]))
	    {
	      $passwordErr = "Password is required";
	      $flag=0;
	    }
	    else {
	      $password=test_input($_POST["password"]);
	      if(strlen($password)<8)
	      {
	        $passwordErr="Password must not be less than eight (8) characters";
	        $flag=0;
	      }
	      else {
	        if(substr_count($password,"@")<1 || substr_count($password,"#")<1 || substr_count($password,"%")<1 || substr_count($password,"$")<1)
	        {
	          $passwordErr="Password must contain at least one of the special characters (@, #, $,%)";
	          $flag=0;
	        }
	      }
	    }
	

	    if(empty($_POST["confirmpassword"]))
	    {
	      $confirmpasswordErr = "Confirm Password is required";
	      $flag=0;
	    }
	    else {
	      if(empty($_POST["password"]))
	      {
	        $confirmpasswordErr = "Password is required";
	        $flag=0;
	      }
	      else {
	        $confirmpassword=test_input($_POST["confirmpassword"]);
	

	        if(strcmp($password,$confirmpassword))
	        {
	          $confirmpasswordErr="Password and confirm password have to be same";
	          $flag=0;
	        }
	      }
	    }
	    if (empty($_POST["gender"])) {
	      $genderErr = "Gender is required";
	      $flag=0;
	    } else {
	      $gender = test_input($_POST["gender"]);
	    }
	    }
	}
	   
	

	

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	?>
	

	<div class="Registration">
	    <h1>Register Here</h1>
	<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<p>Name: </p>
			  <input type="text" name="name" value="<?php echo $name;?>">
			  <span class="error">* <?php echo $nameErr;?></span>
			  <br><br>


 		<p> E-mail: </p>     
	  <input type="text" name="email" value="<?php echo $email;?>">
	  <span class="error">* <?php echo $emailErr;?></span>
	  <br><br>

			

		<p>Voter Id No:</p>
		<input type="text" name="voterid" value="<?php echo $password;?>">
	  	<span class="error">* </span>
	  	<br><br>
	

			<P>Password:</P>
			   <input type="text" name="password" value="<?php echo $password;?>">
			  <span class="error">* <?php echo $passwordErr;?></span>
			  <br><br>

			
		<P>Comfirm Password:</P>
	   <input type="text" name="confirmpassword" value="<?php echo $confirmpassword;?>">
	  <span class="error">* <?php echo $confirmpasswordErr;?></span>
	  <br><br>
	  
			<P>Address:</P>	 
			  <input type="text" name="address" value="<?php echo $password;?>">
			  <span class="error">* </span>
			  <br><br>
			  
    
	  <div >
	  	<p>Gander:</p>
	  	<input class="Gander" type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female"> Female
	  <input class="Gander" type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male"> Male
	  <input class="Gander" type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other"> Other
	  <span class="error">* <?php echo $genderErr;?></span>
	
	  </div>


	  
	   <div class="date">
	   	<input type="text" size="1" placeholder=" DD " name="birthDate" value="<?php echo $birthDate; ?>"> /
	  <input type="text" size="1" placeholder=" MM " name="birthMonth" value="<?php echo $birthMonth; ?>"> /
	  <input type="text" size="2" placeholder=" YYYY " name="birthYear" value="<?php echo $birthYear; ?>">
	  <span class="error">* <?php echo $birthErr;?></span>
	   </div>
	
	  
	

	<br>
	  <div >
	  	<input class="button" type="submit" name="Back" value="Submit">
	  
	  </div>
	  <br>
	 

	  
	 

			 
	</form>
	
	</div>
	



	</body>
	</html>
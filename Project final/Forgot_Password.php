
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
		.get-pass{
			margin-top: 170px;
			margin-left: 40px;
		}
		.sub-mail{

		}
		.email{
			margin-top:15px;
			font-size: 16px;

		}
		.submit{
			padding: 15px 20px;
				font-size: 16px;
				
				
				font-family: "FontAwesome";
				
		}
		.button{
			padding: 10px 45px;
			margin-left: 65px;
				border: none;
				background-color: gray;
				color: #fff;
				font-family: "FontAwesome";
				border: 1px solid gray;
  					border-radius: 5px;
		}
		h1 {
			  text-shadow: 6px 12px 8px gray;
			  color: white;
			}
			.get-pass h1{
				text-shadow: 4px 2px  gray;
				color: black;
			  
			}




		.footer{
			margin-top: 210px ;
			margin-left: 40px;
			color: black;
			font-size: 25px;
			width: 25px;
			font-weight: bold;
		}

</style>


<?php 


session_start();

 ?>


 <!DOCTYPE HTML>
	<html>
	<head>
	
	</head>
	<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<title>FORGOT PASSWORD</title>
<h1>Online Digital Voting System</h1>



<div class="wrapper">
			<nav class="navbar">
				
				<ul>
					<li><a class="active" href="Home_Page.php">Home</a></li>
					<li><a href="Login.php">Login</a></li>
					<li><a href="Registration.php">Registration</a></li>
					
					
				</ul>
			</nav>
</div>

<?php
	

	 $emailErr= "";
	 $email = "";
	$flag=1;


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



	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	?>



	
	   <div class="get-pass">
	   	 <h1>FORGOT PASSWORD</h1>
	    
	<form class="sub-mail" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">


     Enter email:
			<input class="email" type="email" name="email">
		
		<div class="submit">
			<button class="button" type="submit" name="reset-password" class="login-btn">Submit</button>
		</div>
	</form>
	   </div>


<div class="footer">
	<?php include 'footer.php';?>
</div>





</form>


</body>
</html>

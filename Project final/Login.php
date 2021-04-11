

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

		.container{
			padding: 100px;
			width: 700px;
			height: 250px;
			text-align: center;

			
			margin:  auto;
			
			margin-top: 160px;
		}	
          h1 {
			  text-shadow: 6px 12px 8px gray;
			  padding-bottom: 10px;
			}

		.container img{
			width: 100px;
			height: 100px;
			margin: -120px;
		}

		input[type="text"],input[type="password"]{
					margin-top: 30px;
					height: 35px;
					width: 180px;
					font-size: 12px;
					margin: auto;
					background-color: #fff;
					padding-left: 15px;
					border: 3px solid black;
  					border-radius: 5px;
				}




			.form-input::before{
				
				font-family: "FontAwesome";
				padding-left: 700px;
				padding-top: 40px;
				position: absolute;
				font-size: 35px;
				color: #2980b9; 
			}
			
			.btn-login{
				padding: 15px 95px;
				border: none;
				background-color: gray;
				color: #fff;
				font-family: "FontAwesome";
				border: 1px solid gray;
  					border-radius: 5px;
			}

			.Forgot{
				list-style: none;
				text-decoration: none;
				padding-top: 10px;
			}

   .footer{
   	color: black;
	margin-left: 15px;

	
	font-size: 15px;
	width: 15px;
	font-weight: bold;
   }


	</style>

<!DOCTYPE HTML>
	<html>
	<head>
		
	
	</head>
	<body >
<div class="main-div">	
<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<title>LOGIN</title>


<div class="wrapper">
			<nav class="navbar">
				<img class="logo" src="us.png">
				<ul>
					<li><a class="active" href="Home_Page.php">Home</a></li>
					<li><a href="Login.php">Login</a></li>
					<li><a href="Registration.php">Registration</a></li>
					
					
				</ul>
			</nav>
</div>
</form>
	
<div class="container">
		 	<h1>Enter your Username and Password to Login</h1>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			<div class="form-input">
				
			<input type="text" name="uname" placeholder="Enter the user name">
				
			</div>

	         <br><br>
			<div class="form-input">
				
			<input type="password" name="pass" placeholder="Enter the password">
				
			</div>
	        <br><br>

	        <input type="submit" type="submit" value="LOGIN" class="btn-login"/>
	        <div >
	        	<a class="Forgot" href="Forgot_Password.php">Forgotten Password?.</a>
	        </div>




	         <br><br>	
	        </form>	
         	
</div>





<?php 

session_start();

$username="admin";
$password="admin";

if (isset($_POST['uname'])) {
	if ($_POST['uname']==$username && $_POST['pass']==$password) {
		$_SESSION['uname'] = $username;
		header("location:Logged_in_dashboard.php");
	}
	else{
		$msg="username or password invalid";
		echo "<script>alert('uname or pass incorrect!')</script>";
	}

}

 ?>


	

		<?php if(isset($msg)){?>
		    <h4><?php echo $msg;?></h4>
		    
    	<?php } ?>




<div class="footer">
	<?php include 'footer.php';?>
</div>

	
	
	</div>



</body>
</html>
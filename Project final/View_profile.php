
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

		.Profile{
			margin-top: 210px;
			margin-left: 120px;
			line-height: 20px;
			text-shadow: 6px 12px 8px gray;
			font-size: 20px;
			
		}
		.profile h1{
			font-size: 40px;
			margin-bottom: 25px;
			text-shadow: 4px 2px gray;
		}

		.end{
			margin-left: 120px;
			margin-top: -10px;
			font-size: 20px;
			

		}

		.end a{
			list-style: none;
			text-decoration:none;
		}

		.sess{
			margin-top: 100px;
			margin-left: 20px;
			font-size: 20px;
		}
	</style>

<!DOCTYPE HTML>
	<html>
	<head>
	
	</head>
	<body>

<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<title>VIEW PROFILE</title>





	<div class="wrapper">
			<nav class="navbar">

				
				
				<ul>
					<li><a href= "Logged_in_dashboard.php">Dashboard</a></li>
					<li><a href= "View_Profile.php">View Profile</a></li>
					
					<li><a href= "Change_Profile_Picture.php">Change Profile Picture</a></li>
					<li><a href= "Change_Password.php">Change Password</a></li>
					<li><a href= "Logout.php">Logout</a></li>
				</ul>
			</nav>
</div>









	<div class="Profile">
	<h1>PROFILE</h1>

	<form class="info"method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	  Name: <b>Troy</b>
	
	  <br><br>
	   E-mail: <b>Troy@aiub.edu</b>
	  <br><br>
   
	Gender:
	  
	  <b> Male</b>
	  
	
      <br><br>

      
	  Date of Birth:
	 
	 <b> 18/10/1998</b>
	
		
	</div>
<br><br>
	  

<div class="end">
	
	<a href='Change_Profile_Picture.php'>Change Profile Picture</a><br>
	<br>
</div>

    


<div class="sess">
	<?php 


session_start();

if (isset($_SESSION['uname'])) {

    echo"<a herf='Bob.php'>Logged in as Troy</a><br>";
	

	

}
else{
		$msg="error";
		header("location:Login.php");
		// echo "<script>location.href='login.php'</script>";
	}

 ?>

</div>


 
</form>
</body>
</html>


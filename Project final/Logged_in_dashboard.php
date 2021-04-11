
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
			position: relative;
			height: 80%;
			width: 100%;
			top: 200;
			left: 0;
			
		}

		.navbar ul{
			float: center;
			margin-right: 20px;
		}
		.navbar ul li{
			list-style: none;
			margin: 0 60px;
			
			line-height: 30px;
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
		.navbar h1{
			text-transform: uppercase;
			margin: 0 70px;
			color: black;
			text-shadow: 6px 12px 8px gray;
			font-size: 60px;
		}
		h1{
			color: white;
		}
		
		.footer{
			margin-top: 160px ;
			margin-left: 40px;
		}


	
</style>


<!DOCTYPE HTML>
	<html>
	<head>
	<h1>Online Digital Voting System</h1>
	</head>
	<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<title>DASHBOARD</title>


<?php 


session_start();

if (isset($_SESSION['uname'])) {

    echo "<a herf='Troy.php'>Logged in as Troy</a><br>";
	

	

}
else{
		$msg="error";
		header("location:Login.php");
		
	}

 ?>


<div class="wrapper">
			<nav class="navbar">
				<h1>Dashboard</h1>
				
				<ul>
					<li><a href= "View_Profile.php">View Profile</a></li>
					<li><a href= "Edit_Profile.php">Edit Profile</a></li>
					<li><a href= "Change_Profile_Picture.php">Change Profile Picture</a></li>
					<li><a href= "Change_Password.php">Change Password</a></li>
					<li><a href= "Logout.php">Logout</a></li>
				</ul>
			</nav>
</div>







<div class="footer">
	<?php include 'footer.php';?>
</div>



 
</form>

</body>
</html>
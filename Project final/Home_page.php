<?php 


session_start();

 ?>

<style>
	@import url('https://fonts.googleapis.com/css?family=Roboto:700&display=swap');
*{
	padding: 0;
	margin: 0;
}
.wrapper{
	background: url(aaaad.jpg) no-repeat;
	background-size: cover;
	height: 100vh;
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
.wrapper .center{
	position: absolute;
	left: 50%;
	top: 55%;
	transform: translate(-50%, -50%);
	font-family: monospace;
	user-select: none;
}
.center h1{
	color: black;
	font-size: 70px;
	width: 900px;
	font-weight: bold;
	text-align: center;
	text-shadow: 6px 12px 8px gray;
			  
}
.footer{
	
	color: black;
	margin-top:-50px;
	
	font-size: 25px;
	width: 25px;
	font-weight: bold;
	
	
	
}
</style>


<!DOCTYPE html>
<html>
<body class="main-body">

<title>HOME PAGE</title>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

<div class="wrapper">
			<nav class="navbar">
				<img class="logo" src="Bangla.png">
				<ul>
					<li><a class="active" href="Home_Page.php">Home</a></li>
					<li><a href="Login.php">Login</a></li>
					<li><a href="Registration.php">Registration</a></li>
					
					
				</ul>
			</nav>
			<div class="center">
			<h1>Welcome to Online Digital voting System </h1>
			
			
		</div>

</div>
<div class="footer">
	<?php include 'footer.php';?>
</div>
</form>




</body>
</html>

<?php 


session_start();

 ?>





<!DOCTYPE html>
<html>
<body>




<form style="border:4px; border-style:solid; border-color:black; padding: 1em;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<title>HOME PAGE</title>
<h1>Welcome to Online Voting</h1>

<div class="menu">
<?php include 'menu.php';?>
</div>

<h1>Digital Online Voting System</h1>

<?php include 'footer.php';?>

</form>
</body>
</html>

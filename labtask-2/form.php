<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<?php

$nameErr = $emailErr = $dobErr= $genderErr = $degreeErr = $bloodgroupErr= "";
$name = $email = $dob = $gender = $degree= $bloodgroup="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name"])) {
$nameErr = "Cannot be empty";
} else if (str_word_count ($name)<2){
$nameErr = "contains atleast 2 words";
}

 else{} {
$name = test_input($_POST["name"]);

if (!preg_match("/^[a-zA-Z-'. ]*$/",$name) ) {
$nameErr = "Only letters and white space allowed";
}
}

 if (empty($_POST["email"])) {
$emailErr = "Cannot be empty";
} else {
$email = test_input($_POST["email"]);
}
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$emailErr = "Must be valid";
}
if (empty($_POST["dob"])) {
$dobErr = "Cannot be empty";
} else {
$dob = test_input($_POST["dob"]);
}
if (empty($_POST["gender"])) {
$genderErr = "Gender is required";
} else {
$gender = test_input($_POST["gender"]);
}
if (empty($_POST["degree"])) {
$degreeErr = "Cannot be empty";
} else {
$degree = test_input($_POST["degree"]);
}
if (empty($_POST["bloodgroup"])) {
$bloodgroupErr = "Cannot be empty";
} else {
$bloodgroup = test_input($_POST["bloodgroup"]);
}


}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>

<h2></h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 <fieldset>
 	<legend>Name</legend>
 	<input type="text" name="name">
 	<span class="error">* <?php echo $nameErr;?></span>
 </fieldset>

<br><br>
 
<fieldset>
	<legend>Email</legend>
	<input type="text" name="email">
<span class="error">* <?php echo $emailErr;?></span>
</fieldset>
<br><br>

<fieldset>
	<legend>Date Of Birth</legend>
	 <input type="date" id="birthday" name="dob">
<span class="error">* <?php echo $dobErr;?></span>
</fieldset>
<br><br>


 <br>

<fieldset>
	<legend>Gender</legend>
	<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other
<span class="error">* <?php echo $genderErr;?></span>
</fieldset>

 <br><br>
<br><br>
<fieldset>
	<legend>Degree</legend>

<input type="checkbox" name="degree" value="SSC">SSC
<input type="checkbox" name="degree" value="HSC">HSC
<input type="checkbox" name="degree" value="BSc">BSc
<input type="checkbox" name="degree" value="MSc">MSc
<span class="error">* <?php echo $degreeErr;?></span>
</fieldset>
<br><br>
<br><br>

<fieldset>
	<legend>BloodGroup</legend>
	<select id="bloodgroup" name="bloodgroup" size="2">
<option value="A+">A+</option>
<option value="O">O</option>
<option value="B">B</option>
<option value="AB">AB</option>

 </select>
<span class="error">* <?php echo $bloodgroupErr;?></span>
</fieldset>
<br><br>



<input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $dob;
echo"<br>";
echo $degree;
echo "<br>";
echo $bloodgroup;
echo"<br>";
echo $gender;
echo "<br>"

?>
</body>
</html>
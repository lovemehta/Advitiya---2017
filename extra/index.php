<?php
$db_host = "localhost";
$db_username = "iitropar";
$db_pass = "iitropar1234";
$db_name = "ca_am";

$con = mysqli_connect("$db_host","$db_username","$db_pass","$db_name");
if(isset($_POST['signup'])){
	
	$email = $_POST['email'];
	$name = $_POST['name'];
	$pass = $_POST['pass'];
	$qstn = "level1";
	
	$sql = mysqli_query($con,"insert into entry values('','$name','$email','$pass','$qstn')");
		echo "successfully signup";
		
	}
?>
<html>
<body>
<form  method="post" action="session.php">
<input type="text" name="email" placeholder="email"/>
<input type="password" name="pass" placeholder="password"/>
<input type="submit" name="login" value="login"/>
</form>
<br><br>
<form  method="post" action="index.php">
<input type="text" name="email" placeholder="email"/>
<input type="password" name="pass" placeholder="password"/>
<input type="text" name="name" placeholder="Name"/>
<input type="submit" name="signup" value="signup"/>
</form>
</body>
</html>
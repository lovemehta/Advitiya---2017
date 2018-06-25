<?php
include "session.php"; 

$db_host = "localhost";
$db_username = "iitropar";
$db_pass = "iitropar1234";
$db_name = "ca_am";

$con = mysqli_connect("$db_host","$db_username","$db_pass","$db_name");
if(!$_SESSION['user']){
	header('Location:index.php');
}
if(isset($_SESSION['user'])){
	$aid=$_SESSION['user'];
	$ddf = mysqli_query($con, "SELECT  email,name,qstn FROM entry  WHERE id='$aid' ");
		{
		while($r = mysqli_fetch_array($ddf)){
			
			$aemail = $r['email'];
			$qstn = $r['qstn'];
			
			$aname = $r['name'];
			if($qstn!="level2"){header('Location: '.$qstn.'.php');}
		}
}}

if(isset($_POST['ans'])){
	
	$ans = $_POST['answ'];
	if($ans=="hello2"&&$qstn=="level2"){
		$sql = mysqli_query($con,"UPDATE entry SET qstn='level3' WHERE id='$aid'");
		header('Location: level3.php');
		
	}
}
?>

<html>
<body>
<?php  echo "Q2. For "; echo $aname;?><br><br>
ans:hello2<br><br>
<form method="post" action="level2.php">
<input type="text" name="answ" placeholder="Answer"/>
<input type="submit" name="ans" value="Sumbit"/>
</form>
<b><br>
<form method="post" action="session.php">
<input type="submit" name="logout" value="Logout"/>
</form>
</body>
</html>
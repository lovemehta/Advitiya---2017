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
			if($qstn!="level3"){header('Location: '.$qstn.'.php');}
		}
}}

if(isset($_POST['ans'])){
	
	$ans = $_POST['answ'];
	if($ans=="hello3"&&$qstn=="level3"){
		$sql = mysqli_query($con,"UPDATE entry SET qstn='level4' WHERE id='$aid'");
		header('Location: level4.php');
		
	}
}
?>

<html>
<body>
<?php  echo "Q3. For "; echo $aname;?><br><br>
ans:hello3<br><br>
<form method="post" action="level3.php">
<input type="text" name="answ" placeholder="Answer"/>
<input type="submit" name="ans" value="Sumbit"/>
</form>
<b><br>
<form method="post" action="session.php">
<input type="submit" name="logout" value="Logout"/>
</form>
</body>
</html>
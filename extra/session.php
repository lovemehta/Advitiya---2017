<?php
session_start();
$db_host = "localhost";
$db_username = "iitropar";
$db_pass = "iitropar1234";
$db_name = "ca_am";

$con = mysqli_connect("$db_host","$db_username","$db_pass","$db_name");
if(isset($_POST['login'])){
	
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$gt=0;
	$ddf = mysqli_query($con, "SELECT  id,name,email,qstn,pass FROM entry WHERE email='$email'");
		{
		//if($ddf) echo "yes"; else echo "no";
		while($r = mysqli_fetch_array($ddf)){
			$aid=$r['id'];
			$pss=$r['pass'];
			$qstn=$r['qstn'];
			$gt=1;
			if($pass==$pss){
			 $_SESSION['user'] = $aid;
			 $date=date('y-m-d H:i:s');
			header('Location: '.$qstn.'.php');}
			else {header('Location: index.php');}
		
		}
		
	}
	if($gt==0) header('Location: index.php');
}
if(isset($_SESSION['user'])){
	$aid=$_SESSION['user'];
}
	
if(isset($_POST['logout'])){
	session_destroy();
	header('Location: index.php');}
	

?>
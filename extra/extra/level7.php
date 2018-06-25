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
			if($qstn!="level7"){header('Location: '.$qstn.'.php');}
		}
}}

if(isset($_POST['ans'])){

	$ans = $_POST['answ'];
	$ans = strtolower($ans);
	if($ans=="solution"&&$qstn=="level7"){
		$sql = mysqli_query($con,"UPDATE entry SET qstn='level8' WHERE id='$aid'");
		header('Location: level52.php');

	}
}
?>

<!doctype html>
<head>
	<title>Level7</title>
	<style>*{margin:0px;width:99.9%;font-family:"Comic Sans MS", cursive, sans-serif;color:#244435;}
	#logot {background-color: white;border:none;outline:none;margin-left: -30px;font-size: 20px;}
#logot:hover{transform:scale(1.3);cursor:pointer;background-color: white;}

	</style>
</head>
<body>
	<div style="width:100%;height:100px;"/>
			<div style="width:85%; float:left;"/>
				<img src="advitiya.png" style="width:30%;height:80px;"/>
		</div>
		<div style="width:15%; float:left;margin-top:20px;"/>
		<h4 >Hello  <?php echo $aname;?> !</h4>
			<form   method="post" action="session.php">
			<input id="logot" type="submit" name="logout" value="Logout"/>
			</form>
	</div></div><hr width="100%" style="color:#3fc685;height:5px;" height="20px" color="#3fc685"/>

	<div style="width:90%; min-height:700px; background-color:#f7f7f7;padding:5%;">
		<div style="width:60%;background-color:white;min-height:500px;float:left;box-shadow:0px 5px 25px black;text-align:center;">
				<hr width="100%" style="color:#3fc685;height:20px;" height="20px" color="#3fc685"/>
				<h1 align="center" >Question 7</h1><br><hr style="width:80%;margin-left:10%;"><br>
				<img src="af3f3afq7.jpg" style="width:90%;min-height:300px;padding:5%;background-color:#3fc685"/><br><br>
				<form  method="post" action="level7.php">
				<input required name="answ" type="text" style="width:50%;height:40px;background-color:#f7f7f7;float:left;margin-left:15%;"" placeholder="Enter Answer"/>
				<input name="ans" type="submit" style="width:20%;height:40px;background-color:#3fc685;float:left;color:white;" value="Submit"/></form> <br><br><br>

		</div>



		<div style="width:30%;background-color:white;min-height:600px;float:left;margin-left:10%;box-shadow:0px 5px 25px black;">
						<hr width="100%" style="color:#3fc685;height:20px;" height="20px" color="#3fc685"/>
					<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fadvitiya.iitrpr&width=400&colorscheme=light&show_faces=true&border_color&stream=true&header=true&height=600" scrolling="yes" style="border:none; overflow:hidden; width:100%; height:600px; background: white; float:left; " allowtransparency="true" frameborder="0"></iframe></div>

	</div>

<hr width="100%" style="color:#3fc685;height:20px;" height="20px" color="#3fc685"/>

</body>
</html>

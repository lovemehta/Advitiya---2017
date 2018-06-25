<?php
$db_host = "localhost";
$db_username = "iitropar";
$db_pass = "iitropar1234";
$db_name = "ca_am";

$msgg='';
$con = mysqli_connect("$db_host","$db_username","$db_pass","$db_name");
if(isset($_POST['signup'])){

	$email = $_POST['email'];
	$name = $_POST['name'];
	$pass = $_POST['pass'];
	$qstn = "level1";

	$sql = mysqli_query($con,"insert into entry values('','$name','$email','$pass','$qstn')");
		$msgg= "successfully signed up!";

	}
?>
<!doctype html>
<head>
  <style>*{margin:0px;width:99.9%;font-family:"Comic Sans MS", cursive, sans-serif;color:#244435;}
  #logot {background-color: white;border:none;outline:none;margin-left: -30px;font-size: 20px;}
#logot:hover{transform:scale(1.3);cursor:pointer;background-color: white;}

  </style>
	<title>Home</title>
</head>
<body>
  <div style="width:100%;height:100px;"/>
      <div style="width:90%; float:left;"/>
        <img src="advitiya.png" style="width:30%;height:80px;"/>
    </div>
    <div style="width:10%; float:left;margin-top:20px;"/>
      <form   method="post" action="session.php">
      <input id="logot" type="submit" name="logout" value="Logout"/>
      </form>
  </div></div><hr width="100%" style="color:#3fc685;height:5px;" height="20px" color="#3fc685"/>

  <div style="width:90%; min-height:600px; background-color:#f7f7f7;padding:5%;">
    <div style="width:60%;background-color:white;min-height:400px;float:left;box-shadow:0px 5px 25px black;text-align:center;">
        <hr width="100%" style="color:#3fc685;height:20px;" height="20px" color="#3fc685"/>
        <h1 align="center" >Log In</h1><br><hr style="width:80%;margin-left:10%;"><?php echo $msgg;?><br>
        <br>
        <form  method="post"style="width:90%;min-height:200px;padding:5%;background-color:#3fc685" action="session.php">
        <input required name="email" type="text" style="width:50%;height:40px;background-color:#f7f7f7;" placeholder="Enter Email"/><br><br>
        <input required name="pass" type="password" style="width:50%;height:40px;background-color:#f7f7f7;" placeholder="Enter Password"/><br><br>
        <input name="login" type="submit" style="width:20%;height:40px;background-color:#3fc685;color:white;" value="Submit"/></form> <br><br><br>

<br>
        <h1 align="center" >Sign up</h1><br><hr style="width:80%;margin-left:10%;"><br>
        <br>
        <form  method="post" style="width:90%;min-height:200px;padding:5%;background-color:#3fc685" action="index.php">
        <input required name="email" type="email" style="width:50%;height:40px;background-color:#f7f7f7;" placeholder="Enter Email"/><br><br>
        <input required name="pass" type="password" style="width:50%;height:40px;background-color:#f7f7f7;" placeholder="Enter Password"/><br><br>
        <input required name="name" type="text" style="width:50%;height:40px;background-color:#f7f7f7;" placeholder="Enter Name"/><br><br>
        <input name="signup" type="submit" style="width:20%;height:40px;background-color:#3fc685;color:white;" value="Submit"/></form> <br><br><br>
        <br><br>


    </div>



    <div style="width:30%;background-color:white;min-height:600px;float:left;margin-left:10%;box-shadow:0px 5px 25px black;">
            <hr width="100%" style="color:#3fc685;height:20px;" height="20px" color="#3fc685"/>
          <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fadvitiya.iitrpr&width=300&colorscheme=light&show_faces=true&border_color&stream=true&header=true&height=600" scrolling="yes" style="border:none; overflow:hidden; width:100%; height:600px; background: white; float:left; " allowtransparency="true" frameborder="0"></iframe></div>

  </div>

<hr width="100%" style="color:#3fc685;height:20px;" height="20px" color="#3fc685"/>

</body>
</html>

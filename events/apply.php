<?php
require "connect.php";
$ok=0;
$msg2='';$msg3="( Donot close or Reload )";
$msg="Successfully Submitted";
if(isset($_POST['apply'])){
	$event=$_POST['event_id'];
	$ok=1;
	$date=date('y-m-d H:m:s');
	$ddf = mysqli_query($con, "SELECT  id,no FROM u_counter  WHERE id='1'");
		{while($r = mysqli_fetch_array($ddf)){$count = $r['no'];}}
		
	if($event==101){
		$reason="E-Buzz";
		$mname1='';
		$mname2='';
		$name=$_POST['lname'];
		$email=$_POST['email'];
		$colg_nm=$_POST['college_name'];
		$tname=$_POST['tname'];
		$phone=$_POST['phone'];
		$about=$_POST['about'];
		$mname1=$_POST['mname1'];
		$mname2=$_POST['mname2'];
		$n=0;
		
		if($ok==1){
		$sql = mysqli_query($con,"insert into ebuzz values('$count','$email','$tname','$name','$colg_nm','$phone','$about','$mname1','$mname2','$date','$n')");
		$sql = mysqli_query($con,"insert into users values('$count','101','$n')");
		$count+=1;

		$sqli = mysqli_query($con,"UPDATE u_counter SET no='$count' WHERE id=1");}
		
	}
	if($event==102){
		
		$reason="One Ohm";
		$mname1='';
		$memail='';
		$mphone1='';
		$name=$_POST['lname'];
		$email=$_POST['email'];
		$colg_nm=$_POST['college_name'];
		$city=$_POST['city'];
		$tname=$_POST['tname'];
		$phone=$_POST['phone'];
		$course=$_POST['course'];
		$mname1=$_POST['mname1'];
		$memail1=$_POST['memail1'];
		$mphone1=$_POST['mphone1'];
		$n=0;
		
		if($ok==1){
		$sql = mysqli_query($con,"insert into circuit values('$count','$email','$tname','$name','$colg_nm','$city','$phone','$course','$mname1','$memail1','$mphone1','$date','$n')");
		$sql = mysqli_query($con,"insert into users values('$count','102','$n')");
		$count+=1;

		$sqli = mysqli_query($con,"UPDATE u_counter SET no='$count' WHERE id=1");}
		
	}
	if($event==103){
		$reason="Hackamania";
		$mname1='';
		$mabout1='';
		$mname2='';
		$mabout2='';
		$name=$_POST['lname'];
		$labout=$_POST['labout'];
		$email=$_POST['email'];
		$colg_nm=$_POST['college_name'];
		$city=$_POST['city'];
		$tname=$_POST['tname'];
		$phone=$_POST['phone'];
		$req=$_POST['req'];
		$mname1=$_POST['mname1'];
		$mabout1=$_POST['mabout1'];
		$mname2=$_POST['mname2'];
		$mabout2=$_POST['mabout2'];
		$n=0;

		
		if($ok==1){
		$sql = mysqli_query($con,"insert into hackathon values('$count','$email','$tname','$labout','$name','$colg_nm','$city','$phone','$req','$mname1','$mabout1','$mname2','$mabout2','$date','$n')");
		$sql = mysqli_query($con,"insert into users values('$count','103','$n')");
		$count+=1;

		$sqli = mysqli_query($con,"UPDATE u_counter SET no='$count' WHERE id=1");}
	}




	if($event==104){
		$reason="Design and Simulate";
		$name=$_POST['lname'];
		$email=$_POST['email'];
		$colg_nm=$_POST['college_name'];
		$phone=$_POST['phone'];
		$n=0;
		
		if($ok==1){
		$sql = mysqli_query($con,"insert into design values('$count','$email','$name','$colg_nm','$phone','$date','$n')");
		$sql = mysqli_query($con,"insert into users values('$count','104','$n')");
		$count+=1;

		$sqli = mysqli_query($con,"UPDATE u_counter SET no='$count' WHERE id=1");}
	
		
		
	}
if($event==155){
		$reason="Stoke Stalker";
		$name=$_POST['lname'];
		$email=$_POST['email'];
		$colg_nm=$_POST['college_name'];
		$phone=$_POST['phone'];
		
		if($ok==1){
		$n=0;
		$sql = mysqli_query($con,"insert into share_marketing values('$count','$email','$name','$colg_nm','$phone','$date','$n')");
		$sql = mysqli_query($con,"insert into users values('$count','155','$n')");
		$count+=1;

		$sqli = mysqli_query($con,"UPDATE u_counter SET no='$count' WHERE id=1");}
	
		
		
	}
	
	if($event==120){
		$reason="Brainvista";
		$mname1='';
		$name=$_POST['lname'];
		$tname=$_POST['tname'];
		$email=$_POST['email'];
		$colg_nm=$_POST['college_name'];
		$phone=$_POST['phone'];
		$mname1=$_POST['mname1'];
		$n=0;
		
		if($ok==1){
		$sql = mysqli_query($con,"insert into cbrainwaves values('$count','$email','$name','$colg_nm','$phone','$tname','$mname1','$date','$n')");
		$sql = mysqli_query($con,"insert into users values('$count','120','$n')");
		$count+=1;

		$sqli = mysqli_query($con,"UPDATE u_counter SET no='$count' WHERE id=1");}
		}
	if($event==121){
		$reason="Q-fiesta";
		$mname1='';
		$name=$_POST['lname'];
		$email=$_POST['email'];
		$colg_nm=$_POST['college_name'];
		$phone=$_POST['phone'];
		$mname=$_POST['mname1'];$city=$_POST['city'];

		$n=0;
		
		if($ok==1){
		$sql = mysqli_query($con,"insert into qfiesta values('$count','$email','$name','$colg_nm','$city','$phone','$tname','$mname1','$date','$n')");
		$sql = mysqli_query($con,"insert into users values('$count','121','$n')");
		$count+=1;

		$sqli = mysqli_query($con,"UPDATE u_counter SET no='$count' WHERE id=1");}
	}
	if($event==122){
		$reason="Fury Road";
		$mname1='';
		$mname2='';
		$mname3='';
		$name=$_POST['lname'];
		$email=$_POST['email'];
		$colg_nm=$_POST['college_name'];
		$phone=$_POST['phone'];
		$tname=$_POST['tname'];
		$mname1=$_POST['mname1'];
		$mname2=$_POST['mname2'];
		$mname3=$_POST['mname3'];
		$n=0;
		
		if($ok==1){
		$sql = mysqli_query($con,"insert into manual_bot values('$count','$email','$name','$colg_nm','$phone','$tname','$mname1','$mname2','$mname3','$date','$n')");
		$sql = mysqli_query($con,"insert into users values('$count','122','$n')");
		$count+=1;

		$sqli = mysqli_query($con,"UPDATE u_counter SET no='$count' WHERE id=1");}
		
	}
	
	if($event==123){
		$reason="Robowars";
		$mname1='';
		$mname2='';
		$mname3='';
		$mname4='';
		$name=$_POST['lname'];
		$email=$_POST['email'];
		$colg_nm=$_POST['college_name'];
		$phone=$_POST['phone'];
		$tname=$_POST['tname'];
		$mname1=$_POST['mname1'];
		$mname2=$_POST['mname2'];
		$mname3=$_POST['mname3'];
		$mname4=$_POST['mname4'];
		$n=0;
		
		if($ok==1){
		$sql = mysqli_query($con,"insert into robowars values('$count','$email','$name','$colg_nm','$phone','$tname','$mname1','$mname2','$mname3','$mname4','$date','$n')");
		$sql = mysqli_query($con,"insert into users values('$count','123','$n')");
		$count+=1;

		$sqli = mysqli_query($con,"UPDATE u_counter SET no='$count' WHERE id=1");}

		
		
	}
	if($event==105){
		$reason="ExoMars";
		$mname2='';
		$mname1='';
		$mname3='';
		$name=$_POST['lname'];
		$email=$_POST['email'];
		$colg_nm=$_POST['college_name'];
		$tname=$_POST['tname'];
		$phone=$_POST['phone'];
		$mname1=$_POST['mname1'];
		$mname2=$_POST['mname2'];
		$mname3=$_POST['mname3'];
		$n=0;
		
		if($ok==1){
		$sql = mysqli_query($con,"insert into exomars values('$count','$email','$name','$colg_nm','$phone','$tname','$mname1','$mname2','$mname3','$date','$n')");
		$sql = mysqli_query($con,"insert into users values('$count','105','$n')");
		$count+=1;

		$sqli = mysqli_query($con,"UPDATE u_counter SET no='$count' WHERE id=1");}
		
	}
	if($event==106){
		$reason="Battleground X";
		$mname2='';
		$mname1='';
		$mname3='';
		$mname4='';
		$gname2='';
		$gname1='';
		$gname3='';
		$gname4='';
		
		$name=$_POST['lname'];
		$gname=$_POST['gname'];
		$email=$_POST['email'];
		$colg_nm=$_POST['college_name'];
		$tname=$_POST['tname'];
		$phone=$_POST['phone'];
		$mphone=$_POST['mphone'];
		$mname1=$_POST['mname1'];
		$mname2=$_POST['mname2'];
		$mname3=$_POST['mname3'];
		$mname4=$_POST['mname4'];
		$gname1=$_POST['gname1'];
		$gname2=$_POST['gname2'];
		$gname3=$_POST['gname3'];
		$gname4=$_POST['gname4'];
		$n=0;
		
		if($ok==1){
		$sql = mysqli_query($con,"insert into csgo values('$count','$email','$name','$colg_nm','$phone','$mphone','$tname','$mname1','$mname2','$mname3','$mname4,','$gname','$gname1','$gname2','$gname3','$gname4','0','$date','$n')");
		$sql = mysqli_query($con,"insert into users values('$count','106','$n')");
		$count+=1;

		$sqli = mysqli_query($con,"UPDATE u_counter SET no='$count' WHERE id=1");}
		
	}
	if($event==107){
		$reason="Line Imitator";
		$mname2='';
		$mname1='';
		$name=$_POST['lname'];
		$email=$_POST['email'];
		$colg_nm=$_POST['college_name'];
		$tname=$_POST['tname'];
		$phone=$_POST['phone'];
		$mname1=$_POST['mname1'];
		$mname2=$_POST['mname2'];
		$n=0;
		
		if($ok==1){
		$sql = mysqli_query($con,"insert into flwline  values('$count','$email','$name','$colg_nm','$phone','$tname','$mname1','$mname2','$date','$n')");
		$sql = mysqli_query($con,"insert into users values('$count','107','$n')");
		$count+=1;

		$sqli = mysqli_query($con,"UPDATE u_counter SET no='$count' WHERE id=1");}
		
		
	}
	if($event==108){
		$reason="Makethon";
		$mname1='';
		$mname2='';
		$mname3='';
		$mcollg1='';
		$mcollg2='';
		$mcollg3='';
		$mphone='';
		$name=$_POST['lname'];
		$email=$_POST['email'];
		$colg_nm=$_POST['college_name'];
		$tname=$_POST['tname'];
		$phone=$_POST['phone'];
		$mphone=$_POST['mphone'];
		$mname1=$_POST['mname1'];
		$mname2=$_POST['mname2'];
		$mname3=$_POST['mname3'];
		$mcollg1=$_POST['mcollg1'];
		$mcollg2=$_POST['mcollg2'];
		$mcollg3=$_POST['mcollg3'];
		$n=0;
		
		if($ok==1){
		$sql = mysqli_query($con,"insert into hrdhack values('$count','$email','$name','$colg_nm','$phone','$mphone','$tname','$mname1','$mname2','$mname3','$mcollg1','$mcollg2','$mcollg3','$date','$n')");
		$sql = mysqli_query($con,"insert into users values('$count','108','$n')");
		$count+=1;

		$sqli = mysqli_query($con,"UPDATE u_counter SET no='$count' WHERE id=1");}
		
	}
        if($event==141){
		$reason="Young Scientist";
		
		$name=$_POST['lname'];
		$email=$_POST['email'];
		$colg_nm=$_POST['college_name'];
		$tname=$_POST['tname'];
		$phone=$_POST['phone'];
		$mphone1=$_POST['phone1'];
		$mname1=$_POST['mname1'];
		$city=$_POST['city'];
		$memail1=$_POST['email1'];
		$n=0;
		
		if($ok==1){
		$sql = mysqli_query($con,"insert into youngscientist values('$count','$tname','$colg_nm','$email','$phone','$name','$mname1','$mphone1','$memail1','$city','$date','$n')");
		$sql = mysqli_query($con,"insert into users values('$count','141','$n')");
		$count+=1;

		$sqli = mysqli_query($con,"UPDATE u_counter SET no='$count' WHERE id=1");}
		
	}

}

if($ok==1){
$dh=$count-1;
$dh=($dh+2)*2;

$msg2="Redirecting...";

$msg4="<h3><u>Confirmation mail</u> have gone to the mail ID</h3>";
$add="http://www.iitropar2advitiya.esy.es/mai.php?email=".$email."&lo=".$dh."&go=".$reason;

header('refresh: 3; URL='.$add);}else {$msg="Submission Failed";$msg3="Use another email!!!";$msg4="Go back";}

?>
<html>
<body bgcolor="#15191f">

<img src="advitiya-white.png" style="height:60px;margin:30px;"/><br>

<div style="width:100%;margin-top:10px;">
<div style="color:#37414f; width:50%;float:left;text-align:right;z-index:4;margin-left:-4%;"><br><br><br><a style="color:#D83A2B;"><?php echo $msg3;?> </a><h3><u><?echo $msg;?></u></h3><h1 style="font-size:40px;"><b><?php echo $msg2;?></b></h1>
<?php echo $msg4;?>
</div>
<div style="color:#37414f; width:50%;float:left;text-align:left;z-index:1;margin-left:4%;"><img style="width:200px; height:200px;" src="loading.gif"/></div></div>
</body>
</html>
<?php 
session_start();
require "connect.php";
if(isset($_POST['logout'])){
	session_destroy();
}

if(isset($_POST['login'])){
	if($_POST['user']=="sonu")
$_SESSION['lo']=1;
	
}
$am=0;
$cal=0;
$title="Hackathon";

$table='<table style="border:solid 1px black;color:black;width:100%;text-align:center;"><tr id="head"><td>id<td>email<td>time_name<td>about<td>name<td>collage_name<td>phone<td>required<td>m_name1<td>m_about1<td>m_name2<td>m_about2<td>time<td>activated</td></tr>';

$ddf = mysqli_query($con, "SELECT  id,email,tname,labout,name,colg_nm,city,phone,req,mname1,mabout1,mname2,mabout2,time,activated FROM hackathon");
		{
		
		while($r = mysqli_fetch_array($ddf)){$cal++;
			
			
			$table.='<tr><td>'.$r['id'].'<td>'.$r['email'].'<td>'.$r['tname'].'<td>'.$r['labout'].'<td>'.$r['name'].'<td>'.$r['colg_nm'].'<td>'.$r['phone'].'<td>'.$r['req'].'<td>'.$r['mname1'].'<td>'.$r['mabout1'].'<td>'.$r['mname2'].'<td>'.$r['mabout2'].'<td>'.$r['time'].'<td>'.$r['activated'].'</td></tr>';
		}}
		
if(isset($_POST['show'])){
	$cal=0;
	
	$gggt=$_POST['about'];
	
	if($gggt=="brainvista"){
		$title="BrainVista";
		$table='<table style="border:solid 1px black;color:black;width:100%;text-align:center;">
		<tr id="head"><td>id<td>email<td>name<td>collage_name<td>phone<td>team_name<td>m_name2<td>time</td></tr>';
		$ddf = mysqli_query($con, "SELECT  id,email,name,colg_nm,phone,tname,mname1,time FROM cbrainwaves");
		{
		
		while($r = mysqli_fetch_array($ddf)){$cal++;
			
			
			$table.='<tr><td>'.$r['id'].'<td>'.$r['email'].'<td>'.$r['name'].'<td>'.$r['colg_nm'].'<td>'.$r['phone'].'<td>'.$r['tname'].'<td>'.$r['mname1'].'<td>'.$r['time'].'<td></tr>';
		}}
		
	}
	if($gggt=="circuit"){
		$title="OneOhm";
		$table='<table style="border:solid 1px black;color:black;width:100%;text-align:center;">
		<tr id="head"><td>id<td>email<td>team_name<td>Name<td>collage_name<td>city<td>phone<td>course<td>m_name2<td>m_email2<td>m_phone2<td>time</td></tr>';
		$ddf = mysqli_query($con, "SELECT  id,email,tname,name,colg_nm,city,phone,course,mname1,memail1,mphone1,time,activated FROM circuit");
		{
		
		while($r = mysqli_fetch_array($ddf)){$cal++;
			
			
			$table.='<tr><td>'.$r['id'].'<td>'.$r['email'].'<td>'.$r['tname'].'<td>'.$r['name'].'<td>'.$r['colg_nm'].'<td>'.$r['city'].'<td>'.$r['phone'].'<td>'.$r['course'].'<td>'.$r['mname1'].'<td>'.$r['memail1'].'<td>'.$r['mphone1'].'<td>'.$r['time'].'</td></tr>';
		}}
		
	}
	if($gggt=="csgo"){
		$title="Battleground X";
		$table='<table style="border:solid 1px black;color:black;width:100%;text-align:center;">
		<tr id="head"><td>id<td>email<td>name<td>collage_name<td>phone<td>phone2<td>team_Name<td>m_name1<td>m_name2<td>m_name3<td>m_name4<td>gName<td>g_name1<td>g_name2<td>g_name3<td>g_name4<td>lappy_need<td>time</td></tr>';
		$ddf = mysqli_query($con, "SELECT  id,email,name,colg_nm,phone,mphone,tname,mname1,mname2,mname3,mname4,gname,gname1,gname2,gname3,gname4,lapp_need,time,activated FROM csgo");
		{
		
		while($r = mysqli_fetch_array($ddf)){$cal++;
			
			
			$table.='<tr><td>'.$r['id'].'<td>'.$r['email'].'<td>'.$r['name'].'<td>'.$r['colg_nm'].'<td>'.$r['phone'].'<td>'.$r['mphone'].'<td>'.$r['tname'].'<td>'.$r['mname1'].'<td>'.$r['mname2'].'<td>'.$r['mname3'].'<td>'.$r['mname4'].'<td>'.$r['gname'].'<td>'.$r['gname1'].'<td>'.$r['gname2'].'<td>'.$r['gname3'].'<td>'.$r['gname4'].'<td>'.$r['lapp_need'].'<td>'.$r['time'].'</td></tr>';
		}}
		
	}
	if($gggt=="design"){
		$title="Design and Simulate";
		$table='<table style="border:solid 1px black;color:black;width:100%;text-align:center;">
		<tr id="head"><td>id<td>email<td>name<td>collage_name<td>phone<td>time</td></tr>';
		$ddf = mysqli_query($con, "SELECT  id,email,name,colg_nm,phone,time,activated FROM design");
		{
		
		while($r = mysqli_fetch_array($ddf)){$cal++;
			
			
			$table.='<tr><td>'.$r['id'].'<td>'.$r['email'].'<td>'.$r['name'].'<td>'.$r['colg_nm'].'<td>'.$r['phone'].'<td>'.$r['time'].'</td></tr>';
		}}
		
	}
	if($gggt=="ebuzz"){
		$title="E-Buzz";
		$table='<table style="border:solid 1px black;color:black;width:100%;text-align:center;">
		<tr id="head"><td>id<td>email<td>team_Name<td>name<td>collage_name<td>phone<td>about<td>m_name2<td>m_name3<td>time</td></tr>';
		$ddf = mysqli_query($con, "SELECT  id,email,tname,name,colg_nm,phone,about,mname1,mname2,time,activated FROM ebuzz");
		{
		
		while($r = mysqli_fetch_array($ddf)){$cal++;
			
			
			$table.='<tr><td>'.$r['id'].'<td>'.$r['email'].'<td>'.$r['tname'].'<td>'.$r['name'].'<td>'.$r['colg_nm'].'<td>'.$r['phone'].'<td>'.$r['about'].'<td>'.$r['mname1'].'<td>'.$r['mname2'].'<td>'.$r['time'].'</td></tr>';
		}}
		
	}
	if($gggt=="exomars"){
		$title="Exomars";
		$table='<table style="border:solid 1px black;color:black;width:100%;text-align:center;">
		<tr id="head"><td>id<td>email<td>name<td>collage_name<td>phone<td>team_Name<td>m_name2<td>m_name3<td>m_name4<td>time</td></tr>';
		$ddf = mysqli_query($con, "SELECT  id,email,name,colg_nm,phone,tname,mname1,mname2,mname3,time,activated FROM exomars");
		{
		
		while($r = mysqli_fetch_array($ddf)){$cal++;
			
			
			$table.='<tr><td>'.$r['id'].'<td>'.$r['email'].'<td>'.$r['name'].'<td>'.$r['colg_nm'].'<td>'.$r['phone'].'<td>'.$r['tname'].'<td>'.$r['mname1'].'<td>'.$r['mname2'].'<td>'.$r['mname3'].'<td>'.$r['time'].'</td></tr>';
		}}
	}
	if($gggt=="followline"){
		$title="Follow Line";
		$table='<table style="border:solid 1px black;color:black;width:100%;text-align:center;">
		<tr id="head"><td>id<td>email<td>name<td>collage_name<td>phone<td>team_Name<td>m_name2<td>m_name3<td>time</td></tr>';
		$ddf = mysqli_query($con, "SELECT  id,email,name,colg_nm,phone,tname,mname1,mname2,time,activated FROM flwline");
		{
		
		while($r = mysqli_fetch_array($ddf)){$cal++;
			
			
			$table.='<tr><td>'.$r['id'].'<td>'.$r['email'].'<td>'.$r['name'].'<td>'.$r['colg_nm'].'<td>'.$r['phone'].'<td>'.$r['tname'].'<td>'.$r['mname1'].'<td>'.$r['mname2'].'<td>'.$r['time'].'</td></tr>';
		}}
		
	}
	if($gggt=="hackathon"){
		$title="Hackathon";
		$table='<table style="border:solid 1px black;color:black;width:100%;text-align:center;">
		<tr id="head"><td>id<td>email<td>team_name<td>Leader_about<td>name<td>collage_name<td>city<td>phone<td>required<td>m_name2<td>m_about2<td>m_name3<td>m_about3<td>time</td></tr>';
		$ddf = mysqli_query($con, "SELECT  id,email,tname,labout,name,colg_nm,city,phone,req,mname1,mabout1,mname2,mabout2,time,activated FROM hackathon");
		{
		
		while($r = mysqli_fetch_array($ddf)){$cal++;
			
			
			$table.='<tr><td>'.$r['id'].'<td>'.$r['email'].'<td>'.$r['tname'].'<td>'.$r['labout'].'<td>'.$r['name'].'<td>'.$r['colg_nm'].'<td>'.$r['city'].'<td>'.$r['phone'].'<td>'.$r['req'].'<td>'.$r['mname1'].'<td>'.$r['mabout1'].'<td>'.$r['mname2'].'<td>'.$r['mabout2'].'<td>'.$r['time'].'</td></tr>';
		}}
		
	}
	if($gggt=="hrdhack"){
		$title="Makathon";
		$table='<table style="border:solid 1px black;color:black;width:100%;text-align:center;">
		<tr id="head"><td>id<td>email<td>name<td>collage_name<td>phone<td>team_Name<td>m_name2<td>m_name3<td>m_name4<td>m_college2<td>m_college3<td>m_college4<td>time</td></tr>';
		$ddf = mysqli_query($con, "SELECT  id,email,name,colg_nm,phone,tname,mname1,mname2,mname3,mcollg1,mcollg2,mcollg3,time,activated FROM hrdhack");
		{
		
		while($r = mysqli_fetch_array($ddf)){$cal++;
			
			
			$table.='<tr><td>'.$r['id'].'<td>'.$r['email'].'<td>'.$r['name'].'<td>'.$r['colg_nm'].'<td>'.$r['phone'].'<td>'.$r['tname'].'<td>'.$r['mname1'].'<td>'.$r['mname2'].'<td>'.$r['mname3'].'<td>'.$r['mcollg1'].'<td>'.$r['mcollg2'].'<td>'.$r['mcollg3'].'<td>'.$r['time'].'</td></tr>';
		}}
	}
	if($gggt=="manual"){
		$title="Fury Road";
		$table='<table style="border:solid 1px black;color:black;width:100%;text-align:center;">
		<tr id="head"><td>id<td>email<td>name<td>collage_name<td>phone<td>team_Name<td>m_name2<td>m_name3<td>m_name4<td>time</td></tr>';
		$ddf = mysqli_query($con, "SELECT  id,email,name,colg_nm,phone,tname,mname1,mname2,mname3,time,activated FROM manual_bot");
		{
		
		while($r = mysqli_fetch_array($ddf)){$cal++;
			
			
			$table.='<tr><td>'.$r['id'].'<td>'.$r['email'].'<td>'.$r['name'].'<td>'.$r['colg_nm'].'<td>'.$r['phone'].'<td>'.$r['tname'].'<td>'.$r['mname1'].'<td>'.$r['mname2'].'<td>'.$r['mname3'].'<td>'.$r['time'].'</td></tr>';
		}}
	}
	
	if($gggt=="qfiesta"){
		$title="QFiesta";
		$table='<table style="border:solid 1px black;color:black;width:100%;text-align:center;">
		<tr id="head"><td>id<td>email<td>name<td>collage_name<td>phone<td>team_Name<td>m_name2<td>time</td></tr>';
		$ddf = mysqli_query($con, "SELECT  id,email,name,colg_nm,phone,tname,mname1,time,activated FROM qfiesta");
		{
		
		while($r = mysqli_fetch_array($ddf)){$cal++;
			
			
			$table.='<tr><td>'.$r['id'].'<td>'.$r['email'].'<td>'.$r['name'].'<td>'.$r['colg_nm'].'<td>'.$r['phone'].'<td>'.$r['tname'].'<td>'.$r['mname1'].'<td>'.$r['time'].'</td></tr>';
		}}
		
	}
	if($gggt=="robowars"){
		$title="Robowars";
		$table='<table style="border:solid 1px black;color:black;width:100%;text-align:center;">
		<tr id="head"><td>id<td>email<td>name<td>collage_name<td>phone<td>team_Name<td>m_name2<td>m_name3<td>m_name4<td>m_name5<td>time</td></tr>';
		$ddf = mysqli_query($con, "SELECT  id,email,name,colg_nm,phone,tname,mname1,mname2,mname3,mname4,time,activated FROM robowars");
		{
		
		while($r = mysqli_fetch_array($ddf)){$cal++;
			
			
			$table.='<tr><td>'.$r['id'].'<td>'.$r['email'].'<td>'.$r['name'].'<td>'.$r['colg_nm'].'<td>'.$r['phone'].'<td>'.$r['tname'].'<td>'.$r['mname1'].'<td>'.$r['mname2'].'<td>'.$r['mname3'].'<td>'.$r['mname4'].'<td>'.$r['time'].'</td></tr>';
		}}
	}
	
	if($gggt=="shareMarketing"){
		$title="ShareMarketing";
		$table='<table style="border:solid 1px black;color:black;width:100%;text-align:center;">
		<tr id="head"><td>id<td>email<td>name<td>collage_name<td>phone<td>time<td>Active</td></tr>';
		$ddf = mysqli_query($con, "SELECT  id,email,name,colg_nm,phone,time,activated FROM share_marketing");
		{
		
		while($r = mysqli_fetch_array($ddf)){$cal++;
			
			
			$table.='<tr><td>'.$r['id'].'<td>'.$r['email'].'<td>'.$r['name'].'<td>'.$r['colg_nm'].'<td>'.$r['phone'].'<td>'.$r['time'].'<td>'.$r['activated'].'</td></tr>';
		}}
		
	}
	if($gggt=="3dCad"){
		$title="3dCad";
		$table='<table style="border:solid 1px black;color:black;width:100%;text-align:center;">
		<tr id="head"><td>id<td>name<td>collage_name<td>branch<td>phone<td>time<td>email<td>year<td>Active</td></tr>';
		$ddf = mysqli_query($con, "SELECT  id,name,collage_name,branch,phone,time,email,year,activated FROM w_3dcad");
		{
		
		while($r = mysqli_fetch_array($ddf)){$cal++;
			
			
			$table.='<tr><td>'.$r['id'].'<td>'.$r['name'].'<td>'.$r['collage_name'].'<td>'.$r['branch'].'<td>'.$r['phone'].'<td>'.$r['time'].'<td>'.$r['email'].'<td>'.$r['year'].'<td>'.$r['activated'].'</td></tr>';
		}}
		
	}
	if($gggt=="cyber"){
		$title="CyberDiease";
		$table='<table style="border:solid 1px black;color:black;width:100%;text-align:center;">
		<tr id="head"><td>id<td>name<td>collage_name<td>branch<td>phone<td>time<td>email<td>year<td>Active</td></tr>';
		$ddf = mysqli_query($con, "SELECT  id,name,collage_name,branch,phone,time,email,year,activated FROM w_cyber");
		{
		
		while($r = mysqli_fetch_array($ddf)){$cal++;
			
			
			$table.='<tr><td>'.$r['id'].'<td>'.$r['name'].'<td>'.$r['collage_name'].'<td>'.$r['branch'].'<td>'.$r['phone'].'<td>'.$r['time'].'<td>'.$r['email'].'<td>'.$r['year'].'<td>'.$r['activated'].'</td></tr>';
		}}
		
	}
	if($gggt=="iot"){
		$title="IOT";
		$table='<table style="border:solid 1px black;color:black;width:100%;text-align:center;">
		<tr id="head"><td>id<td>name<td>collage_name<td>branch<td>phone<td>time<td>email<td>year<td>Active</td></tr>';
		$ddf = mysqli_query($con, "SELECT  id,name,collage_name,branch,phone,time,email,year,activated FROM w_iot");
		{
		
		while($r = mysqli_fetch_array($ddf)){$cal++;
			
			
			$table.='<tr><td>'.$r['id'].'<td>'.$r['name'].'<td>'.$r['collage_name'].'<td>'.$r['branch'].'<td>'.$r['phone'].'<td>'.$r['time'].'<td>'.$r['email'].'<td>'.$r['year'].'<td>'.$r['activated'].'</td></tr>';
		}}
		
		
	}
	if($gggt=="smarthome"){
		$title="SmartHome";
		$table='<table style="border:solid 1px black;color:black;width:100%;text-align:center;">
		<tr id="head"><td>id<td>name<td>collage_name<td>branch<td>phone<td>time<td>email<td>year<td>Active</td></tr>';
		$ddf = mysqli_query($con, "SELECT  id,name,collage_name,branch,phone,time,email,year,activated FROM w_smarthome");
		{
		
		while($r = mysqli_fetch_array($ddf)){$cal++;
			
			
			$table.='<tr><td>'.$r['id'].'<td>'.$r['name'].'<td>'.$r['collage_name'].'<td>'.$r['branch'].'<td>'.$r['phone'].'<td>'.$r['time'].'<td>'.$r['email'].'<td>'.$r['year'].'<td>'.$r['activated'].'</td></tr>';
		}}
		
		
	}
	if($gggt=="speechrobot"){
		$title="SpeechRobot";
		$table='<table style="border:solid 1px black;color:black;width:100%;text-align:center;">
		<tr id="head"><td>id<td>name<td>collage_name<td>branch<td>phone<td>time<td>email<td>year<td>Active</td></tr>';
		$ddf = mysqli_query($con, "SELECT  id,name,collage_name,branch,phone,time,email,year,activated FROM w_speechrobot");
		{
		
		while($r = mysqli_fetch_array($ddf)){$cal++;
			
			
			$table.='<tr><td>'.$r['id'].'<td>'.$r['name'].'<td>'.$r['collage_name'].'<td>'.$r['branch'].'<td>'.$r['phone'].'<td>'.$r['time'].'<td>'.$r['email'].'<td>'.$r['year'].'<td>'.$r['activated'].'</td></tr>';
		}}}
	if($gggt=="accomodation"){
		$title="Accommodation";
		$table='<table style="border:solid 1px black;color:black;width:100%;text-align:center;">
		<tr id="head"><td>id<td>name<td>email<td>phone<td>city<td>college_name<td>total<td>male<td>female<td>time<td>Active</td></tr>';
		$ddf = mysqli_query($con, "SELECT  id,name,collg_name,total,male,female,phone,time,email,city,activated FROM accomodations");
		{
		
		while($r = mysqli_fetch_array($ddf)){$cal++;
			
			
			$table.='<tr><td>'.$r['id'].'<td>'.$r['name'].'<td>'.$r['email'].'<td>'.$r['phone'].'<td>'.$r['city'].'<td>'.$r['collg_name'].'<td>'.$r['total'].'<td>'.$r['male'].'<td>'.$r['female'].'<td>'.$r['time'].'<td>'.$r['activated'].'</td></tr>';
		}}
		
	}
	
	if($gggt=="young"){
		$title="YOung Scientist";
		$table='<table style="border:solid 1px black;color:black;width:100%;text-align:center;">
		<tr id="head"><td>id<td>name<td>tname<td>email<td>phone<td>city<td>college_name<td>mname2<td>memail2<td>mphone2<td>time</td></tr>';
		$ddf = mysqli_query($con, "SELECT  id,name,collage_name,tname,mname1,memail1,mphone1,phone,time,email,city,activated FROM youngscientist");
		{
		
		while($r = mysqli_fetch_array($ddf)){$cal++;
			
			
			$table.='<tr><td>'.$r['id'].'<td>'.$r['name'].'<td>'.$r['tname'].'<td>'.$r['email'].'<td>'.$r['phone'].'<td>'.$r['city'].'<td>'.$r['college_name'].'<td>'.$r['mname1'].'<td>'.$r['memail1'].'<td>'.$r['mphone1'].'<td>'.$r['time'].'</td></tr>';
		}}
		
	}
	
	
	
	}
	
	
	
		$table.="</table>";
		

?>


<html>
<head>
<title>The Admin</title>
<style>
*{margin:0px;}
input[type=text]:focus{background-color:lightblue;}td{border:solid 1px black;cellspacing:0px;color:black;white-space:normal;max-width:160px;overflow:auto;}
#head td{color:red;text-transform: uppercase;margin:10px;}
</style>
</head>
<body>
<div class="head" style="width:100%; background-color:black;height:100px; "/><br><form method="post" action="submission.php">
<input type="submit" name="logout" style="background-color:red;color:white;float:right;width:80;height:30px;border:none;outline:none;padding-left:-50px;;" value="logout"/></form>
<h2 style="color:white;padding:3%;margin-top:-2%;" >THE ADMIN</h2><div><div style="clear:both"></div>

<?php if(isset($_SESSION['lo'])){ $am=1;}
if($am==1)
echo '
<div class="left" style="width:90%;text-align:center;color:black;float:center;margin:3%;">
<form method="post" action="submission.php">
				<select style="width:20%;background-color:#dcdcd4" name="about">
				<option value="hackathon"  >Hackathon</option>
				<option value="circuit"  >one ohm</option>
				<option value="brainvista"  >BrainVista</option>
				<option value="csgo"  >Battleground X</option>
				<option value="design"  >Design and make</option>
				<option value="ebuzz"  >ebuzz</option>
				<option value="followline"  >followline</option>
				<option value="exomars"  >exomars</option>
				
				<option value="hrdhack"  >makathon</option>
				<option value="manual"  >fury</option>
				<option value="qfiesta"  >QFiesta</option>
				<option value="robowars"  >Robowars</option>
				<option value="shareMarketing"  >ShareMarketing</option>
				<option value="3dCad"  >3dCad</option>
				<option value="cyber"  >Cyber</option>
				<option value="iot"  >IOT</option>
				<option value="smarthome"  >SmartHome</option>
				<option value="speechrobot"  >SpeechRobot</option>
				<option value="accomodation"  >Accomodation</option>
				<option value="young" >Young Scientist</option></select>
				
				<br><input type="submit" style="width:10%;" name="show" value="Find"/></form>
			<br><h2>'.$title.' ('.$cal.')</h2>
			'.$table.'
</div>';
else 
	echo '<div class="left" style="width:50%;text-align:center;color:black;float:left;"><form method="post" action="submission.php"><input type="text" name="user" placeholder="Enter USername" /><br><input type="password" name="pass" placeholder="Enter password" /><br><input type="submit" name="login" value="Login" /></form><br></div>

'; ?>
</body>
<html>
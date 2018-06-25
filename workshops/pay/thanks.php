<?php
$msg='';
$payid =$_GET['payment_request_id'];
$pyid=$_GET['payment_id'];

$l='';
require "connect.php";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payment-requests/'.$payid.'/'.$pyid.'/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:f3d34ffc47589b53b27752aaef9d37cb",
                  "X-Auth-Token:fa1d941156966d7559284546f379dc4b"));

$response = curl_exec($ch);
curl_close($ch); 


$get = explode('"',$response);

$ch=0;$r=0;$z=0;$l=0;$nn=0;
$g=sizeof($get);

for($i=0;$i<$g;$i++){
if($get[$i]=="longurl")$l=$get[$i+2];
if($get[$i]=="purpose")$z=$i;
if($get[$i]=="email")$r=$i;
if($get[$i]=="buyer_name"){ $nn=$i;}
if($get[$i]=="Failed"){ $ch=1;}}
if($ch==1){ $msg="Your transaction has been failed";} else {$msg= "Payment successfully";$msg4="Confirmation mail have gone to the mail ID";
$o=0;
$email=$get[$r+2];
$pr=$get[$z+2];
if(!$payid){$msg="Payment failed";$msg4="";$ch=1;}
if($pr=="3DCAM")$pr="w_3dcad";
if($pr=="Internet of thing")$pr="w_iot";
if($pr=="Cyber Disease")$pr="w_cyber";
if($pr=="Smart Home")$pr="w_smarthome";
if($pr=="Speech Robot")$pr="w_speechrobot";
if($pr=="Accommodations")$pr="accomodations";
$nname=$get[$nn+2];

$ddfr = mysqli_query($con, "SELECT  id,name FROM `".$pr."` WHERE email='$email'");
		{while($rc = mysqli_fetch_array($ddfr)){

if($rc['name']==$nname){
$sqli = mysqli_query($con,"UPDATE `".$pr."` SET activated='1' WHERE name='$nname' AND email='$email'");
$o = $rc['id'];
}

}}

$sqli = mysqli_query($con,"UPDATE w_users SET active='1' WHERE id='$o'");

$dh=$o;
$dh=($dh+2)*2;

$l='';
$add="http://www.iitropar2advitiya.esy.es/mai.php?email=".$email."&lo=".$dh."&go=".$get[$z+2];
//jhj
if($email){
header('refresh: 3; URL='.$add);}
}if($ch==1){$l="<br><a href=".$l." >click here to try again</a>";}
?>

<html>
<body bgcolor="#15191f">
<img src="advitiya-white.png" style="height:60px;margin:30px;"/><br>
<div style="width:100%;margin-top:10px;">
<div style="color:#37414f; width:50%;float:left;text-align:right;z-index:4;margin-left:-4%;"><br><br><br><a style="color:#D83A2B;"><?php if($ch==0)echo "( Donot close or Reload )"; ?></a><h3><u ><?php echo $msg;echo $l;?></u></h3><h1 style="font-size:40px;"><b><?php if($ch==0)echo "Redirecting...";?></b></h1><h3><?php echo $msg4;?></h3></div>
<div style="color:#37414f; width:50%;float:left;text-align:left;z-index:1;margin-left:4%;"><img style="width:200px; height:200px;" src="loading.gif"/></div></div>
</body>
</html>
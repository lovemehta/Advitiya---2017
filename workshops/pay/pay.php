<?php
require "connect.php";

if(isset($_POST['payment'])){

$id=$_POST["workshop_id"];
$name=$_POST["name"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$ok=1;$n=0;
$branch=$_POST['branch'];
$year=$_POST["year"];
$colg_nm=$_POST["college_name"];
$time=date('y-m-d H:m:s');

$ddf = mysqli_query($con, "SELECT  id,no FROM u_w_counter  WHERE id='1'");
		{while($r = mysqli_fetch_array($ddf)){$count = $r['no'];}}

if($id==201){
$price=615;$purpose="3DCAM";

		if($ok==1){
		$sql = mysqli_query($con,"insert into w_3dcad values('$count','$name','$colg_nm','$branch','$phone','$time','$email','$year','$n')");
		$sql = mysqli_query($con,"insert into w_users values('$count','201','$n')");
		$count+=1;$sqli = mysqli_query($con,"UPDATE u_w_counter SET no='$count' WHERE id=1");}
}
if($id==202){
$price=820;$purpose="Cyber Disease";

		if($ok==1){
		$sql = mysqli_query($con,"insert into w_cyber values('$count','$name','$colg_nm','$branch','$phone','$time','$email','$year','$n')");
		$sql = mysqli_query($con,"insert into w_users values('$count','202','$n')");
		$count+=1;$sqli = mysqli_query($con,"UPDATE u_w_counter SET no='$count' WHERE id=1");}

}
if($id==203){
$price=615;$purpose="Internet of thing";

		if($ok==1){
		$sql = mysqli_query($con,"insert into w_iot values('$count','$name','$colg_nm','$branch','$phone','$time','$email','$year','$n')");
		$sql = mysqli_query($con,"insert into w_users values('$count','203','$n')");
		$count+=1;$sqli = mysqli_query($con,"UPDATE u_w_counter SET no='$count' WHERE id=1");}

}
if($id==204){
$price=615;$purpose="Smart Home";

		if($ok==1){
		$sql = mysqli_query($con,"insert into w_smarthome values('$count','$name','$colg_nm','$branch','$phone','$time','$email','$year','$n')");
		$sql = mysqli_query($con,"insert into w_users values('$count','204','$n')");
		$count+=1;$sqli = mysqli_query($con,"UPDATE u_w_counter SET no='$count' WHERE id=1");}
}
if($id==205){
$price=615;$purpose="Speech Robot";

		if($ok==1){
		$sql = mysqli_query($con,"insert into w_speechrobot values('$count','$name','$colg_nm','$branch','$phone','$time','$email','$year','$n')");
		$sql = mysqli_query($con,"insert into w_users values('$count','205','$n')");
		$count+=1;$sqli = mysqli_query($con,"UPDATE u_w_counter SET no='$count' WHERE id=1");}
}
if($id==206){
$male=$_POST["male"];
$female=$_POST["female"];
$noo=$male+$female;
if($noo>0){
$city=$_POST["city"];
$price=50*$noo;
$per=$price*2/100;
$price=$price+3+$per;
$purpose="Accommodations";

		if($ok==1){
		$sql = mysqli_query($con,"insert into accomodations values('$count','$email','$name','$phone','$city','$colg_nm','$noo','$male','$female','$time','$n')");
		$sql = mysqli_query($con,"insert into w_users values('$count','206','$n')");
		$count+=1;$sqli = mysqli_query($con,"UPDATE u_w_counter SET no='$count' WHERE id=1");}
}}

if($ok==1){

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:f3d34ffc47589b53b27752aaef9d37cb",
                  "X-Auth-Token:fa1d941156966d7559284546f379dc4b"));
$payload = Array(
        "purpose" => $purpose,
        "amount" => $price,
		"buyer_name" => $name,
		"phone" => $phone,
        'send_email' => true,
        "send_sms" => true,
"email" => $email,
'allow_repeated_payment' => false,
        "redirect_url" => "http://www.advitiya.in/workshops/pay/thanks.php",
		"webhook" => "http://www.advitiya.in/workshops/pay/webhook.php"
        );
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 
$get = explode('"',$response);
$p=sizeof($get);
$z=0;
for($i=0;$i<$p;$i++){
if($get[$i]=="longurl") $z=$i;}

$ge=$get[$z+2];
echo $ge;
header("Location:$ge");
}else echo '';;}

?>
<html>
<body bgcolor="#15191f">
<img src="advitiya-white.png" style="height:60px;margin:30px;"/><br>
<div style="width:100%;margin-top:10px;">
<div style="color:#37414f; width:50%;float:left;text-align:right;z-index:4;margin-left:-4%;"><br><br><br><a style="color:#D83A2B;">Use Another email!!! </a><h3><u >Submission Failed</u></h3><h1 style="font-size:40px;"><b></b></h1></div>
<div style="color:#37414f; width:50%;float:left;text-align:left;z-index:1;margin-left:4%;"><img style="width:200px; height:200px;" src="loading.gif"/></div></div>
</body>
</html>
	
<?php 
$data =$_POST;
$mac_provided = $data['mac'];
unset($data['mac']);
 $ver =explode('.', phpversion());
 $major =(int) $ver[0];
 $minor = (int) $ver[1];
 
 if($major >= 5 and $minor >=4){
	 
	 ksort($data, SORT_STRING | SORT_FLAG_CASE);
 }
 else{
	 uksort($data, 'strcasecmp');
	 
 }
 
 $mac_calculated = hash_hmac("sha1", implode("|",$data),"fa3c47acaf1448e09dcf859acf12ab98");
 
 if($mac_provided == $mac_calculated){
	 echo "Mac is fine";
	 if($data['status'] == "Credit"){
		 
		 $to = 'banana@corgenie.com';
		 $subject = 'Website payment request'.$data[buyer_name].'';
		 $messages = "<h1>Payment Details</h1>";
		 $messages.= $data['payment_id'];
		 $messages.=$data['amount'];
		 $messages.=$data['buyer_name'];
		 $messages.=$data['buyer'];
		 $messages.=$data['buyer_phone'];
		 
		 $header.="MIME-Version: 1.0\r\n";
		 
		 
	 }else{
		 echo("Invalid");
	 }
 }
 ?>
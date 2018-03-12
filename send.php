<?php
$user_name = $_POST['user_name'];
$email = $_POST['email'];

$user_name = htmlspecialchars($user_name);
$email = htmlspecialchars($email);

$user_name = urldecode($user_name);
$email = urldecode($email);


$user_name = trim($user_name);
$email = trim($email);


mail("vicsid13@gmail.com", "Review", "Name:".$user_name.". E-mail: ".$email ,"From: vicsid13@gmail.com \r\n");
?>

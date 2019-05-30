<?php 

session_start();
unset($_SESSION['name']);
session_destroy();
// if (isset(_COOKIE['email']) and isset(_COOKIE['password'])) {
// 	$email = $_COOKIE['email'];
// 	$password = $_COOKIE['password'];
// 	setcookie("email",$email,time()-1);
// 	setcookie("password",$pass,time()-1);
// }
// unset($_COOKIE['email']);
// unset($_COOKIE['password']);
header("Location: login.php");
exit;

 ?>
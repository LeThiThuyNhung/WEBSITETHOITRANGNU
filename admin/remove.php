<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
	session_start();
	setcookie("remember", $_SESSION['remember'],time()-60*60*24*100);
	$_COOKIE["remember"];
	setcookie("NhapTen", $_SESSION['username'], time()-60*60*24*100, "/");
	$_COOKIE["NhapTen"];
	setcookie("NhapMK", $_SESSION['password'], time()-60*60*24*100, "/");
	$_COOKIE["NhapMK"];    
		 
	header("location:check_login.php");
	exit;

?>
<body>
</body>
</html>

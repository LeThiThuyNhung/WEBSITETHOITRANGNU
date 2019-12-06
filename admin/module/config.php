<?php
	$tenmaychu='localhost';
	$tentk='root';
	$pass='';
	$csdl='websitethoitrang';
	$conn=mysql_connect($tenmaychu,$tentk,$pass,$csdl) or die('Không kết nối được sql');
	mysql_select_db($csdl,$conn);
	mysql_set_charset('utf8', $conn);
?>
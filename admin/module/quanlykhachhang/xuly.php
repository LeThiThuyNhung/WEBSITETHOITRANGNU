<?php
	include('../config.php');
	$mak = $_GET['makh'];
	$makh=$_POST['makh'];
	$tenkh=$_POST['tenkh'];
	$diachikh=$_POST['diachikh'];
	$sdtkh=$_POST['sdtkh'];
	$emailkh=$_POST['emailkh'];
	$password=$_POST['password'];
	if(isset($_POST['them']))
	{
		$sql="INSERT INTO khachhang(MAKH, TENKH, DIACHIKH, SDTKH, EMAIL, PASSWORD) VALUES ('$makh','$tenkh','$diachikh','$sdtkh','$emailkh', '$password')";
		mysql_query($sql);
		header('location:../../index.php?quanly=quanlykhachhang&ac=them');
	}
	elseif(isset($_POST['sua']))
	{
		$sql ="update khachhang set TENKH = '$tenkh', DIACHIKH = '$diachikh', SDTKH = '$sdtkh', EMAIL = '$emailkh', PASSWORD = '$password' where MAKH = '$makh'";
		mysql_query($sql);
		header('location:../../index.php?quanly=quanlykhachhang&ac=sua&makh='.$makh);
	}
	else
	{
		$sql ="delete from khachhang where MAKH = '$mak'";
		mysql_query($sql);
		header('location:../../index.php?quanly=quanlykhachhang&ac=them');
	}
?>
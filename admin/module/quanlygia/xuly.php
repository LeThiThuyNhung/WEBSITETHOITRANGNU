<?php
	include('../config.php');
	$mag = $_GET['magia'];
	$magia=$_POST['magia'];
	$masp=$_POST['masp'];
	$giaban=$_POST['giaban'];
	$ngaycapnhat=$_POST['ngaycapnhat'];
	if(isset($_POST['them']))
	{
		$sql="insert into giasp(MAGIA, MASP, GIABAN, NGAYCAPNHAT) values('$magia', '$masp', '$giaban', '$ngaycapnhat')";
		mysql_query($sql);
		header('location:../../index.php?quanly=quanlygia&ac=them');
	}
	elseif(isset($_POST['sua']))
	{
		$sql ="update giasp set GIABAN = '$giaban', NGAYCAPNHAT = '$ngaycapnhat' where MAGIA = '$magia'";
		mysql_query($sql);
		header('location:../../index.php?quanly=quanlygia&ac=sua&magia='.$mag);
	}
	else
	{
		$sql ="delete from giasp where MAGIA = '$mag'";
		mysql_query($sql);
		header('location:../../index.php?quanly=quanlygia&ac=them');
	}
?>
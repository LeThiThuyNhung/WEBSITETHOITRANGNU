<?php
	include('../config.php');
	$manvi = $_GET['manv'];
	$manv=$_POST['manv'];
	$tennv=$_POST['tennv'];
	$diachinv=$_POST['diachinv'];
	$sdtnv=$_POST['sdtnv'];
	$emailnv=$_POST['emailnv'];
	if(isset($_POST['them']))
	{
		$sql="insert into nhanvien(MANV, TENNV, DIACHINV, SDTNV, EMAILNV) values('$manv', '$tennv', '$diachinv', '$sdtnv', '$emailnv')";
		mysql_query($sql);
		header('location:../../index.php?quanly=quanlynhanvien&ac=them');
	}
	elseif(isset($_POST['sua']))
	{
		$sql ="update nhanvien set TENNV = '$tennv', DIACHINV = '$diachinv', SDTNV = '$sdtnv', EMAILNV = '$emailnv' where MANV='$manv'";
		mysql_query($sql);
		header('location:../../index.php?quanly=quanlynhanvien&ac=sua&manv='.$manv);
	}
	else
	{
		$sql ="delete from nhanvien where MANV='$manvi'";
		mysql_query($sql);
		header('location:../../index.php?quanly=quanlynhanvien&ac=them');
	}
?>
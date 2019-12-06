<?php
	include('../config.php');
	$ten = $_GET['tennguoidung'];
	$manv=$_POST['manv'];
	$tennguoidung=$_POST['tennguoidung'];
	$matkhau=$_POST['matkhau'];
	if(isset($_POST['them']))
	{
		$sql="insert into taikhoan_nv(MANV, TENNGUOIDUNG, MATKHAU) values('$manv', '$tennguoidung', '$matkhau')";
		mysql_query($sql);
		header('location:../../index.php?quanly=quanlytknhanvien&ac=them');
	}
	elseif(isset($_POST['sua']))
	{
		$sql ="update taikhoan_nv set MANV = '$manv', MATKHAU = '$matkhau' where TENNGUOIDUNG='$tennguoidung'";
		mysql_query($sql);
		header('location:../../index.php?quanly=quanlytknhanvien&ac=sua&tennguoidung='.$tennguoidung);
	}
	else
	{
		$sql ="delete from taikhoan_nv where TENNGUOIDUNG = '$ten'";
		mysql_query($sql);
		header('location:../../index.php?quanly=quanlytknhanvien&ac=them');
	}
?>
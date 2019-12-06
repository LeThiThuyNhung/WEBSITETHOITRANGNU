<?php
	include('../config.php');
	$maloai = $_GET['maloaisp'];
	$maloaisp=$_POST['maloaisp'];
	$tenloaisp=$_POST['tenloaisp'];
	if(isset($_POST['them']))
	{
		$sql="insert into loaisp(MALOAI, TENLOAI) values('$maloaisp', '$tenloaisp')";
		mysql_query($sql);
		header('location:../../index.php?quanly=quanlyloaisp&ac=them');
	}
	elseif(isset($_POST['sua']))
	{
		$sql ="update loaisp set TENLOAI = '$tenloaisp' where MALOAI='$maloai'";
		mysql_query($sql);
		header('location:../../index.php?quanly=quanlyloaisp&ac=sua&maloaisp='.$maloaisp);
	}
	else
	{
		$sql ="delete from loaisp where MALOAI='$maloai'";
		mysql_query($sql);
		header('location:../../index.php?quanly=quanlyloaisp&ac=them');
	}
?>
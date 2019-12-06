<?php
	include('../config.php');
	$maspi = $_GET['masp'];
	$masp=$_POST['masp'];
	$maloaisp=$_POST['maloaisp'];
	$mancc=$_POST['mancc'];
	$tensp=$_POST['tensp'];
	$anh=$_FILES['anh']['name'];
	$anh_tam=$_FILES['anh']['tam_name'];
	move_uploaded_file($anh_tam,'image/'.$anh);
	$chatlieu=$_POST['chatlieu'];
	$mau=$_POST['mau'];
	$dvt=$_POST['dvt'];
	$soluong=$_POST['soluong'];
	$size=$_POST['size'];
	if(isset($_POST['them']))
	{
		$sql="insert into sanpham(MASP, MALOAI, MANCC, TENSP, ANH, CHATLIEU, MAU, DVT, SOLUONG, SIZE) values('$masp', '$maloaisp', '$mancc', '$tensp', '$anh', '$chatlieu', '$mau', '$dvt', '$soluong', '$size')";
		mysql_query($sql);
		header('location:../../index.php?quanly=quanlysanpham&ac=them');
	}
	elseif(isset($_POST['sua']))
	{
		if($anh!=0)
		{
			$sql ="UPDATE sanpham SET MALOAI = '$maloaisp', MANCC = '$mancc', TENSP = '$tensp', ANH = '$anh', CHATLIEU = '$chatlieu', MAU = '$mau', DVT = '$dvt', SOLUONG = '$soluong', SIZE = '$size' WHERE MASP='$masp' ";	
		}
		else
		{
			$sql ="UPDATE sanpham SET MALOAI = '$maloaisp', MANCC = '$mancc', TENSP = '$tensp', CHATLIEU = '$chatlieu', MAU = '$mau', DVT = '$dvt', SOLUONG = '$soluong', SIZE = '$size' WHERE MASP='$masp' ";
		}
		mysql_query($sql);
		header('location:../../index.php?quanly=quanlysanpham&ac=sua&masp='.$masp);
	}
	else
	{
		$sql ="delete from sanpham where MASP='$maspi'";
		mysql_query($sql);
		header('location:../../index.php?quanly=quanlysanpham&ac=them');
	}
?>
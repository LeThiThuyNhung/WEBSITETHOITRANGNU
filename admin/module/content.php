<div class="content">
	<?php
		if(isset($_GET['quanly']))
		{
			$tam=$_GET['quanly'];
		}
		else
		{
			$tam='';
		}
		if($tam=='quanlyloaisp')
		{
			include('module/quanlyloaisp/main.php');
		}
		if($tam=='quanlysanpham')
		{
			include('module/quanlysanpham/main.php');
		}
		if($tam=='quanlynhanvien')
		{
			include('module/quanlynhanvien/main.php');
		}
		if($tam=='quanlytknhanvien')
		{
			include('module/quanlytknhanvien/main.php');
		}
		if($tam=='quanlykhachhang')
		{
			include('module/quanlykhachhang/main.php');
		}
		if($tam=='quanlygia')
		{
			include('module/quanlygia/main.php');
		}
	?>
<div class="clear"></div>
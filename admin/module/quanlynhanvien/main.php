<div class="left">
	<?php
		if(isset($_GET['ac']))
		{
			$tam=$_GET['ac'];
		}
		else
		{
			$tam='';
		}
		if($tam=='them')
		{
			include('module/quanlynhanvien/them.php');
		}
		if($tam=='sua')
		{
			include('module/quanlynhanvien/sua.php');
		}
	?>
</div>
<div class="right">
	<?php
		include('module/quanlynhanvien/lietke.php');
	?>
</div>
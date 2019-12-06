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
			include('module/quanlytknhanvien/them.php');
		}
		if($tam=='sua')
		{
			include('module/quanlytknhanvien/sua.php');
		}
	?>
</div>
<div class="right">
	<?php
		include('module/quanlytknhanvien/lietke.php');
	?>
</div>
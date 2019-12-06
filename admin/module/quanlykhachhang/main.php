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
			include('module/quanlykhachhang/them.php');
		}
		if($tam=='sua')
		{
			include('module/quanlykhachhang/sua.php');
		}
	?>
</div>
<div class="right">
	<?php
		include('module/quanlykhachhang/lietke.php');
	?>
</div>
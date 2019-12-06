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
			include('module/quanlysanpham/them.php');
		}
		if($tam=='sua')
		{
			include('module/quanlysanpham/sua.php');
		}
	?>
</div>
<div class="right">
	<?php
		include('module/quanlysanpham/lietke.php');
	?>
</div>
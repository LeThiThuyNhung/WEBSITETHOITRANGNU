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
			include('module/quanlyloaisp/them.php');
		}
		if($tam=='sua')
		{
			include('module/quanlyloaisp/sua.php');
		}
	?>
</div>
<div class="right">
	<?php
		include('module/quanlyloaisp/lietke.php');
	?>
</div>
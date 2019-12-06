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
			include('module/quanlygia/them.php');
		}
		if($tam=='sua')
		{
			include('module/quanlygia/sua.php');
		}
	?>
</div>
<div class="right">
	<?php
		include('module/quanlygia/lietke.php');
	?>
</div>
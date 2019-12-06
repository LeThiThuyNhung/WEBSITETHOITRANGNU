<div class="title_box1"><a href="index.php?xem=cart">GIỎ HÀNG</a>
    <ul>
    	
    	<?php 
			@session_start();
			if(isset($_SESSION['sl'])&& $_SESSION['sl'] > 0)
			{
				$_SESSION['sl'] = $sl;
				echo $sl.' ' .'sản phẩm';
			}
			else
			{
				echo 'Chưa có sản phẩm nào trong giỏ hàng';
			}
		?>
    </ul>
</div>
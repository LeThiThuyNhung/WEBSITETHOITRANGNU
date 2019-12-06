<div class="menu1">
	<ul>
    	<?php
    	@session_start();
		if(isset($_SESSION['dangnhap'])){
			$sql = "select * from khachhang where EMAIL ='".$_SESSION['dangnhap']."'";
			$query_kh = mysql_query($sql);
			$dong_kh = mysql_fetch_array($query_kh);
			echo '<span>Xin chào bạn:<strong><em>'.' '.$_SESSION['dangnhap'].'</em></strong><a href="index.php?xem=cart&thoat=1" style="text-decoration:none; color:#fff; margin-left:10px;">Đăng Xuất</span></a>';
		}else{
			echo '<li><a href="index.php?xem=dangnhap">Đăng nhập</a></li><br/><li><a href="index.php?xem=dangky">Đăng kí</a></li>';
		}	
		
		?>
	</ul>
</div>
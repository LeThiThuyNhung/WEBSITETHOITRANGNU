<div class="content">
	<div class="left_content">
		<?php 
			include('module/left/danhmuc.php');
			include('module/left/spbanchay.php');
		?>
	</div>
    
    <p>&nbsp;</p>
    
    <div class="center_content">
    	<div class="slider">
            <span class="prev"><i class="fa fa-chevron-circle-left"></i></span>
            <span class="next"><i class="fa fa-chevron-circle-right"></i></span>
            <img class="slide" src="admin/module/quanlysanpham/image/ao.jpg" stt="0" />		
            <img class="slide" src="admin/module/quanlysanpham/image/ANH1.jpg" stt="1" style="display:none" />
            <img class="slide" src="admin/module/quanlysanpham/image/ANH2.png" stt="2" style="display:none"/>
            <img class="slide" src="admin/module/quanlysanpham/image/ANH3.jpg" stt="3" style="display:none" />
            <img class="slide" src="admin/module/quanlysanpham/image/ANH4.jpg" stt="4" style="display:none" />
		</div>
    	<?php 
			if(isset($_GET['xem']))
			{
				$tam=$_GET['xem'];
			}
			else
			{
				$tam='';
			}
			if($tam=='sp')
			{
				include('module/center/sp.php');
			}
			elseif($tam =='chitietsanpham')
			{
				include('module/center/chitietsanpham.php');
			}
			elseif($tam =='dangky')
			{
				include('module/center/dangky.php');
			}
			elseif($tam =='dangnhap')
			{
				include('module/center/dangnhap.php');
			}
			elseif($tam =='cart')
			{
				include('module/center/cart.php');
			}
			elseif($tam=='lienhe')
			{
				include('module/center/lienhe.php');
			}
			elseif($tam=='gt')
			{
				include('module/center/gt.php');
			}
			elseif($tam=='thanhtoan')
			{
				include('module/center/thanhtoan.php');
			}
			elseif(isset($_POST['search']))
			{
				include('module/center/search.php');
			} 
			else
			{
				include('module/center/tatcasanpham.php');
			}
		?>
    </div>
           
    <div class="right_content">
    	<?php 
			include('module/right/giohang.php');
			include('module/right/khuyenmai.php');
			include('module/right/qc.php');
		?>
    </div>
</div>
        
         
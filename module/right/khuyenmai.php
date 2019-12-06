<style>
	.reduce{
			text-decoration:line-through;
			color:#F00;
	}
	.product_image
	{
		margin-left:-20px;
	}
	.title_box3 ul{
		margin-top:0px;
	}
</style>
<?php
	$sql_sp="select sanpham.MASP, ANH, TENSP, GIABAN, count(chitiet_hd.MASP) AS SLBan from sanpham, giasp, chitiet_hd where sanpham.MASP=giasp.MASP and sanpham.MASP='SP006'";
	$query=mysql_query($sql_sp);
	$sql_sp1="select sanpham.MASP, ANH, TENSP, GIABAN, count(chitiet_hd.MASP) AS SLBan from sanpham, giasp, chitiet_hd where sanpham.MASP=giasp.MASP and sanpham.MASP='SP026'";
	$query1=mysql_query($sql_sp1);
?>
<div class="title_box3"><a href="">SẢN PHẨM KHUYẾN MÃI</a>
	<ul>
    <?php
		while($dong_sp=mysql_fetch_array($query)){
	?>
        <div class="product_title"><a href="#">Áo sơ mi sọc caro</a></div>
        <div class="product_image"><a href="index.php?xem=chitietsanpham&masp=<?php echo $dong_sp['MASP']?>"><img src="admin/module/quanlysanpham/image/somi6.jpg" alt="Áo thun" width="260px" height="130px"/></a></div>
        <div class="product_price"> <span class="reduce">đ200000</span> <span class="price">đ180000</span></div>
        <div class="rateit"></div>
        <div class="bottom_pro_box"></div>
        <div class="pro_details_tab"><a href="index.php?xem=cart&add=<?php echo $dong_sp['MASP']?>" title="thêm vào giỏ hàng"><img src="admin/module/quanlysanpham/image/shopping_cart_red.png" width="35" height="23" alt="cart" class="left_bt"/></a></div>
        <?php
		}
		?>
	</ul>
	<ul>
    <?php
		while($dong_sp=mysql_fetch_array($query1)){
	?>
        <div class="product_title"><a href="#">Quần jean baggy trơn</a></div>
        <div class="product_image"><a href="index.php?xem=chitietsanpham&masp=<?php echo $dong_sp['MASP']?>"><img src="admin/module/quanlysanpham/image/jean1.jpg" alt="Áo thun" width="260px" height="130px"/></a></div>
        <div class="product_price"> <span class="reduce">đ300000</span> <span class="price">đ250000</span></div>
        <div class="rateit"></div>
        <div class="bottom_pro_box"></div>
        <div class="pro_details_tab"><a href="index.php?xem=cart&add=<?php echo $dong_sp['MASP']?>" title="thêm vào giỏ hàng"><img src="admin/module/quanlysanpham/image/shopping_cart_red.png" width="35" height="23" alt="cart" class="left_bt"/></a></div>
         <?php
		}
		?>
	</ul>
</div>

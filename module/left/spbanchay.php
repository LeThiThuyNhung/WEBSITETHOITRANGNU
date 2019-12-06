<style>
	.pro_box1{
		width:196px;
		margin-top:5px;
		height:50px;
	}
	.pro_box1 ul li{;
		list-style:none;
	}
	.pro_box1 ul li a{
		text-decoration:none;
		text-align:center;
	}
	.pro_box1 ul li img{
		margin-left:-20px;
	}
	.pro_box1 ul li p{
		margin-left:-25px;
	}
	.pro_details_tab4{
		margin-left:50px;
	}
	.pro_box1 .rateit
	{
		margin-left:20px;
	}
</style>
<?php
	$sql_sp="select sanpham.MASP, ANH, TENSP, GIABAN, count(chitiet_hd.MASP) AS SLBan from sanpham, giasp, chitiet_hd where sanpham.MASP=giasp.MASP and sanpham.MASP=chitiet_hd.MASP group by sanpham.MASP ORDER BY SLBan DESC LIMIT 0,3";
	$query=mysql_query($sql_sp);
?>
	<div class="title_box2">
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p><a href="">SẢN PHẨM BÁN CHẠY</a></p>
    </div>
             <!---------------PRODUCT------------------->
             <div class="pro_box1">
             	<ul>
             		<?php
						while($dong_sp=mysql_fetch_array($query))
						{
					?>
                    <li><a href="index.php?xem=chitietsanpham&masp=<?php echo $dong_sp['MASP']?>">
                        <p><?php echo $dong_sp['TENSP']?></p>
                        <img src="admin/module/quanlysanpham/image/<?php echo $dong_sp['ANH']?>" width="170px" height="120px"/>
                        <p style="color:#F00">đ<?php echo $dong_sp['GIABAN']?></p>
                        <div class="rateit"></div>
                       	<div class="bottom_pro_box"></div>
                       	<div class="pro_details_tab4"><a href="#" title="thêm vào giỏ hàng"><img src="admin/module/quanlysanpham/image/shopping_cart_red.png"," width="35" height="23" alt="cart" class="left_bt width="35" height="23" alt="cart" class="left_bt"/></a></div>
              		</a></li>
					<?php
                         }
                    ?>
               </ul>
             </div>
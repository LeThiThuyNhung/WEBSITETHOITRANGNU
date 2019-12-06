<style>
	.pro_details_tab3{
		margin-left:50px;
	}
	.rateit
	{
		margin-left:30px;
	}
</style>
<?php
	if(isset($_GET['trang']))
	{
		$get_trang = $_GET['trang'];
	}
	else
	{
		$get_trang ='';
	}
	if($get_trang == '' || $get_trang == 1)
	{
		$trang1 = 0;
	}else
	{
		$trang1 = ($get_trang*6)-6;
	}
	$sql_sp="select sanpham.MASP, ANH, TENSP, GIABAN, MALOAI, NGAYCAPNHAT from sanpham, giasp where sanpham.MASP=giasp.MASP and MALOAI='$_GET[maloaisp]' limit $trang1, 6";
	$query=mysql_query($sql_sp);
?>
<?php
	$sql_lsp="select * from loaisp where MALOAI='$_GET[maloaisp]'";
	$query_lsp=mysql_query($sql_lsp);
	$dong_lsp = mysql_fetch_array($query_lsp);
?>

<div class="center_title_bar" style="color:#FFF" align="center"><?php echo $dong_lsp['TENLOAI']?></div>
             <!---------------PRODUCT------------------->
             <div class="pro_box">
             	<ul>
             		<?php
						while($dong_sp=mysql_fetch_array($query))
						{
					?>
                    <li><a href="index.php?xem=chitietsanpham&masp=<?php echo $dong_sp['MASP']?>">
                        <p><?php echo $dong_sp['TENSP']?></p>
                        <img src="admin/module/quanlysanpham/image/<?php echo $dong_sp['ANH']?>" width="170px" height="200px"/>
                        <p><?php echo $dong_sp['GIABAN']?>Đ</p>
                        <div class="rateit"></div>
                       	<div class="bottom_pro_box"></div>
                       	<div class="pro_details_tab3"><a href="index.php?xem=cart&add=<?php echo $dong_sp['MASP']?>" title="thêm vào giỏ hàng"><img src="admin/module/quanlysanpham/image/shopping_cart_red.png" width="35" height="23" alt="cart" class="left_bt"/></a></div>
              		</a><br /><br /><br /></li>
					<?php
                         }
                    ?>
               </ul>
             </div>
             
             <div align="center" style="letter-spacing:10px">
             	<?php
					$sql_trang = mysql_query("select sanpham.MASP, ANH, TENSP, GIABAN, MALOAI from sanpham, giasp where sanpham.MASP=giasp.MASP and MALOAI='$_GET[maloaisp]'");
					$count=mysql_num_rows($sql_trang);
					$a = ceil($count/6);
					for($b = 1; $b<=$a; $b++)
					{
						echo '<a href="?trang='.$b.'" style="text-decoration:none;">'.' '.$b.' '.'</a>';
					}
				?>
             </div>
             
             
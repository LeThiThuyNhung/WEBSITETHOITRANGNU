<style>
	.pro_details_tab1{
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
	if(isset($_POST['search']))
	{
		$search=$_POST['searchtext'];
		$sql_search="select * from sanpham, giasp where TENSP like '%$search%' and sanpham.MASP = giasp.MASP limit $trang1, 6";
		$query_search=mysql_query($sql_search);
	}
?>
<div class="center_title_bar" style="color:#FFF" align="center">Sản phẩm tìm thấy</div>
             <!---------------PRODUCT------------------->
             <div class="pro_box">
             	<?php
					if($count=mysql_num_rows($query_search)==0)
					{?> 
							<p>Không tìm thấy sản phẩm nào!</p>
				<?php
					}else{
				?>
             	<ul>
             		<?php
						while($dong_search=mysql_fetch_array($query_search))
						{
					?>
                    <li><a href="index.php?xem=tatcasp&masp=<?php echo $dong_search['MASP']?>">
                        <p><?php echo $dong_search['TENSP']?></p>
                        <img src="admin/module/quanlysanpham/image/<?php echo $dong_search['ANH']?>" width="170px" height="200px"/>
                        <p><?php echo $dong_search['GIABAN']?>Đ</p>
                        <div class="rateit"></div>
                       	<div class="pro_details_tab1"><a href="index.php?xem=cart&add=<?php echo $dong_search['MASP']?>" title="thêm vào giỏ hàng"><img src="admin/module/quanlysanpham/image/shopping_cart_red.png" width="35" height="23" alt="cart" class="left_bt"/></a></div><br /><br /><br />
              		</a></li>
					<?php
                         }
					}
                    ?>
               </ul>
             </div>
             <div align="center" style="letter-spacing:10px">
             	<?php
					$sql_trang = mysql_query("select * from sanpham, giasp where TENSP like '%$search%' and sanpham.MASP = giasp.MASP");
					$count=mysql_num_rows($sql_trang);
					$a = ceil($count/6);
					for($b = 1; $b<=$a; $b++)
					{
						echo '<a href="?trang='.$b.'" style="text-decoration:none;">'.' '.$b.' '.'</a>';
					}
				?>
             </div>
             
             

<?php
		@session_start();
		if(isset($_SESSION['dangnhap'])){
			echo '<div class="center_title_bar" style="color:#FFF" align="center"">Giỏ hàng của bạn | <span>Xin chào bạn:<strong><em>'.' '.$_SESSION['dangnhap'].'</em></strong><a href="index.php?xem=cart&thoat=1" style="text-decoration:none; color:#fff; margin-left:10px;">Đăng Xuất</span></a></div>';
		}else{
			echo '<div class="center_title_bar" style="color:#FFF" align="center"" >Giỏ hàng của bạn</div>';
		}	
		if(isset($_GET['add']) && !empty($_GET['add']))
			{
				$id = $_GET['add'];	
				@$_SESSION['cart_'.$id]+=1;
			}
			if(isset($_GET['xoatoanbo'])&&$_GET['xoatoanbo']==1){
				session_destroy();
					
			}	
			if(isset($_GET['thoat'])&&$_GET['thoat']==1){
				unset($_SESSION['dangnhap']);
			}
			if(isset($_GET['them']))
			{
				@$_SESSION['cart_'.$_GET['them']]+=1;
			}
			if(isset($_GET['tru']))
			{
				@$_SESSION['cart_'.$_GET['tru']]--;
			}
			if(isset($_GET['xoa']))
			{
				$_SESSION['cart_'.$_GET['xoa']]=0;
				
			}

			echo '<div>
				<a href="index.php?xem=tatcasanpham" style="text-decoration:none">Tiếp tục mua hàng</a> | 
				<a href="index.php?xem=dangky" style="text-decoration:none">Đăng ký mới</a> | 
				<a href="index.php?xem=dangnhap" style="text-decoration:none">Bạn đã có tài khoản</a></br>
    
			</div>';
			$thanhtien=0;
			$sl = 0;
			foreach($_SESSION as $name => $value)
			{
				if($value > 0)
				{
					if(substr($name, 0, 5) == 'cart_')
					{
						$id = substr($name, 5, 5);
						
						$sql = "select sanpham.MASP, ANH, TENSP, GIABAN from sanpham, giasp where sanpham.MASP=giasp.MASP and sanpham.MASP='".$id."' AND NGAYCAPNHAT=(SELECT MAX(NGAYCAPNHAT) FROM giasp where MASP='".$id."')";
						$query = mysql_query($sql);
						?>
                        <?php
				
				echo '<br/><table width="600px" border="1" style="border-collapse:collapse; text-align:center;" >';
				
					echo '<tr>';
						echo '<th>Tên sản phẩm</th>';
						echo '<th>Hình ảnh</th>';
						echo '<th>Số lượng</th>';
						echo'<th>Giá</th>';
						echo'<th>Tổng tiền</th>';
						echo' <th></th>';
					echo'</tr>';
					?>
					<?php
                    while($dong=mysql_fetch_array($query))
						{
						
						$tongtien = $dong['GIABAN']*$value;
						$sl+= $value;
						$thanhtien+= $tongtien;
						$_SESSION['tt'] = $thanhtien;
						$_SESSION['sl'] = $sl;
                        ?>
                        
                 	<tr style="text-align:center">
                  	<td width="100px"><?php echo $dong['TENSP']?></td>
                    <td><img src="admin/module/quanlysanpham/image/<?php echo $dong['ANH']?>" width="130px" height="120px"/></td>
                    <td width="100px"><a href="index.php?xem=cart&tru=<?php echo $dong['MASP']?>"><input type="button" value="-" ></a><input type="text" value="<?php echo $value ?>" style="width:15px;" /><a href="index.php?xem=cart&them=<?php echo $dong['MASP']?>"><input type="button" value="+" ></td>
                     <td><?php echo $dong['GIABAN']?></td>
                    <td width="90px" ><?php echo $tongtien?>vnđ</td>
                    <td align="right"><a href="index.php?xem=cart&xoa=<?php echo $dong['MASP']?>" style="text-decoration:none; color:#F00">Xóa</a></td>    
                  </tr>
						 

					<?php }?>
				<?php }?>
			<?php }?>
			
	<?php }?>
    		
 	</table>
    
     <?php
			if($thanhtien == 0)
			{
				echo 'Giỏ hàng trống';
			}
			else
			{
				
				echo'<p style="text-align:right; color:#00F"><a href="index.php?xem=cart&xoatoanbo=1"  style="text-decoration:none;" >Xóa toàn bộ</a></p>';
				echo'<p  style="text-align:right; color:#F00">Tổng cộng: '.number_format($thanhtien).'VNĐ'.'</p>';
				
				if(isset($_SESSION['dangnhap'])){
				
                echo '<p  style="text-align:right;"><a href="index.php?xem=thanhtoan&tt='.$_SESSION['dangnhap'].'&tt='.$_SESSION['tt'].'"><input type="button" value="Thanh toán" style="width:150px; color:#F00"/></a></p>';
				
				}
				
			}?>
			 
	 		

				

  



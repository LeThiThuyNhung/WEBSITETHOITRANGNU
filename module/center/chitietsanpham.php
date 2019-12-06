<!<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<?php
	
	$sql_ct = "select sanpham.MASP, ANH, TENSP, GIABAN, CHATLIEU, MAU, SIZE, DVT from sanpham, giasp where sanpham.MASP=giasp.MASP AND sanpham.MASP ='$_GET[masp]' AND NGAYCAPNHAT=(SELECT MAX(NGAYCAPNHAT) FROM giasp where MASP='$_GET[masp]')";
	$query_ct = mysql_query($sql_ct);
	$dong_ct = mysql_fetch_array($query_ct);
	$tt = "select SOLUONG from sanpham where MASP ='$_GET[masp]'";
	$query_tt = mysql_query($tt);
	$dong = mysql_fetch_array($query_tt);
	
?>

<body>
	<div class="center_title_bar" style="color:#FFF" align="center">Chi tiết sản phẩm</div>
    <form action="update_cart.php?id=<?php echo $dong['MASP'] ?>">
	<table width="600px">
        <tr>
        	<td rowspan="10"><img src="admin/module/quanlysanpham/image/<?php echo $dong_ct['ANH']?>" width="170px" height="200px"/></td>
        </tr>
        <tr>
        	<td><b>Tên sản phẩm: <?php echo $dong_ct['TENSP'] ?></td>
        </tr>
        <tr>
        	<td>Giá: <?php echo $dong_ct['GIABAN'] ?>vnđ</td>
       	</tr>
        <tr>
        	<td>Chất liệu: <?php echo $dong_ct['CHATLIEU'] ?></td>
        </tr>
        <tr>
        	<td>Màu sắc: <?php echo $dong_ct['MAU'] ?></td>
        </tr>
        <tr>
        	<td>Size: <?php echo $dong_ct['SIZE'] ?></td>
        </tr>
        <tr>
        <td><?php
		if($dong['SOLUONG'] == 0)
		{?>
			<p style="color:#F00">Hết hàng</p>
		<?php }
		else
		{?>
			<p style="color:#F00">Còn hàng (<?php echo $dong['SOLUONG']?>sp)</p>
		<?php }?>
		 </td>
      </tr>
      <tr>
        <td>Đánh giá:<div class="rateit"></div></td>
        </tr>
        <tr>
        	<td><a href="#"><input type="button" value="Thêm vào giỏ hàng" style="height:35px; color:#F00"></a> <a href="index.php?xem=cart&add=<?php echo $dong_ct['MASP']?>"><input type="button" value="Mua ngay" style="height:35px; color:#F00"></a></td>
        </tr>
    </table>
    </form>
</body>
</html>
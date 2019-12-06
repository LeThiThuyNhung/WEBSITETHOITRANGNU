<?php
	$sql="select * from sanpham";
	$run=mysql_query($sql);
?>
<table width="935" border="1">
  <tr>
    <td width="47">Mã SP</td>
    <td width="74">Mã loại SP</td>
    <td width="87">Mã NCC</td>
    <td width="125">Tên SP</td>
    <td width="66">Ảnh</td>
    <td width="54">Chất liệu</td>
    <td width="41">Màu</td>
    <td width="36">ĐVT</td>
    <td width="61">Số lượng</td>
    <td width="68">Size</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <?php
  	while($dong=mysql_fetch_array($run)){
  ?>
  <tr>
    <td><?php echo $dong['MASP']?></td>
    <td><?php echo $dong['MALOAI']?></td>
    <td><?php echo $dong['MANCC']?></td>
    <td><?php echo $dong['TENSP']?></td>
    <td><img src="module/quanlysanpham/image/<?php echo $dong['ANH']?>" width="60px" height="40px"/></td>
    <td><?php echo $dong['CHATLIEU']?></td>
    <td><?php echo $dong['MAU']?></td>
    <td><?php echo $dong['DVT']?></td>
    <td><?php echo $dong['SOLUONG']?></td>
    <td><?php echo $dong['SIZE']?></td>
    <td width="32"><a href="index.php?quanly=quanlysanpham&ac=sua&masp=<?php echo $dong['MASP']?>">Sửa</a></td>
    <td width="30"><a href="module/quanlysanpham/xuly.php?masp=<?php echo $dong['MASP']?>">Xóa</a></td>
  </tr>
  <?php
	}
  ?>
</table>

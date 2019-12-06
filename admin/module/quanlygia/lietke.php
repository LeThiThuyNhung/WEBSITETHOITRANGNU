<?php
	$sql="select * from giasp";
	$run=mysql_query($sql);
?>
<table width="511" border="1">
  <tr>
    <td width="72">Mã giá</td>
    <td width="76">Mã SP</td>
    <td width="103">Gía bán</td>
    <td width="122">Ngày cập nhật</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <?php
  	while($dong=mysql_fetch_array($run)){
  ?>
  <tr>
    <td><?php echo $dong['MAGIA']?></td>
    <td><?php echo $dong['MASP']?></td>
    <td><?php echo $dong['GIABAN']?></td>
    <td><?php echo $dong['NGAYCAPNHAT']?></td>
    <td width="60"><a href="index.php?quanly=quanlygia&ac=sua&magia=<?php echo $dong['MAGIA']?>">Sửa</a></td>
    <td width="38"><a href="module/quanlygia/xuly.php?magia=<?php echo $dong['MAGIA']?>">Xóa</a></td>
  </tr>
  <?php
	}
  ?>
</table>

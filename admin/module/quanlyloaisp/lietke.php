<?php
	$sql="select * from loaisp";
	$run=mysql_query($sql);
?>
<table width="394" border="1">
  <tr>
    <td width="87">Mã loại SP</td>
    <td width="172">Tên loại SP</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <?php
  	while($dong=mysql_fetch_array($run)){
  ?>
  <tr>
    <td><?php echo $dong['MALOAI']?></td>
    <td><?php echo $dong['TENLOAI']?></td>
    <td width="57"><a href="index.php?quanly=quanlyloaisp&ac=sua&maloaisp=<?php echo $dong['MALOAI']?>">Sửa</a></td>
    <td width="50"><a href="module/quanlyloaisp/xuly.php?maloaisp=<?php echo $dong['MALOAI']?>">Xóa</a></td>
  </tr>
  <?php
	}
  ?>
</table>

<?php
	$sql="select * from nhanvien";
	$run=mysql_query($sql);
?>
<table width="764" border="1">
  <tr>
    <td width="59">Mã NV</td>
    <td width="177">Tên NV</td>
    <td width="154">Địa chỉ NV</td>
    <td width="78">SĐT NV</td>
    <td width="166">Email NV</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <?php
  	while($dong=mysql_fetch_array($run)){
  ?>
  <tr>
    <td><?php echo $dong['MANV']?></td>
    <td><?php echo $dong['TENNV']?></td>
    <td><?php echo $dong['DIACHINV']?></td>
    <td><?php echo $dong['SDTNV']?></td>
    <td><?php echo $dong['EMAILNV']?></td>
    <td width="40"><a href="index.php?quanly=quanlynhanvien&ac=sua&manv=<?php echo $dong['MANV']?>">Sửa</a></td>
    <td width="44"><a href="module/quanlynhanvien/xuly.php?manv=<?php echo $dong['MANV']?>">Xóa</a></td>
  </tr>
  <?php
	}
  ?>
</table>

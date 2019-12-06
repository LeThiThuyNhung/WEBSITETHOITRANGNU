<?php
	$sql="select * from khachhang";
	$run=mysql_query($sql);
?>
<table width="1004" border="1">
  <tr>
    <td width="92">Mã KH</td>
    <td width="174">Tên KH</td>
    <td width="275">Địa chỉ KH</td>
    <td width="131">SĐT KH</td>
    <td width="128">Email KH</td>
    <td width="128">Password</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <?php
  	while($dong=mysql_fetch_array($run)){
  ?>
  <tr>
    <td><?php echo $dong['MAKH']?></td>
    <td><?php echo $dong['TENKH']?></td>
    <td><?php echo $dong['DIACHIKH']?></td>
    <td><?php echo $dong['SDTKH']?></td>
    <td><?php echo $dong['EMAIL']?></td>
    <td><?php echo $dong['PASSWORD']?></td>
    <td width="38"><a href="index.php?quanly=quanlykhachhang&ac=sua&makh=<?php echo $dong['MAKH']?>">Sửa</a></td>
    <td width="33"><a href="module/quanlykhachhang/xuly.php?makh=<?php echo $dong['MAKH']?>">Xóa</a></td>
  </tr>
  <?php
	}
  ?>
</table>

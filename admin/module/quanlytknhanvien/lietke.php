<?php
	$sql="select * from taikhoan_nv";
	$run=mysql_query($sql);
?>
<table width="548" border="1">
  <tr>
  	<td width="125">Mã NV</td>
    <td width="125">Tên người dùng</td>
    <td width="104">Mật khẩu</td>
    <td width="104" colspan="2">Quản lý</td>
  </tr>
  <?php
  	while($dong=mysql_fetch_array($run)){
  ?>
  <tr>
  	<td><?php echo $dong['MANV']?></td>
    <td><?php echo $dong['TENNGUOIDUNG']?></td>
    <td><?php echo $dong['MATKHAU']?></td>
    <td width="46"><a href="index.php?quanly=quanlytknhanvien&ac=sua&tennguoidung=<?php echo $dong['TENNGUOIDUNG']?>">Sửa</a></td>
    <td width="50"><a href="module/quanlytknhanvien/xuly.php?tennguoidung=<?php echo $dong['TENNGUOIDUNG']?>">Xóa</a></td>
  </tr>
  <?php
	}
  ?>
</table>

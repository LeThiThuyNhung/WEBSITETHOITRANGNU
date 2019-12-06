<?php
	$sql="select * from taikhoan_nv where TENNGUOIDUNG='$_GET[tennguoidung]'";
	$run=mysql_query($sql);
	$dong=mysql_fetch_array($run);
?>
<form action="module/quanlytknhanvien/xuly.php?tennguoidung=<?php echo $dong['TENNGUOIDUNG']?>" method="post" enctype="multipart/form-data">
	<table width="350" border="1">
      <tr>
        <td colspan="2"><div align="center">Sửa tài khoản NV</div></td>
      </tr>
      <tr>
        <td width="127">Mã NV</td>
        <td width="202"><input name="manv" type="text" value="<?php echo $dong['MANV']?>" readonly="readonly"/></td>
      </tr>
      <tr>
        <td width="127">Tên người dùng</td>
        <td width="202"><input name="tennguoidung" type="text" value="<?php echo $dong['TENNGUOIDUNG']?>" readonly="readonly"/></td>
      </tr>
      <tr>
        <td>Mật khẩu</td>
        <td><input type="text" name="matkhau" value="<?php echo $dong['MATKHAU']?>"/></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center"><input type="submit" name="sua" id="sua" value="Sửa"/></div></td>
      </tr>
	</table>
</form>

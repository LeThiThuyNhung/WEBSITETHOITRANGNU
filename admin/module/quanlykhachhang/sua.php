<?php
	$sql="select * from khachhang where MAKH='$_GET[makh]'";
	$run=mysql_query($sql);
	$dong=mysql_fetch_array($run);
?>
<form action="module/quanlykhachhang/xuly.php?makh=<?php echo $dong['MAKH']?>" method="post" enctype="multipart/form-data">
	<table width="350" border="1">
      <tr>
        <td colspan="2"><div align="center">Sửa khách hàng</div></td>
      </tr>
      <tr>
        <td width="127">Mã KH</td>
        <td width="202"><input name="makh" type="text" value="<?php echo $dong['MAKH']?>" readonly="readonly"/></td>
      </tr>
      <tr>
        <td>Tên KH</td>
        <td><input type="text" name="tenkh" value="<?php echo $dong['TENKH']?>"/></td>
      </tr>
      <tr>
        <td>Địa chỉ KH</td>
        <td><input type="text" name="diachikh" value="<?php echo $dong['DIACHIKH']?>"/></td>
      </tr>
      <tr>
        <td>SĐT KH</td>
        <td><input type="text" name="sdtkh" value="<?php echo $dong['SDTKH']?>"/></td>
      </tr>
      <tr>
        <td>Email KH</td>
        <td><input type="text" name="emailkh" value="<?php echo $dong['EMAIL']?>"/></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="text" name="password" value="<?php echo $dong['PASSWORD']?>"/></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center"><input type="submit" name="sua" id="sua" value="Sửa"/></div></td>
      </tr>
	</table>
</form>

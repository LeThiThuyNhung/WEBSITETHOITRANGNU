<?php
	$sql="select * from nhanvien where MANV='$_GET[manv]'";
	$run=mysql_query($sql);
	$dong=mysql_fetch_array($run);
?>
<form action="module/quanlynhanvien/xuly.php?manv=<?php echo $dong['MANV']?>" method="post" enctype="multipart/form-data">
	<table width="350" border="1">
      <tr>
        <td colspan="2"><div align="center">Sửa nhân viên</div></td>
      </tr>
      <tr>
        <td width="127">Mã NV</td>
        <td width="202"><input name="manv" type="text" value="<?php echo $dong['MANV']?>" readonly="readonly"/></td>
      </tr>
      <tr>
        <td>Tên NV</td>
        <td><input type="text" name="tennv" value="<?php echo $dong['TENNV']?>"/></td>
      </tr>
      <tr>
        <td>Địa chỉ NV</td>
        <td><input type="text" name="diachinv" value="<?php echo $dong['DIACHINV']?>"/></td>
      </tr>
      <tr>
        <td>SĐT NV</td>
        <td><input type="text" name="sdtnv" value="<?php echo $dong['SDTNV']?>"/></td>
      </tr>
      <tr>
        <td>Email NV</td>
        <td><input type="text" name="emailnv" value="<?php echo $dong['EMAILNV']?>"/></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center"><input type="submit" name="sua" id="sua" value="Sửa"/></div></td>
      </tr>
	</table>
</form>

<?php
	$sql="select * from giasp where MAGIA='$_GET[magia]'";
	$run=mysql_query($sql);
	$dong=mysql_fetch_array($run);
?>
<form action="module/quanlygia/xuly.php?magia=<?php echo $dong['MAGIA']?>" method="post" enctype="multipart/form-data">
	<table width="350" border="1">
      <tr>
        <td colspan="2"><div align="center">Sửa giá</div></td>
      </tr>
      <tr>
        <td width="127">Mã giá</td>
        <td width="202"><input name="magia" type="text" value="<?php echo $dong['MAGIA']?>" readonly="readonly"/></td>
      </tr>
      <tr>
        <td>Mã SP</td>
        <td><input name="masp" type="text" value="<?php echo $dong['MASP']?>" readonly="readonly"/></td>
      </tr>
      <tr>
        <td>Gía bán</td>
        <td><input type="text" name="giaban" value="<?php echo $dong['GIABAN']?>"/></td>
      </tr>
      <tr>
        <td>Ngày cập nhật</td>
        <td><input type="text" name="ngaycapnhat" value="<?php echo $dong['NGAYCAPNHAT']?>"/></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center"><input type="submit" name="sua" id="sua" value="Sửa"/></div></td>
      </tr>
	</table>
</form>

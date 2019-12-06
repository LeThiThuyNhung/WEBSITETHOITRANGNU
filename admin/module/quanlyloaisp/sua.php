<?php
	$sql="select * from loaisp where MALOAI='$_GET[maloaisp]'";
	$run=mysql_query($sql);
	$dong=mysql_fetch_array($run);
?>
<form action="module/quanlyloaisp/xuly.php?maloaisp=<?php echo $dong['MALOAI']?>" method="post" enctype="multipart/form-data">
	<table width="350" border="1">
      <tr>
        <td colspan="2"><div align="center">Sửa loại SP</div></td>
      </tr>
      <tr>
        <td width="127">Mã loại SP</td>
        <td width="202"><input name="maloaisp" type="text" value="<?php echo $dong['MALOAI']?>" readonly="readonly"/></td>
      </tr>
      <tr>
        <td>Tên loại SP</td>
        <td><input type="text" name="tenloaisp" value="<?php echo $dong['TENLOAI']?>"/></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center"><input type="submit" name="sua" id="sua" value="Sửa"/></div></td>
      </tr>
	</table>
</form>

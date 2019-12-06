<?php
	$sql="select * from sanpham where MASP='$_GET[masp]'";
	$run=mysql_query($sql);
	$dong=mysql_fetch_array($run);
?>
<form action="module/quanlysanpham/xuly.php?masp=<?php echo $dong['MASP']?>" method="post" enctype="multipart/form-data">
	<table width="350" border="1">
      <tr>
        <td colspan="2"><div align="center">Sửa SP</div></td>
      </tr>
      <tr>
        <td width="127">Mã SP</td>
        <td width="202"><input name="masp" type="text" value="<?php echo $dong['MASP']?>" readonly="readonly"/></td>
      </tr>
      <tr>
       	<td>Mã loại SP</td>
        <td><input type="text" name="maloaisp" value="<?php echo $dong['MALOAI']?>"/></td>
      </tr>
      <tr>
        <td>Mã NCC</td>
        <td><input type="text" name="mancc" value="<?php echo $dong['MANCC']?>"/></td>
      </tr>
      <tr>
        <td>Tên SP</td>
        <td><input type="text" name="tensp" value="<?php echo $dong['TENSP']?>"/></td>
      </tr>
      <tr>
        <td>Ảnh</td>
        <td><input type="file" name="anh" value="<?php echo $dong['ANH']?>"/><img src="module/quanlysanpham/image/<?php echo $dong['ANH']?>" width="60px" height="40px"/></td>
      </tr>
      <tr>
       	<td>Chất liệu</td>
        <td><input type="text" name="chatlieu" value="<?php echo $dong['CHATLIEU']?>"/></td>
      </tr>
      <tr>
        <td>Màu</td>
        <td><input type="text" name="mau" value="<?php echo $dong['MAU']?>"/></td>
      </tr>
      <tr>
        <td>ĐVT</td>
        <td><input type="text" name="dvt" value="<?php echo $dong['DVT']?>"/></td>
      </tr>
      <tr>
        <td>Số lượng</td>
        <td><input type="text" name="soluong" value="<?php echo $dong['SOLUONG']?>"/></td>
      </tr>
      <tr>
        <td>Size</td>
        <td><input type="text" name="size" value="<?php echo $dong['SIZE']?>"/></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center"><input type="submit" name="sua" id="sua" value="Sửa"/></div></td>
      </tr>
	</table>
</form>

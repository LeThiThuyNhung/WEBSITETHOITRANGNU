<form action="module/quanlysanpham/xuly.php" method="post" enctype="multipart/form-data">
	<table width="350" border="1">
      <tr>
        <td colspan="2"><div align="center">Thêm SP</div></td>
      </tr>
      <tr>
        <td width="127">Mã SP</td>
        <td width="202"><input type="text" name="masp" style="width:250px"/></td>
      </tr>
      <tr>
        <?php
		  $sql_loaisp = "select MALOAI,TENLOAI from loaisp";
		  $row_loaisp=mysql_query($sql_loaisp);
		?>
			<td>Mã loại</td>
			<td><select name="maloaisp" style="width:250px">
		<?php
			while($dong_loaisp=mysql_fetch_array($row_loaisp)){
		?>
				<option value="<?php echo $dong_loaisp['MALOAI'] ?>"><?php echo $dong_loaisp['TENLOAI'] ?></option>
		<?php
			}
		?>
    		</select></td>
      </tr>
      <tr>
        <?php
		  $sql_ncc = "select * from nhacc";
		  $row_ncc=mysql_query($sql_ncc);
		?>
			<td>Mã ncc</td>
			<td><select name="mancc" style="width:250px">
		<?php
			while($dong_ncc=mysql_fetch_array($row_ncc)){
		?>
			<option value="<?php echo $dong_ncc['MANCC'] ?>"><?php echo $dong_ncc['TENNCC'] ?></option>
		<?php
			}
		?>
			</select></td>
      </tr>
      <tr>
        <td>Tên SP</td>
        <td><input type="text" name="tensp" style="width:250px"/></td>
      </tr>
      <tr>
        <td>Ảnh</td>
        <td><input type="file" name="anh" style="width:250px"/></td>
      </tr>
      <tr>
        <td>Chất liệu</td>
        <td><input type="text" name="chatlieu" style="width:250px"/></td>
      </tr>
      <tr>
        <td>Màu</td>
        <td><input type="text" name="mau" style="width:250px"/></td>
      </tr>
      <tr>
        <td>ĐVT</td>
        <td><input type="text" name="dvt" style="width:250px"/></td>
      </tr>
      <tr>
        <td>Số lượng</td>
        <td><input type="text" name="soluong" style="width:250px"/></td>
      </tr>
      <tr>
        <td>Size</td>
        <td><input type="text" name="size" style="width:250px"/></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center"><input type="submit" name="them" value="Thêm"/></div></td>
      </tr>
	</table>
</form>

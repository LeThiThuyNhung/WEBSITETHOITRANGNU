<form action="module/quanlytknhanvien/xuly.php" method="post" enctype="multipart/form-data">
	<table width="350" border="1">
      <tr>
        <td colspan="2"><div align="center">Thêm tài khoản nhân viên</div></td>
      </tr>
      <tr>
      	<?php
		  $sql_nv = "select MANV, TENNV from nhanvien";
		  $row_nv=mysql_query($sql_nv);
		?>
			<td>Mã NV</td>
			<td><select name="manv" style="width:205px">
		<?php
			while($dong_nv=mysql_fetch_array($row_nv)){
		?>
				<option value="<?php echo $dong_nv['MANV'] ?>"><?php echo $dong_nv['TENNV'] ?></option>
		<?php
			}
		?>
    		</select></td>
      </tr>
      <tr>
        <td width="127">Tên người dùng</td>
        <td width="202"><input type="text" name="tennguoidung" style="width:200px"/></td>
      </tr>
      <tr>
        <td>Mật khẩu</td>
        <td><input type="text" name="matkhau" style="width:200px"/></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center"><input type="submit" name="them" value="Thêm"/></div></td>
      </tr>
	</table>
</form>

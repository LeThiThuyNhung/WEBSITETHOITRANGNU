<form action="module/quanlygia/xuly.php" method="post" enctype="multipart/form-data">
	<table width="350" border="1">
      <tr>
        <td colspan="2"><div align="center">Thêm giá</div></td>
      </tr>
      <tr>
        <td width="127">Mã giá</td>
        <td width="202"><input type="text" name="magia" style="width:200px"/></td>
      </tr>
      <tr>
        <?php
		  $sql_kh = "select MASP, TENSP from sanpham";
		  $row_kh=mysql_query($sql_kh);
		?>
			<td>Mã SP</td>
			<td><select name="masp" style="width:205px">
		<?php
			while($dong_kh=mysql_fetch_array($row_kh)){
		?>
				<option value="<?php echo $dong_kh['MASP'] ?>"><?php echo $dong_kh['TENSP'] ?></option>
		<?php
			}
		?>
    		</select></td>
      </tr>
      <tr>
        <td>Gía bán</td>
        <td><input type="text" name="giaban" style="width:200px"/></td>
      </tr>
      <tr>
        <td>Ngày cập nhật</td>
        <td><input name="ngaycapnhat" type="text" value="<?php echo date('Y-m-d')?>" readonly="readonly" style="width:200px"/></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center"><input type="submit" name="them" value="Thêm"/></div></td>
      </tr>
	</table>
</form>

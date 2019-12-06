<?php
	@session_start();
	
	if(isset($_SESSION['dangnhap'])){
		$sql = "select * from khachhang where EMAIL ='".$_SESSION['dangnhap']."'";
		$query_kh = mysql_query($sql);
		$dong_kh = mysql_fetch_array($query_kh);
		$kh = $dong_kh['MAKH'];
		$nd = date('Y-m-d');
		$nn = strtotime(date("Y-m-d", strtotime($nd)) . " +3 day");
		$nn = strftime("%Y-%m-%d", $nn);
		if(isset($_SESSION['tt'])){
			$tt = $_SESSION['tt'];
			if(isset($_POST['gui'])){
				$pt = $_POST['pttt'];
				$gc = $_POST['ghichu'];
				$dh="insert into dondathang (MAKH, PTHANHTOAN, NGAYDH, NGAYNH, TONGTIEN) value ('$kh', '$pt', '$nd', '$nn', '$tt')";
				$ketqua=mysql_query($dh);
				if($ketqua){
					echo '<h4 style="margin-left:5px;">Bạn đã đặt hàng thành công</h4>';
				}
			}
		}
		
		if(isset($_SESSION['sl'])){
			
		}
		
				
	}
?>

<div class="center_title_bar" style="color:#FFF" align="center">Thanh toán đơn hàng</div>
<form action="" method="post" enctype="multipart/form-data ">
	<br/><center><table width="600px"  style="border-collapse:collapse;">
  <tr>
    <td >Họ tên khách hàng </td>
    <td ><input type="text" name="hoten" size="50" style="width:350px; height:30px;" value="<?php echo $dong_kh['TENKH']?>" readonly /></td>
  </tr>
  <tr>
    <td>Địa chỉ Email </td>
    <td ><input type="text" name="email" size="50" style="width:350px; height:30px;" value="<?php echo $_SESSION['dangnhap']?>" readonly/></td></td>
  </tr>
  <tr>
    <td>Phương thức thanh toán  </td>
    <td ><input type="radio" name="pttt" value="Nhận hàng thanh toán" checked="checked">Nhận hàng thanh toán<br/>
    <input type="radio" name="pttt" value="Chuyển khoản">Chuyển khoản
    </td>
  </tr>
  <tr>
    <td>Điện thoại </td>
     <td ><input type="text" name="dienthoai" size="50" style="width:350px; height:30px;" value="<?php echo $dong_kh['SDTKH']?>" readonly/></td>
  </tr>
  <tr>
    <td>Địa chỉ nhận hàng </td>
   <td ><input type="text" name="diachi" size="50" style="width:350px; height:30px;" value="<?php echo $dong_kh['DIACHIKH']?>"readonly/></td>
  </tr>
   <tr>
    <td>Tổng tiền </td>
   <td ><input type="text" name="tongtien" size="50" style="width:350px; height:30px;" value="<?php echo $tt?>" readonly/></td>
  </tr>
   <tr>
    <td>Ghi chú </td>
   <td ><textarea name="ghichu" style="width:350px; height:30px;"></textarea></td>
  </tr>
  <tr>
    <td colspan="2">
    	 	
           <p align="center"><input type="submit" name="gui" value="Xác nhận" style="width:150px; height:30px" /></p>
         
    </td>
    </tr>
</table></center>
</form>
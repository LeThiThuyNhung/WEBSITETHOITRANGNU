<style type="text/css">
	#a a:link{
		text-decoration:none;
		color:#F00;
		
	}
	#a td{
		text-align:center;
	}
	#a td input{
 		width: 400px;
		height:30px;
		margin:10px 10px;
	}
	#a input{
		width:100px;
		height:30px;
		margin:10px 10px;
	}
	#a input:hover{
		color:#F00;
	}
</style>
<?php
	if(isset($_POST['ok'])){
		$tenkh=$_POST['hoten'];
		$email=$_POST['email'];
		$diachi=$_POST['diachi'];
		$pass=$_POST['pass'];
		$dienthoai=$_POST['dienthoai'];
		if ($tenkh == "" || $pass == "" || $diachi == "" || $email == "" || $dienthoai == "" ){
		 echo "bạn vui lòng nhập đầy đủ thông tin";   	
		}
		else{ 
			$sql="select * from khachhang where EMAIL='$email'"; 
			$kt=mysql_query($sql);  
			if(mysql_num_rows($kt)  > 0)
			{ echo "Tài khoản đã tồn tại"; }
			else{
	
			$sql_dangky=mysql_query("insert into khachhang (TENKH, DIACHIKH, SDTKH, EMAIL, PASSWORD) value('$tenkh','$diachi','$dienthoai','$email','$pass')");	
			if($sql_dangky){
				echo '<h4 style="margin-left:5px;">Bạn đã đăng ký thành công</h4>';
				echo '<a href="index.php?xem=dangnhap" style="margin:20px;text-decoration:none;">Quay lại để đăng nhập mua hàng</a>';
			}
			}
		}
	}

?>
	

<center><form id="a" action='' method='POST' style="width:500px" enctype="multipart/form-data">
     <table cellpadding='0' cellspacing='0' width="500px">
         <tr>
            <td><h2>Đăng ký tài khoản</h2></td>
            <td ><a href='index.php?xem=dangnhap' title='Đăng nhập'>Đăng nhập</a></td>
         </tr>
          <tr>
               <td colspan="2" ><input type='text' name='hoten' placeholder="Tên đăng ký"  /></td>
          </tr>
          <tr>
              <td colspan="2"  ><input type='password' name='pass' placeholder="Mật khẩu"   /></td>
          </tr>
			<tr>
           
            <td colspan="2" ><input type="text" name="email" placeholder="Email"/></td>
          </tr>
          <tr>
            
             <td colspan="2"><input type="text" name="dienthoai" placeholder="Số điện thoại"></td>
          </tr>
          <tr>
           
           <td colspan="2"><input type="text" name="diachi" placeholder="Địa chỉ"></td>
      </tr>
               
    </table>
            <input type='reset' name='cancel' value="Trở lại" />
            <input type='submit' name='ok' value="Đăng ký" />
</form></center>




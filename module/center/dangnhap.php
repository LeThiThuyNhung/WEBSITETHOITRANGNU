<style type="text/css">
	#gd a:link{
		text-decoration:none;
		color:#F00;
		
	}
	#gd td{
		text-align:center;
	}
	#gd td input{
 		width: 400px;
		height:30px;
		margin:10px 10px;
	}
	
	#gd input:hover{
		color:#F00;
	}
	
	#gd input{
		margin:10px 0 10px 0;
	}
	#gd.a input{
		width:120px;
		height:30px;
		margin:10px 0 10px 0;
	}
</style>


<?php
	@session_start();
	if(isset($_POST['dangnhap'])){
		$email=$_POST['email'];
		$pass=$_POST['password'];
		$sql=mysql_query("select * from khachhang where EMAIL='$email' and PASSWORD='$pass' limit 1");
		$count=mysql_num_rows($sql);
		if($count>0){
			$tendangnhap=$_SESSION['dangnhap']=$email;
			echo '<p style="text-align:center;width:auto;padding:30px;background:red;color:#fff;font-size:15px;">Bạn đã đăng nhập thành công.</p>';
			echo '<a href="index.php?xem=cart" style="font-size:20px;">Quay lại để thanh toán</a>';
		}else{
			echo '<p style="text-align:center;width:auto;padding:30px;background:red;color:#fff;font-size:15px;">Email hoặc mật khẩu không đúng</p>';
		}
	}
?>

	<center><form id="gd" action='' method='POST' style="width:600px">
            <table cellpadding='0' cellspacing='0' width="600px">
            	<tr>
                	<td><h2>Đăng nhập</h2></td>
                    <td ><a href='index.php?xem=dangky' title='Đăng ký'>Đăng ký</a></td>
                </tr>
                <tr>
                    <td colspan="2" ><input type="email" name='email'  placeholder="Email"  /></td>
                </tr>
                <tr>
                    <td colspan="2"  ><input type='password' name='password' placeholder="Mật khẩu"   /></td>
                </tr>
               
            </table>
            <div class="a">
                <input type='reset' name='trolai' value="Trở lại" />
                <input type='submit' name='dangnhap' value="Đăng nhập" />
            </div>
        </form></center>




	<h4><a href="index.php?xem=dangky" style="text-decoration:none;color:#FFF;margin:10px;border-radius:10px;padding:5px;;background:#F00;float:right;" >Đăng ký tài khoản để mua hàng.</a></h4>


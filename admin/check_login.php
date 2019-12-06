<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style type="text/css">
	a:link{
		text-decoration:none;
		color:#F00;
		font-size:20px;
	}
	td{
		text-align:center;
	}
	td input{
 		width: 400px;
		height:30px;
		margin:10px 10px;
	}
	
	input:hover{
		color:#F00;
	}
	
	input{
		margin:10px 0 10px 0;
	}
	.a input{
		width:120px;
		height:30px;
		margin:10px 0 10px 0;
	}
</style>

<?php
session_start();
//session_destroy();
include('module/config.php');
$_SESSION['db_is_logged_in'] = false;
$remember=false;
if(isset($_POST['ok'])){ 
    if(($_POST['username'] == NULL)&&($_POST['password'] == NULL)) {        
    //echo "Ban khong nhap vao Username va Password " ."<br>";
      header("location:check_login.php"); 
      } else if($_POST['username'] == NULL){            
       // echo " Ban chua nhap Usernam " ."<br>";
         header("location:check_login.php"); 
      } else if($_POST['password'] == NULL){          
              //echo " Ban chua nhap Password" ."<br>";
         header("location:check_login.php"); 
                      if (isset($_POST['remember'])) { 
                               setcookie('NhapTen', $_SESSION['username'], time()+60*60*24*100, "/");
                   $_COOKIE['NhapTen'];
                               setcookie('NhapMK', $_SESSION['passwork'], time()+60*60*24*100, "/");
                   $_COOKIE['NhapMK'];
                     }               
  
                      } else { 
                      $u=$_POST['username'];
       $p=$_POST['password'];     
       $sql="select * from taikhoan_nv where TENNGUOIDUNG='".$u."' and MATKHAU='".$p."'";
       $query=mysql_query($sql); 
       if(mysql_num_rows($query)==0) {
           //echo " Ban nhap username va password khong dung " ."<br>";
        header("location:check_login.php");       
        } else {        
                    $row=mysql_fetch_array($query);        
               $_SESSION['db_is_logged_in'] = true;      
               $_SESSION['username'] = $row["username"];
               $_SESSION['id'] = $row["ID"]; 
               $_SESSION['password'] = $row["password"];  
             if (isset($_POST['remember'])) { 
            $_SESSION['remember']=true;
            setcookie("remember", $_SESSION['remember'],time()+60*60*24*100);
            $_COOKIE["remember"];
                              setcookie("NhapTen", $_SESSION['username'], time()+60*60*24*100, "/");
            $_COOKIE["NhapTen"];
            setcookie("NhapMK", $_SESSION['password'], time()+60*60*24*100, "/");
           $_COOKIE["NhapMK"];                   
          }
		  $_SESSION['check_login']=$u;     
          header("location:confirm.php"); // kiem tra dung, khong check  
          exit;        
        }
    }  
} else if(isset($_COOKIE["remember"])) {
  header("location:management.php");
}
 ?>
 <body>
	<center><form action='' method='POST' style="width:600px">
            <table cellpadding='0' cellspacing='0' width="600px">
            	<tr>
                	<td colspan="2"><h2>Đăng nhập</h2></td>
                    
                </tr>
                <tr>
                    <td colspan="2" ><input type='text' name='username' value="NhapTen" placeholder="Tên đăng nhập"  /></td>
                </tr>
                <tr>
                    <td colspan="2"  ><input type='password' name='password' value="NhapMK" placeholder="Mật khẩu"   /></td>
                </tr>
               
            </table>
            <input type="checkbox" name="remember" />Nhớ mật khẩu?<br /> 
            <a href="#">Quên mật khẩu?</a>
            <div class="a">
                <input type='reset' name='cancel' value="Trở lại" />
                <input type='submit' name='ok' value="Đăng nhập" />
            </div>
        </form></center>
</body>
</html>


    
    
             
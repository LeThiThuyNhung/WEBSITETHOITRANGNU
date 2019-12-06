<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
session_start();
 if(($_SESSION['db_is_logged_in'] == true)||(isset($_COOKIE['NhapMK'])))
  echo "Tên đăng nhập của bạn là:<b>".$_SESSION['username']."</br>";
 if(isset($_COOKIE["remember"])){
  echo " Bạn đã check vào nút Remember " . "</br>" ;
  echo " Để quên mật khẩu click Unremember " . "<br>";
  echo " Để thoát click Logout " . "<br>";
  } else {
    echo " Bạn đã không check vào ô nhớ mật khẩu " . "</br>" ;
    echo " Để thoát khỏi tài khoản này vui lồng click Unremember hoặc Logout "  . "<br>" ;
    }
?>
 <html>
 <head> 
 </head> 
 <body>
 <br />
 <br/>
  Click : <a href="remove.php">Unremember</a>
 <br> </br>
  Click: <a href="logout.php">Logout</a>
 <br> </br>
 </body> 
 </html>
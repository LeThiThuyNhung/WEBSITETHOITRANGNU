<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8_unicode_ci" />
<link rel="stylesheet" type="text/css" href="style/css.css"/>
<title>QUẢN TRỊ NỘI DUNG TRANG WEB</title>
</head>

<body>
<?php
	session_start();
	if(!isset($_SESSION['db_is_logged_in']))
	{
		header('location:check_login.php');
	}
?>
	<div class="wrapper">
    	<?php
			include('module/config.php');
			include('module/header.php');
			include('module/menu.php');
			include('module/content.php');
			include('module/footer.php');
		?>   
    </div>
</body>
</html>
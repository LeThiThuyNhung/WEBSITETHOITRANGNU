<?php
	session_start();
	if (isset($_SESSION['db_is_logged_in'])) {
	unset($_SESSION['db_is_logged_in']);
	}
	// trở về trang login
	header("location: check_login.php");
?>

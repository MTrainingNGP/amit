<?php
session_destroy();
header("location:index.php");
session_start();
if ($_SESSION['id']) {
	# code...
	session_destroy();

	header("location:login.php");
}
?>
<?php
	session_start();

	require_once('../utils/utility.php');
	require_once('../database/dbhelper.php');

	$user = getUserToken();
	if($user == null) {
		header('Location: authen/login.php');
		die();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Trang Quản Trị</title>
</head>
<body>
	<h1 class="text-center">Chào mừng bạn tới trang quản trị web</h1>
</body>
</html>
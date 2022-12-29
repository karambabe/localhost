<?php 
	session_start();
?>

<<!DOCTYPE html>

<html>

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>

<body>

<a href="signup.php" >Регистрация</a>
<a href="login.php">Войти</a>

<p><? echo $_SESSION['id']; ?></p>

</body>

</html>
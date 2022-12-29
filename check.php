<?php 
	$conn = mysqli_connect('127.0.0.1', 'root', '', 'myproject');

	// $select = "SELECT * FROM users WHERE login='{$_POST['login']}' AND password='{$_POST['password']}'";

	$insert = "INSERT INTO users(login, password) VALUES ('{$_GET['login']}', '{$_GET['password']}')";

	$quer = mysqli_query($conn, $insert);

	$_SESSION['id'] = mysqli_insert_id($conn);

	header("Location: index.php");

	

	// $query = mysqli_query($con, $select );

	// $result = $query->fetch_assoc();


	// if($query->num_rows>0){
	// 	session_start();
	// 	$_SESSION['id']=$result['id'];
		
	// 	header("Location: index.php");
	// else{
	// 	header("Location: index.php?error=нет такого пользователя или пароль введен не верно");
	// }	

 ?>
<?php
	session_start();
	$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
	$pass = md5($pass);

	$mysql = new mysqli('localhost', 'mysql', 'mysql', 'registered');
    if (!$mysql) { die('Ошибка подключения к базе данных.'); exit(); }
	
	//Проверка есть ли пользователь в БД
    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
	$user = $result->fetch_assoc();
	
	if(is_array($user)) {
		$_SESSION['user'] = [
            "id" => $user['id'],
            "email" => $user['email'],
            "login" => $user['login'],
            "pass" => $user['pass']
        ];
		
		header('Location: /');
		
	} else {
		$_SESSION['message'] = 'Неверный логин или пароль.';
		echo $_SESSION['message'];
        header('Location: ../login');
	}
 
	$mysql->close();
?>
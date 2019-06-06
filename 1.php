<?php 
	header("Location: http://dyachkovskiyaman/mail/index.php");
	$link = mysqli_connect("127.0.0.1", "root", "", "aman_ch16");
	$sql = "INSERT INTO regis (login, password, mail)
	VALUES ('" . $_POST['login'] . "',
	 '" . $_POST['password'] . "',
	 '" . $_POST['mail'] . "')";
	$message = 'Ваш логин: ' . $_POST['login'] . ' и пароль: ' . $_POST['password'];
	mail($_POST['mail'], 'Регистрация', $message);
	mysqli_query($link, $sql);
?>
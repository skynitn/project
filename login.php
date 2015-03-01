<?php
	require_once 'db_con.php';
	session_start();
	$form = $_POST;
	$usr_email = $form['email'];
	$usr_pwd = md5($form['pass']);
	$q = "SELECT `password` FROM `users` WHERE `email`='$usr_email'";
	$result = mysqli_query($conn,$q);
	if(!$result){
		DIE("Query failed");
	}
	$row = mysqli_fetch_row($result);
	$pass = $row[0];
	require_once 'db_clo.php';
	
	if($pass == $usr_pwd){
		$location = "main.php";
		$_SESSION['usr_email'] = $usr_email;
		header("Location: " . $location);
	}
	echo "Wrong password";

?>
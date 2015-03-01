<?php
	session_start();
	if (!isset($_SESSION['usr_email'])) {
		header('Location: index.html');
	}

?>

<?php
    $email = $_GET['email'];
	echo $email;
	require_once 'db_con.php';
	$q = "DELETE FROM `users` WHERE `email` = '$email'";
	$result = mysqli_query($conn, $q);
	if(!$result){
		DIE("Error");
	}
	require_once 'db_clo.php';
	$st = "Location: main.php";
	header($st);
?>
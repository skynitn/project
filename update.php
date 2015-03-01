<?php
	session_start();
	if (!isset($_SESSION['usr_email'])) {
		header('Location: index.html');
	}
	
?>
<?php
	$form = $_POST;
	print_r($form); 

?>
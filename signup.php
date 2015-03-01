<?php
    require_once 'db_con.php';
	$form = $_POST;
	//print_r($form);
	$k = array();
	$v = array();
	$i = 0;
	foreach ($form as $key => $value) {
		$k[$i] = "`" . $key . "`";
		$v[$i] = "'" . $value . "'";
		$i++;		
	}
	//print_r($k);
	$ka = implode(', ', $k);
	//echo "<br/>";
	//print_r($v);
	$va = implode(', ', $v);
	$q = "INSERT INTO `users` (" . $ka . ") VALUES (" . $va . ")"; 
	echo $q;
	$result = mysqli_query($conn,$q);
	if(!$result){
		DIE("Query failed");
	}
	require_once 'db_clo.php';
	$st = "Location: index.php";
	header($st);
?>
<?php

//header("Cache-Control: private, must-revalidate, max-age=0");
 // header("Pragma: no-cache");
	include 'dbConfig.php';

	$id=$_GET['id'];
	echo $id;
	$status=3;
	$query = $db->query("UPDATE doctordisplay SET status = $status WHERE id='$id'");
	
?>

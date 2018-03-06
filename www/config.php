<?php
//Database credentials
$dbHost     = 'localhost';
$dbUsername = 'fkwcci_myadmin';
$dbPassword = 'globe123';
$dbName     = 'fkwcci_medical';

//Connect and select the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
	echo "success";
}
?>
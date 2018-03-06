<?php
$con = mysql_connect("localhost","fkwcci_myadmin","globe123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("my_db", $con);
$aBook=$_GET['textbox'];
$N = count($aBook);
for($i=0; $i < $N; $i++)
{
mysql_query("INSERT INTO user (fname) VALUES ('$aBook[$i]')");
}
header("location: index.php");
mysql_close($con);
?> 
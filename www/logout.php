<?php
//echo "success";
include("config.php");
session_start();
//echo $_SESSION['ID'];
session_destroy();
header("location:index.php");
?>
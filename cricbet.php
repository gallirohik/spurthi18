<?php
session_start();
$_SESSION['event']="cricbet";
header("Location:temp.php");
die();
?>
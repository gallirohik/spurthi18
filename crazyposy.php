<?php
session_start();
$_SESSION['event']="crazyposy";
header("Location:temp.php");
die();
?>
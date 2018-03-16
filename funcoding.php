<?php
session_start();
$_SESSION['event']="funcoding";
header("Location:temp.php");
die();
?>
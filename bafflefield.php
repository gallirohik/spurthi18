<?php
session_start();
$_SESSION['event']="bafflefield";
header("Location:temp.php");
die();
?>
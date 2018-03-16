<?php
session_start();
$_SESSION['event']="boomerang";
header("Location:temp.php");
die();
?>
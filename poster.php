<?php
session_start();
$_SESSION['event']="poster";
header("Location:temp.php");
die();
?>
<?php
session_start();
$_SESSION['event']="theinquisitors";
header("Location:temp.php");
die();
?>
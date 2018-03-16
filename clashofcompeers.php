<?php
session_start();
$_SESSION['event']="clashofcompeers";
header("Location:temp.php");
die();
?>
<?php
session_start();
$_SESSION['event']="typerush";
header("Location:temp.php");
die();
?>
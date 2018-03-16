<?php
session_start();
$_SESSION['event']="gamedome";
header("Location:temp.php");
die();
?>
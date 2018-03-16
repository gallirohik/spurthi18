<?php
session_start();
$_SESSION['event']="edit";
header("Location:temp.php");
die();
?>
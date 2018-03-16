<?php
session_start();
$_SESSION['event']="virtualbounty";
header("Location:temp.php");
die();
?>

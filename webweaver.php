<?php
session_start();
$_SESSION['event']="webweaver";
header("Location:temp.php");
die();
?>
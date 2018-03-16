<?php
session_start();
$_SESSION['event']="ppt";
header("Location:temp.php");
die();
?>
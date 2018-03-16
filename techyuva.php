<?php
session_start();
$_SESSION['event']="techyuva";
header("Location:temp.php");
die();
?>
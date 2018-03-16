<?php
session_start();
$_SESSION['eventcall']=3;
header("Location:index.php");
die();
?>
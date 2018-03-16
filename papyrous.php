<?php
session_start();
$_SESSION['event']="papyrous";
header("Location:temp.php");
die();
?>
<?php
session_start();
$_SESSION['event']="brainbuster";
header("Location:temp.php");
die();
?>
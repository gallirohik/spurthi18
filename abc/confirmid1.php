<html>
<body>
<?php
include('header.php');
$name=$_SESSION['uname'];
//echo $name;

$mobile=$_GET['mobile'];
$sql="update hospitality1 set idcard='1' where clgid='$mobile';";
mysqli_query($con,$sql);
mysqli_close($con);
?>
<script type="text/javascript">
		window.location="viewstudentdata1.php?mobile=<?php echo $mobile; ?>";
</script>


</body>
</html>
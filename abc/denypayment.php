<html>
<body>
<?php
include('header.php');
$mobile=$_GET['mobile'];
$sql="update workshop1 set paystatus='0' where clgid='$mobile';";
mysqli_query($con,$sql);
mysqli_close($con);
?>
<script type="text/javascript">
		window.location="viewstudentdata.php?mobile=<?php echo $mobile; ?>";
</script>
</body>
</html>
<html>
<body>
<?php
include('header.php');
$name=$_SESSION['uname'];
//echo $name;
   include('connect.php');
$mobile=$_POST['mobile'];
$sql="update hospitality1 set status='1' where clgid='$mobile';";

mysqli_query($con,$sql);
$sql="select * from hospitality1  where clgid='$mobile';";

$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);
$email=$row['email'];
$name=$row['name'];

include "mail/mhr.php";
mysqli_close($con);
?>
<script type="text/javascript">
		window.location="viewstudentdata1.php?mobile=<?php echo $mobile; ?>";
</script>


</body>
</html>
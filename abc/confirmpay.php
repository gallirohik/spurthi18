<html>
<body>
<?php
include('header.php');
$name=$_SESSION['uname'];
//echo $name;
   include('connect.php');
$mobile=$_POST['mobile'];
$sql="update workshop1 set paystatus='1' where clgid='$mobile';";
mysqli_query($con,$sql);

$sql="select * from workshop1  where clgid='$mobile';";

$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);
$email=$row['email'];
$name=$row['name'];

include "mail/mwr.php";
mysqli_close($con);
?>
<script type="text/javascript">
		window.location="viewstudentdata.php?mobile=<?php echo $mobile; ?>";
</script>


</body>
</html>
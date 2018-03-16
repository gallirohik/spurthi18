<?php
include('header.php');
$id = $_GET["mobile"];
$sql="select * from hospitality1 where pid='$id'  ; ";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);

$mobile=$row['clgid'];
?>
<script type="text/javascript">
		window.location="viewstudentdata1.php?mobile=<?php echo $mobile; ?>";
</script>
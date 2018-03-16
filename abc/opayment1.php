<html>
<body>
<?php
include('header.php');
$sql="select * from hospitality1 where status='1'  ; ";
$res=mysqli_query($con,$sql);

?>
<table class="table table-hover">
<caption><b><big>hospitality payment confirmed details</big></b></caption>
<tr>
<th>Sl.no</th>
<th>Name</th>
<th>College</th>
<th>Reg No</th>
<th>Email</th>

<th>Mobile No</th>



</tr>

<?php
$i=1;
while($row=mysqli_fetch_array($res))
{
	?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><a href="viewstudentdata1.php?mobile=<?php echo $row['clgid']; ?> "><?php echo $row['name']; ?></a></td>
		<td><?php echo $row['clgname']; ?></td>
		<td><?php echo $row['clgid']; ?></td>
		<td><?php echo $row['email']; ?></td>
		
		<td><a href="viewstudentdata1.php?mobile=<?php echo $row['clgid']; ?> "><?php echo $row['phno']; ?></a></td>
		
	</tr>
<?php
$i=$i+1;
}
mysqli_close($con);
?>
</table>
</body>
</html>
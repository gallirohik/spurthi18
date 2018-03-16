<html>
<body>
<?php
include('header.php');
$sql="select * from workshop where payment='offline' and valid='1' order by timestamp desc ; ";
$res=mysqli_query($con,$sql);
?>
<table class="table table-hover">
<caption><b><big>Spot Pay Students confirmed details</big></b></caption>
<tr>
<th>Sl.no</th>
<th>Name</th>
<th>College</th>
<th>Reg No</th>
<th>Branch</th>

<th>Mobile No</th>


</tr>

<?php
$i=1;
while($row=mysqli_fetch_array($res))
{
	?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><a href="viewstudentdata.php?mobile=<?php echo $row['mobile']; ?> "><?php echo $row['name']; ?></a></td>
		<td><?php echo $row['college']; ?></td>
		<td><?php echo $row['regno']; ?></td>
		<td><?php echo $row['branch']; ?></td>
		
		<td><a href="viewstudentdata.php?mobile=<?php echo $row['mobile']; ?> "><?php echo $row['mobile']; ?></a></td>
		
	</tr>
<?php
$i=$i+1;
}
mysqli_close($con);
?>
</table>
</body>
</html>
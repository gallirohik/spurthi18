<html>
	<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
	<script type="text/javascript">
		function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
	}
		function check()
		{
			var a=confirm("Are you sure to confirm Payment?");
			return a;
		}
		function check1()
		{
			var a=confirm("Are you sure to confirm ID?");
			return a;
		}
		function del()
		{
			var a=confirm("Are you sure to delete record?");
			return a;
		}
		function check2()
		{
			var a=confirm("Are you sure to deny payment?");
			return a;
		}
		function check3()
		{
			var a=confirm("Are you sure to deny id?");
			return a;
		}

	</script>
	</head>
	<body>
	<?php
	include('header.php');
	$mobile=$_GET['mobile'];
	$sql="select * from hospitality1 where clgid='$mobile'; ";
	$res=mysqli_query($con,$sql);
	if($row=mysqli_fetch_array($res))
	{
	?>
	<div class="col-sm-12 " id="printableArea">
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
	<table class="table table-hover well">
	<form action="confirmpay1.php" method="POST" onsubmit="return check(this);">
	<center><caption><b>Details</b></caption></center>
	<tr>
		<th> Name</th>
		<td><?php echo $row['name']; ?> </td>
	</tr>
	<tr>
		<th> Register Number</th>
		<td><?php echo $row['clgid']; ?> </td>
	</tr>
	<tr>
		<th> College / Branch</th>
		<td><?php echo $row['clgname']; ?> </td>
	</tr>
	<tr>
		<th> Email Id</th>
		<td><?php echo $row['email']; ?> </td>
	</tr>
	<tr>
		<th> Mobile Number</th>
		<td><?php echo $row['phno']; ?> </td>
	</tr>
	<tr>
		<th> Transaction ID</th>
		<td><?php
	
		echo $row['pid'] ?> </td>
	</tr>

	<tr>
		<th>Payment mode</th>
		<td><?php 
		echo $row['payment'];
		 ?> </td>
	</tr>
	
	<tr>
		<th>Payment Confirmation</th>
		<td><?php 
		if($row['status']=='0')
				echo "<b><big><font color='red'>NOT PAID</font></big></b>";
		else
				echo "<b><big><font color='green'>PAID</font></big></b>";
		 ?> </td>
	</tr>
	<tr>
		<th>ID Confirmation</th>
		<td><?php 
		if($row['idcard']=='0')
				echo "<b><big><font color='red'>NOT ISSUED</font></big></b>";
		else
				echo "<b><big><font color='green'>ISSUED</font></big></b>";
		 ?> </td>
	</tr>
	<tr>
		<th>Timestamp</th>
		<td><?php 
		echo $row['timestamp'];
		 ?> </td>
	</tr>
	<tr>
		<th>Days</th>
		<td><?php 
		echo $row['days'];
		 ?> </td>
	</tr>
	<tr>
		<th>Start</th>
		<td><?php 
		echo $row['start'];
		 ?> </td>
	</tr>
	
	<tr>
		<td colspan="2" align="center">
			<input type="hidden" name="mobile" value="<?php echo $row['clgid']; ?>">
			<a href="denypayment1.php?mobile=<?php echo $row['clgid']; ?>" onclick="return check2(this);"><input type="button" value="Deny Payment" class="btn btn-warning"></a>&nbsp&nbsp&nbsp
			
			<input type="submit" value="Confirm Payment"  class="btn btn-success">
		<a href="deletedata1.php?mobile=<?php echo $row['clgid']; ?>" onclick="return del(this);" class="btn btn-danger">Delete</a>
			
			<a href="confirmid1.php?mobile=<?php echo $row['clgid']; ?>" onclick="return check1(this);"><input type="button" value="confirm id" class="btn btn-success"></a>
			<a href="denyid1.php?mobile=<?php echo $row['clgid']; ?>" onclick="return check3(this);"><input type="button" value="Deny id" class="btn btn-warning"></a>
			</td>
			</tr>
	</table>
	</form>
	</div>
	</div>
	<?php
	}
	else
	{?>
	<script type="text/javascript">
		alert("Student details not found.");
		window.location="viewdata.php";

	</script>	
	<?php
	}
	?>
	</body>
</html>
<html>
<head>

<style>

</style>
</head>
<body>
<?php
include('header.php');
?>
<div class="col-sm-12">

<div class="col-sm-6 well"><form action="vieww.php" method="GET">
<table class="table table-hover">
<tr>
<td>Enter transaction_id workshop</td>
<td> <input type="text" name="mobile"  class="form-control">
</td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" value="Search" class="btn btn-primary">
</td>
</tr>
</table>
</form></div>
<div class="col-sm-6 well">
<form action="viewh.php" method="GET">
<table class="table table-hover">
<tr>
<td>Enter transaction_id hospitality</td>
<td> <input type="text" name="mobile"  class="form-control">
</td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" value="Search" class="btn btn-primary">
</td>
</tr>
</table>
</form>
</div></div>

<div class="col-sm-12">

<div class="col-sm-6 well"><form action="viewstudentdata.php" method="GET">
<table class="table table-hover">
<tr>
<td>Enter college_id workshop</td>
<td> <input type="text" name="mobile"  class="form-control">
</td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" value="Search" class="btn btn-primary">
</td>
</tr>
</table>
</form></div>
<div class="col-sm-6 well">
<form action="viewstudentdata1.php" method="GET">
<table class="table table-hover">
<tr>
<td>Enter college_id hospitality</td>
<td> <input type="text" name="mobile"  class="form-control">
</td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" value="Search" class="btn btn-primary">
</td>
</tr>
</table>
</form>
</div></div>

</body>
</html>
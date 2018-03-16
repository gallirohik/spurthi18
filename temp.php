<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	html,body{
		height:100%;
	}
		#bbdd{
			margin-top:3%;
			height:83%;
			width:96%;
			background-color:black;
			margin-left:2%;
			overflow:auto;
		}
		#upper{
			height:5%;
		}
		#lower{
			
			height:10%;
		}
	</style>
</head>
<body style="background-color: black;width:100%">   
	<div id="upper">
	<?php include'navbar.php';?>
    </div>
 <div id="bbdd">
  <?php include 'tester.php';?>
 </div>
<div id="lower">
<?php include 'footer.php';?>
</div>

</body>
</html>



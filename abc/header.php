<html>
	<head>
        <title>admin workspace-Spurthi'18</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script>
  function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null};
</script>
    </head>
    <body>
    <?php
    
        session_start();
    

    error_reporting(0);
    if($_SESSION['valid']!='T')
            {
            
                include('login-check.php');
            
            }
            include('connect.php');
    ?>
    <div class="container-fluid well">
    <div class="col-sm-12">
    	<div class="col-sm-8">
    		<h1 align="center"><a href="viewdata.php" style="text-decoration: none">ADMIN workspace<br></a></h1>
    	</div>
		<div class="col-sm-1">
    			<a href="viewdata.php" class="btn btn-success">home</a>
    		</div>
        <div class="col-sm-1">
        <?php
        $sql="select * from eventregistration;";
          ?>

        <a href="excelconversion.php?value=<?php echo $sql; ?>" class="btn btn-info">Download</a>
        </div>
    	<div class="col-sm-1">
    	<a href="logout.php" class="btn btn-warning">Logout</a>
    	</div>
		<div class="col-sm-1">
    	
    	</div>
    </div>
    	<div class="col-sm-12">
    		<center>
			
			<div class="col-sm-3">
    			<a href="spayment.php" class="btn btn-primary">workshop</a>
    		</div>
    		<div class="col-sm-3">
    			<a href="spayment1.php" class="btn btn-success">hospitality</a>
    		</div>
    		<div class="col-sm-3">
    			<a href="opayment.php" class="btn btn-primary">workshop Confirmed</a>
    		</div>
    		<div class="col-sm-3">
    			<a href="opayment1.php" class="btn btn-success">hospitality Confirmed</a>
    		</div>
    	</div></center>
    </div>
    
    </body>
</html>
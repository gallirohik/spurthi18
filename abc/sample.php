<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <style>
        .style
        {
        	
        	padding-left: 40px;
        	padding-top: 30px;
        	height:153px;
        	width:355px;
        	font-size:14px;
            border:0;
        }
        body
        {
        	margin:0px 0px 0px 0px;
        	padding:0px 0px 0px 0px;
        }
        </style>
    </head>
    <body>
    	<?php
        $con=mysqli_connect("localhost","root","root","test");
        $sql="select * from ece;";
        $res=mysqli_query($con,$sql);

         ?>
    	<div>
    		<?php 
    			
    			while($row=mysqli_fetch_array($res))
    			{?>
    					
    					<div class=" col-xs-6 well  style">
    						<?php echo $row['A']; ?><br>
    						<?php echo $row['B']."<br>"; ?>
    						<?php echo $row['C']."<br>"; ?>
    						<?php echo $row['D']." - ".$row['E']; ?>.

    					</div>

    			<?php
    			
    			}
    			?>
    	</div>
    </body>
</html>
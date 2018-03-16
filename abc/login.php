<html>
	<head>
        <title>Ethical Hacking Workshop-Spurthi'16</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
    <?php
    session_start();
    include('connect.php');
    $uname=$_POST['uname'];
    $password=$_POST['password'];
    $sql="select * from users where uname='$uname' and password='$password'; ";
    $_SESSION['valid']='F';
    $res=mysqli_query($con,$sql);
    if($row=mysqli_fetch_array($res))
    {
    		$_SESSION['valid']='T';
    		$_SESSION['uname']=$uname;
    		$_SESSION['slno']=$row['slno'];
    		?>
            <script type="text/javascript">
                window.location="viewdata.php";
            </script>
            <?php
    }
    else
    {
    	?>
    		<script type="text/javascript">
    			alert("invalid credentials..");
    			window.location="login-form.php";
    		</script>
    	<?php
    }

    ?>
    </body>
</html>
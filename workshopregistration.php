
<html>
<head>

			  <meta charset="UTF-8">
  <title>Daily UI #002 Credit Card Checkout</title>
  <script src="https://use.typekit.net/xft2oih.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
  
  
      <link rel="stylesheet" href="paystyle.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div id="mod1" class="modal">
  
  <form class="modal-content animate" action="home.php" method="POST">

    <div class="container">
      <p>Spurthi18 team has received you payment information. After conformation by our team you will receive a Message or Email within 48hours. If not contact us.</p>
        
      <a href="index.php"><button type="button" name="submitbut">HOME</button></a>
	   <a href="hospitality1.php"><button type="button" name="submitbut">HOSPITALITY</button></a>
    </div>
  </form>
</div>
  <div id="wrapper">
  <div id="container">
  <div id="mod2" class="modal">
  
  <form class="modal-content animate" action="home.php" method="POST">

    <div class="container">
      <p>You have already registered using this college id if not please try after sometime.</p>
        
      <a href="workshop.php"><button type="button" name="submitbut">OKAY</button></a>
    </div>
  </form>
</div>
  <div id="wrapper">
  <div id="container">
  
<?php
@ob_start();
session_start();
$_SESSION['registered'] = 'yes';  
$_SESSION['paid'] = 'no';
$clgid = $_POST['clgid'];
$clgname = $_POST['values'];
 if($clgname=='other'){
$clgnme=$_POST['other']; 
  } 
$cername = $_POST['cername'];
$name = $_POST['fname'];
$email = $_POST['email'];
$phno = $_POST['phno'];

$gender = $_POST['gender'];



$servername = "localhost";
$username = "spurthi18";
$password = "Spurthi@18";
$dbname = "spurthi18";
$connect = new mysqli($servername,$username,$password,$dbname);
$payment=$_POST['payment'];
$pid=$_POST['pid'];
$sql = "insert into workshop1 (clgid,clgname,cername,name,email,phno,gender,payment,pid) values('$clgid','$clgname','$cername','$name','$email','$phno','$gender','$payment','$pid')";

$qres = $connect->query($sql);
if($qres)
{
include "mail2/mailworkreg.php";
echo "<script>var mod = document.getElementById('mod1'); mod.style.display='block';</script>";
}
 else{
echo "<script>var mod = document.getElementById('mod2'); mod.style.display='block';</script>";

}
mysqli_close($connect);

?>
  
  </body>
</html>
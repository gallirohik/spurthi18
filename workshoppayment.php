<!DOCTYPE html>
<?php  
@ob_start(); session_start();

$pd =  $_SESSION['paid'];
$regis = $_SESSION['registered'];
$clgid = $_GET["clgid"];

if(!isset($_GET["clgid"])){
?>
<script type="text/javascript">
		window.location="workshop.php";
</script>
<?php
}
$servername = "localhost";
$username = "spurthi18";
$password = "Spurthi@18";
$dbname = "spurthi18";
$connect = new mysqli($servername,$username,$password,$dbname);

$sql = "select * from onlinepaymentworkshop where clgid ='$clgid'";
$qres = $connect->query($sql);
$len = $qres->num_rows;
//echo "$row";
if($len == 1)
{
$pd = 'yes';
//echo "$qres"; 
}
else
{
  $pd = 'no';
  //echo "$qres";
}
mysqli_close($connect);
echo'
<html >
<head>
  <meta charset="UTF-8">
  <title>Daily UI #002 Credit Card Checkout</title>
  <script src="https://use.typekit.net/xft2oih.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
  
  
      <link rel="stylesheet" href="paystyle.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
</head>

<body>

';
echo'
<div id="mod2" class="modal">
  
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

    <div id="info">
      
      <img id="product" src="images3/block.png"/>

      <p>Work Shop</p>

      <div id="price">';
        $acc = $_SESSION['accomodation'];
        $money= 800;
        if($acc == "yes")
        {   
            $money = $money + 200;
        }
        echo'
        <h2>₹';echo"$money"; echo'</h2>

      </div>
    </div>

    <div id="payment">

      <form id="checkout" action=""  method="POST">

        <input class="card" id="visa" type="button" name="card" value="">
        <input class="card" id="mastercard" type="button" name="card" value="">
        <input class="card" id="metro" type="button" name="card" value="">

        <label>College Id</label>
        <input id="cardnumber" type="text" requierd="true" name="collegeid" value="';echo"$clgid";echo'"';echo'>  
        <label>Transaction Id</label>
        <input id="cardnumber" type="text" requierd="true" name="cardnumber"  required  placeholder="txnd892829">

        <label>Phone Number  (by which money paid)</label>
       <input id="cardholder" type="number" requierd="true" name="mobno" required  minlength = "10" maxlength="10" placeholder="8767564321" required>

        <input class="btn" type="submit" name="purchase" value="submit">
      </form>
    </div>

  </div>
</div>';
if( $regis == "yes" and $pd == "no") 
{
echo "<script>var mod = document.getElementById('mod1'); mod.style.display='block';</script>";
$_SESSION['paid']="no";
}
if( $pd == "yes")
{
echo "<script>var mod = document.getElementById('mod2'); mod.style.display='block';</script>";
$_SESSION['registered']="no";
}
if(isset($_POST["purchase"]))
{
$_SESSION['paid']="yes";
$tclgid=$_POST['collegeid'];
$tphonepe=$_POST['cardnumber'];
$mobno=$_POST['mobno'];
$servername = "localhost";
$username = "spurthi18";
$password = "Spurthi@18";
$dbname = "spurthi18";
$connect = new mysqli($servername,$username,$password,$dbname);

$sql = "insert into onlinepaymentworkshop(clgid,phonepetxnid,mobileno) values('$tclgid','$tphonepe','$mobno')";
$qres = $connect->query($sql);
mysqli_close($connect);
header("Refresh:0");
}
echo'
</body>
</html>';
?>

<!DOCTYPE html>
<?php  
@ob_start(); session_start();

$regis = $_SESSION['hregistered'];
$acc = $_SESSION['nd'];
$clgid = $_GET["clgid"];
$servername = "localhost";
$username = "spurthi18";
$password = "Spurthi@18";
$dbname = "spurthi18";
$connect = new mysqli($servername,$username,$password,$dbname);

$sql = "select * from onlinepaymenthospitality where clgid ='$clgid'";
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
      <link rel="stylesheet" href="css/particlestyle.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
<div id="particles-js"></div>
';
echo'
<div id="mod2" class="modal">
  
  <form class="modal-content animate" action="index.php" method="POST">

    <div class="container">
      <p>Spurthi18 team has received you payment information. After conformation by our team you will receive a Message or Email within 48hours. If not contact us.</p>
        
      <a href="index.php"><button type="button" name="submitbut">HOME</button></a>
    </div>
  </form>
</div>
  <div id="wrapper">
  <div id="container">

    <div id="info">
      <p id="hosname">Hospitality</p>

      <div>';
$money=0;
	if($acc==1){
$money= 200;
	}
	else if($acc==2){
$money= 300;
	}
	else if($acc==3){
$money= 450;
	}
	else if ($acc==4){
$money= 600;
	}
	
        
        echo'
        <h2 id="hosprice" >₹';echo"$money"; echo'</h2>

      </div>
    </div>

    <div id="payment">

      <form id="checkout" action=""  method="POST">

        <input class="card" id="visa" type="button" name="card" value="">
        <input class="card" id="mastercard" type="button" name="card" value="">
        <input class="card" id="metro" type="button" name="card" value="">

        <label>College Id</label>
        <input id="cardnumber" type=text name="collegeid" value="';echo"$clgid";echo'"';echo'>
        <label>Transaction Id</label>
	
        <input id="cardnumber" requierd="true" type=text name="cardnumber" placeholder="txnd892829">
<div> FOR OFFLINE PAYMENT  ENTER TRANSACTION ID AS 0</div>
        <label>Phone Number  (by which money paid)</label>
       <input id="cardholder" type="number" name="mobno" requierd="true" minlength = "10" maxlength="10" placeholder="8767564321" required>
	<div> FOR OFFLINE PAYMENT  ENTER TRANSACTION ID AS 0</div>
        <input class="btn" type="submit" name="purchase" value="submit">
      </form>
    </div>

  </div>
</div>';
echo"<script>$('input[type=number]').on('mousewheel',function(e){ $(this).blur(); });
// Disable keyboard scrolling
$('input[type=number]').on('keydown',function(e) {
    var key = e.charCode || e.keyCode;
    // Disable Up and Down Arrows on Keyboard
    if(key == 38 || key == 40 ) {
  e.preventDefault();
    } else {
  return;
    }
});</script> 
<script src='particles.js'></script>
<script src='js/app.js'></script>";
if( $regis == "yes" and $pd == "no")
{
echo "<script>var mod = document.getElementById('mod1'); mod.style.display='block';</script>";
$_SESSION['hpaid']="no";
}
if( $pd == "yes")
{
echo "<script>var mod = document.getElementById('mod2'); mod.style.display='block';</script>";
$_SESSION['registered']="no";
}
if(isset($_POST["purchase"]))
{
$_SESSION['hpaid']="yes";
$tclgid=$_POST['collegeid'];
$tphonepe=$_POST['cardnumber'];
$mobno=$_POST['mobno'];
$username = "spurthi18";
$password = "Spurthi@18";
$dbname = "spurthi18";
$connect = new mysqli($servername,$username,$password,$dbname);

$sql = "insert into onlinepaymenthospitality(clgid,phonepetxnid,mobileno) values('$tclgid','$tphonepe','$mobno')";
$qres = $connect->query($sql);
mysqli_close($connect);
header("Refresh:0"); 
}
echo'
</body>
</html>';
?>

<html>
<body>
<?php

if(isset($_POST['mobile'])){
	$name=$_POST['name'];
$college=$_POST['college'];
$regno=$_POST['regno'];
$branch=$_POST['branch'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$payment=$_POST['payment'];
if(isset($_POST['pid'])){
	$pid=$_POST['pid'];
}
else{
	$pid="";
}
include "connect.php";

if(mysqli_query($con,"INSERT INTO `workshop`(`name`, `college`, `regno`, `branch`, `email`, `mobile`, `payment`, `pid`) VALUES ('$name','$college','$regno','$branch','$email','$mobile','$payment','$pid')"))
{

 /* require_once('email/class.phpmailer.php');
  include("email/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded		
 
  $mail = new PHPMailer();
  $mail->IsSMTP(); // telling the class to use SMTP
  $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
  $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
  $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
  $mail->Username   = "spurthi16@gmail.com";  // GMAIL username
  $mail->Password   = "workshop@spurthi2k16";            // GMAIL password

  $mail->SetFrom('workshop.spurthi16@gmail.com', 'spurthi16'); // Change the name as you want
  $mail->Subject    = "your registration for spurthi-workshop is successfull !
  
 

  
  
  
  ";
  $mail->Body = " Dear $name, your request for workshop registration was received.
  
  If your payment was made online we will verify your transaction number and will mail you shortly.
  If your payment method is spot payment please bring your money in the form of cash/DD to the venue.
  
  visit our website for other events url www.spurthi16.com
  
  for any furthur details contact us:
  email id: workshop.spurthi16@gmail.com
  contact details:
	vinay narayana : +91 9640874054
	Rakesh kumar reddy : +91 7382372167



Thanks & Regards
Spurthi16,
Department of CSE,
SRKR Engineering College,
Bhimavaram-534204.
";
  $mail->AddAddress($email);
  
  $mail->Send();*/
  
  ?>
  <script type="text/javascript">
	alert("Thank You for registering this workshop. we will send you confirmation mail.");
	window.location="..";
  
  </script>
  <?php
}
else{
	?>
  <script type="text/javascript">
	alert("Invalid or Duplicate entry please try again.");
	window.location="index.php";
  
  </script>
  <?php
	
}
}
else{
	?>
  <script type="text/javascript">
	window.location="index.php";
  
  </script>
  <?php
}




?>

</body>
</html>
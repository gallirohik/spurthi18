

<?php

 $emailto = $email;
$emailsubject = "payment received !!";
$emailmessage = "Dear ".$name."
<br>
Thank you for  your interest in SPURTHI'18.<br>
Your hospitality payment has been verified and accepted.<br>

<br>
Thank You<br>
<br>
Regards";
$emailfrom = "hospitality@spurthi18.com";

$headers = "MIME-Version: 1.0\r\
"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\
"; 
$headers .= "From: hospitality@spurthi18.com\r\
"; 
$headers .= "X-Mailer: PHP \r\
";

if(mail($emailto, $emailsubject, $emailmessage, $headers)) {
echo "Thank you for contacting us. We will be in touch with you very soon."; 
}else{ 
echo "Not sent"; 
}	   

  ?>


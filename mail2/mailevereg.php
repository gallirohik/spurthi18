

<?php

  $emailto = $email;
$emailsubject = "Registration successful !!";
$emailmessage = "Dear ".$name."<br>
<br>
Thank you for your interest to participate in SPURTHI'18.<br>
You have completed registration for events in SPURTHI.<br>
<br>
Thank You<br>
<br>
Regards <br>
TEAM SPURTHI<br>";
$emailfrom = "events@spurthi18.com";

$headers = "MIME-Version: 1.0\r\
"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\
"; 
$headers .= "From: events@spurthi18.com\r\
"; 
$headers .= "X-Mailer: PHP \r\
";

if(mail($emailto, $emailsubject, $emailmessage, $headers)) {
echo "Thank you for contacting us. We will be in touch with you very soon."; 
}else{ 
echo "Not sent"; 
}	  

  ?>


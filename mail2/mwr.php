

<?php

 $emailto = $email;
$emailsubject = "Registration successful !!";
$emailmessage = 'Dear '.$name.'<br>
<br>
Thank you for  registering into workshop on<br>
 "BITCOINS & BLOCK CHAIN TECHNOLOGY".<br>
We have recieved your payment of Rs.800/-. <br>
Please collect your id card on the day of workshop. <br>
<br>
Thank You<br>
<br>
Regards <br>
TEAM SPURTHI';
$emailfrom = "workshop@spurthi18.com";

$headers = "MIME-Version: 1.0\r\
"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\
"; 
$headers .= "From: workshop@spurthi18.com\r\
"; 
$headers .= "X-Mailer: PHP \r\
";

if(mail($emailto, $emailsubject, $emailmessage, $headers)) {
echo "Thank you for contacting us. We will be in touch with you very soon."; 
}else{ 
echo "Not sent"; 
}	   

  ?>


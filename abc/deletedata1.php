<?php
include('connect.php');
$mobile=$_GET['mobile'];
$sql1="select * from hospitality1 where clgid='$mobile';";
$sql="delete from hospitality1 where clgid='$mobile';";
$res=mysqli_query($con,$sql1);
$row=mysqli_fetch_array($res);




 $emailto = "hospitality@spurthi18.com";
$emailsubject = "Record deleted !!";
$emailmessage = $row['clgid']."  ".$row['clgname']."  ".$row['name']."  ".$row['email']."  ".$row['phno']."  ".$row['gender']."  ".$row['payment']."  ".$row['pid']."  ".$row['days']."  ".$row['start']."  ".$row['status']."  ".$row['idcard']."  ".$row['timestamp'];
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









mysqli_query($con,$sql);
mysqli_close($con);
include('viewdata.php');
?>
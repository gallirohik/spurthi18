<?php
$clgid = $_POST['clgid'];
		$result2="";
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "spurthi18";
      $conn = new mysqli($servername,$username,$password,$dbname);

      //check connection

      if(mysqli_connect_error())
      {

        die("connection not created".mysqli_connect_error());
      }
      
      $sql2 = "update workshop set idissued='yes' where clgid='$clgid' ";
      $result2 = $conn->query($sql2);

      mysqli_close($conn);

?>
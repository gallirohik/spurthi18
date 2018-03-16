<head>
	<title> HOME | SPURTHI' 18 | SRKR </title
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link rel="stylesheet" type="text/css" href="css/hamburger.css">
<link rel="stylesheet" href="style.css">
<style>
body {font-family: "Lato", sans-serif}
#eventregtable {display: none}
#workshopregtable {display: none}
#tour1 {font-family: "Lato", sans-serif}

.bt {
    background-color: blue;
    color: white;
    padding: 5px 5px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.bt:hover {
    opacity: 0.8;
}
</style>
</head>
<body>
<!-- Navbar -->
<div class="w3-top" >
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">BAND</a>
    <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">TOUR</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
    
      <button class="w3-padding-large w3-button" onclick="document.getElementById('ticketModal').style.display='block'" title="More">ADMIN</button>     
     
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#band" class="w3-bar-item w3-button w3-padding-large">BAND</a>
  <a href="#tour" class="w3-bar-item w3-button w3-padding-large">TOUR</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large">CONTACT</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">MERCH</a>
</div>
<div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">HI ADMIN!</h2>
    <p class="w3-opacity w3-center"><i>Inspiring Always?</i></p>
	</div>
<script>
	// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
  <!-- The Tour Section -->
  <div class="w3-black" id="tour1">
  
      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <div class="w3-container w3-white w3-bold">
            <h2><b>View Event Registrations</b></h2>
            <p class="w3-opacity">Fri 27 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-button w3-khaki w3-margin-bottom" onclick="document.getElementById('eventregtable').style.display='block'">GO</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <div class="w3-container w3-white">
            <h2><b>View Workshop Registrations</b></h2>
            <p class="w3-opacity">Sat 28 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-button w3-blue w3-margin-bottom" onclick="document.getElementById('workshopregtable').style.display='block'">GO</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <div class="w3-container w3-white">
            <h2><b>Register For Workshop</b></h2>
            <p class="w3-opacity">Sun 29 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-button w3-green w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">GO</button>
          </div>
        </div>
      </div>
    </div>
<!-- event registrations table -->
<div id="eventregtable" class="w3-container">
  <h2>Students registered for Events:</h2>
	<table class="w3-table-all w3-text-black">
    <thead>
      <tr class="w3-khaki">
        <th>First Name</th>
        <th>Last Name</th>
        <th>Points</th>
      </tr>
    </thead>
    <tr>
      <td>Jill</td>
      <td>Smith</td>
      <td>50</td>
    </tr>
    <tr>
      <td>Eve</td>
      <td>Jackson</td>
      <td>94</td>
    </tr>
    <tr>
      <td>Adam</td>
      <td>Johnson</td>
      <td>67</td>
    </tr>
  </table>
  <button class="w3-button w3-red w3-section" onclick="document.getElementById('eventregtable').style.display='none'">Close <i class="fa fa-remove"></i></button>

</div>

<?php 
$result2="";
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "spurthi";
      
      //create connection
      $tfullname ="";
      $tcername = "";
      $tclgid = "";
      $tpaid = "";
      $tidissued = "";
      $tid="";

      $conn = new mysqli($servername,$username,$password,$dbname);

      //check connection

      if(mysqli_connect_error())
      {

        die("connection not created".mysqli_connect_error());
      }
      
      $sql2 = "SELECT * FROM workshop ORDER BY name";
      $result2 = $conn->query($sql2);
      //$result = $conn->query($sql);
 

echo'
<!-- workshop registrations table -->
<div id="workshopregtable" class="w3-container">
  <h2>Students registered for Workshops:</h2>
	<table class="w3-table-all w3-text-black">
    <thead>
      <tr class="w3-blue">
        <th>S.NO</th>
        <th>College ID</th>
        <th>Full Name</th>
        <th>Certificate Name</th>
        <th>Money</th>
        <th>ID</th>
      </tr>
    </thead>
    <tbody>';
    $count = 0;
                 while( $row = $result2->fetch_assoc()){
                  $count =  $count + 1;
                   echo
                    "<tr>
                      <td>{$count}</td>
                       <td>{$row['clgid']}</td>
                       <td>{$row['name']}</td>
                       <td>{$row['cername']}</td>";
                       $tpaid = $row['paid'];
                       $tid=$row['clgid'];
                    if($tpaid == "yes")
                {
               echo "<td><button class='w3-button w3-blue' type = 'submit' style='width:auto;' name='request1' disabled = 'disabled'>paid</button></td>";}
                     else
                  {
                    echo "<td><button id='";echo"$tid";echo"'";echo" class='w3-button w3-blue' type = 'submit' style='width:auto;' onclick='paymt(id,this)' name='request1'>paid</button></td>";

                  }
                  $tidissued= $row['idissued'];
                  if($tidissued == "yes")
                {
               echo "<td><button class='w3-button w3-blue' type = 'submit' style='width:auto;' name='request1' disabled = 'disabled'>Issued</button></td>";}
                     else
                  {
                    echo "<td><button id='";echo"$tid";echo"'";echo" class='w3-button w3-blue' type = 'submit' style='width:auto;' onclick='issue(id,this)' name='request1'>Issued</button></td>";

                  }
                  echo "</tr>\n";
                  } 
echo'
    </tbody>
  </table>
  <button class="w3-button w3-red w3-section" onclick="document.getElementById(\'workshopregtable\').style.display=\'none\'">Close <i class="fa fa-remove"></i></button>

</div>
<!-- When the user clicks anywhere outside of the modal, close it -->';?>

<script>
var modal = document.getElementById('eventregtable');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
  </script>
<script>
function paymt(id1,obj) {
    var con = confirm("confirm payment");
    if(con == true)
    {
    obj.disabled="disabled";
    $.ajax({  
    type: 'POST',  
    url: '/spurthi/insertpaiddata.php', 
    data: { clgid: id1 },
    success: function(response) {
    }
});
  }
}

function issue(id1,obj) {
     var con1 = confirm("confirm ID Issue"); 
     if(con1 == true)
     {
    obj.disabled="disabled";

    $.ajax({  
    type: 'POST',  
    url: '/spurthi/insertissuedata.php', 
    data: { clgid: id1 },
    success: function(response) {
    }
});
  }

}
</script>
<?php mysqli_close($conn);?>
<!-- Payment Process of Registered Workhop User -->
 <div class="w3-bar">
  <button class="w3-bar-item w3-button w3-black">Button</button>
  <button class="w3-bar-item w3-button w3-teal">Button</button>
  <button class="w3-bar-item w3-button w3-red">Button</button>
</div>
<?php include 'footer.php' ?>;

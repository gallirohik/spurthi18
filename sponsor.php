<!DOCTYPE html>
<html>
<head>
	<title>SPONSORS</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
</style>
	<style type="text/css">
	
     .font1{
     	font-family:"lato",sans-serif;
     	background-color:black;
     	color:white;

     }
     #area{
     	height:auto;
     	width:80%;
     	margin-left:10%;
		margin-bottom:3%;
     	overflow:;

     }
    </style>
	<script type="text/javascript">
	
		
		function showNav2()
		{
			document.getElementById("nav3").style.display="block";
	
		}
	</script>
	<link rel="stylesheet" type="text/css" href="css/particlestyle.css">
	<?php include'navbar.php';?>
</head>
<body style="background-color:black">
	
</div>
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">SPURTHI' 18</h2>
    <p class="w3-opacity w3-center"><i>Inspiring Always!</i></p>
	</div>
<!-- Ticket Modal -->
  <div id="ticketModal" class="w3-modal w3-text-black">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal').style.display='none'" 
       class="w3-button w3-teal  w3-xlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-user w3-margin-right"></i>Admin</h2>
      </header>
      <div class="w3-container">
        <p><label><i class="fa fa-user"></i> User Name</label></p>
        <input class="w3-input w3-border" type="text" placeholder="Secret Login">
        <p><label><i class="fa fa-lock" ></i> Password</label></p>
        <input class="w3-input w3-border" type="text" placeholder="Password">
        <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">Login <i class="fa fa-check"></i></button>
      </div>
    </div>
  </div>
  <script>
// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
  </script>
	
<!--particle script-->
<script src="particles.js"></script>
<script src="js/app.js"></script>


<div id="particles.js" class="font1">

<h1><b>Our Sponsors</b></h1>
 <!-- First Photo Grid-->
  <div class="w3-row">
    <div class="w3-third w3-container ">
      <img src="images/sponsors/7.jpeg" alt="OpsRamp" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-teal">
        <p><b>OpsRamp</b></p>
      </div>
    </div>
    <div class="w3-third w3-container ">
      <img src="images/sponsors/6.jpeg" alt="Netenrich" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-teal">
        <p><b>Netenrich</b></p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="images/sponsors/8.jpeg" alt="Reddy & Reddy Group" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-teal">
        <p><b>Reddy & Reddy Group</b></p>
      </div>
    </div>
  </div>
  <br>
  <!-- Second Photo Grid-->
  <div class="w3-row">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="images/sponsors/3.jpeg" alt="32 Dental Care" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-teal">
        <p><b>32 Dental Care</b></p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="images/sponsors/2.jpeg" alt="Alumni" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-teal">
        <p><b>Alumni</b></p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="images/sponsors/5.jpeg" alt="Meena Gold" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-teal">
        <p><b>Meena Gold</b></p>
      </div>
    </div>
  </div>
 <!-- Third Photo Grid-->
  <div class="w3-row">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="images/sponsors/9.jpeg" alt="32 Dental Care" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-teal">
        <p><b>SAM&TIM</b></p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="images/sponsors/1.jpeg" alt="Alumni" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-teal">
        <p><b>Seetayya Grand</b></p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="images/sponsors/4.jpeg" alt="Meena Gold" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-teal">
        <p><b>Reddy and Reddy</b></p>
      </div>
    </div>
  </div>


  </div>
</div>
 
</body>
<?php include 'footer.php';?>
</html>

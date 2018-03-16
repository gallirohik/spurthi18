<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
     html,body{
      height:100%;
     }
		
     .nav1{
     	margin-left:90%;
     	position: relative;
     }
     #nav{
     	transition:0.5s;
     	position:relative;
     }
   .w3-container
   {
	   display:none;
   }
   
     .content{
     	padding:1% 2% 1% 2%;
        display:none;
     	margin-top:-4.5%;
     	margin-left:8%;
     	height:auto;
     	border-radius:50px;
     	position:relative;
     	width:60%;
     	background-color:rgba(247, 94, 12,1);

     
     }
     .NavItems
     {
     	padding:1% 3% 1% 1%;
     	font-size:100%;
        font-family:"lato",sans-serif;
     position: relative;
     }
      .NavItems:hover
     {
     	padding:2% 3% 2% 2%;
     	font-size:100%;
     	color:white;
     	font-family:"lato",sans-serif;
     	position:relative;
   
     }
     #nav2
     {
      width:6%;
       margin-top:0%;
       margin-left:2%;
       display:block;

       position:relative;
     }
     .font1{
     	font-family:"lato",sans-serif;
     	background-color:black;
     	color:white;

     }
     #area{
     	height:40%;
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
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color:black">
	<div id="particles-js"></div>
	 <?php include'navbar.php';?>
<?php include 'contactNav.php';?>
	
  
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
<script src="js/app1.js"></script>
 
</body>

<div id="area" class="font1">
<!-- Sidebar/menu -->
<!--
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:13%; height:auto;float:none;margin-top:5%;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-close"></i>
    </a>
    <h4><b>CONTACT US</b></h4>
    <p class="w3-text-grey">Team SPURTHI</p>
  </div>

  <div class="w3-bar-block">
    <a href="" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>CONTACT US</a> 
    <a href="#team" onclick="show('team')" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>Management</a> 
    <a href="#Workshop" onclick="show('workshop')" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>Workshop</a>
    <a href="#Sports" onclick="show('sports')" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>Sports</a>
    <a href="#Hospitality" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>Hospitality</a>
    <a href="#Culturals" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>Culturals</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
  </div>
  <div class="w3-panel w3-large">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-envelope-o w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
-->
</nav>

<!-- Overlay effect when opening sidebar on small screens -->

<br>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:0px" id="whole">

<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center " id="team">
<span class="w3-xlarge w3-border-teal w3-bottombar" >Management Team</span><br><br>
<div class="w3-third">
  <img src="images/rajeev.png" alt="Boss" style="width:100%" class="w3-circle w3-hover-opacity">
  <h3>RAJEEV</h3>
  <p></p>
 
	    <a class="w3-button" href="tel:8985816974" title="Facebook"><i class="fa fa-phone"></i></a>8985816974<br>
		   <a class="w3-button " href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
	    <a class="w3-button " href="javascript:void(0)" title="Facebook"><i class="fa fa-envelope-o"></i></a>
</div>
<div class="w3-third">
  <span class="imgbk">
  <img src="images/krishna.png" alt="Boss" style="width:100%" class="w3-circle w3-hover-opacity">
</span>
  <h3>KRISHNA SAILESH</h3>
  <p></p>
 
	    <a class="w3-button" href="tel:8187823878" title="Facebook"><i class="fa fa-phone"></i></a>8187823878<br>
		   <a class="w3-button " href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
	    <a class="w3-button " href="javascript:void(0)" title="Facebook"><i class="fa fa-envelope-o"></i></a>
</div>
<div class="w3-third">
  <span class="imgbk">
  <img src="images/prasanna.png" alt="Boss" style="width:57%" class=" w3-hover-opacity">
</span>
  <h3>LAKSHMI PRASANNA</h3>
  <p></p>
 
	    <a class="w3-button" href="tel:8187823878" title="Facebook"><i class="fa fa-phone"></i></a>7995110216<br>
		   <a class="w3-button " href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
	    <a class="w3-button " href="javascript:void(0)" title="Facebook"><i class="fa fa-envelope-o"></i></a>
</div>

<!--
<div class="w3-quarter">
  <img src="/images/avtar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Rebecca Flex</h3>
  <p>Support</p>
 
	    <a class="w3-button" href="tel:9490855808" title="Facebook"><i class="fa fa-phone"></i></a> 9490855808<br>
		   <a class="w3-button " href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
	    <a class="w3-button " href="javascript:void(0)" title="Facebook"><i class="fa fa-envelope-o"></i></a>
</div>-->
</div>
<!-- ;;;;;;;;;;;; workshop Container ;;;;;;;;;; -->
<div class="w3-container w3-padding-64 w3-center" id="workshop">
<span class="w3-xlarge w3-border-teal w3-bottombar">Workshop Team</span><br><br> 
<div class="w3-third">
  <img src="images/mahesh.png" alt="Boss" style="width:100%" class="w3-circle w3-hover-opacity"> 
  <h3>MAHESH</h3> 
  <p></p>
 
	    <a class="w3-button" href="tel:8121530060" title="Number"><i class="fa fa-phone"></i></a>8121530060<br>
		   <a class="w3-button " href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
	    <a class="w3-button " href="javascript:void(0)" title="Facebook"><i class="fa fa-envelope-o"></i></a>
</div>
<div class="w3-third">
  <img src="images/avtar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>SAI KARTHIK</h3>
  <p></p>
 
	    <a class="w3-button" href="8885559084" title="Facebook"><i class="fa fa-phone"></i></a>8885559084<br>
		   <a class="w3-button " href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
	    <a class="w3-button " href="javascript:void(0)" title="Facebook"><i class="fa fa-envelope-o"></i></a>
</div>
<!--
<div class="w3-quarter">
  <img src="" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3></h3>
  <p>Support</p>
 
	    <a class="w3-button" href="tel:9490855808" title="Facebook"><i class="fa fa-phone"></i></a> 9490855808<br>
		   <a class="w3-button " href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
	    <a class="w3-button " href="javascript:void(0)" title="Facebook"><i class="fa fa-envelope-o"></i></a>
</div>

<div class="w3-quarter">
  <img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Rebecca Flex</h3>
  <p>Support</p>
 
	    <a class="w3-button" href="tel:9490855808" title="Facebook"><i class="fa fa-phone"></i></a> 9490855808<br>
		   <a class="w3-button " href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
	    <a class="w3-button " href="javascript:void(0)" title="Facebook"><i class="fa fa-envelope-o"></i></a>
</div>-->
</div>
<!-- SPORTS Container -->
<div class="w3-container w3-padding-64 w3-center" id="sports">
<span class="w3-xlarge w3-border-teal w3-bottombar"onclick=show("sports")>Sports Team</span><br><br>
<div class="w3-third">
  <img src="images/pavan.png" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>K.PAVAN KALYAN</h3>
  <p></p>
 
	    <a class="w3-button" href="tel:7893027226" title="Facebook"><i class="fa fa-phone"></i></a>7893027226<br>
		   <a class="w3-button " href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
	    <a class="w3-button " href="javascript:void(0)" title="Facebook"><i class="fa fa-envelope-o"></i></a>
</div>
<div class="w3-third"> 
  <img src="images/avtar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>V. BHARGAVI</h3>
  <p>Support</p>
 
	    <a class="w3-button" href="tel:7702091593" title="Facebook"><i class="fa fa-phone"></i></a>7702091593<br>
		   <a class="w3-button " href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
	    <a class="w3-button " href="javascript:void(0)" title="Facebook"><i class="fa fa-envelope-o"></i></a>
</div>
<!--
<div class="w3-quarter">
  <img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Rebecca Flex</h3>
  <p>Support</p>
 
	    <a class="w3-button" href="tel:9490855808" title="Facebook"><i class="fa fa-phone"></i></a> 9490855808<br>
		   <a class="w3-button " href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
	    <a class="w3-button " href="javascript:void(0)" title="Facebook"><i class="fa fa-envelope-o"></i></a>
</div>

<div class="w3-quarter">
  <img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Rebecca Flex</h3>
  <p>Support</p>
 
	    <a class="w3-button" href="tel:9490855808" title="Facebook"><i class="fa fa-phone"></i></a> 9490855808<br>
		   <a class="w3-button " href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
	    <a class="w3-button " href="javascript:void(0)" title="Facebook"><i class="fa fa-envelope-o"></i></a>
</div>-->
</div>
<!-- Contact Container --><!--
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
      <h3>Address</h3>
      <p>Swing by for a cup of coffee, or whatever.</p>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  Chicago, US</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +00 1515151515</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  test@test.com</p>
    </div>
  </div>-->
</div>

<script>
  show('team');
function show(iden)
{
	    document.getElementById("team").style.display="none";
			document.getElementById("sports").style.display="none";
			document.getElementById("workshop").style.display="none";
			/*document.getElementById("team").style.display="none";
			document.getElementById("nav3").style.display="none";
			document.getElementById("nav3").style.display="none";
			document.getElementById("team").style.display="none";
			document.getElementById("nav3").style.display="none";
			document.getElementById("nav3").style.display="none";
			document.getElementById("team").style.display="none";
			document.getElementById("nav3").style.display="none";
			document.getElementById("nav3").style.display="none";
			document.getElementById("team").style.display="none";
			document.getElementById("nav3").style.display="none";
			document.getElementById("nav3").style.display="none";*/ 
	var x = document.getElementById(iden);
	x.style.display = 'block';
}

</script>

</div>
</div>
<?php include'footer.php'; ?>
</body>
</html>


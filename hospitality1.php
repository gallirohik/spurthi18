<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
     .nav1{
     	margin-left:90%;
     	position: relative;
     }
     #nav{
     	transition:0.5s;
     	position:relative;
     }
   
     .content{
     	padding:1% 2% 1% 2%;
        display:none;
     	margin-top:-4.5%;
     	margin-left:8%;
     	height:auto;
     	border-radius:10px;
     	position:fixed;
     	width:60%;
     	background-color:teal;

     
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
     	overflow:auto;

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
<?php include'navbar.php';?>

</head>
<body style="background-color:black">
	<div id="particles-js"></div>
	 <div class="content" id="nav3">
	 </div>
	
<!--particle script-->
<script src="particles.js"></script>
<script src="js/app.js"></script>
 
</body>

<div id="area" class="font1 w3-container">
<!-- About Spurthi -->

<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">HOSPITALITY</span></div>
      <h3>Details</h3>
      <p>Spurthi has been an example in achieving huge feats with unparalleled figures ever since its inception. Spurthi has grown in stature in terms of its content and logistics. The overwhelming crowd and technological display along with a tinge of enjoyment has made our dream a technological extravaganza. The hospitality of the guests is of paramount importance. 
	  </p>
	  <p>We, at Spurthi, constantly strive towards the satisfaction of everyone. We shall leave no stone unturned in fulfilling the needs of a secure accommodation away from home. Along with accommodation facilities for our participants, we also set up food satisfying the needs of every palate. We strive to make your stay comfortable and your experience, a memorable one. Hospitality management would be one of the prime focuses of Team Spurthi' 18. 
		</p>
		<p>
		Hope to see you at Spurthi18. We will be more happy to receive your suggestions and queries. Kindly mail us at srkrspurthi18@gmail.com</p>
	   </div>
  </div>
</div>
<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>

      <p>For more queries,feel free to contact</p>
         <div class="w3-half">	       
		   <h3>Boys</h3>
      <p><i class="fa fa-user w3-text-teal w3-xlarge"></i> M.Uma Nagendra</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i> 9491437405</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>mekalaumanagendhra12@gmail.com</p>
	  </div>
	  <div class="w3-half">	        
		   <h3>Girls</h3> 
      <p><i class="fa fa-user w3-text-teal w3-xlarge"></i> N.Sruthi</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i> 8332024999</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  nsruthi56779@gmail.com</p>  
	  </div>

    </div>
  </div>
   
	  	<button class="w3-button w3-teal"><a href="hospitality.php"><b>Register</b></a></button>

</div>
</div>
</body>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</html>
<?php include'footer.php'; ?>
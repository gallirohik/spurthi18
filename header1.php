<!DOCTYPE html>
<html>

	<title> HOME | SPURTHI' 18 | SRKR </title
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link rel="stylesheet" type="text/css" href="css/hamburger.css">
<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="slideCss.css">
<link rel="stylesheet" type="text/css" href="menu.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
#slides{
  display:none;
}
#topup{

}
@media screen and (max-width: 480px) 
{
   #topup{
    opacity:1;

}
}
.temp{
  opacity:0;
}
</style>
</head>
<body>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card temp" id="topup">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hide-small"></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hide-small"></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hide-small"></a>
    
      <button class="w3-padding-large w3-button" onclick="document.getElementById('ticketModal').style.display='block'" title="More">ADMIN</button>     
     
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="index.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
  <a href="workshop.php" class="w3-bar-item w3-button w3-padding-large">WORKSHOP</a>
  <a href="team.php" class="w3-bar-item w3-button w3-padding-large">CONTACT</a>
</div>

  

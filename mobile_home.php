<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> HOME | SPURTHI' 18 | SRKR </title
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="slide.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link rel="stylesheet" type="text/css" href="css/hamburger.css">
<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="slideCss.css">
<link rel="stylesheet" media="screen" href="css/particlestyle.css">
<link rel="stylesheet" type="text/css" href="menu.css">
<link rel="stylesheet" type="text/css" href="counter_css.css">
<link rel="stylesheet" type="text/css" href="sideNav.css">
<link rel="stylesheet" href="css/flipclock.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <script src="flipclock.js"></script>

<script type="text/javascript" src="counter_js.js"></script>
<script type="text/javascript" src="sideNav1.js"></script>

<style>
.mySlides {display: none}
#slides{
  display:none;
}
#topup{

}
* {
  box-sizing: border-box;
}
.s_events {
  float:left;
  width:20%;
  text-align:center;
}
.menuitem {
  background-color:#e5e5e5;
  padding:8px;
  margin-top:7px;
}
.event_slides {
  float:left;
  width:60%;
  padding:0 20px;
}
.counter {
  float:left;
  width:20%;
  padding:15px;
  margin-top:7px;
  text-align:center;
}

@media only screen and (max-width:620px) {
  /* For mobile phones: */
  .s_events, .event_slides, .counter {
    width:100%;
  }

   #topup{
    opacity:1;
         }
  #counter{
    width:0px;
    display:none;
  }

  #logoDiv{
    display:none;
  }
  #slides{
  margin-left:10%;
  width:90%;
  }

  #menubar{
    width:100%;
    display:none;
  }
}
.temp{
  opacity:0;
}
#start{
  font-family:"lato",sans-serif;
}
.eText{
  width:100%;
  font-family:"lato",sans-serif;
  font-size: 100%;
  padding:4% 4% 4% 4%;
  margin-left:3%;
  background-color:rgba(41, 108, 120,0.0);
  border:0px;
  color:#000000;

}
.eText:hover{
  width:100%;
  color:white;
  font-family:"lato",sans-serif;
  font-size: 100%;
  padding:4% 4% 4% 4%;
  margin-left:3%;
  background-color:rgba(38, 142, 161,0.2);
  border:0px;

}
#slide_events
{
  width:100%;
  height:auto;
}
#menubar{

  width:10%;
  float:left;
}
  #slides
  {
  margin-left:15%;
  width:90%;
  }
</style>
</head>
<body style="font-family:Verdana;color:#aaaaaa;">

<!-- Navbar -->
<div id="particles-js"></div>
<div class="w3-top">
  <div class="w3-bar w3-black w3-card temp" id="topup">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>  
     
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>
<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="showEvents()">EVENTS</a>
  <a href="#tour" class="w3-bar-item w3-button w3-padding-large">WORKSHOP</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large">ATTRACTIONS</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">SPORTS</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large">HOSPITALITY</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">SPONSERS</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">CONTACT</a>
</div>
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">SPURTHI' 18</h2>
    <p class="w3-opacity w3-center"><i>Inspiring Always!</i></p>
  </div>

<div style="overflow:auto">
  <div class="s_events">
    <div class="menuitem">Link 1</div>
    <div class="menuitem">Link 2</div>
    <div class="menuitem">Link 3</div>
    <div class="menuitem">Link 4</div>
  </div>

  <div class="event_slides">
    <h2>Lorum Ipsum</h2>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
  </div>

  <div class="counter">
      <!-- counter-->
  <div id="counter">
  <h3 id="start">starts:</h3>
  <span id="days" class="bg"></span>
  <span id="hours" class="bg"></span>
  <span id="mins"class="bg"></span>
  <span id="sec"class="bg"></span>
  </div>
 <!--counter end-->
  </div>
</div>

<div style="background-color:#e5e5e5;text-align:center;padding:10px;margin-top:7px;">© copyright w3schools.com</div>

</body>
</html>

<head>
	<title> HOME | SPURTHI' 18 | SRKR </title
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="slide.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link rel="stylesheet" type="text/css" href="css/hamburger.css">
<link rel="stylesheet" href="style1.css">
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
  #counter{
    width:0px;
    display:none;
  }

  #logoDiv{
    display:none;
  }
  .aaa{
    width:100%;
  }
  .slides1{
   margin-left:0%;
  width:`100%;

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
.aaa{
  margin-left:20%;
  width:20%;
}
.slides1{
  margin-left:20%;
  width:58%;
  float:left;
}
</style>
</head>
<body>

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
  <!-- counter-->
  <div id="counter">
  <h3 id="start">starts:</h3>
  <span id="days" class="bg"></span>
  <span id="hours" class="bg"></span>
  <span id="mins"class="bg"></span>
  <span id="sec"class="bg"></span>
  </div>
 <!--counter end-->

<!-- start logo-->
        <div id="logoDiv">
        <span id="id1" onclick="showEvents()" class="ie1"><img src="images/events.png" height="100%" width="100%"></span>
        <a href="team.php"><span id="id3" class="ie3"><img src="images/contact.png" height="100%" width="100%"></span></a>
        <a href="hospitality1.php"><span id="id4" class="ie4"><img src="images/hospital2.png" height="100%" width="100%"></span></a>
        <a href="sboys.php"><span id="id5" class="ie5"><img src="images/sports.png" height="100%" width="100%"></span></a>
        <a href="VerticalShowcaseSlider/index.php"><span id="id6" class="ie6"><img src="images/attractions.png" height="100%" width="100%"></span></a>
        <a href="wShop2.html"><span id="id7" class="ie7"><img src="images/workshop.png" height="100%" width="100%"></span></a>
        <a href="sponsor.php"><span id="id8" class="ie8"><img src="images/sponsors1.png" height="100%" width="100%"></span></a>
         <span id="abc"  class="abcd" onmouseover="showMenu()"><img src="images1/logo1.png" width="100%" height="100%"></span>
        </div>

 <!-- end of logo-->
 <!-- side Nav-->
 <div id="slide_events">
              <div class="aaa">
                                 <div id="sideEvent" class="sdEvent">
                                   <span id="menuBar" onclick="openEvent()">show all Events</span>
                                  <a href="javascript:void(0)" class="closebtn" onclick="closeEvent()">&times;</a>
                                  
                                  <button class="eText" onclick="sEvent(1)">ABHIVYANJAN</button><br>
                                  <button class="eText" onclick="sEvent(2)">PAPYROUS</button><br>
                                  <button class="eText" onclick="sEvent(3)">WEBWEAVER</button><br>
                                  <button class="eText" onclick="sEvent(6)">TYPERUSH</button><br>
                                  <button class="eText" onclick="sEvent(5)">BRAIN BUSTER</button><br>
                                  <button class="eText" onclick="sEvent(7)">CLASH OF COMPEERS</button><br>
                                  <button class="eText" onclick="sEvent(8)">EDIT</button><br>
                                  <button class="eText" onclick="sEvent(4)">CODE STORM</button><br>
                                  
                                 
                                </div>
                                 
            </div>
 <!-- end sideNav-->
<!--slides-->
            <div id="slides" class="w3-content w3-display-container slides1">
              <a href="abhivyanjan.php"><img class="mySlides" src="images/abiv.png" style="width:100%; height: 56%;"></a>
              <a href="papyrous.php"><img class="mySlides" src="images/papyrous.png" style="width:100%;height:56%;"></a>
              <a href="webweaver.php"><img class="mySlides" src="images/webweaver.png" style="width:100%; height: 56%;"></a>
              <a href="codestorm.php"><img class="mySlides" src="images/codestorm.png" style="width:100%;height:56%;"></a>
              <a href="brainbuster.php"><img class="mySlides" src="images/buster.png" style="width:100%; height: 56%;"></a>
              <a href="typerush.php"><img class="mySlides" src="images/typerush.png" style="width:100%;height:56%;"></a>
              <a href="clashofcompeers.php"><img class="mySlides" src="images/clash.png" style="width:100%; height: 56%;"></a>
              <a href="edit.php"><img class="mySlides" src="images/edit.png" style="width:100%;height:56%;"></a>
              

              <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
              <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
            </div>
</div>

<!--slides ended-->

<!-- logo-->

<script type="text/javascript">
  var click=1;
  function showMenu()
  {

  
    
       if(click==1)
       {
     
       document.getElementById("id1").classList.add("ic1");
       document.getElementById("id3").classList.add("ic3");
       document.getElementById("id4").classList.add("ic4");
       document.getElementById("id5").classList.add("ic5");
       document.getElementById("id6").classList.add("ic6");
       document.getElementById("id7").classList.add("ic7");
       document.getElementById("id8").classList.add("ic8");
      // click=0;
      
        }
        else if(click == 0){
          document.getElementById("abc").classList.toggle("abcdef");
       document.getElementById("abc").classList.add("abcde");
        document.getElementById("slides").style.display="none";

       click=1;
       setTimeout(showEvents2,1000);

        }


  
    
     //setTimeout(showBlue,1000);

  }
  function showEvents()
  {
     document.getElementById("id1").classList.toggle("ic1");
    document.getElementById("id3").classList.toggle("ic3");
    document.getElementById("id4").classList.toggle("ic4");
    document.getElementById("id5").classList.toggle("ic5");
    document.getElementById("id6").classList.toggle("ic6");
    document.getElementById("id7").classList.toggle("ic7");
    document.getElementById("id8").classList.toggle("ic8");
     document.getElementById("abc").classList.toggle("abcd");
       document.getElementById("abc").classList.add("abcde");
       
       
       setTimeout(showEvents1,1000);
       click=2;
      setTimeout(go,3000);

      document.getElementById("menuBar").style.display="block";
  }
  function go()
  {
    click=0;
  }
  function showEvents1()
  {
     document.getElementById("abc").classList.add("abcdef");
     setTimeout(showPpt,1000);
  }
  function showPpt()
  {
    document.getElementById("slides").style.display="block";
  }
  function showEvents2()
  {
    document.getElementById("abc").classList.toggle("abcde");
     document.getElementById("abc").classList.add("abcd");
      document.getElementById("menuBar").style.display="none";
  }
</script>


<!-- logo end-->





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

<!-- slides js-->
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}
function sEvent(n)
{
  slideIndex=n;
  showDivs(n);
}
function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
<!-- slide js ended-->
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
</div>
</div>
</div> 

<!--particle script-->
<script src="particles.js"></script>
<script src="js/app.js"></script> 
<script>
// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
  </script>
<?php include 'footer.php';?>

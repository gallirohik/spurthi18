
<!DOCTYPE html>
<html>
<title>Sports and Games</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
html,body{
	height:100%;
}
	#button{
		width: 6em;
		background: #008080;
		border-radius: 5px;
		float: right;
		padding: 5px;
	}
	#area{
     	height:60%; 
     	width:80%;
		margin-height:10%;
     	margin-left:7%;
		margin-bottom:1%;
     	overflow:scroll;
		background-color: #000000;

     }
	a{
		display: block;
		color: #fff;
		width: 100%;
		line-height: 2em;
		text-align: center;
		text-decoration: none;
		border-radius: 5px;
	}
	a:hover{
		color: #fff;
		background: ;
	}
	.topc{
		background-color: #dddddd;

	}
	.imag{
		background-color: #efefef;
		border: 1px solid #000;
		border-radius: 10px;
		width: 100%;
		height: 100%;
	}
	.imagblock{
		border-radius: 10px;
		padding: 5px;
		width: 100%;
		height: 100%;
	}
</style>
<!--particle script-->
<script src="particles.js"></script>
<script src="js/app.js"></script>
<body  class="font1">

<div class="w3-container" id="particles-js" >

  <div>
  	<h1 style="float: left;">Sports & Games</h1>
  	<br>
  	  	<p style="float: right;">&nbsp;&nbsp;&nbsp;&nbsp;</p>
  	<div id="button"><a href="index.php"><b>Home</b></a></div>
  	<p style="float: right;">&nbsp;&nbsp;&nbsp;&nbsp;</p>
  	<div id="button"><a href="sgirls.php"><b>Girls</b></a></div>
  	<p style="float: right;"></p>
  	<div id="button"><a href="sboys.php#Cricket"><b>Boys</b></a></div>
  </div>
<div class="w3-container">
  <div class="w3-bar w3-black" >
  <a href="#Cricket" onclick="show('Cricket')" class="w3-bar-item w3-button w3-hide-small w3-teal" style="width:16.6%">Cricket</a>
  <a href="#Badminton" onclick="show('Badminton')" class="w3-bar-item w3-button w3-hide-small w3-teal" style="width:16.6%">Badminton</a>
  <a href="#Volleyball" onclick="show('Volleyball')" class="w3-bar-item w3-button w3-hide-small w3-teal" style="width:16.6%">Volleyball</a>
  <a href="#Basketball" onclick="show('Basketball')" class="w3-bar-item w3-button w3-hide-small w3-teal" style="width:16.6%">Basketball</a>
  <a href="#Carroms" onclick="show('Carroms')" class="w3-bar-item w3-button w3-hide-small w3-teal" style="width:16.6%">Carroms</a>
  <a href="#Chess" onclick="show('Chess')" class="w3-bar-item w3-button w3-hide-small w3-teal" style="width:17%">Chess</a>
  </div>
</div>
<div class="w3-row-padding">
		<div style="background-color: #000000;">
		<h3>Contact us :</h3>
		<!--<p>&nbsp;&nbsp;&nbsp;&nbsp; for registrations and any other details please contact</p>-->
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pavan Kalyan:7893027226</p>
	</div><br>
</div>	
<!--sports description-->
<div id="area"class="w3-container">
	<div class="w3-row-padding " id="Cricket">
		<div class="w3-third">
		  	<h3 class="w3-border-teal w3-bottombar">Cricket:(30 yards)</h3><br>
			<p>Time:2:00pm</p>
			<p>Venue:srkr college grounds </p>
			<p>Entry fee:700/-(7 per team)</p>
			<br>
		</div>
		<div class="w3-third"><br>
		  	<div class="imag">
		  		<a href="images/fulls/03.jpg"><img class="imagblock" src="images/thumbs/03.jpg" alt="" title="Cricket" /></a>
		  	</div>
		</div>
		<div class="w3-third">
		   <h3>Rules</h3>
			<p>-->	30 yards</p>
			<p>-->	Knock out matches.</p>
			<p>-->	Guru double tennis ball.</p>
			<p>-->	Each team contains 7 players only.</p>
			<p>-->	Prelims : 4 overs.</p>
			<p>-->	Semis: 5 overs.</p>
			<p>-->	Finals :6 overs.</p>
		</div>
	</div>
	<div class="w3-row-padding" id="Badminton">
		<div class="w3-third">
		  	<h3 class="w3-border-teal w3-bottombar">Badminton</h3>
			<br>
			<p>Time:4:00pm</p>
			<p>Venue:badminton indoor </p>
			<p>Entry fee:100/-for singles. 200/- for doubles.</p>
			<br>
		</div>
		<div class="w3-third"><br>
		  	<div class="imag">
		  		<a href="images/fulls/04.jpg"><img class="imagblock" src="images/thumbs/04.jpg" alt="" title="Badminton" /></a>
		  	</div>
		</div>
		<div class="w3-third">
		    <h3>Rules</h3>
			<p>-->	T-shirt , track , shoes,college id cards are compulsory.</p>
			<p>-->	shuttle - yonex mavis 350 (plastic cock,I.e. not feather cock)</p>
			<p>-->	Singles and doubles</p>
			<p>-->	Prelims for 15 points (tennis points )</p>
			<p>-->	Quarters & semis for 21 points (tennis points)</p>
			<p>-->	Finals 3 sets (each 21 points)</p>
		</div>
	</div>
	
	<div class="w3-row-padding"id="Volleyball">
		<div class="w3-third">
		  	<h3 class="w3-border-teal w3-bottombar">Volleyball</h3>
		  	<br>
			<p>Time:3:30 pm</p>
			<p>Venue:srkr college grounds (volley ball court)</p>
			<p>Entry fee:600/-(6 per team)</p>  
			<br>
		</div>
		<div class="w3-third"><br>
		  	<div class="imag">
		  		<a href="images/fulls/02.jpg"><img class="imagblock" src="images/thumbs/02.jpg" alt="" title="Volleyball" /></a>
		  	</div>
		</div>
		<div class="w3-third">
		    <h3>Rules</h3>
			<p>-->	General volley ball rules.</p>
			<p>-->  Tennis Score</p>
			<p>-->	Prelims:game of 3 sets each for 15 points</p>
			<p>-->	Semis & finals:game of 3 sets (2 for 25 points and last set for 15 points).</p>
		</div>
	</div>
	
	<div class="w3-row-padding"id="Basketball">
		<div class="w3-third">
		  	<h3 class="w3-border-teal w3-bottombar">Basketball</h3>
		  	<br>
			<p>Time:4:00 pm</p>
			<p>Venue:basket ball court</p>
			<p>Entry fee:800/-(8 per team)</p>
			<br>
		</div>
		<div class="w3-third"><br>
		  	<div class="imag">
		  		<a href="images/fulls/01.jpg"><img class="imagblock" src="images/thumbs/01.jpg" alt="" title="Basketball" /></a>
		  	</div>
		</div>
		<div class="w3-third">
		    <h3>Rules</h3>
			<p>-->	General basket ball rules</p>
		</div>
	</div>
	
	<!--<div class="w3-row-padding">
		<div class="w3-third">
		  	<h3>Tug of war</h3>
		  	<br>
		  	<p>Time:4:00 pm</p>
			<p>Venue:Kabaddi Court</p>
			<p>Entry fee:500/-(100/- per each)</p>
			<br>
		</div>
		<div class="w3-third"><br>
		  	<div class="imag">
		  		<a href="images/fulls/05.jpg"><img class="imagblock" src="images/thumbs/05.jpg" alt="" title="Tug of war" /></a>
		  	</div>
		</div>
		<div class="w3-third">
		  	<h3>Rules</h3>
		</div>
	</div>
	-->
	<div class="w3-row-padding" id="Carroms">
		<div class="w3-third">
		  	<h3 class="w3-border-teal w3-bottombar">Carroms</h3>
		  	<br>
			<p>Time:4:00pm</p>
			<p>Venue:gym</p>
			<p>Entry fee:50/-</p>
			<br>
		</div>
		<div class="w3-third"><br>
		  	<div class="imag">
		  		<a href="images/fulls/06.jpg"><img class="imagblock" src="images/thumbs/06.jpg" alt="" title="Carroms" /></a>
		  	</div>
		</div>
		<div class="w3-third">
		    <h3>Rules</h3>
			<p>-->	Prelims:Only single board(game) , winner will move to further rounds.</p>
			<p>-->	Finals:game for 18 points.</p>
		</div>
	</div>
	
	<div class="w3-row-padding" id="Chess">
		<div class="w3-third">
		  	<h3 class="w3-border-teal w3-bottombar">Chess</h3>
		  	<br><br>
			<p>Time:4:00pm</p>
			<p>Venue:gym</p>
			<p>Entry fee:50/-</p>
			<br>
		</div>
		<div class="w3-third"><br>
		  	<div class="imag">
		  		<a href="images/fulls/07.jpg"><img class="imagblock" src="images/thumbs/07.jpg" alt="" title="Chess" /></a>
		  	</div>
		</div>
	  <div class="w3-third"> 
	    <h3>Rules</h3>
		<p>-->	Timer is used to decide winners.</p> 
	  </div>
	</div>
	</div></div></div>
	
<script>
function myFunction() {
    var x = document.getElementById("demo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
<script>
function show(iden)
{
	        document.getElementById("Carroms").style.display="none";
			document.getElementById("Cricket").style.display="none";
			document.getElementById("Badminton").style.display="none";
			document.getElementById("Basketball").style.display="none";
			document.getElementById("Volleyball").style.display="none";
			document.getElementById("Chess").style.display="none";
	var x = document.getElementById(iden);
	x.style.display = 'block';
}
@media screen and (max-width:450px)
{
	#demo{display:none}
}
</script>
</div></div>
</div></div>
</div></div>
</div></div>
</body></body>

</html>
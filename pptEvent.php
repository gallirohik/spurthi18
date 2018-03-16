<?php include 'eventData.php';

?>
    
<html>
 <?php
 $img="";
  $I1="";
  $I2="";
  $R="";

session_start();
if(!strcmp($_SESSION['event'],"abhivyanjan"))
{
  $img="images/abiv.png";
  $I1=$aIntro1;
  $I2=$aIntro2;
  $R=$arules;
}
elseif (!strcmp($_SESSION['event'],"papyrous")) 
{
  $img="images/papyrous.png";
  $I1=$pIntro1;
  $I2=$pIntro2;
  $R=$prules;
}
elseif (!strcmp($_SESSION['event'],"techyuva")) 
{
  $img="images/tech.png";
  $I1=$tIntro1;
$I2=$tIntro2;
$R=$trules;
}
elseif (!strcmp($_SESSION['event'],"codestorm")) 
{
  $img="images/codestorm.png";
 
}

elseif (!strcmp($_SESSION['event'],"webweaver")) 
{
  $img="images/webweaver.png";
    $I1=$wIntro1;
$I2=$wIntro2;
$R=$wrules;

}
elseif (!strcmp($_SESSION['event'],"clashofcompeers")) 
{
  $img="images/clash.png";
     $I1=$cIntro1;
$I2=$cIntro2;
$R=$crules;
}
elseif (!strcmp($_SESSION['event'],"typerush")) 
{
  $img="images/typerush.png";
}
elseif (!strcmp($_SESSION['event'],"edit")) 
{
  $img="images/edit.png";
}
elseif (!strcmp($_SESSION['event'],"brainbuster")) 
{
  $img="images/buster.png";
     $I1=$brIntro1;
$I2=$brIntro2;
$R=$brrules;
}

?> 
 <style>


 button {
    background-color: white;
    color: #6C7A89;
    padding: 14px 20px;
    margin: 8px 0px;
    border: 1;
    border-color: #6C7A89;
    cursor: pointer;
    width: 20%;
}
button, #now{
  margin:8px 0px 0px 150px;
}
button:hover {
    background-color: #00bfff;
    border-color: #00bfff;
    color: white;
    opacity: 0.8;
}
p
{
  color: black;
}
/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: white;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color:white;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 50%; /* Could be more or less, depending on screen size */
}


/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
        #image
        {
          background-image:url(<?php echo $img?>);
          background-size:contain;
          background-repeat: no-repeat;
          width:100%;
          height:auto;
          background-attachment:fixed;

         }  
	#bdy{
		margin-top:0px;
		background-color:#0B6D7A;
		height:auto;
		width:100%;
	}   
	#rButton{
		      margin-top:32%;
              margin-left:80%;
             background-color:rgba(34, 37, 38,0 );
             color: white;
             padding: 1% 2%;
             border-radius:20px;
            cursor: pointer;
            width: 15%;
            border-color:white;
            font-size:2vw;
            font-family:Comic Sans MS;
            font-weight:bold;
	        }
	#rButton:hover{
		      margin-top:32%;
              margin-left:80%;
             background-color:rgba(245, 244, 237,0.5);
             color:black;
             padding: 1% 2%;
             border-radius:20px;
            cursor: pointer;
            width: 15%;
            border-color:rgba(245, 244, 237,0.1);
           font-size:2vw;
            font-family:Comic Sans MS;
            font-weight:bold;
	        }
	        i{
	        	margin-left:5px;
	        	opacity:0.5;
	        }

  
  #container{
  	width:100%;
  	transition:2s;
  	
  }
  .container1{
  	margin-left:30%;
  
  }
   #Register
   {
      width:0%;
      height:auto;
     margin-left:0px;
     height:auto;
   
     float: left;
     transition:2s;
    background-color:black;
    border-top-left-radius:15px;
    border-bottom-left-radius:15px;  
     opacity:0;

      
   }  
   #wrap{
   	width:100%;
   	height:auto;
   }   

/*----register form----> small screens*/
@media screen and (max-width:450px)
{
input[type=text]{
    width:80%;
    background-color:rgba(2, 2, 2,0.1);
    border-bottom:1px solid white;
    border-top-color:black;
    border-left-color:black;
    border-right-color:black;
    margin-left:10%;
    padding:0px 0px 0px 20px;
      caret-color:white;
      caret-height:22pt;
      color:white;

}
input[type=text]:focus{
    width:80%;
    background-color:rgba(2, 2, 2,0.1);
    border-bottom:1px solid white;
    border-top-color:black;
    border-left-color:black;
    border-right-color:black;
    border-bottom-color:black;
    margin-left:10%;
    padding:0px 0px 0px 20px;
    color:white;
   

}
input,input::-webkit-input-placeholder{
	font-size:100%;
}
label{
	     margin-left:5%;
	  font-size:4vw;
	     color:white;

     }
textarea:focus,input:focus{
	outline: none;
}
/* <-- radio button-->*/
.gender {
    display: block;
    position: relative;
    padding-left:5%;
    margin-bottom: 12px;
    cursor: pointer;
    font-size:4vw;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    margin-left:15%;
}

/* Hide the browser's default radio button */
.gender input {
    position: absolute;
    opacity: 0;
}

/* Create a custom radio button */
.checkmark {
    position: absolute;
    top:8%;
    left: 0;
    height: 13px;
    width: 13px;
    background-color:#ccc;
    border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.gender:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.gender input:checked ~ .checkmark {
    background-color:rgb(154, 164, 162);
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.gender input:checked ~ .checkmark:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.gender .checkmark:after {
 	top: 3px;
	left: 3px;
	width: 7px;
	height: 7px;
	border-radius: 50%;
	background:black;
}
.gender{
color:rgb(135, 164, 157);
}
#gender{
	margin-left:10%;
	font-size:4vw;
}
/*<!end radio--->*/
.nme{
  font-size:4vw;
  color:white;
  bottom:0;
  margin-left:10%;
  color:rgb(212, 223, 220);
}
/*select box*/
.styled-select {
   background:;
   height:25%;
   overflow: hidden;
   width: 80%;
   margin-left:15%;
}

.styled-select select {
   background:rgb(76, 86, 83);
   border: none;
   border-radius:20px;
   font-size:4vw;
   height: 15%;
   padding: 3%; /* If you add too much padding here, the options won't show in IE */
   width: 80%;
   color:black;
}

.styled-select.slate {
   background:;
   height: 15%;
   width: 80%;
}

.styled-select.slate select {
   border: 1px solid #ccc;
   border-radius:20px;
   font-size: 16px;
   height: 15%;
   width: 80%;
   outline:none;
}
#year{
  width:40%;
}
/*select box*/
/* The Event */
.event {
    display: block;
    position: relative;
    padding-left:10%;
    margin-bottom: 12px;
    cursor: pointer;
    font-size:4vw;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    margin-left: 15%;

}

/* Hide the browser's default checkbox */
.event input {
    position: absolute;
    opacity: 0;
}

/* Create a custom checkbox */
.checkmark1 {
    position: absolute;
    top:2%;
    left: 0;
    height: 25px;
    width: 25px;
    border-radius:50%;
    background-color: #eee;
}

/* On mouse-over, add a grey background color */
.event:hover input ~ .checkmark1 {
    background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.event input:checked ~ .checkmark1 {
    background-color:rgb(68, 227, 83);
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark1:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.event input:checked ~ .checkmark1:after {
    display: block;
}

/* Style the checkmark/indicator */
.event .checkmark1:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}

/*event end*/

#eSub{
  width:30%;
  background-color:rgb(196, 209, 197);
  color:black;
  padding:10px 10px 10px 10px;
  border-radius:50%;
  margin-left:65%;
  cursor:pointer;
  font-size:4vw;
            font-family:Comic Sans MS;
            font-weight:bold;
}
#eSub:hover{
  cursor:pointer;
  width:28%;
  background-color:rgb(196,209, 197);
  color:black;
  padding:10px 10px 10px 10px;
  border-radius:50%;
  margin-left:65%;
  font-size:4vw;
            font-family:Comic Sans MS;
            font-weight:bold;
}
#clImg{
  margin-top:5%;
  margin-left:85%;
}
#clImg:hover{
  margin-top:5%;
  margin-left:85%;
  cursor:pointer;
}
#total{
  width:100%;
  margin-left:0%;
}
}
/*  end small screens*/
input[type=text]{
    width:80%;
    background-color:rgba(2, 2, 2,0.1);
    border-bottom:1px solid white;
    border-top-color:black;
    border-left-color:black;
    border-right-color:black;
    margin-left:10%;
    padding:0px 0px 0px 20px;
      caret-color:white;
      caret-height:22pt;
      color:white;

}
input[type=text]:focus{
    width:80%;
    background-color:rgba(2, 2, 2,0.1);
    border-bottom:1px solid white;
    border-top-color:black;
    border-left-color:black;
    border-right-color:black;
    border-bottom-color:black;
    margin-left:10%;
    padding:0px 0px 0px 20px;
    color:white;
   

}
input,input::-webkit-input-placeholder{
  font-size:100%;
}
label{
       margin-left:5%;
    font-size:2vw;
       color:white;

     }
textarea:focus,input:focus{
  outline: none;
}
/* <-- radio button-->*/
.gender {
    display: block;
    position: relative;
    padding-left:5%;
    margin-bottom: 12px;
    cursor: pointer;
    font-size:2vw;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    margin-left:15%;
}

/* Hide the browser's default radio button */
.gender input {
    position: absolute;
    opacity: 0;
}

/* Create a custom radio button */
.checkmark {
    position: absolute;
    top:8%;
    left: 0;
    height: 13px;
    width: 13px;
    background-color:#ccc;
    border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.gender:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.gender input:checked ~ .checkmark {
    background-color:rgb(154, 164, 162);
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.gender input:checked ~ .checkmark:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.gender .checkmark:after {
  top: 3px;
  left: 3px;
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background:black;
}
.gender{
color:rgb(135, 164, 157);
}
#gender{
  margin-left:10%;
  font-size:2vw;
}
/*<!end radio--->*/
.nme{
  font-size:2vw;
  color:white;
  bottom:0;
  margin-left:10%;
  color:rgb(212, 223, 220);
}
/*select box*/
.styled-select {
   background:;
   height:25%;
   overflow: hidden;
   width: 80%;
   margin-left:15%;
}

.styled-select select {
   background:rgb(76, 86, 83);
   border: none;
   border-radius:20px;
   font-size:2vw;
   height: 15%;
   padding: 3%; /* If you add too much padding here, the options won't show in IE */
   width: 80%;
   color:black;
}

.styled-select.slate {
   background:;
   height: 15%;
   width: 80%;
}

.styled-select.slate select {
   border: 1px solid #ccc;
   border-radius:20px;
   font-size: 16px;
   height: 15%;
   width: 80%;
   outline:none;
}
#year{
  width:40%;
}
/*select box*/
/* The Event */
.event {
    display: block;
    position: relative;
    padding-left:10%;
    margin-bottom: 12px;
    cursor: pointer;
    font-size:2vw;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    margin-left: 15%;

}

/* Hide the browser's default checkbox */
.event input {
    position: absolute;
    opacity: 0;
}

/* Create a custom checkbox */
.checkmark1 {
    position: absolute;
    top:2%;
    left: 0;
    height: 25px;
    width: 25px;
    border-radius:50%;
    background-color: #eee;
}

/* On mouse-over, add a grey background color */
.event:hover input ~ .checkmark1 {
    background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.event input:checked ~ .checkmark1 {
    background-color:rgb(68, 227, 83);
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark1:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.event input:checked ~ .checkmark1:after {
    display: block;
}

/* Style the checkmark/indicator */
.event .checkmark1:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}

/*event end*/

#eSub{
  width:30%;
  background-color:rgb(196, 209, 197);
  color:black;
  padding:10px 10px 10px 10px;
  border-radius:50%;
  margin-left:65%;
  cursor:pointer;
  font-size:2vw;
            font-family:Comic Sans MS;
            font-weight:bold;
}
#eSub:hover{
  cursor:pointer;
  width:28%;
  background-color:rgb(196,209, 197);
  color:black;
  padding:10px 10px 10px 10px;
  border-radius:50%;
  margin-left:65%;
  font-size:2vw;
            font-family:Comic Sans MS;
            font-weight:bold;
}
#clImg{
  margin-top:5%;
  margin-left:85%;
}
#clImg:hover{
  margin-top:5%;
  margin-left:85%;
  cursor:pointer;
}
#total{
  width:100%;
  margin-left:0%;
}
/*-----endRegister---->*/

.view
{  
    height:5%;
    width:20%;
    padding:2px 2px 2px 2px;
    background-color:orange;
    border-radius:5px;
    display:none;
    margin-left:35%;
    text-align:center;
    cursor:pointer;
}
a{
  text-decoration:none;
}
.intro1{
 font-size:3vw;
  color:#E4A9AD;
  font-family: "Comic Sans MS", cursive, sans-serif;
  justify-content:left;
  margin-left:2%;
}
#eve{
 font-size:3vw;
  color:white;
}
.intro2{
  margin-left:15%;
  width:60%;
  margin-top:2%;
   font-size:3vw;
  color:#B6D1E8;
  font-family: "Comic Sans MS", cursive, sans-serif;
}
@font-face {
font-family:Euphoria Script;
src: url(/.otf);
}
#rules{
  font-family:"lato", sans-serif;
  color:#E49EC1;

}
#rules1
{
margin-left:20%;

}
#rules2{
  color:#E6E0E7;
 font-family:"lato", sans-serif;
 font-size:3vw;
}
</style>
<script type="text/javascript">
	function showRegister()
	{

		document.getElementById('container').classList.add("container1");
		document.getElementById('container').style.width="70%";
        document.getElementById('rButton').style.opacity="0";
        document.getElementById('rButton').style.cursor="initial";
         document.getElementById("Register").style.opacity=1;
         
        
        //setTimeout(disNone,3000);
        //alert(window.matchMedia('screen and (max-width:450px)').matches);

  if(window.screen.availWidth<450)
  {
    document.getElementById("Register").style.width="100%";
  }
  else
  {
    document.getElementById("Register").style.width="30%";
  }
       
	}
	function disNone()
	{
		document.getElementById('container').style.display="none";
	}
  function closeReg()
  {
    document.getElementById('container').classList.toggle("container1");
    document.getElementById('container').style.width="100%";
        document.getElementById('rButton').style.opacity="1";
         document.getElementById("Register").style.opacity=0;
        document.getElementById("Register").style.width="0%";
  }
   function oneE()
   {
    document.getElementById('one').style.display="block";

   }
    function twoE()
   {
    document.getElementById('two').style.display="block";

   }
    function threeE()
   {
    document.getElementById('three').style.display="block";
  
   }
   function fourE()
   {
    document.getElementById('four').style.display="block";
  
   }
   function fiveE()
   {
    document.getElementById('five').style.display="block";
    
   }
   function sixE()
   {
    document.getElementById('six').style.display="block";

   }
   function sevenE()
   {
    document.getElementById('seven').style.display="block";
   }
   function eightE()
   {
    document.getElementById('eight').style.display="block";
  
   }
   function nineE()
   {
    document.getElementById('nine').style.display="block";
  
   }
   function tenE()
   {
    document.getElementById('ten').style.display="block";
    
   }
   function elevenE()
   {
    document.getElementById('eleven').style.display="block";
    
   }
   function twelveE()
   {
    document.getElementById('twelve').style.display="block";
    
   }
   function thirteenE()
   {
    document.getElementById('thirteen').style.display="block";
  
   }
   function fourteenE()
   {
    document.getElementById('fourteen').style.display="block";
  
   }
   
  /*function view(e)
  {   
      if(e==1)
      document.getElementById('image').style.backgroundImage = "url('images/codestorm.png')";
      else if(e==2)
      document.getElementById('image').style.backgroundImage = "url('images/tech.png')";
      else if(e==3)
      document.getElementById('image').style.backgroundImage = "url('images/papyrous.png')";
    else if(e==4)
      document.getElementById('image').style.backgroundImage = "url('images/abiv.png')";
    else if(e==5)
      document.getElementById('image').style.backgroundImage = "url('images/webweaver.png')";
    else if(e==6)
      document.getElementById('image').style.backgroundImage = "url('images/clash.png')";
    else if(e==7)
      document.getElementById('image').style.backgroundImage = "url('images/typerush.png')";
    else if(e==8)
      document.getElementById('image').style.backgroundImage = "url('images/edit.png')";
    else if(e==9)
      document.getElementById('image').style.backgroundImage = "url('images/buster.png')";
    else if(e==10)
      document.getElementById('image').style.backgroundImage = "url('images/virtual.png')";
    else if(e==11)
      document.getElementById('image').style.backgroundImage = "url('images/baffele.png')";
    else if(e==12)
      document.getElementById('image').style.backgroundImage = "url('images/inquisters.png')";
    else if(e==13)
      document.getElementById('image').style.backgroundImage = "url('images/gamedome.png')";
    else if(e==14)
      document.getElementById('image').style.backgroundImage = "url('images/cricbet.png')";
  }
  */
   function closeOne()
   {
    document.getElementById('one').style.display="none";
   }
    function closeTwo()
   {
    document.getElementById('two').style.display="none";
   }
    function closeThree()
   {
    document.getElementById('three').style.display="none";
   }
   function closeFour()
   {
    document.getElementById('four').style.display="none";
   }
   function closeFive()
   {
    document.getElementById('five').style.display="none";
   }
   function closeSix()
   {
    document.getElementById('six').style.display="none";
   }
   function closeSeven()
   {
    document.getElementById('seven').style.display="none";
   }
   function closeEight()
   {
    document.getElementById('eight').style.display="none";
   }
   function closeNine()
   {
    document.getElementById('nine').style.display="none";
   }
   function closeTen()
   {
    document.getElementById('ten').style.display="none";
   }
   function closeEleven()
   {
    document.getElementById('eleven').style.display="none";
   }
   function closeTwelve()
   {
    document.getElementById('twelve').style.display="none";
   }
   function closeThirteen()
   {
    document.getElementById('thirteen').style.display="none";
   }
   function closeFourteen()
   {
    document.getElementById('fourteen').style.display="none";
   }
</script>
<body>

<div id="mod1" class="modal">
  
  <form class="modal-content animate" action="home.php" method="POST">

    <div class="container">
      <p>Succesfully Registered for Events.</p>
        
      <a href="home.php"><button type="button" name="submitbut">HOME</button></a>
    </div>
  </form>
</div>


  <div id="total"><!-- total wrap-->
	<div id="wrap">
	<div id="Register" class="register">
		   <img id="clImg" src="images1/close1.png" width="10%" height="10%" onclick="closeReg()">
  <form action="#" method="POST">
  	
  	<br>
  	<label>Register here :</label><br><br>
    <label class="nme">College Id ( Registration No )</label><br>
      <input type="text" name="collegeid" required>
        <br><br><br>
    <label class="nme">Your Name ( as to be printed Certificate ):</label><br>
      <input type="text" name="fname"  autofocus required>
      <br><br>
      
      <label id="gender" class="nme">Gender:</label><br><br>
       <label class="gender">Male
  <input type="radio" checked name="gender">
  <span class="checkmark"></span>
</label>
<label class="gender">Female
  <input type="radio" name="gender">
  <span class="checkmark"></span>
</label>
      <label class="nme">Your Mobile Number:</label><br>
      <input type="text" name="mobile" required>
      <br><br>
       <label class="nme">Your Email Id:</label><br>
      <input type="text" name="email" required>
      <br><br>
      <label class="nme">Your college:</label><br><br>
<div class="styled-select slate">
  <select name="college" required>
    <option>SRKR Engineering college,bhimavaram</option>
    <option>The second option</option>
    <option>The third option</option>
  </select>
</div><br>
 <label class="nme">Select year:</label>
<br><br>
<div id="year" class="styled-select slate">
  <select name="year" required>
    <option>1st Year</option>
    <option>2nd Year</option>
    <option>3rd Year</option>
    <option>4th Year</option>
  </select>
</div>
<br>
<label class="nme" required>You want to register for:</label>
<br><br>
<label class="event" onmouseover="oneE()" onmouseout="closeOne()">CODE STORM
  <input type="checkbox" checked="checked" name="events[]" value="codestorm">
  <span class="checkmark1"></span>
  <a href="codestorm.php" ><span class="view" id="one" onclick="view()">view</span></a>
</label>
<label class="event"  onmouseover="twoE()" onmouseout="closeTwo()">TECHYUVA
  <input type="checkbox"  name="events[]" value="techyuva">
  <span class="checkmark1"></span>
  <a href="#image" ><span class="view" id="two" onclick="view()">view</span></a>
</label>
<label class="event" onmouseover="threeE()" onmouseout="closeThree()">PAPYROUS
  <input type="checkbox" name="events[]" value="papyrous">
  <span class="checkmark1"></span>
  <a href="papyrous.php" ><span class="view" id="three" onclick="view()">view</span></a>
</label>
<label class="event" onmouseover="fourE()" onmouseout="closeFour()">ABHIVYANJAN
  <input type="checkbox" name="events[]" value="abhivyanjan">
  <span class="checkmark1"></span>
  <a href="abhivyanjan.php" ><span class="view" id="four" onclick="view()">view</span></a>
</label>
<label class="event" onmouseover="fiveE()" onmouseout="closeFive()">WEB WEAVER
  <input type="checkbox" name="events[]" value="webweaver">
  <span class="checkmark1"></span>
  <a href="webweaver.php" ><span class="view" id="five" onclick="view()">view</span></a>
</label>
<label class="event"  onmouseover="sixE()" onmouseout="closeSix()">CLASH OF COMPEERS
  <input type="checkbox" name="events[]" value="clashofcompeers">
  <span class="checkmark1"></span>
  <a href="clashofcompeers.php" ><span class="view" id="six" onclick="view()">view</span></a>
</label>
<label class="event" onmouseover="sevenE()" onmouseout="closeSeven()">TYPE RUSH
  <input type="checkbox" name="events[]" value="typerush">
  <span class="checkmark1"></span>
  <a href="typerush.php" ><span class="view" id="seven" onclick="view()">view</span></a>
</label>
<label class="event" onmouseover="eightE()" onmouseout="closeEight()">edIT
  <input type="checkbox" name="events[]" value="edit">
  <span class="checkmark1"></span>
  <a href="edit.php" ><span class="view" id="eight" onclick="view()">view</span></a>
</label>
<label class="event" onmouseover="nineE()" onmouseout="closeNine()">BRAIN BUSTER
  <input type="checkbox" name="events[]" value="brainbuster">
  <span class="checkmark1"></span>
  <a href="brainbuster.php" ><span class="view" id="nine" onclick="view()">view</span></a>
</label>
<label class="event" onmouseover="tenE()" onmouseout="closeTen()">VIRTUAL BOUNTY
  <input type="checkbox" name="events[]" value="virtualbounty">
  <span class="checkmark1"></span>
  <a href="" ><span class="view" id="ten" onclick="view()">view</span></a>
</label>
<label class="event" onmouseover="elevenE()" onmouseout="closeEleven()">BAFFLE FIELD
  <input type="checkbox" name="events[]" value="bafflefield">
  <span class="checkmark1"></span>
  <a href="#image" ><span class="view" id="eleven" onclick="view()">view</span></a>
</label>
<label class="event" onmouseover="twelveE()" onmouseout="closeTwelve()">THE INQUISITORS
  <input type="checkbox" name="events[]" value="theinquisitors">
  <span class="checkmark1"></span>
  <a href="#image" ><span class="view" id="twelve" onclick="view()">view</span></a>
</label>
<label class="event" onmouseover="thirteenE()" onmouseout="closeThirteen()">GAME DOME
  <input type="checkbox" name="events[]" value="gamedome">
  <span class="checkmark1"></span>
  <a href="#image" ><span class="view" id="thirteen" onclick="view()">view</span></a>
</label>
<label class="event" onmouseover="fourteenE()" onmouseout="closeFourteen()">CRIC BET
  <input type="checkbox" name="events[]" value="cricbet">
  <span class="checkmark1"></span>
  <a href="#image" ><span class="view" id="fourteen" onclick="view()">view</span></a>
</label>
<br><br>
   <input id="eSub" type="submit" name="eSubmit" value="submit">
   <br><br>
  </form>

    </div>
      <div id="container">
      <div id="image"> <button id="rButton" onclick="showRegister()">Register</button> <br><b><i>Spurthi'18</i></b></div>
      <div id="bdy">
        
        <!--<div id=""></div>
        <div id=""></div>-->
         <p class="intro1">
          <?php
            echo $I1;
          ?>
         </p>
               <p class="intro2" align="justify">
                 <?php
                 echo $I2;
                 ?>
                <div id="rules1">
                  <p id="rules">
                  Rules:</p>
                    <ul id="rules2"> 
                     <?php
                     echo $R;
                     ?>
                    </ul>
                  
                </div>
         </div>
 
  </div>
</div>
</div><!-- total wrap end-->

<?php 
if(isset($_POST['eSubmit']))
{
  $clgid = $_POST['collegeid'];
  $fname = $_POST['fname'];
  $gender = $_POST['gender'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $college = $_POST['college'];
  $year = $_POST['year'];
$servername = "localhost";
$username = "spurthi";
$password = "Spurthi@18";
$dbname = "spurthi18";
$connect = new mysqli($servername,$username,$password,$dbname) or die ;

$sql = "insert into eventregistration (clgid,college,fname,email,mobile,gender,year,events) values('$clgid','$college','$fname','$email','$mobile','$gender','$year','yes')";
$qres = $connect->query($sql);
$checked_count = count($_POST['events']);

foreach($_POST['events'] as $event) {
//echo "<p>".$event."</p>";
$sql = "insert into ".$event." (clgid) values('$clgid')";
$qres = $connect->query($sql);
}

//echo "$qres";
mysqli_close($connect);
/*$regis = "yes"; 
if( $regis == "yes")
{
echo "<script>var mod = document.getElementById('mod1'); mod.style.display='block';</script>";
}*/

}


?>

</body>
</html>
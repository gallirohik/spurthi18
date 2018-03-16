<?php include 'eventData.php';

?>
    
<html>
 <?php
 $img="";
  $intro1="";
  $intro2="";
  $Rules="";
  $judge="";
  $contact="";

session_start();
if(!strcmp($_SESSION['event'],"abhivyanjan"))
{
  $intro1=$aIntro1;;
  $intro2=$aIntro2;
  $Rules=$arules;
  $judge=$ajudge;
  $contact=$acontact; $img="images/abiv.png";
}
elseif (!strcmp($_SESSION['event'],"papyrous")) 
{
  $img="images/papyrous.png";
 $intro1=$pIntro1;
  $intro2=$pIntro2;
  $Rules=$prules;
  $judge=$pjudge;
  $contact=$pcontact;
}
elseif (!strcmp($_SESSION['event'],"techyuva")) 
{
  $img="images/tech.png";
  $intro1=$tIntro1;
  $intro2=$tIntro2;
  $Rules=$trules;
  $judge=$tjudge;
  $contact=$tcontact;

}
elseif (!strcmp($_SESSION['event'],"codestorm")) 
{
  $img="images/codestorm.png";
  $intro1=$coIntro1;
  $intro2=$coIntro2;
  $Rules=$corules;
  $judge=$cojudge;
  $contact=$cocontact;
 
}

elseif (!strcmp($_SESSION['event'],"webweaver")) 
{
  $img="images/webweaver.png";
  $intro1=$wIntro1;
  $intro2=$wIntro2;
  $Rules=$wrules;
  $judge=$wjudge;
  $contact=$wcontact;


}
elseif (!strcmp($_SESSION['event'],"clashofcompeers")) 
{
  $img="images/clash.png";
   $intro1=$cIntro1;
  $intro2=$cIntro2;
  $Rules=$crules;
  $judge=$cjudge;
  $contact=$ccontact;
}
elseif (!strcmp($_SESSION['event'],"typerush")) 
{
  $img="images/typerush.png";
  $intro1=$tyIntro1;
  $intro2=$tyIntro2;
  $Rules=$tyrules;
  $judge=$tyjudge;
  $contact=$tycontact;
}
elseif (!strcmp($_SESSION['event'],"edit")) 
{
  $img="images/edit.png";
  $intro1=$eIntro1;
  $intro2=$eIntro2;
  $Rules=$erules;
  $judge=$ejudge;
  $contact=$econtact;
}
elseif (!strcmp($_SESSION['event'],"musically")) 
{
  $img="images/musically.png";
  $intro1=$mIntro1;
  $intro2=$mIntro2;
  $Rules=$mrules;
  $judge=$mjudge;
  $contact=$mcontact;

}
if(!strcmp($_SESSION['event'],"funcoding"))
{
  $img="images/fun.png";
 $intro1=$fIntro1;
  $intro2=$fIntro2;
  $Rules=$frules;
  $judge=$fjudge;
  $contact=$fcontact;

}
elseif (!strcmp($_SESSION['event'],"boomerang")) 
{
  $img="images/boomerang.png";
  $intro1=$bIntro1;
  $intro2=$bIntro2;
  $Rules=$brules;
  $judge=$bjudge;
  $contact=$bcontact;

}
elseif (!strcmp($_SESSION['event'],"crazyposy")) 
{
  $img="images/crazy.png";
 $intro1=$crintro1;
  $intro2=$crintro2;
  $Rules=$crrules;
  $judge=$crjudge;
  $contact=$crcontact;
}
elseif (!strcmp($_SESSION['event'],"virtualbounty")) 
{
  $img="images/virtual.png";
  $intro1=$vIntro1;
  $intro2=$vIntro2;
  $Rules=$vrules;
  $judge=$vjudge;
  $contact=$vcontact;

 
}

elseif (!strcmp($_SESSION['event'],"gamedome")) 
{
  $img="images/gamedome.png";
  $intro1=$gIntro1;
  $intro2=$gIntro2;
  $Rules=$grules;
  $judge=$gjudge;
  $contact=$gcontact;


}
elseif (!strcmp($_SESSION['event'],"bafflefield")) 
{
  $img="images/baffele.png";
   $intro1=$baIntro1;
  $intro2=$baIntro2;
  $Rules=$barules;
  $judge=$bajudge;
  $contact=$bacontact;
}
elseif (!strcmp($_SESSION['event'],"theinquisitors")) 
{
  $img="images/inquisters.png";
  $intro1=$iIntro1;
  $intro2=$iIntro2;
  $Rules=$irules;
  $judge=$ijudge;
  $contact=$icontact;
}
elseif (!strcmp($_SESSION['event'],"cricbet")) 
{
  $img="images/cricbet.png";
  $intro1=$criIntro1;
  $intro2=$criIntro2;
  $Rules=$crirules;
  $judge=$crijudge;
  $contact=$cricontact;
}
elseif (!strcmp($_SESSION['event'],"brainbuster")) 
{
  $img="images/buster.png";
   $intro1=$brIntro1;
  $intro2=$brIntro2;
  $Rules=$brrules;
  $judge=$brjudge;
  $contact=$brcontact;

}

?> 
<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="eventRegister.css">
<body>
<style>
html,body{
		height:100%;
	}

.sticky{
margin-left:0;

}
html {
    overflow: scroll;
    overflow-x: hidden;
}
::-webkit-scrollbar {
    width: 0px;  /* remove scrollbar space */
    background: transparent;  /* optional: just make scrollbar invisible */
}
/* optional: show position indicator in red */

.rButton1 {
    background-color:#3AA4DE  ; /* Green */
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    width:20%;
    border-radius:5px;
    border: none;
    color: white;
    padding: 2% 2%;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    font-family: "Lato", sans-serif;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    position:relative;
}
 #wEvent{
    
  	width:100%;
  	transition:2s;
  	float:left;
  	
  }
  .container1{
  	margin-left:0%;
  
  }
  #eventsList{
  	height:30%;
  	overflow:auto;
  }
</style>
    <script type="text/javascript">
	function showRegister()
	{

		document.getElementById('wEvent').classList.add("container1");
		document.getElementById('wEvent').style.width="70%";
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
    document.getElementById("Register").style.width="28%";
  }
       
	}
	function disNone()
	{
		document.getElementById('container').style.display="none";
	}
  function closeReg()
  {
    document.getElementById('wEvent').classList.toggle("container1");
    document.getElementById('wEvent').style.width="100%";
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

function showfield(name){
  if(name=='other')document.getElementById('div1').innerHTML='Other: <input type="text" required name="other" />';
  else document.getElementById('div1').innerHTML='';

}  
</script>
<!-- ################################################ total wrap #####################################################################-->
<div id="total">
<!-- ################################################ form #####################################################################-->

 <div id="Register" class="register" style="height:30%;">
    <img id="clImg" src="images1/close1.png" width="10%" height="10%" onclick="closeReg()">
                  <form action="#" method="POST">
                    
                            <br>
                            <label>Register here :</label><br><br>
                            <label class="nme">College Id ( Registration No )</label><br>
                              <input type="text" name="collegeid" required>
                                <br><br><br>
                            <label class="nme">Your Name (as to be on Certificate):</label><br>
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
                            <select name="college" required id="college_select" onchange="showfield(this.options[this.selectedIndex].value)">
                            <option >SRKR Engineering college,bhimavaram</option>
                            <?php include 'colleges_data.html'; ?>
                            <option value="other">other</option>
                          </select>
                          <div id="div1" class="w3-black"></div>
            
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
                        <div id="eventsList" style="height:10%">
						                        <label class="event" onmouseover="oneE()" onmouseout="closeOne()">CODE STORM
						                          <input type="checkbox"  name="events[]" value="codestorm">
						                          <span class="checkmark1"></span>
						                          <a href="codestorm.php" ><span class="view" id="one" onclick="view()">view</span></a>
						                        </label><br>
						                        <label class="event"  onmouseover="twoE()" onmouseout="closeTwo()">TECHYUVA
						                          <input type="checkbox"  name="events[]" value="techyuva">
						                          <span class="checkmark1"></span>
						                          <a href="techyuva.php" ><span class="view" id="two" onclick="view()">view</span></a>
						                        </label><br>
						                        <label class="event" onmouseover="threeE()" onmouseout="closeThree()">PAPYROUS
						                          <input type="checkbox" name="events[]" value="papyrous">
						                          <span class="checkmark1"></span>
						                          <a href="papyrous.php" ><span class="view" id="three" onclick="view()">view</span></a>
						                        </label><br>
						                        <label class="event" onmouseover="fourE()" onmouseout="closeFour()">ABHIVYANJAN
						                          <input type="checkbox" name="events[]" value="abhivyanjan">
						                          <span class="checkmark1"></span>
						                          <a href="abhivyanjan.php" ><span class="view" id="four" onclick="view()">view</span></a>
						                        </label><br>
						                        <label class="event" onmouseover="fiveE()" onmouseout="closeFive()">WEB WEAVER
						                          <input type="checkbox" name="events[]" value="webweaver">
						                          <span class="checkmark1"></span>
						                          <a href="webweaver.php" ><span class="view" id="five" onclick="view()">view</span></a>
						                        </label><br>
						                        <label class="event"  onmouseover="sixE()" onmouseout="closeSix()">CLASH OF COMPEERS
						                          <input type="checkbox" name="events[]" value="clashofcompeers">
						                          <span class="checkmark1"></span>
						                          <a href="clashofcompeers.php" ><span class="view" id="six" onclick="view()">view</span></a>
						                        </label><br>
						                        <label class="event" onmouseover="sevenE()" onmouseout="closeSeven()">TYPE RUSH
						                          <input type="checkbox" name="events[]" value="typerush">
						                          <span class="checkmark1"></span>
						                          <a href="typerush.php" ><span class="view" id="seven" onclick="view()">view</span></a>
						                        </label><br>
						                        <label class="event" onmouseover="eightE()" onmouseout="closeEight()">edIT
						                          <input type="checkbox" name="events[]" value="edit">
						                          <span class="checkmark1"></span>
						                          <a href="edit.php" ><span class="view" id="eight" onclick="view()">view</span></a>
						                        </label><br>
						                        <label class="event" onmouseover="nineE()" onmouseout="closeNine()">BRAIN BUSTER
						                          <input type="checkbox" name="events[]" value="brainbuster">
						                          <span class="checkmark1"></span>
						                          <a href="brainbuster.php" ><span class="view" id="nine" onclick="view()">view</span></a>
						                        </label><br>
						                        <label class="event" onmouseover="tenE()" onmouseout="closeTen()">VIRTUAL BOUNTY
						                          <input type="checkbox" name="events[]" value="virtualbounty">
						                          <span class="checkmark1"></span>
						                          <a href="virtualbounty.php" ><span class="view" id="ten" onclick="view()">view</span></a>
						                        </label><br>
						                        <label class="event" onmouseover="elevenE()" onmouseout="closeEleven()">BAFFLE FIELD
						                          <input type="checkbox" name="events[]" value="bafflefield">
						                          <span class="checkmark1"></span>
						                          <a href="bafflefield.php" ><span class="view" id="eleven" onclick="view()">view</span></a>
						                        </label><br>
						                       <label class="event" onmouseover="twelveE()" onmouseout="closeTwelve()">THE INQUISITORS
						                          <input type="checkbox" name="events[]" value="theinquisitors">
						                           <span class="checkmark1"></span>
						                          <a href="theinquisitors.php" ><span class="view" id="twelve" onclick="view()">view</span></a>
						                         </label><br>
						                        <label class="event" onmouseover="thirteenE()" onmouseout="closeThirteen()">GAME DOME
						                          <input type="checkbox" name="events[]" value="gamedome">
						                          <span class="checkmark1"></span>
						                          <a href="gamedome.php" ><span class="view" id="thirteen" onclick="view()">view</span></a>
						                        </label><br>
						                        <label class="event" onmouseover="fourteenE()" onmouseout="closeFourteen()">CRIC BET
						                          <input type="checkbox" name="events[]" value="cricbet">
						                          <span class="checkmark1"></span>
						                          <a href="cricbet.php" ><span class="view" id="fourteen" onclick="view()">view</span></a>
						                        </label><br>
                        <br><br>


                    </div>
                           <input id="eSub" type="submit" name="eSubmit" value="submit">
                           <br><br>
                  </form>
<?php 
if(isset($_POST['eSubmit']))
{
  $clgid = $_POST['collegeid'];
  $fname = $_POST['fname'];
  $gender = $_POST['gender'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
   $college = $_POST['college']; 
  if($college=='other'){
$college=$_POST['other']; 
  } 
  $year = $_POST['year'];
$servername = "localhost";
$username = "spurthi";
$password = "Spurthi@18";
$dbname = "spurthi18";
$connect = new mysqli($servername,$username,$password,$dbname);

$sql = "insert into eventregistration (clgid,college,fname,email,mobile,gender,year,events) values('$clgid','$college','$fname','$email','$mobile','$gender','$year','yes')";
$qres = $connect->query($sql);

$checked_count = count($_POST['events']);

foreach($_POST['events'] as $event) {
//echo "<p>".$event."</p>";
$sql = "insert into ".$event." (clgid) values('$clgid')"; 
$qres = $connect->query($sql);
}
 if($qres)
  {
$name=$fname;
include "mail2/mailevereg.php";
    ?>
    <script type="text/javascript">
      alert("Congradulations...!,you are successfully registered.")
    </script>
    <?php
  }
  else{
    ?>
     <script type="text/javascript">
      alert("if registration number is already reristered, if not try after some time.");
    </script>
    <?php 
  }mysqli_close($connect);
/*$regis = "yes"; 
if( $regis == "yes")
{
echo "<script>var mod = document.getElementById('mod1'); mod.style.display='block';</script>";
}*/

}

 ?>
    </div>
 
     
<!-- ################################################ form end #####################################################################-->
<!-- ################################################ data#####################################################################-->
<div id="wEvent">
				<div class="w3-container w3-white">
				                      <img src=<?php echo $img; ?> style="width:100%;object-fit: contain;">
				                      
				</div>

   				<div class="w3-row-padding  w3-white w3-container">
					<button id="rButton" class="rButton1" onclick=" showRegister()">Register</button>
									  <div class="w3-third w3-white">
											    <h2>About</h2>
											    <p> <?php echo $intro1; ?></p>
											    <p> <?php echo $intro2 ?></p>
											    
									    
									  </div>

									  <div class="w3-third">
											    <h2>Rules</h2>
											    <?php echo $Rules;  ?><br> 
                           <?php echo $judge;  ?> 
											   
									  </div>

									  <div class="w3-third">
                                                                                                 <h3>contact:</h3>
											  <h4><?php echo $contact; ?></h4>


									  </div>
				</div>
</div>				

<!-- ################################################ data end#####################################################################-->
</div>
<!-- ################################################ total wrap end  #####################################################################-->

</body>
</html>


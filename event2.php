<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css"></style>
</head>
<link rel="stylesheet" type="text/css" href="eventRegister.css">
<style type="text/css">
	#image{
		background-image:url('images1/ppt.jpg');
		background-size:cover;
		background-repeat: no-repeat;
		width:100%;
		height:auto;

	}   
	#bdy{
		margin-top:0px;
		background-color:rgba(122, 231, 236,0.1);
		height:600px;
		width:100%;
	}   
	#ftr{
		background-color:black;
		height:200px;
		width:100%;
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
        document.getElementById("Register").style.width="30%";
        //setTimeout(disNone,3000);

       
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
</script>
<body>
  <div id="total"><!-- total wrap-->
	<div id="wrap">
	<div id="Register" class="register">
		   <img id="clImg" src="images1/close1.png" width="10%" height="10%" onclick="closeReg()">
  <form action="/action_page.php" novalidate >
  	
  	<br>
  	<label>Register here :</label><br><br>
    <label class="nme">Your Name ( as to be printed Certificate ):</label><br>
      <input type="text" name="fname"  autofocus>
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
      <label class="nme">Your City:</label><br>
      <input type="text" name="city" >
        <br><br><br>
          <label class="nme">Your Mobile Number:</label><br>
      <input type="text" name="mobile" >
      <br><br>
       <label class="nme">Your Email Id:</label><br>
      <input type="text" name="email" >
      <br><br>
      <label class="nme">Your college:</label><br><br>
<div class="styled-select slate">
  <select>
    <option>SRKR Engineering college,bhimavaram</option>
    <option>The second option</option>
    <option>The third option</option>
  </select>
</div><br>
 <label class="nme">Select year:</label>
<br><br>
<div id="year" class="styled-select slate">
  <select>
    <option>1st Year</option>
    <option>2nd Year</option>
    <option>3rd Year</option>
    <option>4th Year</option>
  </select>
</div>
<br>
<label class="nme">You want to register for:</label>
<br><br>
<label class="event">Event-One
  <input type="checkbox" checked="checked">
  <span class="checkmark1"></span>
</label>
<label class="event">Event-Two
  <input type="checkbox">
  <span class="checkmark1"></span>
</label>
<label class="event">Event-Three
  <input type="checkbox">
  <span class="checkmark1"></span>
</label>
<label class="event">Event-Four
  <input type="checkbox">
  <span class="checkmark1"></span>
</label>
<br><br>
   <input id="eSub" type="submit" name="eSubmit" value="submit">
   <br><br>
  </form>
      </div>
      <div id="container">
      <div id="image"> <button id="rButton" onclick="showRegister()">Register</button> <br><b><i>Spurthi'18</i></b></div>
      <div id="bdy"></div>   
      </div>
</div>
</div><!-- total wrap end-->

</body>
</html>
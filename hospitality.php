<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign Up Form</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <link rel="stylesheet" media="screen" href="css/particlestyle.css">
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'> 
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

      <link rel="stylesheet" href="css/style17.css"> 

  <?php include'navbar.php';?>
<script>
function showfield(name){
  if(name=='other')document.getElementById('div1').innerHTML='<span><div class="input-icon"><i class="fa fa-university"></i></div></span><div><input required type="text" placeholder="Enter college name" name="other" required/></div>';
  else document.getElementById('div1').innerHTML='';

} 
</script>
 <script>
            function p(data)
            {
                if(data=="offline")
                {
                    document.getElementById("pfield").disabled = true;
                }
                if(data=="online")
                {
					
                    document.getElementById("pfield").disabled = false;
                }

            }
            setInterval(function () {
           var vis = $("#blinkMe").css("visibility");
           vis = (!vis || vis == "visible") ? "hidden" : "visible";
           $("#blinkMe").css("visibility", vis);
        }, 500);
            </script>
</head>

<body>
<?php

if(isset($_GET['error'])){
  ?>
<script>
  alert("if registration number is already registered, if not try after some time.");
  </script>
  <?php
}

?>
  <div id="particles-js"></div>
<div class="container">
  <form action="hospitalityregistration.php" method="POST">  
    <div class="row">
      <h4>Hospitality</h4>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="College ID" name="clgid" required="10"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="row">
      <div class="input-group input-group-icon">
           <div class="input-group input-group-multiple-selectp">
              
             <span id="sp"><div class="input-icon" id="ic"><i id="hosuni" class="fa fa-university"></i></div></span>
            
                    <select id="hos" name="values" required onchange="showfield(this.options[this.selectedIndex].value)">
                    <option value="">Select one</option>
                    <option >SRKR Engineering college,bhimavaram</option>
                           <?php include 'colleges_data.html';?>
                            <option value="other">other</option> 
                          </select>
                          
        </div>   
      </div>
  <div  id="div1" class="input-group input-group-multiple-selectp">
              
                      
        </div>  


      
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Full Name" name="fname" required/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="email" placeholder="Email Adress" name="email" required/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="number" id="mobile" placeholder="Mobile" name="phno" minlength="10" required/>
        <div class="input-icon"><i class="fa fa-mobile"></i></div>
      </div>
    </div>
    <div class="row">
      	<div class="col-half">
		 <h4>Payment Method</h4>
		<div class="input-group">
                       
                        <input type="radio" name="payment" value="online" id="online" onchange="p(this.value);" selected required> 
						 <label for="online">Online Payment</label>
                            <input type="radio" name="payment" value="offline" id="offline" onchange="p(this.value);" required> 
                         <label for="offline">Spot Payment</label>
					</div>
		</div>
      <div class="col-half">
        <h4>Gender</h4>
        <div class="input-group">
          <input type="radio" name="gender" value="male" id="gender-male" selected required/>
          <label for="gender-male">Male</label>
          <input type="radio" name="gender" value="female" id="gender-female" required/>
          <label for="gender-female">Female</label>
        </div>
      </div>
    </div>
	<div class="row" style="color: red;opacity:1;">
					Transfer payment  into any one the following accounts:<br>
						Bhim - 8985816974<br>
						Tez - 8985816974<br>
						Phonepe - 8985816974<br>
						Amount required as payment<br>
						1-day:200<br>
						2-days:300<br>
						3-days:450<br>
						4-days:600<br>
					</div>
	
	<div class="row">
	<h4>Payment Reference Id</h4>
	 <div class="input-group ">
                                    
                                    <input type="text" name="pid" class="form-control" id="pfield" placeholder="payment id">

                    </div>        
                
	</div>

      
      <div class="row">
      <div class="col-half">
        <h4>No of Days</h4>
        <div class="input-group input-group-icon">
          
               <select name="days" required  onchange="showDate(this.options[this.selectedIndex].value)">
                  <option></option> 
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>

               </select>
         
               
          
        </div>
      </div>
      <div class="col-half">
        <h4>Start Date</h4>
        <div id="dates" class="input-group" required> 
          <select id="dateOption" name="dm">
            
          </select>
          <select name="year">
            <option></option>
            <option>2018</option> 
          </select>
        </div>
      </div>
    </div>
    <!--
    <div class="row">
      <h4>Terms and Conditions</h4>
      <div class="input-group">
        <input type="checkbox" id="terms"/>
        <label for="terms">I accept the terms and conditions for signing up to this service, and hereby confirm I have read the privacy policy.</label>
      </div>
    </div> -->
    <input class="btn btn--form" id="submit" type="submit" value="Pay" />
  </form>
</div>
  <script>

    function showDate(x) 
    {
      if(x==1)
      {
         document.getElementById('dateOption').innerHTML='<option></option><option>30 Jan</option><option>31 Jan</option><option>01 Feb</option><option>02 Feb</option>';
      }
      else if(x==2)
      {
         document.getElementById('dateOption').innerHTML='<option></option><option>30 Jan</option><option>31 Jan</option><option>01 Feb</option';
      }
      else if(x==3)
      {
         document.getElementById('dateOption').innerHTML='<option></option<option>30 Jan</option><option>31 Jan</option>';
      }
       else if(x==4)
      {
         document.getElementById('dateOption').innerHTML='<option></option><option>30 Jan</option>';
      }
      }
            
    
  </script>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<!--particle script-->
<script src="particles.js"></script>
<script src="js/app.js"></script> 

    <script  src="js/index.js"></script>
    <script>
      $(document).ready(function(){
    $("#dates").click(function(){
      //alert("came here");

      if( ($("#nod").val() >3))
      {
        alert("No of days should be less than 4");
    }
    else if(($("#nod").val() < 1))
    {
        alert("No of days should be greater than 0");
    }
    });
});
    </script>

</body>
</html>

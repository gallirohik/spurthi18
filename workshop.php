<!DOCTYPE html>
<html>
<head>
	<title></title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       	
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
       <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
       <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
	<style type="text/css">
		#img{
			background-image: url('images1/blockChain.png');
		    background-size:100% 100%;
			background-repeat:no-repeat;
			width:100%;
			height:auto;
			margin-left:0%;            

		}
		#bdy{
			height:auto;
			width:100%;
			background-color:#f1f1f1;
		}
		#ftr{
			height:200px;
			width:100%;
			background-color:black;
		}
		.icon1
		{
    position: absolute;
    top:2%;
    left: 0;
    height: 18.5%;
    width: 12.6%;
    border-radius:50%;
    background-color: #eee;
    margin-left:80.7%;
    margin-top:19.2%;
    opacity:0;
    cursor:pointer;
    /*animation:blink-animation 5s steps(5,start) infinite;
    -webkit-animation:blink-animation 2s steps(5,start) infinite;
    */

		}
		/
		@keyframes blink-animation
		{ 
			to{visibility:hidden; }
		}
		@-webkit-keyframes blink-animation
		{ 
			to{visibility:hidden; }
		}
	.icon2	
		{
    position: absolute;
    top:2%;
    left: 0;
    height: 16.5%;
    width: 10.6%;
    border-radius:50%;
    background-color: #eee;
    margin-left:48.5%;
    margin-top:17%;
    opacity:0;
    cursor:pointer;

		}
			.icon3
		{
    position: absolute;
    top:2%;
    left: 0;
    height: 22.8%;
    width: 16%;
    border-radius:50%;
    background-color: #eee;
    margin-left:66.8%;
    margin-top:30.3%;
    opacity:0;
    cursor:pointer;

		}
		#rButton{
			margin-top:38%;
			opacity:0;
			cursor:initial;
		}
		video{
			     margin-top:10%;
			     min-height:40%;
			     min-width: 40%;
			     width:40%;
			     height:30%;
			     border-radius:0%;
			     margin-left:55%;			     
		}
        #regForm{
        	display:none;        	
        
        	width:30%;
        	
        	-webkit-transform:matrix3;
        	background-color:#083532;
        	/*#33373a;*/
        	z-index:1;
        	margin-top:0%;
        	transition:2s;
        	margin-left:0%;
        }

        b{
			opacity:0;
		}
		#hh{
			color:#7EFDF3;
			font-size:18pt;
		}
		.headings{
			color: #7EFDF3;
			-webkit-text-stroke:1px black;			
		}
	</style>
	<script type="text/javascript">
		function showRegister()
		{
			
			document.getElementById("regForm").style.display="block";		
			setTimeout(showSRegister1,1000);
		}
		function showRegister1()
		{
			document.getElementById("regForm").style.width="auto";

		}
function showfield(name){  		
  if(name=='other')document.getElementById('div1').innerHTML=' <span  class="input-group-addon"><i class="fa fa-university"></i></span><div><input required type="text" name="other" placeholder="   Enter your college" /></div>';
  else document.getElementById('div1').innerHTML='';

}  	
	</script>

	<?php include'navbar.php';?> 
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

	<div class="w3-container">
	
		<div id="img">
			
			<a href="#abtworkship"><span class="icon1" onclick=""></span></a>
			<a href="#abtinstructor"><span class="icon2" onclick=""></span></a>
			<a href="#bdy"><span class="icon3" onclick="showRegister()"></span></a>
		    <button id="rButton">Register Now</button> <br><b><i>Spurthi'18</i></b>
		</div>
	</div>
	<div class="w3-row-padding">
	  <div class="w3-third" > 
			<div class="container" id="regForm"  style="width:auto;">
				<form class="well form-horizontal" action="workshopregistration.php" style="background-color:#083532;border:none;margin-left:20px;" method="post">	
					<h2 style="color: #7EFDF3;">Registration Form</h2><br>
				
					<div class="form-group">					 
					  <div class="input-group">
					  	<span class="input-group-addon" ><i class="glyphicon glyphicon-user" ></i></span>
					  	<input  name="clgid" placeholder="College Id(Registration No)" class="form-control"  type="text" required="10" style="width:85%" >
					  </div>					
					</div>

					<div class="form-group"> 					 					    
					    <div class="input-group">
					        <span class="input-group-addon"><i class="fa fa-university"></i></span>
						    <select id="clg" name="values" required class="form-control selectpicker" style="width:85%" onchange="showfield(this.options[this.selectedIndex].value)">
						       <option value="">Select your college</option>
						      <option >SRKR Engineering College</option>
						      					      
					                    <?php include 'colleges_data.html'; ?> 
                                        <option value="other">other</option>
                                        </select>
                                        				  
					  	</div>
                       </div>
					  	<!-- ##################################-->
                            <div class="form-group"> 					 					    
					        <div  id="div1" class="input-group">
					       		  
					  	    </div>
                            </div>

					  	<!-- ##################################-->

							 

					<!-- Text input-->
					<div class="form-group">										    
					    <div class="input-group">
					  		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						  	<input name="fname" required placeholder="Full Name" class="form-control"  type="text" style="width:85%;">
					    </div>					  
					</div>
 
					<!-- Text input-->
					<div class="form-group">										    
					    <div class="input-group">
					  		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						  	<input name="cername" required placeholder="Certificate Name" class="form-control"  type="text" style="width:85%;">
					    </div>					  
					</div>


					<!-- Text input-->					      
					<div class="form-group">					 					   
					    <div class="input-group">
					        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
					  		<input name="email" required placeholder="Email Address" class="form-control" type="email" style="width:85%">
					    </div>
					</div>

					<!-- Text input-->					      
					<div class="form-group">					 					   
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
					  		<input type="number" id="mobile" placeholder="Mobile" name="phno" minlength="10" required class="form-control" style="width:85%">
					    </div>
					</div>
					<h4 ><b style="color: #7EFDF3;opacity:1;">Gender : </b></h4>
					<div class="input-group">
			          <input type="radio" name="gender" value="male" id="gender-male" required/>&nbsp;
			          <label for="gender-male"><span style="color: white;">Male</span></label> &nbsp;&nbsp;&nbsp;
			          <input type="radio" name="gender" value="female" id="gender-female" required/>&nbsp;
			          <label for="gender-female"><span style="color: white;">Female</span></label>
			        </div>


			        <div class="input-group">
			         <b> <input type="hidden" mouseover="show1()" name="accomodation" value="no" id="accomodation-yes" required/>&nbsp;
			        </b>
			        </div>			 
						<div style="color: #e5f441;opacity:1;">
					Transfer payment (RS 800/-) into any one the following accounts:<br>
						Bhim - 8985816974<br>
						Tez - 8985816974<br>
						Phonepe - 8985816974
					</div>
					<div>
                        <h4><b style="color: #7EFDF3;opacity:1;">Payment Method: </b></h4>
                        <input type="radio" name="payment" value="online" id="online" onchange="p(this.value);" required> &nbsp;
						 <label for="gender-male"><span style="color: white;">Online Payment</span></label><br>
                            <input type="radio" name="payment" value="offline" id="offline" onchange="p(this.value);" required> &nbsp;
                         <label for="gender-male"><span style="color: white;">Spot Payment</span></label>
					</div>
                          
                    <div>
                                    <h4><b style="color: #7EFDF3;opacity:1;">Payment Reference Id: </b></h4>
                                    <input type="text" name="pid" class="form-control" id="pfield" placeholder="payment id">

                            
                    </div>

					<br>
					<!-- Button -->
					<div class="form-group">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					        <button type="submit" class="btn btn-success" id="submit" style="width:50%;" onclick="return check_mob_again()"> SUBMIT <span class="glyphicon glyphicon-send"></span></button>
*					</div>

					</form>
			</div

			  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

			    <script  src="js/index.js"></script>
			    <script>function show1(){document.getElementById('accomod').style.display='block';}</script>
			    <script >
			    $(document).ready(function(){
			      	$("#accomodation-yes").click(function(){
				        $("#accomod").show();				        
			      	});
			      	$("#accomodation-no").click(function(){
			        	$("#accomod").hide();			        
			      	});				    
				    });
					function check_mob_again()
					{
						if( ($("#mobile").val().length < 10)){
				        	alert("Mobile number should be 10 digits");
				        	return false;
					    }
					    else
					    {
					    	//check starting digits of mobile number
					    	var pno=($('#mobile').val()).toString();
					    	if( pno[0]=='7' || pno[0]=='8' || pno[0]=='9' || pno[0]=='6'){
					    		return true;
					    	}
					    	else{
					    		alert("Enter Valid mobile Number"); 
					    		return false;
					    	}
					    }
					}

			    </script>

	  </div> 

   <!-- <marquee><h2 style="color:red"> WORKSHOP REGISTRATIONS WILL BE OPENED SOON...!</h2></marquee>	-->
 	  <div class="w3-third" id="abtworkship" >

	    <h2 class="headings">About workshop</h2>
	    <p >Bitcoin was invented by Sathoshi Nakamoto and <p>
	    released as open-source Software in 2009. It is the<p>
	    first decentralized digital currency as the system<p>	
	     works without a central bank or single administrator.<p>
		 A blockchain, originally block chain, is a continuously<p>
		growing list of records, called blocks, which are linked <p>
		and secured using cryptography.<p>
		Know more about them by taking a part of the workshop.</p>
	  </div>

	  <div class="w3-third" id="abtinstructor">
	    <h2 class="headings">About Instructors:</h2>
	    <p><b style="opacity:1;">1.Srinivasa Raju Vuppalapati</b>,<p>
		    A.M.I.E., M.Tech., (Ph.D – AI / ML ).
		 <p>Worked as Chief Coordinator, Incubation Centre in Graduate<p>
		  College.Expert in various domains like  Block Chain  / <p>
		  Linux Administration / Databases /  Artificial Intelligence /<p> Web Development / Internet of Things.</p>
		<p><b style="opacity:1;">2.Prakash Rudraraju</b><p>				
		<p>Principal software engineer at SalesForce, worked as<p>
		Sr. system administrator at -Jigsaw data corporation and <p>
		Service engineer at Yahoo!
		
		<p>
		
	  </div>
	

	</div>
<div></div>
<div id="ftr">


</div>


</body>
</html>


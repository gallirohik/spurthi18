<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        document.getElementById('bNav').style.display="none";
    } else { 
        x.className = x.className.replace(" w3-show", "");
         document.getElementById('bNav').style.display="block";
    }

}
</script>
<body>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-teal w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="index.php?id=1" class="w3-bar-item w3-button w3-padding-large w3-hide-small">EVENTS</a>
	<a href="workshop.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">WORKSHOP</a>
    <a href="sboys.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">SPORTS</a>
    <a href="hospitality1.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">HOSPITALITY</a>
	<a href="team.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">OUR TEAM</a>
	<a href="about.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ABOUT</a>
    <!--<div class="w3-dropdown-hover w3-hide-small">
     <button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#" class="w3-bar-item w3-button">Merchandise</a>
        <a href="#" class="w3-bar-item w3-button">Extras</a>
        <a href="#" class="w3-bar-item w3-button">Media</a>
      </div>
    </div>-->
  </div>
</div>
<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
	<a href="index.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#band" class="w3-bar-item w3-button w3-padding-large">ATTRACTIONS</a>
	<a href="workshop.php" class="w3-bar-item w3-button w3-padding-large">WORKSHOP</a>
    <a href="sboys.php" class="w3-bar-item w3-button w3-padding-large">SPORTS</a>
    <a href="hospitality1.php" class="w3-bar-item w3-button w3-padding-large">HOSPITALITY</a>
	<a href="team.php" class="w3-bar-item w3-button w3-padding-large">OUR TEAM</a>s
	<a href="about.php" class="w3-bar-item w3-button w3-padding-large">ABOUT</a>
</div>

</body>
</html>
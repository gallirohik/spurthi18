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

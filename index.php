<!DOCTYPE html>
<html>
<title>Baucampus</title>
<link rel="shortcut icon" type="image/x-icon" href="https://www.baucampus.de/favicon.ico">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://baucampus.ch/w3.css">
<link rel="stylesheet" type="text/css" href="https://baucampus.ch/style.css">
  <link rel="stylesheet" href="https://baucampus.ch/ideen-style.css">
<link rel="stylesheet" type="text/css" href="https://baucampus.ch/kontakt-style.css">
<body id="myPage">
<style>
.w3-osk-customs{z-index:5000;   backdrop-filter: invert(.2) blur(10px);}
 .viewport-header {
	 position: relative;
	 height: 100%;
	 text-align: center;
	 display: flex;
	 align-items: center;
	 justify-content: center;
}
 html {
	 font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
	 font-size: 150%;
	 line-height: 1.4;
} 
 .viewport-header {
	 position: relative;
	 height: 100%;
	 text-align: center;
	 display: flex;
	 align-items: center;
	 justify-content: center;
}
 h1 {
	 font-family: 'Syncopate', sans-serif;
	 color: white;
	 text-transform: uppercase;
	 letter-spacing: 2vw;
	 line-height: 1.5;
	 font-size: 3vw;
	 text-align: center;
}
 h1 span {
	 display: block;
	 font-size: 8vw;
	 letter-spacing: -1vw;
}</style>

<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>


<div class="w3-top w3-text-white">

  <div class="w3-bar w3-text-white" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-left" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      Baucampus
    </a>

    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      Nav<i class="fa fa-bars"></i>
    </a>

    <a href="https://baucampus.com" class="w3-hide-small w3-left hover-underline-animation oskkk"style="padding-left:100px;">Baucampus</a>
   <a href="https://baucampus.com/kontakt" class=" w3-hide-small w3-right hover-underline-animation oskkk" style="padding-right:100px;">Kontakt</a>
   <a href="#5" class=" w3-hide-small w3-right hover-underline-animation oskkk">Vorteile</a>
   <a href="#4" class=" w3-hide-small w3-right hover-underline-animation oskkk">Team</a>
   <a href="#3" class=" w3-hide-small w3-right hover-underline-animation oskkk">Netzwerk</a>
   <a href="#2" class=" w3-hide-small w3-right hover-underline-animation oskkk">Vision</a>




  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="https://baucampus.ch" class="w3-bar-item w3-button"  onclick="toggleFunction()">Baucampus</a>
    <a href="https://baucampus.ch" class="w3-bar-item w3-button"  onclick="toggleFunction()">Ideen</a>
    <a href="https://baucampus.ch" class="w3-bar-item w3-button" onclick="toggleFunction()">Über Uns</a>
    <a href="https://baucampus.ch" class="w3-bar-item w3-button" onclick="toggleFunction()">Kontakt</a>
  </div>
</div>
<script>
// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-animate-top" + " w3-osk-customs";
    } else {
        navbar.className = navbar.className.replace(" w3-animate-top w3-osk-customs", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>


<!-- Image Header -->

<div class="w3-display-container w3-animate-opacity w3-center" id="1" >
<img  src="pictures/8.jpg" alt="Mein Haus" style="width:100%;min-height:350px;max-height:100vh; object-fit: cover; object-position:center;">
</div>

<!-- Team Container -->
<div class="w3-container w3-padding-64"  style="height:100vh;display: flex;align-items: center;justify-content: center; margin-left:15%!important;margin-right:15%!important" >
<div class="w3-row">
  <div class="w3-half w3-container">
<img  src="pictures/9.jpg" alt="Mein Haus" style="width:100%;min-height:350px;max-height:100vh; object-fit: cover; object-position:center;">
  </div>
  <div class="w3-half w3-container">
 
    <h2 style="border-bottom:solid 5px #c4c4c4; font-family:Montserrat,sans-serif;">Kunden finden Experten - Experten finden Kunden</h2>
   <p>Wir glauben an die Kraft der Zusammenarbeit und sind der Meinung, dass wir gemeinsam mehr erreichen können, als wir es alleine jemals könnten. Außerdem setzen wir auf Qualität: Wir arbeiten nur mit Experten zusammen, die auf ihrem Gebiet qualifiziert und erfahren sind.</p>
  </div>
</div>
</div>

<!-- Team Container -->

<div class="w3-display-container w3-animate-opacity w3-center" id="2" >
<img  src="/pictures/2.jpg" alt="Mein Haus" style="width:100%;min-height:350px;max-height:100vh; object-fit: cover; object-position:center;">
  <div class=" w3-display-middle">  
<header class="viewport-header">
  <h1>
    <span>V I S I O N</span>
  </h1>

</header>  	</div>
  </div>
</div>
<div class="w3-container w3-padding-64"  style="height:100vh;display: flex;align-items: center;justify-content: center; margin-left:15%!important;margin-right:15%!important" >
<div class="w3-row">
  <div class="w3-half w3-container">
<img  src="/pictures/10.jpg" alt="Mein Haus" style="width:100%;min-height:350px;max-height:100vh; object-fit: cover; object-position:center;">
  </div>
  <div class="w3-half w3-container">
 
    <h2 style="border-bottom:solid 5px #c4c4c4; font-family:Montserrat,sans-serif;">Erfolgsgeschichte schreiben</h2>
   <p>Statt nur als lokale Sachverständige tätig zu sein entstand unter Kollegen die Idee, ein flächendeckendes Netzwerk aus Sachverständigen zu schaffen. Kundenakquise und aktiver Wissensaustausch zwischen unterschiedlichen spezialisierten Sachverständigen sind unser Ziel.</p>
  </div>
</div>
</div>

<!-- Team Container -->

<div class="w3-display-container w3-animate-opacity w3-center" id="3" >
<img  src="/pictures/6.jpg" alt="Mein Haus" style="width:100%;min-height:350px;max-height:100vh; object-fit: cover; object-position:center;">
  <div class=" w3-display-middle">  
<header class="viewport-header">
  <h1>
    <span>N E T Z W E R K</span>
  </h1>

</header>  	</div>
  </div>
</div>

<div class="w3-container w3-padding-64 "  style="height:100vh;display: flex;align-items: center;justify-content: center; margin-left:15%!important;margin-right:15%!important" >
<div class="w3-row">
  <div class="w3-half w3-container">
<img  src="/pictures/11.jpg" alt="Mein Haus" style="width:100%;min-height:350px;max-height:100vh; object-fit: cover; object-position:center;">
  </div>
  <div class="w3-half w3-container">
  
    <h2 style="border-bottom:solid 5px #c4c4c4; font-family:Montserrat,sans-serif;">Unternehmensstruktur</h2>
   <p>Durch die Vergabe von Lizenzen für den professionellen Internetauftritt unter der Ägide von Baucampus entsteht ein schlankes und effizientes Netzwerk aus unabhängigen Bausachverständigen.</p>
  </div>
</div>
</div>
<!-- Team Container -->

<div class="w3-display-container w3-animate-opacity w3-center" id="4" >
<img  src="/pictures/7.jpg" alt="Mein Haus" style="width:100%;min-height:350px;max-height:100vh; object-fit: cover; object-position:center;">
  <div class=" w3-display-middle">  
<header class="viewport-header">
  <h1>
    <span>T E A M</span>
  </h1>

</header>  	</div>
  </div>
</div>

<div class="w3-container w3-padding-64 "  style="height:100vh;display: flex;align-items: center;justify-content: center; margin-left:15%!important;margin-right:15%!important" >
<div class="w3-row">
  <div class="w3-half w3-container">
<img  src="/pictures/13.jpg" alt="Mein Haus" style="width:100%;min-height:350px;max-height:100vh; object-fit: cover; object-position:center;">
  </div>
  <div class="w3-half w3-container">
   
    <h2 style="border-bottom:solid 5px #c4c4c4; font-family:Montserrat,sans-serif;"> Qualität hat ein Gesicht</h2>
   <p>Baucampus trägt dazu bei, die Zusammenarbeit von Experten effizienter und effektiver zu gestalten. Wenn Sie ein Experte auf Ihrem Gebiet sind, ermutigen wir Sie, sich uns anzuschließen!</p>
  </div>
</div>
</div>

<!-- Team Container -->

<div class="w3-display-container w3-animate-opacity w3-center" id="5" >
<img  src="one-2.jpg" alt="Mein Haus" style="width:100%;min-height:350px;max-height:100vh; object-fit: cover; object-position:center;">
  <div class=" w3-display-middle">  
<header class="viewport-header">
  <h1>
    <span>W A R U M</span>
  </h1>

</header>  	</div>
  </div>
</div>

<div class="w3-container w3-padding-64 "  style="height:100vh;display: flex;align-items: center;justify-content: center; margin-left:15%!important;margin-right:15%!important" >
<div class="w3-row">
  <div class="w3-half w3-container">
<img  src="/pictures/12.jpg" alt="Mein Haus" style="width:100%;min-height:350px;max-height:100vh; object-fit: cover; object-position:center;">
  </div>
  <div class="w3-half w3-container">
  
    <h2 style="border-bottom:solid 5px #c4c4c4; font-family:Montserrat,sans-serif;">Ihre Vorteile</h2>
   <hp>Als Mitglied von Baucampus haben Sie Zugang zu einem bundesweiten Netzwerk von Experten. Außerdem können Sie leichter neue Kunden und Projekte finden. Und weil wir auf Qualität setzen, können Sie sicher sein, dass Sie nur mit qualifizierten und erfahrenen Experten zusammenarbeiten.
Sind Sie bereit für den Aufbruch in die Zukunft mit Baucampus?
</p>
  </div>
</div>
</div>

<!-- Footer -->
<footer style="padding-top:2vh; color:#9fa3a7; background-color:#F5F5F8; font-size:16px;">

<div class="w3-row " style="margin-bottom:5vh;padding-left:10vh;"> 
  <div class="w3-third w3-container" >
		<h3 style="color:#26292c;">Baucampus</h3>
		<img src="https://baucampus.ch/bilder/baucampus.png" class="w3-center" style="width:20%;" alt="Baucampus">

 </div>
  <div class="w3-third w3-container">
		<h3 style="color:#26292c;margin-bottom:4vh;">Kontakt</h3>
		<p style="font-size:16px;">Tel.: 05722 / 913800</p>
		<p style="font-size:16px;">Fax: 05722 / 289 0638</p>
		<p style="font-size:16px; margin-bottom:10px;">E-Mail: oskar_lohse@baucampus.ch</p>

  </div>
  <div class="w3-third w3-container">
		<h3 style="color:#26292c;">Themen</h3>
        <p><a href="https://baucampus.de">Baucampus Deutschland</a></p>
        <p><a href="https://baucampus.at">Baucampus Österreich</a></p>
        <p><a href="https://baucampus.de">Baucampus Schweiz</a></p>
        <p><a href="https://baucampus.de">Baucampus Frankreich</a></p>

	  </div>
</div>


<div class="w3-row" style="padding-left:10vh; padding-top:2vh; padding-bottom:2vh; border-top:1px solid #EBEBED; font-size:14px;">
  <div class="w3-third w3-container">
    <a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/impressum">Impressum</a>
    <a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/datenschutzerklaerung">Datenschutzerklärung</a> 

 </div>
  <div class="w3-third w3-container">

  </div>
  <div class="w3-third w3-container">
    <a href="https://baucampus.de">Baucampus.de</a>    
    <a href="https://baucampus.at">Baucampus.at</a>
    <a href="https://baucampus.ch">Baucampus.ch</a> 
    <a href="https://baucampus.de">Baucampus.fr</a> 

  </div>
</div>


</footer>













<script>
// Script for side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "100%";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}

// Close side navigation
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>


</body>
</html>
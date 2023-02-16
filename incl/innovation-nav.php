
<div class="w3-top" style="z-index:5000;">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="https://architekturinstitut.com" class="w3-hide-small w3-left hover-underline-animation oskkk"style="padding-left:100px;">AI</a>
    <a href="https://architekturinstitut.com/ideen.php" class="w3-hide-small w3-left hover-underline-animation oskkk">Ideen</a>
    <a href="https://architekturinstitut.com/ueber-uns.php" class=" w3-hide-small w3-left hover-underline-animation oskkk">Über Uns</a>
    <a href="https://architekturinstitut.com/kontakt.php" class=" w3-hide-small w3-right hover-underline-animation oskkk" style="padding-right:100px;">Kontakt</a>
    <a href="https://architekturinstitut.com" class=" w3-hide-small w3-right hover-underline-animation oskkk">DE</a>
    <a href="https://architekturinstitut.com/" class="w3-hide-small w3-right hover-underline-animation oskkk">EN</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="https://architekturinstitut.com" class="w3-bar-item w3-button"  onclick="toggleFunction()">AI</a>
    <a href="https://architekturinstitut.com/ideen.php" class="w3-bar-item w3-button"  onclick="toggleFunction()">Ideen</a>
    <a href="https://architekturinstitut.com/ueber-uns.php" class="w3-bar-item w3-button" onclick="toggleFunction()">Über Uns</a>
    <a href="https://architekturinstitut.com/kontakt.php" class="w3-bar-item w3-button" onclick="toggleFunction()">Kontakt</a>
    <a href="https://architekturinstitut.com" class="w3-bar-item w3-button" onclick="toggleFunction()">DE</a>
    <a href="https://architekturinstitut.com/en/index.php" class="w3-bar-item w3-button" onclick="toggleFunction()">EN</a>
  </div>
</div>
<script>
// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + "";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-black", "");
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

<!DOCTYPE html>
<html lang="de">
<meta charset="UTF-8">
<title>Über uns</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.mein-haus.eu/css/w3.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Inconsolata'><link rel="stylesheet" href="/about-style.css">

<body>
<? include("incl/nachhaltigkeit-nav.php");?>

<div class="w3-container w3-margin-osk2" style="margin-top:10vh;">

<h1 class="w3-center" style="font-weight: 500;">Architekturinstitut - Über Uns</h1>
<h3 class="w3-center" style="margin-top:10vh; font-weight: 500;">Wir sind ein Zusammenschluss von Architekten, Designern, Ingenieuren und Planern, die zusammen an einer besseren Zukunft arbeiten.</h3>
<h3 class="w3-center" style="font-weight: 500;">Good Design is Sustainable, Great Design is Responsible</h3>
</div>
<div class="w3-container" style="margin-top:10vh;min-height:75vh;">
<div class="w3-row">
<div class="container">
  <svg xmlns="http://www.w3.org/2000/svg" width="600" height="500" viewBox="0 0 600 500" preserveAspectRatio="xMinYMin" class="birds">
        <rect onclick="goTo(0)" class="box" x="45" y="15" width="30" height="30"></rect>
        <circle cx="60" cy="30" r="5"></circle>
        <rect onclick="goTo(1)" class="box" x="75" y="15" width="30" height="30"></rect>
        <circle cx="90" cy="30" r="5"></circle>
        <rect onclick="goTo(2)" class="box" x="105" y="15" width="30" height="30"></rect>
        <circle cx="120" cy="30" r="5"></circle>
        <rect onclick="goTo(3)" class="box" x="135" y="15" width="30" height="30"></rect>
        <circle cx="150" cy="30" r="5"></circle>
        <rect onclick="goTo(4)" class="box" x="165" y="15" width="30" height="30"></rect>
        <circle cx="180" cy="30" r="5"></circle>
      </svg>
  <div class="bird-text">
    <div class="bird-text__title"></div>
    <div class="bird-text__body"></div>
  </div>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js'></script><script  src="/about-script.js"></script>
  </div>
</div>
<? include("incl/footer.php");?>


</body>
</html>       


<style>
.zooma {
	overflow: hidden;
}
.zooma img {
	width: 100%;
	height: auto;
	/* SCALE */
	-webkit-transform: scale(1);
	-moz-transform: scale(1);
	-ms-transform: scale(1);
	-o-transform: scale(1);
	transform: scale(1);
	/* VERZÖGERUNG */
	-webkit-transition: all 0.3s linear;
	-moz-transition: all 0.3s linear;
	-ms-transition: all 0.3s linear;
	-o-transition: all 0.3s linear;
	transition: all 0.3s linear;
}
.zooma img:hover {
	-webkit-transform: scale(1.2);
	-moz-transform: scale(1.2);
	-ms-transform: scale(1.2);
	-o-transform: scale(1.2);
	transform: scale(1.2);
}
</style>

<!DOCTYPE html>
<html>
<title>Ideen</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="style2.css">
  <link rel="stylesheet" href="./ideen-style.css">


<body>
<? include("incl/nav2.php");?>

<!-- partial:index.partial.html -->
<div class="slider">
  <input name="control" id="page1" type="radio" checked/>
  <input name="control" id="page2" type="radio"/>
  <input name="control" id="page3" type="radio"/>
  <input name="control" id="page4" type="radio"/>
  <div class="slider--el slider--el-1 anim-4parts">
    <div class="slider--el-bg">
      <div class="part top left"></div>
      <div class="part top right"></div>
      <div class="part bot left"></div>
      <div class="part bot right"></div>
    </div>
    <div class="slider--el-content">
      <h2 class="slider--el-heading">Ideas</h2>
      <h3 class="slider--el-heading">for the future</h3>

    </div>
  </div>
  <div class="slider--el slider--el-2 anim-9parts">
    <div class="slider--el-bg">
      <div class="part left-top"></div>
      <div class="part mid-top"></div>
      <div class="part right-top"></div>
      <div class="part left-mid"></div>
      <div class="part mid-mid"></div>
      <div class="part right-mid"></div>
      <div class="part left-bot"></div>
      <div class="part mid-bot"></div>
      <div class="part right-bot"></div>
    </div>
    <div class="slider--el-content">
      <h2 class="slider--el-heading">Start with a dream</h2>
    </div>
  </div>
  <div class="slider--el slider--el-3 anim-5parts">
    <div class="slider--el-bg">
      <div class="part part-1"></div>
      <div class="part part-2"></div>
      <div class="part part-3"></div>
      <div class="part part-4"></div>
      <div class="part part-5"></div>
    </div>
    <div class="slider--el-content">
      <h2 class="slider--el-heading">Inspire the world</h2>
    </div>
  </div>
  <div class="slider--el slider--el-4 anim-3parts">
    <div class="slider--el-bg">
      <div class="part left"></div>
      <div class="part mid"></div>
      <div class="part right"></div>
    </div>
    <div class="slider--el-content">
      <h2 class="slider--el-heading">Redesign the future</h2>
    </div>
  </div>
  <div class="slider--control left">
    <label class="page1-left" for="page1"></label>
    <label class="page2-left" for="page2"></label>
    <label class="page3-left" for="page3"></label>
    <label class="page4-left" for="page4"></label>
  </div>
  <div class="slider--control right">
    <label class="page1-right" for="page1"></label>
    <label class="page2-right" for="page2"></label>
    <label class="page3-right" for="page3"></label>
    <label class="page4-right" for="page4"></label>
  </div>
</div>









<div class="w3-row-padding" style="margin-top:10vh;"> 

<div class="w3-third">
  <div class="w3-display-container w3-text-white zooma" style="margin-bottom:16px;">
    <img src="/bilder/urban-design.jpg" alt="Stadtplanung" style="height:70vh; width: 100% !important; object-fit: cover; object-position:center;">
    <div class="w3-xlarge w3-display-bottomleft w3-padding">Stadtplanung</div>
  </div>
</div>

<div class="w3-third">
  <div class="w3-display-container w3-text-white zooma" style="margin-bottom:16px;">
    <img src="/bilder/cultural.jpg" alt="Kultur" style="height:70vh; width: 100% !important; object-fit: cover; object-position:center;">
    <div class="w3-xlarge w3-display-bottomleft w3-padding">Kultur</div>
  </div>
</div>

<div class="w3-third">
  <div class="w3-display-container w3-text-white zooma" style="margin-bottom:16px;">
    <img src="/bilder/facade-design.jpg" alt="Fassaden Design" style="height:70vh; width: 100% !important; object-fit: cover; object-position:center;">
    <div class="w3-xlarge w3-display-bottomleft w3-padding">Fassaden Design</div>
  </div>
</div>
</div>


<div class="w3-row-padding"> 

<div class="w3-third">
  <div class="w3-display-container w3-text-white zooma" style="margin-bottom:16px;">
    <img src="/bilder/transportation.jpg" alt="Öffentliche Verkehrsmittel" style="height:70vh; width: 100% !important; object-fit: cover; object-position:bottom;">
    <div class="w3-xlarge w3-display-bottomleft w3-padding">Öffentliche Verkehrsmittel</div>
  </div>
</div>


<div class="w3-third">
  <div class="w3-display-container w3-text-white zooma" style="margin-bottom:16px;">
    <img src="/bilder/airport.jpg" alt="Flughafen" style="height:70vh; width: 100% !important; object-fit: cover; object-position:center;">
    <div class="w3-xlarge w3-display-bottomleft w3-padding">Airport</div>
  </div>
</div>

<div class="w3-third">
  <div class="w3-display-container w3-text-white zooma" style="margin-bottom:16px;">
    <img src="/bilder/commercial.jpg" alt="Bürogebäude" style="height:70vh; width: 100% !important; object-fit: cover; object-position:center;">
    <div class="w3-xlarge w3-display-bottomleft w3-padding">Hochhäuser</div>
  </div>
</div>
</div>

<? include("incl/footer.php");?>


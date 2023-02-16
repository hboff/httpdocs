<style>
html, body {
    height: 100%;
    margin: 0;
}
#videowrapper{  
    position: relative;
    overflow: hidden;
} 

#fullScreenDiv{
    height: 70vh;
    width: 100vw;
    padding:0;
    margin: 0;
    background-color: gray;
    position: relative;
}

#video{    
    width: 100vw; 
    height: auto;
    margin: auto;
    display: block;
}
@media (min-aspect-ratio: 16/9) {
  #video{
    width: 100vw; 
    height:auto;
  }
}

@media (max-aspect-ratio: 16/9) {
  #video {
    height: 100vh; 
    width:auto;
    margin-left: 50vw;
    transform: translate(-50%);
  }
}

#videoMessage{
    width: 100%; 
    height: 100%;
    position: absolute; 
    top: 0; 
    left: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
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


<body>
<? include("incl/nav2.php");?>

<div class="w3-display-container w3-animate-opacity w3-center">
<img src="/ideen.jpg" alt="Mein Haus" style="width:100%;min-height:350px;max-height:85vh; object-fit: cover; object-position:center;">
  <div class="w3-container w3-display-middle w3-margin-bottom">  
  	<div  ">  
		<h1><b>Wer kein Ziel hat, kann auch keines erreichen</b><h1>
 
		<h2>Laotse</h2>
 	</div>
  </div>
</div>







<div class="w3-row-padding" style="margin-top:10vh;"> 

<div class="w3-third">
  <div class="w3-display-container w3-text-white zooma" style="margin-bottom:16px;">
    <img src="/one-3.jpg" alt="Lights" style="width:100%">
    <div class="w3-xlarge w3-display-bottomleft w3-padding">Airport</div>
  </div>

</div>

<div class="w3-third">
  <div class="w3-display-container w3-text-white zooma" style="margin-bottom:16px;">
    <img src="/one-4.jpg" alt="Lights" style="width:100%">
    <div class="w3-xlarge w3-display-bottomleft w3-padding">Airport</div>
  </div>
</div>

<div class="w3-third">
  <div class="w3-display-container w3-text-white zooma" style="margin-bottom:16px;">
    <img src="/one-5.jpg" alt="Lights" style="width:100%">
    <div class="w3-xlarge w3-display-bottomleft w3-padding">Airport</div>
  </div>
</div>
</div>


<div class="w3-row-padding"> 

<div class="w3-third">
  <div class="w3-display-container w3-text-white zooma" style="margin-bottom:16px;">
    <img src="/one-3.jpg" alt="Lights" style="width:100%">
    <div class="w3-xlarge w3-display-bottomleft w3-padding">Airport</div>
  </div>

</div>

<div class="w3-third">
  <div class="w3-display-container w3-text-white zooma" style="margin-bottom:16px;">
    <img src="/one-4.jpg" alt="Lights" style="width:100%">
    <div class="w3-xlarge w3-display-bottomleft w3-padding">Airport</div>
  </div>
</div>

<div class="w3-third">
  <div class="w3-display-container w3-text-white zooma" style="margin-bottom:16px;">
    <img src="/one-5.jpg" alt="Lights" style="width:100%">
    <div class="w3-xlarge w3-display-bottomleft w3-padding">Airport</div>
  </div>
</div>
</div>

<? include("incl/footer.php");?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="https://nui-house.com/test/a/build/jquery.mapify.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="/nachhaltigkeit-style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="/style.css">

<style type="text/css">
body {
  font-family: arial, sans-serif;
  font-weight: 400;
  background: #000;
  font-size: 12px;
  margin: 0px;
  padding: 0px;
  cursor: default;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

/* Mapify custom popOver example */
	

.mapify-popOver strong {
  font-weight: 400;
  font-size: 24px;
  line-height: 1em;
  display: block;
  margin-bottom: 10px;
  color: #000;
}

.mapify-popOver {
  color: #999;
  font-size: 16px;
  height: 130px;
}

.mapify-popOver-content {
  position: relative;
  top: 50%;
  transform: translateY(-50%);
  -webkit-transform: translateY(-50%);
}

.mapify-popOver.customPopOver { background: #09f; }

/* Custom hovering style */

.mapify-hover {
  fill: rgba(0,0,0,0.15);
  stroke: #fff;
  stroke-width: 2;
}

.customHover {
  fill: rgba(0,153,255,0.15);
  stroke: #fff;
  stroke-width: 2;
}
</style>
</head>
<body>
<!-- Navbar (sit on top) -->
<? include("incl/nav2.php");?>

<div>
<img src="leaf.jpg" alt="Nachhaltigkeit" style="width:100%;height:100vh; object-fit: cover; object-position:center;">

<svg class="intro" viewbox="0 0 200 86">
  <text text-anchor="start" x="15" y="30" class="text text-stroke" clip-path="url(#text1)">Where</text>
  <text text-anchor="start" x="15" y="50" class="text text-stroke" clip-path="url(#text2)">Ideas</text>
  <text text-anchor="start" x="15" y="70" class="text text-stroke" clip-path="url(#text3)">Begin</text>

  <text text-anchor="start" x="15" y="30" class="text text-stroke text-stroke-2" clip-path="url(#text1)">Where</text>
  <text text-anchor="start" x="15" y="50" class="text text-stroke text-stroke-2" clip-path="url(#text2)">Ideas</text>
  <text text-anchor="start" x="15" y="70" class="text text-stroke text-stroke-2" clip-path="url(#text3)">Begin</text>

  <defs>
    <clipPath id="text1">
      <text text-anchor="start" x="15" y="30" class="text">Where</text>
    </clipPath>
    <clipPath id="text2">
      <text text-anchor="start" x="15" y="50" class="text">Ideas</text>
    </clipPath>
    <clipPath id="text3">
      <text text-anchor="start" x="15" y="70" class="text">Begin</text>
    </clipPath>
  </defs
</svg>
<div>
</div>
</div>





<div class="w3-row" style="margin-top:10vh; margin-bottom:10vh;">
  <div class="w3-container w3-quarter">
    <h2 style="color:white;font-size: 2rem;font-family: Georgia, serif;font-style: italic; letter-spacing: 0.1rem;">Unser Ziel</h2>
  </div>

  <div class="w3-container w3-threequarter">
<h2 style="color:white;font-size: 3rem;font-family: Georgia, serif;font-style: italic; letter-spacing: 0.1rem;">Einen Traum sollte man nicht aus den Augen verlieren, sondern zu seiner Bestimmung machen.</h2>
<h3 style="color:white;font-size: 2rem;font-family: Georgia, serif;font-style: italic; letter-spacing: 0.1rem;">Tiny house, the silent revolution of living.</h3>
<h3 style="color:white;font-size: 2rem;font-family: Georgia, serif;font-style: italic; letter-spacing: 0.1rem;">Click on the houses.</h3>

</div>
  </div>


<div class="jquery-script-clear"></div>
</div>
</div>
<img src="https://architekturinstitut.com/bilder/tiny-house-village.jpg" width="3840px" height="2160px" border="0" usemap="#Map" />
<map name="Map" id="Map">
    <area data-nbmembre="Tiny homes can grow with your needs." target="" alt="tiny1" title="Reason 5" coords="2753,1011,2753,870,2834,860,3443,881,3411,1076,3346,1108,3114,1065" shape="poly">
    <area data-nbmembre="Tiny homes are affordable." target="" alt="tiny2" title="Reason 4" coords="2559,968,2569,860,2515,789,2294,784,2294,827,2294,935,2408,946,2418,962" shape="poly">
    <area data-nbmembre="Tiny homes are easy to maintain." target="" alt="tiny3" title="Reason 3" coords="2014,968,2014,860,1944,849,1545,881,1545,1005,1599,1027,1836,995" shape="poly">
    <area data-nbmembre="Tiny homes making less waste." target="" alt="" title="Reason 2" coords="671,1092,649,919,1011,887,1048,903,1059,1038,1124,1043,1075,1076,1021,1076,908,1086,914,1113,854,1113,844,1119,698,1113" shape="poly">
    <area data-nbmembre="Tiny homes use less energy." target="" alt="" title="Reason 1" coords="401,1248,439,1232,401,1011,390,962,175,978,142,1043,186,1259,229,1275,315,1259" shape="poly">
</map>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
<script type="text/javascript" src="../build/jquery.mapify.js"></script> 
<script type="text/javascript">
$(function(){
	
	$("img[usemap]:first").mapify({
		popOver: {
			content: function(zone){
				return "<strong>"+zone.attr("data-title")+"</strong>"+zone.attr("data-nbmembre")+" ";
			},
			delay: 0.7,
			margin: "15px",
			height: "130px",
			width: "260px"
		},
		onAreaHighlight: function(){
			console.log("onAreaHighlight callback");
		},
		onMapClear: function(){
			console.log("onMapClear callback");
		}
	});
	
	$("img[usemap]:last").mapify({
		popOver: {
			content: function(zone){
				return "<strong>"+zone.attr("data-title")+"</strong>"+zone.attr("data-nbmembre")+" Nui-House";
			},
			delay: 0.7,
			margin: "15px",
			height: "130px",
			width: "260px"
		},
		onAreaHighlight: function(){
			console.log("onAreaHighlight callback2");
		},
		onMapClear: function(){
			console.log("onMapClear callback2");
		}
	});
	
	$("#dynamicClassChange").click(function() {
		$(this).attr("data-hover-class","hover-green");
	});
	
});
</script>


<?php include 'incl/footer.php';?>
<script  src="/nachhaltigkeit-script.js"></script>

</body>
</html>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>Ti-house</title>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../build/jquery.mapify.css">
<style type="text/css">
body {
  font-family: arial, sans-serif;
  font-weight: 400;
  background: #eee;
  font-size: 12px;
  text-align: center;
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
<div class="jquery-script-clear"></div>
</div>
</div>
<img src="siedlungsbau.jpg" width="1140px" height="700px" border="0" usemap="#Map" />
<map name="Map" id="Map">
    <area data-nbmembre="Fluss" target="" alt="Fluss" title="65m²" href="https://ti-house.de/ti-house-1" coords="105,372,260,320,253,246,258,241,177,204,19,246,32,306" shape="poly">
    <area data-nbmembre="Fluss" target="" alt="Fluss" title="70m²" href="https://ti-house.de/test/a/example/index.html" coords="425,412,545,357,538,255,547,251,441,214,344,245,339,242,295,257,303,325,364,356,390,369,410,394" shape="poly">
    <area data-nbmembre="Fluss" target="" alt="Fluss" title="75m²" href="https://ti-house.de/test/a/example/index.html" coords="809,575,916,479,919,365,926,357,806,318,812,311,771,298,668,353,651,346,612,369,614,488" shape="poly">
    <area data-nbmembre="Fluss" target="" alt="Fluss" title="80m²" href="https://ti-house.de/test/a/example/index.html" coords="675,333,696,338,767,297,800,304,815,311,810,320,852,333,879,322,881,236,886,227,766,198,754,195,725,205,734,211,671,238,674,247" shape="poly">
    <area data-nbmembre="Fluss" target="" alt="Fluss" title="85m²" href="https://ti-house.de/test/a/example/index.html" coords="614,307,671,285,668,241,701,220,701,193,720,184,607,157,596,159,569,169,578,173,509,192,515,236,542,245,544,291" shape="poly">
    <area data-nbmembre="Fluss" target="" alt="Fluss" title="90m²" href="https://ti-house.de/test/a/example/index.html" coords="920,408,1021,430,1091,367,1089,282,1104,274,949,236,945,242,927,238,908,252,919,256,881,284,881,339,930,355" shape="poly">
  </map>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
<script type="text/javascript" src="../build/jquery.mapify.js"></script> 
<script type="text/javascript">
$(function(){
	
	$("img[usemap]:first").mapify({
		popOver: {
			content: function(zone){
				return "<strong>"+zone.attr("data-title")+"</strong>"+zone.attr("data-nbmembre")+" Ti-House";
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
				return "<strong>"+zone.attr("data-title")+"</strong>"+zone.attr("data-nbmembre")+" Ti-House";
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
	
	$("#dynamicClassChange").click(function() {
		$(this).attr("data-hover-class","hover-green");
	});
	
});
</script>
</body>
</html>
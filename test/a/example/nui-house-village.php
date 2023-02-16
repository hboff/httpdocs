<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />



<link rel="stylesheet" href="https://nui-house.com/style.css">
<link rel="stylesheet" href="https://nui-house.com/style2.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
  height: 100%;
  color: #777;
  line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
  background-image: url('/bilder/tiny2.jpg');
height:350px; width: 100% !important; object-fit: cover; object-position:center;
}

/* Second image (Portfolio) */
.bgimg-2 {
  background-image: url('/bilder/nature.jpg');
  min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
  background-image: url('/bilder/tiny2.jpg');
  min-height: 650px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1600px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    min-height: 400px;
  }
}
</style>

<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
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

<!-- Container (About Section) -->
<div class="jquery-script-clear"></div>

<img src="https://nui-house.com/bilder/new/village.jpg" width="3840px" height="2160px" border="0" usemap="#Map" />
<map name="Map" id="Map">
    <area data-nbmembre="Fluss" target="" alt="tiny1" title="tiny1" href="https://nui-house.com/nui-6.php" coords="2753,1011,2753,870,2834,860,3443,881,3411,1076,3346,1108,3114,1065" shape="poly">
    <area data-nbmembre="Fluss" target="" alt="tiny2" title="tiny2" href="https://nui-house.com/nui-6.php" coords="2559,968,2569,860,2515,789,2294,784,2294,827,2294,935,2408,946,2418,962" shape="poly">
    <area data-nbmembre="30 m²" target="" alt="tiny3" title="tiny3" href="https://nui-house.com/nui-6.php" coords="2014,968,2014,860,1944,849,1545,881,1545,1005,1599,1027,1836,995" shape="poly">
    <area data-nbmembre="ca. 13 m²" target="" alt="Nui-6m" title="Nui-6m" href="https://nui-house.com/nui-6.php" coords="671,1092,649,919,1011,887,1048,903,1059,1038,1124,1043,1075,1076,1021,1076,908,1086,914,1113,854,1113,844,1119,698,1113" shape="poly">
    <area data-nbmembre="ca. 11 m²" target="" alt="Nui-5.4m" title="Nui-5.4m" href="https://nui-house.com/nui-6.php" coords="401,1248,439,1232,401,1011,390,962,175,978,142,1043,186,1259,229,1275,315,1259" shape="poly">
</map>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
<script type="text/javascript" src="../build/jquery.mapify.js"></script> 
<script type="text/javascript">
$(function(){
	
	$("img[usemap]:first").mapify({
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
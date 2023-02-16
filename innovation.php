<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="/innovationen-style.css" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

		<title>Innovation</title>
	</head>
<style>  
.dg.ac{
display:none;
}
@media (min-width:601px){
.dec {
margin-left:25vw;
margin-right:25vw;

}
.sectionerbase {
	color: white;
	touch-action:pan-y;
   	 position: absolute;
    	top: 0%;  
    	left: 0%; 
	width:50vw;
	pointer-events: none;
	touch-action:pan-y;
}}
</style>
	<body>

		<canvas></canvas>
		<section class="sectionerfooter" style="z-index:5;margin-top:150vh;">
		<? include("incl/innovation-nav.php");?>
		</section>
		
      		<h2 style="font-family: Verdana,sans-serif; font-size: 9em; color:white; z-index:5;">INNOVATION</h2>
      		<h2 style="font-family: Verdana,sans-serif; font-size: 3em; color:white; z-index:5;margin-top:100vh;">Every project is created at the intersection between design and technology, making the future — today</h2>

		<section class="sectionerbase dec" style="z-index:5;margin-top:150vh;">

			<div class="w3-half" style="margin-top:50vh; margin-left:25vh; 	pointer-action:none;touch-action:pan-y;">
			<div class="w3-card w3-margin">
				    <img src="/bilder/cultural.jpg" alt="Stadtplanung" style="height:70vh; width: 100% !important; object-fit: cover; object-position:center;">
 				 <div class="w3-container">
				 <h3>Kultur</h3>
				 <h3>Titanic Belfast</h3>

 				 </div>
			</div>
			</div>	

			</div>	
	</section>


		<section class="sectionerbase dec" style="z-index:5;margin-top:290vh;">

			<div class="w3-half">
			<div class="w3-card w3-margin">
				    <img src="/bilder/jewel-waterfall.jpg" alt="Wasserfall Flughafen Singapur" style="height:70vh; width: 100% !important; object-fit: cover; object-position:bottom;">
 				 <div class="w3-container">
				 <h3>Waterfall</h3>
				 <h3>Jewel Changi Airport</h3>

 				 </div>
			</div>
			</div>	

			<div class="w3-half" style="margin-top:50vh;">
			<div class="w3-card w3-margin">
				    <img src="/bilder/facade-design.jpg" alt="Fassaden Design" style="height:70vh; width: 100% !important; object-fit: cover; object-position:center;">
 				 <div class="w3-container">
				 <h3>Fassaden Design</h3>
				 <h3>Museo Soumaya</h3>

 				 </div>
			</div>
			</div>	

			</div>	
	</section>

		<section class="sectionerfooter" style="z-index:5;margin-top:450vh;">
		<? include("incl/footer.php");?>
		</section>



		<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/105/three.min.js"></script>
		<script src="dat.gui.min.js"></script>
		<script src="fluid-background.js"></script>
	</body>
</html>
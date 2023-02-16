<style>
video {
	 object-fit: cover;
	 width: 100vw;
	 height: 100vh;
	 position: fixed;
	 top: 0;
	 left: 0;
}
 html, body {
	 height: 100%;
}
 html {
	 font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
	 font-size: 150%;
	 line-height: 1.4;
} body {
	 margin: 0;
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
	 letter-spacing: 3vw;
	 line-height: 1.2;
	 font-size: 3vw;
	 text-align: center;
}
 h1 span {
	 display: block;
	 font-size: 12vw;
	 letter-spacing: -1.3vw;
}
 main {
	 background: rgba(0, 0, 0, 0.66);
	 color: white;
	 position: relative;
	 padding: 1rem;
}
 main p {
	 max-width: 600px;
	 margin: 1rem auto;
}
    .frame {
      overflow: hidden;
	height:350px; width: 100% !important;
	object-fit: cover;
	object-position:center;
    }
    .zoomin img {
      height: 200px;
      width: 200px;
      -webkit-transition: all 2s ease;
      -moz-transition: all 2s ease;
      -ms-transition: all 2s ease;
      transition: all 2s ease;
    }
    .zoomin img:hover {
      width: 300px;
      height: 300px;
    } 
</style>

<!DOCTYPE html>
<html lang="de">
<meta charset="UTF-8">

<title>Baucampus</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="style5.css">

<body>
<? include("incl/nav2.php");?>

<div class="w3-container">
<div class="header-bg">
<div class="w3-row" style="border-top:1px solid grey;">
</div>

<video src="/video.mp4" autoplay loop playsinline muted></video>

<header class="viewport-header">
  <h1>
    <span>B A U C A M P U S</span>
  </h1>

</header>

</div>
<section>

<div class="w3-row-padding"> 

<div class="w3-third">
<div class="w3-card">
  	<a href="/design.php" class="hover-underline-animation"><img src="/one.jpg" alt="Design" style="height:350px; width: 100% !important; object-fit: cover; object-position:center;"></a>
  <div class="w3-container">
  <a href="/design.php"><h3 style="color:white;" class="hover-underline-animation">Design</h3></a>
  <h5 style="color:white;">„Designing a product is designing a relationship.“</h4>
  <h6 style="color:white;"><em>Steve Rogers</em></h6>

  </div>
</div>
</div>

<div class="w3-third" style="border-right:1px solid grey; border-left:1px solid grey;" >
<div class="w3-card-4">
  	<a href="/innovation.php" class="hover-underline-animation"><img src="/two.jpg" alt="Innovation" style="height:350px; width: 100% !important; object-fit: cover; object-position:center;"></a>
  <div class="w3-container">
    	<a href="/innovation.php"><h3 style="color:white;" class="hover-underline-animation">Innovation</h3></a>
  <h5 style="color:white;">„Innovation besteht darin, zu sehen was alle sehen und dabei zu denken, was niemand denkt.“</h5>
  <h6 style="color:white;"><em>Albert Szent-Györgyi von Nagyrápolt</em></h6>
  </div>
</div>
</div>

<div class="w3-third">
<div class="w3-card-4">
	<a href="/nachhaltigkeit.php" class="hover-underline-animation"><img src="three.jpg" alt="Nachhaltigkeit" style="height:350px; width: 100% !important; object-fit: cover; object-position:center;"></a>
  <div class="w3-container">
  <a href="/nachhaltigkeit.php"><h3 style="color:white;" class="hover-underline-animation">Nachhaltigkeit</h3></a>
  <h5 style="color:white;">„Jede neue Situation verlangt eine neue Architektur.“ </h4>
  <h6 style="color:white;"><em>Jean Nouvel</em></h6>

  </div>
</div>
</div>
</div>
<div>


<div class="w3-row" style="padding-top:10vh;padding-bottom:10vh;">
<p style="padding-top:10vh; padding-bottom:10vh; color:white;font-size: 3rem;font-family: Georgia, serif;font-style: italic; letter-spacing: 0.1rem;">Baucampus ein Neztwerk von Architekten, Designern, Ingenieuren und Planern, die zusammen an einer besseren Zukunft arbeiten.</p>
</div>

    <div class="container">
        <div class="panel active" style="background-image: url('/one-1.jpg');">
            <h3>Explore The World</h3>
        </div>

        <div class="panel"
            style="background-image: url('/one-2.jpg');">
            <h3>Endless Journey</h3>
        </div>

        <div class="panel"
            style="background-image: url('/one-3.jpg');">
            <h3>Modern Landmarks</h3>
        </div>

        <div class="panel"
            style="background-image: url('/one-4.jpg');">
            <h3>City based on Nature</h3>
        </div>

        <div class="panel"
            style="background-image: url('/one-5.jpg');">
            <h3>Complex Building</h3>
        </div>
    </div>

<? include("incl/footer.php");?>

</section>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$(window).scroll(function(){
			$('.header-bg').css("opacity", 1 -
				$(window).scrollTop()/800)
		})
	})
</script>

<script src="script5.js"></script>
</body>
</html>   


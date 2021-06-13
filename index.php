<!DOCTYPE html>
<html>

<head>

	<title>Virtual Piano</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta charset="utf-8">

	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" href="https://www.musicca.com/scripts/piano/piano.min.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">


</head>

<body bgcolor="#f5f3f0" onload="showNotes()">

	<!-- Navbar -->
	<header>
		<nav>
			<div class="nav-wrapper">
				<a href="/VirtualPiano/" class="brand-logo center">
					<b><span style="color: black;">V</span>irtual <span style="color: black;">P</span>iano</b>
				</a>
			</div>
		</nav>
	</header>

	<!-- Slideshow container -->
	<div style="padding-top:10px; text-align: center; background-image: url('images/div2 bkg.jpg')">

		<div class="slideshow-container">
			<!-- Full-width images with number and caption text -->
			<div class="mySlides fade">
				<div class="numbertext">1 / 3</div>
				<img src="images/piano3.jpg" style="width:100%">
			</div>

			<div class="mySlides fade">
				<div class="numbertext">2 / 3</div>
				<img src="images/piano2.jpg" style="width:100%">
			</div>

			<div class="mySlides fade">
				<div class="numbertext">3 / 3</div>
				<img src="images/piano.jpg" style="width:100%">
			</div>
		</div>

		<!-- The dots/circles -->
		<div style="text-align:center">
			<span class="dot"></span>
			<span class="dot"></span>
			<span class="dot"></span>
		</div>
	</div>
	<br>


	<!-- PIANO START -->
	<a id="piano_start"></a>
	<div class="container" style="margin-top: 1%;">
		<a id="showHideNotes" class="waves-effect waves-light btn" onclick="showNotes()">Hide Notes</a>
		<a class="waves-effect waves-light btn" href="#controls">Controls</a>
	</div>

	<div class="container" style="padding: 15px 0px 35px;">
		
		<div class="piano-wrapper z-depth-3" style="border-style: solid; border-width: 50px 4px 0px 4px; border-radius: 20px 20px 8% 8% ; border-color: #D2B48C;"><!-- rgb(157, 135, 109) -->
			<ul class="piano">
				<li class="key">
					<span class="white-key" id="c3"><i class="C"></i></span>
					<span class="black-key" id="c-3"><i class="Cs"></i></span>
				</li>
				<li class="key">
					<span class="white-key" id="d3"><i class="D"></i></span>
					<span class="black-key" id="d-3"><i class="Ds"></i></span>
				</li>
				<li class="key">
					<span class="white-key" id="e3"><i class="E"></i></span>
				</li>
				<li class="key">
					<span class="white-key" id="f3"><i class="F"></i></span>
					<span class="black-key" id="f-3"><i class="Fs"></i></span>
				</li>
				<li class="key">
					<span class="white-key" id="g3"><i class="G"></i></span>
					<span class="black-key" id="g-3"><i class="Gs"></i></span>
				</li>
				<li class="key">
					<span class="white-key" id="a3"><i class="A"></i></span>
					<span class="black-key" id="a-3"><i class="As"></i></span>
				</li>
				<li class="key">
					<span class="white-key" id="b3"><i class="B"></i></span>
				</li>
				<li class="key">
					<span class="white-key" id="c4"><i class="C"></i></span>
					<span class="black-key" id="c-4"><i class="Cs"></i></span>
				</li>
				<li class="key">
					<span class="white-key" id="d4"><i class="D"></i></span>
					<span class="black-key" id="d-4"><i class="Ds"></i></span>
				</li>
				<li class="key">
					<span class="white-key" id="e4"><i class="E"></i></span>
				</li>
				<li class="key">
					<span class="white-key" id="f4"><i class="F"></i></span>
					<span class="black-key" id="f-4"><i class="Fs"></i></span>
				</li>
				<li class="key">
					<span class="white-key" id="g4"><i class="G"></i></span>
					<span class="black-key" id="g-4"><i class="Gs"></i></span>
				</li>
				<li class="key">
					<span class="white-key" id="a4"><i class="A"></i></span>
					<span class="black-key" id="a-4"><i class="As"></i></span>
				</li>
				<li class="key">
					<span class="white-key" id="b4"><i class="B"></i></span>
				</li>
				<li class="key">
					<span class="white-key" id="c5"><i class="C"></i></span>
					<span class="black-key" id="c-5"><i class="Cs"></i></span>
				</li>
				<li class="key">
					<span class="white-key" id="d5"><i class="D"></i></span>
					<span class="black-key" id="d-5"><i class="Ds"></i></span>
				</li>
				<li class="key">
					<span class="white-key" id="e5"><i class="E"></i></span>
				</li>
				<li class="key">
					<span class="white-key" id="f5"><i class="F"></i></span>
					<span class="black-key" id="f-5"><i class="Fs"></i></span>
				</li>
				<li class="key">
					<span class="white-key" id="g5"><i class="G"></i></span>
					<span class="black-key" id="g-5"><i class="Gs"></i></span>
				</li>
				<li class="key">
					<span class="white-key" id="a5"><i class="A"></i></span>
					<span class="black-key" id="a-5"><i class="As"></i></span>
				</li>
				<li class="key">
					<span class="white-key" id="b5"><i class="B"></i></span>
				</li>
			</ul>
		</div>

		<div class="row" style="margin-bottom: auto;">
			<form>
				<div class="input-field col s4 m3">
					<div class="row">
						<div class="col s2">
							<p class="form_label"><b>R:</b></p>
						</div>
						<div class="col s10">
							<input type="number" min="0" step="1" id="R" name="R" placeholder="210"/>
						</div>
					</div>
				</div>
				<div class="input-field col s4 m3">
					<div class="row">
						<div class="col s2">
							<p class="form_label"><b>G:</b></p>
						</div>
						<div class="col s10">
							<input type="number" min="0" step="1" id="G" name="G" placeholder="180"/>
						</div>
					</div>
				</div>
				<div class="input-field col s4 m3">
					<div class="row">
						<div class="col s2">
							<p class="form_label"><b>B:</b></p>
						</div>
						<div class="col s10">
							<input type="number" min="0" step="1" id="B" name="B" placeholder="140" />
						</div>
					</div>
				</div>
				<div class="input-field col s12 m3 center">
					<a class="waves-effect waves-light btn" onclick="changeColor()">Change Colour</a>
				</div>
			</form>
		</div>
		
		<p class="form_label center" style="font-size: large; margin: 0;" id="or">OR</p>

		<div class="row">	

			<div class="input-field col s6 m6 center offset-m1">
				<div class="row">
					<div class="col s4 offset-s2">
						<p class="form_label"><b>Enter Colour:</b></p>
					</div>
					<div class="col s5">
						<input type="text" id="colorName" placeholder="#d2b48c or Tan">
						<!-- #9d876d or Brown -->
					</div>
				</div>
			</div>

			<div class="input-field col s6 m4 center">
				<a class="waves-effect waves-light btn" onclick="changeColorText()">Change Colour</a>
			</div>

		</div>
		

	</div>

	<!-- How To -->
	<div class="container cont_margin">
		<h3 id="controls" style="padding-top: 30px;font-weight: bolder;">Controls
			<span class="piano_btn">
				<a class="waves-effect waves-light btn" href="#piano_start">Back to piano</a>
			</span>
		</h3>
	</div>

	<div class="container" style="margin-bottom: 100px">
		<div class="row">
			<div class="col s12 m6">
				<div class="card z-depth-3" style="border: 3px solid #ee6e73; height: 100%;">
					<div class="card-image">
						<img src="./images/mouse_click.png">
					</div>
					<div class="card-content">
						<p>Click on any key of the piano that you want to play with your mouse.</p>
					</div>
					<div class="card-action form_label" style="font-size: medium; padding: 0 0 1px 24px;">
						<p>Controls<p>
					</div>
				</div>
			</div>
			<div class="col s12 m6">
				<div class="card z-depth-3" style="border: 3px solid #ee6e73;">
					<div class="card-image">
						<img src="./images/keyboard.png">
					</div>
					<div class="card-content">
						<p>Choose any key on the piano by clicking on its corresponding key on the keyboard as shown above.<br>Select the octave with numeric keys 3, 4, or 5.</p>
					</div>
					<div class="card-action form_label" style="font-size: medium; padding: 0 0 1px 24px;">
						<p>Controls<p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer class="page-footer">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">About</h5>
					<p class="grey-text text-lighten-4">
						This is a virtual piano. It can be played by clicking on the keys of the virtual piano.<br>
						It has been built using materialize css and js and various css components from w3 schools.
					</p>
				</div>
				<div class="col l4 offset-l2 s12">
					<h5 class="white-text">Links</h5>
					<ul>
						<li><a class="grey-text text-lighten-3" href="https://www.materializecss.com" target="_blank">Materialize</a></li>
						<li><a class="grey-text text-lighten-3" href="https://www.w3schools.com" target="_blank">W3 Schools</a></li>
					</ul>

				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				Made by Rahul Jain
				<a class="grey-text text-lighten-4 right" href="#top">Go to top</a>
			</div>
		</div>
	</footer>


	<!--JavaScript at end of body for optimized loading-->
	<script type="text/javascript" src = "./js/jquery.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript" src="./js/script.js"></script>

</body>
</html>
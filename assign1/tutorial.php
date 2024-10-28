<!DOCTYPE html>
<html lang="en">
  <head>
	<!--Metadata-->
	<meta charset="UTF-8">
	<meta name="description" content="Herbarium">
	<meta name="keywords" content="HTML, CSS">
	<meta name="author" content="Herbivore">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Stylesheets-->
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer">
	<link rel="icon" href="images/logo2.png" type="image/x-icon">
	<title>Tutorial</title>
  </head>
  <!--Body-->
  <body class="tutorial-body">
  	<?php include('./assign1/header.php'); ?>
	<article class="tutorial-content">
		<h1 class="invi">&nbsp;</h1>
		<section class="tutorial-steps">
			<h2 class="tutorial-heading1">Tutorial</h2>
			<h3 class="tutorial-heading2">How to transfer a fresh leaf into herbarium specimens?</h3>
			<figure class="tutorial-pic">
				<figcaption>Making herbarium at home</figcaption>
				<img src="images/tutorial/tutorial/herbariumdiy.jpg" alt="diy herbarium">
			</figure>
			<div class="tutorial-tools">
				<dl>
					<dt>Tools you will need:</dt>
					<dd>Refer to:<a href="tools.php">Tools Page</a></dd>
				</dl>
			</div>
			<div>
				<ol class="tutorial-olist">
					<li>
						Choose suitable plants
						<img src="images/tutorial/tutorial/tutorialstep1.jpeg" alt="tutorial step 1">
						<ul>
							<li>Try to look for plants that feel dry when touched.</li>
							<li>Choose 1-3 branches around 30cm long.</li>
							<li>For plants with flowers, seeds or fruits, include on one of the branches.</li>
							<li>Separate parts of plants from different species.</li>
						</ul>
					</li>
					<li>
						Lay out plants
						<img src="images/tutorial/tutorial/tutorialstep2.jpg" alt="tutorial step 2">
						<ul>
							<li>Cut off bits from branches and leaves that aren't needed.</li>
							<li>Lay out plants according to their species.</li>
						</ul>
					</li>
					<li>
						Drying
						<img src="images/tutorial/tutorial/tutorialstep3.jpg" alt="tutorial step 3">
						<ul>
							<li>Place four sheets of paper on empty press.</li>
							<li>Arrange one plant on paper without plant elements touching</li>
							<li>Place four sheets of paper on top of plant.</li>
							<li>Repeat steps for all plants then screw down the press.</li>
							<li>For first two weeks, replace paper every second day. As plant becomes drier,
							allow longer times before replacing paper. It will approximately take six weeks to finish.</li>
						</ul>
					</li>
					<li>
						Mounting
						<img src="images/tutorial/tutorial/tutorialstep4.jpg" alt="tutorial step 4">
						<ul>
							<li>Place parts of dry plant to be used on cardboard.</li>
							<li>Place name tag on cardboard.</li>
							<li>Apply enough double-sided tape to cover plant onto cutting mat.</li>
							<li>Remove backing layer then cut necessary length with craft knife.</li>
							<li>Carefully lift plant with tip of craft knife then place onto double-sided tape, 
							applying pressure.</li>
							<li>Use thin strips of masking tape to stick plant stems and loose parts.</li>
						</ul>
					</li>
				</ol>
			</div>
		</section>
		<section class="tutorial-aside">
			<h4 class="invi">aside</h4>
			<aside>
				<p id="tutorial-asidetitle">Herbarium Trivia</p>
				<figure>
					<figcaption>Herbarium from 1898</figcaption>
					<img src="images/tutorial/tutorial/herbariumold.jpg" alt="herbarium old">
				</figure>
				<p id="tutorial-asidetext">
					Herbarium specimens can last hundreds of years if properly cared for. 
					The best condition for storage includes low temperature (from 50–65ºF), low humidity, low light, 
					and infrequent handling.
				</p>
			</aside>
		</section>
	</article>
	<footer>
		<div class="footerrow">
			<div class="footercol">
				<h4>Herbarium</h4>
				<ul class="footerlinks">
					<li><a href="classify.php">Plants Classification</a></li>
					<li><a href="identify.php">Identify</a></li>
					<li><a href="tutorial.php">Tutorial</a></li>
					<li><a href="tools.php">Tools</a></li>
					<li><a href="care.php">Care</a></li>
				</ul>
			</div>
			<div class="footercol">
				<h4>Other</h4>
				<ul class="footerhelp">
					<li><a href="contribute.php">Contribution</a></li>
					<li><a href="tutorial.php">Enquiry</a></li>
					<li><a href="group.php">Group</a></li>
				</ul>
			</div>
			<div class="footercol">
				<h4>Sources</h4>
				<ul class="tutorial-footerlink">
					<li><a href="https://blog.babylonstoren.com/how-to-press-plants-to-make-a-herbarium/">Tutorial Steps/Steps 2-4 images</a></li>
					<li><a href="https://www.hobbyfarms.com/how-to-build-use-your-own-plant-press/">Making herbarium image</a></li>
					<li><a href="https://www.freshlypressed.ch/blog/2017/7/2/herbarium-how-to-1-ythsk">Tutorial Step 1 image</a></li>
					<li><a href="https://www.rbge.org.uk/science-and-conservation/herbarium/specimen-preparation-care/care-and-conservation-of-herbarium-specimens/#:~:text=The%20herbarium%20collections%20are%20housed,damage%20the%20fragile%20plant%20material).">Herbarium storage info</a></li>
					<li><a href="https://eeb.utoronto.ca/research/facilities-centres/green-plant-herbarium/">1898 Herbarium image</a></li>>
					<li><a href="https://cdnjs.com/libraries/font-awesome">Nav Bars Icon</a></li>
					<li><a href="https://fonts.google.com/icons?selected=Material+Symbols+Outlined:close:FILL@0;wght@400;GRAD@0;opsz@24&icon.size=24&icon.color=%23e8eaed">Nav X Icon</a></li>
					<li><a href="https://youtu.be/8eFeIFKAKHw?si=DGfhqh9YwUqYHUk3">Navbar CSS</a></li>
				</ul>
			</div>
		</div>
	</footer>
  </body>
</html> 

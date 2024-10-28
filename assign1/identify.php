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
	<title>Identify</title>
  </head>
  <!--Body-->
  <body>
  	<?php include('./assign1/header.php'); ?>
	<article class="identify-content">
		<h1 class="invi">&nbsp;</h1>
		<section class="identify-upload">
			<h2 class="invi">&nbsp;</h2>
			<div class="identify-heading">
				<h3>Plant Identification</h3>
				<h4>Please upload a photo of your plant here. We will identify its scientific name, common name, and display photos of its herbarium specimens.</h4>
			</div>
			<br><br>
			<div>
				<dl class="identify-list">
					<dt>
						Upload Photo
					</dt>
					<dd>
						<br>
						<input type="file" accept="image/*" id="upload" name="upload" required>
					</dd>
				</dl>
			</div>
		</section>
		<section class="identify-aside">
			<h5 class="invi">&nbsp;</h5>
			<aside>
				<p id="identify-asidetitle">Endiandra Impressicosta</p>
				<figure>
					<img src="images/identify/Ediandra1.jpg" alt="endiandra">
					<img src="images/identify/Endiandra2.jpg" alt="endiandra">
					<figcaption>Endiandra Images</figcaption>
				</figure>
				<ol>
					<li>
						Common Name: Steelbutt
					</li>
					<li>
						Scientific Name: <br>Endiandra impressicosta C.K.Allen
					</li>
					<li>
						Family: Lauraceae
					</li>
					<li>
						Genus: Endiandra
					</li>
				</ol>
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
				<ul class="identify-footerlink">
					<li><a href="https://youtu.be/5Fws9daTtIs?si=dCdRcoqgPeatp7eD">Image Upload</a></li>
					<li><a href="https://www.vedantu.com/biology/herbarium">Herbarium Info</a></li>
					<li><a href="https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:464410-1">Endiandra Info</a></li>
					<li><a href="https://v3.boldsystems.org/index.php/Taxbrowser_Taxonpage?taxid=223449">Endiandra Image1</a></li>
					<li><a href="https://artsandculture.google.com/asset/endiandra-impressicosta-c-k-allen/_gFZ0ysx4hskKg">Endiandra Image2</a></li>
					<li><a href="https://cdnjs.com/libraries/font-awesome">Nav Bars Icon</a></li>
					<li><a href="https://fonts.google.com/icons?selected=Material+Symbols+Outlined:close:FILL@0;wght@400;GRAD@0;opsz@24&icon.size=24&icon.color=%23e8eaed">Nav X Icon</a></li>
					<li><a href="https://youtu.be/8eFeIFKAKHw?si=DGfhqh9YwUqYHUk3">Navbar CSS</a></li>
				</ul>
			</div>
		</div>
	</footer>
  </body>
</html> 

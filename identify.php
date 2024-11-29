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
        <link rel="icon" href="images/icon.png" type="image/x-icon">
	<title>Identify</title>
  </head>
  <!--Body-->
  <body>
	<?php include('header.inc'); ?>
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
	<?php 
		$sources=[
			["url"=>"https://fonts.google.com/icons?selected=Material+Symbols+Outlined:close:FILL@0;wght@400;GRAD@0;opsz@24&icon.size=24&icon.color=%23e8eaed","label"=>"Nav X Icon"],
			["url"=>"https://youtu.be/EgqwdlY9iaQ?si=o7AitaXCotQ07HXe","label"=>"Responsive Navbar"],
			["url"=>"https://cdnjs.com/libraries/font-awesome","label"=>"Nav Bar Icon"],
			["url"=>"https://youtu.be/5Fws9daTtIs?si=dCdRcoqgPeatp7eD","label"=>"Image Upload"],
			["url"=>"https://www.vedantu.com/biology/herbarium","label"=>"Herbarium Info"],
			["url"=>"https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:464410-1","label"=>"Endiandra Info"],
			["url"=>"https://v3.boldsystems.org/index.php/Taxbrowser_Taxonpage?taxid=223449","label"=>"Endiandra Image1"],
			["url"=>"https://artsandculture.google.com/asset/endiandra-impressicosta-c-k-allen/_gFZ0ysx4hskKg","label"=>"Endiandra Image2"],
		];

		include('./footer.inc'); 
	?>
  </body>
</html> 

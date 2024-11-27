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
	<title>Guide - Tools </title>
  </head>
  <!--Body-->
  <body class="tutorial-body">
	<?php include('header.inc.php'); ?>
	<main class="tutorial-content">
		<section class="tutorial-steps">
			<h1 class="tutorial-heading1">Tools</h1>
			<h2 class="tutorial-heading2">Tools for Herbarium Specimen Preparation</h2>
			<div class="tutorial-tools">
				<dl>
					<dt>Tools you will need:</dt>
					<img src="images/tutorial/tools/Toolsneed.png" alt="toolspicture">

				</dl>
			</div>
			<div>
				<ol class="tutorial-olist">
					<li>
						Each tool functionality - Tools based on numbers
						<ul>
							<li>1.-Plant Press: A plant press is crucial for flattening and drying specimens. It typically consists of two wooden or hardboard panels, blotting paper, and straps to secure the materials.</li>
							<li>2.-Secateurs or Scissors: These are used to collect plant material in the field, especially for cutting thicker stems or branches.</li>
							<li>3.-Blotting Paper: This is used inside the plant press to absorb moisture from the plants during the drying process.</li>
							<li>4.-Mounting Materials: After drying, the specimens are mounted on archival-quality herbarium sheets using glue, adhesive strips, or linen tape. Acid-free paper ensures the longevity of the mounted specimens​</li>
						</ul>
					</li>
				</ol>
				<br><br>
			</div>
		</section>
		<section class="tutorial-aside">
			<aside>
				<p id="tutorial-asidetitle">Herbarium Trivia</p>
				<figure>
					<figcaption>Did you know?</figcaption>
					<img src="images/tutorial/tools/asidepic.jpg" alt="asidepic">
				</figure>
				<p id="tutorial-asidetext">
					Proper care of herbarium tools is essential to ensure successful preservation of plant specimens. 
					Tools like plant presses should be kept dry and clean to avoid contamination.
				</p>
			</aside>
		</section>
	</main>
	<?php 
		$sources=[
			["url"=>"https://fonts.google.com/icons?selected=Material+Symbols+Outlined:close:FILL@0;wght@400;GRAD@0;opsz@24&icon.size=24&icon.color=%23e8eaed","label"=>"Nav X Icon"],
			["url"=>"https://youtu.be/EgqwdlY9iaQ?si=o7AitaXCotQ07HXe","label"=>"Responsive Navbar"],
			["url"=>"https://cdnjs.com/libraries/font-awesome","label"=>"Nav Bar Icon"],
			["url"=>"https://www.universityproducts.com/archival-storage/natural-history/herbarium-supplies?","label"=>"Tools"],
		];

		include('./footer.inc.php'); 
	?>
  </body>
</html> 
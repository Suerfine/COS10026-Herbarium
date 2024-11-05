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
	<title>Contribute</title>
  </head>
  <body>    
	<?php include('/xampp/htdocs/assign1/header.php'); ?>
    <main>
		<h1 class="contribute-title">Plant contribution</h1>
        <h3 class="contribute-subtitle">Just one form, away from sharing your herbarium to the world. We thank for your contribution.</h3>
        <form class="contribute-form">
            <div class="contribute-formgroup">
                <label class="contribute-form-label">Plant Name:</label>
                <input name="plantName" class="contribute-form-control" type="text" maxlength="25" pattern="[a-zA-Z]+" required>
            </div>
			<fieldset class="contribute-family-speci-genere">
				<div class="contribute-formgroup">
					<label class="contribute-form-label">Plant Family:</label>
					<select name="family" class="contribute-form-control" required>
						<option value="" selected>Please choose a family</option>
						<option value="Dipterocarpaceae">Dipterocarpaceae</option>
						<option value="Lauraceae">Lauraceae</option>
						<option value="Burseraceae">Burseraceae</option>
					</select>
				</div>
				<div class="contribute-formgroup">
					<label class="contribute-form-label">Plant Genus:</label>
					<select name="genus" class="contribute-form-control" required>
						<option value="" selected>Please choose a genus</option>
						<option value="Vatica">Vatica</option>
						<option value="Dipterocarpus">Dipterocarpus</option>
						<option value="Hopea">Hopea</option>
						<option value="Actinodaphne">Actinodaphne</option>
						<option value="Endiandra">Endiandra</option>
						<option value="Beilschmiedia">Beilschmiedia</option>
						<option value="Canarium">Canarium</option>
						<option value="Dacryodes">Dacryodes</option>
						<option value="Santiria">Santiria</option>
					</select>
				</div>
				<div class="contribute-formgroup">
					<label class="contribute-form-label">Plant Species:</label>
					<select name="species" class="contribute-form-control" required>
						<option value="" selected>Please choose a species</option>
						<option value="Vatica adenanii">Vatica adenanii </option>
						<option value="Vatica sarawakensis">Vatica affinis</option>
						<option value="Vatica cauliflora">Vatica cauliflora</option>
						<option value="Hopea celebica">Hopea celebica</option>
						<option value="Hopea discolor">Hopea discolor</option>
						<option value="Hopea gregaria">Hopea gregaria</option>
						<option value="Endiandra baillonii">Endiandra baillonii</option>
						<option value="Endiandra brassii">Endiandra brassii</option>
						<option value="Endiandra cuneata">Endiandra cuneata</option>
					</select>
				</div>
			</fieldset>
			<div class="contribute-file-row">
				<div class="contribute-formgroup">
					<label class="contribute-form-label">Your Herbarium:</label>
					<input name="herbariumImg" type="file" class="contribute-form-control" accept="image/*" required>
				</div>
				<div class="contribute-formgroup">
					<label class="contribute-form-label">A fresh leaf:</label>
					<input name="herbariumLeafImg" type="file" class="contribute-form-control" accept="image/*" required>
				</div>
			</div>
            <div class="contribute-form-row">
                <button>SUBMIT FORM</button>
            </div>
        </form>
    </main>
	<?php 
		$sources=[
			["url"=>"https://fonts.google.com/icons?selected=Material+Symbols+Outlined:close:FILL@0;wght@400;GRAD@0;opsz@24&icon.size=24&icon.color=%23e8eaed","label"=>"Nav X Icon"],
			["url"=>"https://youtu.be/EgqwdlY9iaQ?si=o7AitaXCotQ07HXe","label"=>"Responsive Navbar"],
			["url"=>"https://cdnjs.com/libraries/font-awesome","label"=>"Nav Bar Icon"],
		];

		include('/xampp/htdocs/assign1/footer.inc'); 
	?>
  </body>
</html>
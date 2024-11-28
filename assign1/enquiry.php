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
	<link rel="stylesheet" type="text/css" href="./styles/style.css">
	<link rel="icon" href="../images/logo2.png" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer">
	<title>Enquiry</title>
  </head>
  <!--Body-->
  <body class="enquiry-body">
	<?php include('/xampp/htdocs/assign1/header.php'); ?>
	<article class="enquiry-formbox">
		<h1 class="invi">&nbsp;</h1>
		<section class="enquiry-heading">
			<h2>Enquiry Form</h2>
			<h3>Please fill the form to place your order.</h3>
		</section>
		<section class="enquiry-form">
		<h4 class="invi">&nbsp;</h4>
			<form method="POST" action="enquiry_process.php">
				<table class="enquiry-table">
					<tr>
						<td>
							<label for="fname">
								First Name:
							</label>
							<input type="text" id="fname" name="fname" maxlength="25" pattern="[a-zA-Z\s\-]+" required>
						</td>
					</tr>
					<tr>
						<td>
							<label for="lname">
								Last Name:
							</label>
							<input type="text" id="lname" name="lname" maxlength="25" pattern="[a-zA-Z]+" required>
						</td>
					</tr>
					<tr>
						<td>
							<label for="email">
								Email Address:
							</label>
							<input type="email" id="email" name="email" required>
						</td>
					</tr>
					<tr>
						<td>
							<fieldset>
								<table>
									<tr>
										<td>
											<label for="street" class="enquiry-street">
												Street address:
											</label>
											<textarea id="street" name="street" maxlength="40" required></textarea>
										</td>
									</tr>
									<tr>
										<td>
											<label for="city">
												City/town:
											</label>
											<input type="text" id="city" name="city" maxlength="20" required>
										</td>
									</tr>
									<tr>
										<td>
											<label for="enquiry-state">
												State:
											</label>
											<select id="enquiry-state" name="state" required>
												<option value="" disabled selected hidden>&nbsp;</option>
												<option value="Sarawak">Sarawak</option>
												<option value="Perlis">Perlis</option>
												<option value="Kedah">Kedah</option>
												<option value="Penang">Penang</option>
												<option value="Perak">Perak</option>
												<option value="Selangor">Selangor</option>
												<option value="Negeri Sembilan">Negeri Sembilan</option>
												<option value="Melaka">Melaka</option>
												<option value="Johor">Johor</option>
												<option value="Kelantan">Kelantan</option>
												<option value="Terengganu">Terengganu</option>
												<option value="Pahang">Pahang</option>
												<option value="Sabah">Sabah</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>
											<label for="postcode">
												Postcode:
											</label>
											<input type="text" id="postcode" name="postcode" minlength="5" maxlength="5" required>
										</td>
									</tr>
								</table>
							</fieldset>
						</td>
					</tr>
					<tr>
						<td>
							<label for="phone">
								Phone No.:
							</label>
							<input type="tel" id="phone" name="phone" maxlength="15" placeholder="+60XX-XXXXXXX" required>
						</td>	
					<tr>
						<td>	
							<label for="enquiry-tutorial">
								Tutorial:
							</label>
							<select id="enquiry-tutorial" name="tutorial" required>
								<option value="" disabled selected hidden>&nbsp;</option>
								<option value="tutorial">Tutorial</option>
								<option value="tools">Tools</option>
								<option value="care">Care</option>
							</select>
							<button type="submit">
								Submit
							</button>
						</td>
					</tr>
				</table>
			</form>
		</section>
	</article>
	<?php 
		$sources=[
			["url"=>"https://fonts.google.com/icons?selected=Material+Symbols+Outlined:close:FILL@0;wght@400;GRAD@0;opsz@24&icon.size=24&icon.color=%23e8eaed","label"=>"Nav X Icon"],
			["url"=>"https://youtu.be/EgqwdlY9iaQ?si=o7AitaXCotQ07HXe","label"=>"Responsive Navbar"],
			["url"=>"https://cdnjs.com/libraries/font-awesome","label"=>"Nav Bar Icon"],
			["url"=>"https://www.geeksforgeeks.org/design-a-feedback-form-using-html-and-css/","label"=>"Feedback Form Design"],
		];

		include('/xampp/htdocs/assign1/footer.inc'); 
	?>
  </body>
</html> 

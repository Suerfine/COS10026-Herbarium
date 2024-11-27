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
	<title>Registration</title>
  </head>
  <body>    
	<?php include('header.inc.php'); ?>
    <main>
		<h1 class="contribute-title">Registration</h1>
        <h3 class="contribute-subtitle">Register your account.</h3>
        <form class="contribute-form">
            <div class="contribute-formgroup">
                <label class="contribute-form-label">First Name:</label>
                <input name="fName" class="contribute-form-control" type="text" maxlength="25" pattern="[a-zA-Z]+" required>
            </div>
            <div class="contribute-formgroup">
                <label class="contribute-form-label">Last Name:</label>
                <input name="lName" class="contribute-form-control" type="text" maxlength="25" pattern="[a-zA-Z]+" required>
            </div>
            <div class="contribute-formgroup">
                <label class="contribute-form-label">Email address:</label>
                <input name="email" class="contribute-form-control" type="email" required>
            </div>
            <div class="contribute-formgroup">
                <label class="contribute-form-label">Password:</label>
                <input name="password" class="contribute-form-control" type="password" maxlength="25" pattern="[a-zA-Z]+" required>
            </div>
            <div class="contribute-form-row">
                <button>REGISTER ACCOUNT</button>
            </div>
        </form>
    </main>
	<?php 
		$sources=[
			["url"=>"https://fonts.google.com/icons?selected=Material+Symbols+Outlined:close:FILL@0;wght@400;GRAD@0;opsz@24&icon.size=24&icon.color=%23e8eaed","label"=>"Nav X Icon"],
			["url"=>"https://youtu.be/EgqwdlY9iaQ?si=o7AitaXCotQ07HXe","label"=>"Responsive Navbar"],
			["url"=>"https://cdnjs.com/libraries/font-awesome","label"=>"Nav Bar Icon"],
			["url"=>"https://www.geeksforgeeks.org/design-a-feedback-form-using-html-and-css/","label"=>"Feedback Form Design"],
		];

		include('./footer.inc.php'); 
	?>
  </body>
</html>
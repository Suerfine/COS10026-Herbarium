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
  	<?php include('./assign1/header.php'); ?>
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
				<ul class="enquiry-footerlink">
					<li><a href="https://www.geeksforgeeks.org/design-a-feedback-form-using-html-and-css/">Feedback Form Design</a></li>
					<li><a href="https://youtu.be/EgqwdlY9iaQ?si=o7AitaXCotQ07HXe">Navbar</a></li>
					<li><a href="https://cdnjs.com/libraries/font-awesome">Nav Icon</a></li>
				</ul>
			</div>
		</div>
	</footer>
  </body>
</html>
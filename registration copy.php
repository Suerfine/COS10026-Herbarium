<?php
include 'conn.php';

// Ensure all previous multi-query results are cleared
while(mysqli_more_results($conn) && mysqli_next_result($conn)) {
    ; // do nothing
}

// Check if the values exist before using them
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstName = isset($_POST['fName']) ? mysqli_real_escape_string($conn, $_POST['fName']) : null;
    $lastName = isset($_POST['lName']) ? mysqli_real_escape_string($conn, $_POST['lName']) : null;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : null;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($conn, $_POST['password']) : null;

    if ($firstName && $lastName && $email && $password) {
        // Encrypt the password
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (first_name, last_name, email, password, level) VALUES ('$firstName', '$lastName', '$email', '$passwordHash', 'USER')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "All fields are required.";
    }
} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Invalid request.";
}

mysqli_close($conn);
?>

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
	<?php include('/xampp/htdocs/assign1/header.php'); ?>
    <main>
		<h1 class="contribute-title">Registration</h1>
        <h3 class="contribute-subtitle">Register your account.</h3>
        <form class="contribute-form" action="registration.php" method="POST">
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
                <input name="password" class="contribute-form-control" type="password" maxlength="25" required>
            </div>
            <div class="contribute-form-row">
                <button type="submit">REGISTER ACCOUNT</button>
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

		include('/xampp/htdocs/assign1/footer.inc'); 
	?>
  </body>
</html>

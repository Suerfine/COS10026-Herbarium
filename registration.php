<?php
include 'conn.php';

// Ensure all previous multi-query results are cleared
while(mysqli_more_results($conn) && mysqli_next_result($conn));

//initalize message
$message="";

// Check if the values exist before using them
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userName = isset($_POST['uName']) ? mysqli_real_escape_string($conn, $_POST['uName']) : null;
    $firstName = isset($_POST['fName']) ? mysqli_real_escape_string($conn, $_POST['fName']) : null;
    $lastName = isset($_POST['lName']) ? mysqli_real_escape_string($conn, $_POST['lName']) : null;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : null;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($conn, $_POST['password']) : null;

    if ($userName && $firstName && $lastName && $email && $password) {
        //Check if username has been taken.
        $sql="SELECT 1 FROM `users` WHERE `user_name`='$userName'";
        if (($res=mysqli_query($conn, $sql)) && mysqli_num_rows($res)==0) {

            // Encrypt the password
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO users (user_name,first_name, last_name, email, password, level) VALUES ('$userName','$firstName', '$lastName', '$email', '$passwordHash', 'USER')";

            if (mysqli_query($conn, $sql)) {
                $message="Your account was created succesfully.";
            } else {
                $message="Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }else{
            $message="Username has already been taken";
        }
    } else {
        $message="All fields are required.";
    }
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
	<link rel="icon" href="images/icon.png" type="image/x-icon">
	<title>Registration</title>
  </head>
  <body>    
	<?php include('header.inc'); ?>
    <main>
		<h1 class="contribute-title">Registration</h1>
        <h3 class="contribute-subtitle">Register your account.</h3>
        <form id="registration_form" class="contribute-form" action="registration.php" method="POST">
            <?php if($message)echo "<span id=\"message\">".$message."</span>"?>
            <div class="contribute-formgroup">
                <label for="uName" class="contribute-form-label">User Name:</label>
                <input id="uName" name="uName" class="contribute-form-control" type="text" maxlength="25" pattern="[a-zA-Z]+" required>
            </div>
            <div class="contribute-formgroup">
                <label for="fName" class="contribute-form-label">First Name:</label>
                <input id="fName" name="fName" class="contribute-form-control" type="text" maxlength="25" pattern="[a-zA-Z]+" required>
            </div>
            <div class="contribute-formgroup">
                <label for="lName" class="contribute-form-label">Last Name:</label>
                <input id="lName" name="lName" class="contribute-form-control" type="text" maxlength="25" pattern="[a-zA-Z]+" required>
            </div>
            <div class="contribute-formgroup">
                <label for="email" class="contribute-form-label">Email address:</label>
                <input id="email" name="email" class="contribute-form-control" type="email" required>
            </div>
            <div class="contribute-formgroup">
                <label for="password" class="contribute-form-label">Password:</label>
                <input id="password" name="password" class="contribute-form-control" type="password" maxlength="25" required>
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
		include('footer.inc'); 
	?>
  </body>
</html>
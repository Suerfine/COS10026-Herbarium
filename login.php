<?php
session_start();  // Start session at the beginning of the script
include 'conn.php';

// Clear any previous results
while (mysqli_more_results($conn) && mysqli_next_result($conn)) {
    if ($result = mysqli_store_result($conn)) {
        mysqli_free_result($result);
    }
}

// Check if the user is already logged in and redirect
if (isset($_SESSION['user_id'])) {
    header("Location: contribute.php");
    exit;
}

$message = "";  // Initialize message variable

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : null;
    $password = isset($_POST['password']) ? $_POST['password'] : null;

    if (!$email || !$password) {
        $message = "Both email and password are required";
    } else {
        $sql = "SELECT `id`,`password`,`level` FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            if ($user = mysqli_fetch_assoc($result)) {
                if (password_verify($password, $user['password'])) {
                    // Set session variables on successful login
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['logged_in'] = true;
                    $_SESSION['level']=$user['level'];

                    // Redirect to contribute.php after successful login
                    header("Location: contribute.php");
                    exit;
                } else {
                    $message = "Invalid password";
                }
            } else {
                $message = "No user found with that email address";
            }
        } else {
            $message = "Query failed: " . mysqli_error($conn);
        }
    }
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="icon" href="images/icon.png" type="image/x-icon">
</head>
<body>
    <main>
        <h1 class="contribute-title">Login Page</h1>
        <h3 class="contribute-subtitle">Fill in the credentials</h3>    
        <form class="contribute-form" action="login.php" method="POST">
            <?php if (!empty($message)) echo "<div class='error-message'>$message</div>"; ?>
            <div class="contribute-formgroup">
                <label class="contribute-form-label">Email address:</label>
                <input name="email" type="email" id="email" class="contribute-form-control" required>
            </div>
            <div class="contribute-formgroup">
                <label class="contribute-form-label">Password:</label>
                <input name="password" id="password" type="password" class="contribute-form-control" maxlength="25" pattern="[a-zA-Z]+" required>
            </div>
            <div class="contribute-form-row">
                <button type="submit">LOGIN</button>
            </div>
        </form>
    </main>
</body>
</html>

<?php
session_start();  // Start session at the beginning of the script
include 'conn.php';

// Clear any previous results
while (mysqli_more_results($conn) && mysqli_next_result($conn)) {
    if ($result = mysqli_store_result($conn)) {
        mysqli_free_result($result);
    }
}

$origin=$_GET["origin"]??"index.php";
// Check if the user is already logged in and redirect
if (isset($_SESSION['user_id'])) {
    header("Location: $origin");
    exit;
}

$message = "";  // Initialize message variable

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = isset($_POST['uName']) ? mysqli_real_escape_string($conn, $_POST['uName']) : null;
    $password = isset($_POST['password']) ? $_POST['password'] : null;

    if (!$username || !$password) {
        $message = "Both email and password are required";
    } else {
        $sql = "SELECT `id`,`password`,`level` FROM users WHERE user_name = '$username'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            if ($user = mysqli_fetch_assoc($result)) {
                if (password_verify($password, $user['password'])) {
                    // Set session variables on successful login
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['logged_in'] = true;
                    $_SESSION['level']=$user['level'];

                    // Redirect to origin page after succesful login
                    header("Location: $origin");
                    exit;
                } else {
                    $message = "Invalid password";
                }
            } else {
                $message = "No user found with that username";
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
    <?php include_once("header.inc");?>
    <main>
        <h1 class="contribute-title">Login Page</h1>
        <h3 class="contribute-subtitle">Fill in the credentials</h3>    
        <form class="contribute-form" action="login.php?<?php if($origin)echo "origin=".$origin;?>" method="POST">
            <?php if (!empty($message)) echo "<div class='error-message'>$message</div>"; ?>
            <div class="contribute-formgroup">
                <label class="contribute-form-label">Username:</label>
                <input name="uName" type="text" id="uName" class="contribute-form-control" required>
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

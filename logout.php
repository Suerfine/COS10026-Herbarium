<?php
session_start();

// Check if the logout has been confirmed.
if (isset($_POST['confirm_logout'])) {
    // Unset all of the session variables.
    $_SESSION = array();

    // If it's desired to kill the session, also delete the session cookie.
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    // Finally, destroy the session.
    session_destroy();

    // Redirect to login page or homepage
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logout</title>
</head>
<body>
    <h1>Logout Confirmation</h1>
    <p>Are you sure you want to logout?</p>
    <form action="logout.php" method="post">
        <button type="submit" name="confirm_logout">Confirm Logout</button>
        <button type="button" onclick="location.href='home.php';">Cancel</button>
    </form>
</body>
</html>
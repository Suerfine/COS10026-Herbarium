<?php
include 'conn.php';

// Clear any previous results from multi-queries in conn.php
while (mysqli_more_results($conn) && mysqli_next_result($conn)) {
    if ($l_result = mysqli_store_result($conn)) {
        mysqli_free_result($l_result);
    }
}

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve and sanitize input
    $currentEmail = isset($_POST['currentEmail']) ? mysqli_real_escape_string($conn, $_POST['currentEmail']) : '';
    $newEmail = isset($_POST['newEmail']) ? mysqli_real_escape_string($conn, $_POST['newEmail']) : null;
    $currentPassword = isset($_POST['currentPassword']) ? $_POST['currentPassword'] : '';
    $newPassword = isset($_POST['newPassword']) ? $_POST['newPassword'] : null;

    // Verify current user exists
    $sql = "SELECT password FROM users WHERE email = '$currentEmail'";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die('Query failed: ' . mysqli_error($conn));
    }

    $user = mysqli_fetch_assoc($result);
    if (!$user) {
        die("No user found with the email $currentEmail");
    }

    // Verify current password
    if (!password_verify($currentPassword, $user['password'])) {
        die("Current password does not match our records.");
    }

    // Update the user's email and/or password
    $updates = [];
    if ($newEmail) {
        $updates[] = "email = '$newEmail'";
    }
    if ($newPassword) {
        $newPasswordHash = password_hash($newPassword, PASSWORD_DEFAULT);
        $updates[] = "password = '$newPasswordHash'";
    }

    if (!empty($updates)) {
        $updateSql = "UPDATE users SET " . implode(', ', $updates) . " WHERE email = '$currentEmail'";
        if (mysqli_query($conn, $updateSql)) {
            echo "Profile updated successfully.";
        } else {
            die("Error updating user: " . mysqli_error($conn));
        }
    } else {
        echo "No changes were made to the profile.";
    }

    mysqli_close($conn);
} else {
    echo "Please submit the form.";
}
?>

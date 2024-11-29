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
    <title>Update Profile</title>
</head>
<body>
    <?php include('header.inc'); ?>
    <main>
        <h1 class="contribute-title">Update account</h1>
        <h3 class="contribute-subtitle">Fill in the latest credentials</h3>
        <form class="contribute-form" action="process_update.php" method="POST">
            <div>
                <label class="contribute-form-label" for="currentEmail">Current Email:</label>
                <input type="email" class="contribute-form-control" id="currentEmail" name="currentEmail" required><br><br>
            </div>
            <div>
                <label class="contribute-form-label" for="newEmail">New Email (optional):</label>
                <input type="email" class="contribute-form-control" id="newEmail" name="newEmail"><br><br>
            </div>
            <div>
                <label class="contribute-form-label" for="currentPassword">Current Password:</label>
                <input type="password" class="contribute-form-control" id="currentPassword" name="currentPassword" required><br><br>
            </div>
            <div>
                <label class="contribute-form-label" for="newPassword">New Password (optional):</label>
                <input type="password" class="contribute-form-control" id="newPassword" name="newPassword"><br><br>
            </div>
            <div class="contribute-form-row">
                <button type="submit">Update Profile</button>
            </div>
        </form>
    </main>
    <?php include('footer.inc'); ?>
</body>
</html>

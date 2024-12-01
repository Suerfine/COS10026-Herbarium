<?php
session_start();
if(!isset($_SESSION['level']) || $_SESSION['level']!="ADMIN"){
    echo<<<HTML
        <p>Please login with a Admin account.</p>
        <a href="login.php?origin=view_enquiry.php">LogIn</a>
        <a href="logout.php">LogOut</a>
    HTML;
    die();
}
include_once("conn.php");
try{
    //check if a username was passed
    if(!isset($_GET['id'])){
        throw new Exception("Missing User Id");
        die;
    }
    
    //check if user exists in the database
    $id=mysqli_real_escape_string($conn,$_GET['id']);
    $res=mysqli_query($conn,"SELECT `user_name` FROM `users` WHERE `id`=$id");
    if(mysqli_num_rows($res)!=1){
        throw new Exception("User does not exist");
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //If its a post type means its confirm delete;
        if(!mysqli_query($conn,"DELETE FROM `users` WHERE `id`=$id")){
            throw new Exception("Failed to delete the user.");
        }            
        header("location:user_management.php");
        die;
    }
}catch(Exception $e){
    echo $e->getMessage();
    die;
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!--Metadata-->
		<meta charset="UTF-8">
		<meta name="description" content="Herbarium">
		<meta name="keywords" content="PHP, HTML, CSS">
		<meta name="author" content="Herbivore">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--Stylesheets-->
		<link rel="stylesheet" type="text/css" href="styles/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer">
		<link rel="icon" href="images/icon.png" type="image/x-icon">
		<title>User Delete</title>
  	</head>
    <body>
        <main>
            <form action="user_delete.php?id=<?php echo $id?>" method="post">
                <h1>User Delete Confirmation</h1>
                <h2>Confirm delete user <strong><?php echo mysqli_fetch_row($res)[0];?></strong></h2>
                <div class="w-100">
                    <a class="btn-danger" href="user_management.php">Cancel</a>
                    <button class="btn-info" type="submit">Confirm</button>
                </div>
            </form>
        </main>
    </body>
</html>
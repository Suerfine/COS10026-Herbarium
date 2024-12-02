<?php
session_start();
if(!isset($_SESSION['level']) || $_SESSION['level']!="ADMIN"){
    echo<<<HTML
        <p>Please login with a Admin account.</p>
        <a href="login.php?origin=user_management.php">LogIn</a>
        <a href="logout.php">LogOut</a>
    HTML;
    die();
}
include_once("conn.php");
try{
    //check if an id was given. IF not invalid entry;
    if(!isset($_GET['id']))
        throw new Exception("Missing user id parameter");
    $userId=(int)mysqli_escape_string($conn,$_GET['id']);
    //Get the current user info;
    $res=mysqli_query($conn,"SELECT `user_name`, `first_name`, `last_name`, `level`, `email` FROM `users` WHERE `id`=$userId LIMIT 1");
    if(!$res)throw new Exception("Failed to execute query.");
    
    //Check if the user exists.
    if(mysqli_num_rows($res)!=1)throw new Exception("User no longer exists.");
    $userInfo=mysqli_fetch_assoc($res);

    
    //If its a post request means the user has submitted the form so update the user info.
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        //Check if all paarameters are set;
        if(!isset($_POST['uName'],$_POST['fName'],$_POST['lName'],$_POST['email'],$_POST['level'],$_POST['password']))
            throw new Exception("Missing parameters. Please submit the form again.");
        
        //sanitizing the input
        $uName=mysqli_real_escape_string($conn,$_POST['uName']);
        $fName=mysqli_real_escape_string($conn,$_POST['fName']);
        $lName=mysqli_real_escape_string($conn,$_POST['lName']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $level=mysqli_real_escape_string($conn,$_POST['level']);
        $password=mysqli_real_escape_string($conn,$_POST['password']);
        
        //Check if the username has already been used by someone else excluding the current user.
        $res=mysqli_query($conn,"SELECT 1 FROM `users` WHERE `id`<>$userId AND  `user_name`=\"$uName\" LIMIT 1");
        if(!$res)throw new Exception("Failed to execute query.");
        if(mysqli_num_rows($res)!=0)throw new Exception("Duplicate username found. Please use a different username.");

        //update the user info in the database
        $res=mysqli_query($conn,"UPDATE `users` 
            SET `user_name`='$uName',`first_name`='$fName',`last_name`='$lName',`level`='$level',`email`='$email' 
            WHERE `id`=$userId LIMIT 1");
        if(!$res)throw new Exception("Failed to execute query.");

        //For password we have to check if its not blank. If it isnt then we update the users password.
        if($password!=""){
            $res=mysqli_query($conn,"UPDATE `users` SET `password`='".password_hash($password,PASSWORD_DEFAULT)."' WHERE `id`=$userId LIMIT 1");
            if(!$res)throw new Exception("Failed to execute query.");
        }
        header("location:user_management.php?search=$uName");
    }
}catch(Exception $e){
    $ERR=$e->getMessage();
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
	<title>User Update</title>
  </head>
  <body>    
	<?php include('header.inc'); ?>
    <main>
		<h1 class="contribute-title">Update Account</h1>
        <form class="contribute-form" action="user_update.php?id=<?php echo $userId;?>" method="POST">
            <?php if(isset($ERR))echo "<span>".$ERR."<span>"?>
            <div class="contribute-formgroup">
                <label for="uName" class="contribute-form-label">User Name:</label>
                <input id="uName" name="uName" class="contribute-form-control" type="text" maxlength="25" pattern="[a-zA-Z]+" value="<?php echo $userInfo['user_name']?>" required>
            </div>
            <div class="contribute-formgroup">
                <label for="fName" class="contribute-form-label">First Name:</label>
                <input id="fName" name="fName" class="contribute-form-control" type="text" maxlength="25" pattern="[a-zA-Z]+" value="<?php echo $userInfo['first_name']?>" required>
            </div>
            <div class="contribute-formgroup">
                <label for="lName" class="contribute-form-label">Last Name:</label>
                <input id="lName" name="lName" class="contribute-form-control" type="text" maxlength="25" pattern="[a-zA-Z]+" value="<?php echo $userInfo['last_name']?>" required>
            </div>
            <div class="contribute-formgroup">
                <label for="email" class="contribute-form-label">Email address:</label>
                <input id="email" name="email" class="contribute-form-control" type="email" value="<?php echo $userInfo['email']?>" required>
            </div>
            <div id="user-update-formGroup" class="d-flex mb-10">
                <label for="level" class="form-label">Level:</label>
                <select id="level" name="level" class="form-control w-100">
                <?php
                    foreach(["ADMIN","USER"] as $option){
                        echo"<option value='{$option}'".(($option==$userInfo['level'])?"selected":"").">$option</option>";
                    }
                ?>
                </select>
            </div>
            <div class="contribute-formgroup">
                <label for="password" class="contribute-form-label">Password:</label>
                <input id="password" name="password" class="contribute-form-control" type="password" maxlength="25" placeholder="Leave empty if password is not changed.">
            </div>
            <div class="contribute-form-row">
                <a href="user_management.php">CANCEL</a>
                <button type="submit">UPDATE ACCOUNT</button>
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
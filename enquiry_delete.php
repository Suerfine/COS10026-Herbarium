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
    //check if a enquiry id was passed
    if(!isset($_GET['id'])){
        throw new Exception("Missing Enquiry Id");
        die;
    }
    
    //check if enquiry exists in the database
    $id=mysqli_real_escape_string($conn,$_GET['id']);
    $res=mysqli_query($conn,"SELECT * FROM `enquiry` WHERE `id`=$id");
    if(mysqli_num_rows($res)!=1)throw new Exception("Enquiry does not exist");
    $enquiryInfo=mysqli_fetch_assoc($res);
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //If its a post type means its confirm delete;
        if(!mysqli_query($conn,"DELETE FROM `enquiry` WHERE `id`=$id")){
            throw new Exception("Failed to delete the user.");
        }            
        header("location:view_enquiry.php");
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
        <meta name="keywords" content="HTML, CSS">
        <meta name="author" content="Herbivore">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Stylesheets-->
        <link rel="stylesheet" type="text/css" href="./styles/style.css">
        <link rel="icon" href="images/icon.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <title>Enquiry</title>
    </head>
    <body>
        <?php include('header.inc');?>
        <main>
            <h1 class="text-center">Enquiry</h1>
            <table class="table-default mb-30">
                <thead>
                    <tr>
                        <th>FIELD</th>
                        <th>VALUE</th></tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>First Name</strong></td>
                        <td><?php echo $enquiryInfo['first_name']?></td>
                    </tr>
                    <tr>
                        <td><strong>Last Name</strong></td>
                        <td><?php echo $enquiryInfo['last_name']?></td>
                    </tr>
                    <tr>
                        <td><strong>Street Address</strong></td>
                        <td><?php echo $enquiryInfo['street_address']?></td>
                    </tr>
                    <tr>
                        <td><strong>City/Town</strong></td>
                        <td><?php echo $enquiryInfo['city/town']?></td>
                    </tr>
                    <tr>
                        <td><strong>Postcode</strong></td>
                        <td><?php echo $enquiryInfo['postcode']?></td>
                    </tr>
                    <tr>
                        <td><strong>Email</strong></td>
                        <td><a href="mailto:<?php echo $enquiryInfo['email']?>"><?php echo $enquiryInfo['email']?></a></td>
                    </tr>
                    <tr>
                        <td><strong>Phone No</strong></td>
                        <td><a href="tel:<?php echo $enquiryInfo['phone_no']?>"><?php echo $enquiryInfo['phone_no']?></a></td>
                    </tr>
                    <tr>
                        <td><strong>Tutorial</strong></td>
                        <td><?php echo $enquiryInfo['tutorial']?></td>
                    </tr>
                    <tr>
                        <td><strong>Date & Time Enquired</strong></td>
                        <td><?php echo $enquiryInfo['dt_create']?></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td class="text-center" colspan="2"><button class="button-primary" type="submit">DELETE ENQUIRY</td>
                    </tr>
                </tfoot>       
            </table>
        </main>
        <?php 
            $sources=[
                ["url"=>"https://fonts.google.com/icons?selected=Material+Symbols+Outlined:close:FILL@0;wght@400;GRAD@0;opsz@24&icon.size=24&icon.color=%23e8eaed","label"=>"Nav X Icon"],
                ["url"=>"https://youtu.be/EgqwdlY9iaQ?si=o7AitaXCotQ07HXe","label"=>"Responsive Navbar"],
                ["url"=>"https://cdnjs.com/libraries/font-awesome","label"=>"Nav Bar Icon"],
                ["url"=>"https://www.geeksforgeeks.org/design-a-feedback-form-using-html-and-css/","label"=>"Feedback Form Design"],];
            include('./footer.inc'); 
        ?>
    </body>
</html>

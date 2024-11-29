<?php
session_start();
// if(!isset($_SESSION['level']) || $_SESSION['level']!="ADMIN"){
//     echo<<<HTML
//         <section>
//             <h1>ERROR</h1>
//             <p>Invalid permission. Please log in with an admin account.</p>
//             <a href="login.php">LogIn</a>
//         </section>
//     HTML;
include_once("conn.php");
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
        <title>Admin Panel - Contribution</title>
    </head>
    <body>
        <main>
            <form class="search-filter" type="GET">
                <div class="d-flex">
                    <input type="search" name="search" placeholder="First Name/Last Name/Email" class="form-control">
                    <div class="form-group-inline w-30">
                        <label for="filter_tutorial" class="form-label">Tutorial:</label>
                        <select id="filter_tutorial" class="form-control" name="tutorial">
                            <option value="">All</option>
                            <option value="tutorial">Tutorial</option>
                            <option value="tools">Tools</option>
                            <option value="care">Care</option>
                        </select>
                    </div>
                </div>
                <button class="button-primary float-right mb-1 mt-1" type="submit">Search</button>
            </form>
            <table class="table-bordered table-striped w-100">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Tutorial</th>
                        <th>Street Address</th>
                        <th>City / Town</th>
                        <th>State</th>
                        <th>Postcode</th>
                        <th>Email</th>
                        <th>Phone No</th>
                        <th>Date enquired</th>
                    </tr>
                </thead>
                <tbody>
            <?php
                $search="\"%".(mysqli_real_escape_string($conn,$_GET['search']??""))."%\"";
                $filterTutorial=(isset($_GET['tutorial']) && $_GET['tutorial']!="")
                    ?"AND `tutorial`=\"".mysqli_real_escape_string($conn,$_GET['tutorial'])."\""
                    :"";
                $res=mysqli_query($conn,"SELECT 
                    `id`, `first_name`, `last_name`, `tutorial`, `street_address`, `city/town`, `state`, `postcode`, `phone_no`,`email`,`dt_create`
                FROM `enquiry` 
                WHERE 
                    (`first_name` LIKE $search OR `last_name` LIKE $search OR `email` LIKE $search)
                    $filterTutorial");
                foreach($res as $row){
                    $dt_create=date("d/m/Y H:i",strtotime($row['dt_create']));
                    echo<<<HTML
                        <tr>
                            <td>{$row['id']}</td>
                            <td>{$row['first_name']}</td>
                            <td>{$row['last_name']}</td>
                            <td>{$row['tutorial']}</td>
                            <td>{$row['street_address']}</td>
                            <td>{$row['city/town']}</td>
                            <td>{$row['state']}</td>
                            <td>{$row['postcode']}</td>
                            <td><a href="mailto:{$row['email']}">{$row['email']}</a></td>
                            <td><a href="tel:{$row['phone_no']}">{$row['phone_no']}</a></td>
                            <td>{$dt_create}</td>
                        </tr>
                    HTML;
                }
            ?>
                </tbody>
            </table>
            </form>
        </main>
    </body>
</html>
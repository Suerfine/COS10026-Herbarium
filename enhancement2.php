<!DOCTYPE html>
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
        <title>Enhancement 2</title>
    </head>
    <body>
        <?php include('header.inc'); ?>
        <main>
            <h1 class="enhancement-title">ENHCANCEMENTS</h1>
            <section class="enhancement-row">
                <h2>User Management Module</h2>
                <div class="enhancement-row-group">
                    <video autoplay muted loop>
                        <source src="images\Enhancement\user_management.mp4" type="video/mp4">
                        Your browser does not support video.
                    </video>
                    <p>
                        This page is for admin's to edit and delete users on the website. The User must be logged in as an ADMIN account in order to edit users. The user management 
                        page features a filter and search function. Upon filling in the filter values it will be submitted through a GET request to <i>user_management.php</i>. Depending
                        on the parameter the SQL to retrieve the data will be added with WHERE and the parameters to filter the result.
                        <br></br>
                        Upon clicking on the <strong>UPDATE</strong> link the user will be redirected to the <i>user_update.php</i> page where the updated info can be 
                        inputted into the form. The <strong>id</strong> of the user to be updated is passed through a GET request which will be used to request the current user 
                        data from database which will be prefilled into the form. Upon submitting the form the data will be processed and the user info updated before redirecting 
                        back to the <i>user_management.php</i> page.
                        <br></br>
                        Upon clicking the <strong>DELETE</strong> link the user will be redirected to the <i>user_delete.php</i> page to confirm that the intended user is to be deleted.
                        The <strong>id</strong> of the user to be deleted is passed through a GET request and upon confirmation the user is deleted before redirecting back to 
                        the <i>user_management.php</i> page.
                    </p>
                </div>
                <div class="enhancement-extra">
                    <h3>Pages with this enhancement:</h3>
                    <div class="enhancement-pageLinks">
                        <a>user_management.php</a>
                        <a>user_update.php</a>
                        <a>user_delete.php</a>
                    </div>
                </div>
            </section>
            <section class="enhancement-row">
                <h2>Upload Module</h2>
                <div class="enhancement-row-group">
                    <video autoplay muted loop>
                        <source src="images\Enhancement\upload_module.mp4" type="video/mp4">
                        Your browser does not support video.
                    </video>
                    <p>
                        Users can upload images to contribute their herbarium to our website. After filling in the form in <i>contribute.php</i> the image will be processed by
                        <i>contribute_process.php</i>. There the uploaded file will be moved to the server folder path <i>./images/user_images/contribute</i> and the path to the
                        image itelf will be saved along with the other information concerning the contribution into the database.
                        </br></br>
                        To view the image the user has to be logged in as an Admin account before entering <i>view_contribute.php</i> page to view the iamge. This is implemenented
                        as an &lt;img> tag with the href to path the image is saved.
                    </p>
                </div>
                <div class="enhancement-extra">
                    <h3>Pages with this enhancement:</h3>
                    <div class="enhancement-pageLinks">
                        <a>contribute.php</a>
                    </div>
                </div>
            </section>
        </main>
        <?php 
            $sources=[
                ["url"=>"https://fonts.google.com/icons?selected=Material+Symbols+Outlined:close:FILL@0;wght@400;GRAD@0;opsz@24&icon.size=24&icon.color=%23e8eaed","label"=>"Nav X Icon"],
                ["url"=>"https://youtu.be/EgqwdlY9iaQ?si=o7AitaXCotQ07HXe","label"=>"Responsive Navbar"],
                ["url"=>"https://cdnjs.com/libraries/font-awesome","label"=>"Nav Bar Icon"],
                ["url"=>"https://youtu.be/8eFeIFKAKHw?si=DGfhqh9YwUqYHUk3","label"=>"Navbar CSS"],
                ["url"=>"https://www.wiltonlibrary.org/herbarium/","label"=>"Banner image"],
            ];

            include('./footer.inc'); 
        ?>
    </body>
</html> 
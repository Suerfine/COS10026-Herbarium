<!DOCTYPE html>
<html lang="en">
    <head>
        <!--Metadata-->
        <meta charset="UTF-8">
        <meta name="description" content="Profiles of the group">
        <meta name="keywords" content="HTML, CSS">
        <meta name="author" content="Herbivore">
        <!--Stylesheets-->
        <link rel="stylesheet" type="text/css" href="styles/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <link rel="icon" href="images/logo2.png" type="image/x-icon">
        <title>Group</title>
    </head>
    <body>
        <?php include('/xampp/htdocs/assign1/header.php'); ?>
        <main>
            <h1 class="group-h1">MEET THE GROUP</h1>
            <section class="group-wrapper">
                <a href="profile_gary.php" class="group-profile-mini">
                    <img src="images/group/garyPersonalMini.png" alt="Gary journal front page">
                    <img src="images/group/page1.png" alt="Book pages">
                    <img src="images/group/page1.png" alt="Book pages">
                    <img src="images/group/garyPersonalMiniBack.png" alt="Gary journal back page">
                </a>
                <a href="profile_min.php" class="group-profile-mini">
                    <img src="images/group/minPersonalMini.png" alt="Min journal front page">
                    <img src="images/group/page1.png" alt="Book pages">
                    <img src="images/group/page1.png" alt="Book pages">
                    <img src="images/group/minPersonalMiniBack.png" alt="Min journal back page">
                </a>
                <a href="profile_leong.php" class="group-profile-mini">
                    <img src="images/group/leongPersonalMini.png" alt="Gui Xiong LEONG journal front page">
                    <img src="images/group/page1.png" alt="Book pages">
                    <img src="images/group/page1.png" alt="Book pages">
                    <img src="images/group/leongPersonalMiniBack.png" alt="Gui Xiong LEONG journal back page">
                </a>
            </section>
        </main>
        <?php 
            $sources=[
                ["url"=>"https://fonts.google.com/icons?selected=Material+Symbols+Outlined:close:FILL@0;wght@400;GRAD@0;opsz@24&icon.size=24&icon.color=%23e8eaed","label"=>"Nav X Icon"],
                ["url"=>"https://youtu.be/EgqwdlY9iaQ?si=o7AitaXCotQ07HXe","label"=>"Responsive Navbar"],
                ["url"=>"https://cdnjs.com/libraries/font-awesome","label"=>"Nav Bar Icon"],
                ["url"=>"https://www.w3schools.com/css/css3_animations.asp","label"=>"CSS animations"],
                ["url"=>"https://www.youtube.com/watch?v=W6K26i9FwZU","label"=>"Flipbook animation"],
                ["url"=>"https://www.linenme.com/samples/linen-fabric-sample-paula-red","label"=>"Red linen"],
                ["url"=>"https://dorm-decor.com/products/fabric-swatch-soft-pink-linen","label"=>"Soft pink linen"],
                ["url"=>"https://www.linenme.com/linen-fabrics/soft-furnishing-fabrics/grey-linen-fabric-prewashed-rustico","label"=>"Grey linen"],
            ];

            include('/xampp/htdocs/assign1/footer.inc'); 
	    ?>
    </body>
</html>
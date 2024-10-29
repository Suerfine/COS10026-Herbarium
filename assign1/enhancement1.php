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
        <link rel="icon" href="images/logo2.png" type="image/x-icon">
        <title>Herbarium - Home</title>
    </head>
    <body>
        <header>
            <nav>
                <input type="checkbox" id="check" name="check" value="">
                <label for="check" id="checkbtn">
                    <i class="fa fa-bars"></i>
                </label>
                <label class="logo"><a href="index.php"><img src="images/logo1.png" alt="logo"></a></label>
                <ul>
                    <li>
                        <label for="check" id="close-menu">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
                        </label>
                    </li>
                    <li>
                        <a href="classify.php">Plants Classification</a>
                    </li>
                    <li class="tutli">
                        <a class="tut" href="tutorial.php">Guide</a>
                        <ul class="drop">
                            <li><a href="tutorial.php">Tutorial</a></li>
                            <li><a href="tools.php">Tools</a></li>
                            <li><a href="care.php">Care</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="identify.php">Identify</a>
                    </li>
                    <li>
                        <a href="enquiry.php">Enquiry</a>
                    </li>
                    <li>
                        <a href="contribute.php">Contribute</a>
                    </li>
                    <li>
                        <a href="registration.php">Registration</a>
                    </li>
                    <li>
                        <a href="group.php">Group</a>
                    </li>
					<li>
                        <a href="enhancement1.php">Enhancement</a>
                    </li>
                </ul>
            </nav>
        </header>
        <main>
            <h1 class="enhancement-title">ENHCANCEMENTS</h1>
            <section class="enhancement-row">
                <h2>FLIP BOOK PERSONAL PROFILE</h2>
                <div class="enhancement-row-group">
                    <img src="images/Enhancement/personalBook.gif" alt="Flipbook animation">
                    <p>
                        We got inspired to design our personal profiles to be book similar to how herbarium specimens are stored. To implement this feature
                        each page of the book is a tbody element absolute positioned on top of each other and has <strong>transform: rotateY(0deg)</strong>. 
                        Within each tbody there is a hidden radio button that holds the state of the page whether it is opened or not. Radio is used to ensure only one
                        page is opened at a time. Each index tab on the side of the book is a label to the corresponding radio 
                        button. Upon clicking on the label the corresponding radio is activated and through the use of <strong>:has</strong> & <strong>:active</strong>
                        selectors to apply a <strong>transform: rotateY(0deg);</strong> to flip the page open.
                        <br>
                        <br>The preview on the group.php also applies this principal but its instead on a <strong>:hover</strong> animation to keep it flipping upon hover.
                    </p>
                </div>
                <div class="enhancement-extra">
                    <h3>References:</h3>
                    <ul>
                        <li><a href="https://youtu.be/W6K26i9FwZU?si=fOWWLyF0cvDPPQgW">Flipbook animation</a></li>
                    </ul>
                    <h3>Pages with this styles:</h3>
                    <div class="enhancement-pageLinks">
                        <a href="group.php">Group.php</a>
                        <a href="profile_gary.php">LeongGuiXiong's Profile</a>
                        <a href="profile_min.php">MinEarou's Profile</a>
                        <a href="profile_leong.php">GaryAlbertyn's Profile</a>
                    </div>
                    <img src="">
                </div>
            </section>
            <section class="enhancement-row">
                <h2>Responsive Navigation Menu</h2>
                <div class="enhancement-row-group">
                    <img id="enhancement-nav" src="images/Enhancement/navbar.gif" alt="Navigation bar">
                    <p>
                        The navigation menu is made responsive by hiding the links at the top when the page is resized to a certain width. The bar icon can then be clicked to open a 
                        sidebar menu, and closed by clicking the X icon. This feature is useful for users with smaller screens, giving them a choice whether they want the sidebar 
                        menu to appear or not. The CSS used includes pseudo-classes, sibling selectors and media queries.
                        This feature can be seen in every webpage of the site, for example identify.php.

                    </p>
                </div>
                <div class="enhancement-extra">
                    <h3>References:</h3>
                    <ul>
                        <li><a href="https://cdnjs.com/libraries/font-awesome">Bar Icon</a></li>
                        <li><a href="https://fonts.google.com/icons?selected=Material+Symbols+Outlined:close:FILL@0;wght@400;GRAD@0;opsz@24&icon.size=24&icon.color=%23e8eaed">X icon</a></li>
                        <li><a href="https://youtu.be/8eFeIFKAKHw?si=DGfhqh9YwUqYHUk3">Css from</a></li>
                    </ul>
                    <h3>Pages with this styles:</h3>
                    <div class="enhancement-pageLinks">
                        <a href="index.php">index.php</a>
                        <a href="identify.php">Identify</a>
                        <a href="enquiry.php">Enquiry</a>
                        <a href="contribute.php">Contribute</a>
                        <a href="registration.php">Registration</a>
                        <a href="tutorial.php">Tutorial</a>
                        <a href="tools.php">Tools</a>
                        <a href="care.php">Care</a>
                        <a href="group.php">Group</a>
                        <a href="enhancement1.php">Enhancement</a>
                    </div>
                </div>
            </section>
            <section class="enhancement-row"> 
                <h2>The image hover overlay</h2>
                <div class="enhancement-row-group">
                    <img id="enhancement-nav" src="images/Enhancement/ezgif.com-optimize.gif" alt="enhancement image hover overlay">
                    <p>
                        The image hover overlay effect in the provided example enhances the presentation of botanical information about "Actinodaphne" , "Endiandra", "Beilschmiedia" 
                        by seamlessly revealing detailed text when a user hovers over the image. This effect features an overlay containing relevant data such as the plant's genus, 
                        family, type, native range, and habitat, ensuring clarity and readability against the backdrop of the botanical specimen. The overlay becomes visible on mouse 
                        hover, allowing users to access additional information without disrupting their view of the image. With contrasting colors that enhance visibility and maintain
                        an elegant aesthetic, this interactive design effectively combines visual elements and usability, making it an engaging tool for educating users about the 
                        species in a visually appealing manner.
                    </p>
                </div>
                <div class="enhancement-extra">
                    <h3>References:</h3>
                    <ul>
                        <li><a href="https://www.w3schools.com/howto/howto_css_image_overlay_title.asp">On hover css</a></li>
                    </ul>
                    <h3>Pages with this styles:</h3>
                    <div class="enhancement-pageLinks">
                        <a href="classify.php">classify.php</a>
                    </div>
                </div>
            </section>
            <section class="enhancement-row"> 
                <h2>Youtube embed</h2>
                <div class="enhancement-row-group">
                    <img id="enhancement-nav" src="images/Enhancement/enhancementYoutubeEmbed.gif" alt="Youtube video embed">
                    <p>
                        A youtube video of one of the world's largest herbarium collections is embedded into the site for easy viewing. An embed allows the video to be directly played in 
                        the site instead of requiring a redirect to the youtube website. 
                    </p>
                </div>
                <div class="enhancement-extra">
                    <h3>References:</h3>
                    <ul>
                        <li><a href="https://www.w3schools.com/html/html_youtube.asp">HTML Embed</a></li>
                        <li><a href="https://youtu.be/dpmU0a1AK0M">Go Inside One of the World's LARGEST HERBARIUMS — Ep. 355</a></li>
                    </ul>
                    <h3>Pages with this styles:</h3>
                    <div class="enhancement-pageLinks">
                        <a href="index.php">index.php</a>
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
                ["url"=>"https://www.freshlypressed.ch/blog/2017/7/2/herbarium-how-to-1-ythsk","label"=>"Tutorial background image"],
            ];

            include('/xampp/htdocs/assign1/footer.inc'); 
        ?>
    </body>
</html> 
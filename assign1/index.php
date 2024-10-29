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
            <div class="index-introduction-container">
                <img src="./images/index/bACKGROUND.jpg" alt="Background Image">
                <h1 class="index-introduction-quote">
                    <i>“A herbarium is better than any illustration; every botanist should make one.” — Carl Linnaeus</i>
                </h1>
            </div>
            <div class="index-row">
                <div class="index-col-img1">
                    <img src="images/index/herbariumPlant.jpg" alt="Herbarium plant"/>
                </div>
                <div class="index-col-descript1">
                    <h3>What is a herbarium?</h3>
                    <p>A herbarium is a critical resource for biodiversity, ecological, and evolutionary research studies. It is a primary data source of dried and labeled plant specimens that is arranged to allow for easy retrieval access and archival storage. A herbarium is like a library, but differs in that the information is stored in a biological form––as pressed, dried, and annotated plant specimens (in the case of most vascular plants; lichens, fungi, bryophytes and some vascular plants are preserved slightly differently, although the main points are the same).</p>
                    <a class="button-primary float-right" href="identify.php">Identify a herbarium</a>
                </div>
            </div>
            <div class="row index-preview-row">
                <div class="index-preview-item">
                    <img src="images/index/classify.jpg" alt="Herbarium classify">
                    <div class="index-preview-flex">
                        <a href="./classify.php" class="button-primary">Plant Classification</a>
                        <p>Family? Genus? Speisis? Learn how plants are classified.</p>
                    </div>
                </div>
                <div class="index-preview-item">
                    <img src="images/index/guide.jpg" alt="Herbarium guide">
                    <div class="index-preview-flex">
                        <a href="./tutorial.php" class="button-primary">Tutorial</a>
                        <p>Don't know where to start? Head over to our tutorials to start your herbarium journey.</p>
                    </div>
                </div>
                <div class="index-preview-item">
                    <img src="images/index/contribute.jpg" alt="Herbarium contribute">
                    <div class="index-preview-flex">
                        <a href="./contribute.php" class="button-primary">Contribute</a>
                        <p>Have your own herbarium you would like to share? Upload it to our website to help out others.</p>
                    </div>
                </div>
            </div>
            <div class="index-row">
                <div class="index-col-descript2">
                    <p>Over the centuries, botanists, taxonomists, naturalists, and physicians have meticulously collected
                        herbarium specimens to study and document global plant biodiversity.</p>
                    <p>These specimens are preserved through drying, pressing, and mounting on paper sheets, each
                        accompanied by a label that provides essential details such as the scientific name, origin, collection
                        date, and the institution housing the specimen.</p>
                    <p>In plant identification, taxonomists often compare a newly collected plant specimen to herbarium
                        specimens of suspected taxa in a process known as specimen comparison to confirm its species
                        identity.</p>
                    <a class="button-primary float-left" href="tutorial.php">How do i make a herbarium?</a>
                </div>
                <div class="index-col-img2">
                    <img src="images/index/calceata.jpg" alt="Calceata plant">
                </div>
            </div>
            <div class="index-embed-card">
                <h3>Check out one of the largest herbarium collection in the world</h3>
                <iframe class="index-yVideo" src="https://www.youtube.com/embed/dpmU0a1AK0M?si=oXGw8FQQdB5gLHxc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <p>The William and Lynda Steere Herbarium of the <a href="https://www.nybg.org/plant-research-and-conservation/">New York Botanical Garden</a> is one of the largest collections of its kind in the world, holding ca. 7.8 million plant and fungal specimens from around the globe, and representing 250 years of botanical research. </p>
            </div>
        </main>
        <footer>
            <div class="footerrow">
                <div class="index-footerPresentationWrapper">
                    <a href="https://youtu.be/hbgkiSGwf6w">Presentation video</a>
                </div>
                <div class="footercol">
                    <h4>Herbarium</h4>
                    <ul class="footerlinks">
                        <li><a href="classify.php">Plants Classification</a></li>
                        <li><a href="identify.php">Identify</a></li>
                        <li><a href="tutorial.php">Tutorial</a></li>
                        <li><a href="tools.php">Tools</a></li>
                        <li><a href="care.php">Care</a></li>
                    </ul>
                </div>
                <div class="footercol">
                    <h4>Other</h4>
                    <ul class="footerhelp">
                        <li><a href="contribute.php">Contribution</a></li>
                        <li><a href="tutorial.php">Enquiry</a></li>
                        <li><a href="group.php">Group</a></li>
                    </ul>
                </div>
                <div class="footercol">
                    <h4>Sources</h4>
                    <ul class="identify-footerlink">
                        <li><a href="https://cdnjs.com/libraries/font-awesome">Nav Bars Icon</a></li>
                        <li><a href="https://fonts.google.com/icons?selected=Material+Symbols+Outlined:close:FILL@0;wght@400;GRAD@0;opsz@24&icon.size=24&icon.color=%23e8eaed">Nav X Icon</a></li>
                        <li><a href="https://youtu.be/8eFeIFKAKHw?si=DGfhqh9YwUqYHUk3">Navbar CSS</a></li>
                        <li><a href="https://www.wiltonlibrary.org/herbarium/">Banner image</a></li>
                        <li><a href="https://www.freepik.com/free-photo/vertical-shot-beautiful-composition-flowers-leaves-white-background_8943515.htm#fromView=keyword&page=2&position=4&uuid=8a1fb739-0059-4ea8-b70e-3b0dfc3ebd02">
                            Herbarium plant image
                        </a></li>
                        <li><a href="https://en.wikipedia.org/wiki/Herbarium#/media/File:HerbPrepLG.jpg">
                            Herbarium classify image
                        </a></li>
                        <li><a href="https://www.freshlypressed.ch/blog/2017/7/2/herbarium-how-to-1-ythsk">
                            Herbarium guide image
                        </a></li>
                        <li><a href=" https://en.wikipedia.org/wiki/Aa_calceata#/media/File:Aa_calceata.jpg">
                            Calceata Herbarium image
                        </a></li>
                        <li><a href="https://youtu.be/dpmU0a1AK0M">
                            Youtube Go Inside One of the World's LARGEST HERBARIUMS — Ep. 35
                        </a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </body>
</html> 
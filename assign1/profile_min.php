<!DOCTYPE html>
<html lang="en">
    <head>
        <!--Metadata-->
        <meta charset="UTF-8">
        <meta name="description" content="Profile of developer Min Eraou">
        <meta name="keywords" content="HTML, CSS">
        <meta name="author" content="104382359, Min Eraou">
        <!--Stylesheets-->
        <link rel="stylesheet" type="text/css" href="styles/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <link rel="icon" href="images/logo2.png" type="image/x-icon">
        <title>Min Eraou</title>
    </head>
    <body>
        <?php include('./assign1/header.php'); ?>
        <main>
            <div class="row-center profile-row-book">
                <table class="personal-book-container table-bordered">
                    <thead class="personal-book-markers">
                        <tr>
                            <th><label class="book-marker-0" for="book-front">📔</label></th>
                        </tr>
                        <tr>
                            <th><label class="book-marker-1" for="page-1">🧑‍🎓</label></th>
                        </tr>
                        <tr>
                            <th><label class="book-marker-2" for="page-2">🏠</label></th>
                        </tr>
                        <tr>
                            <th><label class="book-marker-3" for="page-3">🏆</label></th>
                        </tr>
                        <tr>
                            <th><label class="book-marker-4" for="page-4">🥰</label></th>
                        </tr>
                    </thead>
                    <tbody class="personal-book-start personal-min-book-front"><tr>
                        <th><label for="page-1"><input id="book-front" class="personal-book-radio" name="page" type="radio" checked></th></tr></label>
                        <td><img class="personal-book-pfp" src="images/personal/min/min.jpg" alt="Avatar">
                            <div class="personal-book-label">
                                <span class="personal-book-label-name">Min Eraou</span><br>
                                <span class="personal-book-label-studentId">104382359</span><br>
                                <span class="personal-book-label-course">Bachelor of Computer Science</span>
                            </div>
                        </td>
                    </tbody>
                    <tbody class="page page-1 personal-tbl-info table-striped">
                        <tr>
                            <th><input id="page-1" class="personal-book-radio" name="page" type="radio" >INTRODUCTION</th>
                            <td>
                                <p>I am 19 year-old female university student doing my first semester of Bachelor in Computer Science at Swinburne University of Technology Sarawak. 
                                I currently live in Kuching, with my parents and older brother. I also have an older sister living in another city.</p>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="page page-2 personal-tbl-info table-striped">
                        <tr>
                            <th><input id="page-2" class="personal-book-radio" name="page" type="radio" >HOMETOWN</th>
                            <td colspan="100"><label for="page-3">
                                I was born and raised in Kuching, the capital city of Sarawak. It's a lovely city with amazing food and friendly people. 
                                One of the main themes of Kuching is cats, as the name 'Kuching' sounds similar to the word for cat in Malay, which is 'Kucing'. 
                                There are various place to visit such as Bako National Park, Jong's Crocodile Farm, Borneo Culture Museum and its Waterfront.
                            </label></td>
                        </tr>
                    </tbody>
                    <tbody class="page page-3 personal-tbl-info table-striped">
                        <tr>
                            <th rowspan="2"><input id="page-3" class="personal-book-radio" name="page" type="radio">MY ACHIEVEMENT(S)</th>
                            <td>
                                Placed third in the Dare to Spell spelling bee during form 5, representing Kuching against other divisions in Sarawak.
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Passed my vocal exam and completed Grade 7 in classical singing in 2020. 
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="page page-4 personal-tbl-info table-striped">
                        <tr>
                            <th rowspan="3"><input id="page-4" class="personal-book-radio" name="page" type="radio">FAVOURITE STUFF</th>
                            <td>
                                <label><Strong>Favourite Books 📖;</Strong></label>
                                <ul class="personal-fav-ul">
                                    <li><a href="https://www.wizardingworld.com/discover/books">Harry Potter🪄</a></li>
                                    <li><a href="https://rickriordan.com/series/percy-jackson-and-the-olympians/">Percy Jackson & the Olympians🏛️</a></li>
                                    <li><a href="https://rickriordan.com/series/the-trials-of-apollo/">Trials Of Apollo🏹</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><Strong>Favourite Games 🎮;</Strong></label>
                                <ul class="personal-fav-ul">
                                    <li><a href="https://osu.ppy.sh">Osu!</a></li>
                                    <li><a href="https://store.steampowered.com/app/447530/VA11_HallA_Cyberpunk_Bartender_Action/">Va-11 Hall-A</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><Strong>Favourite Music 🎵;</Strong></label>
                                <ul class="personal-fav-ul">
                                    <li><a href="https://open.spotify.com/track/0maSUktGFelOHPjTP8c1Kd?si=ec532243f52249db"><i>Eve</i> - Inochi no Tabekata</a></li>
                                    <li><a href="https://open.spotify.com/track/5yfaSi6UmJkuRk2qGDmA5E?si=3307d8fdea164cd3"><i>Kikuo</i> - Histrionic</a></li>
                                    <li><a href="https://open.spotify.com/track/3ztkQGYH19MDzZRGGpXbWk?si=72d7e20b723243d8"><i>Dance Gavin Dance</i> - Death of a strawberry</a></li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="personal-book-end personal-min-book-end"><tr><td></td></tr></tbody>
                </table>
                <!-- IF YOUR GOING TO ADD MORE PAGES LET ME KNOW -->
            </div>
            <div class="row row-center">
                <a class="button-primary personal-button" href="mailto:104382359@students.swinburne.edu.my">Email Me</a>
            </div>
        </main>
        <footer>
            <div class="footerrow">
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
                    </ul>
                </div>
                <div class="footercol">
                    <h4>Sources</h4>
                    <ul class="enquiry-footerlink">
                        <li><a href="https://cdnjs.com/libraries/font-awesome">Nav Bars Icon</a></li>
                        <li><a href="https://fonts.google.com/icons?selected=Material+Symbols+Outlined:close:FILL@0;wght@400;GRAD@0;opsz@24&icon.size=24&icon.color=%23e8eaed">Nav X Icon</a></li>
                        <li><a href="https://youtu.be/8eFeIFKAKHw?si=DGfhqh9YwUqYHUk3">Navbar CSS</a></li>
                        <li><a href="https://youtu.be/W6K26i9FwZU?si=fOWWLyF0cvDPPQgW">Flipbook animation</a></li>
                        <li><a href="https://dorm-decor.com/products/fabric-swatch-soft-pink-linen">
                            Soft pink linen
                        </a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </body>
</html>
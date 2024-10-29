<!DOCTYPE html>
<html lang="en">
    <head>
        <!--Metadata-->
        <meta charset="UTF-8">
        <meta name="description" content="Profile of one of the developer">
        <meta name="keywords" content="HTML, CSS">
        <meta name="author" content="040925120239, Leong Gui Xiong">
        <!--Stylesheets-->
        <link rel="stylesheet" type="text/css" href="styles/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <link rel="icon" href="images/logo2.png" type="image/x-icon">
        <title>Leong Gui Xiong</title>
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
                    <tbody class="personal-book-start personal-leong-book-front"><tr>
                        <th><label for="page-1"><input id="book-front" class="personal-book-radio" name="page" type="radio" checked></th></tr></label>
                        <td><img class="personal-book-pfp" src="images/personal/leong/WhatsApp Image 2024-10-14 at 15.24.35.jpeg" alt="Avatar">
                            <div class="personal-book-label">
                                <span class="personal-book-label-name">Leong Gui Xiong</span><br>
                                <span class="personal-book-label-studentId">104389169</span><br>
                                <span class="personal-book-label-course">BACHELOR OF COMPUTER SCIENCE</span>
                            </div>
                        </td>
                    </tbody>
                    <tbody class="page page-1 personal-tbl-info table-striped">
                        <tr>
                            <th>
                                <input id="page-1" class="personal-book-radio" name="page" type="radio">INTRODUCTION
                            </th>
                            <td>
                                <p>Hello! I’m Leong Gui Xiong a computer science student passionate about technology. I’m always eager to learn about the latest trends and innovations in the field. From software development to artificial intelligence, I’m fascinated by the endless possibilities that technology offers.</p>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="page page-2 personal-tbl-info table-striped">
                        <tr>
                            <th><input id="page-2" class="personal-book-radio" name="page" type="radio" >HOMETOWN</th>
                            <td colspan="100"><label for="page-3">
                                <img class="personal-book-sabah" src="images/personal/leong/imageOfKk.jpg">
                                <strong>Sabah, Kota Kinabalu(KK);</strong>
                                A relatively smaller coastal city. KK has a lot of cultural history
                                and is famous for our seafood. If you are ever planning to travel to KK
                                one must try out <a href="https://g.co/kgs/B8mdobW">Fatt Kee Seafood Restaurant</a>.
                                The fish noodle soup there is to die for.
                            </label></td>
                        </tr>
                    </tbody>
                    <tbody class="page page-3 personal-tbl-info table-striped">
                        <tr>
                            <th rowspan="2"><input id="page-3" class="personal-book-radio" name="page" type="radio">MY ACHIEVEMENT(S)</th>
                            <td>
                                <strong>2nd Place in STTSS STEM innovation competition 2019;&nbsp;</strong>
                                Back in my highschool i was part of the Makerlab club. A club dedicated to engineering
                                and technology. In 2019 we held a competition to create a product that helps the community.
                                My project was of a simple canteen ordering system to be used in school but the main winning
                                point of my project was the use of QR codes instead of card readers making it much cheaper and
                                faster to deploy compared to conventional products. 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>OOZE club 2020 Lockdown PitchBah;&nbsp;</strong>
                                I participated in a pitching competition with my idea BattleQuiz that aimed to make learning
                                easier by gamifying it.
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
                                    <li><a href="https://genshin.hoyoverse.com/en/">Genshin Impact</a></li>
                                    <li><a href="https://store.steampowered.com/app/294100/RimWorld/">Rimworld</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><Strong>Favourite Music 🎵;</Strong></label>
                                <ul class="personal-fav-ul">
                                    <li><a href="https://youtu.be/hF0I9h7C4A4?si=VnYXoO4JvJvf53VC"><i>LilyPichu</i> - Last cup of coffee</a></li>
                                    <li><a href="https://youtu.be/dQw4w9WgXcQ?si=2uEiUWm_SwtH4odx"><i>Rick Astley</i> - Never Gonna Give You Up</a></li>
                                    <li><a href="https://youtu.be/N17FXwRWEZs?si=TuLSn4mMiKSX8Uy4"><i>Maroon 5</i> - Daylight</a></li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="personal-book-end personal-leong-book-end"><tr><td></td></tr></tbody>
                </table>
            </div>
            <div class="row row-center">
                <a class="button-primary personal-button" href="mailto:104389169@students.swinburne.edu.my">Email Me</a>
            </div>
        </main>
        <?php 
            $sources=[
                ["url"=>"https://fonts.google.com/icons?selected=Material+Symbols+Outlined:close:FILL@0;wght@400;GRAD@0;opsz@24&icon.size=24&icon.color=%23e8eaed","label"=>"Nav X Icon"],
                ["url"=>"https://youtu.be/EgqwdlY9iaQ?si=o7AitaXCotQ07HXe","label"=>"Responsive Navbar"],
                ["url"=>"https://cdnjs.com/libraries/font-awesome","label"=>"Nav Bar Icon"],
                ["url"=>"https://youtu.be/W6K26i9FwZU?si=fOWWLyF0cvDPPQgW","label"=>"Flipbook animation"],
                ["url"=>"https://www.tripadvisor.in/LocationPhotoDirectLink-g298307-d13435123-i381689441-I_Love_KK-Kota_Kinabalu_Kota_Kinabalu_District_West_Coast_Division_Saba.html","label"=>"Picture of KK"],
                ["url"=>"https://www.linenme.com/linen-fabrics/soft-furnishing-fabrics/grey-linen-fabric-prewashed-rustico","label"=>"Grey linen"],
            ];

            include('/xampp/htdocs/assign1/footer.inc'); 
        ?>
    </body>
</html>
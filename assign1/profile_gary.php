<!DOCTYPE html>
<html lang="en">
    <head>
        <!--Metadata-->
        <meta charset="UTF-8">
        <meta name="description" content="Profile of developer Gary Alebertyn">
        <meta name="keywords" content="HTML, CSS">
        <meta name="author" content="102783992, Gary Albertyn">
        <!--Stylesheets-->
        <link rel="stylesheet" type="text/css" href="styles/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <link rel="icon" href="images/logo2.png" type="image/x-icon">
        <title>GARY ALBERTYN</title>
    </head>
    <body>
        <?php include('/xampp/htdocs/assign1/header.php'); ?>
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
                    <tbody class="personal-book-start persoanl-gary-book-front"><tr>
                        <th><label for="page-1"><input id="book-front" class="personal-book-radio" name="page" type="radio" checked></th></tr></label>
                        <td><img class="personal-book-pfp" src="images/personal/gary/gary_pfp.jpeg" alt="Avatar">
                            <div class="personal-book-label">
                                <span class="personal-book-label-name">GARY ALBERTYN</span><br>
                                <span class="personal-book-label-studentId">102783992</span><br>
                                <span class="personal-book-label-course">BACHELOR OF INFORMATION AND TECHNOLOGY</span>
                            </div>
                        </td>
                    </tbody>
                    <tbody class="page page-1 personal-tbl-info table-striped">
                        <tr>
                            <th><input id="page-1" class="personal-book-radio" name="page" type="radio" >INTRODUCTION</th>
                            <td>
                                <p>Hi, I’m Gary Albertyn, a 23-year-old from Kuching, Sarawak, currently living in Matang Jaya. I’m passionate about outdoor adventures like riding dirt bikes, playing paintball, and go-karting. When I’m not out chasing thrills, you’ll likely find me enjoying my favorite foods—sushi, kueh tiaw, and mee goreng—or expanding my growing collection of shoes and hats. Welcome to my profile, where I share bits of my life, hobbies, and interests!</p>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="page page-2 personal-tbl-info table-striped">
                        <tr>
                            <th><input id="page-2" class="personal-book-radio" name="page" type="radio" >HOMETOWN</th>
                            <td colspan="100"><label for="page-3">
                                I’m originally from Serian, a charming town located about 65 kilometers from Kuching in Sarawak, Malaysia. Known for its rich cultural diversity and beautiful natural surroundings, Serian is a key hub for the Bidayuh community. The town is famous for its markets, particularly for durian season, where locals gather to enjoy this beloved fruit. Surrounded by lush hills and rivers, Serian offers easy access to outdoor adventures like jungle trekking and exploring caves. It’s a peaceful, yet vibrant place that holds a special place in my heart.
                            </label></td>
                        </tr>
                    </tbody>
                    <tbody class="page page-3 personal-tbl-info table-striped">
                        <tr>
                            <th rowspan="2"><input id="page-3" class="personal-book-radio" name="page" type="radio">MY ACHIEVEMENT(S)</th>
                            <td>
                                One of my proudest moments was participating in an international paintball league, where my team and I competed against top talent from around the world. We achieved 3rd place in the Rookies Division, a great accomplishment for a team just starting out. We also pushed ourselves in the Open Division and secured 5th place, competing with seasoned players. It was an incredible experience that fueled my passion for the sport and sharpened my skills on the field.
                            </td>
                        </tr>
                        <tr>
                            <td>
                                I also have a passion for esports, and one of my standout moments was competing in a Valorant tournament at SEGi College. My team and I battled through a field of 50 teams, making it to the finals and securing 2nd place. We successfully outplayed 10 teams on our way to the finals, which was a huge accomplishment and a testament to our teamwork and strategy. It was an unforgettable experience that deepened my love for competitive gaming.
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="page page-4 personal-tbl-info table-striped">
                        <tr>
                            <th rowspan="3"><input id="page-4" class="personal-book-radio" name="page" type="radio">FAVOURITE STUFF</th>
                            <td>
                                <label><Strong>Favourite Books 📖;</Strong></label>
                                <ul class="personal-fav-ul">
                                    <li>The Hobbit</li>
                                    <li>Maze runner</li>
                                    <li>Diary of the wimpy kid</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><Strong>Favourite Games 🎮;</Strong></label>
                                <ul class="personal-fav-ul">
                                    <li>Counter-Strike 2</li>
                                    <li>Valorant</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><Strong>Favourite Music 🎵;</Strong></label>
                                <ul class="personal-fav-ul">
                                    <li><i>Bring Me The Horizon</i> - AmEN!</a></li>
                                    <li><i>Bad Omens</i> - Like A Villain</a></li>
                                    <li><i>Memphis May Fire</i> - Make believe</a></li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="personal-book-end persoanl-gary-book-end"><tr><td></td></tr></tbody>
                </table>
                <!-- IF YOUR GOING TO ADD MORE PAGES LET ME KNOW -->
            </div>
            <div class="row row-center">
                <a class="button-primary personal-button" href="mailto:102783992@students.swinburne.edu.my">Email Me</a>
            </div>
        </main>
        <?php 
            $sources=[
                ["url"=>"https://fonts.google.com/icons?selected=Material+Symbols+Outlined:close:FILL@0;wght@400;GRAD@0;opsz@24&icon.size=24&icon.color=%23e8eaed","label"=>"Nav X Icon"],
                ["url"=>"https://youtu.be/EgqwdlY9iaQ?si=o7AitaXCotQ07HXe","label"=>"Responsive Navbar"],
                ["url"=>"https://cdnjs.com/libraries/font-awesome","label"=>"Nav Bar Icon"],
                ["url"=>"https://youtu.be/W6K26i9FwZU?si=fOWWLyF0cvDPPQgW","label"=>"Flipbook animation"],
                ["url"=>"https://www.linenme.com/samples/linen-fabric-sample-paula-red","label"=>"Red linen"],
            ];

            include('/xampp/htdocs/assign1/footer.inc'); 
        ?>
    </body>
</html>
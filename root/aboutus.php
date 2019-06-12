<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#222">
    <title>ElectFest | About Us</title>
    <link rel="shortcut icon" href="source/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/aboutus.css">
    <link rel="stylesheet" href="styles/grid.css">
</head>

<body>
    <div id="content">
        <!-- Nav Bar -->
        <?php include 'includes/navbar.php'; ?>
        <!-- Main Content -->
        <header>
            <div class="container text-overlay">
                <h1>Our Team</h1>
                <p>Learn more about the team behind this year's edition of ElectFest!</p>
            </div>
        </header>
        <div id="about-us" class="container">
            <div class="team-info">
                <div class="person">
                    <img src="source/aboutus/basjan.jpg" alt="">
                    <div class="person-info">
                        <h1>Basjan Schouwenaars</h1>
                        <p>ElectFest Owner & Manager</p>
                        <div class="person-social">
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-facebook-square"></i></a>
                            <a href=""><i class="fab fa-twitter-square"></i></a>
                        </div>
                    </div>
                </div>
                <div class="person">
                    <img src="source/aboutus/li.jpg" alt="">
                    <div class="person-info">
                        <h1>Li Li</h1>
                        <p>Team Mentor</p>
                        <div class="person-social">
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-facebook-square"></i></a>
                            <a href=""><i class="fab fa-twitter-square"></i></a>
                            <a href=""><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="person">
                    <img src="source/aboutus/plamen.jpg" alt="">
                    <div class="person-info">
                        <h1>Plamen Lakov</h1>
                        <p>Project Leader & Front-End Developer</p>
                        <div class="person-social">
                            <a href="https://www.instagram.com/plamenlakov/"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.facebook.com/plamenlakov"><i class="fab fa-facebook-square"></i></a>
                            <a href="https://www.linkedin.com/in/plamenlakov/"><i class="fab fa-linkedin"></i></a>
                            <a href="https://github.com/plamenlakov"><i class="fab fa-github-square"></i></a>
                        </div>
                    </div>
                </div>
                <div class="person">
                    <img src="source/aboutus/borislav.jpg" alt="">
                    <div class="person-info">
                        <h1>Borislav Kiselkov</h1>
                        <p>C# Applications Developer</p>
                        <div class="person-social">
                            <a href="https://www.instagram.com/bobbykiselkov/"><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-facebook-square"></i></a>
                            <a href="https://www.linkedin.com/in/borislav-kiselkov-5b54b2181/"><i class="fab fa-linkedin"></i></a>
                            <a href=""><i class="fab fa-github-square"></i></a>
                        </div>
                    </div>
                </div>
                <div class="person">
                    <img src="source/aboutus/daniel.jpg" alt="">
                    <div class="person-info">
                        <h1>Daniel Krumov</h1>
                        <p>Back-End Developer</p>
                        <div class="person-social">
                            <a href="https://www.instagram.com/danielkrumov_/"><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-facebook-square"></i></a>
                            <a href=""><i class="fab fa-linkedin"></i></a>
                            <a href=""><i class="fab fa-github-square"></i></a>
                        </div>
                    </div>
                </div>
                <div class="person">
                    <img src="source/aboutus/ogi.jpg" alt="">
                    <div class="person-info">
                        <h1>Ognyan Vrachanski</h1>
                        <p>Database Architect & Operator</p>
                        <div class="person-social">
                            <a href="https://www.instagram.com/ognyanvrachanski/"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.facebook.com/ognyan.vrachanski.4"><i class="fab fa-facebook-square"></i></a>
                            <a href=""><i class="fab fa-linkedin"></i></a>
                            <a href=""><i class="fab fa-github-square"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mapouter">
            <div class="gmap_canvas"><iframe width="100%" height="280" id="gmap_canvas" src="https://maps.google.com/maps?q=Rachelsmolen%201%2C%205612%20MA%20Eindhoven&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div>
            <style>
                .mapouter {
                    position: relative;
                    text-align: right;
                    height: 280px;
                    width: 100%;
                }

                .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    height: 280px;
                    width: 100%;
                }
            </style>
        </div>
        <div id="contact-us">
            <div class="container">
                <div class="contact-form">
                <h1>📩 Contact us!</h1>
                <form class="pure-form">
                    <fieldset class="pure-group">
                        <input type="text" class="pure-input-1" placeholder="Full Name *" required>
                        <input type="text" class="pure-input-1" placeholder="Email Address *"required>
                        <input type="email" class="pure-input-1" placeholder="Phone Number">
                    </fieldset>

                    <fieldset class="pure-group">
                        <input type="text" class="pure-input-1" placeholder="Why are you contacting us? *"required>
                        <textarea class="pure-input-1" placeholder="" required></textarea>
                    </fieldset>

                    <button type="submit" class="pure-button pure-input-1 pure-button-primary">Send</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.inc.php' ?>
    <!-- Scripts -->
    <script src="scripts/main.js"></script>
</body>

</html>
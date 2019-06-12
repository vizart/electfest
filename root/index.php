<?php session_start();
setcookie("login_redirect", "");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#222">
    <title>ElectFest | Home</title>
    <link rel="shortcut icon" href="source/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/homepage.css">
    <link rel="stylesheet" href="styles/grid.css">
    <link rel="stylesheet" href="styles/footer.css">
</head>

<body>
    <!-- Nav Bar -->
    <div id="content">
        <?php include 'includes/navbar.php'; ?>
        <!-- Main Content -->
        <div class="carouselWrapper">
            <div class="carousel">
                <div class="slide"><img src="source/festival1.jpg" alt=""></div>
                <div class="slide"><img src="source/festival3.jpg" alt=""></div>
                <div class="slide"><img src="source/festival2.jpg" alt=""></div>
            </div>
        </div>
        <div class="container">
            <div id="icons" class="row">
                <div class="col-4">
                    <i class="fas fa-map-marked-alt gradient"></i>
                    <p>The location of this years Electfest is the camping park Kuierpad in Drenthe! With a great variety of camping spots and a number of lakes to have a quick swim, we gurantee to please your adventurous side. The big open space at the festival's stage has a number of stands that offer a big selection of drinks and tasty food!</p>
                </div>
                <div class="col-4">
                    <i class="fas fa-ticket-alt gradient"></i>
                    <p>ElectFest 2019 tickets are now available. A limited amount of door tickets will be available. Please note that we cannot guarantee you a doorsale ticket, they will only be available as long as the stock lasts. Two types of tickets are offered - Regular and a ticket that has a Camp Spot included. For more information, please visit our <a href="tickets.php">Ticket Page</a>.</p>
                </div>
                <div class="col-4">
                    <span id="age-restriction" class="fa-stack fa-3x">
                        <strong class="fa-stack-1x calendar-text gradient">18</strong>
                        <i class="fas fa-ban fa-stack-2x kur"></i>
                    </span>
                    <p>The festival aims to have a fun atmosphere with many conviniences that enchance the experience, one of which are the offered alcoholic drinks. That's why people under the age of 18 are prohibited from taking part in the event.</p>
                </div>
            </div>
        </div>
        <!-- Parallax Pattern -->
        <div id="parallax-pattern">
            <div class="container"><h1>LINE UP</h1></div>
        </div>
        <!-- Info Panels  -->
        <div id="info-panels">
            <div class="container">
                <div class="row">
                    <div class="col-5">
                        <img class="img-panel" src="source/campsite.jpg" alt="">
                    </div>
                    <div class="col-7 text-panel">
                        <h1>⛺ CAMPSITE</h1>
                        <p>Pitching your tent in the sun, chilling with your friends, having fun, drink in hand, cool music and nothing but good times: In short, Electfest! In 2019 Electfest is back. As a visitor you can set up your tent on our lush, green festival campsite.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7 text-panel">
                        <div class="aligner">
                            <div class="aligner-item">
                                <h1>🍔 FOOD & 🍻 DRINKS</h1>
                                <p>With our hand picked food and variety of drinks in a thoughtfully designed and decorated festival area. We very much emphasise the equality of all people and want to create a festival with a great open-minded community spirit so that everyone can have a great time.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <img class="img-panel" src="source/drinksfood.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.inc.php'?>
    <!-- Scripts -->
    <script src="scripts/main.js"></script>
    <script src="scripts/homepage.js"></script>
</body>

</html>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/stylesheet.css">
    <link rel="stylesheet" href="styles/grid.css">
</head>
<body>
    <!-- Nav Bar -->
    <div id="content">
    <?php include 'includes/navbar.php';?>
    <!-- Main Content -->
        <div class="carouselWrapper">
            <div class="carousel">
                <div class="slide"><img src="source/festival1.jpg" alt=""></div>
                <div class="slide"><img src="source/festival2.jpg" alt=""></div>       
                <div class="slide"><img src="source/festival3.jpg" alt=""></div>
            </div>
        </div>
        <div class="container">
            <div id="icons" class="row">
            <div class="col-4">
                <i class="fas fa-map-marked-alt gradient"></i>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque aliquet condimentum tortor. Sed consectetur, augue posuere tincidunt consequat, mauris arcu luctus mi, quis finibus erat tellus vehicula mauris. Integer ultrices lacinia aliquam. Integer eget orci maximus eros laoreet dictum. Etiam rhoncus porttitor leo. Praesent augue nulla, consectetur ac odio nec.</p>
            </div>
            <div class="col-4">
                <i class="fas fa-ticket-alt gradient"></i>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque aliquet condimentum tortor. Sed consectetur, augue posuere tincidunt consequat, mauris arcu luctus mi, quis finibus erat tellus vehicula mauris. Integer ultrices lacinia aliquam. Integer eget orci maximus eros laoreet dictum. Etiam rhoncus porttitor leo. Praesent augue nulla, consectetur ac odio nec.</p>
            </div>
            <div class="col-4">
            <span id="age-restriction" class="fa-stack fa-3x">
                <strong class="fa-stack-1x calendar-text gradient">18</strong>
                <i class="fas fa-ban fa-stack-2x kur"></i>
            </span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque aliquet condimentum tortor. Sed consectetur, augue posuere tincidunt consequat, mauris arcu luctus mi, quis finibus erat tellus vehicula mauris. Integer ultrices lacinia aliquam. Integer eget orci maximus eros laoreet dictum. Etiam rhoncus porttitor leo. Praesent augue nulla, consectetur ac odio nec.</p>
            </div>
            </div>
        </div>
        <!-- Parallax Pattern -->
        <div id="parallax-pattern">
            <div id="parallax-overlay"></div>
        </div>
        <!-- Info Panels  -->
        <div id="info-panels">
            <div class="container">
                <div class="row">
                    <div class="col-5">
                        <img class="img-panel" src="../source/campsite.jpg" alt="">
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
                        <img class="img-panel" src="../source/drinksfood.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="scripts/script.js"></script>
</body>
</html>
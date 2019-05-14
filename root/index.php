<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="styles/stylesheet.css">
    <link rel="stylesheet" href="styles/grid.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
    <!-- Nav Bar -->
    <?php include 'includes/navbar.php';?>
    <!-- Main Content -->
    <div id="content">
        <div class="carousel">
            <div class="label">
                <h3>SAMPLE TEXT</h3>
            </div>
            <div class="slide">
                <img src="source/festival3.jpg" alt="">
            </div>
            <div class="slide">
                <img src="source/festival2.jpg" alt="">
            </div>
            <div class="slide">
                <img src="source/festival1.jpg" alt="">
            </div>
        </div>
        <div class="container">
            <div id="icons" class="row">
            <div class="col-4">
                <i class="fas fa-map-marked-alt"></i>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque aliquet condimentum tortor. Sed consectetur, augue posuere tincidunt consequat, mauris arcu luctus mi, quis finibus erat tellus vehicula mauris. Integer ultrices lacinia aliquam. Integer eget orci maximus eros laoreet dictum. Etiam rhoncus porttitor leo. Praesent augue nulla, consectetur ac odio nec.</p>
            </div>
            <div class="col-4">
                <i class="fas fa-ticket-alt"></i>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque aliquet condimentum tortor. Sed consectetur, augue posuere tincidunt consequat, mauris arcu luctus mi, quis finibus erat tellus vehicula mauris. Integer ultrices lacinia aliquam. Integer eget orci maximus eros laoreet dictum. Etiam rhoncus porttitor leo. Praesent augue nulla, consectetur ac odio nec.</p>
            </div>
            <div class="col-4">
                <i class="fas fa-map-marked-alt"></i>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque aliquet condimentum tortor. Sed consectetur, augue posuere tincidunt consequat, mauris arcu luctus mi, quis finibus erat tellus vehicula mauris. Integer ultrices lacinia aliquam. Integer eget orci maximus eros laoreet dictum. Etiam rhoncus porttitor leo. Praesent augue nulla, consectetur ac odio nec.</p>
            </div>
            </div>
        </div>    
    </div>
    <!-- Scripts -->
    <script src="scripts/script.js"></script>
</body>
</html>
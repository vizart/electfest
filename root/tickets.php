<?php session_start();
$_SESSION['previous_location'] = 'tickets';
setcookie("login_redirect", "tickets");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#222">
    <title>ElectFest | Tickets</title>
    <link rel="shortcut icon" href="source/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/grid.css">
    <link rel="stylesheet" href="styles/tickets.css">
    <link rel="stylesheet" href="styles/overlay.css">
    <link rel="stylesheet" href="styles/footer.css">
</head>

<body>
    <div id="content">
        <!-- Nav Bar -->
        <?php include 'includes/navbar.php'; ?>
        <?php include 'includes/overlay.php'; ?>
        <!-- Main Content -->
        <header>
            <div class="container text-overlay">
                <h1>🎟 Tickets</h1>
                <p>ElectFest 2019 tickets are now available. Early bird tickets are already sold out.A limited amount of door tickets will be available. Please note that we cannot guarantee you a doorsale ticket, they will only be available as long as the stock lasts. First come, first served - so we advice you to arrive early in this case.</p>
            </div>
        </header>
        <div id="tickets" class="container">
            <div class="ticket">
                <div class="ticket-info">
                    <h1>Day Ticket - Regular 🎉</h1>
                    <p>If you want to visit ElectFest for a day, order this ticket. A day full of adventure with top artists, big shows and fireworks! This ticket has everything included in order for you to have a fun time at ElectFest 2019!</p>
                </div>
                <div class="buy-ticket">
                    <?php
                    if (isset($_SESSION['hasCampSpot'])) {
                        if ($_SESSION['hasCampSpot'] == true || $_SESSION['hasCampSpot'] == false) {
                            echo '<h2>BOUGHT ✔️</h2>';
                        }
                    } else {
                        echo '<h2>BUY TICKET €50</h2>';
                    }

                    ?>
                </div>
            </div>
            <div class="ticket">
                <div class="ticket-info">
                    <h1>Day Ticket - Camp Spot ⛺️</h1>
                    <p>Too tired and in a desprate need of a nap - this ticket includes a campsite spot, so you can pitch up your tent, take a nap or kick it with your friends. A day full of adventure with top artists, big shows and fireworks!</p>
                </div>
                <div class="buy-ticket">
                    <?php
                    if (isset($_SESSION['hasCampSpot'])) {
                        if ($_SESSION['hasCampSpot'] == false) {
                            echo '<h2>UPGRADE €25</h2>';
                        } else {
                            echo '<h2>BOUGHT ✔️</h2>';
                        }
                    } else {
                        echo '<h2>BUY TICKET €75</h2>';
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.inc.php'?>
    <!-- Scripts -->
    <script src="scripts/main.js"></script>
    <script src="scripts/ticketpage.js"></script>
    <?php
    if (isset($_GET['error'])) {
        echo '<script>document.querySelector("#overlay").style.display = "flex";clickOutside();</script>';
    }

    if (isset($_SESSION['hasCampSpot'])) {
        if ($_SESSION['hasCampSpot'] == false) {
            echo '<script>document.querySelectorAll(".buy-ticket")[0].style.pointerEvents = "none";</script>';
        }else{
            echo '<script>document.querySelectorAll(".buy-ticket")[0].style.pointerEvents = "none";document.querySelectorAll(".buy-ticket")[1].style.pointerEvents = "none";</script>';
        }
    }
    ?>
    
</body>

</html>
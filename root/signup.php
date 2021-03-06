<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="theme-color" content="#222">
        <title>ElectFest | Sign Up</title>
        <link rel="shortcut icon" href="source/favicon.png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="styles/signup.css">
        <link rel="stylesheet" href="styles/grid.css">
</head>

<body>
        <div id="content">
                <!-- Nav Bar -->
                <?php include 'includes/navbar.php'; ?>
                <!-- Main Content -->
                <div id="full-form">
                        <div class="container">
                                <div class="row">
                                        <div class="col-3"></div>
                                        <div class="col-6 formWrapper">
                                                <h1>Sign Up</h1>
                                                <form class="pure-form pure-form-aligned" action="includes/signup.inc.php" method="post">
                                                        <fieldset>
                                                                <div class="pure-control-group">
                                                                        <input id="email" type="email" placeholder="Email Address" name="mail" required>
                                                                </div>
                                                                <div class="pure-control-group">
                                                                        <input id="password" type="password" placeholder="Password" name="pwd" required>
                                                                </div>
                                                                <div class="pure-control-group">
                                                                        <input id="confirmPassword" type="password" placeholder="Confirm Password" name="pwd-repeat" required>
                                                                </div>
                                                                <div class="pure-controls">
                                                                        <label for="cb" class="pure-checkbox">
                                                                                <input id="cb" type="checkbox" required> I confirm I'm 18 or older.
                                                                        </label>
                                                                        <button type="submit" class="pure-button pure-button-primary" name="signup-submit">Sign Up</button>
                                                                </div>
                                                        </fieldset>
                                                </form>
                                        </div>
                                        <div class="col-3"></div>
                                </div>
                        </div>
                </div>
        </div>
        <!-- Scripts -->
        <script src="scripts/main.js"></script>
</body>

</html>
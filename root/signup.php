<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Register</title>
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
                                                <form class="pure-form pure-form-aligned">
                                                        <fieldset>
                                                                <div class="pure-control-group">
                                                                        <input id="email" type="email" placeholder="Email Address">
                                                                        <!-- Can echo element below when input not filled -->
                                                                        <!-- <span class="pure-form-message-inline">This is a required field.</span> -->
                                                                </div>
                                                                <div class="pure-control-group">
                                                                        <input id="password" type="password" placeholder="Password">
                                                                </div>
                                                                <div class="pure-control-group">
                                                                        <input id="confirmPassword" type="password" placeholder="Confirm Password">
                                                                </div>
                                                                <div class="pure-controls">
                                                                        <label for="cb" class="pure-checkbox">
                                                                                <input id="cb" type="checkbox"> I've read the terms and conditions
                                                                        </label>
                                                                        <button type="submit" class="pure-button pure-button-primary">Sign Up</button>
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
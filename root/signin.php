<?php session_start();
setcookie("login_redirect", "signin");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#222">
    <title>ElectFest | Sign In</title>
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
                        <h1>Sign In</h1>
                        <?php
                        if (isset($_GET['error'])) {
                            if ($_GET['error'] == "nouser") {
                                echo '<p style="color:red">Wrong email!</p>';
                            }
                            if ($_GET['error'] == "wrongpassword") {
                                echo '<p style="color:red">Wrong password!</p>';
                            }
                        }
                        ?>
                        <form class="pure-form pure-form-aligned" action="includes/login.inc.php" method="post">
                            <fieldset>
                                <div class="pure-group">
                                    <input id="email" type="email" placeholder="Email Address" name="mailuid" required>
                                    <input id="password" type="password" placeholder="Password" name="pwd" required>
                                </div>
                                <p>Haven't signed up yet? Do it <a href="signup.php">here.</a></p>
                                <div class="pure-controls">
                                    <button type="submit" class="pure-button pure-button-primary" name="login-submit">Sign In</button>
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
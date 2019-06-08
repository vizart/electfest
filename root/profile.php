<?php session_start();
if (!isset($_SESSION['userId']) || empty($_SESSION['userId'])){
    header("Location: signin.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Profile</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/profile.css">
    <link rel="stylesheet" href="styles/grid.css">
</head>

<body>
    <div id="content">
        <!-- Nav Bar -->
        <?php include 'includes/navbar.php'; ?>
        <!-- Main Content -->
        <div class="container">
            <div id="profile-info">
                <img src="source/profilepic.png" alt="">
            </div>
            <div class="slide">
                <h3>💰 Check Balance / Add Funds</h3>
                <div class="slide-info">
                    <?php
                    function getBalance()
                    {
                        require 'includes/dbh.inc.php';
                        require 'includes/login.inc.php';
                        $userId = $_SESSION['userId'];
                        $sql = "SELECT balance FROM account WHERE userId=" . $userId;
                        $stmt = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            header("Location: signin.php");
                            exit();
                        } else {
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);
                            if ($row = mysqli_fetch_assoc($result)) {
                                return $row['balance'];
                            }
                        }
                        return null;
                    }
                    $balance = getBalance();
                    if (is_null($balance)) {
                        echo "<h2>Please buy a ticket to get an account balance.</h2>";
                    } else {
                        echo '
                        <form class="pure-form" action="includes/addcredit.inc.php" method="post">
                        <fieldset>';
                        echo    "<legend>Current Balance : $balance </legend>";
                        if (isset($_GET['error'])) {
                            if ($_GET['error'] == "invalidfield") {
                                echo '<p style="color:red">Please enter a valid number of credits.</p>';
                            }
                        }
                        echo    '<input type="text" placeholder="Amount" name="addcredit" required>
                            <button type="submit" class="pure-button pure-button-primary" name="addcredit-submit">Add Credits</button>
                        </fieldset>
                        </form>
                        ';
                    }
                    ?>
                </div>
            </div>
            <div class="slide">
                <h3>🎟 View Ticket</h3>
                <div class="slide-info">
                    <?php
                        require 'generator.php';
                    ?>
                </div>
            </div>
            <div class="slide">
                <h3>📧 Change Email Address</h3>
                <div class="slide-info">

                </div>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="scripts/main.js"></script>
    <script>
        var coll = document.querySelectorAll(".slide > h3");
        for (var i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        }
        if (window.location.href.indexOf("error=invalidfield") > -1 || window.location.href.indexOf("updateBalance=success") > -1) {
            document.querySelector(".slide-info").style.transition = "none";
            coll[0].click();
            document.querySelector(".slide-info").style.transition = "max-height 0.2s ease-out";
        }
        if(window.location.href.indexOf("buyticket=success") > -1){
            coll[1].click();
        }
    </script>
</body>

</html>
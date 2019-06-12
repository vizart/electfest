<?php session_start();
if (!isset($_SESSION['userId']) || empty($_SESSION['userId'])) {
    header("Location: signin.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#222">
    <title>ElectFest | My Profile</title>
    <link rel="shortcut icon" href="source/favicon.png">
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
                <h3 style="text-transform: uppercase; margin-top: 15px; border-bottom: 4px solid #ec519e;">
                <?php echo $_SESSION['currentMail']; ?></h3>
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
                        echo    "<legend>Current Balance : €$balance </legend>";
                        if (isset($_GET['error'])) {
                            if ($_GET['error'] == "invalidfield2") {
                                echo '<p style="color:red">The minimum credit deposit is €10.</p>';
                            }
                        }
                        if (isset($_GET['error'])) {
                            if ($_GET['error'] == "invalidfield") {
                                echo '<p style="color:red">Please enter a valid number of credits.</p>';
                            }
                        }
                        echo    '<input type="text" placeholder="Amount in €" name="addcredit" required>
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
                    <?php if(isset($_SESSION['hasCampSpot'])){ ?>
                        <h4 style="text-align:center">Your ticket<?php if($_SESSION['hasCampSpot'] == true){echo ' has a camp spot included. ⛺';}else{echo ' has no camp spot included. 🎟';} ?></h4>
                    <?php }else{echo'<h2>Please buy a ticket in order to recieve a QR code.</h2>';}?>
                    <?php
                    require 'generator.php';
                    ?>
                </div>
            </div>
            <div class="slide">
                <h3>📧 Change Email Address</h3>
                <div class="slide-info">
                    <center>
                        <form class="pure-form pure-form-stacked" action="includes/changemail.inc.php" method="post">
                            <legend>Your current email is: <?php echo $_SESSION['currentMail']; ?></legend>
                            <?php
                            if (isset($_GET['changemail'])) {
                                if ($_GET['changemail'] == "invalidfields") {
                                    echo '<p style="color:red">The specified emails are invalid.</p>';
                                }
                                if ($_GET['changemail'] == "invalidmail") {
                                    echo '<p style="color:red">One of the specified emails is invalid.</p>';
                                }
                                if ($_GET['changemail'] == "mailsnotmatching") {
                                    echo '<p style="color:red">The mails are not matching.</p>';
                                }
                                if ($_GET['changemail'] == "success") {
                                    echo '<p style="color:green">Mail successfully changed!</p>';
                                }
                                if ($_GET['changemail'] == "wrongpassword") {
                                    echo '<p style="color:red">Incorrect password.</p>';
                                }
                            }
                            ?>
                            <fieldset class="pure-group">
                                <input type="email" placeholder="New Email" name="newmail" required>
                                <input type="email" placeholder="Confirm Email" name="newmail-confirm" required>
                            </fieldset>
                            <input type="password" placeholder="Password" name="pwd" required>

                            <button style="margin-bottom:10px;" type="submit" class="pure-button pure-button-primary" name="changemail-submit">Submit</button>
                        </form>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="scripts/main.js"></script>
    <script>
        console.log("PENIS");
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
                console.log("PENIS");
            });
        }
        if (window.location.href.indexOf("error=invalidfield") > -1 || window.location.href.indexOf("updateBalance=success") > -1) {
            document.querySelector(".slide-info").style.transition = "none";
            coll[0].click();
            document.querySelector(".slide-info").style.transition = "max-height 0.2s ease-out";
        }
        if (window.location.href.indexOf("buyticket=success") > -1) {
            coll[1].click();
        }
        if (window.location.href.indexOf("changemail") > -1) {
            coll[2].click();
        }
    </script>
</body>

</html>
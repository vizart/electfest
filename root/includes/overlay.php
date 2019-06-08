<div id="overlay">

    <?php if (!isset($_SESSION['userId']) || empty($_SESSION['userId'])) { ?>
        <div id="login-form" class="form-wrapper slide-rotate-hor-top">
            <form class="pure-form pure-form-aligned" action="includes/login.inc.php" method="post">
                <fieldset>
                    <legend>⚠️ Please sign in, in order to purchase a ticket!</legend>
                    <?php
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == "wrongpassword") {
                            echo '<p style="color:red">Wrong password!</p>';
                        }
                    }
                    ?>
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
    <?php } ?>

    <?php if (isset($_SESSION['userId'])) { ?>
        <div id="ticket-form" class="form-wrapper">
            <div class="slide-rotate-hor-top no-camp">
                <form class="pure-form pure-form-aligned" action="includes/buyticketNOCAMP.inc.php" method="post">
                    <h1 style="text-align:center;">Regular Ticket 🎟</h1>
                    <fieldset>
                        <legend>🎟 Please fill in your details below, to purchase a ticket.</legend>
                        <?php if (isset($_GET['error'])) {
                            if ($_GET['error'] == "invalidIBAN") {
                                echo '<p style="color:red">Please enter a valid IBAN!</p>';
                            }
                        }?>
                        <div class="pure-control-group">
                            <div class="form-names">
                                <input id="first-name" type="text" placeholder="First Name" name="firstname">
                                <input id="last-name" type="text" placeholder="Last Name" name="lastname">
                            </div>
                            <input id="iban" type="text" placeholder="IBAN" name="IBAN">
                        </div>
                        <div class="pure-controls">
                            <button type="submit" class="pure-button pure-button-primary" name="buyticketNOCAMP-submit">Buy Ticket</button>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="slide-rotate-hor-top camp">
                <form class="pure-form pure-form-aligned" action="includes/buyticketCAMP.inc.php" method="post">
                    <h1 style="text-align:center;font-size: 2rem">Camp Spot Ticket ⛺️</h1>
                    <fieldset>
                        <legend>🎟 Please fill in your details below, to purchase a ticket.</legend>
                        <?php if (isset($_GET['error'])) {
                            if ($_GET['error'] == "invalidIBAN") {
                                echo '<p style="color:red">Please enter a valid IBAN!</p>';
                            }
                        }?>
                        <div class="pure-control-group">
                            <div class="form-names">
                                <input id="first-name" type="text" placeholder="First Name" name="firstname2">
                                <input id="last-name" type="text" placeholder="Last Name" name="lastname2">
                            </div>
                            <input id="iban" type="text" placeholder="IBAN" name="IBAN2">
                        </div>
                        <div class="pure-controls">
                            <button type="submit" class="pure-button pure-button-primary" name="buyticketCAMP-submit">Buy Ticket</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    <?php } ?>
</div>
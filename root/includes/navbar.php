<div id="navigation">
    <nav>
        <div class="nav-logo">
            <a href="index.php">
                <img src="source/logo.png" alt="">
            </a>
        </div>
        <ul class="nav-links">
            <li><a href="tickets.php" class="main-button button">Buy Tickets</a></li>
            <li><img src="source/logo.png" alt=""></li>
            <?php
            if (isset($_SESSION['userId'])) {
                $url = $_SERVER["REQUEST_URI"];
                $pos = strrpos($url, "profile.php");

                if ($pos != false) {
                    echo '<li><a href="includes/logout.inc.php" class="main-button button">Log Out</a></li>';
                } else {
                    echo '<li><a href="profile.php" class="main-button button">My Profile</a></li>';
                }
            } else {
                echo '<li><a href="signin.php" class="main-button button">Sign In</a></li>';
            }
            ?>
        </ul>
        <div class="burger">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </nav>
</div>
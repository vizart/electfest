<?php
ini_set('memory_limit', '-1');
session_start();
$ibanRegex = "/^([A-Z]{2}[ \-]?[0-9]{2})(?=(?:[ \-]?[A-Z0-9]){9,30}$)((?:[ \-]?[A-Z0-9]{3,5}){2,7})([ \-]?[A-Z0-9]{1,3})?$/";
function currentTickets()
{
    require 'dbh.inc.php';
    $sql = "SELECT ticketId FROM account";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../buyticket.php?error=sqlerror1");
        exit();
    } else {
        $result = mysqli_query($conn, $sql);
        return mysqli_fetch_array($result, MYSQLI_NUM);
    }
}

function randomTicket($min, $max, $currentTickets)
{
    $numbers = range($min, $max);
    shuffle($numbers);
    $num = $numbers[0];
    if (in_array($num, currentTickets())) {
        randomTicket($min, $max, $currentTickets);
    } else {
        return $num;
    }
}

if (isset($_POST['buyticketCAMP-submit'])) {

    require 'dbh.inc.php';



    $firstname = $_POST['firstname2'];
    $lastname = $_POST['lastname2'];
    $IBAN = $_POST['IBAN2'];

    if (!preg_match("/^[a-zA-z\-]*$/", $firstname) && !preg_match("/^[a-zA-Z]*$/", $lastname)) {
        header("Location: ../tickets.php?error=invalidnames");
        exit();
    } else if (!preg_match("/^[a-zA-z\-]*$/", $firstname)) {
        header("Location: ../tickets.php?error=invalidfirstname");
        exit();
    } else if (!preg_match("/^[a-zA-z]*$/", $lastname)) {
        header("Location: ../tickets.php?error=invalidlastname");
        exit();
    } else if (!preg_match($ibanRegex, $IBAN)) {
        header("Location: ../tickets.php?error=invalidIBAN2");
        exit();
    } else {
        if (isset($_SESSION['userId'])) {
            $ticketId = randomTicket(100000, 999999, currentTickets());
            $idUsers = $_SESSION['userId'];
            $query = "UPDATE users SET first_name=?, last_name=? WHERE idUsers=" . $idUsers;
            $stmt = mysqli_stmt_init($conn);

            if (!mysqli_stmt_prepare($stmt, $query)) {
                header("Location: ../tickets.php?error=sqlerror2");
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, "ss", $firstname, $lastname);
                mysqli_stmt_execute($stmt);
                if (isset($_SESSION['hasCampSpot'])) {
                    $query = "UPDATE account SET HasCampSite=1 WHERE userId=" . $idUsers;
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $query)) {
                        header("Location: ../tickets.php?error=sqlerror3");
                        exit();
                    } else {
                        mysqli_stmt_execute($stmt);
                        $_SESSION['hasCampSpot'] = true;
                    }
                } else {
                    $query = "INSERT INTO account (userId, ticketId, IBAN, HasCampSite) VALUES (?, ?, ?, 1)";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $query)) {
                        header("Location: ../tickets.php?error=sqlerror3");
                        exit();
                    } else {
                        mysqli_stmt_bind_param($stmt, "sss", $idUsers, $ticketId, $IBAN);
                        mysqli_stmt_execute($stmt);
                    }
                }
                $_SESSION['hasCampSpot'] = true;
                header("Location: ../profile.php?buyticket=success");
                exit();
            }


            mysqli_stmt_close($stmt);
            mysqli_close($conn);
        }
    }
} else {
    header("Location: ../buyticket.php==error");
    exit();
}

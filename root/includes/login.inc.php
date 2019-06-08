<?php

if (isset($_POST['login-submit'])) {

    require 'dbh.inc.php';

    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if (empty($mailuid) || empty($password)) {
        header("Location: ../signin.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE emailUsers=?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signin.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['pwdUsers']);
                if ($pwdCheck == false) {
                    if(isset($_COOKIE["login_redirect"]) && !empty($_COOKIE["login_redirect"])){
                        if($_COOKIE["login_redirect"] == "tickets"){
                            header("Location: ../tickets.php?error=wrongpassword");
                        }else if($_COOKIE["login_redirect"] == "signin"){
                            header("Location: ../signin.php?error=wrongpassword");
                        }
                    }
                    exit();
                } else if ($pwdCheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['idUsers'];
                    if (isset($_SESSION['previous_location']) && !empty($_SESSION['previous_location'])) {
                        header("Location: ../tickets.php?login=success");
                    } else {
                        header("Location: ../index.php?login=success");
                    }
                    exit();
                } else {
                    header("Location: ../signin.php?error=wrongpassword");
                    exit();
                }
            } else {
                header("Location: ../signin.php?error=nouser");
                exit();
            }
        }
    }
}

// else{
//     header("Location: ../index.php");
//     exit();
// }

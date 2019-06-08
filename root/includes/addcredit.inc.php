<?php

session_start();

function updateBalance(){
    require 'dbh.inc.php';
    require 'login.inc.php';
    $userId = $_SESSION['userId'];
    $sql = "SELECT balance FROM account WHERE userId=".$userId;
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: ../profile.php?error=sqlerror");
        exit();
    }
    else{
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row=mysqli_fetch_assoc($result)){
            return $row['balance'];
        }
    }
}

if(isset($_POST['addcredit-submit'])){

    require 'dbh.inc.php';

    $credit = $_POST['addcredit'];

    if(empty($credit)){
        header("Location: ../profile.php?error=emptyfield");
        exit();
    }
    
    else if(!preg_match("/^-?(?:\d+|\d*\.\d+)$/",$credit)){
        header("Location: ../profile.php?error=invalidfield");
        exit();
    }

    else{

        if(isset($_SESSION['userId'])){

            $idUsers = $_SESSION['userId'];

            $updateBalance = $credit + updateBalance();

            $query = "UPDATE account SET balance=? WHERE userId=".$idUsers;
            $stmt=mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt,$query)){
                header("Location: ../profile.php?error=sqlerror");
            }

            else{
                mysqli_stmt_bind_param($stmt, "s", $updateBalance);
                mysqli_stmt_execute($stmt);
                header("Location: ../profile.php?updateBalance=success");
                exit();

            }
        }

    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

else{
    header("Location: ../profile.php=error");
    exit();
}
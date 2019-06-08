<?php 

function getTicket(){
    require 'dbh.inc.php';
    require 'login.inc.php';
    $idUsers = $_SESSION['userId'];
    $sql = "SELECT ticketId FROM users WHERE idUsers=".$idUsers;
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../buyticket.php?error=sqlerror4");
        exit();
    } else {
        $result = mysqli_query($conn,$sql);
        return mysqli_fetch_array($result,MYSQLI_NUM);
    }
}

require 'dbh.inc.php';

require 'login.inc.php';
$idUsers = $_SESSION['userId'];
$ticketId = getTicket();
$query = "INSERT INTO account (userId, ticketId) VALUES (?, ?)";
$stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt,$query)){
    header("Location ../buyticket.php?error=sqlerror3");
            exit();
}

else{
    mysqli_stmt_bind_param($stmt, "ss", $idUsers, $ticketId);
    mysqli_stmt_execute($stmt);
    header("Location: ../buyticket.php?buyticket=success2");
    exit();
}
<?php
function getTicketId(){
    require 'includes/dbh.inc.php';
    require 'includes/login.inc.php';
    $userId = $_SESSION['userId'];
    $sql = "SELECT ticketId FROM account WHERE userId=".$userId;
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
    header("Location: ../buyticket.php?error=sqlerror");
    exit();
    }  
    else{

        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row=mysqli_fetch_assoc($result)){
            return $row['ticketId'];
        }
    }
    return null;
}

require_once 'phpqrcode/qrlib.php'; 

$path = 'images/';
$file = $path.uniqid().".png";


//Text to output

$text = "TicketID: ".getTicketId();


if(getTicketId() != null){
    QRcode::png($text, $file, 'L', 10, 2);
// png($text, $file, ECC_LEVEL, Pixel_Size, Frame_size)

    echo "<center><img src = '".$file."'><center>";
}
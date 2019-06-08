<?php
ini_set('memory_limit', '-1');
session_start();

function currentTickets(){
    require 'dbh.inc.php';
    $sql = "SELECT ticketId FROM account";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../tickets.php?error=sqlerror1");
        exit();
    } else {
        $result = mysqli_query($conn,$sql);
        return mysqli_fetch_array($result,MYSQLI_NUM);
    }
}

function randomTicket($min, $max,$currentTickets){
    $numbers = range($min,$max);
    shuffle($numbers);
    $num = $numbers[0];
    if(in_array($num, currentTickets())){
        randomTicket($min, $max, $currentTickets);
    } else {
        return $num;
    }
}

if(isset($_POST['buyticketNOCAMP-submit'])){

    require 'dbh.inc.php';
   


    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $IBAN = $_POST['IBAN'];

    if(empty($firstname) || empty($lastname) || empty($IBAN)){
        header("Location: ../tickets.php?error=emptyfields&firstname=".$firstname."&lastname=".$lastname);
        exit();
    }

    else if(!preg_match("/^[a-zA-z]*$/",$firstname) && !preg_match("/^[a-zA-Z]*$/",$lastname)){
        header("Location: ../tickets.php?error=invalidfirstnamelastname");
        exit();
    }

    else if(!preg_match("/^[a-zA-z]*$/",$firstname)){
        header("Location: ../tickets.php?error=invalidfirstname&lastname=".$lastname);
        exit();
    }

    else if(!preg_match("/^[a-zA-z]*$/", $lastname)){
        header("Location: ../tickets.php?error=invalidlastname&firstname=".$firstname);
        exit();
    }

    else if(!preg_match("/^[A-Z0-9]{14}$/", $IBAN)){
        header("Location: ../tickets.php?error=invalidIBAN&firstname=".$firstname."&lastname=".$lastname);
        exit();

    }

    else {
            if(isset($_SESSION['userId'])){
            $ticketId = randomTicket(100000,999999,currentTickets());
            $idUsers = $_SESSION['userId'];
            $query = "UPDATE users SET first_name=?, last_name=? WHERE idUsers=".$idUsers;
            $stmt = mysqli_stmt_init($conn);
    
            if(!mysqli_stmt_prepare($stmt,$query)){
                header("Location ../tickets.php?error=sqlerror2");
                exit();
            }
            
            else{
                mysqli_stmt_bind_param($stmt, "ss", $firstname, $lastname);
                mysqli_stmt_execute($stmt);
    
                $query = "INSERT INTO account (userId, ticketId, IBAN, HasCampSite) VALUES (?, ?, ?, 0)";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$query)){
                        header("Location: ../tickets.php?error=sqlerror3");
                                exit();
                    }
                    else{
                        mysqli_stmt_bind_param($stmt, "sss", $idUsers, $ticketId, $IBAN);
                        mysqli_stmt_execute($stmt); 
    
                    }
               
    
                header("Location: ../profile.php?buyticket=success");
                exit();

        }

        
        mysqli_stmt_close($stmt);
        mysqli_close($conn);    
        }
      
   
    }

}

else{
    header("Location: ../buyticket.php==error");
    exit();
}


<?php
session_start();

if(isset($_POST['changemail-submit'])){

    require 'dbh.inc.php';

    $newemail = $_POST['newmail'];
    $newemailRepeat = $_POST['newmail-confirm'];
    $password = $_POST['pwd'];

    if(!filter_var($newemail, FILTER_VALIDATE_EMAIL) && !filter_var($newemailRepeat, FILTER_VALIDATE_EMAIL)){
        header("Location: ../profile.php?changemail=invalidfields");
        exit();
    }

    else if(!filter_var($newemail, FILTER_VALIDATE_EMAIL)){
        header("Location: ../profile.php?changemail=invalidmail");
        exit();
    }

    else if(!filter_var($newemailRepeat, FILTER_VALIDATE_EMAIL)){
        header("Location: ../profile.php?changemail=invalidmail");
        exit();
    }

    else if($newemail !== $newemailRepeat){
        header("Location: ../profile.php?changemail=mailsnotmatching");
        exit();
    }

    else{
         if(isset($_SESSION['userId'])){
             $idUsers=$_SESSION['userId'];
             $sql="SELECT * FROM users WHERE idUsers=".$idUsers;
             $stmt = mysqli_stmt_init($conn);

             if(!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: ../profile.php?error=sqlerror1");
                exit();
             }

             else{
                 mysqli_stmt_execute($stmt);
                 $result=mysqli_stmt_get_result($stmt);
                 if($row = mysqli_fetch_assoc($result)){
                     $pwdCheck = password_verify($password,$row['pwdUsers']);
                     
                     if($pwdCheck == false){
                        header("Location: ../profile.php?changemail=wrongpassword");
                        exit();
                    }

                    else if($pwdCheck == true){
                         $idUsers = $_SESSION['userId'];
                         $query="UPDATE users SET emailUsers = ? WHERE idUsers=".$idUsers;
                         $stmt = mysqli_stmt_init($conn);

                         if(!mysqli_stmt_prepare($stmt,$query)){
                             header("Location: ../profile.php?error=sqlerror2");
                             exit();
                         }

                         else{
                            mysqli_stmt_bind_param($stmt, "s", $newemail);
                            mysqli_stmt_execute($stmt);
                         }
                         $_SESSION['currentMail'] = $newemail;
                         header("Location: ../profile.php?changemail=success");
                         exit();

                    }
                 }

                 mysqli_stmt_close($stmt);
                 mysqli_close($conn);    
         }

        
        }
    }
    
}
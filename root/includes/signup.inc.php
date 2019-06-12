<?php
 if(isset($_POST['signup-submit'])){


    require 'dbh.inc.php';

    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    if(empty($email) || empty($password) || empty($passwordRepeat)){
      header("Location: ../SignUp.php?error=emptyfields&mail=".$email);
      exit();
    }

    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../SignUp.php?error=emptyfields");
        exit();
    }

    else if($password !== $passwordRepeat){
        header("Location: ../SignUp.php?error=passwordcheck&mail=".$email);
        exit();
    }
    else{

        $sql="SELECT emailUsers FROM users WHERE emailUsers=?";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../SignUp.php?error=sqlerror");
            exit();
        }

        else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);

            if($resultCheck > 0){
                header("Location: ../SignUp.php?error=mailtaken");
                exit();
            }

            else{
                $sql = "INSERT INTO users ( emailUsers, pwdUsers) VALUES ( ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../SignUp.php?error=sqlerror");
                    exit();
                }
                else{
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);


                    mysqli_stmt_bind_param($stmt, "ss", $email, $hashedPwd);
                    mysqli_stmt_execute($stmt);

                    $query="SELECT * FROM users WHERE emailUsers=?";
                    $stmt=mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt, $query)){
                        header("Location: ../SignUp.php?error=sqlerror");
                        exit();
                    }
                    else{
                        mysqli_stmt_bind_param($stmt, "s", $email);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        if($row = mysqli_fetch_assoc($result)){
    
                            session_start();
                            $_SESSION['userId'] = $row['idUsers'];
                            $_SESSION['currentMail'] = $email;
                            header("Location: ../index.php?signup=success");
                            exit();

                    }
               

                    }
                }
            }
        }
    }           
}

// else{
//     header("Location: ../index.php");
//     exit();
// }
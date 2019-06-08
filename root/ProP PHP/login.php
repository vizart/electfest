<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

        <form class="login" action="includes/login.inc.php" method="post">
            <h1>Login</h1>
            <input type="text" placeholder="Username/E-mail.." name="mailuid"><br>
            <input type="password" placeholder="Password" name="pwd"><br>
            <a href="reset-password.php">Forgot password?</a><br>
            <button type="submit" name="login-submit"> LOG IN</button><br>
            <p>Don't have an account yet? Click<a href="SignUp.php"> here</a></p><br>
        </form>
    
</body>
</html>
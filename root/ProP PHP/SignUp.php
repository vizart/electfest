<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
        <form class="signup" action="includes/signup.inc.php" method="post">
            <h1>Sign up</h1>
            <input type="text" placeholder="Username" name="uid">
            <input type="text" placeholder="E-mail" name="mail">
            <input type="password" placeholder="Password" name="pwd">
            <input type="password" placeholder="Retype password" name="pwd-repeat">
            <p>By signin up you agree with the <a href="#">Terms & Privacy.</a></p>
            <button type="submit" name="signup-submit">SIGN ME UP</button>
        </form>
    
</body>
</html>
<!DOCTYPE html>
<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="login-exec.php" method="post">
    <table>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="theEmailLogin" id="theEmailLogin"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="thePassLogin" id="thePassLogin"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="reset" value="Reset">
                <input type="submit" value="Login">
            </td>
        </tr>
    </table>
    </form>
    <br>
    <a href="signup.php">Sign-Up</a>
    
</body>
</html>
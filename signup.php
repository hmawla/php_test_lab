<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <?php 
        session_start();
    ?>

</head>

<body>
    <form action="signup-exec.php" method="post">
        <table>
            <tr>
                <td>Full Name:</td>
                <td><input type="text" name="theName" id="theName"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="theEmail" id="theEmail" placeholder="example@example.com" required><?php if(isset($_SESSION['emailExists'])){echo " !Email already in use!"; unset($_SESSION['emailExists']);}  ?></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="thePassword" id="thePassword" required></td>
            </tr>
            <tr>
                <td>Repeat Password:</td>
                <td><input type="password" name="repPass" id="repPass" required></td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td><input type="tel" name="thePhone" id="thePhone" maxlength="8" placeholder="71234567" required><?php if(isset($_SESSION['phoneExists'])){ echo " !Phone already in use!"; unset($_SESSION['phoneExists']); }  ?></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="reset">Reset</button>
                    <button type="submit">Go</button>
                </td>
            </tr>
        </table>


    </form>
    <script>
        var thePass = document.getElementById("thePassword");
        var confPass = document.getElementById("repPass");

        function passValid() {
            if (thePass.value == "") {
                thePass.setCustomValidity("Password is required!");
            } else if (thePass.value.length < 8) {
                thePass.setCustomValidity("Password is too small!");
            } else {
                thePass.setCustomValidity('');
            }

            if (thePass.value != confPass.value) {
                confPass.setCustomValidity("Passwords do not match!");
            } else {
                confPass.setCustomValidity('');
            }

        }
        thePass.onkeyup = passValid;
        confPass.onkeyup = passValid;
    </script>
</body>

</html>
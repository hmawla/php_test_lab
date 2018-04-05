<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Encrypt</title>
</head>
<body>
    <form method="post">
        <input type="text" name="theText" id="theText">
        <button type="submit">Encrypt</button>
    </form>
    <?php
        include 'encryptor.php';
        if(isset($_POST['theText'])){
            echo "Encrypted: " . doEncrypt($_POST['theText']) . "<br>Decrypted: " . doDecrypt(doEncrypt($_POST['theText']));;
        }
    
?>
</body>
</html>
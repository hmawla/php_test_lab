<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdatabase";
$_SESSION['theName'] = $_POST['theNameN'];
$_SESSION['theAge'] = $_POST['theAgeN'];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO testtable (name, age, other) VALUES ('" . $_SESSION['theName'] . "'," . $_SESSION['theAge'] . ", 12)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    $_SESSION['ConnError'] = $conn->error;
}
$conn->close();
header('location:index.php');
?>

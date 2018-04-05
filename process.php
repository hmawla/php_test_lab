<?php
 session_start();

 $N1 = $_GET['N1'];
 
 $N2 = $_GET['N2'];

 $S = $N1 + $N2;

 $_SESSION['N1'] = $N1;
 $_SESSION['N2'] = $N2;

 $_SESSION['S'] = $S;

 header('location:calc.php');

?>
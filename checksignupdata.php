<?php
    
    function checkData($theEmail,$thePhone){
        include 'connection.php';
        $res1 = true;
        $res2 = true;

        $sql = "SELECT uemail,uphone FROM myusers";
        $result = mysqli_query($conn, $sql);
        while(($row = mysqli_fetch_assoc($result)) && ($res1 | $res2)) {
            if($res1 & $row['uemail'] == $theEmail){
                $_SESSION['emailExists'] = true;
                $res1 =  false;
            }
            if($res2 & $row['uphone'] == $thePhone){
                $_SESSION['phoneExists'] = true;
                $res2 =  false;
            }
        }
        return ($res1 & $res2);
    }
?>
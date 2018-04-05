<?php
    function getBrands(){
        include 'connection.php';
        $sql = "SELECT brandname FROM brands";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            echo '<a class="dropdown-item" href="#">' . $row['brandname'] . '</a>';
        }

    }
    

    function getCard(){
        include 'connection.php';
        $sql = "SELECT cardtype FROM cards";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            echo '<a class="dropdown-item" href="#">' . $row['cardtype'] . '</a>';
        }

    }
    
?>
<?php
    function getBrands(){
        include 'connection.php';
        $sql = "SELECT brandname FROM brands";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            echo '<a class="dropdown-item" href="#">' . $row['brandname'] . '</a>';
        }
    }
?>
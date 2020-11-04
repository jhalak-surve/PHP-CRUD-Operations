<?php
    $conn = mysqli_connect("localhost", "root", "", "usersdb");
    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }

?>
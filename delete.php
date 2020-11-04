<?php
    session_start();
    include "dbconnection.php";
    $id = $_GET['d_id'];
    $delete = "DELETE FROM users where id='$id'";
    if ($conn->query($delete)) {
        mysqli_close($conn);
        header('Location: dashboard.php'); 
        exit();
    } else {
        echo "Error deleting record";
    }

?>
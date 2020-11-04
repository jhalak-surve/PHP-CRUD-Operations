<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/bootstrap min.js"></script>
        
        <title>Dashboard</title>
        
    </head>
    <body>
       
        <?php
            if(!isset($_SESSION['name'])){
                header("location:login.php");
            }
            echo "<h2>Welcome: ".$_SESSION['name']."</h2>";
        ?>
        
        
        <a id='logout' class='btn btn-danger' href='logout.php'>Log Out</a>
        
        <a id='add' class='btn btn-primary' href='add.php'>Add User</a>
        
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Email</th>
                    <th scope="col">Name</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include 'dbconnection.php';
                $sql = "select * from users ";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    
                    while($row = $result->fetch_assoc()){
                     
                        $dbId=$row["id"];
                        $dbEmail=$row["email"];
                        $dbName=$row["name"];
                        $dbCreatedAt=$row["created_at"];
                        $dbUpdatedAt=$row["updated_at"];
                        $flag = ""; 
                        if (!($_SESSION['email'] == $dbEmail)){
                        $flag = "pointer-events: none;"; 
                        }
                        echo '<tr><th scope="row">'.$dbId.'</th>
                        <td>'.$dbEmail.'</td>
                        <td>'.$dbName.'</td>
                        <td>'.$dbCreatedAt.'</td>
                        <td>'.$dbUpdatedAt.'</td>
                        <td><a class="btn btn-primary" href="edit.php?id='.$dbId.'">Edit</a>&nbsp
                        <a class="btn btn-danger" style='.$flag.' href="delete.php?d_id='.$dbId.'">Delete</a></td></tr>';
                        
                    }
                    echo "</tbody></table>";
                  
                }
              
            ?>
            
         
    </body>

</html>
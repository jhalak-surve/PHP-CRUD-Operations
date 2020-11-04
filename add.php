<!Doctype html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <title>Add User</title>
     
    </head>
    <body>
        <form method="post"  target="_self" class="border-class" id="addUser">
            <h1>Add User</h1>
            <div class="form-group row ">
                <label for="email" class="col-sm-2 col-form-label">Email:</label><br>
                <div class="col-sm-10">
                    <input class="form-control" type="email" id="ruser_email" name="remail" ><br>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name:</label><br>
                <div class="col-sm-10">   
                    <input class="form-control" type="text" id="name_of_user" name="rname" ><br>
                </div>
            </div>
            <div class="form-group row"> 
                <label for="password" class="col-sm-2 col-form-label">Password:</label><br>
                <div class="col-sm-10">
                    <input class="form-control" type="password" id="user_password" name="ruser_password" ><br>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" name="add" class="btn btn-success"  >Add</button>
                </div>
            </div>
            <?php
                
                if(isset($_POST['add'])){
                    include "dbconnection.php";
                    
                    $r_email = $_POST["remail"];
                    $r_name = $_POST["rname"];
                    $r_pass = $_POST["ruser_password"];
                    $query = "SELECT email from users where email ='$r_email' ";
                    $executeQuery = $conn->query($query);
                    if($executeQuery->num_rows >0){
                        $array = $executeQuery->fetch_assoc();
                        if($r_email==isset($array['email']))
                        {
            	            echo "<h6>Email already exists</h6>";
                        }
                        
                    }
                    
                    if(empty($r_email)){
                        echo "<h6>Email is required</h6>";
                        
                    }else if(empty($r_name)){
                        echo "<h6>Name is required</h6>";
                        
                    }else if(empty($r_pass)){
                        echo "<h6>Password is required</h6>";
                        
                    }else if(strlen($r_pass)<6){
                        echo "<h6>Password must be atleast 6 characters</h6>";
                        
                    }else{
                        
                        $sql = "INSERT INTO users( email, name, password) VALUES ('$r_email', '$r_name', '$r_pass')";
                        if (!$conn->query($sql)){
                            die('Error: ' . $conn->error);
                        }
                        header('location:dashboard.php');
                        exit();
                    }
                }else{
                    
                }
            ?>
            
        </form>
    </body>
</html>
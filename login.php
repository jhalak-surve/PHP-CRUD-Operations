
<!Doctype html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <title>Login</title>
        
    </head>
    <body>
        <form id='loginForm' method="post" target="_self" class="border-class">
            <h1>Login</h1>
            <div class="form-group row ">
                <label for="email" class="col-sm-2 col-form-label">Email:</label><br>
                <div class="col-sm-10">
                    <input class="form-control" type="email"  name="uEmail" ><br>
                </div>
            </div>
            <div class="form-group row"> 
                <label for="password" class="col-sm-2 col-form-label">Password:</label><br>
                <div class="col-sm-10">
                    <input class="form-control" type="password"  name="uPassword" ><br>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" name="submit" class="btn btn-primary" style="margin-left:300px" >Log in</button>
                </div>
            </div>
            <?php
                include "dbconnection.php";
                if(isset($_POST['submit'])){
                    $uEmail = $_POST['uEmail'];
                    $uPassword = $_POST['uPassword'];
       
                    if(empty($uEmail)){
                        echo "<h6>Email is required</h6>";
                            
                    }else if(empty($uPassword)){
                        echo "<h6>Password is required</h6>";
                            
                    }else{
                        session_start();    
                        $_SESSION['email'] = $uEmail;
                        $_SESSION['pass'] = $uPassword;
                        $email_search = "select * from users where email='$uEmail'";
                        $query = $conn->query($email_search);
                        $email_count = $query->num_rows;
                        if($email_count){
                            $email_pass = $query->fetch_assoc();
                            
                            $db_pass = $email_pass['password'];
                            
                                
                            if($uPassword==$db_pass){
                                $_SESSION['name'] = $email_pass['name'];
                                $_SESSION['id'] = $email_pass['id'];    
                                header('location: dashboard.php');
                                exit();
                            }else{
                                echo "<h6>Password incorrect</h6>";
                            }
                        }else{
                                echo "<h6>Invalid email</h6>";
                        }
                    }
                }else{
                        
                }
            ?>
        </form>
    </body>
</html>
<?php
    require 'config.php';
    if(!empty($_SESSION["id"])){
        header("Location:index.php");
    }
    if(isset($_POST["submit"])){
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
        $duplicate=mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
        if(mysqli_num_rows($duplicate)>0){
            echo 
            "<script> alert ('Username or Email has been taken');</script>";
        }
        else{
            if($password==$cpassword){
                $query="INSERT INTO tb_user VALUES('','$email','$phone','$username','$password')";
                mysqli_query($conn,$query);
                echo
                "<script>alert('Registration Succesful');</script>";
                header("Location:index.php");
            }
            else{
                echo"<script>alert('Password Doesn't Match');</script>";
            }  
        } 
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container"> 
        <div class="screen"> 
            <div class="screen__content"> 
                <form action=""  method="POST" autocomplete="off" class="login">
                    
                    <h2>Registration</h2>
                    <div class="login_field>
                        <i class="login__icon fas fa-user"></i>
                        <label for="email">Email: </label>
                        <input type="text" class="login_input" name="email" id="email" required value="" placeholder="Your Email"> <br>
                    </div>

                    <div class="login_field>
                        <i class="login__icon fas fa-user"></i>
                        <label for="phone">Phone: </label>
                        <input type="text" class="login_input" name="phone" id="phone" required value="" placeholder="Your Phone"> <br>
                    </div>

                    <div class="login_field>
                        <i class="login__icon fas fa-user"></i>
                        <label for="username">Username: </label>
                        <input type="text" class="login_input" name="username" id="username" required value="" placeholder="Your Username"> <br>
                    </div>

                    <div class="login_field>
                        <i class="login__icon fas fa-user"></i>
                        <label for="password">Password: </label>
                        <input type="password" class="login_input" name="password" id="password" required value="" placeholder="Your Password"> <br>
                    </div>

                    <div class="login_field>
                        <i class="login__icon fas fa-user"></i>
                        <label for="cpassword">Confirm Password: </label>
                        <input type="password" class="login_input" name="cpassword" id="cpassword" required value="" placeholder="Confirm Your Password"> <br>
                    </div>

                    <button type="submit" class="button login__submit" name="submit">
                        <span class="button__text">Register</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>

                </form>

                <br>
                <h5>Already Have an Account? <a href="index.php">Login</a></h5>

            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>		
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>
        </div>
    </div>
</body>
</html>


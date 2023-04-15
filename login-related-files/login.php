<?php
include 'config.php';
session_start();
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $password = md5($_POST['password']);
    $password = filter_var($password, FILTER_SANITIZE_STRING);
    
    $select =$conn->prepare("SELECT * FROM `users` WHERE email =? AND password = ?");
    $select->execute([$email, $password]);
    $fetchRow = $select->fetch(PDO::FETCH_ASSOC);
    
    if($select->rowCount() > 0){
    
        if($fetchRow['role'] == 'admin' || $fetchRow['role'] == 'Admin'){
            $_SESSION['adminID'] =$fetchRow['id'];
            header('location:adminProfile.php');
        }else if($fetchRow['role'] == 'user' || $fetchRow['role'] == 'user'){
            $_SESSION['userID'] =$fetchRow['id'];
            header('location:userProfile.php');
        }
        else{
            $errMessage[] ="Incorrect Username";
        }
    }else{
        $errMessage[]= 'Incorrect email or password';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet"
    href="style.css"> 
</head>
<body class="login1">
    <div class="container">
        <form action="" method= "POST" class="form" id="login">
        <h1 class="formLogin"><img src="logo.jpg" class="logo"><br> Login </h1>
        <?php 
        if(isset($errMessage)){
            foreach($errMessage as $errMessage){
                echo '<div class="errMessage"> 
                <span>'.$errMessage.'</span>
            </div>';
            }
        }
        ?>
        <div class="LoginInput">
            <input type="email" name="email" class="LoginInputInfo" autofocus placeholder="Email Address">
        </div>
        <div class="LoginInput">
            <input type="password" name= "password" class="LoginInputInfo" autofocus placeholder="Password">
        </div>
        <button class="LoginSubmit" type="submit" name="submit">Login</button>
        <p class="AccountLink">
            Don't have an Account? <a href="register.php" class="link">Create Account</a>
        </p>
        </form>
    </div>
</body>
    <!-- Start of Footer -->
    <style>
      .footer {
        background-color:maroon;
      }

    </style>
    <footer class="footer text-white">
        
        <div class="container">

          <p class="justify-content-center">Copyright 2022. All rights reserved.</p>

        </div>
    <!-- End of Footer -->
    </footer>
</html>
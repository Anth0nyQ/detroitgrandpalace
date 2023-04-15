<?php
include 'config.php';

if(isset($_POST['submit'])){
$name = $_POST['name'];
$name = filter_var($name, FILTER_SANITIZE_STRING);
$email = $_POST['email'];
$email = filter_var($email, FILTER_SANITIZE_STRING);
$password = md5($_POST['password']);
$password = filter_var($password, FILTER_SANITIZE_STRING);
$Conpassword = md5($_POST['Conpassword']);
$Conpassword = filter_var($Conpassword, FILTER_SANITIZE_STRING);

$select =$conn->prepare("SELECT * FROM `users` WHERE email =?");
$select->execute([$email]);

if($select->rowCount() > 0){
$errMessage[]= "Account already exists!";

}else{
    if($password != $Conpassword){
        $errMessage[]= "Password's do not match!";
    }else{
        $insert = $conn->prepare("INSERT INTO `users`(name, email,password) VALUES(?,?,?)");
        $insert->execute([$name, $email, $password]);
        if($insert){
        $messageSuccess[]= "Account Created!";
        }
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
    <title>Register</title>
    <link rel="stylesheet"
    href="style.css"> 
</head>
<body class="register1">
    <div class="container1">
        <form action= "" method="post" class="form" id="signUp" >
        <h1 class="formLogin"><img src="logo.jpg" class="logo"><br> Create Account </h1>
        <?php 
        if(isset($errMessage)){
            foreach($errMessage as $errMessage){
                echo '<div class="errMessage"> 
                <span>'.$errMessage.'</span>
            </div>';
            }
        }
        ?>
        <?php 
        if(isset($messageSuccess)){
            foreach($messageSuccess as $messageSuccess){
                echo '<div class="messageSuccess"> 
                <span>'.$messageSuccess.'</span>
            </div>';
            }
        }
        ?>
        <div class="LoginInput">
            <input type="text" id="signUser" name ="name" class="LoginInputInfo" autofocus placeholder="Full Name">
        </div>
        <div class="LoginInput">
            <input type="email" id="signEmail" name= "email" class="LoginInputInfo" autofocus placeholder="Email Address">
        </div>
        <div class="LoginInput">
            <input type="password" id="signPass" name="password" class="LoginInputInfo" autofocus placeholder="Password">
        </div>
       <div class="LoginInput">
            <input type="password" id="SignConPass" name="Conpassword" class="LoginInputInfo" autofocus placeholder="Confirm Password">
        </div>
        <button class="LoginSubmit" type="submit" name="submit">Sign Up</button>
        <p class="AccountLink">
            Already have an account?  <a href="login.php" class="link">Login</a>
        </p>
        </form>
    </div>
</body>
</html>
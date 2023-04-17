<?php 
include 'config.php';
session_start();

$userID =$_SESSION['userID'];

if(!isset($userID)){
    header('location:login.php');
}

if(isset($_POST['submit'])){
$name = $_POST['name'];
$name = filter_var($name, FILTER_SANITIZE_STRING);
$email = $_POST['email'];
$email = filter_var($email, FILTER_SANITIZE_STRING);
$update = $conn->prepare("UPDATE `users` SET name = ?, email = ? WHERE id =?");
$update->execute([$name, $email, $userID]);

$previousPassword = $_POST['previousPassword'];
$PreviousPassword = md5($_POST['PreviousPassword']);
$newPassword = md5($_POST['NewPassword']);
$confirmNewPassword = md5($_POST['confirmNewPassword']);

$PreviousPassword = filter_var($PreviousPassword, FILTER_SANITIZE_STRING);
$newPassword = filter_var($newPassword, FILTER_SANITIZE_STRING);
$confirmNewPassword = filter_var($confirmNewPassword, FILTER_SANITIZE_STRING);
if(!empty($PreviousPassword) || !empty($newPassword) || !empty($confirmNewPassword)){
  if($PreviousPassword != $previousPassword){
    $errMessage[] = "Does not match Previous Password!";
  }
  else if($newPassword != $confirmNewPassword){
    $errMessage[] = "Does not match Confirm Password!";
  }else {
    $updatePassword = $conn->prepare("UPDATE `users` SET password = ? WHERE id = ?");
    $updatePassword->execute([$confirmNewPassword, $userID]);
    $messageSuccess[] = "Password has been updated!";
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
    <title>User Profile Update</title>
    <link rel="stylesheet"
    href="style.css"> 
          <style>
    /* Set the background color for the navigation bar */
    .navbar {
      background-color: maroon;
    }
    
    /* Style the links in the navigation bar */
    .navbar a {
      float: left;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }
    
    /* Add a hover effect to the links in the navigation bar */
    .navbar a:hover {
      background-color: #ddd;
      color: black;
    }
    
    /* Clear floats after the navigation bar */
    .navbar::after {
      content: "";
      clear: both;
      display: table;
    }
  </style>
  <div class="navbar">
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#contact">Contact</a>
    <a href="userProfile.php">Profile</a>
  </div>
</head>
<body class="userProfile">
<div class="profile">
        <?php 
            $selectProfile = $conn->prepare("SELECT * FROM `users` WHERE id =?");
            $selectProfile->execute([$userID]);
            $fetchProfile = $selectProfile->fetch(PDO::FETCH_ASSOC);
        ?>
    <h1><?= $fetchProfile['name']; ?>'s Profile Update</h1>
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
    <form action="" method="POST">
    <img src="userIcon.png" alt="image" class="usericon">
        <div class="inputUpdate">
        <p class="infoUpdate">Name: </p>
            <input type="text" name ="name" required class="LoginInputInfo" autofocus placeholder="Full Name" value="<?= $fetchProfile['name']; ?>">
        <p class="infoUpdate">Email: </p>
            <input type="email" name= "email" required class="LoginInputInfo" autofocus placeholder="Email Address" value="<?= $fetchProfile['email']; ?>">

        <input type="hidden" name="previousPassword" value="<?= $fetchProfile['password']; ?>">
        <p class="infoUpdate">Previous Password: </p>
            <input type="password" name="PreviousPassword" class="LoginInputInfo" autofocus placeholder="Previous Password">

        <p class="infoUpdate">New Password: </p>
            <input type="password" name="NewPassword" class="LoginInputInfo" autofocus placeholder="New Password">

        <p class="infoUpdate">Confirm New Password: </p>
            <input type="password" name="confirmNewPassword" class="LoginInputInfo" autofocus placeholder="Confirm New Password">

        </div>
        <br>
        <button class="submitUpdate" type="submit" name="submit">Update</button>
        <button><a href="userProfile.php">Back</a></button>
    </form>
</div>
</body>
</html>
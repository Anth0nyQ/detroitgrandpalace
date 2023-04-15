<?php 
include 'config.php';
session_start();

$adminID =$_SESSION['adminID'];

if(!isset($adminID)){
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
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
    <a href="adminProfile.php">Profile</a>
  </div>
</head>
<body class="userProfile">
<div class="profile">
        <?php 
            $selectProfile = $conn->prepare("SELECT * FROM `users` WHERE id =?");
            $selectProfile->execute([$adminID]);
            $fetchProfile = $selectProfile->fetch(PDO::FETCH_ASSOC);
        ?>
    <h1><?= $fetchProfile['name']; ?>'s Profile</h1>
    <div class="profilePic">
        <img src="userIcon.png" alt="image" class="usericon">
    </div>
    <a href="adminProfileUpdate.php" class="updateProfile">Update Profile</a>
    <a href="logout.php" class="logout">Logout</a>
</div>
</body>
</html>
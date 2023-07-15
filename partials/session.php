<?php
require_once("./include/db.php");

    if(isset($_SESSION['id'])){
  
    $id = $_SESSION['id'];
    $query = "SELECT * FROM users WHERE id = '$id' ";

    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    $username = $row['username'];
    $fullname = $row['fullname'];
    $email = $row['email'];
    $age = $row['age'];
    $birthday = $row['birthday'];
    $password = $row['password'];
    $photo = $row['photo'];
    $bio = $row['bio'];

  }else{
    $error = "Unauthorized Access";
    header('location: ../loguser.php?error=' . $error);
    return false;
  }



?>
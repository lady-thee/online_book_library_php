<?php 
    require_once "include/db.php";
   
    if(isset($_POST['submit'])){
      $fullname = $_POST['fullname'];
      $username = $_POST['username'];
      $email = $_POST['email'];
      $age = $_POST['age'];
      $password = $_POST['password'];

      $username = trimData($connection, $username);
      $password = trimData($connection, $password);
      $email = trimData($connection, $email);
      $fullname = trimData($connection, $fullname);
      $age = trimData($connection, $age);

      $sql = "SELECT * FROM users WHERE username = '$username' OR email = '$email' ";
     

      $result_user = mysqli_query($connection, $sql);

      if(mysqli_num_rows($result_user) == 0){ 
        
        $encryptPassword = md5(sha1(md5(sha1($password))));
        $timeStamp = date('Y-m-d H:i:s');
    
        $queryUser = "INSERT INTO users(email, username, password, fullname, age, created_time) ";
        $queryUser .= "VALUES ('$email', '$username', '$encryptPassword', '$fullname', '$age', '$timeStamp)' )";

        $result = mysqli_query($connection, $queryUser);

        if(!$result){
            $error = 'registration failed';
            header('location: ../register.php?error='.$error);
            return false;
        }else{
            $success = 'registration successful';
            header('location: ../loguser.php?success='.$success);
            return false;
        }
        
      }else{
        $error = 'user already exists';
        header('location: ../register.php?error='.$error);
        return false;
      }


    }else{
        $error = 'unauthorized access';
        header('location: ../loguser.php?error='.$error);
        return false;
    }

   
?>



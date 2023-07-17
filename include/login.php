<?php 
  require_once "db.php";

  session_start();
  
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
  
    $email = trimData($connection, $email);
    $password = trimData($connection, $password);

    $query = "SELECT id, username, password FROM users WHERE email = ?";

    if(!empty($email)){
      $stmt = mysqli_prepare($connection, $query);
      if($stmt){
        mysqli_stmt_bind_param($stmt, 's', $email);

        if(mysqli_stmt_execute($stmt)){
          mysqli_stmt_store_result($stmt);

          if(mysqli_stmt_num_rows($stmt) == 1){
            mysqli_stmt_bind_result($stmt, $id, $username, $hashPassword);
            
            $fetched = mysqli_stmt_fetch($stmt);

            if($fetched){

              $encryptPassword = md5(sha1(md5(sha1($password))));
           
             
              if($encryptPassword == $hashPassword){
                $login_date = date('Y-m-d H:i:s');
                
                $_SESSION['id'] = $id;
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username; 
                
                 $success = "Logged In Successfully!";
                 $update = "UPDATE users SET last_login = '$login_date', is_active = 1 where id = '$id' ";
                 $result = mysqli_query($connection, $update);

                 header('location: ../user/dashboard.php?success=' . $success);
              }else{
                $error = "Login Unsuccessful";
                header('location: ../loguser.php?error=' . $error);
              }
            }else{
              $error = "User does not exist";
              header('location: ../loguser.php?error=' . $error);
            }
          }else{
            $error = "Email not found";
            header('location: ../loguser.php?error=' . $error);
          }
        }else{
            $error = "Email not found";
            header('location: ../loguser.php?error=' . $error);
          }
      }else{
        $error = "Email not found";
        header('location: ../loguser.php?error=' . $error);
      }
    }else{
        $error = "Email not found";
        header('location: ../loguser.php?error=' . $error);
      }
  }else{
      $error = "Unauthorized Access";
      header('location: ../loguser.php?error=' . $error);
  
  }

  
?>
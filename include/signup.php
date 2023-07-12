<?php include "include/db.php";
   
    if(isset($_POST['submit'])){
      $fullname = $_POST['fullname'];
      $username = $_POST['username'];
      $email = $_POST['email'];
      $age = $_POST['age'];
      $password = $_POST['password'];

      $username = mysqli_real_escape_string($connection, $username);
      $password = mysqli_real_escape_string($connection, $password);
      $email = mysqli_real_escape_string($connection, $email);
      $fullname = mysqli_real_escape_string($connection, $fullname);
      $age = mysqli_real_escape_string($connection, $age);

      $sql = "SELECT * FROM users WHERE username = '$username' ";
      $sqlem = "SELECT * FROM users WHERE email = '$email' ";

      $result_user = mysqli_query($connection, $sql);
      $result_email = mysqli_query($connection, $sqlem);

      $num_r = mysqli_num_rows($result_user);
      $num_e = mysqli_num_rows($result_email);

      if ($num_e == 0){

        if($num_r == 0){

          $hashStr = "2y$10$";
          $salt = "iusesomecrazystrings22";
          $hashFormat = $hashStr . $salt;

          $encryptPassword = crypt($hashFormat, $password);
          $timeStamp = date('Y-m-d H:i:s');

          $queryUser = "INSERT INTO users(email, username, password, fullname, age, created_time) ";
          $queryUser .= "VALUES ('$email', '$username', '$encryptPassword', '$fullname', '$age', '$timeStamp)' )";

          $result = mysqli_query($connection, $queryUser);

          if(!$result){
            die('Database query failed' . mysqli_error($connection));
          }

          
        }
      }else{
        echo "User already exists";
      }

      // switch ([$num_e , $num_r]) {
      //   case [0, 0]:
      //     echo "new user";
      //     break;
        

      //   case [0, 1]:
      //     echo "no";
      //     break;
        
      //   case [1, 0]:
      //     echo "nah";
      //     break;
        
      //   case [1, 1]:
      //     echo "nope";
      //     break;

      //   default:
      //     echo "not working";
      //     break;
      // }
 

    }else{
      echo 'no post request';
    }

?>



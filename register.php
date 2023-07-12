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
          $salt = "2ed3ibrokeupwithmyex22";
          $hashFormat = $hashStr . $salt;

          $encryptPassword = crypt($hashFormat, $password);
          $timeStamp = date('Y-m-d H:i:s');

          $queryUser = "INSERT INTO users(email, username, password, created_time) ";
          $queryUser .= "VALUES ('$email', '$username', '$encryptPassword', '$timeStamp)' )";

          $result = mysqli_query($connection, $queryUser);

          if(!$result){
            die('Database query failed' . mysqli_error($connection));
          }

        }
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




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iroko | SignUp</title>
  <?php require_once('partials/head.php') ?>
</head>

<body>
  <?php require_once('partials/navbar.php') ?>
  <main class="relative h-screen w-screen flex  flex-row-reverse">
    <div class="absolute block md:hidden top-0 left-0 h-full w-full">
      <img src="img/login-bg.jpg" alt="books" class="h-full w-full object-cover opacity-20 z-[-1]">

    </div>
    <div class="w-6/12 hidden md:block h-full relative">
      <img src="img/login-bg.jpg" alt="books" class="h-full w-full object-cover">
    </div>
    <div class="w-full md:w-6/12 h-full flex items-center justify-center md:justify-end p-5 relative">
      <div class="w-full md:w-10/12 max-w-[400px]">
        <h1 class="font text-3xl md:text-[4vw] font-extrabold">
          Join Iroko
        </h1>
        <p class="font-bold">Create a free acount today</p>
        <form action="register.php" method="post" class="my-3">
          <div class="mb-3 flex flex-col">
            <label for="email" class="font-[500] text-sm">Email:</label>
            <input type="email" name="email" placeholder="jane@example.com " class="px-3 py-2 rounded-md border border-[#00000022]">
          </div>
          <div class="mb-3 flex flex-col">
            <label for="username" class="font-[500] text-sm">Username:</label>
            <input type="text" name="username" placeholder="user1234" class="px-3 py-2 rounded-md border border-[#00000022]">
          </div>
          <div class="mb-3 flex flex-col">
            <label for="fullname" class="font-[500] text-sm">Fullname:</label>
            <input type="text" name="fullname" placeholder="enter your fullname" class="px-3 py-2 rounded-md border border-[#00000022]">
          </div>
          <div class="mb-3 flex flex-col">
            <label for="age" class="font-[500] text-sm">Age:</label>
            <input type="number" multiple name="age" placeholder="enter your age" class="px-3 py-2 rounded-md border border-[#00000022]">
          </div>
          <div class="mb-3 flex flex-col">
            <label for="password" class="font-[500] text-sm">Password:</label>
            <input type="password" name="password" placeholder="********" class="px-3 py-2 rounded-md border border-[#00000022]">
          </div>
          <div class="mb-3 flex flex-col">
            <input type="submit" name="submit" value="Sign up" class="px-3 py-2 rounded-md  font-bold bg-primary text-light">
          </div>
          <div class="mb-3 flex justify-between">
            <a href="login.php" class="text-blue-800 hover:text-primary">Login Instead</a>
            <a href="forgot.php" class="text-blue-800 hover:text-primary">Forgot Password?</a>
          </div>
        </form>
      </div>
    </div>
  </main>
</body>

</html>
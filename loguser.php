


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iroko | Login</title>
  <?php require_once('partials/head.php') ?>
</head>

<body>
  <?php require_once('partials/navbar.php') ?>
  <main class="relative h-screen w-screen flex bg-light">
    <div class="absolute block md:hidden top-0 left-0 h-full w-full">
      <img src="img/login-bg.jpg" alt="books" class="h-full w-full object-cover opacity-20 z-[-1]">

    </div>
    <div class="w-6/12 hidden md:block h-full relative">
      <img src="img/login-bg.jpg" alt="books" class="h-full w-full object-cover">
    </div>
    <div class="w-full md:w-6/12 h-full flex items-center justify-center md:justify-start p-5 relative">
      <div class="w-full md:w-10/12 max-w-[400px]">
        <h1 class="font text-3xl md:text-[4vw] font-extrabold">
          Welcome Back
        </h1>
        <p class="font-bold">Login and access your books</p>
        <form action="include/login.php" method="post" class="my-3">
          <?php if(isset($_GET['error'])){ ?>
            <div class="">
              <p class="text-red-500"><?= $_GET['error'] ?></p>
            </div>
          <?php } elseif(isset($_GET['success'])){?>
            <div class="">
              <p class="text-green-500"><?= $_GET['success'] ?></p>
            </div>
          <?php } ?>
          <div class="mb-3 flex flex-col">
            <label for="email" class="font-[500] text-sm">Email:</label>
            <input type="text" name="email" placeholder="email or username" class="px-3 py-2 rounded-md border border-[#00000022]">
          </div>
          <div class="mb-3 flex flex-col">
            <label for="password" class="font-[500] text-sm">Password:</label>
            <input type="password" name="password" placeholder="********" class="px-3 py-2 rounded-md border border-[#00000022]">
          </div>
          <div class="mb-3 flex flex-col">
            <input type="submit" name="submit" value="Login" class="px-3 py-2 rounded-md  font-bold bg-primary text-light">
          </div>
          <div class="mb-3 flex justify-between">
            <a href="forgot.php" class="text-blue-800 hover:text-primary">Forgot Password?</a>
            <a href="register.php" class="text-blue-800 hover:text-primary">Create Account</a>
          </div>
        </form>
      </div>
    </div>
  </main>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iroko | SignUp</title>
  <link rel="stylesheet" href="dist/css/main.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <script type="module" src="dist/js/tailwind.config.js"></script>
</head>

<body>
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
        <form action="" class="my-3">
          <div class="mb-3 flex flex-col">
            <label for="email" class="font-[500] text-sm">Email:</label>
            <input type="email" placeholder="example@example.com " class="px-3 py-2 rounded-md border border-[#00000022]">
          </div>
          <div class="mb-3 flex flex-col">
            <label for="username" class="font-[500] text-sm">Username:</label>
            <input type="text" placeholder="user1234" class="px-3 py-2 rounded-md border border-[#00000022]">
          </div>
          <div class="mb-3 flex flex-col">
            <label for="fullname" class="font-[500] text-sm">Fullname:</label>
            <input type="text" placeholder="enter your fullname" class="px-3 py-2 rounded-md border border-[#00000022]">
          </div>
          <div class="mb-3 flex flex-col">
            <label for="age" class="font-[500] text-sm">Age:</label>
            <input type="number" placeholder="enter your age" class="px-3 py-2 rounded-md border border-[#00000022]">
          </div>
          <div class="mb-3 flex flex-col">
            <label for="password" class="font-[500] text-sm">Password:</label>
            <input type="password" placeholder="********" class="px-3 py-2 rounded-md border border-[#00000022]">
          </div>
          <div class="mb-3 flex flex-col">
            <input type="submit" value="Register" class="px-3 py-2 rounded-md  font-bold bg-primary text-light">
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
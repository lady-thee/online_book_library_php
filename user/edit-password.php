<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iroko | Change Password</title>
  <?php $BASE_DIR = "../";
  require_once('../partials/head.php'); ?>
</head>

<body>
  <?php require_once('../partials/navbar.php') ?>
  <main class="relative min-h-[100vh] w-full bg-light flex justify-center flex-wrap  flex-row-reverse">
    <div class="w-full h-10"></div>


    <div class="w-full md:w-6/12 h-full flex items-center justify-center p-5 relative">
      <div class="w-full md:w-10/12 max-w-[400px]">
        <h1 class="text-3xl  font-bold sticky top-16 bg-light">
          Change Password
        </h1>
        <p class="font-bold">update your password frequently</p>
        <form action="" class="my-3">

          <div class="mb-3 flex flex-col">
            <label for="password" class="font-[500] text-sm">Current Password:</label>
            <input type="password" placeholder="enter current password" class="px-3 py-2 rounded-md border border-[#00000022]">
          </div>
          <div class="mb-3 flex flex-col">
            <label for="npassword" class="font-[500] text-sm">New Password:</label>
            <input type="password" placeholder="********" class="px-3 py-2 rounded-md border border-[#00000022]">
          </div>
          <div class="mb-3 flex flex-col">
            <label for="cpassword" class="font-[500] text-sm">Confirm Password:</label>
            <input type="password" placeholder="********" class="px-3 py-2 rounded-md border border-[#00000022]">
          </div>
          <div class="mb-3 flex flex-col">
            <input type="submit" value="Change Password" class="px-3 py-2 rounded-md  font-bold bg-primary text-light">
          </div>
          <div class="mb-3 flex justify-between">
            <a href="edit.php" class="text-blue-800 hover:text-primary">Edit Profile Info</a>
            <a href="delete-account.php" class="text-red-500 hover:text-red-600">Delete Account</a>
          </div>
        </form>
      </div>
    </div>
  </main>
</body>

</html>
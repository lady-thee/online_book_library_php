<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iroko | Edit Profile</title>
  <?php $BASE_DIR = "../";
  require_once('../partials/head.php'); ?>
</head>

<body>
  <?php require_once('../partials/navbar.php') ?>
  <main class="relative min-h-[100vh] w-full bg-light flex justify-center flex-wrap  flex-row-reverse">
    <div class="w-full h-10"></div>


    <div class="w-full md:w-6/12 h-full flex items-center justify-center md:justify-end p-5 relative">
      <div class="w-full md:w-10/12 max-w-[400px]">
        <h1 class="text-3xl  font-bold sticky top-16 bg-light">
          Edit Profile
        </h1>
        <p class="font-bold">Update your profile</p>
        <form action="" class="my-3">
          <div class="mb-3 flex flex-col items-center gap-3 justify-center">
            <img src="../img/user.jfif" alt="" class="rounded-full h-20 w-20">
            <div>
              <label for="image" class="app-button px-2 py-1 rounded-3xl bg-transparent border border-dark text-dark hover:text-primary hover:border-primary ms-3"><i class="fas fa-image"></i><span>&nbsp; Select Photo</span></label>
              <a href="edit.php" class="app-button px-2 py-1 rounded-3xl bg-transparent border border-red-500 text-red-500 hover:text-red-600 hover:border-red-600 ms-3"><i class="fas fa-trash"></i><span>&nbsp; Remove Photo</span></a>

            </div>
            <input type="file" hidden name="" id="image">
          </div>
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
            <label for="age" class="font-[500] text-sm">Bio:</label>
            <textarea placeholder="enter your bio" class="px-3 py-2 rounded-md border border-[#00000022]"></textarea>
          </div>
          <div class="mb-3 flex flex-col">
            <input type="submit" value="Update Profile" class="px-3 py-2 rounded-md  font-bold bg-primary text-light">
          </div>
          <div class="mb-3 flex justify-between">
            <a href="edit-password.php" class="text-blue-800 hover:text-primary">Change Password</a>
            <a href="delete-account.php" class="text-red-500 hover:text-red-600">Delete Account</a>
          </div>
        </form>
      </div>
    </div>
  </main>
</body>

</html>
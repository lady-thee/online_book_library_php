<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iroko | Edit Profile</title>
  <?php $BASE_DIR = "../";
  require_once('../partials/head.php'); ?>
  <?php require_once('partials/session.php')?>
</head>

<body>
  <?php require_once('../partials/navbar.php') ?>
  
  <main class="relative min-h-[100vh] w-full bg-light flex justify-center flex-wrap  flex-row-reverse">
    <div class="w-full h-10"></div>


    <div class="w-full md:w-6/12 h-full flex items-center justify-center p-5 relative">
      <div class="w-full md:w-10/12 max-w-[400px]">
        <h1 class="text-3xl  font-bold sticky top-16 bg-light">
          Edit Profile
        </h1>
        <p class="font-bold">Update your profile</p>
        <form action="../include/editProfile.php" method="post" class="my-3" enctype="multipart/form-data">
          <?php if(isset($_GET['error'])){ ?>
            <div class=""><p class="text-red-500"><?= $_GET['error'] ?></p></div>
          <?php } else if(isset($_GET['success'])){ ?>
            <div class=""><p class="text-green-500"><?= $_GET['success'] ?></p></div>
          <?php } else if(isset($_GET['info'])){ ?>
            <div class=""><p class="text-yellow-500"><?= $_GET['info'] ?></p></div>
          <?php } else{ ?>
            <div class=""><p class="text-red-500"></p></div>
           <?php } ?>
          <div class="mb-3 flex flex-col items-center gap-3 justify-center">
            <img src="../include/dps/<?= $photo ?>" alt="" class="rounded-full h-20 w-20">
            <div>
              <label for="image" class="app-button px-2 py-1 rounded-3xl bg-transparent border border-dark text-dark hover:text-primary hover:border-primary ms-3"><i class="fas fa-image"></i><span>&nbsp; Select Photo</span></label>
              <a href="edit.php" class="app-button px-2 py-1 rounded-3xl bg-transparent border border-red-500 text-red-500 hover:text-red-600 hover:border-red-600 ms-3"><i class="fas fa-trash"></i><span>&nbsp; Remove Photo</span></a>

            </div>
            <input type="file" accept="image/*"  name="photo" id="image">
          </div>
          <div class="mb-3 flex flex-col">
            <label for="email" class="font-[500] text-sm">Email:</label>
            <input type="email" name="email" value="<?= $email ?>" placeholder="eg: example@example.com " class="px-3 py-2 rounded-md border border-[#00000022]">
          </div>
          <div class="mb-3 flex flex-col">
            <label for="username" class="font-[500] text-sm">Username:</label>
            <input type="text" name="username" value="<?= $username ?>" placeholder="eg: user1234" class="px-3 py-2 rounded-md border border-[#00000022]">
          </div>
          <div class="mb-3 flex flex-col">
            <label for="fullname" class="font-[500] text-sm">Fullname:</label>
            <input type="text" name="fullname" value="<?= $fullname ?>"  placeholder="eg: Jane Doe" class="px-3 py-2 rounded-md border border-[#00000022]">
          </div>
          <div class="mb-3 flex flex-col">
            <label for="age" class="font-[500] text-sm">Age:</label>
            <input type="number" name="age" value="<?= $age ?>" placeholder="eg: 20" class="px-3 py-2 rounded-md border border-[#00000022]">
          </div>
          <div class="mb-3 flex flex-col">
            <label for="age" class="font-[500] text-sm">Bio:</label>
            <textarea placeholder="Tell us about yourself..."  name="bio"  class="px-3 py-2 rounded-md border border-[#00000022]"><?= $bio ?></textarea>
          </div>
          <div class="mb-3 flex flex-col">
            <input type="submit" name="submit" value="Update" class="px-3 py-2 rounded-md  font-bold bg-primary text-light">
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
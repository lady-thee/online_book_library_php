<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>$username | Iroko Dashboard</title>
  <?php $BASE_DIR="../"; require_once('../partials/head.php'); ?>
</head>
<body>
  <?php require_once('../partials/navbar.php') ?>
  <main class="pt-20 bg-light">
    <section class=" px-5 md:px-20">
      <div class="container">
        <div>
          <div class="flex justify-between items-center">
          <div class="flex">
            <img src="../img/user.jfif" alt="profile picture" class="rounded-full h-20 w-20 shadow overflow-hidden me-3">
          <div>
            <p class="text-blue-800 font-[500] opacity-80">Good day</p>
            <h1 class="font-bold text-2xl">$Full Name</h1>
            <p class=" font-bold opacity-80">@username</p>
          </div>
</div>
          <a href="edit-profile.php" class="app-button px-4 py-2 rounded-3xl bg-primary text-light bg-gradient-to-r from-[#00000044] to-transparent ms-3">Edit Profile</a>
   
          </div>
        </div>
        <div class="flex mt-2">
          <p class="opacity-80">
            $bio Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto dolor animi alias ab vero aspernatur eveniet, doloribus voluptate ipsa dolorem?
          </p>
        </div>
        </div>
      </div>
    </section>
  </main>
</body>
</html>
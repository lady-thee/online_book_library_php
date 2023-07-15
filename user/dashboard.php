<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> | Iroko Dashboard</title>
  <?php $BASE_DIR="../"; require_once('../partials/head.php'); ?>
  <?php require_once('partials/session.php')?>
</head>
<body>
  <?php require_once('../partials/navbar.php') ?>
  <main class="pt-20 bg-light">
    <section class=" px-5 md:px-20">
      <div class="container">
        <!-- Profile section -->
        <section>
          <div class="flex justify-between items-center">
          <div class="flex">
            <img src="../include/dps/<?= $photo ;?>" alt="profile picture" class="rounded-full h-20 w-20 shadow overflow-hidden me-3">
          <div>
            <p class="text-blue-800 font-[500] opacity-80">Good day</p>
            <h1 class="font-bold text-lg md:text-2xl"><?= $fullname ?></h1>
            <p class=" font-bold opacity-80"><?=$username ?></p>
          </div>
</div>
          <a href="edit.php" class="app-button px-2 py-1 rounded-3xl bg-transparent border border-dark text-dark hover:text-primary hover:border-primary ms-3"><i class="fas fa-pen"></i><span class="hidden md:inline-block">&nbsp; Edit Profile</span></a>

          </div>
          <div class=" mt-2">
            <p class="opacity-80 ">
              <?= $bio ?>
            </p>
          </div>
        </section>
        </div>

        <div class="border border-[#0000022] my-3"></div>
<!-- Dashboard Actions -->
<section class="flex flex-wrap">
  <div class="w-6/12 md:w-3/12 p-2 h-full">
    <a href="library.php" class="h-full rounded-md block text-center p-2 border border-[#00000022] bg-[#00000011] hover:bg-primary hover:text-light">
      <img src="../img/library.png" alt="library" class="w-full object-contain">
      <h4 class="font-[500] text-lg">My Library</h4>
      <p class="opacity-70">0 Books</p>
    </a>
  </div>
  <div class="w-6/12 md:w-3/12 p-2 h-full">
    <a href="books.php" class="h-full rounded-md block text-center p-2 border border-[#00000022] bg-[#00000011] hover:bg-primary hover:text-light">
      <img src="../img/my-books.png" alt="library" class="w-full object-contain">
      <h4 class="font-[500] text-lg">My Books</h4>
      <p class="opacity-70">0 Books</p>
    </a>
  </div>
  <div class="w-6/12 md:w-3/12 p-2 h-full">
    <a href="upload-book.php" class="h-full rounded-md block text-center p-2 border border-[#00000022] bg-[#00000011] hover:bg-primary hover:text-light">
      <img src="../img/upload-book.png" alt="library" class="w-full object-contain">
      <h4 class="font-[500] text-lg">Upload Story</h4>
      <p class="opacity-70">Add a Story</p>
    </a>
  </div>
  <div class="w-6/12 md:w-3/12 p-2 h-full">
    <a class="h-full rounded-md block text-center p-2 border border-[#00000022] bg-[#00000011] hover:bg-primary hover:text-light">
      <img src="../img/library.png" alt="library" class="w-full object-contain">
      <h4 class="font-[500] text-lg">Continue Reading</h4>
      <p class="opacity-70">Continue reading the last book</p>
    </a>
  </div>
</section>

        <div class="border border-[#0000022] my-3"></div>
        <!-- Recently added books -->

      </div>
    </section>
  </main>
</body>
</html>
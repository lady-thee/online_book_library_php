<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iroko | Library</title>
  <?php $BASE_DIR = "../";
  require_once('../partials/head.php'); ?>
</head>

<body>
  <?php require_once('../partials/navbar.php') ?>
  <main class="relative w-full bg-light">
    <div class="w-full h-16"></div>


    <div class="w-full md:w-10/12 mx-auto p-2">
      <h1 class="text-3xl  font-bold sticky top-16 bg-light">
        My Library
      </h1>
      <p class="font-bold">access and read books easily</p>
      <div class="w-full flex flex-wrap gap-5 py-5 justify-around sm:justify-start">
        <div class="book-card w-[45%] md:w-[16%] 2xl-[12.8%] relative p-2 bg-light overflow-hidden shadow hover:shadow-lg hover:border-[#00000011] border border-transparent md:min-w-[180px] sm:w-[30%]">
          <img src="../img/cruelprince.jpg" alt="cruel prince" class="absolute h-full blur-2xl opacity-30 w-full">
          <div class="relative flex flex-col justify-between h-full">
            <a href="#" class="block">
              <img src="../img/cruelprince.jpg" alt="cruel prince" class="rounded h-40 w-full">
              <h2 class="font-[500] text-lg leading-[20px]">The Cruel Prince</h2>
              <p class="opacity-70 text-sm">The author</p>
            </a>
            <div class="flex justify-between mt-2">
              <a href="#"><img src="../img/user.jfif" alt="$username" class="h-6 w-6 rounded-full"></a>
              <span>
                <strong>5</strong>
                <i class="fa fa-star"></i>
              </span>
            </div>
          </div>
        </div>
        <div class="book-card w-[45%] md:w-[16%] 2xl-[12.8%] relative p-2 bg-light overflow-hidden shadow  hover:shadow-lg hover:border-[#00000011] border border-transparent md:min-w-[180px] sm:w-[30%]">
          <img src="../img/cursedchild.jpg" alt="cruel prince" class="absolute h-full blur-2xl opacity-30 w-full">
          <div class="relative flex flex-col justify-between h-full">
            <a href="#" class="block">
              <img src="../img/cursedchild.jpg" alt="cruel prince" class="rounded h-40 w-full">
              <h2 class="font-[500] text-lg leading-[20px]">Harryporter; The Cursed Child</h2>
              <p class="opacity-70 text-sm">The Cursed Child</p>
            </a>
            <div class="flex justify-between mt-2">
              <a href="#"><img src="../img/user.jfif" alt="$username" class="h-6 w-6 rounded-full"></a>
              <span>
                <strong>5</strong>
                <i class="fa fa-star"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>
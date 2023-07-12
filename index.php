<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iroko | Home of books</title>
  <?php require_once('partials/head.php') ?>
</head>

<body>
  <?php require_once('partials/navbar.php') ?>
  <section class="hero h-[80vh] min-h-[600px] lg:h-screen relative">
    <div class="absolute block md:hidden top-0 left-0 h-full w-full">
      <img src="img/login-bg.jpg" alt="books" class="h-full w-full object-cover opacity-20 z-[-1]">

    </div>
    <div class="absolute block md:hidden top-0 left-0 h-full w-full bg-gradient-to-b from-light via-transparent to-light">
    </div>
    <div class="container h-full mx-auto relative">
      <div class="flex h-full items-center justify-center">
        <div class="w-11/12 md:w-5/12 text-center md:text-left">
          <h1 class="font-extrabold text-3xl text-primary md:text-[4vw] md:leading-[4vw]">
            Read More <br>
            Write More <br>
            Better Reviews <br>
          </h1>
          <h2 class="opacity-70 text-lg font-[500]">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem ipsam natus illum, deleniti in error optio deserunt. Inventore, omnis consectetur.</h2>
          <div class="rounded-3xl border border-[#00000022] p-2 mt-2 flex bg-white shadow-md">
            <input type="text" class="w-full rounded-3xl outline-none px-3 bg-transparent" placeholder="Search For Books">
            <button class="app-button h-full w-20 min-w-20 px-4 py-2 rounded-3xl bg-primary text-light bg-gradient-to-r from-[#00000044] to-transparent ms-3"><i class="fas fa-search"></i></button>
          </div>
        </div>
        <div class="w-11/12 md:w-6/12 p-20 md:flex h-full items-center justify-center hidden">
          <img src="img/hero.png" alt="hero section photo">
        </div>
      </div>
    </div>
  </section>
  <!-- genres section -->
  <section class="py-10 bg-dark">
    <div class="container md:w-full md:ps-[10vw] mx-auto">
      <div class="flex flex-wrap items-center justify-center">
        <div class="w-6/12 md:w-3/12 lg:w-4/12 xl:w-5/12">
          <img src="img/genres.png" alt="genres photo">
        </div>
        <div class="w-10/12 md:w-9/12 lg:w-8/12 xl:w-7/12">
          <div class="bg-dark text-[#eee] text-center md:text-left">
            <h1 class="font-bold text-3xl md:text-[4vw] md:leading-[4vw]">All Kinda Genres</h1>
            <ul class="flex flex-wrap my-4 justify-center md:justify-start">
              <li class="opacity-70 text-black text-lg font-[500] rounded-md bg-light shadow-ld py-2 px-4 border border-black w-fit"><i class="fas fa-circle scale-50"></i> Fantasy</li>
              <li class="opacity-70 text-black text-lg font-[500] rounded-md bg-light shadow-ld py-2 px-4 border border-black w-fit"><i class="fas fa-circle scale-50"></i> Science Fiction</li>
              <li class="opacity-70 text-black text-lg font-[500] rounded-md bg-light shadow-ld py-2 px-4 border border-black w-fit"><i class="fas fa-circle scale-50"></i> Mystery</li>
              <li class="opacity-70 text-black text-lg font-[500] rounded-md bg-light shadow-ld py-2 px-4 border border-black w-fit"><i class="fas fa-circle scale-50"></i> Romance</li>
              <li class="opacity-70 text-black text-lg font-[500] rounded-md bg-light shadow-ld py-2 px-4 border border-black w-fit"><i class="fas fa-circle scale-50"></i> Thriller</li>
              <li class="opacity-70 text-black text-lg font-[500] rounded-md bg-light shadow-ld py-2 px-4 border border-black w-fit"><i class="fas fa-circle scale-50"></i> Horror</li>
              <li class="opacity-70 text-black text-lg font-[500] rounded-md bg-light shadow-ld py-2 px-4 border border-black w-fit"><i class="fas fa-circle scale-50"></i> Historical Fiction</li>
              <li class="opacity-70 text-black text-lg font-[500] rounded-md bg-light shadow-ld py-2 px-4 border border-black w-fit"><i class="fas fa-circle scale-50"></i> Adventure</li>
              <li class="opacity-70 text-black text-lg font-[500] rounded-md bg-light shadow-ld py-2 px-4 border border-black w-fit"><i class="fas fa-circle scale-50"></i> Young Adult</li>
              <li class="opacity-70 text-black text-lg font-[500] rounded-md bg-light shadow-ld py-2 px-4 border border-black w-fit"><i class="fas fa-circle scale-50"></i> Dystopian</li>
              <li class="opacity-70 text-black text-lg font-[500] rounded-md bg-light shadow-ld py-2 px-4 border border-black w-fit"><i class="fas fa-circle scale-50"></i> Crime</li>
              <li class="opacity-70 text-black text-lg font-[500] rounded-md bg-light shadow-ld py-2 px-4 border border-black w-fit"><i class="fas fa-circle scale-50"></i> Comedy</li>
              <li class="opacity-70 text-black text-lg font-[500] rounded-md bg-light shadow-ld py-2 px-4 border border-black w-fit"><i class="fas fa-circle scale-50"></i> Action</li>
              <li class="opacity-70 text-black text-lg font-[500] rounded-md bg-light shadow-ld py-2 px-4 border border-black w-fit"><i class="fas fa-circle scale-50"></i> Paranormal</li>
              <li class="opacity-70 text-black text-lg font-[500] rounded-md bg-light shadow-ld py-2 px-4 border border-black w-fit"><i class="fas fa-circle scale-50"></i> Literary Fiction</li>
              <li class="opacity-70 text-black text-lg font-[500] rounded-md bg-light shadow-ld py-2 px-4 border border-black w-fit"><i class="fas fa-circle scale-50"></i> Suspense</li>
              <li class="opacity-70 text-black text-lg font-[500] rounded-md bg-light shadow-ld py-2 px-4 border border-black w-fit"><i class="fas fa-circle scale-50"></i> Western</li>
              <li class="opacity-70 text-black text-lg font-[500] rounded-md bg-light shadow-ld py-2 px-4 border border-black w-fit"><i class="fas fa-circle scale-50"></i> Contemporary</li>
              <li class="opacity-70 text-black text-lg font-[500] rounded-md bg-light shadow-ld py-2 px-4 border border-black w-fit"><i class="fas fa-circle scale-50"></i> Magical Realism</li>
              <li class="opacity-70 text-black text-lg font-[500] rounded-md bg-light shadow-ld py-2 px-4 border border-black w-fit"><i class="fas fa-circle scale-50"></i> Satire</li>
            </ul>
            <div class="pt-3">

              <a href="books.php" class="app-button px-5 py-3 rounded-3xl bg-transparent border-2 mt-3 border-light text-light hover:text-light hover:bg-primary hover:border-primary"><i class="fas fa-book"></i><span>&nbsp; Explore Books</span></a>
            </div>


          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- books section -->
  <section class="py-10">
    <div class="container mx-auto ">

      <h1 class="font-bold text-3xl md:text-[4vw] md:leading-[4vw] text-center">Most Recent Books</h1>
      <p class="opacity-70 font-[500] text-center">here are some of the books uploaded by wonderful writers</p>
      <div class="px-3 flex justify-around flex-wrap mt-5 md:my-8 gap-2 md:gap-5 mx-auto max-w-[700px]">
        <div class="book-card w-[45%] md:w-[16%] 2xl-[12.8%] relative p-2 bg-light overflow-hidden shadow hover:shadow-lg hover:border-[#00000011] border border-transparent md:min-w-[180px] sm:w-[30%]">
          <img src="img/cruelprince.jpg" alt="cruel prince" class="absolute h-full blur-2xl opacity-30 w-full">
          <div class="relative flex flex-col justify-between h-full">
            <a href="#" class="block">
              <img src="img/cruelprince.jpg" alt="cruel prince" class="rounded h-40 w-full">
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
        <div class="book-card w-[45%] md:w-[16%] 2xl-[12.8%] relative p-2 bg-light overflow-hidden shadow hover:shadow-lg hover:border-[#00000011] border border-transparent md:min-w-[180px] sm:w-[30%]">
          <img src="img/cruelprince.jpg" alt="cruel prince" class="absolute h-full blur-2xl opacity-30 w-full">
          <div class="relative flex flex-col justify-between h-full">
            <a href="#" class="block">
              <img src="img/cruelprince.jpg" alt="cruel prince" class="rounded h-40 w-full">
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
        <div class="book-card w-[45%] md:w-[16%] 2xl-[12.8%] relative p-2 bg-light overflow-hidden shadow hover:shadow-lg hover:border-[#00000011] border border-transparent md:min-w-[180px] sm:w-[30%]">
          <img src="img/cruelprince.jpg" alt="cruel prince" class="absolute h-full blur-2xl opacity-30 w-full">
          <div class="relative flex flex-col justify-between h-full">
            <a href="#" class="block">
              <img src="img/cruelprince.jpg" alt="cruel prince" class="rounded h-40 w-full">
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
        <div class="book-card w-[45%] md:w-[16%] 2xl-[12.8%] relative p-2 bg-light overflow-hidden shadow hover:shadow-lg hover:border-[#00000011] border border-transparent md:min-w-[180px] sm:w-[30%]">
          <img src="img/cruelprince.jpg" alt="cruel prince" class="absolute h-full blur-2xl opacity-30 w-full">
          <div class="relative flex flex-col justify-between h-full">
            <a href="#" class="block">
              <img src="img/cruelprince.jpg" alt="cruel prince" class="rounded h-40 w-full">
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
        <div class="book-card w-[45%] md:w-[16%] 2xl-[12.8%] relative p-2 bg-light overflow-hidden shadow hover:shadow-lg hover:border-[#00000011] border border-transparent md:min-w-[180px] sm:w-[30%]">
          <img src="img/cruelprince.jpg" alt="cruel prince" class="absolute h-full blur-2xl opacity-30 w-full">
          <div class="relative flex flex-col justify-between h-full">
            <a href="#" class="block">
              <img src="img/cruelprince.jpg" alt="cruel prince" class="rounded h-40 w-full">
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
        <div class="book-card w-[45%] md:w-[16%] 2xl-[12.8%] relative p-2 bg-light overflow-hidden shadow hover:shadow-lg hover:border-[#00000011] border border-transparent md:min-w-[180px] sm:w-[30%]">
          <img src="img/cruelprince.jpg" alt="cruel prince" class="absolute h-full blur-2xl opacity-30 w-full">
          <div class="relative flex flex-col justify-between h-full">
            <a href="#" class="block">
              <img src="img/cruelprince.jpg" alt="cruel prince" class="rounded h-40 w-full">
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
      </div>
    </div>
  </section>
  <!-- Why Choose Us -->
  <section class="py-10 bg-[#eee] text-dark">

    <h1 class="font-bold text-3xl md:text-[4vw] md:leading-[4vw] text-center">Why
      <img src="<?= $BASE_DIR ?>img/logo.png" alt="logo" class="w-40 inline-block">
    </h1>
    <div class="flex container flex-wrap mx-auto my-8 px-5 md:px-0 justify-center">
      <div class="w-11/12 sm:w-6/12 md:w-3/12 max-w-[300px] p-3">
        <h1 class="fas fa-users text-[60px] md:text-[6vw] 2xl:text-[110px]"></h1>
        <p class="text-lg opacity-70 font-[500]">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab asperiores repellendus sunt laboriosam quo reprehenderit, magnam officia provident suscipit deleniti quas enim qui sequi voluptate animi ipsam? Doloremque, enim dolores?
        </p>
      </div>
      <div class="w-11/12 sm:w-6/12 md:w-3/12 max-w-[300px] p-3">
        <h1 class="fas fa-users text-[60px] md:text-[6vw] 2xl:text-[110px]"></h1>
        <p class="text-lg opacity-70 font-[500]">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab asperiores repellendus sunt laboriosam quo reprehenderit, magnam officia provident suscipit deleniti quas enim qui sequi voluptate animi ipsam? Doloremque, enim dolores?
        </p>
      </div>
      <div class="w-11/12 sm:w-6/12 md:w-3/12 max-w-[300px] p-3">
        <h1 class="fas fa-users text-[60px] md:text-[6vw] 2xl:text-[110px]"></h1>
        <p class="text-lg opacity-70 font-[500]">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab asperiores repellendus sunt laboriosam quo reprehenderit, magnam officia provident suscipit deleniti quas enim qui sequi voluptate animi ipsam? Doloremque, enim dolores?
        </p>
      </div>
      <div class="w-11/12 sm:w-6/12 md:w-3/12 max-w-[300px] p-3">
        <h1 class="fas fa-users text-[60px] md:text-[6vw] 2xl:text-[110px]"></h1>
        <p class="text-lg opacity-70 font-[500]">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab asperiores repellendus sunt laboriosam quo reprehenderit, magnam officia provident suscipit deleniti quas enim qui sequi voluptate animi ipsam? Doloremque, enim dolores?
        </p>
      </div>
    </div>

  </section>
</body>

</html>
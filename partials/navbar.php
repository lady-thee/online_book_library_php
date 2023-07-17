<?php
$BASE_DIR = !isset($BASE_DIR) ? "" : $BASE_DIR;
 if($_SESSION['loggedin'] == true){
  require_once('partials/session.php');
 }
?>
<header id="header" class="header h-16 fixed top-0 left-0 w-full bg-light flex justify-between items-center px-[5vw] md:px-[10vw] z-30">
  <a href="<?= $BASE_DIR ?>index.php">
    <img src="<?= $BASE_DIR ?>img/logo.png" alt="logo" class="w-28">
  </a>
  <nav class="md:inline-flex items-center hidden">
    <a href="<?= $BASE_DIR ?>about.php" class="inline-block mx-2 font-[500] hover:text-primary opacity-80">About</a>
    <a href="<?= $BASE_DIR ?>about.php" class="inline-block mx-2 font-[500] hover:text-primary opacity-80">Books</a>
    <a href="<?= $BASE_DIR ?>about.php" class="inline-block mx-2 font-[500] hover:text-primary opacity-80">Contact</a>
    <a href="<?= $BASE_DIR ?>loguser.php" class="app-button px-4 py-2 rounded-3xl bg-primary text-light bg-gradient-to-r from-[#00000044] to-transparent ms-3">Login</a>
    <a href="<?= $BASE_DIR ?>user/dashboard.php" class="inline-block ms-2"><img src="<?= $BASE_DIR ?>include/dps/<?= $photo ?>" alt="$username" class="h-10 w-10 rounded-full"></a>
  </nav>
  <button onclick="document.querySelector('#sidebar').classList.remove('left-[-105vw]');document.body.classList.add('overflow-hidden')" class="fas fa-bars text-2xl md:hidden"></button>
</header>
<aside class="sidebar left-0 h-screen w-full fixed top-0 z-40 bg-light left-[-105vw]" style="transition: left .5s ease;" id="sidebar">
  <div class="flex justify-between py-4 px-[5vw]">
    <a href="<?= $BASE_DIR ?>index.php">
      <img src="<?= $BASE_DIR ?>img/logo.png" alt="logo" class="w-28">
    </a>
    <button class="fas fa-times text-2xl md:hidden" onclick="document.querySelector('#sidebar').classList.add('left-[-105vw]');document.body.classList.remove('overflow-hidden')"></button>
  </div>
  <nav class="flex flex-col items-start  px-[5vw]">
    <a href="<?= $BASE_DIR ?>user/dashboard.php" class="inline-flex items-center mb-4 ms-2"><img src="<?= $BASE_DIR ?>include/dps/<?= $photo ?>" alt="user" class="h-10 w-10 rounded-full">&nbsp; <span class="font-[500]"><?= $fullname ?></span></a>
    <a href="<?= $BASE_DIR ?>about.php" class="inline-block mb-2 mx-2 font-[500] hover:text-primary opacity-80">About</a>
    <a href="<?= $BASE_DIR ?>about.php" class="inline-block mb-2 mx-2 font-[500] hover:text-primary opacity-80">Books</a>
    <a href="<?= $BASE_DIR ?>about.php" class="inline-block mb-2 mx-2 font-[500] hover:text-primary opacity-80">Contact</a>
    <a href="<?= $BASE_DIR ?>login.php" class="app-button px-4 py-2 rounded-3xl bg-primary text-light bg-gradient-to-r from-[#00000044] to-transparent ms-3">Login</a>
  </nav>
</aside>
<script>
  window.addEventListener('scroll', () => {
    const offset = window.scrollY;
    const header = document.querySelector('#header');
    offset > 100 ? header.classList.add('shadow') : header.classList.remove('shadow');
  })
</script>
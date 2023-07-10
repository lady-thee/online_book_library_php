<?php
$BASE_DIR = !isset($BASE_DIR) ? "" : $BASE_DIR
?>
<header id="header" class="header h-16 fixed top-0 left-0 w-full bg-light flex justify-between items-center px-[5vw] md:px-[10vw] z-30">
  <a href="<?= $BASE_DIR ?>index.php">
    <h2 class="font-bold text-lg ">Iroko</h2>
    <nav class="inline-flex items-center">
      <a href="<?= $BASE_DIR ?>about.php" class="inline-block mx-2 font-[500] hover:text-primary opacity-80">About</a>
      <a href="<?= $BASE_DIR ?>about.php" class="inline-block mx-2 font-[500] hover:text-primary opacity-80">Books</a>
      <a href="<?= $BASE_DIR ?>about.php" class="inline-block mx-2 font-[500] hover:text-primary opacity-80">Contact</a>
      <a href="<?= $BASE_DIR ?>login.php" class="app-button px-4 py-2 rounded-3xl bg-primary text-light bg-gradient-to-r from-[#00000044] to-transparent ms-3">Login</a>
    </nav>
  </a>
</header>
<script>
  window.addEventListener('scroll', () => {
    const offset = window.scrollY;
    const header = document.querySelector('#header');
    offset > 100 ? header.classList.add('shadow') : header.classList.remove('shadow');
  })
</script>
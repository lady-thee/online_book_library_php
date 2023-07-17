<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iroko | $Book_name by $book_author</title>
  <?php require_once('partials/head.php') ?>
</head>

<body>
  <?php require_once('partials/navbar.php') ?>
  <main class="mt-16">
    <div class="container mx-auto">
      <div class="relative h-[60vh] rounded overflow-hidden">
        <img src="./img/book-794978.jpg" alt="book name" class="absolute w-full h-full object-cover top-0 left-0 blur-lg">
        <div class="relative flex-wrap p-10 h-full w-full bg-gradient-to-t sm:justify-center from-light to-transparent flex content-center items-center">
          <img src="./img/book-794978.jpg" alt="book name" class="w-48 md:w-60 rounded shadow-md">
          <div class="sm:ms-4 sm:max-w-[60%]">
            <h1 class="mt-2 font-bold text-2xl">Book Name</h1>
            <div class="flex mt-2 items-center">
              <img src="./img/user.jfif" alt="$username" class="h-8 w-8 me-2 rounded-full">
              <p class="font-[500] opacity-80">Author Name</p>
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident repellendus deserunt nostrum inventore tempore atque placeat dolor quia quaerat dignissimos!
            </p>
          </div>
        </div>
      </div>
      <div class="flex flex-wrap justify-center px-5 md:px-0">
        <div class="w-full md:w-4/12 p-4  ">

          <div class=" rounded border border-[#00000022] p-2 mb-4">
            <h6 class="font-[500]">Rate</h6>
            <form action="" class="flex justify-between items-center">
              <div class="rating-bar w-fit">
                <input type="text" hidden name="" id="rate-value" value="3">
                <i class="fas fa-star inline-block me-2 cursor-pointer text-2xl hover:scale-110 opacity-50"></i><i class="fas fa-star inline-block me-2 cursor-pointer text-2xl hover:scale-110 opacity-50"></i><i class="fas fa-star inline-block me-2 cursor-pointer text-2xl hover:scale-110 opacity-50"></i><i class="fas fa-star inline-block me-2 cursor-pointer text-2xl hover:scale-110 opacity-50"></i><i class="fas fa-star inline-block me-2 cursor-pointer text-2xl hover:scale-110 opacity-50"></i>
              </div>
              <input type="submit" value="submit" class="px-4 py-2 hover:text-light hover:bg-primary rounded-md border border-primary text-primary font-[500]">
            </form>

          </div>
          <div class=" rounded border border-[#00000022] p-2">
            <h6 class="font-[500]">Genre</h6>
            <div class="flex flex-wrap">
              <span class="inline-block px-4 py-2 rounded me-2 mb-2 bg-[#00000022]">fiction</span>
              <span class="inline-block px-4 py-2 rounded me-2 mb-2 bg-[#00000022]">fiction</span>
              <span class="inline-block px-4 py-2 rounded me-2 mb-2 bg-[#00000022]">fiction</span>
              <span class="inline-block px-4 py-2 rounded me-2 mb-2 bg-[#00000022]">fiction</span>
            </div>
          </div>
        </div>
        <div class="w-full md:w-6/12 p-4">
          <h6 class="font-[500]">Reviews</h6>
          <div class="max-h-[90vh] overflow-y-auto">
            <div class="mb-4 review-card">
              <div class="flex mt-2 items-center">
                <img src="./img/user.jfif" alt="$username" class="h-6 w-6 me-2 rounded-full">
                <p class="font-[500] ">Theola Onuh</p>
              </div>
              <p class="opacity-80 border-b border-[#00000011]">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error unde porro consectetur minima animi facilis ex doloremque quo fugit? Provident.</p>
            </div>
            <div class="mb-4 review-card">
              <div class="flex mt-2 items-center">
                <img src="./img/user.jfif" alt="$username" class="h-6 w-6 me-2 rounded-full">
                <p class="font-[500] ">Theola Onuh</p>
              </div>
              <p class="opacity-80 border-b border-[#00000011]">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error unde porro consectetur minima animi facilis ex doloremque quo fugit? Provident.</p>
            </div>
            <div class="mb-4 review-card">
              <div class="flex mt-2 items-center">
                <img src="./img/user.jfif" alt="$username" class="h-6 w-6 me-2 rounded-full">
                <p class="font-[500] ">Theola Onuh</p>
              </div>
              <p class="opacity-80 border-b border-[#00000011]">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error unde porro consectetur minima animi facilis ex doloremque quo fugit? Provident.</p>
            </div>
          </div>
          <div class="p-2 bg-red-100 rounded">
            <b>To leave a review you must <a href="login.php" class="text-blue-800 hover:text-primary">Login</a></b>
          </div>
          <form action="" class="flex p-3 rounded border border-[#00000022]">
            <textarea name="" id="" class="w-full bg-transparent border-none outline-none" placeholder="write a comment or review here"></textarea>
            <button class="h-16 w-16 inline-block text-light bg-primary rounded-md border border-primary font-[500]"><i class="fas fa-paper-plane"></i></button>
          </form>

        </div>
      </div>
    </div>
  </main>
</body>
<script>
  const ratingBar = document.querySelector('.rating-bar');
  const rateValue = document.querySelector('#rate-value');
  const stars = ratingBar.querySelectorAll('i');
  colorStars(rateValue.value);

  stars.forEach((star, index) => {
    star.addEventListener('click', () => {
      const starPosition = index + 1;
      rateValue.value = starPosition;
      colorStars(starPosition);
    })
  });

  function colorStars(starPosition) {
    for (let i = 0; i < stars.length; i++) {
      const s = stars[i];
      s.classList.remove('text-yellow-500');
      s.classList.add('opacity-50');
      if (i < starPosition) {
        s.classList.remove('opacity-50');
        s.classList.add('text-yellow-500');
      }
    }
  }
</script>

</html>
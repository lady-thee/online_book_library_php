<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iroko | Upload Book</title>
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
          Upload Story
        </h1>
        <p class="font-bold">Add a story book</p>
        <form action="" class="my-3">
          <div class="mb-3 flex flex-col items-center gap-3 justify-center">
            <img src="" alt="" class="rounded h-40 w-32 bg-[#00000022]">
            <div>
              <label for="image" class="app-button px-2 py-1 rounded-3xl bg-transparent border border-dark text-dark hover:text-primary hover:border-primary ms-3"><i class="fas fa-image"></i><span>&nbsp; Select Photo</span></label>

            </div>
            <input type="file" hidden name="" id="image">
          </div>
          <div class="mb-3 flex flex-col">
            <label for="email" class="font-[500] text-sm">Book Title:</label>
            <input type="text" placeholder="enter book name or title" class="px-3 py-2 rounded-md border border-[#00000022]">
          </div>
          <div class="mb-3 flex flex-col">
            <label for="author" class="font-[500] text-sm">Author:</label>
            <input type="text" placeholder="enter author name" class="px-3 py-2 rounded-md border border-[#00000022]">
          </div>
          <div class="mb-3 flex flex-col">
            <label for="blob" class="font-[500] text-sm">Blob:</label>
            <textarea rows="3" placeholder="enter short content for the book" class="px-3 py-2 rounded-md border border-[#00000022]"></textarea>
          </div>
          <div class="mb-3 flex flex-col">
            <label for="tags" class="font-[500] text-sm">Genre, Tags:</label>
            <style>
              input[type="checkbox"]:checked+span {
                /* Apply different style when the checkbox is checked */
                /* Add your custom styles here */
                background-color: #33ff3355;
                font-weight: bold;
              }
            </style>
            <div class="mb-3">
              <label class="" for="fiction"><input hidden type="checkbox" name="tag" id="fiction"><span class="inline-block me-2 py-2 px-4 rounded-lg bg-[#00000022]">Fiction</span></label>
              <label class="" for="Romance"><input hidden type="checkbox" name="tag" id="Romance"><span class="inline-block me-2 py-2 px-4 rounded-lg bg-[#00000022]">Romance</span></label>
              <label class="" for="Drama"><input hidden type="checkbox" name="tag" id="Drama"><span class="inline-block me-2 py-2 px-4 rounded-lg bg-[#00000022]">Drama</span></label>
            </div>
          </div>
          <div class="mb-3 flex flex-col">
            <input type="submit" value="Upload Book" class="px-3 py-2 rounded-md  font-bold bg-primary text-light">
          </div>
          <div class="mb-3 flex justify-between">
          </div>
        </form>
      </div>
    </div>
  </main>
</body>

</html>
<?php 


session_start();

$BASE_DIR = !isset($BASE_DIR) ? "" : $BASE_DIR;


?>
<script src="https://cdn.tailwindcss.com"></script>
<script type="module" src="<?= $BASE_DIR ?>dist/js/tailwind.config.js"></script>
<link rel="stylesheet" href="<?= $BASE_DIR ?>dist/css/main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
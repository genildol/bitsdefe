<?php
function loadContent()
{
  $page = isset($_GET['page']) ? basename($_GET['page']) : 'home'; // Evita ataques

  $paths = [
    __DIR__ . "/pages/{$page}.php",
    __DIR__ . "/modules/{$page}.php"
  ];

  foreach ($paths as $path) {
    if (file_exists($path)) {
      require_once($path);
      return;
    }
  }

  require_once(__DIR__ . '/404.php');
}


// function loadAbout()
// {
//   if (isset($_GET['page'])) {
//     $page = $_GET['page'];
//   } else {
//     $page = 'home';
//   }

//   if (file_exists(__DIR__ . "/sobre/{$page}.php")) {
//     require_once(__DIR__ . "/pages/{$page}.php");

//     return;
//   }

//   require_once(__DIR__ . '/404.php');
// }

// function bootstrap()
// {
//   require_once(__DIR__ . '/templates/navbar.php');

//   loadContent();

//   require_once(__DIR__ . '/templates/footer.php');
// }

// bootstrap();

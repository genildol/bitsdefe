<?php

function loadContent()
{
  $page = isset($_GET['page']) ? basename($_GET['page']) : 'sobre';

  $path = __DIR__ . '/pages/' . $page . '.php';

  if (file_exists($path)) {
    require_once __DIR__ . '/templates/navbar.php';
    require_once $path;
    require_once __DIR__ . '/templates/footer.php';
  } else {
    require_once __DIR__ . '/404.php';
  }
}

loadContent();


// function loadContent()
// {
//   if (isset($_GET['page'])) {
//     $page = $_GET['page'];
//   } else {
//     $page = 'home';
//   }

//   if (file_exists(__DIR__ . "/pages/{$page}.php")) {
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
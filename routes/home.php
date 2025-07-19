<?php
function loadContent()
{
    $page = isset($_GET['page']) ? basename($_GET['page']) : 'index'; 

  $paths = [
    __DIR__ . "/../app/views/" .$page . '.php',
  ];

  foreach ($paths as $path) {
    if (file_exists($path)) {
      require_once($path);
      return;
    }
  }

  require_once(__DIR__ . '/../app/views/home.php'); 
}

// function loadAbout()
// {
//     $page = isset($_GET['page']) ? basename($_GET['page']) : 'sobre';

//   $paths = [
//     __DIR__ . "/../pages/sobre/" .$page . '.php',
//   ];

//   foreach ($paths as $path) {
//     if (file_exists($path)) {
//       require_once($path);
//       return;
//     }
//   }
//   // Se não encontrar, carrega a página padrão  
//   require_once(__DIR__ . '/../pages/sobre.php'); 
// }
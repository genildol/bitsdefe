<?php
function loadContent()
{
    $page = isset($_GET['page']) ? basename($_GET['page']) : 'index'; 

  $paths = [
    __DIR__ . "/../app/views/" .$page . '.php',
    // __DIR__ . "/../modules/". $page . '.php',
  ];

  foreach ($paths as $path) {
    if (file_exists($path)) {
      require_once($path);
      return;
    }
  }

  require_once(__DIR__ . '/../app/views/home.php'); 
}
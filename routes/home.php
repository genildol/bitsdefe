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

function loadAbout()
{
      // Define a página com base na URL ou usa 'sobre' como padrão
    $page = isset($_GET['page']) ? basename($_GET['page']) : 'sobre';

    // Caminhos onde procurar os arquivos
    $paths = [
        __DIR__ . "/public/sobre/" .$page. ".php", 
        // Ex: /public/sobre/quem-somos.php
    ];

    // Tenta carregar o primeiro arquivo que existir
    foreach ($paths as $path) {
        if (file_exists($path)) {
            require_once($path);
            return;
        }
    }

    // Se não encontrar nenhum, carrega a página padrão sobre.php
    require_once(__DIR__ . '/../pages/home.php');
}

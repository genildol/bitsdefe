<?php

const BASE_URL = 'http://localhost/bitsdefe/';
const BASE_PATH = __DIR__; // Caminho absoluto no servidor

function loadContent()
{
  $page = isset($_GET['page']) ? basename($_GET['page']) : 'home'; // Proteção contra ataques de diretório

  $paths = [
    BASE_PATH . "/{$page}.php",
  ];

  foreach ($paths as $path) {
    if (file_exists($path)) {
      require_once($path);
    }
  }

  // Se o arquivo da página não existir, carregar o 404
  if (!file_exists(BASE_PATH . "/{$page}.php")) {
    require_once(BASE_PATH . "/404.php");
  }
}

// Bootstrap
function bootstrap()
{
  require_once(BASE_PATH . "/templates/navbar.php");

  loadContent();

  require_once(BASE_PATH . "/templates/footer.php");
}

bootstrap();
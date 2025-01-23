<?php
function loadContent()
{
  if (isset($_GET['page'])) {
    $page = $_GET['page'];
  } else {
    $page = 'home';
  }

  if (file_exists(__DIR__ . "/pages/{$page}.php")) {
    require_once(__DIR__ . "/pages/{$page}.php");

    return;
  }

  require_once(__DIR__ . '/404.php');
}

function bootstrap()
{
  require_once(__DIR__ . '/templates/navbar.php');

  loadContent();

  require_once(__DIR__ . '/templates/footer.php');
}

bootstrap();
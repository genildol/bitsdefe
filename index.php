<?php

function loadContent()
{
  $page = isset($_GET['page']) ? basename($_GET['page']) : 'home';

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

function loadAbout()
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


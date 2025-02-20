<?php
function loadContent()
{
  $page = isset($_GET['page']) ? basename($_GET['page']) : 'home'; // Evita ataques

  $paths = [
    __DIR__ . "/pages/{$page}.php",
    __DIR__ . "/modules/{$page}.php",
    __DIR__ . "/templates/{$page}.php"
  ];

  foreach ($paths as $path) {
    if (file_exists($path)) {
      require_once($path);
      return;
    }
  }

  require_once(__DIR__ . '/404.php');
}

// Bootstrap
function bootstrap()
{
  require_once(__DIR__ . "/templates/navbar.php");

  loadContent();

  require_once(__DIR__ . "/templates/footer.php");
  loadContent();
  require_once(__DIR__ . "/lib/lightbox/css/lightbox.min.css");
  loadContent();
  require_once(__DIR__ . "/css/bootstrap.min.css");
  loadContent();
  require_once(__DIR__ . "/css/style.css");
  loadContent();
  require_once(__DIR__ . "/lib/animate/animate.min.css");
  loadContent();
  require_once(__DIR__ . "/lib/owlcarousel/assets/owl.carousel.min.css");
  loadContent();
  require_once(__DIR__ . "/lib/lightbox/css/lightbox.min.css");
  loadContent();
  require_once(__DIR__ . "/css/bootstrap.min.css");
  loadContent();
  require_once(__DIR__ . "/css/style.css");
  loadContent();
  require_once(__DIR__ . "/templates/footer.php");
  loadContent();
  require_once(__DIR__ . "/templates/navbar.php");
  loadContent();
  require_once(__DIR__ . "/lib/animate/animate.min.css");
  loadContent();
  require_once(__DIR__ . "/lib/owlcarousel/assets/owl.carousel.min.css");
  loadContent();
  require_once(__DIR__ . "/lib/lightbox/css/lightbox.min.css");
  loadContent();
  require_once(__DIR__ . "/css/bootstrap.min.css");
  loadContent();
  require_once(__DIR__ . "/js/bootstrap.bundle.min.js");
  loadContent();
  require_once(__DIR__ . "/js/jquery.min.js");
  loadContent();
  require_once(__DIR__ . "/js/main.js");
  loadContent();
  require_once(__DIR__ . "/js/owl.carousel.min.js");
  loadContent();
  require_once(__DIR__ . "/lib/lightbox/js/lightbox.min.js");
  loadContent();
  require_once(__DIR__ . "/lib/wow/wow.min.js");
}

bootstrap();
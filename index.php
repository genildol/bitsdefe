<?php

function loadContent()
{
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';

     // Remove caracteres perigosos do caminho
    $safePage = preg_replace('/[^a-zA-Z0-9\/_-]/', '', $page);

    // Sanitiza e monta o caminho do arquivo
    $path = realpath(__DIR__ . '/pages/' . $page . '.php');

    // Segurança: impede acesso fora da pasta /pages
    if ($path && strpos($path, realpath(__DIR__ . '/pages')) === 0 && file_exists($path)) {
        require_once($path);
    } else {
        require_once(__DIR__ . '/404.php');
    }
}

function bootstrap()
{
    require_once(__DIR__ . '/templates/navbar.php');
    loadContent();
    require_once(__DIR__ . '/templates/footer.php');
}

bootstrap();

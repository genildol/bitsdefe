<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>Navbar</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
    rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="./assets/lib/animate/animate.min.css" rel="stylesheet">
  <link href="./assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="./assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="./assets/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- Spinner Start -->
  <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
  </div>
  <!-- Spinner End -->
  <!-- INICIO DO PRIMEIRO TOPO -->

  <div class="container-fluid bg-primary text-white d-none d-lg-flex">
    <div class="container py-3">
      <div class="d-flex align-items-center">
        <a href="index.php">
          <h2 class="text-white fw-bold m-0">Bits de Fé</h2>
        </a>
      </div>

    </div>
  </div>
  <!-- FIM DO PRIMEIRO TOPO -->

  <!-- INICIO DO SEGUNDO TOPO -->
  <div class="container-fluid bg-white sticky-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">

        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav">
            <?php include_once("./dados/menus.php") ?>

            <?php		foreach ($menus as $menu):	?>
              <?php if( array_key_exists('submenu', $menu)): ?>
                <div class="nav-item dropdown">
                  <a href="<?= $menu ["link"]?>" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?= $menu["nome"]?></a> 
                  <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">

                    <?php foreach ($menu["submenu"] as $submenu): ?>
                      <a href="<?= $submenu["link"] ?>" class="dropdown-item"><?= $submenu["nome"] ?></a>
                    <?php endforeach ?>
                    
                  </div>
                </div>
              <?php else: ?>
                <a href="<?= $menu["link"] ?>" class="nav-item nav-link active"><?= $menu["nome"]	?> </a>
              <?php endif ?>            
            <?php endforeach ?>
            
            <a href="./mais/temas.php" class="nav-item nav-link">Temas</a>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Igreja</a>
              <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                <a href="palavra.php" class="dropdown-item">A Palavra</a>
                <a href="historiaigreja.php" class="dropdown-item">A história da Igreja</a>
                <a href="ministerio.php" class="dropdown-item">Ministério e Liderança</a>
                <a href="louvoradoracao.php" class="dropdown-item">Louvor e Adoração</a>
                <a href="doutrina.php" class="dropdown-item">Doutrina</a>
                <a href="ensinamentos.php" class="dropdown-item">Ensinamentos</a>
              </div>
            </div>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Estudos</a>
              <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                <a href="bibilia.php" class="dropdown-item">A Bíblia</a>
                <a href="oquee.php" class="dropdown-item">O que é</a>
                <a href="queme.php" class="dropdown-item">Quem foi</a>
                <a href="novotestamento.php" class="dropdown-item">Novo Testamento</a>
                <a href="velhotestamento.php" class="dropdown-item">Antigo Testamento</a>
                <a href="404.php" class="dropdown-item">404 Page</a>
              </div>
            </div>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Família</a>
              <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                <a href="casamento.php" class="dropdown-item">Casamento</a>
                <a href="mocidade.php" class="dropdown-item">Mocidade</a>
                <a href="conselhos.php" class="dropdown-item">Conselhos</a>
                <a href="vidacomdeus.php" class="dropdown-item">Vida com Deus</a>
                <a href="homem.php" class="dropdown-item">O Homem</a>
                <a href="mulher.php" class="dropdown-item">A Mulher</a>
                <a href="filhos.php" class="dropdown-item">Os Filhos</a>
              </div>
            </div>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Mais</a>
              <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                <a href="vidacrista.php" class="dropdown-item">Vida cristã</a>
                <a href="salvacao.php" class="dropdown-item">Salvação</a>
                <a href="curiosidades.php" class="dropdown-item">Curiosidades</a>
                <a href="versos.php" class="dropdown-item">Versículos</a>
                <a href="404.php" class="dropdown-item"></a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>
 
  <!-- FIM DO SEGUNDO TOPO -->

  <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/lib/wow/wow.min.js"></script>
  <script src="./assets/lib/easing/easing.min.js"></script>
  <script src="./assets/lib/waypoints/waypoints.min.js"></script>
  <script src="./assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="./assets/lib/lightbox/js/lightbox.min.js"></script>
  <script src="./assets/lib/lightbox/js/"></script>

  <!-- Template Javascript -->
  <script src="./assets/js/main.js "></script>
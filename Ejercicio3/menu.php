  <body class="bg-light">
    <div class="container">
      <nav class="navbar navbar-expand-lg bg-light sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="<?php echo $nivel; ?>home.php">

            <img src="<?php echo $nivel; ?>img/1.png" alt="" width="50px">
            FCPN
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 menu" data-animation="bonus">
              <li class="nav-item ">

                <div class="text-center col-lg-6  d-flex  justify-content-center align-items-center">
                  <?php echo "Bienvenido: " . $_SESSION['usuario']; ?>
                </div>
              </li>
              <li class="<?php echo ($pag == 'INI') ? 'active nav-item' : 'nav-item' ?>">
                <a class="nav-link" aria-current="page" href="<?php echo $nivel; ?>home.php">INICIO</a>
              </li>
              <li class="<?php echo ($pag == 'I') ? 'active nav-item' : 'nav-item' ?>">
                <a class="nav-link" href="<?php echo $nivel; ?>inf/index.php">INFORMÁTICA</a>
              </li>
              <li class="<?php echo ($pag == 'F') ? 'active nav-item' : 'nav-item' ?>">
                <a class="nav-link" href="<?php echo $nivel; ?>fis/index.php">FÍSICA</a>
              </li>
              <li class="<?php echo ($pag == 'M') ? 'active nav-item' : 'nav-item' ?>">
                <a class="nav-link" href="<?php echo $nivel; ?>mat/index.php">MATEMÁTICA</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="<?php echo $nivel; ?>logout.php"> CERRAR SESIÓN</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
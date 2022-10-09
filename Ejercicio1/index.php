<?php
  $nivel = "./";
  $pag = "INI";
  include './head.php';
  include './menu.php';

?>

    <main>
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#myCarousel"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#myCarousel"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#myCarousel"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./img/1-cr.jpg" alt="" width="100%">

            <div class="container">
              <div class="carousel-caption text-start">
                <h1>INFORMÁTICA</h1>
                <p>
                Excelencia en la Formación Profesional
                </p>
                <p>
                  <a class="btn btn-lg btn-primary" href="<?php echo $nivel;?>inf/index.php">Leer más</a>
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./img/2-CR.jpg" alt="">

            <div class="container">
              <div class="carousel-caption">
                <h1>MATEMÁTICA.</h1>
                <p>
                Excelencia en la Formación Profesional
                </p>
                <p><a class="btn btn-lg btn-primary" href="<?php echo $nivel;?>mat/index.php">Leer más</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./img/3-cr.jpg" alt="">
            <div class="container">
              <div class="carousel-caption text-end">
                <h1>FÍSICA</h1>
                <p>
                Excelencia en la Formación Profesional
                </p>
                <p>
                  <a class="btn btn-lg btn-primary" href="<?php echo $nivel;?>fis/index.php">Leer más</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- Marketing messaging and featurettes
  ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">
        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4 ">
            <img src="./img/2.jpeg" alt="">

            <h2>INFORMÁTICA</h2>
            <p>
            Ser la unidad académica líder a nivel nacional y un referente de alto nivel en la formación de profesionales del área de la Informática.
            </p>
            <p>
              <a class="btn btn-secondary" href="<?php echo $nivel;?>inf/index.php">IR &raquo;</a>
            </p>
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img src="./img/3.png" alt="">

            <h2>MATEMÁTICA</h2>
            <p>
            La Carrera de Matemática, formador de profesionales en Matemática y Matemática Aplicada a nivel Licenciatura y Postgrado.
            </p>
            <p>
              <a class="btn btn-secondary" href="<?php echo $nivel;?>mat/index.php">IR &raquo;</a>
            </p>
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
          <img src="./img/4.jpg" alt="" width="230px">
            <h2>FÍSICA</h2>
            <p>
            La visión de la Carrera es la de constituirse en un centro de excelencia en Física con capacidades plenas.
            </p>
            <p>
              <a class="btn btn-secondary" href="<?php echo $nivel;?>fis/index.php">IR &raquo;</a>
            </p>
          </div>
          <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->

        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider" />

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">
              FACULTAD DE CIENCIAS PURAS Y NATURALES
            </h2>
            
            <h3><span class="text-muted">UNIVERSIDAD MAYOR DE SAN ANDRÉS</span>
            </h3><p class="lead">
            EL objetivo principal es la formación de profesionales de alta calidad, con conocimientos, destrezas y habilidades que hacen posible su inserción creativa en la sociedad, preparados para impulsar y promover la innovación científica y tecnológica.
            </p>
          </div>
          <div class="col-md-5">
            <img src="./img/1.png" alt="" width="500px">
          </div>
        </div>

        
        <hr class="featurette-divider" />

        <!------------------->
      </div>
      <!-- /.container -->

<?php
  include './footer.php';
?>
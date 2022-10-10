<?php
$nivel = "./";
$pag = "INI";
include './head.php';
?>

<body>
    <div class="container py-5 h-100 ">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="card rounded text-black">
                    <div class="row g-0 border border-secondary">

                        <div class="  col-lg-6 text-black">
                            <?php if (isset($_GET['error']) && $_GET['error'] == 'true') : ?>
                                <div class="alert alert-danger" role="alert">
                                    Usuario y contraseña no validos!
                                </div>
                            <?php endif; ?>
                            <div class="card-body  p-md-5 mx-md-4">

                                <div class="text-center">
                                    <img src="./img/1.png" style="width: 160px;" alt="logo"><br><br>
                                    <h4 class="mt-1 mb-5 pb-1">INICIAR SESIÓN</h4>
                                </div>
                                <form action="vlogin.php" method="POST">
                                    <div class="form-outline mb-4">
                                        <input type="text" id="form2Example11" class="form-control" placeholder="Usuario" name="usuario"/>
                                        <label class="form-label visually-hidden" for="form2Example11">Usuario</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="form2Example22" class="form-control" placeholder="Contraseña" name="password"/>
                                        <label class="form-label visually-hidden" for="form2Example22">Password</label>
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button class="btn btn-primary btn-block  mb-3" type="submit">INGRESAR</button>

                                    </div>

                                </form>

                            </div>
                        </div>
                        <div class="text-center col-lg-6  d-flex  justify-content-center align-items-center bg-light bg-gradient">
                            <img src="./img/fac.jpg" alt="" width="100%" height="100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
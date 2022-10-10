

<body class="bg-light vh-auto">
    <div class="container h-100 w-100">
        <div class="row justify-content-center">
            
            <div class="col-sm-6 col-9 mt-5 mb-5 rounded-1  ">
            <h2 class="mt-5">Editar Persona: <?php echo $nombre_completo; ?></h2>
                <form method="POST" action="<?php echo base_url(); ?>index.php/Editar/update/<?php echo $ci; ?>" class="shadow-lg p-5  bg-white">
                    <div class="mb-3">
                        <label for="ci" class="form-label fw-semibold">CI:</label>
                        <input type="text" name="ci" class="form-control" placeholder="81133113" value="<?php echo $ci; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="aPat" class="form-label fw-semibold">Nombre Completo:</label>
                        <input type="text" name="ncompleto" class="form-control" placeholder="Alex Sandoval Rocha" value="<?php echo $nombre_completo; ?>">
                    </div>


                    <div class="mb-3">
                        <label for="ci" class="form-label fw-semibold">Fecha de Nacimiento:</label>
                        <input type="text" name="fnac" class="form-control" placeholder="Año-Mes-Dia 2000-02-31" value="<?php echo $fecha_de_nacimiento; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="aMat" class="form-label fw-semibold">Departamento:</label>
                        <input type="text" name="dep" class="form-control" placeholder="00" value="<?php echo $departamento; ?>">
                    </div>
                    
                
                    <div class="d-grid">
                        <input type="submit" name="guardar" class="btn btn-outline-dark" value="Guardar Cambio">
                    </div>
                </form>
            </div>
        </div>

    </div>



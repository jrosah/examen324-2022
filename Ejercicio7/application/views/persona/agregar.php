


<body class="bg-light vh-auto">
    <div class="container h-100 w-100">
        <div class="row justify-content-center">
            
            <div class="col-sm-6 col-9 mt-5 mb-5 rounded-1  ">
            <h2 class="mt-5">Nueva Persona</h2>
                <form method="POST" action="<?php echo base_url('index.php/Agregar/guardar'); ?>" class="shadow-lg p-5  bg-white">
                    <div class="mb-3">
                        <label for="ci" class="form-label fw-semibold">CI:</label>
                        <input type="text" name="ci" class="form-control" placeholder="81133113" >
                    </div>

                    <div class="mb-3">
                        <label for="aPat" class="form-label fw-semibold">Nombre Completo:</label>
                        <input type="text" name="ncompleto" class="form-control" placeholder="Alex Sandoval Rocha" >
                    </div>


                    <div class="mb-3">
                        <label for="ci" class="form-label fw-semibold">Fecha de Nacimiento:</label>
                        <input type="text" name="fnac" class="form-control" placeholder="2000-01-28">
                    </div>

                    <div class="mb-3">
                        <label for="aMat" class="form-label fw-semibold">Departamento:</label>
                        <input type="text" name="dep" class="form-control" placeholder="00" >
                    </div>
                    
                
                    <div class="d-grid">
                        <input type="submit" name="registrarCliente" class="btn btn-outline-dark" value="Registrar Persona">
                    </div>
                </form>
            </div>
        </div>

    </div>



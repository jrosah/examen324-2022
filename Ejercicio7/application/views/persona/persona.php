<body>
    <div class="container text-center">

        <h1 class="mt-5">Tabla Personas</h1>
        <div class="text-right">
            <a href="<?php echo base_url('index.php/Agregar') ?>" class="btn btn-warning btn-lg">
            Agregar Persona
            </a>
        </div>
        <br>
        <div class="tbl-container bdr table-responsive text-center">
            <!-- <== overflow: hidden applied to parent -->
            <table class="table table-hover table-fixed">
                <thead class="bg-red">
                    <tr>
                        <th scope="col">Ci</th>
                        <th scope="col">Nombre completo</th>
                        <th scope="col">Fecha de Nacimiento</th>
                        <th scope="col">Departamento</th>

                        <th scope="col">Operación</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $key => $value) : ?>
                        <tr>
                            <th scope="row"><?php echo $value->ci; ?></th>
                            <td><?php echo $value->nombre_completo; ?></td>
                            <td><?php echo $value->fecha_de_nacimiento; ?></td>
                            <td><?php echo $value->departamento; ?></td>
                            <td>
                                <a href="<?php echo base_url(); ?>index.php/Editar/ediCI/<?php echo $value->ci; ?>" class="btn btn-primary fs-5">
                                    <ion-icon name="pencil"></ion-icon>
                                </a>
                                <a href="<?php echo base_url(); ?>index.php/Persona/delete/<?php echo $value->ci; ?>" class="btn btn-danger fs-5">
                                    <ion-icon name="trash"></ion-icon>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
   
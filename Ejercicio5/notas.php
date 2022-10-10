<?php
$nivel = "./";
$pag = "NOTAS";
include './head.php';
session_start();
if (!isset($_SESSION['usuario'])) {
    header('location: ./index.php');
}
include './menu.php';
require_once "conexion.inc.php";
?>
<main>

    <div class="py-5" style="background-image: url('./img/mat-2.png')">
        <div class="text-center my-5">
            <h1 class="text-white"> Media de Notas por Departamentos</h1>
        </div>
    </div>

    <div class="container marketing">


        <hr class="featurette-divider" />

        <div class="container">
            <table class="table table-striped ">
                <thead class="thead-dark table-dark">
                    <tr>
                        <th scope="col">Nro. Notas</th>
                        <th scope="col">Departamento</th>
                        <th scope="col">Media Notas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    // La AVG()función devuelve el valor promedio de una columna numérica. 
                    $sql="SELECT COUNT(departamento) nroN, departamento, 
                    (CASE
                        WHEN departamento = '01' THEN AVG(nota_final)
                        WHEN departamento = '02' THEN AVG(nota_final)
                        WHEN departamento = '03' THEN AVG(nota_final)
                        WHEN departamento = '04' THEN AVG(nota_final)
                        WHEN departamento = '05' THEN AVG(nota_final)
                        WHEN departamento = '06' THEN AVG(nota_final)
                        WHEN departamento = '07' THEN AVG(nota_final)
                        WHEN departamento = '08' THEN AVG(nota_final)
                        WHEN departamento = '09' THEN AVG(nota_final)
                        ELSE 'No hay Datos'
                        END
                    ) as medNota
                    FROM PERSONA xp
                    JOIN INSCRIPCION xi ON xp.ci = xi.ciEstudiante
                    GROUP BY departamento
                    ORDER BY departamento";
                    $resultado = mysqli_query($con, $sql);

                    if ($resultado->num_rows < 1) {
                    ?>
                        <tr>
                            <td colspan="3">Sin datos</td>
                        </tr>
                    <?php
                    }
                    while ($filas = mysqli_fetch_assoc($resultado)) {
                    ?>
                        <tr>
                            <td><?php echo $filas['nroN'] ?></td>
                            <td><?php echo $filas['departamento'] ?></td>
                            <td><?php echo $filas['medNota'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>


        <hr class="featurette-divider" />



        <div class="container">
            <table class="table table-striped ">
                <thead class="thead-dark table-dark">
                    <tr>
                        <th scope="col">CHQ</th>
                        <th scope="col">LPZ</th>
                        <th scope="col">CBA</th>
                        <th scope="col">ORU</th>
                        <th scope="col">PT</th>
                        <th scope="col">SCZ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    // La AVG()función devuelve el valor promedio de una columna numérica. 
                    $sql="SELECT  
                    avg(case when departamento ='01' then nota_final end) as CHQ,
                    AVG(case when departamento ='02' then nota_final end) as LPZ,
                    AVG(case when departamento ='03' then nota_final end) as CBA,
                    AVG(case when departamento ='04' then nota_final end) as ORU,
                    avg(case when departamento ='05' then nota_final end) as PT,
                    AVG(case when departamento ='07' then nota_final end) as SCZ
                                    FROM PERSONA xp
                                    JOIN INSCRIPCION xi ON xp.ci = xi.ciEstudiante
                 ";
                    $resultado = mysqli_query($con, $sql);

                    if ($resultado->num_rows < 1) {
                    ?>
                        <tr>
                            <td colspan="3">Sin datos</td>
                        </tr>
                    <?php
                    }
                    while ($filas = mysqli_fetch_assoc($resultado)) {
                    ?>
                        <tr>
                            <td><?php echo $filas['CHQ'] ?></td>
                            <td><?php echo $filas['LPZ'] ?></td>
                            <td><?php echo $filas['CBA'] ?></td>
                            <td><?php echo $filas['ORU'] ?></td>
                            <td><?php echo $filas['PT'] ?></td>
                            <td><?php echo $filas['SCZ'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>


        <hr class="featurette-divider" />
        <!------------------->
    </div>
    <!-- /.container -->

    <?php
    include './footer.php';
    ?>
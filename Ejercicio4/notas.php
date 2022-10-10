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
                    $sql = "SELECT COUNT(departamento) nroN, departamento, AVG(nota_final) medNota
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
                    <?php

                    // La AVG()función devuelve el valor promedio de una columna numérica. 
                    $sql = "SELECT departamento, AVG(nota_final) medNota
                            FROM PERSONA xp
                            JOIN INSCRIPCION xi ON xp.ci = xi.ciEstudiante
                            GROUP BY departamento
                            ORDER BY departamento";
                    $resultado = mysqli_query($con, $sql);
                    $resultado2 = mysqli_query($con, $sql);
                    $dep = ["01" => 'CHQ', "02" => 'LPZ', "03" => 'CBA', "04" => 'ORU', "05" => 'PT', "06" => 'TJ', "07" => 'SCZ', "08" => 'BE', "09" => 'PND']; 
                    ?>
                    <tr>
                    <?php
                        while($fila=mysqli_fetch_array($resultado)) {
                            echo "<td>".$dep[$fila['departamento']]."</td>";
                        }
                    ?>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <?php
                        while($fila=mysqli_fetch_array($resultado2)) {
                            echo "<td>".$fila['medNota']."</td>";
                        }
                    ?>
                    </tr>
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
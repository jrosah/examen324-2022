<?php
	include "conexion.php";

	$pdo=new Conexion();

    switch($_SERVER['REQUEST_METHOD']){
        case 'GET':
            if(isset($_GET['ci']))
            {
                $sqls = "SELECT * FROM persona WHERE ci=:ci";
                $sql = $pdo->prepare($sqls);
                $sql->bindValue(':ci', $_GET['ci']);
                $sql->execute();
                $sql->setFetchMode(PDO::FETCH_ASSOC);
                header("HTTP/1.1 200 hay datos");
                echo json_encode($sql->fetchAll());
                exit;
            }
            else
            {
                $sqls="SELECT * FROM PERSONA";
                $sql = $pdo->prepare($sqls);
                $sql->execute();
                $sql->setFetchMode(PDO::FETCH_ASSOC);
                header("HTTP/1.1 200 hay datos");
                echo json_encode($sql->fetchAll());
                exit;	
            }
            break;
        case 'POST':
            $sql =  $pdo->prepare("INSERT INTO PERSONA (ci, nombre_completo, fecha_de_nacimiento, departamento) VALUES(:ci, :nombre_completo, :fecha_de_nacimiento, :departamento)");
            $sql->bindValue(':ci', $_POST['ci']);
            $sql->bindValue(':nombre_completo', $_POST['nombre_completo']);
            $sql->bindValue(':fecha_de_nacimiento', $_POST['fecha_de_nacimiento']);
            $sql->bindValue(':departamento', $_POST['departamento']);
            if ($sql -> execute()) {
                header("HTTP/1.1 200 INSERT");
            }else{
                 echo $sql->errorInfo()[2];
            }   
            exit;
        break;
        case 'PUT':
            $sql = $pdo->prepare("UPDATE persona set ci=:ci, nombre_completo=:nombre_completo, 
            fecha_de_nacimiento=:fecha_de_nacimiento, departamento=:departamento WHERE ci=:id");
            $sql->bindValue(':ci', $_GET['ci']);
            $sql->bindValue(':nombre_completo', $_GET['nombre_completo']);
            $sql->bindValue(':fecha_de_nacimiento', $_GET['fecha_de_nacimiento']);
            $sql->bindValue(':departamento', $_GET['departamento']);
            $sql->bindValue(':id', $_GET['id']);
            $sql->execute();
            header("HTTP/1.1 200 UPDATE");
            exit;
        break;

        case 'DELETE':
            $sql = $pdo->prepare("DELETE FROM persona WHERE ci=:ci");
            $sql->bindValue(':ci', $_GET['ci']);
            $sql->execute();
            header("HTTP/1.1 200 DELETE");
            exit;
        break;
    }

?>
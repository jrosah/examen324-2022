<?php

if(!empty($_POST['usuario']) && !empty($_POST['password']))
	{
		require_once "conexion.inc.php";

		$usuario = $_POST['usuario'];
		$password = $_POST['password'];
		
		$query = mysqli_query($con, "SELECT * FROM ACCESO WHERE usuario = '$usuario' and password = '$password'");
		$user = mysqli_num_rows($query);
		
		if($user > 0)
		{
			$resultado = mysqli_fetch_array($query);
			session_start();
			$_SESSION['estaActivo'] = true;
			$_SESSION['usuario'] = $resultado['usuario'];
			$_SESSION['ci'] = $resultado['ci'];
			
			header('location: home.php');
		}
        else{
            header('location: index.php?error=true');
        }
	}

else{
    header('location: index.php?error=true');
}
?>
<?php 
     session_start();
	include('../../conexion/conexion.php');

	$cuenta=$_POST['cuenta'];
	$contra=$_POST['pass'];

	
	
	


	if ( empty($cuenta) || empty($contra)) {
		header("location: ../../index.php?error=Se requiere de Usuario y Contraseña");
	}

	else{
		$consulta="SELECT * FROM usuarios where usuario='$cuenta' and password='$contra' and estado=1";
		$resultado=mysqli_query($mysqli,$consulta);

		$filas=mysqli_num_rows($resultado);

		if ($filas>0) {
			$_SESSION['username']=$cuenta;
   			
			header("location: ../../home.php");
		}
		else{
			header("location: ../../index.php?error=Usuario o contraseña incorrecta");
		}
	}

	mysqli_free_result($resultado);
	mysqli_close($mysqli);




 ?>
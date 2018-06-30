<?php 

$error = $_GET['error'];

	if ($error == 1){

		echo "

				<br>
				<h3 style='text-align: center;'>
				<span style='color: red;'>
				ERROR 1
				</span>
				: Las contraseñas no coinciden, prueba registrarte nuevamente!
				</h3>
				</br>
		";
	}

	elseif ($error == 2) {

		echo "

				<br>
				<h3 style='text-align: center;'>
				<span style='color: red;'>
				ERROR 2
				</span>
				: Los datos  de acceso no son correctos, intente nuevamente!
				</h3>
				</br>
		";
	}


	?>
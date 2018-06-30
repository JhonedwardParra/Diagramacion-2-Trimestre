<fieldset>
	<legend>Login</legend>
	<form method="POST" name="" action="<?php $_SERVER['PHP_SELF']; ?>">
		<p>
			<input type="email" name="correo_log" placeholder="correo.." required>
		</p>
		<p>
			<input type="password" name="pass_log" placeholder="Contraseña.." required>
		</p>
		<p>
			<input type="hidden" name="nombre" value="<?php echo $nombre;?>">
			<input type="hidden" name="correo" value="<?php echo $correo;?>">
			<input type="hidden" name="password" value="<?php echo $password;?>">

			<input type="submit" name="btn-login" value="Ingresar..">
			<input type="reset" value="cancelar..">		
		</p>
	</form>
</fieldset>
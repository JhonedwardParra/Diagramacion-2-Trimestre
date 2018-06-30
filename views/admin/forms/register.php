<fieldset>
	<legend>Formulario de Registro</legend>
		<form name="register" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<p>
				<input type="text" name="nombre" placeholder="Nombre Completo..." requerid>
			</p>
			<p>
				<input type="email" name="correo" placeholder="Correo Electronico..." required>
			</p>
			<p>
				<input type="password" name="password" placeholder="Contraseña.." required>
			</p>
			<p>
				<input type="password" name="conf_pass" placeholder="Confirmar Contraseña.." required>
			</p>
			<p>
				<input type="submit" name="btn-register" value="Registrar usuario">
				<input type="reset" value="Limpiar datos">	
			</p>
		</form>
</fieldset>
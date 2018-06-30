<?php include('../templates/head.php'); ?>

	<div class="containercontac">
		<h1>Contactanos</h1>
		<form>
			<p>
				<input type="radio" name="servicio" value="cliente"
				checked class="radio">Cliente
				<input type="radio" name="servicio" value="particular"
				class="radio">Particular
			</p>
			<p>
				<label>Motivo del mensaje?</label>
			</p>
		<p>	
			<select name="Motivo">
			  <option>Queja</option>
			  <option>Sugerencias</option>
			  <option>Soporte tecnico</option>
			  <option>Nuevo servicio</option>
			  <option selected="selected">
			  --Seleccionar--</option>
		</select>	
			</p> 
			<p>
				<label>Dia</label>
		<select name="Día">
			  <option>1</option>
			  <option>2</option>
			  <option>3</option>
			  <option>4</option>
			  <option>5</option>
			  <option>6</option>
			  <option>7</option>
			  <option>8</option>
			  <option>9</option>
			  <option>10</option>
			  <option>11</option>
			  <option>12</option>
			  <option>13</option>
			  <option>14</option>
			  <option>15</option>
			  <option>16</option>
			  <option>18</option>
			  <option>19</option>
			  <option>20</option>
			  <option>21</option>
			  <option>22</option>
			  <option>23</option>
			  <option>24</option>
			  <option>25</option>
			  <option>26</option>
			  <option>27</option>
			  <option>28</option>
			  <option>29</option>
			  <option>30</option>
			  <option selected="selected">--seleccionar--</option>
		</select>
				<label>Mes</label>
		<select name="Mes">
			  <option>Enero</option>
			  <option>Febrero</option>
			  <option>Marzo</option>
			  <option>Abril</option>
			  <option>Mayo</option>
			  <option>Junio</option>
			  <option>Julio</option>
			  <option>Agosto</option>
			  <option>Septiembre</option>
			  <option>Octubre</option>
			  <option>Noviembre</option>
			  <option>Diciembre</option>
			  <option selected="selected">--seleccionar--</option>
		</select>
			</p>	
				<p>	
				<div class="label">
					<label>Nombre</label>
				</div>
			<input type="tex" name="Nombre"/>
			</p>
			<p>
				<div class="label">
					<label>Email</label>
				</div>	
			<input type="tex" name="Email"/>
			</p>
			<p>
				<label>Deja tu comentario</label>
			</p>
			<p>
				<textarea name="comentario"
					cols="100" rows="20">
				</textarea>
			</p>
			<p>
				<input type="submit"  value="Enviar Mensaje"/>
				<input type="reset" value="Limpiar datos
				"/>
			</p>
		</form>

		</div>
<?php include('../templates/foot.php'); ?>
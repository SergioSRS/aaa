<html>
	<head>
	</head>
	<body>
		<?php
		if(isset($_GET["repetido"]) and $_GET["repetido"] === "repetido"){
		?>
		<p>
			No añadas nombres de retos repetidos.
		</p>
		<?php
		}
		?>
		<?php
		if(isset($_GET["ajena"]) and $_GET["ajena"] === "ajena"){
		?>
		<p>
			No existen categorias o profesores asociados a este id
		</p>
		<?php
		}
		?>
		<?php
		if(isset($_GET["valido"]) and $_GET["valido"] === "valido"){
		?>
		<p>
			Todo salio correctamente
		</p>
		<?php
		}
		?>
	
	
		<form method=post action="../controlador/Creto.php">
			<label>Nombre
				<input type="text" name="nombre">
			</label><br>
			<label>Dirigido
				<input name="dirigido" type="text">
			</label><br>
			<label>Descripcion
				<input name="descripcion" type="text">
			</label><br>
			<label>fechaFinInscripcion
				<input name="fechaFinInscripcion" type="datetime-local">
			</label><br>
			<label>fechaInicioInscripcion
				<input name="fechaInicioInscripcion" type="datetime-local">
			</label><br>
			<label>fechaFinReto
				<input name="fechaFinReto" type="datetime-local">
			</label><br>
			<label>fechaInicioReto
				<input name="fechaInicioReto" type="datetime-local">
			</label><br>
			<label>fechaPublicacion
				<input name="fechaPublicacion" type="datetime-local">
			</label><br>
			<p>publicado
				<label>Si
					<input name="publicado" type="radio" >
				</label>
				<label>No
					<input checked name="publicado" type="radio" >
				</label>
			</p>
			<label>idProfesor
				<input name="idProfesor" type="text">
			</label><br>
			<label>idCategoria
				<input name="idCategoria" type="text">
			</label><br>
			<input type="submit" value="alta">
		</form>
	</body>
</html>
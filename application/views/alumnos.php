<html>
	<body>
		<meta charset="utf-8">
		<?php
		if($alumnos) {
		foreach ($alumnos->result() as $alumno) { ?>
		<ul>
			
			<li><?= $alumno->ncontrol; ?></li>
			<li><?= $alumno->nombre; ?></li>
			<li><?= $alumno->correo; ?></li>
		</ul>
		<?php } 
	}else{
		echo "<p> Error en la aplicación</p>";
	}
	?>
</body>
</html>

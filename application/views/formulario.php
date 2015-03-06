
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<title>registro</title>
</head>
<boby>



<?= form_open("/itch/recibirdatos") ?> 



<?php
	$ncontrol = array(
		'name' => 'ncontrol',
		'placeholder' => 'Escriba su Numero de Control'
	);
	$nombre = array(
		'name' => 'nombre',
		'placeholder' => 'Escriba su Nombre'
	);
	$correo = array(
		'name' => 'correo',
		'placeholder' => 'Escriba su Correo'
	); 
?>


 

<?= form_label ('Número de control: ', 'ncontrol') ?>
<?= form_input($ncontrol) ?>


<br>


<?= form_label ('Nombre: ', 'nombre') ?>
<?= form_input($nombre) ?>


<br>


<?= form_label ('Correo: ', 'Correo') ?>
<?= form_input($correo) ?>


<br>

<br>
<?= form_submit('','Alta de Alumno') ?>


<?= form_close() ?>


</body>


</html>


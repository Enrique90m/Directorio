<?php 

/**
 * Imprimir datos de contacto según permisos y condiciones establecidas
 *	
 * Varible:
 *	$contacto
 *
 */

?>
<div class='contacto'>
	<?php if(isset($contacto->nombre_completo)): ?>
		<h3>Nombre Completo: <strong> <?php print $contacto->nombre_completo; ?> </strong> </h3>
	<?php endif; ?>

	<?php if(isset($contacto->nombre)): ?>
		<h3>Nombre: <strong> <?php print $contacto->nombre; ?> </strong> </h3>
	<?php endif; ?>

	<?php if(isset($contacto->apellido_paterno)): ?>
		<h3>Apellido Paterno: <strong> <?php print $contacto->apellido_paterno; ?> </strong> </h3>
	<?php endif; ?>

	<?php if(isset($contacto->apellido_materno)): ?>
		<h3>Apellido Materno: <strong> <?php print $contacto->apellido_materno; ?> </strong> </h3>
	<?php endif; ?>

	<?php if(isset($contacto->departamento)): ?>
		<h3>Departamento: <strong> <?php print $contacto->departamento; ?> </strong> </h3>
	<?php endif; ?>

	<?php if(isset($contacto->telefono_oficina)): ?>
		<h3>Telefono Oficina: <strong> <?php print $contacto->telefono_oficina; ?> </strong> </h3>
	<?php endif; ?>

	<?php if(isset($contacto->oficina_extension)): ?>
		<h3>Extencion: <strong> <?php print $contacto->oficina_extension; ?> </strong> </h3>
	<?php endif; ?>

	<?php if(isset($contacto->email_trabajo)): ?>
		<h3>Email Trabajo: <strong> <?php print $contacto->email_trabajo; ?> </strong> </h3>
	<?php endif; ?>

	<?php if(isset($contacto->email_personal)): ?>
		<h3>Email Personal: <strong> <?php print $contacto->email_personal; ?> </strong> </h3>
	<?php endif; ?>

	<?php if(isset($contacto->telefono_celular)): ?>
		<h3>Celular: <strong> <?php print $contacto->telefono_celular; ?> </strong> </h3>
	<?php endif; ?>

	<?php if(isset($contacto->telefono_casa)): ?>
		<h3>Telefono Casa: <strong> <?php print $contacto->telefono_casa; ?> </strong> </h3>
	<?php endif; ?>

</div>



<table>
	<thead>
		<tr>
			<td>nombre</td>
			<td>Apellido Paterno</td>
			<td>Apellido Materno</td>
			<td>Departamento</td>
			<td></td>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($contactos as $contacto): ?>
			<tr>
				<td><?php print $contacto->nombre; ?></td>
				<td><?php print $contacto->apellido_paterno; ?></td>
				<td><?php print $contacto->apellido_materno; ?></td>
				<td><?php print $contacto->departamento ?></td>
				<td><?php print l(t("Ver"), "contactos/ver/" . $contacto->cid); ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
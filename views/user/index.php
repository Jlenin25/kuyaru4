<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	Página de CRUD Usuarios
	<br>
	<a href="create">Nuevo</a>
	<table>
		<thead>
			<tr>
				<th>#</th>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Nombre Usuario</th>
				<th>Correo</th>
				<th>Contraseña</th>
				<th>DNI</th>
				<th>Celular</th>
				<th>Rol</th>
				<th>Foto</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach($set as $user) { ?>
			<tr>
				<td><?= $user['id']; ?></td>
				<td><?= $user['name']; ?></td>
				<td><?= $user['lastname']; ?></td>
				<td><?= $user['user_name']; ?></td>
				<td><?= $user['email']; ?></td>
				<td><?= $user['password']; ?></td>
				<td><?= $user['document']; ?></td>
				<td><?= $user['phone']; ?></td>
				<td><?= $user['rol']; ?></td>
				<td><?= $user['photo']; ?></td>
				<td>
					<a href="edit/<?= $user['id']; ?>">Editar</a>
					<a href="delete/<?= $user['id']; ?>">Eliminar</a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		<input type="text" value="<?= $data['id']; ?>" name="id" readonly>
		<br>
		<input type="text" value="<?= $data['name']; ?>" name="name">
		<br>
		<input type="text" value="<?= $data['lastname']; ?>" name="lastname">
		<br>
		<input type="text" value="<?= $data['user_name']; ?>" name="user_name">
		<br>
		<input type="text" value="<?= $data['email']; ?>" name="email">
		<br>
		<input type="text" value="<?= $data['password']; ?>" name="password">
		<br>
		<input type="text" value="<?= $data['document']; ?>" name="document">
		<br>
		<input type="text" value="<?= $data['phone']; ?>" name="phone">
		<br>
		<input type="text" value="<?= $data['rol']; ?>" name="rol">
		<br>
		<input type="text" value="<?= $data['photo']; ?>" name="photo">
		<br>
		<button>Agregar</button>
	</form>
</body>
</html>
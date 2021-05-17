<?php
	session_start();
	include 'conexion.php';

	$sql="SELECT *FROM clientes ORDER BY id DESC";
	$resultado=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<link href="/dashboard/stylesheets/style.css" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>
<h1>Listado</h1>
<a href='login/cerrar_sesion.php'><div class="btn btn-danger">Cerrar sesión</div></a>
	<div class="container">
		<div class="barra__buscador">
			<form action="" class="formulario" method="post">
				<a href="insert.php" class="btn btn-primary mb-3">Nuevo</a>
			</form>
		</div>
		<table class="table table-striped text-center">
			<tr class="head">
				<td>Id</td>
				<td>Nombre</td>
				<td>Apellidos</td>
				<td>Teléfono</td>
				<td>Ciudad</td>
				<td>Correo</td>
				<td>U. Organizativa</td>
				<td>Rol</td>
				<td colspan="2">Acción</td>
			</tr>
			<?php while($fila = mysqli_fetch_assoc($resultado)) { ?>
				<tr >
					<td><?php echo $fila['id']; ?></td>
					<td><?php echo $fila['nombre']; ?></td>
					<td><?php echo $fila['apellidos']; ?></td>
					<td><?php echo $fila['telefono']; ?></td>
					<td><?php echo $fila['ciudad']; ?></td>
					<td><?php echo $fila['correo']; ?></td>
					<td><?php echo $fila['U_O']; ?></td>
					<td><?php echo $fila['rol']; ?></td>
					<td><a href="actualizar.php?id=<?php echo $fila['id']; ?>"  class="btn btn-warning" >Editar</a></td>
					<td><a href="delete.php?id=<?php echo $fila['id']; ?>" class="btn btn-danger">Eliminar</a></td>
				</tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>
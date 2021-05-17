<?php 
	/* SELECCIONAR LOS DATOS A MOSTRAR*/
    include 'conexion.php';
	$id=$_GET['id'];
	$sql="SELECT * from clientes where id = '".$id."'";
	$resultado = mysqli_query($con, $sql);
		while($row=mysqli_fetch_assoc($resultado)) {
	?>

<?php
	/*ACTUALIZAR LOS DATOS*/
	if(isset($_POST['actualizar'])){ 
		$nombre=$_POST['nombre'];
		$correo=$_POST['correo'];
		$telefono=$_POST['telefono'];
		$U_O=$_POST['U_O'];
		$rol=$_POST['rol'];
		if ($nombre!=null || $correo!=null) {
			$sql2="UPDATE clientes SET nombre='".$nombre."', correo='".$correo."', telefono='".$telefono."', U_O='".$U_O."' WHERE id='".$id."'" ;
			mysqli_query($con, $sql2);
			if ($nombre=1){
				header('location:index.php');
			}
		}
	}
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Modificar</title>
		<link href="/dashboard/stylesheets/style.css" rel="stylesheet" type="text/css"/>
		<!-- Bootstrap -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	</head>
	<body>
		<h1>Actualizar Datos</h1>
		<div class="container">
			<form class="formulario" method="post"><br>
				<input type="text" name="id" placeholder="Ingresar ID" value="<?php echo $row['id'] ?>" class="form-control mb-3">
				<input type="text" name="nombre" placeholder="Ingrese su Nombre" value="<?php echo $row['nombre'] ?>" class="form-control mb-3">
				<input type="text" name="correo" placeholder="Ingrese su Email" value="<?php echo $row['correo'] ?>" class="form-control mb-3">
				<input type="text" name="telefono" placeholder="Ingrese su telefono" value="<?php echo $row['telefono'] ?>" class="form-control mb-3">
				<div class="form-group">
					<select name="U_O" placeholder="Unidades Organizativas:" value="<?php echo $row['U_O'] ?>" class="form-control mb-3" >
						<option>Administracion</option>
						<option>Recursos humanos</option>
						<option>Auditoria</option>
						<option>Legal</option>
						<option>Operacion</option>
						<option>Desarrollador</option>
					</select>
				</div>
				<div class="form-group">
					<select name="rol" placeholder="Rol:" value="<?php echo $row['U_O'] ?>" class="form-control mb-3" >
						<option>Coordinador</option>
						<option>Supervisor</option>
						<option>Colaborador</option>
						<option>Tecnico</option>
						<option>Profesional</option>
						<option>Analista</option>
					</select>
				</div>
				<a href="index.php" class="btn btn-danger">Cancelar</a>
				<input type="submit" name="actualizar" class="btn btn-info" value="Actualizar">
			</form>
			<?php } ?>
		</div>
	</body>
</html>
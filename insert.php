<?php 
	include 'conexion.php';
	if(isset($_POST['guardar'])){
		$nombre=$_POST['nombre'];
		$apellidos=$_POST['apellidos'];
		$telefono=$_POST['telefono'];
		$ciudad=$_POST['ciudad'];
		$correo=$_POST['correo'];
		$U_O=$_POST['U_O'];
		$rol=$_POST['rol'];

		if($nombre!=null || $apellidos!=null || $telefono!=null ||
			$ciudad!=null || $correo!=null || $U_O!=null || $rol!=null){

			$sql="INSERT INTO clientes(nombre, apellidos, telefono, ciudad, correo, U_O, rol)
			VALUES('".$nombre."','".$apellidos."','".$telefono."','".$ciudad."','".$correo."','".$U_O."','".$rol."')";
				mysqli_query($con,$sql);
				if($nombre=1){
				    header('Location:index.php');
				}
		}else{
			echo "Alerta: Los campos estan vacios";
			return false;
	    }
	 }
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Nuevo Cliente</title>
	<link href="/dashboard/stylesheets/style.css" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>

<body>
<h1>Nuevo empleado</h1>
	<div class="container mt-3">
		<form method="post">

			<div class="form-group">
				<input type="text" name="nombre" placeholder="Nombre" class="form-control">
				<input type="text" name="apellidos" placeholder="Apellidos" class="form-control mt-2">
			</div>
			<div class="form-group">
				<input type="text" name="telefono" placeholder="Teléfono" class="form-control mt-2">
				<input type="text" name="ciudad" placeholder="Ciudad" class="form-control mt-2">
			</div>
			<div class="form-group">
				<input type="text" name="correo" placeholder="Correo electrónico" class="form-control mt-2">
			</div>
			<div class="form-group">
				<select name="U_O" placeholder="Unidades Organizativas:" class="form-control mt-2" >
					<option disabled selected>Seleccionar una unidad organizativa</option>
					<option>Administracion</option>
					<option>Recursos humanos</option>
					<option>Auditoria</option>
					<option>Legal</option>
					<option>Operacion</option>
					<option>Desarrollador</option>
				</select>
			</div>
			<div class="form-group">
				<select name="rol" placeholder="Rol:" class="form-control mt-2" >
					<option disabled selected>Seleccionar un rol</option>
					<option>Coordinador</option>
					<option>Supervisor</option>
					<option>Colaborador</option>
					<option>Tecnico</option>
					<option>Profesional</option>
					<option>Analista</option>
				</select>
			</div>
			<div class="mt-3">
				<a href="index.php" class="btn btn-danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn-primary">
			</div>
		</form>
	</div>
</body>
</html>
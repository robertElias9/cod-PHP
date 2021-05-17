<?php 
	include 'conexion.php';
	if(isset($_POST['actualizar'])){ 
		$id=$_GET['id'];
		$nombre=$_POST['nombre'];
		$correo=$_POST['correo'];
		$U_O=$_POST['U_O'];
		$rol=$_POST['rol'];

		if($nombre!=null || $correo!=null){

			$sql="UPDATE clientes SET nombre='$nombre', correo='$correo', U_O='$U_O' WHERE id='$id'" ;
			mysqli_query($con,$sql);

		}else{
			echo "Por favor, complete los campos";
		}
		if ($nombre=1){
			header('location:index.php');
		}
	}

?>

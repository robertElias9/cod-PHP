<?php
  require '../conexion.php';

  $email = $_POST['email'];
  $password = $_POST['password'];

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $query = "INSERT INTO usuarios (email, password) VALUES ('$email', '$password')";
    $resultado = mysqli_query($con, $query);
    header("location: login.php");
  }
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrate</title>
    <link href="../stylesheets/style.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </head>

  <body>
    <h1 class="text-center">Registrate</h1>

    <form action="signup.php" method="POST">
    <div class="container centrado">
        <div class="card mt-5" style="width: 50rem; display: flex; margin: auto;">
            <div class="card-body">
                <input name="email" class="form-control" type="text" placeholder="Ingrese su correo electrónico"><br>
                <input name="password" class="form-control" type="password" placeholder="Ingrese su contraseña"><br>
                <div class="centrado">
                  <input type="submit" value="Submit" class="btn btn-primary centrado" ><br>
                </div>
                <span class="text-center">¿Ya tienes una cuenta? <a href="login.php" class="text-center"> Inicia sesión</a></span>
            </div>
        </div>
      </div>
    </form>
  </body>
</html>
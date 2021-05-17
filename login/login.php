<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="../stylesheets/style.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </head>
  <body>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Iniciar sesión</h1>

    <form action="loguear.php" method="POST">
    <div class="container centrado">
        <div class="card mt-4" style="width: 30rem;">
            <div class="card-body">
                <input name="email" type="text" placeholder="Ingresa tu correo electrónico/usuario" class="form-control"><br>
                <input name="password" type="password" placeholder="Ingresa tu contraseña" class="form-control"><br>
                <div class="centrado">
                  <input type="submit" value="Submit" class="btn btn-primary">
                  </div><br>
                  <div class="centrado">
                    <span>o <a href="signup.php">Registrate</a></span>
                  </div>
            </div>
        </div>
    </div>

    </form>
  </body>
</html>
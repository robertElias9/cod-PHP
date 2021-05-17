<?php 
    session_start();
    include '../conexion.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($con, "SELECT * FROM usuarios WHERE email = '$email' and password = '$password'");
    if ($resultado = mysqli_fetch_array($query)){
        $_SESSION['email'] = $email;
        header("location: ../index.php");
    }else{
        echo '<script language="javascript">alert("Datos incorrectos"); window.location.href="login.php";</script>';
    }
?>
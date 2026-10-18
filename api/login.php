<?php
require_once('../libs/conexion.php');
session_start();

$mensaje = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $correoOCedula = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT id_usuario, contraseña FROM usuario WHERE cedula = '$correoOCedula' OR correo = '$correoOCedula'";

    $resultado = mysqli_query($conn, $query);

    $filasEncontradas = mysqli_num_rows($resultado);

    if($filasEncontradas > 0) {

        $usuario = mysqli_fetch_assoc($resultado);
        $passwordHash = hash("sha256", $password);

        if($usuario['contraseña'] === $passwordHash) 
        {
            $_SESSION['id_usuario'] = $usuario['id_usuario'];
            header("Location: ../Pages/tienda.php");
            exit();
        } else {
            echo "<div class='alert alert-danger'>Correo o contraseña incorrectos</div>";
        }

    } else {
        echo "<div class='alert alert-danger'>Correo o contraseña incorrectos</div>";
    }
}
?>
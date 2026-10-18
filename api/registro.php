<?php
require_once('../libs/conexion.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recibir y limpiar datos del formulario
    $nombre = trim($_POST['nombre']);$apellidos = trim($_POST['apellidos']);$nombreCompleto = $nombre . ' ' .$apellidos;
    
    $correoUsuario = trim($_POST['email']);
    $cedulaUsuario = trim($_POST['cedula']);
    $passUsuario =$_POST['password'];

    // Validar si el correo o cédula ya existen en la base de datos
    $checkQuery = "SELECT id_usuario FROM usuario WHERE correo = '$correoUsuario' OR cedula = '$cedulaUsuario'";
    $checkResult = mysqli_query($conn,$checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        echo "<script>
                alert('El correo o la cédula ya se encuentran registrados.');
                window.location.href = '../Pages/login.php';
              </script>";
        exit();
    }

    // Hashear la contraseña con SHA256 (igual que en tu login)
    $passwordHash = hash("sha256", $passUsuario);

    // Insertar en la tabla usuario
    $query = "INSERT INTO `usuario` (`nombre`, `cedula`, `contraseña`, `correo`) 
              VALUES ('$nombreCompleto', '$cedulaUsuario', '$passwordHash', '$correoUsuario')";

    $resultado = mysqli_query($conn,$query);

    if ($resultado) {
        // Iniciar sesión automáticamente e ir a la tienda
        $_SESSION['id_usuario'] = mysqli_insert_id($conn);
        echo "<script>
                alert('¡Cuenta creada con éxito!');
                window.location.href = '../Pages/tienda.php';
              </script>";
        exit();
    } else {
        echo "<script>
                alert('Error al registrar: " . mysqli_error($conn) . "');
                window.location.href = '../Pages/login.php';
              </script>";
        exit();
    }
}
?>
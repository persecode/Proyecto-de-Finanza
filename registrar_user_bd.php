<?php
require_once 'conexion_bd.php';
$user_bd = $_POST['nombre'];
$password_bd = $_POST['contraseña'];


$insertar_login = "INSERT INTO acceso (usuario,clave) VALUES ('$user_bd','$password_bd')"; 
$verificar_usuario = mysqli_query($conexion,"SELECT * FROM acceso WHERE usuario ='$user_bd'");


if (mysqli_num_rows($verificar_usuario)> 0){

echo '<script>
alert("El usuario ya existe");
window.history.go(-1);
</script>';
exit;

}
$resultado = mysqli_query($conexion,$insertar_login);
if (!$resultado){
    echo 'Error al registrarse';
} else {
    echo '<script>
alert(" Usted se registro con exito");
window.history.go(-1);
</script>';
}

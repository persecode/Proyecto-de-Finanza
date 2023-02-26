<?php
require_once 'conexion_bd.php';
$user=$_POST['user'];
$password=$_POST['password'];


$consulta="SELECT * FROM acceso WHERE usuario = '$user' and clave = '$password'";

$resultado = mysqli_query($conexion,$consulta);

$filas = mysqli_num_rows($resultado);

if ($filas >0){
    header("location:menu.html");
}
else {
   
    echo '<script>
alert("usuario o contraseña incorrecto");
window.history.go(-1);
</script>';
exit;

}
mysqli_free_result($resultado);
musqli_close($conexion);
?>
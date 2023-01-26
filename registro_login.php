<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>
    <h1>Crear Usuario</h1>
</head>
<body>
<h2> <a href="menu.html">Menu principal</a> </h2><br><br>
    <form action="registrar_user_bd.php" method="post">
        <label for="">nombre</label>
        <input type="text" name="nombre" id="" required><br>
        <label for="">Contraseña</label>
        <input type="password" name="contraseña" id="" required><br><br>
        <input type="submit" value="Registrar">



    </form>
</body>
</html>
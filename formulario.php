<?php
require_once 'conexion_bd.php';
$cliente = $_POST['cliente'];
$fecha = $_POST['fecha'];
$vendedor = $_POST['vendedor'];
$razon = $_POST['razon'];
$costoD = $_POST['costoD'];
$costoT = $_POST['costoT'];
$marca = $_POST['marca'];
$producto = $_POST['producto'];
$descripcion = $_POST['descripcion'];
$modelo = $_POST['modelo'];
$categoria = $_POST['categoria'];
$cantidad = $_POST['cantidad'];
$costo= $_POST['costo'];
$subtotal = $_POST['subtotal'];


$form = "INSERT INTO formulario (cliente,fecha,vendedor,razon,delivery,transporte,marca,producto,descripcion,modelo,categoria,cantidad,costo,subtotal) VALUES ('$cliente','$fecha','$vendedor','$razon','$costoD','$costoT','$marca','$producto','$descripcion','$modelo','$categoria','$cantidad','$costo','$subtotal')";
$formulario = mysqli_query($conexion,$form);



?>
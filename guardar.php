<?php

$conexion = mysqli_connect(
    "localhost",
    "root",
    "",
    "peluqueria_db"
);

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$whatsapp = $_POST['whatsapp'];

$sql = "INSERT INTO reservas(nombre, correo, whatsapp)
VALUES('$nombre', '$correo', '$whatsapp')";

mysqli_query($conexion, $sql);

echo "Reserva guardada correctamente";

?>
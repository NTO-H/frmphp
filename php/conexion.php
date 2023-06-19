<?php
include('./vista/respuesta.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar si se enviaron los campos de usuario y contraseña
    if (isset($_POST['usuario']) && isset($_POST['password'])) {
        // Obtener los valores de usuario y contraseña del formulario
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];

    }
}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/enviado.css">
    <title>Respuesta...</title>
    <!-- <?php 
    include('../php/conexion.php');
    ?> -->
</head>

<body>
 <form action="php/conexion.php" method="post">
 
    <h1>Respuesta</h1>
    <h1>hola:<?php echo ($usuario) ?></h1>
    <h1>tu logeo es:<?php echo ($password) ?></h1>
</form>
</body>

</html>
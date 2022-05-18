<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herraientas</title>
    <?php
    include("clase_herramientas.php");
    ?>
</head>
<body>
    <h1>Herraientas</h1>
    <?php
    $caja_herramientas= new Herraientas;
    $caja_herramientas->nombre= "Caja de herramientas";
    $caja_herramientas->precio= 60;
    $caja_herramientas->descripcion= "Caja completa de herramientas, 50 piezas calidad."
    echo "<img src='$caja_herramientas->imagen' alt='$caja_herramientas->nombre' width='200' align='left'>"
    echo "<p>Producto: "
    ?>
</body>
</html>
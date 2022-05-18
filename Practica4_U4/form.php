<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Felicidades</title>
</head>
<body>
    <?php 
        $nombre=$_POST['nombre'];
        $correo=$_POST['email'];
        $edad=$_POST['edad'];
        $fecha=$_POST['fecha'];
        $contenido=$_POST['mensaje'];
        $para="tecrey_aulas@hotmail.com";
        $asunto="Mensaje Nuevo";

        $mensaje="
        Nombre del remitente:".$nombre."
        E-mail:".$correo."
        Edad:".$edad."
        Mensaje:".$contenido."
        ";

        mail($para,$asunto,utf8_decode($mensaje));

        echo "<p><h2>Hemos recibido tu mensaje, pronto te contestaremos gracias. </h2></p>"
    ?>
</body>
</html>
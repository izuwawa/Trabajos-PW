<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Servicios</title>
        <style type="text/css">
  			h2{
  				font-family: fantasy;
  				color: goldenrod;
  			}
  			footer{
  				text-align: center;
  				color: black;
  				background: lightgray;
  				outline-width: 12px;
  			}
  			h4{
  				font-family: fantasy;
  				color: goldenrod;
  			}
  		</style>
    </head>
    <body>
    <nav class="navbar navbar-inverse">
  			<div class="container-fluid">
    			<div class="navbar-header">
      				<a class="navbar-brand" href="#">Photography KekiDai</a>
    			</div>
    			<ul class="nav navbar-nav">
      				<li class="active"><a href="/Practica1c_U4/index.html">Home</a></li>
					<li class="active"><a href="/Practica1c_U4/Listdsrv.php">Lista de Servicios</a></li>
    			</ul>
  			</div>
		</nav>
        <main>
        <div class="container" id="the">
            <h2>Lista de nuestros Servicios</h2>
        <?php
    echo "<br>";
    $arrayServicio=array("Sesion Boda","Sesion Food","Sesion friends","Sesion Family","Sesion XV","Sesion landscape","Sesion School","Sesion Exp","Sesion baby","Special Sesion");
    sort($arrayServicio);
    foreach($arrayServicio as $key=>$val){
        echo "Servicio[$key]=$val<br>";
    }
    ?>
    <br><br>
        </div>
        </main>
    <footer>
			<article>
				<p>&nbsp;</p>
				<h4>Si te gusta nuestro trabajo, ¡contactanos!</h4>
				<a href="#">Facebook</a>&nbsp;&nbsp;
				<a href="#">Twitter</a>&nbsp;&nbsp;
				<a href="#">Pinterest</a>&nbsp;&nbsp;
				<h4>Telefonos</h4>
				<p>(+52) 899345939</p>
				<p>(+01) 911876489</p>
				<h4>Direccion</h4>
				<p>Estado de bts, colonia rio roma, calle morat #5717</p>
				<p>&nbsp;</p>
				<h6>Sheila LIzeth Flores Acosta</h6>
				<p>&nbsp;</p>
			</article>
		</footer>
</body>
</html>
        
    </body>
</html>
